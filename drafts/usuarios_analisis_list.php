<?php
	// Load the QCubed Development Framework
	require('../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the UsuariosAnalisis class.  It uses the code-generated
	 * UsuariosAnalisisDataGrid control which has meta-methods to help with
	 * easily creating/defining UsuariosAnalisis columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both usuarios_analisis_list.php AND
	 * usuarios_analisis_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class UsuariosAnalisisListForm extends QForm {
		// Local instance of the Meta DataGrid to list UsuariosAnalisises
		protected $dtgUsuariosAnalisises;

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
			$this->dtgUsuariosAnalisises = new UsuariosAnalisisDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgUsuariosAnalisises->CssClass = 'datagrid';
			$this->dtgUsuariosAnalisises->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgUsuariosAnalisises->Paginator = new QPaginator($this->dtgUsuariosAnalisises);
			$this->dtgUsuariosAnalisises->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/usuarios_analisis_edit.php';
			$this->dtgUsuariosAnalisises->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for usuarios_analisis's properties, or you
			// can traverse down QQN::usuarios_analisis() to display fields that are down the hierarchy)
			$this->dtgUsuariosAnalisises->MetaAddColumn(QQN::UsuariosAnalisis()->Usuarios);
			$this->dtgUsuariosAnalisises->MetaAddColumn(QQN::UsuariosAnalisis()->Analisis);
			$this->dtgUsuariosAnalisises->MetaAddColumn('UsuariosAnalisisId');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// usuarios_analisis_list.tpl.php as the included HTML template file
	UsuariosAnalisisListForm::Run('UsuariosAnalisisListForm');
?>