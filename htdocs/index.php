<?php
ini_set('memory_limit','128M');
// Include prepend.inc to load Qcubed
require('../includes/prepend.inc.php');

// Security check for ALLOW_REMOTE_ADMIN
// To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
QApplication::CheckRemoteAdmin();

if (!isset($_SESSION['User'])) {
    QApplication::Redirect('login.php');
    $objUser = unserialize($_SESSION['User']);
    if (!($objUser instanceof Usuarios)) {
        QApplication::Redirect('login.php');
    }
}
// make sure no errors occured in translation and the session's User variable is a user object


// Let's "magically" determine the list of genereated Class Panel Drafts by
// just traversing through this directory, looking for "*ListPanel.class.php" and "*EditPanel.class.php"

// Obviously, if you are wanting to make your own dashbaord, you should change this and use more
// hard-coded means to determine which classes' paneldrafts you want to include/use in your dashboard.
$objDirectory = opendir(dirname(__FILE__));
$strClassNameArray = array();
while ($strFile = readdir($objDirectory)) {
    if ($intPosition = strpos($strFile, 'ListPanel.class.php')) {
        $strClassName = substr($strFile, 0, $intPosition);
        $strClassNameArray[$strClassName] = $strClassName . 'ListPanel';
        require($strClassName . 'ListPanel.class.php');
        require($strClassName . 'EditPanel.class.php');
    }
}

require('AnalisisResultadosPanel.php');

class Dashboard extends QForm {

    protected $pnlTitle;
    protected $pnlList;
    protected $pnlEdit;
    protected $strController;
    protected $strAction;
    protected $dtgResultados;
    public $analisisResultadosPanel;
    protected $logOut;
    public $ReferenciaCliente;
    protected $objMuestrasCreateNew;
    protected $objUsuariosCreateNew;
    protected $objOrdenesCreateNew;
    protected $lnkTodosAnalisis;
    protected $lnkMisAnalisis;
    public $bntRefresh;
    protected $lnkVerUsuarios;
    protected $lnkVerMuestras;
    protected $lblNombreUsuario;
    protected $lnkVerTerminados;
    protected $lnkVerEnProceso;
    protected $lnkVerEnRevision;
    protected $lnkVerActivos;
    protected $lnkVerCongeladas;
    protected $lnkVolver;
    protected $lnkNuevoEnsayo;
    protected $lnkNuevoCliente;

   
    protected function Dispatcher() {
        $this->strController = QApplication::QueryString('controller');
        $this->strAction = QApplication::QueryString('action');

        if($this->strController ==='') {
            $this->strController=null;
        }

        if($this->strAction ==='') {
            $this->strAction=null;
        }

        $strClassName = 'OrdenesTrabajoListPanel';


        switch ($this->strAction) {
            case 'salir':
                session_destroy();
                QApplication::Redirect('login.php');
                break;
            case 'resultados':
                $this->analisisResultadosPanel->Visible = true;
                $this->pnlEdit->Visible = false;
                $this->pnlList->Visible = false;
                break;

            case 'Muestras':
                $strClassName = 'MuestrasListPanel';
                break;
            case 'Usuarios':
                $strClassName = 'UsuariosListPanel';
                break;
            case 'Analisis':
                $strClassName = 'AnalisisListPanel';
                break;
            case 'Metodos':
                $strClassName = 'MetodosListPanel';
                break;
            case 'Unidades':
                $strClassName = 'UnidadesListPanel';
                break;
             case 'Clientes':
                $strClassName = 'ClientesListPanel';
                break;

            default:
                break;
        }


        return $strClassName;
    }

