<?php
	/**
	 * This is the abstract Panel class for the List All functionality
	 * of the Usuarios class.  This code-generated class
	 * contains a datagrid to display an HTML page that can
	 * list a collection of Usuarios objects.  It includes
	 * functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QPanel which extends this UsuariosListPanelBase
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent re-
	 * code generation.
	 * 
	 * @package My Application
	 * @subpackage Drafts
	 * 
	 */
	class UsuariosListPanel extends QPanel {
		// Local instance of the Meta DataGrid to list Usuarioses
		public $dtgUsuarioses;

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
			$this->Template = 'UsuariosListPanel.tpl.php';

			// Instantiate the Meta DataGrid
			$this->dtgUsuarioses = new UsuariosDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgUsuarioses->CssClass = 'datagrid';
			$this->dtgUsuarioses->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgUsuarioses->Paginator = new QPaginator($this->dtgUsuarioses);
			$this->dtgUsuarioses->ItemsPerPage = 8;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$this->pxyEdit = new QControlProxy($this);
			$this->pxyEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyEdit_Click'));
			$this->dtgUsuarioses->MetaAddEditProxyColumn($this->pxyEdit, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for usuarios's properties, or you
			// can traverse down QQN::usuarios() to display fields that are down the hierarchy)
			$this->dtgUsuarioses->MetaAddColumn('UsuariosId');
			$this->dtgUsuarioses->MetaAddColumn('Usuario');
			$this->dtgUsuarioses->MetaAddColumn('Nombre');
			$this->dtgUsuarioses->MetaAddColumn('Email');
			$this->dtgUsuarioses->MetaAddColumn('Habilitado');
			$this->dtgUsuarioses->MetaAddColumn('Password');

			// Setup the Create New button
			$this->btnCreateNew = new QLinkButton($this);
			$this->btnCreateNew->Text = QApplication::Translate('Usuarios');
			$this->btnCreateNew->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCreateNew_Click'));
		}

		public function pxyEdit_Click($strFormId, $strControlId, $strParameter) {
			$strParameterArray = explode(',', $strParameter);
			$objEditPanel = new UsuariosEditPanel($this, $this->strCloseEditPanelMethod, $strParameterArray[0]);

			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}

		public function btnCreateNew_Click($strFormId, $strControlId, $strParameter) {
			$objEditPanel = new UsuariosEditPanel($this, $this->strCloseEditPanelMethod, null);
			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}
	}
?>