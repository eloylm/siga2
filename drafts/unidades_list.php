<?php
	// Load the QCubed Development Framework
	require('../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Unidades class.  It uses the code-generated
	 * UnidadesDataGrid control which has meta-methods to help with
	 * easily creating/defining Unidades columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both unidades_list.php AND
	 * unidades_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package SIGA
	 * @subpackage Drafts
	 */
	class UnidadesListForm extends QForm {
		// Local instance of the Meta DataGrid to list Unidadeses
		protected $dtgUnidadeses;

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
			$this->dtgUnidadeses = new UnidadesDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgUnidadeses->CssClass = 'datagrid';
			$this->dtgUnidadeses->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgUnidadeses->Paginator = new QPaginator($this->dtgUnidadeses);
			$this->dtgUnidadeses->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/unidades_edit.php';
			$this->dtgUnidadeses->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for unidades's properties, or you
			// can traverse down QQN::unidades() to display fields that are down the hierarchy)
			$this->dtgUnidadeses->MetaAddColumn('UnidadId');
			$this->dtgUnidadeses->MetaAddColumn('Nombre');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// unidades_list.tpl.php as the included HTML template file
	UnidadesListForm::Run('UnidadesListForm');
?>