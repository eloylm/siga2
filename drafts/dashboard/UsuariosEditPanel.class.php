<?php
	/**
	 * This is a quick-and-dirty draft QPanel object to do Create, Edit, and Delete functionality
	 * of the Usuarios class.  It uses the code-generated
	 * UsuariosMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a Usuarios columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both usuarios_edit.php AND
	 * usuarios_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package SIGA
	 * @subpackage Drafts
	 */
	class UsuariosEditPanel extends QPanel {
		// Local instance of the UsuariosMetaControl
		protected $mctUsuarios;

		// Controls for Usuarios's Data Fields
		public $lblUsuariosId;
		public $txtUsuario;
		public $txtNombre;
		public $txtEmail;
		public $chkHabilitado;
		public $txtPassword;

		// Other ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References
		public $lstRoleses;

		// Other Controls
		public $btnSave;
		public $btnDelete;
		public $btnCancel;

		// Callback
		protected $strClosePanelMethod;

		public function __construct($objParentObject, $strClosePanelMethod, $intUsuariosId = null, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Setup Callback and Template
			$this->strTemplate = 'UsuariosEditPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;

			// Construct the UsuariosMetaControl
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctUsuarios = UsuariosMetaControl::Create($this, $intUsuariosId);

			// Call MetaControl's methods to create qcontrols based on Usuarios's data fields
			$this->lblUsuariosId = $this->mctUsuarios->lblUsuariosId_Create();
			$this->txtUsuario = $this->mctUsuarios->txtUsuario_Create();
			$this->txtNombre = $this->mctUsuarios->txtNombre_Create();
			$this->txtEmail = $this->mctUsuarios->txtEmail_Create();
			$this->chkHabilitado = $this->mctUsuarios->chkHabilitado_Create();
			$this->txtPassword = $this->mctUsuarios->txtPassword_Create();
			$this->lstRoleses = $this->mctUsuarios->lstRoleses_Create();

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
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(QApplication::Translate('Are you SURE you want to DELETE this') . ' ' . QApplication::Translate('Usuarios') . '?'));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctUsuarios->EditMode;
		}

		// Control AjaxAction Event Handlers
		public function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the UsuariosMetaControl
			$this->mctUsuarios->SaveUsuarios();
			$this->CloseSelf(true);
		}

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the UsuariosMetaControl
			$this->mctUsuarios->DeleteUsuarios();
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