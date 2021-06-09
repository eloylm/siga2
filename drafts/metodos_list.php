<?php
	// Load the QCubed Development Framework
	require('../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Metodos class.  It uses the code-generated
	 * MetodosDataGrid control which has meta-methods to help with
	 * easily creating/defining Metodos columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both metodos_list.php AND
	 * metodos_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package SIGA
	 * @subpackage Drafts
	 */
	class MetodosListForm extends QForm {
		// Local instance of the Meta DataGrid to list Metodoses
		protected $dtgMetodoses;

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
			$this->dtgMetodoses = new MetodosDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgMetodoses->CssClass = 'datagrid';
			$this->dtgMetodoses->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgMetodoses->Paginator = new QPaginator($this->dtgMetodoses);
			$this->dtgMetodoses->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/metodos_edit.php';
			$this->dtgMetodoses->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for metodos's properties, or you
			// can traverse down QQN::metodos() to display fields that are down the hierarchy)
			$this->dtgMetodoses->MetaAddColumn('MetodoId');
			$this->dtgMetodoses->MetaAddColumn('Nombre');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// metodos_list.tpl.php as the included HTML template file
	MetodosListForm::Run('MetodosListForm');
?>