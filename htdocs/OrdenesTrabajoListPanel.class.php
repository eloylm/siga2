<?php
	/**
	 * This is the abstract Panel class for the List All functionality
	 * of the OrdenesTrabajo class.  This code-generated class
	 * contains a datagrid to display an HTML page that can
	 * list a collection of OrdenesTrabajo objects.  It includes
	 * functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QPanel which extends this OrdenesTrabajoListPanelBase
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent re-
	 * code generation.
	 * 
	 * @package My Application
	 * @subpackage Drafts
	 * 
	 */
class OrdenesTrabajoListPanel extends QPanel {
// Local instance of the Meta DataGrid to list OrdenesTrabajos
    public $dtgOrdenesTrabajos;

    // Other public QControls in this panel
    public $btnCreateNew;
    
    public $pxyEdit;
    public $pxyResultados;
    public $pxyImprimirNro;
    public $referenciaCliente;
    public $style;
    public $collEstado;


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
        $this->Template = 'OrdenesTrabajoListPanel.tpl.php';

        // Instantiate the Meta DataGrid
        $this->dtgOrdenesTrabajos = new OrdenesTrabajoDataGrid($this);
        $this->dtgOrdenesTrabajos->SetDataBinder('DataBinder', $this);

        // Style the DataGrid (if desired)
        $this->dtgOrdenesTrabajos->CssClass = 'datagridOT';
        $this->dtgOrdenesTrabajos->AlternateRowStyle->CssClass = 'alternate';

        // Add Pagination (if desired)
        $this->dtgOrdenesTrabajos->Paginator = new QPaginator($this->dtgOrdenesTrabajos);
        $this->dtgOrdenesTrabajos->ItemsPerPage = 15;
        $this->dtgOrdenesTrabajos->Paginator->LabelForNext = QApplication::Translate('Next');
        $this->dtgOrdenesTrabajos->Paginator->LabelForPrevious =QApplication::Translate('Previous');

        $this->dtgOrdenesTrabajos->FilterResetButtonShow = false;
        $this->dtgOrdenesTrabajos->btnFilter->Text = 'Buscar';


        // Use the MetaDataGrid functionality to add Columns for this datagrid

       
        // Create the Other Columns (note that you can use strings for ordenes_trabajo's properties, or you
        // can traverse down QQN::ordenes_trabajo() to display fields that are down the hierarchy)
        $ordenesTrabajoId=$this->dtgOrdenesTrabajos->MetaAddColumn('OrdenesTrabajoId','Name=Nro');
        $ordenesTrabajoId->Filter=(QQ::Equal(QQN::OrdenesTrabajo()->OrdenesTrabajoId, null));
        $ordenesTrabajoId->FilterBoxSize=2;
        $this->dtgOrdenesTrabajos->SortColumnIndex = 0;
        $this->dtgOrdenesTrabajos->SortDirection = 1;
        

        $fechaEntrada=$this->dtgOrdenesTrabajos->MetaAddColumn('FechaEntrada','Name=Fecha de Ingreso ');
        $fechaEntrada->Filter=(QQ::ILike(QQN::OrdenesTrabajo()->FechaEntrada, null));
        $fechaEntrada->FilterPrefix = '%';
        $fechaEntrada->FilterPostfix = '%';
        $fechaEntrada->FilterBoxSize=14;

        $muestras = $this->dtgOrdenesTrabajos->MetaAddColumn(QQN::OrdenesTrabajo()->Muestras);
        $muestras->Filter=(QQ::ILike(QQN::OrdenesTrabajo()->Muestras->Detalle, null));
        $muestras->FilterPrefix = '%';
        $muestras->FilterPostfix = '%';
        $muestras->FilterBoxSize=15;

        $clientes=$this->dtgOrdenesTrabajos->MetaAddColumn(QQN::OrdenesTrabajo()->Clientes->Nombre,'Name=Cliente');
        $clientes->Filter=(QQ::ILike(QQN::OrdenesTrabajo()->Clientes->Nombre, null));
        $clientes->FilterPrefix = '%';
        $clientes->FilterPostfix = '%';
        $clientes->FilterBoxSize=18;


        $cargador=$this->dtgOrdenesTrabajos->MetaAddColumn('Cargador');
        $cargador->Filter=(QQ::ILike(QQN::OrdenesTrabajo()->Cargador, null));
        $cargador->FilterPrefix = '%';
        $cargador->FilterPostfix = '%';
        $cargador->FilterBoxSize=6;

        //$cargador->FilterActivate(); //filtro que se ejecuta al cargar el DG

        $buque=$this->dtgOrdenesTrabajos->MetaAddColumn('Buque');
        $buque->Filter=(QQ::ILike(QQN::OrdenesTrabajo()->Buque, null));
        $buque->FilterPrefix = '%';
        $buque->FilterPostfix = '%';
        $buque->FilterBoxSize=4;


        //$this->dtgOrdenesTrabajos->MetaAddColumn('Kg');


