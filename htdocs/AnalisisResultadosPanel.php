<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AnalisisResultadosPanel
 *
 * @author slack
 */
require('../includes/prepend.inc.php');


class AnalisisResultadosPanel extends QPanel {
    public $dtgResultados;
    public $txtResultados;

    public $lstEstado;
    public $lstMetodo;
    public $lstUnidad;

    public $btnSave;
    public $btnCancel;
    public $btnNew;
    public $dtrOrdenesTrabajo;
    public $btnCongelar;
    public $btnFirmar;

    public $lblOrdenesTrabajoId;
    public $lblFechaEntrada;
    public $lblCliente;
    public $lblCargador;
    public $lblBuque;
    public $lblKg;
    public $lblPuerto;
    public $lblReferenciaCliente;
    public $lblDestino;
    public $lblMuestra;
    public $lblNroMuestra;
    public $ReferenciaCliente;
    public $TotalItemCountMayorACero;
    public $intEditResultadosId = null;
    public $lblFechaFinalizado;
    // Callback Method Names

    protected $strSetEditPanelMethod;
    protected $strCloseEditPanelMethod;

    public function __construct($objParentObject, $strSetEditPanelMethod, $strCloseEditPanelMethod, $strControlId = null) {
    // Call the Parent
        try {
            parent::__construct($objParentObject, $strControlId);
        } catch (QCallerException $objExc) {
            $objExc->IncrementOffset();
            throw $objExc;
        }

        // Record Method Callbacks
        $this->strSetEditPanelMethod = $strSetEditPanelMethod;
        $this->strCloseEditPanelMethod = $strCloseEditPanelMethod;

        // Setup the Template
        $this->Template = 'AnalisisResultadosPanel.tpl.php';

        //Creo los labels para cargar los datos de la Orden de Trabajo

        $this->lblBuque = new QLabel($this);
        $this->lblCargador = New QLabel($this);
        $this->lblCliente = new QLabel($this);
        $this->lblDestino = new QLabel($this);
        $this->lblFechaEntrada = new QLabel($this);
        $this->lblKg = new QLabel($this);
        $this->lblMuestra  = new QLabel($this);
        $this->lblNroMuestra  = new QLabel($this);
        $this->lblOrdenesTrabajoId = new QLabel($this);
        $this->lblPuerto = new QLabel($this);
        $this->lblReferenciaCliente = new QLabel($this);
        $this->lblFechaFinalizado = new QLabel ($this);

        if (QApplication::QueryString('intOrdenesTrabajoId')) {
            $this->Load_DatosOrdenesTrabajo(QApplication::QueryString('intOrdenesTrabajoId'));
        }


        $this->btnCongelar = new QButton($this);
        $this->btnCongelar->Name = 'Congelar';
        $this->btnCongelar->Text = 'Congelar OT';
        $this->btnCongelar->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCongelar_Click'));
        $this->btnCongelar->Enabled = false;

        $this->btnFirmar = new QButton($this);
        $this->btnFirmar->Name = 'Firmar';
        $this->btnFirmar->Text = 'Firmar OT';
        $this->btnFirmar->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnFirmar_Click'));
        $this->btnFirmar->Enabled = false;

        $this->dtgResultados = new QFilteredDataGrid($this, 'dtgResultados');
        $this->dtgResultados->FilterShow=true;
        $this->dtgResultados->FilterResetButtonShow = false;
        $this->dtgResultados->btnFilter->Text ='Buscar';
        $this->dtgResultados->CssClass = 'datagrid';
        $this->dtgResultados->AlternateRowStyle->CssClass = 'alternate';
        $objStyle = $this->dtgResultados->HeaderRowStyle;
        $objStyle->ForeColor = 'white';
        $objStyle->BackColor = '#006600';
        $this->dtgResultados->AddAction(new QMouseOverEvent(), new QCssClassAction());
        $this->dtgResultados->AddAction(new QMouseOutEvent(), new QCssClassAction());
        // Enabling AJAX
        $this->dtgResultados->UseAjax = true;

        // Enable Pagination, and set to 5 items per page
        $objPaginator = new QPaginator($this->dtgResultados);
        $this->dtgResultados->Paginator = $objPaginator;
        $this->dtgResultados->ItemsPerPage = 20;

        // Let's create our ALTERNATE paginator
        $this->dtgResultados->PaginatorAlternate = new QPaginator($this->dtgResultados);

        $this->dtgResultados->SetDataBinder('dtgResultados_Bind',$this);


        $nombreAnalisis =new QFilteredDataGridColumn('Nombre', '<?= $_ITEM->Analisis->Nombre ?>', 'Width=200',
            array('OrderByClause' => QQ::OrderBy(QQN::Resultados()->Analisis->Nombre), 'ReverseOrderByClause' => QQ::OrderBy(QQN::Resultados()->Analisis->Nombre, false)));
        $nombreAnalisis->Filter = QQ::Ilike(QQN::Resultados()->Analisis->Nombre, null);
        $nombreAnalisis->FilterPrefix =  "%";
        $nombreAnalisis->FilterPostfix = "%";
        $nombreAnalisis->FilterBoxSize = 35;

        $this->dtgResultados->AddColumn($nombreAnalisis);


        $this->dtgResultados->AddColumn(new QDataGridColumn('Método', '<?= $_FORM->analisisResultadosPanel->Metodo_Render($_ITEM)?>', 'Width=200', 'HtmlEntities=false'
        ));

        $this->dtgResultados->AddColumn(new QDataGridColumn('Fecha de entrega', '<?= $_ITEM->Fecha; ?>', 'Width=200',
            array('OrderByClause' => QQ::OrderBy(QQN::Resultados()->Fecha), 'ReverseOrderByClause' => QQ::OrderBy(QQN::Resultados()->Fecha, false))));

        $this->dtgResultados->AddColumn(new QDataGridColumn('Resultado', '<?= $_FORM->analisisResultadosPanel->Resultados_Render($_ITEM)?>', 'Width=200', 'HtmlEntities=false',
            array('OrderByClause' => QQ::OrderBy(QQN::Resultados()->Resultado), 'ReverseOrderByClause' => QQ::OrderBy(QQN::Resultados()->Resultado, false))));

        $this->dtgResultados->AddColumn(new QDataGridColumn('Unidad', '<?= $_FORM->analisisResultadosPanel->Unidad_Render($_ITEM) ?>', 'Width=80','HtmlEntities=false' ));

        if($_SESSION['UsuarioRol']=='directortecnico') {
            $this->dtgResultados->AddColumn(new QDataGridColumn('Estado', '<?= $_FORM->analisisResultadosPanel->Estado_Render($_ITEM) ?>', 'Width=100','HtmlEntities=false',
                array('OrderByClause' => QQ::OrderBy(QQN::Resultados()->Estado), 'ReverseOrderByClause' => QQ::OrderBy(QQN::Resultados()->Estado, false))));
        }else {
            $this->dtgResultados->AddColumn(new QDataGridColumn('Estado', '<?= $_ITEM->Estado; ?>', 'Width=200',
                array('OrderByClause' => QQ::OrderBy(QQN::Resultados()->Estado), 'ReverseOrderByClause' => QQ::OrderBy(QQN::Resultados()->Estado, false))));
        }
        $this->dtgResultados->AddColumn(new QDataGridColumn('', '<?= $_FORM->analisisResultadosPanel->EditColumn_Render($_ITEM) ?>', 'Width=120', 'HtmlEntities=false'));


        // Let's pre-default the sorting by last name (column index #2)
        $this->dtgResultados->SortColumnIndex = 0;

        // Specify the Datagrid's Data Binder method

        // Because browsers will apply different styles/colors for LINKs
        // We must explicitly define the ForeColor for the HeaderLink.
        // The header row turns into links when the column can be sorted.
        $objStyle = $this->dtgResultados->HeaderLinkStyle;
        $objStyle->ForeColor = 'white';

        $this->txtResultados = new QTextBox($this->dtgResultados);
        $this->txtResultados->Required = true;
        $this->txtResultados->MaxLength = 50;
        $this->txtResultados->Width = 200;
        $this->txtResultados->AddAction(new QEscapeKeyEvent(), new QAjaxControlAction($this,'btnCancel_Click'));
        $this->txtResultados->AddAction(new QEscapeKeyEvent(), new QTerminateAction());

        $this->lstMetodo = new QListBox($this->dtgResultados);
        $this->lstMetodo->Required = true;
        $this->lstMetodo->Width = 200;
        $this->lstMetodo->AddAction(new QEscapeKeyEvent(), new QAjaxControlAction($this,'btnCancel_Click'));
        $this->lstMetodo->AddAction(new QEscapeKeyEvent(), new QTerminateAction());

        $this->lstUnidad = new QListBox($this->dtgResultados);
        $this->lstUnidad->Required = true;
        $this->lstUnidad->Width = 80;
        $this->lstUnidad->AddAction(new QEscapeKeyEvent(), new QAjaxControlAction($this,'btnCancel_Click'));
        $this->lstUnidad->AddAction(new QEscapeKeyEvent(), new QTerminateAction());

        $this->lstEstado = new QListBox($this->dtgResultados);
        $this->lstEstado->AddItem('Activo', 'Activo');
        $this->lstEstado->AddItem('En Proceso', 'En Proceso');
        $this->lstEstado->AddItem('En Revision', 'En Revision');
        $this->lstEstado->AddItem('Terminado', 'Terminado');
        $this->lstEstado->Required = true;
        $this->lstEstado->Width = 100;
        $this->lstEstado->AddAction(new QEscapeKeyEvent(), new QAjaxControlAction($this,'btnCancel_Click'));
        $this->lstEstado->AddAction(new QEscapeKeyEvent(), new QTerminateAction());


        $this->btnSave = new QButton($this->dtgResultados);
        $this->btnSave->Text = QApplication::Translate('Save');
        $this->btnSave->AddAction(new QClickEvent(), new QAjaxControlAction($this,'btnSave_Click'));
        $this->btnSave->PrimaryButton = true;
        $this->btnSave->CausesValidation = true;

        // Make sure we turn off validation on the Cancel button
        $this->btnCancel = new QButton($this->dtgResultados);
        $this->btnCancel->Text = QApplication::Translate('Cancel');
        $this->btnCancel->AddAction(new QClickEvent(), new QAjaxControlAction($this,'btnCancel_Click'));
        $this->btnCancel->CausesValidation = false;


    }

