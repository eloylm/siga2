<?php
	/**
	 * This is the abstract Panel class for the List All functionality
	 * of the Clientes class.  This code-generated class
	 * contains a datagrid to display an HTML page that can
	 * list a collection of Clientes objects.  It includes
	 * functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QPanel which extends this ClientesListPanelBase
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent re-
	 * code generation.
	 * 
	 * @package My Application
	 * @subpackage Drafts
	 * 
	 */
	class ClientesListPanel extends QPanel {
		// Local instance of the Meta DataGrid to list Clienteses
		public $dtgClienteses;

		// Other public QControls in this panel
		public $btnCreateNew;
		public $pxyEdit;

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
			$this->Template = 'ClientesListPanel.tpl.php';

			// Instantiate the Meta DataGrid
			$this->dtgClienteses = new ClientesDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgClienteses->CssClass = 'datagrid';
			$this->dtgClienteses->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgClienteses->Paginator = new QPaginator($this->dtgClienteses);
			$this->dtgClienteses->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$this->pxyEdit = new QControlProxy($this);
			$this->pxyEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyEdit_Click'));
			$this->dtgClienteses->MetaAddEditProxyColumn($this->pxyEdit, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for clientes's properties, or you
			// can traverse down QQN::clientes() to display fields that are down the hierarchy)
			$this->dtgClienteses->MetaAddColumn('ClientesId');
			$clientes=$this->dtgClienteses->MetaAddColumn('Nombre');
                        $clientes->Filter = (QQ::ILike(QQN::Clientes()->Nombre, null));
                        $clientes->FilterPrefix = '%';
                        $clientes->FilterPostfix = '%';
                        $clientes->FilterBoxSize=15;
                        
			$this->dtgClienteses->MetaAddColumn('Telefono');
			$this->dtgClienteses->MetaAddColumn('Direccion');
			$this->dtgClienteses->MetaAddColumn('Localidad');
			$this->dtgClienteses->MetaAddColumn('Provincia');
			$this->dtgClienteses->MetaAddColumn('Email');
			//$this->dtgClienteses->MetaAddColumn('ResponsableContacto');
			//$this->dtgClienteses->MetaAddColumn('FechaAlta');
			$this->dtgClienteses->MetaAddColumn('Estado');
			//$this->dtgClienteses->MetaAddColumn('EmailSecundario');

			// Setup the Create New button
			$this->btnCreateNew = new QButton($this);
			$this->btnCreateNew->Text = QApplication::Translate('Create a New') . ' ' . QApplication::Translate('Clientes');
			$this->btnCreateNew->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCreateNew_Click'));
		}

		public function pxyEdit_Click($strFormId, $strControlId, $strParameter) {
			$strParameterArray = explode(',', $strParameter);
			$objEditPanel = new ClientesEditPanel($this, $this->strCloseEditPanelMethod, $strParameterArray[0]);

			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}

		public function btnCreateNew_Click($strFormId, $strControlId, $strParameter) {
			$objEditPanel = new ClientesEditPanel($this, $this->strCloseEditPanelMethod, null);
			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}
	}
?>