<?php
	// Load the QCubed Development Framework
	require('../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Muestras class.  It uses the code-generated
	 * MuestrasDataGrid control which has meta-methods to help with
	 * easily creating/defining Muestras columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both muestras_list.php AND
	 * muestras_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package SIGA
	 * @subpackage Drafts
	 */
	class MuestrasListForm extends QForm {
		// Local instance of the Meta DataGrid to list Muestrases
		protected $dtgMuestrases;

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
			$this->dtgMuestrases = new MuestrasDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgMuestrases->CssClass = 'datagrid';
			$this->dtgMuestrases->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgMuestrases->Paginator = new QPaginator($this->dtgMuestrases);
			$this->dtgMuestrases->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/muestras_edit.php';
			$this->dtgMuestrases->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for muestras's properties, or you
			// can traverse down QQN::muestras() to display fields that are down the hierarchy)
			$this->dtgMuestrases->MetaAddColumn('MuestrasId');
			$this->dtgMuestrases->MetaAddColumn('Detalle');
			$this->dtgMuestrases->MetaAddColumn('Observaciones');
			$this->dtgMuestrases->MetaAddColumn(QQN::Muestras()->Clientes);
			$this->dtgMuestrases->MetaAddColumn('Estado');
			$this->dtgMuestrases->MetaAddColumn(QQN::Muestras()->Usuarios);
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// muestras_list.tpl.php as the included HTML template file
	MuestrasListForm::Run('MuestrasListForm');
?>