    public function Load_DatosOrdenesTrabajo($intOrdenesTrabajoId) {

        $objOrdenesTrabajo = OrdenesTrabajo::Load($intOrdenesTrabajoId);

        $arrResultados = Resultados::LoadArrayByOrdenesTrabajoId($intOrdenesTrabajoId,QQ::OrderBy(QQN::Resultados()->Analisis->Nombre, true));
        $countResultados =  Resultados::CountByOrdenesTrabajoIdAndEstado($intOrdenesTrabajoId, 'En proceso');

        if ($countResultados >0) {
            if ($objOrdenesTrabajo->Estado == 'Activo')
            $objOrdenesTrabajo->Estado = 'En proceso';
        }

      
        foreach ($arrResultados as $key=> $resultado) {
            $_SESSION[$key]['analisis'] = $resultado->Analisis->Nombre;
            $_SESSION[$key]['fecha'] = $resultado->Fecha;
            $_SESSION[$key]['resultado']= $resultado->Resultado;
            $_SESSION[$key]['norma']= $resultado->Norma;
            $_SESSION[$key]['medicion']= $resultado->Medicion;
            
        }

        $this->lblBuque->Text = $objOrdenesTrabajo->Buque;
        $this->lblCargador->Text = $objOrdenesTrabajo->Cargador;
        $this->lblCliente->Text = $objOrdenesTrabajo->Clientes->Nombre;
        $this->lblDestino->Text = $objOrdenesTrabajo->Destino;
        $this->lblFechaEntrada->Text = $objOrdenesTrabajo->FechaEntrada->__toString();
        $this->lblKg->Text = $objOrdenesTrabajo->Kg;
        $this->lblMuestra->Text  = $objOrdenesTrabajo->Muestras->Detalle;
        $this->lblOrdenesTrabajoId->Text = $objOrdenesTrabajo->OrdenesTrabajoId;
        $this->lblPuerto->Text = $objOrdenesTrabajo->Puerto;
        $this->lblReferenciaCliente->Text = $objOrdenesTrabajo->ReferenciaCliente;
        $this->lblNroMuestra->Text = $objOrdenesTrabajo->MuestrasId;
        if(isset($objOrdenesTrabajo->FechaFinalizado)){
            $this->lblFechaFinalizado->Text = $objOrdenesTrabajo->FechaFinalizado->__toString();
        }
        $objOrdenesTrabajo->New = false;

        $_SESSION['Buque'] = $objOrdenesTrabajo->Buque;
        $_SESSION['Cargador'] = $objOrdenesTrabajo->Cargador;
        $_SESSION['Cliente'] = $objOrdenesTrabajo->Clientes->Nombre;
        $_SESSION['ClienteDireccion']=$objOrdenesTrabajo->Clientes->Direccion;
        $_SESSION['Destino'] = $objOrdenesTrabajo->Destino;
        $_SESSION['FechaEntrada'] = $objOrdenesTrabajo->FechaEntrada->__toString();
        $_SESSION['Kg'] = $objOrdenesTrabajo->Kg;
        $_SESSION['Muestra']  = $objOrdenesTrabajo->Muestras->Detalle;
        $_SESSION['MuestraObservaciones']  = $objOrdenesTrabajo->Muestras->Observaciones;
        //$_SESSION['MuestraFechas']  = $objOrdenesTrabajo->Muestras->;
        $_SESSION['OrdenesTrabajoId'] = $objOrdenesTrabajo->OrdenesTrabajoId;
        $_SESSION['Puerto'] = $objOrdenesTrabajo->Puerto;
        $_SESSION['ReferenciaCliente'] = $objOrdenesTrabajo->ReferenciaCliente;
        $_SESSION['NroMuestra']= $objOrdenesTrabajo->MuestrasId;
        if(isset($objOrdenesTrabajo->FechaFinalizado)){
            $_SESSION['FechaFinalizado'] = $objOrdenesTrabajo->FechaFinalizado->__toString();
        }
        $objOrdenesTrabajo->Save();

    }

