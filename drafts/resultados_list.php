<?php
	// Load the QCubed Development Framework
	require('../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Resultados class.  It uses the code-generated
	 * ResultadosDataGrid control which has meta-methods to help with
	 * easily creating/defining Resultados columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both resultados_list.php AND
	 * resultados_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package SIGA
	 * @subpackage Drafts
	 */
	class ResultadosListForm extends QForm {
		// Local instance of the Meta DataGrid to list Resultadoses
		protected $dtgResultadoses;

		// Create QForm Event Handlers as Needed

//		protected function Form_Exit() {}
//		protected function Form_Load() {}
//		protected function Form_PreRender() {}
//		protected function Form_Validate() {}

		protected function Form_Run() {
			// Security check for ALLOW_REMOTE_ADMIN
			// To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
			QApplication::CheckRemoteAdmin();
		}

		protected function Form_Create() {
			// Instantiate the Meta DataGrid
			$this->dtgResultadoses = new ResultadosDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgResultadoses->CssClass = 'datagrid';
			$this->dtgResultadoses->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgResultadoses->Paginator = new QPaginator($this->dtgResultadoses);
			$this->dtgResultadoses->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/resultados_edit.php';
			$this->dtgResultadoses->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

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
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// resultados_list.tpl.php as the included HTML template file
	ResultadosListForm::Run('ResultadosListForm');
?>