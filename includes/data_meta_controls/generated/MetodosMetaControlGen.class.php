<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Metodos class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Metodos object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a MetodosMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Metodos $Metodos the actual Metodos data class being edited
	 * property QLabel $MetodoIdControl
	 * property-read QLabel $MetodoIdLabel
	 * property QTextBox $NombreControl
	 * property-read QLabel $NombreLabel
	 * property QListBox $AnalisisControl
	 * property-read QLabel $AnalisisLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class MetodosMetaControlGen extends QBaseClass {
		// General Variables
		protected $objMetodos;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of Metodos's individual data fields
		protected $lblMetodoId;
		protected $txtNombre;

		// Controls that allow the viewing of Metodos's individual data fields
		protected $lblNombre;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References
		protected $lstAnalisises;

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References
		protected $lblAnalisises;


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * MetodosMetaControl to edit a single Metodos object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Metodos object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this MetodosMetaControl
		 * @param Metodos $objMetodos new or existing Metodos object
		 */
		 public function __construct($objParentObject, Metodos $objMetodos) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this MetodosMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Metodos object
			$this->objMetodos = $objMetodos;

			// Figure out if we're Editing or Creating New
			if ($this->objMetodos->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this MetodosMetaControl
		 * @param integer $intMetodoId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Metodos object creation - defaults to CreateOrEdit
 		 * @return MetodosMetaControl
		 */
		public static function Create($objParentObject, $intMetodoId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intMetodoId)) {
				$objMetodos = Metodos::Load($intMetodoId);

				// Metodos was found -- return it!
				if ($objMetodos)
					return new MetodosMetaControl($objParentObject, $objMetodos);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Metodos object with PK arguments: ' . $intMetodoId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new MetodosMetaControl($objParentObject, new Metodos());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this MetodosMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Metodos object creation - defaults to CreateOrEdit
		 * @return MetodosMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intMetodoId = QApplication::PathInfo(0);
			return MetodosMetaControl::Create($objParentObject, $intMetodoId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this MetodosMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Metodos object creation - defaults to CreateOrEdit
		 * @return MetodosMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intMetodoId = QApplication::QueryString('intMetodoId');
			return MetodosMetaControl::Create($objParentObject, $intMetodoId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblMetodoId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblMetodoId_Create($strControlId = null) {
			$this->lblMetodoId = new QLabel($this->objParentObject, $strControlId);
			$this->lblMetodoId->Name = QApplication::Translate('Metodo Id');
			if ($this->blnEditMode)
				$this->lblMetodoId->Text = $this->objMetodos->MetodoId;
			else
				$this->lblMetodoId->Text = 'N/A';
			return $this->lblMetodoId;
		}

		/**
		 * Create and setup QTextBox txtNombre
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNombre_Create($strControlId = null) {
			$this->txtNombre = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNombre->Name = QApplication::Translate('Nombre');
			$this->txtNombre->Text = $this->objMetodos->Nombre;
			$this->txtNombre->Required = true;
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
			$this->lblNombre->Text = $this->objMetodos->Nombre;
			$this->lblNombre->Required = true;
			return $this->lblNombre;
		}

		/**
		 * Create and setup QListBox lstAnalisises
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstAnalisises_Create($strControlId = null) {
			$this->lstAnalisises = new QListBox($this->objParentObject, $strControlId);
			$this->lstAnalisises->Name = QApplication::Translate('Analisises');
			$this->lstAnalisises->SelectionMode = QSelectionMode::Multiple;
			$objAssociatedArray = $this->objMetodos->GetAnalisisArray();
			$objAnalisisArray = Analisis::LoadAll();
			if ($objAnalisisArray) foreach ($objAnalisisArray as $objAnalisis) {
				$objListItem = new QListItem($objAnalisis->__toString(), $objAnalisis->AnalisisId);
				foreach ($objAssociatedArray as $objAssociated) {
					if ($objAssociated->AnalisisId == $objAnalisis->AnalisisId)
						$objListItem->Selected = true;
				}
				$this->lstAnalisises->AddItem($objListItem);
			}
			return $this->lstAnalisises;
		}

		/**
		 * Create and setup QLabel lblAnalisises
		 * @param string $strControlId optional ControlId to use
		 * @param string $strGlue glue to display in between each associated object
		 * @return QLabel
		 */
		public function lblAnalisises_Create($strControlId = null, $strGlue = ', ') {
			$this->lblAnalisises = new QLabel($this->objParentObject, $strControlId);
			$this->lblAnalisises->Name = QApplication::Translate('Analisises');
			
			$objAssociatedArray = $this->objMetodos->GetAnalisisArray();
			$strItems = array();
			foreach ($objAssociatedArray as $objAssociated)
				$strItems[] = $objAssociated->__toString();
			$this->lblAnalisises->Text = implode($strGlue, $strItems);
			return $this->lblAnalisises;
		}




		/**
		 * Refresh this MetaControl with Data from the local Metodos object.
		 * @param boolean $blnReload reload Metodos from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objMetodos->Reload();

			if ($this->lblMetodoId) if ($this->blnEditMode) $this->lblMetodoId->Text = $this->objMetodos->MetodoId;

			if ($this->txtNombre) $this->txtNombre->Text = $this->objMetodos->Nombre;
			if ($this->lblNombre) $this->lblNombre->Text = $this->objMetodos->Nombre;

			if ($this->lstAnalisises) {
				$this->lstAnalisises->RemoveAllItems();
				$objAssociatedArray = $this->objMetodos->GetAnalisisArray();
				$objAnalisisArray = Analisis::LoadAll();
				if ($objAnalisisArray) foreach ($objAnalisisArray as $objAnalisis) {
					$objListItem = new QListItem($objAnalisis->__toString(), $objAnalisis->AnalisisId);
					foreach ($objAssociatedArray as $objAssociated) {
						if ($objAssociated->AnalisisId == $objAnalisis->AnalisisId)
							$objListItem->Selected = true;
					}
					$this->lstAnalisises->AddItem($objListItem);
				}
			}
			if ($this->lblAnalisises) {
				$objAssociatedArray = $this->objMetodos->GetAnalisisArray();
				$strItems = array();
				foreach ($objAssociatedArray as $objAssociated)
					$strItems[] = $objAssociated->__toString();
				$this->lblAnalisises->Text = implode($strGlue, $strItems);
			}

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////

		protected function lstAnalisises_Update() {
			if ($this->lstAnalisises) {
				$this->objMetodos->UnassociateAllAnalisises();
				$objSelectedListItems = $this->lstAnalisises->SelectedItems;
				if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
					$this->objMetodos->AssociateAnalisis(Analisis::Load($objListItem->Value));
				}
			}
		}





		///////////////////////////////////////////////
		// PUBLIC METODOS OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Metodos instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveMetodos() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNombre) $this->objMetodos->Nombre = $this->txtNombre->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Metodos object
				$this->objMetodos->Save();

				// Finally, update any ManyToManyReferences (if any)
				$this->lstAnalisises_Update();
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Metodos instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteMetodos() {
			$this->objMetodos->UnassociateAllAnalisises();
			$this->objMetodos->Delete();
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
				case 'Metodos': return $this->objMetodos;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Metodos fields -- will be created dynamically if not yet created
				case 'MetodoIdControl':
					if (!$this->lblMetodoId) return $this->lblMetodoId_Create();
					return $this->lblMetodoId;
				case 'MetodoIdLabel':
					if (!$this->lblMetodoId) return $this->lblMetodoId_Create();
					return $this->lblMetodoId;
				case 'NombreControl':
					if (!$this->txtNombre) return $this->txtNombre_Create();
					return $this->txtNombre;
				case 'NombreLabel':
					if (!$this->lblNombre) return $this->lblNombre_Create();
					return $this->lblNombre;
				case 'AnalisisControl':
					if (!$this->lstAnalisises) return $this->lstAnalisises_Create();
					return $this->lstAnalisises;
				case 'AnalisisLabel':
					if (!$this->lblAnalisises) return $this->lblAnalisises_Create();
					return $this->lblAnalisises;
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
					// Controls that point to Metodos fields
					case 'MetodoIdControl':
						return ($this->lblMetodoId = QType::Cast($mixValue, 'QControl'));
					case 'NombreControl':
						return ($this->txtNombre = QType::Cast($mixValue, 'QControl'));
					case 'AnalisisControl':
						return ($this->lstAnalisises = QType::Cast($mixValue, 'QControl'));
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