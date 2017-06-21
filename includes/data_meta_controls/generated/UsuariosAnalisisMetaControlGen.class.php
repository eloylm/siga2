<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the UsuariosAnalisis class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single UsuariosAnalisis object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a UsuariosAnalisisMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read UsuariosAnalisis $UsuariosAnalisis the actual UsuariosAnalisis data class being edited
	 * property QListBox $UsuariosIdControl
	 * property-read QLabel $UsuariosIdLabel
	 * property QListBox $AnalisisIdControl
	 * property-read QLabel $AnalisisIdLabel
	 * property QIntegerTextBox $UsuariosAnalisisIdControl
	 * property-read QLabel $UsuariosAnalisisIdLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class UsuariosAnalisisMetaControlGen extends QBaseClass {
		// General Variables
		protected $objUsuariosAnalisis;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of UsuariosAnalisis's individual data fields
		protected $lstUsuarios;
		protected $lstAnalisis;
		protected $txtUsuariosAnalisisId;

		// Controls that allow the viewing of UsuariosAnalisis's individual data fields
		protected $lblUsuariosId;
		protected $lblAnalisisId;
		protected $lblUsuariosAnalisisId;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * UsuariosAnalisisMetaControl to edit a single UsuariosAnalisis object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single UsuariosAnalisis object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this UsuariosAnalisisMetaControl
		 * @param UsuariosAnalisis $objUsuariosAnalisis new or existing UsuariosAnalisis object
		 */
		 public function __construct($objParentObject, UsuariosAnalisis $objUsuariosAnalisis) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this UsuariosAnalisisMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked UsuariosAnalisis object
			$this->objUsuariosAnalisis = $objUsuariosAnalisis;

			// Figure out if we're Editing or Creating New
			if ($this->objUsuariosAnalisis->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this UsuariosAnalisisMetaControl
		 * @param integer $intUsuariosAnalisisId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing UsuariosAnalisis object creation - defaults to CreateOrEdit
 		 * @return UsuariosAnalisisMetaControl
		 */
		public static function Create($objParentObject, $intUsuariosAnalisisId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intUsuariosAnalisisId)) {
				$objUsuariosAnalisis = UsuariosAnalisis::Load($intUsuariosAnalisisId);

				// UsuariosAnalisis was found -- return it!
				if ($objUsuariosAnalisis)
					return new UsuariosAnalisisMetaControl($objParentObject, $objUsuariosAnalisis);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a UsuariosAnalisis object with PK arguments: ' . $intUsuariosAnalisisId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new UsuariosAnalisisMetaControl($objParentObject, new UsuariosAnalisis());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this UsuariosAnalisisMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing UsuariosAnalisis object creation - defaults to CreateOrEdit
		 * @return UsuariosAnalisisMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intUsuariosAnalisisId = QApplication::PathInfo(0);
			return UsuariosAnalisisMetaControl::Create($objParentObject, $intUsuariosAnalisisId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this UsuariosAnalisisMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing UsuariosAnalisis object creation - defaults to CreateOrEdit
		 * @return UsuariosAnalisisMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intUsuariosAnalisisId = QApplication::QueryString('intUsuariosAnalisisId');
			return UsuariosAnalisisMetaControl::Create($objParentObject, $intUsuariosAnalisisId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QListBox lstUsuarios
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstUsuarios_Create($strControlId = null) {
			$this->lstUsuarios = new QListBox($this->objParentObject, $strControlId);
			$this->lstUsuarios->Name = QApplication::Translate('Usuarios');
			$this->lstUsuarios->Required = true;
			if (!$this->blnEditMode)
				$this->lstUsuarios->AddItem(QApplication::Translate('- Select One -'), null);
			$objUsuariosArray = Usuarios::LoadAll();
			if ($objUsuariosArray) foreach ($objUsuariosArray as $objUsuarios) {
				$objListItem = new QListItem($objUsuarios->__toString(), $objUsuarios->UsuariosId);
				if (($this->objUsuariosAnalisis->Usuarios) && ($this->objUsuariosAnalisis->Usuarios->UsuariosId == $objUsuarios->UsuariosId))
					$objListItem->Selected = true;
				$this->lstUsuarios->AddItem($objListItem);
			}
			return $this->lstUsuarios;
		}

		/**
		 * Create and setup QLabel lblUsuariosId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblUsuariosId_Create($strControlId = null) {
			$this->lblUsuariosId = new QLabel($this->objParentObject, $strControlId);
			$this->lblUsuariosId->Name = QApplication::Translate('Usuarios');
			$this->lblUsuariosId->Text = ($this->objUsuariosAnalisis->Usuarios) ? $this->objUsuariosAnalisis->Usuarios->__toString() : null;
			$this->lblUsuariosId->Required = true;
			return $this->lblUsuariosId;
		}

		/**
		 * Create and setup QListBox lstAnalisis
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstAnalisis_Create($strControlId = null) {
			$this->lstAnalisis = new QListBox($this->objParentObject, $strControlId);
			$this->lstAnalisis->Name = QApplication::Translate('Analisis');
			$this->lstAnalisis->Required = true;
			if (!$this->blnEditMode)
				$this->lstAnalisis->AddItem(QApplication::Translate('- Select One -'), null);
			$objAnalisisArray = Analisis::LoadAll();
			if ($objAnalisisArray) foreach ($objAnalisisArray as $objAnalisis) {
				$objListItem = new QListItem($objAnalisis->__toString(), $objAnalisis->AnalisisId);
				if (($this->objUsuariosAnalisis->Analisis) && ($this->objUsuariosAnalisis->Analisis->AnalisisId == $objAnalisis->AnalisisId))
					$objListItem->Selected = true;
				$this->lstAnalisis->AddItem($objListItem);
			}
			return $this->lstAnalisis;
		}

		/**
		 * Create and setup QLabel lblAnalisisId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblAnalisisId_Create($strControlId = null) {
			$this->lblAnalisisId = new QLabel($this->objParentObject, $strControlId);
			$this->lblAnalisisId->Name = QApplication::Translate('Analisis');
			$this->lblAnalisisId->Text = ($this->objUsuariosAnalisis->Analisis) ? $this->objUsuariosAnalisis->Analisis->__toString() : null;
			$this->lblAnalisisId->Required = true;
			return $this->lblAnalisisId;
		}

		/**
		 * Create and setup QIntegerTextBox txtUsuariosAnalisisId
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtUsuariosAnalisisId_Create($strControlId = null) {
			$this->txtUsuariosAnalisisId = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtUsuariosAnalisisId->Name = QApplication::Translate('Usuarios Analisis Id');
			$this->txtUsuariosAnalisisId->Text = $this->objUsuariosAnalisis->UsuariosAnalisisId;
			$this->txtUsuariosAnalisisId->Required = true;
			return $this->txtUsuariosAnalisisId;
		}

		/**
		 * Create and setup QLabel lblUsuariosAnalisisId
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblUsuariosAnalisisId_Create($strControlId = null, $strFormat = null) {
			$this->lblUsuariosAnalisisId = new QLabel($this->objParentObject, $strControlId);
			$this->lblUsuariosAnalisisId->Name = QApplication::Translate('Usuarios Analisis Id');
			$this->lblUsuariosAnalisisId->Text = $this->objUsuariosAnalisis->UsuariosAnalisisId;
			$this->lblUsuariosAnalisisId->Required = true;
			$this->lblUsuariosAnalisisId->Format = $strFormat;
			return $this->lblUsuariosAnalisisId;
		}



		/**
		 * Refresh this MetaControl with Data from the local UsuariosAnalisis object.
		 * @param boolean $blnReload reload UsuariosAnalisis from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objUsuariosAnalisis->Reload();

			if ($this->lstUsuarios) {
					$this->lstUsuarios->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstUsuarios->AddItem(QApplication::Translate('- Select One -'), null);
				$objUsuariosArray = Usuarios::LoadAll();
				if ($objUsuariosArray) foreach ($objUsuariosArray as $objUsuarios) {
					$objListItem = new QListItem($objUsuarios->__toString(), $objUsuarios->UsuariosId);
					if (($this->objUsuariosAnalisis->Usuarios) && ($this->objUsuariosAnalisis->Usuarios->UsuariosId == $objUsuarios->UsuariosId))
						$objListItem->Selected = true;
					$this->lstUsuarios->AddItem($objListItem);
				}
			}
			if ($this->lblUsuariosId) $this->lblUsuariosId->Text = ($this->objUsuariosAnalisis->Usuarios) ? $this->objUsuariosAnalisis->Usuarios->__toString() : null;

			if ($this->lstAnalisis) {
					$this->lstAnalisis->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstAnalisis->AddItem(QApplication::Translate('- Select One -'), null);
				$objAnalisisArray = Analisis::LoadAll();
				if ($objAnalisisArray) foreach ($objAnalisisArray as $objAnalisis) {
					$objListItem = new QListItem($objAnalisis->__toString(), $objAnalisis->AnalisisId);
					if (($this->objUsuariosAnalisis->Analisis) && ($this->objUsuariosAnalisis->Analisis->AnalisisId == $objAnalisis->AnalisisId))
						$objListItem->Selected = true;
					$this->lstAnalisis->AddItem($objListItem);
				}
			}
			if ($this->lblAnalisisId) $this->lblAnalisisId->Text = ($this->objUsuariosAnalisis->Analisis) ? $this->objUsuariosAnalisis->Analisis->__toString() : null;

			if ($this->txtUsuariosAnalisisId) $this->txtUsuariosAnalisisId->Text = $this->objUsuariosAnalisis->UsuariosAnalisisId;
			if ($this->lblUsuariosAnalisisId) $this->lblUsuariosAnalisisId->Text = $this->objUsuariosAnalisis->UsuariosAnalisisId;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC USUARIOSANALISIS OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's UsuariosAnalisis instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveUsuariosAnalisis() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstUsuarios) $this->objUsuariosAnalisis->UsuariosId = $this->lstUsuarios->SelectedValue;
				if ($this->lstAnalisis) $this->objUsuariosAnalisis->AnalisisId = $this->lstAnalisis->SelectedValue;
				if ($this->txtUsuariosAnalisisId) $this->objUsuariosAnalisis->UsuariosAnalisisId = $this->txtUsuariosAnalisisId->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the UsuariosAnalisis object
				$this->objUsuariosAnalisis->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's UsuariosAnalisis instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteUsuariosAnalisis() {
			$this->objUsuariosAnalisis->Delete();
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
				case 'UsuariosAnalisis': return $this->objUsuariosAnalisis;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to UsuariosAnalisis fields -- will be created dynamically if not yet created
				case 'UsuariosIdControl':
					if (!$this->lstUsuarios) return $this->lstUsuarios_Create();
					return $this->lstUsuarios;
				case 'UsuariosIdLabel':
					if (!$this->lblUsuariosId) return $this->lblUsuariosId_Create();
					return $this->lblUsuariosId;
				case 'AnalisisIdControl':
					if (!$this->lstAnalisis) return $this->lstAnalisis_Create();
					return $this->lstAnalisis;
				case 'AnalisisIdLabel':
					if (!$this->lblAnalisisId) return $this->lblAnalisisId_Create();
					return $this->lblAnalisisId;
				case 'UsuariosAnalisisIdControl':
					if (!$this->txtUsuariosAnalisisId) return $this->txtUsuariosAnalisisId_Create();
					return $this->txtUsuariosAnalisisId;
				case 'UsuariosAnalisisIdLabel':
					if (!$this->lblUsuariosAnalisisId) return $this->lblUsuariosAnalisisId_Create();
					return $this->lblUsuariosAnalisisId;
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
					// Controls that point to UsuariosAnalisis fields
					case 'UsuariosIdControl':
						return ($this->lstUsuarios = QType::Cast($mixValue, 'QControl'));
					case 'AnalisisIdControl':
						return ($this->lstAnalisis = QType::Cast($mixValue, 'QControl'));
					case 'UsuariosAnalisisIdControl':
						return ($this->txtUsuariosAnalisisId = QType::Cast($mixValue, 'QControl'));
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