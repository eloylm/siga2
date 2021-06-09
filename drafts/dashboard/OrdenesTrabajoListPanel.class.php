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
	 * @package SIGA
	 * @subpackage Drafts
	 * 
	 */
	class OrdenesTrabajoListPanel extends QPanel {
		// Local instance of the Meta DataGrid to list OrdenesTrabajos
		public $dtgOrdenesTrabajos;

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
			$this->Template = 'OrdenesTrabajoListPanel.tpl.php';

			// Instantiate the Meta DataGrid
			$this->dtgOrdenesTrabajos = new OrdenesTrabajoDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgOrdenesTrabajos->CssClass = 'datagrid';
			$this->dtgOrdenesTrabajos->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgOrdenesTrabajos->Paginator = new QPaginator($this->dtgOrdenesTrabajos);
			$this->dtgOrdenesTrabajos->ItemsPerPage = 8;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$this->pxyEdit = new QControlProxy($this);
			$this->pxyEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyEdit_Click'));
			$this->dtgOrdenesTrabajos->MetaAddEditProxyColumn($this->pxyEdit, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for ordenes_trabajo's properties, or you
			// can traverse down QQN::ordenes_trabajo() to display fields that are down the hierarchy)
			$this->dtgOrdenesTrabajos->MetaAddColumn('OrdenesTrabajoId');
			$this->dtgOrdenesTrabajos->MetaAddColumn('FechaEntrada');
			$this->dtgOrdenesTrabajos->MetaAddColumn(QQN::OrdenesTrabajo()->Clientes);
			$this->dtgOrdenesTrabajos->MetaAddColumn('Cargador');
			$this->dtgOrdenesTrabajos->MetaAddColumn('Buque');
			$this->dtgOrdenesTrabajos->MetaAddColumn('Kg');
			$this->dtgOrdenesTrabajos->MetaAddColumn('Puerto');
			$this->dtgOrdenesTrabajos->MetaAddColumn('ReferenciaCliente');
			$this->dtgOrdenesTrabajos->MetaAddColumn('Destino');
			$this->dtgOrdenesTrabajos->MetaAddColumn(QQN::OrdenesTrabajo()->Muestras);
			$this->dtgOrdenesTrabajos->MetaAddColumn(QQN::OrdenesTrabajo()->Usuarios);
			$this->dtgOrdenesTrabajos->MetaAddColumn('New');
			$this->dtgOrdenesTrabajos->MetaAddColumn('Estado');
			$this->dtgOrdenesTrabajos->MetaAddColumn('Observaciones');
			$this->dtgOrdenesTrabajos->MetaAddColumn('FechaFinalizado');

			// Setup the Create New button
			$this->btnCreateNew = new QButton($this);
			$this->btnCreateNew->Text = QApplication::Translate('Create a New') . ' ' . QApplication::Translate('OrdenesTrabajo');
			$this->btnCreateNew->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCreateNew_Click'));
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
	}
?>