    public function dtrOrdenesTrabajo_Bind() {
    // Specify the Total Item Count and Load in the Data Source
    //$intOrdenesTrabajoId = QApplication::QueryString('intOrdenesTrabajoId');
    //$this->dtrOrdenesTrabajo->TotalItemCount = Resultados::CountByOrdenesTrabajoId($intOrdenesTrabajoId);
        $this->dtrOrdenesTrabajo->DataSource = OrdenesTrabajo::LoadAll();
    }

    public function dtgResultados_Bind() {
    // Specify the Total Item Count and Load in the Data Source
        $intOrdenesTrabajoId = QApplication::QueryString('intOrdenesTrabajoId');
        $this->dtgResultados->TotalItemCount = Resultados::QueryCount(QQ::AndCondition($this->dtgResultados->Conditions,
            QQ::Equal(QQN::Resultados()->OrdenesTrabajoId, $intOrdenesTrabajoId)));

        $this->dtgResultados->DataSource = Resultados::QueryArray
            (QQ::AndCondition
            (QQ::Equal(QQN::Resultados()->OrdenesTrabajoId, $intOrdenesTrabajoId),
            $this->dtgResultados->Conditions),
            QQ::Clause(
            $this->dtgResultados->OrderByClause,
            $this->dtgResultados->LimitClause
        ));
    $this->TotalItemCountMayorACero = Resultados::QueryCount(
            QQ::AndCondition($this->dtgResultados->Conditions,
            QQ::Equal(QQN::Resultados()->OrdenesTrabajoId, $intOrdenesTrabajoId),
            QQ::IsNotNull(QQN::Resultados()->Resultado)
            ));
        if($this->TotalItemCountMayorACero>0){
            $_SESSION['resultados'] = true ;
           $this->btnCongelar->Enabled = true;
           $this->btnFirmar->Enabled = true;
        }else {
             $_SESSION['resultados'] = false ;
           $this->btnCongelar->Enabled = false;
           $this->btnFirmar->Enabled = false;
        }
    }

