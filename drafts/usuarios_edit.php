<?php
	// Load the QCubed Development Framework
	require('../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do Create, Edit, and Delete functionality
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
	class UsuariosEditForm extends QForm {
		// Local instance of the UsuariosMetaControl
		protected $mctUsuarios;

		// Controls for Usuarios's Data Fields
		protected $lblUsuariosId;
		protected $txtUsuario;
		protected $txtNombre;
		protected $txtEmail;
		protected $chkHabilitado;
		protected $txtPassword;

		// Other ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References
		protected $lstRoleses;

		// Other Controls
		protected $btnSave;
		protected $btnDelete;
		protected $btnCancel;

		// Create QForm Event Handlers as Needed

//		protected function Form_Exit() {}
//		protected function Form_Load() {}
//		protected function Form_PreRender() {}

		protected function Form_Run() {
			// Security check for ALLOW_REMOTE_ADMIN
			// To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
			QApplication::CheckRemoteAdmin();
		}

		protected function Form_Create() {
			// Use the CreateFromPathInfo shortcut (this can also be done manually using the UsuariosMetaControl constructor)
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctUsuarios = UsuariosMetaControl::CreateFromPathInfo($this);

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
			$this->btnSave->AddAction(new QClickEvent(), new QAjaxAction('btnSave_Click'));
			$this->btnSave->CausesValidation = true;

			$this->btnCancel = new QButton($this);
			$this->btnCancel->Text = QApplication::Translate('Cancel');
			$this->btnCancel->AddAction(new QClickEvent(), new QAjaxAction('btnCancel_Click'));

			$this->btnDelete = new QButton($this);
			$this->btnDelete->Text = QApplication::Translate('Delete');
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(QApplication::Translate('Are you SURE you want to DELETE this') . ' ' . QApplication::Translate('Usuarios') . '?'));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxAction('btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctUsuarios->EditMode;
		}

		/**
		 * This Form_Validate event handler allows you to specify any custom Form Validation rules.
		 * It will also Blink() on all invalid controls, as well as Focus() on the top-most invalid control.
		 */
		protected function Form_Validate() {
			// By default, we report that Custom Validations passed
			$blnToReturn = true;

			// Custom Validation Rules
			// TODO: Be sure to set $blnToReturn to false if any custom validation fails!

			$blnFocused = false;
			foreach ($this->GetErrorControls() as $objControl) {
				// Set Focus to the top-most invalid control
				if (!$blnFocused) {
					$objControl->Focus();
					$blnFocused = true;
				}

				// Blink on ALL invalid controls
				$objControl->Blink();
			}

			return $blnToReturn;
		}

		// Button Event Handlers

		protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the UsuariosMetaControl
			$this->mctUsuarios->SaveUsuarios();
			$this->RedirectToListPage();
		}

		protected function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the UsuariosMetaControl
			$this->mctUsuarios->DeleteUsuarios();
			$this->RedirectToListPage();
		}

		protected function btnCancel_Click($strFormId, $strControlId, $strParameter) {
			$this->RedirectToListPage();
		}

		// Other Methods

		protected function RedirectToListPage() {
			QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/usuarios_list.php');
		}
	}

	// Go ahead and run this form object to render the page and its event handlers, implicitly using
	// usuarios_edit.tpl.php as the included HTML template file
	UsuariosEditForm::Run('UsuariosEditForm');
?>