        $puerto=$this->dtgOrdenesTrabajos->MetaAddColumn('Puerto');
        $puerto->Filter=(QQ::ILike(QQN::OrdenesTrabajo()->Puerto, null));
        $puerto->FilterPrefix = '%';
        $puerto->FilterPostfix = '%';
        $puerto->FilterBoxSize=4;

        $nroRef=$this->dtgOrdenesTrabajos->MetaAddColumn('ReferenciaCliente','Name=Nro de Ref');
        $nroRef->Filter=(QQ::ILike(QQN::OrdenesTrabajo()->ReferenciaCliente, null));
        $nroRef->FilterPrefix = '%';
        $nroRef->FilterPostfix = '%';
        $nroRef->FilterBoxSize=4;

        $destino=$this->dtgOrdenesTrabajos->MetaAddColumn('Destino');
        $destino->Filter=(QQ::ILike(QQN::OrdenesTrabajo()->Destino, null));
        $destino->FilterPrefix = '%';
        $destino->FilterPostfix = '%';
        $destino->FilterBoxSize=4;

        

//        $estado=$this->dtgOrdenesTrabajos->MetaAddColumn('Estado');
//        $estado->Filter=(QQ::ILike(QQN::OrdenesTrabajo()->Estado, null));
//
//        $estado->FilterPrefix = '%';
//        $estado->FilterPostfix = '%';
//        $estado->FilterBoxSize=4;
        if(($_SESSION['UsuarioRol']=='responsablecertificados')&&($_SESSION['EstadoOt']!='todos') ){
            //$_SESSION['EstadoOt']='Congelado';
            $this->traerPorEstado();
        }else {
            $this->traerPorEstado();
        }

        if ($_SESSION['UsuarioRol']=='responsablemuestras') {
            //Create an Edit Column
            $this->pxyEdit = new QControlProxy($this);
            $this->pxyEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyEdit_Click'));
            $this->dtgOrdenesTrabajos->MetaAddEditProxyColumn($this->pxyEdit, '<img alt=Editar title=Editar border=0 src='. __VIRTUAL_DIRECTORY__ .'/assets/images/editar.gif />', '');
            $this->pxyResultados = new QControlProxy($this);
            $this->pxyResultados->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxy_Resultados_Click'));
            $this->dtgOrdenesTrabajos->AddLinkColumn('index.php?action=resultados&', '<img alt=Resultados title=Resultados border=0 src='. __VIRTUAL_DIRECTORY__ .'/assets/images/resultados.gif />','', QMetaControlArgumentType::QueryString);
            $this->pxyImprimirNro = new QControlProxy($this);
            $this->pxyImprimirNro->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxy_Print_Click'));
            $this->dtgOrdenesTrabajos->AddLinkColumn('pdf.php?do=orden&action=resultados&format=doc&', '<img alt=Resultados title="Imprimir Nro" border=0 src='. __VIRTUAL_DIRECTORY__ .'/assets/images/printer.gif />','', QMetaControlArgumentType::QueryString);
            

        }else{
              //Create an Insert Resultados Column
              $this->pxyResultados = new QControlProxy($this);
              $this->pxyResultados->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxy_Resultados_Click'));
              $this->dtgOrdenesTrabajos->AddLinkColumn('index.php?action=resultados&', '<img alt=Resultados title=Resultados border=0 src='. __VIRTUAL_DIRECTORY__ .'/assets/images/resultados.gif />','', QMetaControlArgumentType::QueryString);
              $this->pxyImprimirNro = new QControlProxy($this);
        $this->pxyImprimirNro->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxy_Print_Click'));
        $this->dtgOrdenesTrabajos->AddLinkColumn('pdf.php?do=orden&action=resultados&format=doc&', '<img alt=Resultados title="Imprimir Nro" border=0 src='. __VIRTUAL_DIRECTORY__ .'/assets/images/printer.gif />','', QMetaControlArgumentType::QueryString);
        }
        

        $objStyle = $this->dtgOrdenesTrabajos->HeaderRowStyle;
        $objStyle->ForeColor = 'white';
        $objStyle->BackColor = '#006600';      