    public function Form_PreRender() {
        $this->dtgResultados->Refresh();
        
    }

    public function Metodo_Render(Resultados $objResultados) {
        if (($objResultados->ResultadosId == $this->intEditResultadosId) ||
            (($this->intEditResultadosId == -1) && (!$objResultados->ResultadosId))) {

            $objMetodos = Metodos::LoadArrayByAnalisis($objResultados->AnalisisId);
            $this->lstMetodo->RemoveAllItems(); //Fix para que cada vez que se cancela o se selecciona un item no se recargue el mismo
            if ($objMetodos) foreach ($objMetodos as $objMetodo) {
                    $this->lstMetodo->AddItem($objMetodo->Nombre, $objMetodo->Nombre);
                }
            $this->lstMetodo->SelectedValue = $objResultados->Norma;
            return $this->lstMetodo->RenderWithError(false);
        }
        else
        // Because we are rendering with HtmlEntities set to false on this column
        // we need to make sure to escape the value
            return QApplication::HtmlEntities($objResultados->Norma);
    }

    public function Unidad_Render(Resultados $objResultados) {
        if (($objResultados->ResultadosId == $this->intEditResultadosId) ||
            (($this->intEditResultadosId == -1) && (!$objResultados->ResultadosId))) {

            $objUnidades = Unidades::LoadArrayByAnalisis($objResultados->AnalisisId);
            $this->lstUnidad->RemoveAllItems(); //Fix para que cada vez que se cancela o se selecciona un item no se recargue el mismo
            if ($objUnidades) foreach ($objUnidades as $objUnidad) {

                    $this->lstUnidad->AddItem($objUnidad->Nombre, $objUnidad->Nombre);
                }
            $this->lstUnidad->SelectedValue = $objResultados->Medicion;

            return $this->lstUnidad->RenderWithError(false);
        }
        else
        // Because we are rendering with HtmlEntities set to false on this column
        // we need to make sure to escape the value
            return QApplication::HtmlEntities($objResultados->Medicion);
    }

