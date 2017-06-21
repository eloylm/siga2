<?php
	/**
	 * This is a quick-and-dirty draft QPanel object to do Create, Edit, and Delete functionality
	 * of the Clientes class.  It uses the code-generated
	 * ClientesMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a Clientes columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both clientes_edit.php AND
	 * clientes_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class ClientesEditPanel extends QPanel {
		// Local instance of the ClientesMetaControl
		protected $mctClientes;

		// Controls for Clientes's Data Fields
		public $lblClientesId;
		public $txtNombre;
		public $txtDireccion;
		public $txtLocalidad;
		public $txtProvincia;
		public $txtEmail;
		public $txtResponsableContacto;
		public $calFechaAlta;
		public $chkEstado;
		public $txtEmailSecundario;
		public $txtTelefono;

		// Other ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References

		// Other Controls
		public $btnSave;
		public $btnDelete;
		public $btnCancel;

		// Callback
		protected $strClosePanelMethod;

		public function __construct($objParentObject, $strClosePanelMethod, $intClientesId = null, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Setup Callback and Template
			$this->strTemplate = 'ClientesEditPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;

			// Construct the ClientesMetaControl
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctClientes = ClientesMetaControl::Create($this, $intClientesId);

			// Call MetaControl's methods to create qcontrols based on Clientes's data fields
			$this->lblClientesId = $this->mctClientes->lblClientesId_Create();
			$this->txtNombre = $this->mctClientes->txtNombre_Create();
			$this->txtDireccion = $this->mctClientes->txtDireccion_Create();
			$this->txtLocalidad = $this->mctClientes->txtLocalidad_Create();
			$this->txtProvincia = $this->mctClientes->txtProvincia_Create();
			$this->txtEmail = $this->mctClientes->txtEmail_Create();
			$this->txtResponsableContacto = $this->mctClientes->txtResponsableContacto_Create();
			$this->calFechaAlta = $this->mctClientes->calFechaAlta_Create();
			$this->chkEstado = $this->mctClientes->chkEstado_Create();
			$this->txtEmailSecundario = $this->mctClientes->txtEmailSecundario_Create();
			$this->txtTelefono = $this->mctClientes->txtTelefono_Create();

			// Create Buttons and Actions on this Form
			$this->btnSave = new QButton($this);
			$this->btnSave->Text = QApplication::Translate('Save');
			$this->btnSave->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnSave_Click'));
			$this->btnSave->CausesValidation = $this;

			$this->btnCancel = new QButton($this);
			$this->btnCancel->Text = QApplication::Translate('Cancel');
			$this->btnCancel->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCancel_Click'));

			$this->btnDelete = new QButton($this);
			$this->btnDelete->Text = QApplication::Translate('Delete');
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(QApplication::Translate('Are you SURE you want to DELETE this') . ' ' . QApplication::Translate('Clientes') . '?'));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctClientes->EditMode;
		}

		// Control AjaxAction Event Handlers
		public function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the ClientesMetaControl
			$this->mctClientes->SaveClientes();
			$this->CloseSelf(true);
		}

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the ClientesMetaControl
			$this->mctClientes->DeleteClientes();
			$this->CloseSelf(true);
		}

		public function btnCancel_Click($strFormId, $strControlId, $strParameter) {
			$this->CloseSelf(false);
		}

		// Close Myself and Call ClosePanelMethod Callback
		protected function CloseSelf($blnChangesMade) {
			$strMethod = $this->strClosePanelMethod;
			$this->objForm->$strMethod($blnChangesMade);
		}
	}
?>