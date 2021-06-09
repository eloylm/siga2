<?php
	// Load the QCubed Development Framework
	require('../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Clientes class.  It uses the code-generated
	 * ClientesDataGrid control which has meta-methods to help with
	 * easily creating/defining Clientes columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both clientes_list.php AND
	 * clientes_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package SIGA
	 * @subpackage Drafts
	 */
	class ClientesListForm extends QForm {
		// Local instance of the Meta DataGrid to list Clienteses
		protected $dtgClienteses;

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
			$this->dtgClienteses = new ClientesDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgClienteses->CssClass = 'datagrid';
			$this->dtgClienteses->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgClienteses->Paginator = new QPaginator($this->dtgClienteses);
			$this->dtgClienteses->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/clientes_edit.php';
			$this->dtgClienteses->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for clientes's properties, or you
			// can traverse down QQN::clientes() to display fields that are down the hierarchy)
			$this->dtgClienteses->MetaAddColumn('ClientesId');
			$this->dtgClienteses->MetaAddColumn('Nombre');
			$this->dtgClienteses->MetaAddColumn('Direccion');
			$this->dtgClienteses->MetaAddColumn('Localidad');
			$this->dtgClienteses->MetaAddColumn('Provincia');
			$this->dtgClienteses->MetaAddColumn('Email');
			$this->dtgClienteses->MetaAddColumn('ResponsableContacto');
			$this->dtgClienteses->MetaAddColumn('FechaAlta');
			$this->dtgClienteses->MetaAddColumn('Estado');
			$this->dtgClienteses->MetaAddColumn('EmailSecundario');
			$this->dtgClienteses->MetaAddColumn('Telefono');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// clientes_list.tpl.php as the included HTML template file
	ClientesListForm::Run('ClientesListForm');
?>