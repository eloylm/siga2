<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Roles class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Roles object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a RolesMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package SIGA
	 * @subpackage MetaControls
	 * property-read Roles $Roles the actual Roles data class being edited
	 * property QLabel $RolesIdControl
	 * property-read QLabel $RolesIdLabel
	 * property QTextBox $DescripControl
	 * property-read QLabel $DescripLabel
	 * property QTextBox $ComentarioControl
	 * property-read QLabel $ComentarioLabel
	 * property QListBox $UsuariosControl
	 * property-read QLabel $UsuariosLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class RolesMetaControlGen extends QBaseClass {
		// General Variables
		protected $objRoles;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of Roles's individual data fields
		protected $lblRolesId;
		protected $txtDescrip;
		protected $txtComentario;

		// Controls that allow the viewing of Roles's individual data fields
		protected $lblDescrip;
		protected $lblComentario;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References
		protected $lstUsuarioses;

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References
		protected $lblUsuarioses;


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * RolesMetaControl to edit a single Roles object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Roles object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this RolesMetaControl
		 * @param Roles $objRoles new or existing Roles object
		 */
		 public function __construct($objParentObject, Roles $objRoles) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this RolesMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Roles object
			$this->objRoles = $objRoles;

			// Figure out if we're Editing or Creating New
			if ($this->objRoles->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this RolesMetaControl
		 * @param integer $intRolesId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Roles object creation - defaults to CreateOrEdit
 		 * @return RolesMetaControl
		 */
		public static function Create($objParentObject, $intRolesId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intRolesId)) {
				$objRoles = Roles::Load($intRolesId);

				// Roles was found -- return it!
				if ($objRoles)
					return new RolesMetaControl($objParentObject, $objRoles);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Roles object with PK arguments: ' . $intRolesId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new RolesMetaControl($objParentObject, new Roles());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this RolesMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Roles object creation - defaults to CreateOrEdit
		 * @return RolesMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intRolesId = QApplication::PathInfo(0);
			return RolesMetaControl::Create($objParentObject, $intRolesId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this RolesMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Roles object creation - defaults to CreateOrEdit
		 * @return RolesMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intRolesId = QApplication::QueryString('intRolesId');
			return RolesMetaControl::Create($objParentObject, $intRolesId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblRolesId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblRolesId_Create($strControlId = null) {
			$this->lblRolesId = new QLabel($this->objParentObject, $strControlId);
			$this->lblRolesId->Name = QApplication::Translate('Roles Id');
			if ($this->blnEditMode)
				$this->lblRolesId->Text = $this->objRoles->RolesId;
			else
				$this->lblRolesId->Text = 'N/A';
			return $this->lblRolesId;
		}

		/**
		 * Create and setup QTextBox txtDescrip
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtDescrip_Create($strControlId = null) {
			$this->txtDescrip = new QTextBox($this->objParentObject, $strControlId);
			$this->txtDescrip->Name = QApplication::Translate('Descrip');
			$this->txtDescrip->Text = $this->objRoles->Descrip;
			return $this->txtDescrip;
		}

		/**
		 * Create and setup QLabel lblDescrip
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblDescrip_Create($strControlId = null) {
			$this->lblDescrip = new QLabel($this->objParentObject, $strControlId);
			$this->lblDescrip->Name = QApplication::Translate('Descrip');
			$this->lblDescrip->Text = $this->objRoles->Descrip;
			return $this->lblDescrip;
		}

		/**
		 * Create and setup QTextBox txtComentario
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtComentario_Create($strControlId = null) {
			$this->txtComentario = new QTextBox($this->objParentObject, $strControlId);
			$this->txtComentario->Name = QApplication::Translate('Comentario');
			$this->txtComentario->Text = $this->objRoles->Comentario;
			return $this->txtComentario;
		}

		/**
		 * Create and setup QLabel lblComentario
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblComentario_Create($strControlId = null) {
			$this->lblComentario = new QLabel($this->objParentObject, $strControlId);
			$this->lblComentario->Name = QApplication::Translate('Comentario');
			$this->lblComentario->Text = $this->objRoles->Comentario;
			return $this->lblComentario;
		}

		/**
		 * Create and setup QListBox lstUsuarioses
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstUsuarioses_Create($strControlId = null) {
			$this->lstUsuarioses = new QListBox($this->objParentObject, $strControlId);
			$this->lstUsuarioses->Name = QApplication::Translate('Usuarioses');
			$this->lstUsuarioses->SelectionMode = QSelectionMode::Multiple;
			$objAssociatedArray = $this->objRoles->GetUsuariosArray();
			$objUsuariosArray = Usuarios::LoadAll();
			if ($objUsuariosArray) foreach ($objUsuariosArray as $objUsuarios) {
				$objListItem = new QListItem($objUsuarios->__toString(), $objUsuarios->UsuariosId);
				foreach ($objAssociatedArray as $objAssociated) {
					if ($objAssociated->UsuariosId == $objUsuarios->UsuariosId)
						$objListItem->Selected = true;
				}
				$this->lstUsuarioses->AddItem($objListItem);
			}
			return $this->lstUsuarioses;
		}

		/**
		 * Create and setup QLabel lblUsuarioses
		 * @param string $strControlId optional ControlId to use
		 * @param string $strGlue glue to display in between each associated object
		 * @return QLabel
		 */
		public function lblUsuarioses_Create($strControlId = null, $strGlue = ', ') {
			$this->lblUsuarioses = new QLabel($this->objParentObject, $strControlId);
			$this->lblUsuarioses->Name = QApplication::Translate('Usuarioses');
			
			$objAssociatedArray = $this->objRoles->GetUsuariosArray();
			$strItems = array();
			foreach ($objAssociatedArray as $objAssociated)
				$strItems[] = $objAssociated->__toString();
			$this->lblUsuarioses->Text = implode($strGlue, $strItems);
			return $this->lblUsuarioses;
		}




		/**
		 * Refresh this MetaControl with Data from the local Roles object.
		 * @param boolean $blnReload reload Roles from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objRoles->Reload();

			if ($this->lblRolesId) if ($this->blnEditMode) $this->lblRolesId->Text = $this->objRoles->RolesId;

			if ($this->txtDescrip) $this->txtDescrip->Text = $this->objRoles->Descrip;
			if ($this->lblDescrip) $this->lblDescrip->Text = $this->objRoles->Descrip;

			if ($this->txtComentario) $this->txtComentario->Text = $this->objRoles->Comentario;
			if ($this->lblComentario) $this->lblComentario->Text = $this->objRoles->Comentario;

			if ($this->lstUsuarioses) {
				$this->lstUsuarioses->RemoveAllItems();
				$objAssociatedArray = $this->objRoles->GetUsuariosArray();
				$objUsuariosArray = Usuarios::LoadAll();
				if ($objUsuariosArray) foreach ($objUsuariosArray as $objUsuarios) {
					$objListItem = new QListItem($objUsuarios->__toString(), $objUsuarios->UsuariosId);
					foreach ($objAssociatedArray as $objAssociated) {
						if ($objAssociated->UsuariosId == $objUsuarios->UsuariosId)
							$objListItem->Selected = true;
					}
					$this->lstUsuarioses->AddItem($objListItem);
				}
			}
			if ($this->lblUsuarioses) {
				$objAssociatedArray = $this->objRoles->GetUsuariosArray();
				$strItems = array();
				foreach ($objAssociatedArray as $objAssociated)
					$strItems[] = $objAssociated->__toString();
				$this->lblUsuarioses->Text = implode($strGlue, $strItems);
			}

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////

		protected function lstUsuarioses_Update() {
			if ($this->lstUsuarioses) {
				$this->objRoles->UnassociateAllUsuarioses();
				$objSelectedListItems = $this->lstUsuarioses->SelectedItems;
				if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
					$this->objRoles->AssociateUsuarios(Usuarios::Load($objListItem->Value));
				}
			}
		}





		///////////////////////////////////////////////
		// PUBLIC ROLES OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Roles instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveRoles() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtDescrip) $this->objRoles->Descrip = $this->txtDescrip->Text;
				if ($this->txtComentario) $this->objRoles->Comentario = $this->txtComentario->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Roles object
				$this->objRoles->Save();

				// Finally, update any ManyToManyReferences (if any)
				$this->lstUsuarioses_Update();
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Roles instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteRoles() {
			$this->objRoles->UnassociateAllUsuarioses();
			$this->objRoles->Delete();
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
				case 'Roles': return $this->objRoles;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Roles fields -- will be created dynamically if not yet created
				case 'RolesIdControl':
					if (!$this->lblRolesId) return $this->lblRolesId_Create();
					return $this->lblRolesId;
				case 'RolesIdLabel':
					if (!$this->lblRolesId) return $this->lblRolesId_Create();
					return $this->lblRolesId;
				case 'DescripControl':
					if (!$this->txtDescrip) return $this->txtDescrip_Create();
					return $this->txtDescrip;
				case 'DescripLabel':
					if (!$this->lblDescrip) return $this->lblDescrip_Create();
					return $this->lblDescrip;
				case 'ComentarioControl':
					if (!$this->txtComentario) return $this->txtComentario_Create();
					return $this->txtComentario;
				case 'ComentarioLabel':
					if (!$this->lblComentario) return $this->lblComentario_Create();
					return $this->lblComentario;
				case 'UsuariosControl':
					if (!$this->lstUsuarioses) return $this->lstUsuarioses_Create();
					return $this->lstUsuarioses;
				case 'UsuariosLabel':
					if (!$this->lblUsuarioses) return $this->lblUsuarioses_Create();
					return $this->lblUsuarioses;
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
					// Controls that point to Roles fields
					case 'RolesIdControl':
						return ($this->lblRolesId = QType::Cast($mixValue, 'QControl'));
					case 'DescripControl':
						return ($this->txtDescrip = QType::Cast($mixValue, 'QControl'));
					case 'ComentarioControl':
						return ($this->txtComentario = QType::Cast($mixValue, 'QControl'));
					case 'UsuariosControl':
						return ($this->lstUsuarioses = QType::Cast($mixValue, 'QControl'));
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