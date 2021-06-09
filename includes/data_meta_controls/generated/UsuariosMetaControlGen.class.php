<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Usuarios class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Usuarios object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a UsuariosMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package SIGA
	 * @subpackage MetaControls
	 * property-read Usuarios $Usuarios the actual Usuarios data class being edited
	 * property QLabel $UsuariosIdControl
	 * property-read QLabel $UsuariosIdLabel
	 * property QTextBox $UsuarioControl
	 * property-read QLabel $UsuarioLabel
	 * property QTextBox $NombreControl
	 * property-read QLabel $NombreLabel
	 * property QTextBox $EmailControl
	 * property-read QLabel $EmailLabel
	 * property QCheckBox $HabilitadoControl
	 * property-read QLabel $HabilitadoLabel
	 * property QTextBox $PasswordControl
	 * property-read QLabel $PasswordLabel
	 * property QListBox $RolesControl
	 * property-read QLabel $RolesLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class UsuariosMetaControlGen extends QBaseClass {
		// General Variables
		protected $objUsuarios;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of Usuarios's individual data fields
		protected $lblUsuariosId;
		protected $txtUsuario;
		protected $txtNombre;
		protected $txtEmail;
		protected $chkHabilitado;
		protected $txtPassword;

		// Controls that allow the viewing of Usuarios's individual data fields
		protected $lblUsuario;
		protected $lblNombre;
		protected $lblEmail;
		protected $lblHabilitado;
		protected $lblPassword;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References
		protected $lstRoleses;

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References
		protected $lblRoleses;


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * UsuariosMetaControl to edit a single Usuarios object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Usuarios object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this UsuariosMetaControl
		 * @param Usuarios $objUsuarios new or existing Usuarios object
		 */
		 public function __construct($objParentObject, Usuarios $objUsuarios) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this UsuariosMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Usuarios object
			$this->objUsuarios = $objUsuarios;

			// Figure out if we're Editing or Creating New
			if ($this->objUsuarios->__Restored) {
				$this->strTitleVerb = QApplication::Translate('Edit');
				$this->blnEditMode = true;
			} else {
				$this->strTitleVerb = QApplication::Translate('Create');
				$this->blnEditMode = false;
			}
		 }

		/**
		 * Static Helper Method to Create using PK arguments
		 * You must pass in the PK arguments on an object to load, or leave it blank to create a new one.
		 * If you want to load via QueryString or PathInfo, use the CreateFromQueryString or CreateFromPathInfo
		 * static helper methods.  Finally, specify a CreateType to define whether or not we are only allowed to 
		 * edit, or if we are also allowed to create a new one, etc.
		 * 
		 * @param mixed $objParentObject QForm or QPanel which will be using this UsuariosMetaControl
		 * @param integer $intUsuariosId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Usuarios object creation - defaults to CreateOrEdit
 		 * @return UsuariosMetaControl
		 */
		public static function Create($objParentObject, $intUsuariosId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intUsuariosId)) {
				$objUsuarios = Usuarios::Load($intUsuariosId);

				// Usuarios was found -- return it!
				if ($objUsuarios)
					return new UsuariosMetaControl($objParentObject, $objUsuarios);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Usuarios object with PK arguments: ' . $intUsuariosId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new UsuariosMetaControl($objParentObject, new Usuarios());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this UsuariosMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Usuarios object creation - defaults to CreateOrEdit
		 * @return UsuariosMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intUsuariosId = QApplication::PathInfo(0);
			return UsuariosMetaControl::Create($objParentObject, $intUsuariosId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this UsuariosMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Usuarios object creation - defaults to CreateOrEdit
		 * @return UsuariosMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intUsuariosId = QApplication::QueryString('intUsuariosId');
			return UsuariosMetaControl::Create($objParentObject, $intUsuariosId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblUsuariosId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblUsuariosId_Create($strControlId = null) {
			$this->lblUsuariosId = new QLabel($this->objParentObject, $strControlId);
			$this->lblUsuariosId->Name = QApplication::Translate('Usuarios Id');
			if ($this->blnEditMode)
				$this->lblUsuariosId->Text = $this->objUsuarios->UsuariosId;
			else
				$this->lblUsuariosId->Text = 'N/A';
			return $this->lblUsuariosId;
		}

		/**
		 * Create and setup QTextBox txtUsuario
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtUsuario_Create($strControlId = null) {
			$this->txtUsuario = new QTextBox($this->objParentObject, $strControlId);
			$this->txtUsuario->Name = QApplication::Translate('Usuario');
			$this->txtUsuario->Text = $this->objUsuarios->Usuario;
			return $this->txtUsuario;
		}

		/**
		 * Create and setup QLabel lblUsuario
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblUsuario_Create($strControlId = null) {
			$this->lblUsuario = new QLabel($this->objParentObject, $strControlId);
			$this->lblUsuario->Name = QApplication::Translate('Usuario');
			$this->lblUsuario->Text = $this->objUsuarios->Usuario;
			return $this->lblUsuario;
		}

		/**
		 * Create and setup QTextBox txtNombre
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNombre_Create($strControlId = null) {
			$this->txtNombre = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNombre->Name = QApplication::Translate('Nombre');
			$this->txtNombre->Text = $this->objUsuarios->Nombre;
			return $this->txtNombre;
		}

		/**
		 * Create and setup QLabel lblNombre
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblNombre_Create($strControlId = null) {
			$this->lblNombre = new QLabel($this->objParentObject, $strControlId);
			$this->lblNombre->Name = QApplication::Translate('Nombre');
			$this->lblNombre->Text = $this->objUsuarios->Nombre;
			return $this->lblNombre;
		}

		/**
		 * Create and setup QTextBox txtEmail
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtEmail_Create($strControlId = null) {
			$this->txtEmail = new QTextBox($this->objParentObject, $strControlId);
			$this->txtEmail->Name = QApplication::Translate('Email');
			$this->txtEmail->Text = $this->objUsuarios->Email;
			return $this->txtEmail;
		}

		/**
		 * Create and setup QLabel lblEmail
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblEmail_Create($strControlId = null) {
			$this->lblEmail = new QLabel($this->objParentObject, $strControlId);
			$this->lblEmail->Name = QApplication::Translate('Email');
			$this->lblEmail->Text = $this->objUsuarios->Email;
			return $this->lblEmail;
		}

		/**
		 * Create and setup QCheckBox chkHabilitado
		 * @param string $strControlId optional ControlId to use
		 * @return QCheckBox
		 */
		public function chkHabilitado_Create($strControlId = null) {
			$this->chkHabilitado = new QCheckBox($this->objParentObject, $strControlId);
			$this->chkHabilitado->Name = QApplication::Translate('Habilitado');
			$this->chkHabilitado->Checked = $this->objUsuarios->Habilitado;
			return $this->chkHabilitado;
		}

		/**
		 * Create and setup QLabel lblHabilitado
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblHabilitado_Create($strControlId = null) {
			$this->lblHabilitado = new QLabel($this->objParentObject, $strControlId);
			$this->lblHabilitado->Name = QApplication::Translate('Habilitado');
			$this->lblHabilitado->Text = ($this->objUsuarios->Habilitado) ? QApplication::Translate('Yes') : QApplication::Translate('No');
			return $this->lblHabilitado;
		}

		/**
		 * Create and setup QTextBox txtPassword
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtPassword_Create($strControlId = null) {
			$this->txtPassword = new QTextBox($this->objParentObject, $strControlId);
			$this->txtPassword->Name = QApplication::Translate('Password');
			$this->txtPassword->Text = $this->objUsuarios->Password;
			return $this->txtPassword;
		}

		/**
		 * Create and setup QLabel lblPassword
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPassword_Create($strControlId = null) {
			$this->lblPassword = new QLabel($this->objParentObject, $strControlId);
			$this->lblPassword->Name = QApplication::Translate('Password');
			$this->lblPassword->Text = $this->objUsuarios->Password;
			return $this->lblPassword;
		}

		/**
		 * Create and setup QListBox lstRoleses
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstRoleses_Create($strControlId = null) {
			$this->lstRoleses = new QListBox($this->objParentObject, $strControlId);
			$this->lstRoleses->Name = QApplication::Translate('Roleses');
			$this->lstRoleses->SelectionMode = QSelectionMode::Multiple;
			$objAssociatedArray = $this->objUsuarios->GetRolesArray();
			$objRolesArray = Roles::LoadAll();
			if ($objRolesArray) foreach ($objRolesArray as $objRoles) {
				$objListItem = new QListItem($objRoles->__toString(), $objRoles->RolesId);
				foreach ($objAssociatedArray as $objAssociated) {
					if ($objAssociated->RolesId == $objRoles->RolesId)
						$objListItem->Selected = true;
				}
				$this->lstRoleses->AddItem($objListItem);
			}
			return $this->lstRoleses;
		}

		/**
		 * Create and setup QLabel lblRoleses
		 * @param string $strControlId optional ControlId to use
		 * @param string $strGlue glue to display in between each associated object
		 * @return QLabel
		 */
		public function lblRoleses_Create($strControlId = null, $strGlue = ', ') {
			$this->lblRoleses = new QLabel($this->objParentObject, $strControlId);
			$this->lblRoleses->Name = QApplication::Translate('Roleses');
			
			$objAssociatedArray = $this->objUsuarios->GetRolesArray();
			$strItems = array();
			foreach ($objAssociatedArray as $objAssociated)
				$strItems[] = $objAssociated->__toString();
			$this->lblRoleses->Text = implode($strGlue, $strItems);
			return $this->lblRoleses;
		}




		/**
		 * Refresh this MetaControl with Data from the local Usuarios object.
		 * @param boolean $blnReload reload Usuarios from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objUsuarios->Reload();

			if ($this->lblUsuariosId) if ($this->blnEditMode) $this->lblUsuariosId->Text = $this->objUsuarios->UsuariosId;

			if ($this->txtUsuario) $this->txtUsuario->Text = $this->objUsuarios->Usuario;
			if ($this->lblUsuario) $this->lblUsuario->Text = $this->objUsuarios->Usuario;

			if ($this->txtNombre) $this->txtNombre->Text = $this->objUsuarios->Nombre;
			if ($this->lblNombre) $this->lblNombre->Text = $this->objUsuarios->Nombre;

			if ($this->txtEmail) $this->txtEmail->Text = $this->objUsuarios->Email;
			if ($this->lblEmail) $this->lblEmail->Text = $this->objUsuarios->Email;

			if ($this->chkHabilitado) $this->chkHabilitado->Checked = $this->objUsuarios->Habilitado;
			if ($this->lblHabilitado) $this->lblHabilitado->Text = ($this->objUsuarios->Habilitado) ? QApplication::Translate('Yes') : QApplication::Translate('No');

			if ($this->txtPassword) $this->txtPassword->Text = $this->objUsuarios->Password;
			if ($this->lblPassword) $this->lblPassword->Text = $this->objUsuarios->Password;

			if ($this->lstRoleses) {
				$this->lstRoleses->RemoveAllItems();
				$objAssociatedArray = $this->objUsuarios->GetRolesArray();
				$objRolesArray = Roles::LoadAll();
				if ($objRolesArray) foreach ($objRolesArray as $objRoles) {
					$objListItem = new QListItem($objRoles->__toString(), $objRoles->RolesId);
					foreach ($objAssociatedArray as $objAssociated) {
						if ($objAssociated->RolesId == $objRoles->RolesId)
							$objListItem->Selected = true;
					}
					$this->lstRoleses->AddItem($objListItem);
				}
			}
			if ($this->lblRoleses) {
				$objAssociatedArray = $this->objUsuarios->GetRolesArray();
				$strItems = array();
				foreach ($objAssociatedArray as $objAssociated)
					$strItems[] = $objAssociated->__toString();
				$this->lblRoleses->Text = implode($strGlue, $strItems);
			}

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////

		protected function lstRoleses_Update() {
			if ($this->lstRoleses) {
				$this->objUsuarios->UnassociateAllRoleses();
				$objSelectedListItems = $this->lstRoleses->SelectedItems;
				if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
					$this->objUsuarios->AssociateRoles(Roles::Load($objListItem->Value));
				}
			}
		}





		///////////////////////////////////////////////
		// PUBLIC USUARIOS OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Usuarios instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveUsuarios() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtUsuario) $this->objUsuarios->Usuario = $this->txtUsuario->Text;
				if ($this->txtNombre) $this->objUsuarios->Nombre = $this->txtNombre->Text;
				if ($this->txtEmail) $this->objUsuarios->Email = $this->txtEmail->Text;
				if ($this->chkHabilitado) $this->objUsuarios->Habilitado = $this->chkHabilitado->Checked;
				if ($this->txtPassword) $this->objUsuarios->Password = $this->txtPassword->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Usuarios object
				$this->objUsuarios->Save();

				// Finally, update any ManyToManyReferences (if any)
				$this->lstRoleses_Update();
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Usuarios instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteUsuarios() {
			$this->objUsuarios->UnassociateAllRoleses();
			$this->objUsuarios->Delete();
		}		



		///////////////////////////////////////////////
		// PUBLIC GETTERS and SETTERS
		///////////////////////////////////////////////

		/**
		 * Override method to perform a property "Get"
		 * This will get the value of $strName
		 *
		 * @param string $strName Name of the property to get
		 * @return mixed
		 */
		public function __get($strName) {
			switch ($strName) {
				// General MetaControlVariables
				case 'Usuarios': return $this->objUsuarios;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Usuarios fields -- will be created dynamically if not yet created
				case 'UsuariosIdControl':
					if (!$this->lblUsuariosId) return $this->lblUsuariosId_Create();
					return $this->lblUsuariosId;
				case 'UsuariosIdLabel':
					if (!$this->lblUsuariosId) return $this->lblUsuariosId_Create();
					return $this->lblUsuariosId;
				case 'UsuarioControl':
					if (!$this->txtUsuario) return $this->txtUsuario_Create();
					return $this->txtUsuario;
				case 'UsuarioLabel':
					if (!$this->lblUsuario) return $this->lblUsuario_Create();
					return $this->lblUsuario;
				case 'NombreControl':
					if (!$this->txtNombre) return $this->txtNombre_Create();
					return $this->txtNombre;
				case 'NombreLabel':
					if (!$this->lblNombre) return $this->lblNombre_Create();
					return $this->lblNombre;
				case 'EmailControl':
					if (!$this->txtEmail) return $this->txtEmail_Create();
					return $this->txtEmail;
				case 'EmailLabel':
					if (!$this->lblEmail) return $this->lblEmail_Create();
					return $this->lblEmail;
				case 'HabilitadoControl':
					if (!$this->chkHabilitado) return $this->chkHabilitado_Create();
					return $this->chkHabilitado;
				case 'HabilitadoLabel':
					if (!$this->lblHabilitado) return $this->lblHabilitado_Create();
					return $this->lblHabilitado;
				case 'PasswordControl':
					if (!$this->txtPassword) return $this->txtPassword_Create();
					return $this->txtPassword;
				case 'PasswordLabel':
					if (!$this->lblPassword) return $this->lblPassword_Create();
					return $this->lblPassword;
				case 'RolesControl':
					if (!$this->lstRoleses) return $this->lstRoleses_Create();
					return $this->lstRoleses;
				case 'RolesLabel':
					if (!$this->lblRoleses) return $this->lblRoleses_Create();
					return $this->lblRoleses;
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		/**
		 * Override method to perform a property "Set"
		 * This will set the property $strName to be $mixValue
		 *
		 * @param string $strName Name of the property to set
		 * @param string $mixValue New value of the property
		 * @return mixed
		 */
		public function __set($strName, $mixValue) {
			try {
				switch ($strName) {
					// Controls that point to Usuarios fields
					case 'UsuariosIdControl':
						return ($this->lblUsuariosId = QType::Cast($mixValue, 'QControl'));
					case 'UsuarioControl':
						return ($this->txtUsuario = QType::Cast($mixValue, 'QControl'));
					case 'NombreControl':
						return ($this->txtNombre = QType::Cast($mixValue, 'QControl'));
					case 'EmailControl':
						return ($this->txtEmail = QType::Cast($mixValue, 'QControl'));
					case 'HabilitadoControl':
						return ($this->chkHabilitado = QType::Cast($mixValue, 'QControl'));
					case 'PasswordControl':
						return ($this->txtPassword = QType::Cast($mixValue, 'QControl'));
					case 'RolesControl':
						return ($this->lstRoleses = QType::Cast($mixValue, 'QControl'));
					default:
						return parent::__set($strName, $mixValue);
				}
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
	}
?>