        // Setup the Create New button
        $this->btnCreateNew = new QLinkButton($this);
        $this->btnCreateNew->Text = QApplication::Translate('Orden de Trabajo');
        $this->btnCreateNew->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCreateNew_Click'));
        
    }


    protected function PaintGrid() {
    $ordenes=$this->dtgOrdenesTrabajos->DataSource;
    $i=0;
    foreach ($ordenes as $orden) {
        
        $objNewStyle = new QDataGridRowStyle();
        if ($orden->New == true) {
            $objNewStyle->FontBold = false;
            $objNewStyle->BackColor = '#72B83C';//'#8DCE70';
            $objNewStyle->ForeColor='#fff';
        } else {
           $objNewStyle->FontBold = false;
        }
        $this->dtgOrdenesTrabajos->OverrideRowStyle($i, $objNewStyle);
        
        $i++;
    }
  
}


  protected function traerPorEstadoCount($estado){
        $this->dtgOrdenesTrabajos->TotalItemCount = OrdenesTrabajo::QueryCount
            (QQ::AndCondition
            (QQ::Ilike(QQN::OrdenesTrabajo()->Estado, '%'.$estado.'%'),
            $this->dtgOrdenesTrabajos->Conditions));
    }

  protected function traerPorUsuarioCount() {
        $this->dtgOrdenesTrabajos->TotalItemCount = OrdenesTrabajo::QueryCount
            (QQ::AndCondition
            (QQ::Equal(QQN::OrdenesTrabajo()->UsuariosId, $_SESSION['idUsuario']),
              $this->dtgOrdenesTrabajos->Conditions)
            );
    }

  protected function traerTodosCount() {
        $this->dtgOrdenesTrabajos->TotalItemCount = OrdenesTrabajo::QueryCount
            ($this->dtgOrdenesTrabajos->Conditions);
    }

  public function traerPorEstado(){
        
       $estado=$this->dtgOrdenesTrabajos->MetaAddColumn('Estado');
       if(isset($_SESSION['EstadoOt'])){
           switch ($_SESSION['EstadoOt']){
               case 'Congelado' :   $estado->Filter=(QQ::ILike(QQN::OrdenesTrabajo()->Estado, 'Congelado'));
                                    $estado->FilterActivate();
                                    break;
               case 'En proceso' :  $estado->Filter=(QQ::ILike(QQN::OrdenesTrabajo()->Estado, 'En proceso'));
                                    $estado->FilterActivate();
                                    break;
               default:             $estado->Filter=(QQ::ILike(QQN::OrdenesTrabajo()->Estado, null));
           }
       }else {
       $estado->Filter=(QQ::ILike(QQN::OrdenesTrabajo()->Estado, null));
       }
       
       $estado->FilterPrefix = '%';
       $estado->FilterPostfix = '%';
       $estado->FilterBoxSize=4;

       return $estado;
    }

  protected function traerPorUsuario(){
        $this->dtgOrdenesTrabajos->DataSource = OrdenesTrabajo::QueryArray
            (QQ::AndCondition
            (QQ::Equal(QQN::OrdenesTrabajo()->Resultados->Analisis->UsuariosAnalisis->UsuariosId, $_SESSION['idUsuario']),
            $this->dtgOrdenesTrabajos->Conditions),
            QQ::Clause(
            $this->dtgOrdenesTrabajos->OrderByClause,
            $this->dtgOrdenesTrabajos->LimitClause,
            QQ::Distinct()
        ));
    }

  protected function traerTodos() {
        $this->dtgOrdenesTrabajos->DataSource = OrdenesTrabajo::QueryArray
            ($this->dtgOrdenesTrabajos->Conditions,
            QQ::Clause(
            $this->dtgOrdenesTrabajos->OrderByClause,
            $this->dtgOrdenesTrabajos->LimitClause
        ));
    }

    public function pxyEdit_Click($strFormId, $strControlId, $strParameter) {
        $strParameterArray = explode(',', $strParameter);
        $objEditPanel = new OrdenesTrabajoEditPanel($this, $this->strCloseEditPanelMethod, $strParameterArray[0]);

        $strMethodName = $this->strSetEditPanelMethod;
        $this->objForm->$strMethodName($objEditPanel);
    }

    public function btnCreateNew_Click($strFormId, $strControlId, $strParameter) {
        $objEditPanel = new OrdenesTrabajoEditPanel($this, $this->strCloseEditPanelMethod, null);
        $strMethodName = $this->strSetEditPanelMethod;
        $this->objForm->$strMethodName($objEditPanel);
    }

    public function DataBinder() {
    // Remember!  We need to first set the TotalItemCount, which will affect the calcuation of LimitClause below
        $ver = QApplication::QueryString('ver');
        if ($this->dtgOrdenesTrabajos->Paginator) {
            switch ($ver) {
                case 'activos':
                case 'enproceso':
                case 'enrevision';
                case 'terminado': $this->traerPorEstadoCount($ver);break;
                case 'todos': $this->traerTodosCount(); break;
                default:
                        if($_SESSION['UsuarioRol']=='analistas')
                            $this->traerPorUsuarioCount();
                        else
                            $this->traerTodosCount();
            }
        }

        // Setup the $objClauses Array
        $objClauses = array();

        // If a column is selected to be sorted, and if that column has a OrderByClause set on it, then let's add
        // the OrderByClause to the $objClauses array
        if ($objClause = $this->dtgOrdenesTrabajos->OrderByClause)
            array_push($objClauses, $objClause);

        // Add the LimitClause information, as well
        if ($objClause = $this->dtgOrdenesTrabajos->LimitClause)
            array_push($objClauses, $objClause);

        // Set the DataSource to be a Query result from OrdenesTrabajo, given the clauses above

        switch (QApplication::QueryString('ver')) {
            case 'activos':
            case 'enproceso':
            case 'enrevision';
            case 'terminado': $this->traerPorEstado($ver);break;
            case 'todos': $this->traerTodos(); break;
            default: 
                    if($_SESSION['UsuarioRol']=='analistas')
                            $this->traerPorUsuario();
                    else
                            $this->traerTodos();
        }

        // Setear estilo para las OT que no tengan nada resultados cargados
          $this->PaintGrid();
    }

}
?>
