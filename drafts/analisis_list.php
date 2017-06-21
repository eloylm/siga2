<?php
	// Load the QCubed Development Framework
	require('../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Analisis class.  It uses the code-generated
	 * AnalisisDataGrid control which has meta-methods to help with
	 * easily creating/defining Analisis columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both analisis_list.php AND
	 * analisis_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class AnalisisListForm extends QForm {
		// Local instance of the Meta DataGrid to list Analisises
		protected $dtgAnalisises;

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
			$this->dtgAnalisises = new AnalisisDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgAnalisises->CssClass = 'datagrid';
			$this->dtgAnalisises->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgAnalisises->Paginator = new QPaginator($this->dtgAnalisises);
			$this->dtgAnalisises->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/analisis_edit.php';
			$this->dtgAnalisises->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for analisis's properties, or you
			// can traverse down QQN::analisis() to display fields that are down the hierarchy)
			$this->dtgAnalisises->MetaAddColumn('AnalisisId');
			$this->dtgAnalisises->MetaAddColumn('Nombre');
			$this->dtgAnalisises->MetaAddColumn('TiempoDemora');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// analisis_list.tpl.php as the included HTML template file
	AnalisisListForm::Run('AnalisisListForm');
?>