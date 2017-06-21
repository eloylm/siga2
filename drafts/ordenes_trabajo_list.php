<?php
	// Load the QCubed Development Framework
	require('../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the OrdenesTrabajo class.  It uses the code-generated
	 * OrdenesTrabajoDataGrid control which has meta-methods to help with
	 * easily creating/defining OrdenesTrabajo columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both ordenes_trabajo_list.php AND
	 * ordenes_trabajo_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class OrdenesTrabajoListForm extends QForm {
		// Local instance of the Meta DataGrid to list OrdenesTrabajos
		protected $dtgOrdenesTrabajos;

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
			$this->dtgOrdenesTrabajos = new OrdenesTrabajoDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgOrdenesTrabajos->CssClass = 'datagrid';
			$this->dtgOrdenesTrabajos->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgOrdenesTrabajos->Paginator = new QPaginator($this->dtgOrdenesTrabajos);
			$this->dtgOrdenesTrabajos->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/ordenes_trabajo_edit.php';
			$this->dtgOrdenesTrabajos->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

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
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// ordenes_trabajo_list.tpl.php as the included HTML template file
	OrdenesTrabajoListForm::Run('OrdenesTrabajoListForm');
?>