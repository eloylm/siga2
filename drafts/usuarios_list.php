<?php
	// Load the QCubed Development Framework
	require('../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Usuarios class.  It uses the code-generated
	 * UsuariosDataGrid control which has meta-methods to help with
	 * easily creating/defining Usuarios columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both usuarios_list.php AND
	 * usuarios_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class UsuariosListForm extends QForm {
		// Local instance of the Meta DataGrid to list Usuarioses
		protected $dtgUsuarioses;

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
			$this->dtgUsuarioses = new UsuariosDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgUsuarioses->CssClass = 'datagrid';
			$this->dtgUsuarioses->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgUsuarioses->Paginator = new QPaginator($this->dtgUsuarioses);
			$this->dtgUsuarioses->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/usuarios_edit.php';
			$this->dtgUsuarioses->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for usuarios's properties, or you
			// can traverse down QQN::usuarios() to display fields that are down the hierarchy)
			$this->dtgUsuarioses->MetaAddColumn('UsuariosId');
			$this->dtgUsuarioses->MetaAddColumn('Usuario');
			$this->dtgUsuarioses->MetaAddColumn('Nombre');
			$this->dtgUsuarioses->MetaAddColumn('Email');
			$this->dtgUsuarioses->MetaAddColumn('Habilitado');
			$this->dtgUsuarioses->MetaAddColumn('Password');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// usuarios_list.tpl.php as the included HTML template file
	UsuariosListForm::Run('UsuariosListForm');
?>