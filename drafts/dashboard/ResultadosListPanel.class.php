<?php
	/**
	 * This is the abstract Panel class for the List All functionality
	 * of the Resultados class.  This code-generated class
	 * contains a datagrid to display an HTML page that can
	 * list a collection of Resultados objects.  It includes
	 * functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QPanel which extends this ResultadosListPanelBase
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent re-
	 * code generation.
	 * 
	 * @package My Application
	 * @subpackage Drafts
	 * 
	 */
	class ResultadosListPanel extends QPanel {
		// Local instance of the Meta DataGrid to list Resultadoses
		public $dtgResultadoses;

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
			$this->Template = 'ResultadosListPanel.tpl.php';

			// Instantiate the Meta DataGrid
			$this->dtgResultadoses = new ResultadosDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgResultadoses->CssClass = 'datagrid';
			$this->dtgResultadoses->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgResultadoses->Paginator = new QPaginator($this->dtgResultadoses);
			$this->dtgResultadoses->ItemsPerPage = 8;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$this->pxyEdit = new QControlProxy($this);
			$this->pxyEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyEdit_Click'));
			$this->dtgResultadoses->MetaAddEditProxyColumn($this->pxyEdit, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for resultados's properties, or you
			// can traverse down QQN::resultados() to display fields that are down the hierarchy)
			$this->dtgResultadoses->MetaAddColumn('ResultadosId');
			$this->dtgResultadoses->MetaAddColumn(QQN::Resultados()->OrdenesTrabajo);
			$this->dtgResultadoses->MetaAddColumn(QQN::Resultados()->Analisis);
			$this->dtgResultadoses->MetaAddColumn('Estado');
			$this->dtgResultadoses->MetaAddColumn(QQN::Resultados()->Usuarios);
			$this->dtgResultadoses->MetaAddColumn('Fecha');
			$this->dtgResultadoses->MetaAddColumn('Norma');
			$this->dtgResultadoses->MetaAddColumn('Medicion');
			$this->dtgResultadoses->MetaAddColumn('Resultado');

			// Setup the Create New button
			$this->btnCreateNew = new QButton($this);
			$this->btnCreateNew->Text = QApplication::Translate('Create a New') . ' ' . QApplication::Translate('Resultados');
			$this->btnCreateNew->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCreateNew_Click'));
		}

		public function pxyEdit_Click($strFormId, $strControlId, $strParameter) {
			$strParameterArray = explode(',', $strParameter);
			$objEditPanel = new ResultadosEditPanel($this, $this->strCloseEditPanelMethod, $strParameterArray[0]);

			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}

		public function btnCreateNew_Click($strFormId, $strControlId, $strParameter) {
			$objEditPanel = new ResultadosEditPanel($this, $this->strCloseEditPanelMethod, null);
			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}
	}
?>