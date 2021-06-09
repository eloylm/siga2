<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Analisis class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Analisis object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a AnalisisMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package SIGA
	 * @subpackage MetaControls
	 * property-read Analisis $Analisis the actual Analisis data class being edited
	 * property QLabel $AnalisisIdControl
	 * property-read QLabel $AnalisisIdLabel
	 * property QTextBox $NombreControl
	 * property-read QLabel $NombreLabel
	 * property QIntegerTextBox $TiempoDemoraControl
	 * property-read QLabel $TiempoDemoraLabel
	 * property QIntegerTextBox $GrupoControl
	 * property-read QLabel $GrupoLabel
	 * property QListBox $MetodosControl
	 * property-read QLabel $MetodosLabel
	 * property QListBox $OrdenesTrabajoControl
	 * property-read QLabel $OrdenesTrabajoLabel
	 * property QListBox $UnidadesControl
	 * property-read QLabel $UnidadesLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class AnalisisMetaControlGen extends QBaseClass {
		// General Variables
		protected $objAnalisis;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of Analisis's individual data fields
		protected $lblAnalisisId;
		protected $txtNombre;
		protected $txtTiempoDemora;
		protected $txtGrupo;

		// Controls that allow the viewing of Analisis's individual data fields
		protected $lblNombre;
		protected $lblTiempoDemora;
		protected $lblGrupo;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References
		protected $lstMetodoses;
		protected $lstOrdenesTrabajos;
		protected $lstUnidadeses;

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References
		protected $lblMetodoses;
		protected $lblOrdenesTrabajos;
		protected $lblUnidadeses;


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * AnalisisMetaControl to edit a single Analisis object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Analisis object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this AnalisisMetaControl
		 * @param Analisis $objAnalisis new or existing Analisis object
		 */
		 public function __construct($objParentObject, Analisis $objAnalisis) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this AnalisisMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Analisis object
			$this->objAnalisis = $objAnalisis;

			// Figure out if we're Editing or Creating New
			if ($this->objAnalisis->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this AnalisisMetaControl
		 * @param integer $intAnalisisId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Analisis object creation - defaults to CreateOrEdit
 		 * @return AnalisisMetaControl
		 */
		public static function Create($objParentObject, $intAnalisisId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intAnalisisId)) {
				$objAnalisis = Analisis::Load($intAnalisisId);

				// Analisis was found -- return it!
				if ($objAnalisis)
					return new AnalisisMetaControl($objParentObject, $objAnalisis);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Analisis object with PK arguments: ' . $intAnalisisId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new AnalisisMetaControl($objParentObject, new Analisis());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this AnalisisMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Analisis object creation - defaults to CreateOrEdit
		 * @return AnalisisMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intAnalisisId = QApplication::PathInfo(0);
			return AnalisisMetaControl::Create($objParentObject, $intAnalisisId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this AnalisisMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Analisis object creation - defaults to CreateOrEdit
		 * @return AnalisisMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intAnalisisId = QApplication::QueryString('intAnalisisId');
			return AnalisisMetaControl::Create($objParentObject, $intAnalisisId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblAnalisisId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblAnalisisId_Create($strControlId = null) {
			$this->lblAnalisisId = new QLabel($this->objParentObject, $strControlId);
			$this->lblAnalisisId->Name = QApplication::Translate('Analisis Id');
			if ($this->blnEditMode)
				$this->lblAnalisisId->Text = $this->objAnalisis->AnalisisId;
			else
				$this->lblAnalisisId->Text = 'N/A';
			return $this->lblAnalisisId;
		}

		/**
		 * Create and setup QTextBox txtNombre
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNombre_Create($strControlId = null) {
			$this->txtNombre = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNombre->Name = QApplication::Translate('Nombre');
			$this->txtNombre->Text = $this->objAnalisis->Nombre;
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
			$this->lblNombre->Text = $this->objAnalisis->Nombre;
			return $this->lblNombre;
		}

		/**
		 * Create and setup QIntegerTextBox txtTiempoDemora
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtTiempoDemora_Create($strControlId = null) {
			$this->txtTiempoDemora = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtTiempoDemora->Name = QApplication::Translate('Tiempo Demora');
			$this->txtTiempoDemora->Text = $this->objAnalisis->TiempoDemora;
			return $this->txtTiempoDemora;
		}

		/**
		 * Create and setup QLabel lblTiempoDemora
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblTiempoDemora_Create($strControlId = null, $strFormat = null) {
			$this->lblTiempoDemora = new QLabel($this->objParentObject, $strControlId);
			$this->lblTiempoDemora->Name = QApplication::Translate('Tiempo Demora');
			$this->lblTiempoDemora->Text = $this->objAnalisis->TiempoDemora;
			$this->lblTiempoDemora->Format = $strFormat;
			return $this->lblTiempoDemora;
		}

		/**
		 * Create and setup QIntegerTextBox txtGrupo
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtGrupo_Create($strControlId = null) {
			$this->txtGrupo = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtGrupo->Name = QApplication::Translate('Grupo');
			$this->txtGrupo->Text = $this->objAnalisis->Grupo;
			return $this->txtGrupo;
		}

		/**
		 * Create and setup QLabel lblGrupo
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblGrupo_Create($strControlId = null, $strFormat = null) {
			$this->lblGrupo = new QLabel($this->objParentObject, $strControlId);
			$this->lblGrupo->Name = QApplication::Translate('Grupo');
			$this->lblGrupo->Text = $this->objAnalisis->Grupo;
			$this->lblGrupo->Format = $strFormat;
			return $this->lblGrupo;
		}

		/**
		 * Create and setup QListBox lstMetodoses
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstMetodoses_Create($strControlId = null) {
			$this->lstMetodoses = new QListBox($this->objParentObject, $strControlId);
			$this->lstMetodoses->Name = QApplication::Translate('Metodoses');
			$this->lstMetodoses->SelectionMode = QSelectionMode::Multiple;
			$objAssociatedArray = $this->objAnalisis->GetMetodosArray();
			$objMetodosArray = Metodos::LoadAll();
			if ($objMetodosArray) foreach ($objMetodosArray as $objMetodos) {
				$objListItem = new QListItem($objMetodos->__toString(), $objMetodos->MetodoId);
				foreach ($objAssociatedArray as $objAssociated) {
					if ($objAssociated->MetodoId == $objMetodos->MetodoId)
						$objListItem->Selected = true;
				}
				$this->lstMetodoses->AddItem($objListItem);
			}
			return $this->lstMetodoses;
		}

		/**
		 * Create and setup QLabel lblMetodoses
		 * @param string $strControlId optional ControlId to use
		 * @param string $strGlue glue to display in between each associated object
		 * @return QLabel
		 */
		public function lblMetodoses_Create($strControlId = null, $strGlue = ', ') {
			$this->lblMetodoses = new QLabel($this->objParentObject, $strControlId);
			$this->lblMetodoses->Name = QApplication::Translate('Metodoses');
			
			$objAssociatedArray = $this->objAnalisis->GetMetodosArray();
			$strItems = array();
			foreach ($objAssociatedArray as $objAssociated)
				$strItems[] = $objAssociated->__toString();
			$this->lblMetodoses->Text = implode($strGlue, $strItems);
			return $this->lblMetodoses;
		}


		/**
		 * Create and setup QListBox lstOrdenesTrabajos
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstOrdenesTrabajos_Create($strControlId = null) {
			$this->lstOrdenesTrabajos = new QListBox($this->objParentObject, $strControlId);
			$this->lstOrdenesTrabajos->Name = QApplication::Translate('Ordenes Trabajos');
			$this->lstOrdenesTrabajos->SelectionMode = QSelectionMode::Multiple;
			$objAssociatedArray = $this->objAnalisis->GetOrdenesTrabajoArray();
			$objOrdenesTrabajoArray = OrdenesTrabajo::LoadAll();
			if ($objOrdenesTrabajoArray) foreach ($objOrdenesTrabajoArray as $objOrdenesTrabajo) {
				$objListItem = new QListItem($objOrdenesTrabajo->__toString(), $objOrdenesTrabajo->OrdenesTrabajoId);
				foreach ($objAssociatedArray as $objAssociated) {
					if ($objAssociated->OrdenesTrabajoId == $objOrdenesTrabajo->OrdenesTrabajoId)
						$objListItem->Selected = true;
				}
				$this->lstOrdenesTrabajos->AddItem($objListItem);
			}
			return $this->lstOrdenesTrabajos;
		}

		/**
		 * Create and setup QLabel lblOrdenesTrabajos
		 * @param string $strControlId optional ControlId to use
		 * @param string $strGlue glue to display in between each associated object
		 * @return QLabel
		 */
		public function lblOrdenesTrabajos_Create($strControlId = null, $strGlue = ', ') {
			$this->lblOrdenesTrabajos = new QLabel($this->objParentObject, $strControlId);
			$this->lblOrdenesTrabajos->Name = QApplication::Translate('Ordenes Trabajos');
			
			$objAssociatedArray = $this->objAnalisis->GetOrdenesTrabajoArray();
			$strItems = array();
			foreach ($objAssociatedArray as $objAssociated)
				$strItems[] = $objAssociated->__toString();
			$this->lblOrdenesTrabajos->Text = implode($strGlue, $strItems);
			return $this->lblOrdenesTrabajos;
		}


		/**
		 * Create and setup QListBox lstUnidadeses
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstUnidadeses_Create($strControlId = null) {
			$this->lstUnidadeses = new QListBox($this->objParentObject, $strControlId);
			$this->lstUnidadeses->Name = QApplication::Translate('Unidadeses');
			$this->lstUnidadeses->SelectionMode = QSelectionMode::Multiple;
			$objAssociatedArray = $this->objAnalisis->GetUnidadesArray();
			$objUnidadesArray = Unidades::LoadAll();
			if ($objUnidadesArray) foreach ($objUnidadesArray as $objUnidades) {
				$objListItem = new QListItem($objUnidades->__toString(), $objUnidades->UnidadId);
				foreach ($objAssociatedArray as $objAssociated) {
					if ($objAssociated->UnidadId == $objUnidades->UnidadId)
						$objListItem->Selected = true;
				}
				$this->lstUnidadeses->AddItem($objListItem);
			}
			return $this->lstUnidadeses;
		}

		/**
		 * Create and setup QLabel lblUnidadeses
		 * @param string $strControlId optional ControlId to use
		 * @param string $strGlue glue to display in between each associated object
		 * @return QLabel
		 */
		public function lblUnidadeses_Create($strControlId = null, $strGlue = ', ') {
			$this->lblUnidadeses = new QLabel($this->objParentObject, $strControlId);
			$this->lblUnidadeses->Name = QApplication::Translate('Unidadeses');
			
			$objAssociatedArray = $this->objAnalisis->GetUnidadesArray();
			$strItems = array();
			foreach ($objAssociatedArray as $objAssociated)
				$strItems[] = $objAssociated->__toString();
			$this->lblUnidadeses->Text = implode($strGlue, $strItems);
			return $this->lblUnidadeses;
		}




		/**
		 * Refresh this MetaControl with Data from the local Analisis object.
		 * @param boolean $blnReload reload Analisis from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objAnalisis->Reload();

			if ($this->lblAnalisisId) if ($this->blnEditMode) $this->lblAnalisisId->Text = $this->objAnalisis->AnalisisId;

			if ($this->txtNombre) $this->txtNombre->Text = $this->objAnalisis->Nombre;
			if ($this->lblNombre) $this->lblNombre->Text = $this->objAnalisis->Nombre;

			if ($this->txtTiempoDemora) $this->txtTiempoDemora->Text = $this->objAnalisis->TiempoDemora;
			if ($this->lblTiempoDemora) $this->lblTiempoDemora->Text = $this->objAnalisis->TiempoDemora;

			if ($this->txtGrupo) $this->txtGrupo->Text = $this->objAnalisis->Grupo;
			if ($this->lblGrupo) $this->lblGrupo->Text = $this->objAnalisis->Grupo;

			if ($this->lstMetodoses) {
				$this->lstMetodoses->RemoveAllItems();
				$objAssociatedArray = $this->objAnalisis->GetMetodosArray();
				$objMetodosArray = Metodos::LoadAll();
				if ($objMetodosArray) foreach ($objMetodosArray as $objMetodos) {
					$objListItem = new QListItem($objMetodos->__toString(), $objMetodos->MetodoId);
					foreach ($objAssociatedArray as $objAssociated) {
						if ($objAssociated->MetodoId == $objMetodos->MetodoId)
							$objListItem->Selected = true;
					}
					$this->lstMetodoses->AddItem($objListItem);
				}
			}
			if ($this->lblMetodoses) {
				$objAssociatedArray = $this->objAnalisis->GetMetodosArray();
				$strItems = array();
				foreach ($objAssociatedArray as $objAssociated)
					$strItems[] = $objAssociated->__toString();
				$this->lblMetodoses->Text = implode($strGlue, $strItems);
			}

			if ($this->lstOrdenesTrabajos) {
				$this->lstOrdenesTrabajos->RemoveAllItems();
				$objAssociatedArray = $this->objAnalisis->GetOrdenesTrabajoArray();
				$objOrdenesTrabajoArray = OrdenesTrabajo::LoadAll();
				if ($objOrdenesTrabajoArray) foreach ($objOrdenesTrabajoArray as $objOrdenesTrabajo) {
					$objListItem = new QListItem($objOrdenesTrabajo->__toString(), $objOrdenesTrabajo->OrdenesTrabajoId);
					foreach ($objAssociatedArray as $objAssociated) {
						if ($objAssociated->OrdenesTrabajoId == $objOrdenesTrabajo->OrdenesTrabajoId)
							$objListItem->Selected = true;
					}
					$this->lstOrdenesTrabajos->AddItem($objListItem);
				}
			}
			if ($this->lblOrdenesTrabajos) {
				$objAssociatedArray = $this->objAnalisis->GetOrdenesTrabajoArray();
				$strItems = array();
				foreach ($objAssociatedArray as $objAssociated)
					$strItems[] = $objAssociated->__toString();
				$this->lblOrdenesTrabajos->Text = implode($strGlue, $strItems);
			}

			if ($this->lstUnidadeses) {
				$this->lstUnidadeses->RemoveAllItems();
				$objAssociatedArray = $this->objAnalisis->GetUnidadesArray();
				$objUnidadesArray = Unidades::LoadAll();
				if ($objUnidadesArray) foreach ($objUnidadesArray as $objUnidades) {
					$objListItem = new QListItem($objUnidades->__toString(), $objUnidades->UnidadId);
					foreach ($objAssociatedArray as $objAssociated) {
						if ($objAssociated->UnidadId == $objUnidades->UnidadId)
							$objListItem->Selected = true;
					}
					$this->lstUnidadeses->AddItem($objListItem);
				}
			}
			if ($this->lblUnidadeses) {
				$objAssociatedArray = $this->objAnalisis->GetUnidadesArray();
				$strItems = array();
				foreach ($objAssociatedArray as $objAssociated)
					$strItems[] = $objAssociated->__toString();
				$this->lblUnidadeses->Text = implode($strGlue, $strItems);
			}

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////

		protected function lstMetodoses_Update() {
			if ($this->lstMetodoses) {
				$this->objAnalisis->UnassociateAllMetodoses();
				$objSelectedListItems = $this->lstMetodoses->SelectedItems;
				if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
					$this->objAnalisis->AssociateMetodos(Metodos::Load($objListItem->Value));
				}
			}
		}

		protected function lstOrdenesTrabajos_Update() {
			if ($this->lstOrdenesTrabajos) {
				$this->objAnalisis->UnassociateAllOrdenesTrabajos();
				$objSelectedListItems = $this->lstOrdenesTrabajos->SelectedItems;
				if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
					$this->objAnalisis->AssociateOrdenesTrabajo(OrdenesTrabajo::Load($objListItem->Value));
				}
			}
		}

		protected function lstUnidadeses_Update() {
			if ($this->lstUnidadeses) {
				$this->objAnalisis->UnassociateAllUnidadeses();
				$objSelectedListItems = $this->lstUnidadeses->SelectedItems;
				if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
					$this->objAnalisis->AssociateUnidades(Unidades::Load($objListItem->Value));
				}
			}
		}





		///////////////////////////////////////////////
		// PUBLIC ANALISIS OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Analisis instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveAnalisis() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNombre) $this->objAnalisis->Nombre = $this->txtNombre->Text;
				if ($this->txtTiempoDemora) $this->objAnalisis->TiempoDemora = $this->txtTiempoDemora->Text;
				if ($this->txtGrupo) $this->objAnalisis->Grupo = $this->txtGrupo->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Analisis object
				$this->objAnalisis->Save();

				// Finally, update any ManyToManyReferences (if any)
				$this->lstMetodoses_Update();
				$this->lstOrdenesTrabajos_Update();
				$this->lstUnidadeses_Update();
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Analisis instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteAnalisis() {
			$this->objAnalisis->UnassociateAllMetodoses();
			$this->objAnalisis->UnassociateAllOrdenesTrabajos();
			$this->objAnalisis->UnassociateAllUnidadeses();
			$this->objAnalisis->Delete();
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
				case 'Analisis': return $this->objAnalisis;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Analisis fields -- will be created dynamically if not yet created
				case 'AnalisisIdControl':
					if (!$this->lblAnalisisId) return $this->lblAnalisisId_Create();
					return $this->lblAnalisisId;
				case 'AnalisisIdLabel':
					if (!$this->lblAnalisisId) return $this->lblAnalisisId_Create();
					return $this->lblAnalisisId;
				case 'NombreControl':
					if (!$this->txtNombre) return $this->txtNombre_Create();
					return $this->txtNombre;
				case 'NombreLabel':
					if (!$this->lblNombre) return $this->lblNombre_Create();
					return $this->lblNombre;
				case 'TiempoDemoraControl':
					if (!$this->txtTiempoDemora) return $this->txtTiempoDemora_Create();
					return $this->txtTiempoDemora;
				case 'TiempoDemoraLabel':
					if (!$this->lblTiempoDemora) return $this->lblTiempoDemora_Create();
					return $this->lblTiempoDemora;
				case 'GrupoControl':
					if (!$this->txtGrupo) return $this->txtGrupo_Create();
					return $this->txtGrupo;
				case 'GrupoLabel':
					if (!$this->lblGrupo) return $this->lblGrupo_Create();
					return $this->lblGrupo;
				case 'MetodosControl':
					if (!$this->lstMetodoses) return $this->lstMetodoses_Create();
					return $this->lstMetodoses;
				case 'MetodosLabel':
					if (!$this->lblMetodoses) return $this->lblMetodoses_Create();
					return $this->lblMetodoses;
				case 'OrdenesTrabajoControl':
					if (!$this->lstOrdenesTrabajos) return $this->lstOrdenesTrabajos_Create();
					return $this->lstOrdenesTrabajos;
				case 'OrdenesTrabajoLabel':
					if (!$this->lblOrdenesTrabajos) return $this->lblOrdenesTrabajos_Create();
					return $this->lblOrdenesTrabajos;
				case 'UnidadesControl':
					if (!$this->lstUnidadeses) return $this->lstUnidadeses_Create();
					return $this->lstUnidadeses;
				case 'UnidadesLabel':
					if (!$this->lblUnidadeses) return $this->lblUnidadeses_Create();
					return $this->lblUnidadeses;
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
					// Controls that point to Analisis fields
					case 'AnalisisIdControl':
						return ($this->lblAnalisisId = QType::Cast($mixValue, 'QControl'));
					case 'NombreControl':
						return ($this->txtNombre = QType::Cast($mixValue, 'QControl'));
					case 'TiempoDemoraControl':
						return ($this->txtTiempoDemora = QType::Cast($mixValue, 'QControl'));
					case 'GrupoControl':
						return ($this->txtGrupo = QType::Cast($mixValue, 'QControl'));
					case 'MetodosControl':
						return ($this->lstMetodoses = QType::Cast($mixValue, 'QControl'));
					case 'OrdenesTrabajoControl':
						return ($this->lstOrdenesTrabajos = QType::Cast($mixValue, 'QControl'));
					case 'UnidadesControl':
						return ($this->lstUnidadeses = QType::Cast($mixValue, 'QControl'));
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