<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Unidades class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Unidades object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a UnidadesMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package SIGA
	 * @subpackage MetaControls
	 * property-read Unidades $Unidades the actual Unidades data class being edited
	 * property QLabel $UnidadIdControl
	 * property-read QLabel $UnidadIdLabel
	 * property QTextBox $NombreControl
	 * property-read QLabel $NombreLabel
	 * property QListBox $AnalisisControl
	 * property-read QLabel $AnalisisLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class UnidadesMetaControlGen extends QBaseClass {
		// General Variables
		protected $objUnidades;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of Unidades's individual data fields
		protected $lblUnidadId;
		protected $txtNombre;

		// Controls that allow the viewing of Unidades's individual data fields
		protected $lblNombre;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References
		protected $lstAnalisises;

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References
		protected $lblAnalisises;


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * UnidadesMetaControl to edit a single Unidades object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Unidades object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this UnidadesMetaControl
		 * @param Unidades $objUnidades new or existing Unidades object
		 */
		 public function __construct($objParentObject, Unidades $objUnidades) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this UnidadesMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Unidades object
			$this->objUnidades = $objUnidades;

			// Figure out if we're Editing or Creating New
			if ($this->objUnidades->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this UnidadesMetaControl
		 * @param integer $intUnidadId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Unidades object creation - defaults to CreateOrEdit
 		 * @return UnidadesMetaControl
		 */
		public static function Create($objParentObject, $intUnidadId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intUnidadId)) {
				$objUnidades = Unidades::Load($intUnidadId);

				// Unidades was found -- return it!
				if ($objUnidades)
					return new UnidadesMetaControl($objParentObject, $objUnidades);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Unidades object with PK arguments: ' . $intUnidadId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new UnidadesMetaControl($objParentObject, new Unidades());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this UnidadesMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Unidades object creation - defaults to CreateOrEdit
		 * @return UnidadesMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intUnidadId = QApplication::PathInfo(0);
			return UnidadesMetaControl::Create($objParentObject, $intUnidadId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this UnidadesMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Unidades object creation - defaults to CreateOrEdit
		 * @return UnidadesMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intUnidadId = QApplication::QueryString('intUnidadId');
			return UnidadesMetaControl::Create($objParentObject, $intUnidadId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblUnidadId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblUnidadId_Create($strControlId = null) {
			$this->lblUnidadId = new QLabel($this->objParentObject, $strControlId);
			$this->lblUnidadId->Name = QApplication::Translate('Unidad Id');
			if ($this->blnEditMode)
				$this->lblUnidadId->Text = $this->objUnidades->UnidadId;
			else
				$this->lblUnidadId->Text = 'N/A';
			return $this->lblUnidadId;
		}

		/**
		 * Create and setup QTextBox txtNombre
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNombre_Create($strControlId = null) {
			$this->txtNombre = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNombre->Name = QApplication::Translate('Nombre');
			$this->txtNombre->Text = $this->objUnidades->Nombre;
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
			$this->lblNombre->Text = $this->objUnidades->Nombre;
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
			$objAssociatedArray = $this->objUnidades->GetAnalisisArray();
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
			
			$objAssociatedArray = $this->objUnidades->GetAnalisisArray();
			$strItems = array();
			foreach ($objAssociatedArray as $objAssociated)
				$strItems[] = $objAssociated->__toString();
			$this->lblAnalisises->Text = implode($strGlue, $strItems);
			return $this->lblAnalisises;
		}




		/**
		 * Refresh this MetaControl with Data from the local Unidades object.
		 * @param boolean $blnReload reload Unidades from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objUnidades->Reload();

			if ($this->lblUnidadId) if ($this->blnEditMode) $this->lblUnidadId->Text = $this->objUnidades->UnidadId;

			if ($this->txtNombre) $this->txtNombre->Text = $this->objUnidades->Nombre;
			if ($this->lblNombre) $this->lblNombre->Text = $this->objUnidades->Nombre;

			if ($this->lstAnalisises) {
				$this->lstAnalisises->RemoveAllItems();
				$objAssociatedArray = $this->objUnidades->GetAnalisisArray();
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
				$objAssociatedArray = $this->objUnidades->GetAnalisisArray();
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
				$this->objUnidades->UnassociateAllAnalisises();
				$objSelectedListItems = $this->lstAnalisises->SelectedItems;
				if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
					$this->objUnidades->AssociateAnalisis(Analisis::Load($objListItem->Value));
				}
			}
		}





		///////////////////////////////////////////////
		// PUBLIC UNIDADES OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Unidades instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveUnidades() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNombre) $this->objUnidades->Nombre = $this->txtNombre->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Unidades object
				$this->objUnidades->Save();

				// Finally, update any ManyToManyReferences (if any)
				$this->lstAnalisises_Update();
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Unidades instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteUnidades() {
			$this->objUnidades->UnassociateAllAnalisises();
			$this->objUnidades->Delete();
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
				case 'Unidades': return $this->objUnidades;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Unidades fields -- will be created dynamically if not yet created
				case 'UnidadIdControl':
					if (!$this->lblUnidadId) return $this->lblUnidadId_Create();
					return $this->lblUnidadId;
				case 'UnidadIdLabel':
					if (!$this->lblUnidadId) return $this->lblUnidadId_Create();
					return $this->lblUnidadId;
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
					// Controls that point to Unidades fields
					case 'UnidadIdControl':
						return ($this->lblUnidadId = QType::Cast($mixValue, 'QControl'));
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