    public function Estado_Render(Resultados $objResultados) {
        if (($objResultados->ResultadosId == $this->intEditResultadosId) ||
            (($this->intEditResultadosId == -1) && (!$objResultados->ResultadosId)))
            return $this->lstEstado->RenderWithError(false);
        else
        // Because we are rendering with HtmlEntities set to false on this column
        // we need to make sure to escape the value
            return QApplication::HtmlEntities($objResultados->Estado);
    }

    public function Resultados_Render(Resultados $objResultados) {
        if (($objResultados->ResultadosId == $this->intEditResultadosId) ||
            (($this->intEditResultadosId == -1) && (!$objResultados->ResultadosId)))
            return $this->txtResultados->RenderWithError(false);
        else
        // Because we are rendering with HtmlEntities set to false on this column
        // we need to make sure to escape the value
            return QApplication::HtmlEntities($objResultados->Resultado);
    }

    public function EditColumn_Render(Resultados $objResultados) {
        if (($objResultados->ResultadosId == $this->intEditResultadosId) ||
            (($this->intEditResultadosId == -1) && (!$objResultados->ResultadosId)))

            return $this->btnSave->Render(false) . '&nbsp;' . $this->btnCancel->Render(false);
        else {
        // Get the Edit button for this row (we will create it if it doesn't yet exist)
            $strControlId = 'btnEdit' . $objResultados->ResultadosId;
            $btnEdit = $this->objForm->GetControl($strControlId);
            if (!$btnEdit) {
            // Create the Edit button for this row in the DataGrid
            // Use ActionParameter to specify the ID of the person
                $btnEdit = new QButton($this->dtgResultados, $strControlId);
                $btnEdit->Text = 'Ingresar';
                $btnEdit->ActionParameter = $objResultados->ResultadosId;
                $btnEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnEdit_Click'));
                $btnEdit->CausesValidation = false;
            }

            // If we are currently editing a person, then set this Edit button to be disabled
            if (($this->intEditResultadosId)||
                (($objResultados->Estado=='Terminado')&& $_SESSION['UsuarioRol']!='directortecnico')||
                $_SESSION['UsuarioRol']=='responsablecertificados' || $_SESSION['UsuarioRol']=='responsablemuestras' ) {
                $btnEdit->Enabled = false;
            }else {
                $btnEdit->Enabled = true;
            }
            // Return the rendered Edit button
            return $btnEdit->Render(false);
        }
    }