    protected function Form_Create() {
        $this->pnlTitle = new QPanel($this);
        $this->pnlTitle->Text = 'AJAX Dashboard';

        $this->pnlList = new QPanel($this, 'pnlList');
        $this->pnlList->AutoRenderChildren = true;

        $this->pnlEdit = new QPanel($this, 'pnlEdit');
        $this->pnlEdit->AutoRenderChildren = true;
        $this->pnlEdit->Visible = false;

        $this->analisisResultadosPanel = new AnalisisResultadosPanel($this, '', 'CloseEditPane','AnalisisResultadosPanel');
        $this->analisisResultadosPanel->AutoRenderChildren = false;
        $this->analisisResultadosPanel->Visible = false;


        $strClassName =$this->Dispatcher();

        $objNewPanel = new $strClassName($this->pnlList, 'SetEditPane', 'CloseEditPane');

        global $strClassNameArray;

        $this->objDefaultWaitIcon = new QWaitIcon($this);
        $this->objDefaultWaitIcon->AddCssClass('logout');
        $this->objDefaultWaitIcon->AddCssClass('marginTitleBar');

        $this->objMuestrasCreateNew = new MuestrasListPanel($this, 'SetEditPane', 'CloseEditPane');
        $this->objMuestrasCreateNew->btnCreateNew;

        $this->objUsuariosCreateNew = new UsuariosListPanel($this, 'SetEditPane','CloseEditPane');
        $this->objUsuariosCreateNew->btnCreateNew;

        $this->objOrdenesCreateNew = new OrdenesTrabajoListPanel($this, 'SetEditPane', 'CloseEditPane');
        $this->objOrdenesCreateNew->btnCreateNew;

        $this->lnkTodosAnalisis = new QButton($this);
        $this->lnkTodosAnalisis->Text = 'Todos los Analisis';
        $this->lnkTodosAnalisis->AddAction(new QClickEvent(), new QAjaxAction('lnkTodosAnalisis_Click'));

        $this->lnkMisAnalisis = new QButton($this);
        $this->lnkMisAnalisis->Text = 'Mis Analisis';
        $this->lnkMisAnalisis->AddAction(new QClickEvent(), new QAjaxAction('lnkMisAnalisis_Click'));

        $this->lnkNuevoEnsayo = new QLinkButton($this);
        $this->lnkNuevoEnsayo->Text = 'Nuevo Ensayo';
        $this->lnkNuevoEnsayo->AddAction(new QClickEvent(), new QAjaxAction('lnkNuevoEnsayo_Click'));

        $this->lnkNuevoCliente = new QLinkButton($this);
        $this->lnkNuevoCliente->Text = 'Nuevo Cliente';
        $this->lnkNuevoCliente->AddAction(new QClickEvent(), new QAjaxAction('lnkNuevoCliente_Click'));

        $this->lnkVerMuestras = new QLinkButton($this);
        $this->lnkVerMuestras->Text = 'Muestras';
        $this->lnkVerMuestras->AddAction(new QClickEvent(), new QAjaxAction('lnkVerMuestras_Click'));

        $this->lnkVerCongeladas = new QLinkButton($this);
        $this->lnkVerCongeladas->Text = 'OT Congeladas';
        $this->lnkVerCongeladas->AddAction(new QClickEvent(), new QAjaxAction('lnkVerCongelado_Click'));


        $this->lnkVerEnProceso = new QLinkButton($this);
        $this->lnkVerEnProceso->Text = 'OT en Proceso';
        $this->lnkVerEnProceso->AddAction(new QClickEvent(), new QAjaxAction('lnkVerEnProceso_Click'));

        $this->bntRefresh = new QButton($this);
        $this->bntRefresh->Text = 'Refrescar';
        $this->bntRefresh->AddAction(new QClickEvent(), new QAjaxAction('bntRefresh_Click'));

        $this->lblNombreUsuario = new QLabel($this);
        $this->lblNombreUsuario->Name = 'nombreUsuario';
        $this->lblNombreUsuario->Text = $_SESSION['Usuario'];

        $this->lnkVolver = new QLinkButton($this);
        $this->lnkVolver->Name = 'Volver';
        $this->lnkVolver->Text = 'Volver';
        $this->lnkVolver->AddAction(new QClickEvent(), new QAjaxAction('lnkVolver_Click'));

        if(QApplication::QueryString('action')!='resultados'){
             QApplication::ExecuteJavaScript("self.setInterval(\"qc.pA('" . $this->strFormId . "', '" .
             $this->bntRefresh->ControlId . "', 'QClickEvent','','')\", 60000);");
        }
        
    }

    protected function lnkNuevoCliente_Click() {
        QRequestMode::Ajax;
        QApplication::Redirect('index.php?action=Clientes');
    }

    protected function lnkNuevoEnsayo_Click() {
        QRequestMode::Ajax;
        QApplication::Redirect('index.php?action=Analisis');
    }

    protected function lnkVolver_Click() {
        QRequestMode::Ajax;
        QApplication::Redirect('index.php');
    }
    protected function lnkVerCongelado_Click() {
         $_SESSION['EstadoOt'] = 'Congelado';
         QApplication::Redirect('index.php');
    }
    protected function lnkVerEnProceso_Click() {
         $_SESSION['EstadoOt'] = 'En Proceso';
         QApplication::Redirect('index.php');
    }
    protected function lnkVerMuestras_Click() {
        QRequestMode::Ajax;
        QApplication::Redirect('index.php?action=Muestras');
    }
    protected function lnkTodosAnalisis_Click() {
        $_SESSION['EstadoOt']='todos';
        QRequestMode::Ajax;
        QApplication::Redirect('index.php?ver=todos');
    }

    protected function lnkMisAnalisis_Click() {
        $_SESSION['EstadoOt']='';
        QRequestMode::Ajax;
        QApplication::Redirect('index.php');
    }

    protected function bntRefresh_Click () {
        $this->pnlList->Refresh();
    }
    /**
     * This Form_Validate event handler allows you to specify any custom Form Validation rules.
     * It will also Blink() on all invalid controls, as well as Focus() on the top-most invalid control.
     */
    protected function Form_Validate() {
    // By default, we report that Custom Validations passed
        $blnToReturn = true;

        // Custom Validation Rules
        // TODO: Be sure to set $blnToReturn to false if any custom validation fails!

        $blnFocused = false;
        foreach ($this->GetErrorControls() as $objControl) {
        // Set Focus to the top-most invalid control
            if (!$blnFocused) {
                $objControl->Focus();
                $blnFocused = true;
            }

            // Blink on ALL invalid controls
            $objControl->Blink();
        }

        return $blnToReturn;
    }



    public function SetListPane(QPanel $objPanel) {
        $this->pnlList->RemoveChildControls(true);
        $objPanel->SetParentControl($this->pnlList);
    }

    public function CloseEditPane($blnUpdatesMade) {
    // Close the Edit Pane
        $this->pnlEdit->RemoveChildControls(true);
        $this->analisisResultadosPanel->Visible = false;
        $this->pnlEdit->Visible = false;
        $this->pnlList->Visible = true;

        // If updates were made, let's "brute force" the updates to the screen by just refreshing the list pane altogether
        if ($blnUpdatesMade)
            $this->pnlList->Refresh();
    }

    public function SetEditPane(QPanel $objPanel = null) {
        $this->pnlEdit->RemoveChildControls(true);
        if ($objPanel) {
            $objPanel->SetParentControl($this->pnlEdit);
            $this->pnlEdit->Visible = true;
            $this->pnlList->Visible = false;
            $this->analisisResultadosPanel->Visible = false;
        } else {
            $this->pnlEdit->Visible = false;
        }
    }

    public function Form_PreRender() {
        $this->analisisResultadosPanel->dtgResultados->Refresh();

    }
}
Dashboard::Run('Dashboard');
?>