    public function btnEdit_Click($strFormId, $strControlId, $strParameter) {
        $this->intEditResultadosId = $strParameter;
        $objResultados = Resultados::Load($strParameter);
        $this->txtResultados->Text = $objResultados->Resultado;
        $this->MarkAsModified();
        // Let's put the focus on the Resultado Textbox
        QApplication::ExecuteJavaScript(sprintf('qcodo.getControl("%s").focus()', $this->txtResultados->ControlId));
    }

    public function btnSave_Click($strFormId, $strControlId, $strParameter) {
        if ($this->intEditResultadosId == -1)
            $objResultados = new Resultados();
        else
            $objResultados = Resultados::Load($this->intEditResultadosId);

        $objResultados->Resultado = trim($this->txtResultados->Text);
        $objResultados->Medicion = trim($this->lstUnidad->SelectedValue);
        $objResultados->Norma = trim($this->lstMetodo->SelectedValue);
        if($objResultados->Resultado!=0){
            $intOrdenesTrabajoId = QApplication::QueryString('intOrdenesTrabajoId');
            $objOrdenesTrabajo = OrdenesTrabajo::LoadByOrdenesTrabajoId($intOrdenesTrabajoId);
            if($objOrdenesTrabajo->Estado == 'Activo') {
                $objOrdenesTrabajo->Estado = 'En proceso';
                $objOrdenesTrabajo->Save();
            }
        }
        if($_SESSION['UsuarioRol']=='directortecnico') {
            $objResultados->Estado = $this->lstEstado->SelectedValue;
        }else {
            $objResultados->Estado = 'En Proceso';
        }
        $objResultados->Save();
        $this->intEditResultadosId = null;
    }

    // Handle the action for the Cancel button being clicked.
    public function btnCancel_Click($strFormId, $strControlId, $strParameter) {
        $this->intEditResultadosId = null;
    }

    public function btnCongelar_Click($strFormId, $strControlId, $strParameter) {
        $objOrdenes = OrdenesTrabajo::LoadByOrdenesTrabajoId(QApplication::QueryString('intOrdenesTrabajoId'));
        $objOrdenes->FechaFinalizado = new QDateTime(date('Y-m-j'));
        $objOrdenes->Estado = 'Congelado';
        $objOrdenes->Save();
        $arrResultados = Resultados::LoadArrayByOrdenesTrabajoId(QApplication::QueryString('intOrdenesTrabajoId'));

        foreach ($arrResultados as $resultado) {
            $resultado->Estado='Terminado';
            $resultado->Save();
        }
        


        $this->CloseSelf(false);
    }
    public function btnFirmar_Click($strFormId, $strControlId, $strParameter) {
        $objOrdenes = OrdenesTrabajo::LoadByOrdenesTrabajoId(QApplication::QueryString('intOrdenesTrabajoId'));
        $objOrdenes->Estado = 'Firmado';
        $objOrdenes->Save();

        $this->CloseSelf(true);
    }
    protected function CloseSelf($blnChangesMade) {
        $strMethod = $this->strCloseEditPanelMethod;
        $this->objForm->$strMethod($blnChangesMade);

    }

}


?>
