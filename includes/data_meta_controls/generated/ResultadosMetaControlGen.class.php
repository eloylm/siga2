<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Resultados class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Resultados object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a ResultadosMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Resultados $Resultados the actual Resultados data class being edited
	 * property QLabel $ResultadosIdControl
	 * property-read QLabel $ResultadosIdLabel
	 * property QListBox $OrdenesTrabajoIdControl
	 * property-read QLabel $OrdenesTrabajoIdLabel
	 * property QListBox $AnalisisIdControl
	 * property-read QLabel $AnalisisIdLabel
	 * property QTextBox $EstadoControl
	 * property-read QLabel $EstadoLabel
	 * property QListBox $UsuariosIdControl
	 * property-read QLabel $UsuariosIdLabel
	 * property QDateTimePicker $FechaControl
	 * property-read QLabel $FechaLabel
	 * property QTextBox $NormaControl
	 * property-read QLabel $NormaLabel
	 * property QTextBox $MedicionControl
	 * property-read QLabel $MedicionLabel
	 * property QTextBox $ResultadoControl
	 * property-read QLabel $ResultadoLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class ResultadosMetaControlGen extends QBaseClass {
		// General Variables
		protected $objResultados;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of Resultados's individual data fields
		protected $lblResultadosId;
		protected $lstOrdenesTrabajo;
		protected $lstAnalisis;
		protected $txtEstado;
		protected $lstUsuarios;
		protected $calFecha;
		protected $txtNorma;
		protected $txtMedicion;
		protected $txtResultado;

		// Controls that allow the viewing of Resultados's individual data fields
		protected $lblOrdenesTrabajoId;
		protected $lblAnalisisId;
		protected $lblEstado;
		protected $lblUsuariosId;
		protected $lblFecha;
		protected $lblNorma;
		protected $lblMedicion;
		protected $lblResultado;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * ResultadosMetaControl to edit a single Resultados object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Resultados object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ResultadosMetaControl
		 * @param Resultados $objResultados new or existing Resultados object
		 */
		 public function __construct($objParentObject, Resultados $objResultados) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this ResultadosMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Resultados object
			$this->objResultados = $objResultados;

			// Figure out if we're Editing or Creating New
			if ($this->objResultados->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this ResultadosMetaControl
		 * @param integer $intResultadosId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Resultados object creation - defaults to CreateOrEdit
 		 * @return ResultadosMetaControl
		 */
		public static function Create($objParentObject, $intResultadosId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intResultadosId)) {
				$objResultados = Resultados::Load($intResultadosId);

				// Resultados was found -- return it!
				if ($objResultados)
					return new ResultadosMetaControl($objParentObject, $objResultados);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Resultados object with PK arguments: ' . $intResultadosId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new ResultadosMetaControl($objParentObject, new Resultados());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ResultadosMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Resultados object creation - defaults to CreateOrEdit
		 * @return ResultadosMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intResultadosId = QApplication::PathInfo(0);
			return ResultadosMetaControl::Create($objParentObject, $intResultadosId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ResultadosMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Resultados object creation - defaults to CreateOrEdit
		 * @return ResultadosMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intResultadosId = QApplication::QueryString('intResultadosId');
			return ResultadosMetaControl::Create($objParentObject, $intResultadosId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblResultadosId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblResultadosId_Create($strControlId = null) {
			$this->lblResultadosId = new QLabel($this->objParentObject, $strControlId);
			$this->lblResultadosId->Name = QApplication::Translate('Resultados Id');
			if ($this->blnEditMode)
				$this->lblResultadosId->Text = $this->objResultados->ResultadosId;
			else
				$this->lblResultadosId->Text = 'N/A';
			return $this->lblResultadosId;
		}

		/**
		 * Create and setup QListBox lstOrdenesTrabajo
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstOrdenesTrabajo_Create($strControlId = null) {
			$this->lstOrdenesTrabajo = new QListBox($this->objParentObject, $strControlId);
			$this->lstOrdenesTrabajo->Name = QApplication::Translate('Ordenes Trabajo');
			$this->lstOrdenesTrabajo->AddItem(QApplication::Translate('- Select One -'), null);
			$objOrdenesTrabajoArray = OrdenesTrabajo::LoadAll();
			if ($objOrdenesTrabajoArray) foreach ($objOrdenesTrabajoArray as $objOrdenesTrabajo) {
				$objListItem = new QListItem($objOrdenesTrabajo->__toString(), $objOrdenesTrabajo->OrdenesTrabajoId);
				if (($this->objResultados->OrdenesTrabajo) && ($this->objResultados->OrdenesTrabajo->OrdenesTrabajoId == $objOrdenesTrabajo->OrdenesTrabajoId))
					$objListItem->Selected = true;
				$this->lstOrdenesTrabajo->AddItem($objListItem);
			}
			return $this->lstOrdenesTrabajo;
		}

		/**
		 * Create and setup QLabel lblOrdenesTrabajoId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblOrdenesTrabajoId_Create($strControlId = null) {
			$this->lblOrdenesTrabajoId = new QLabel($this->objParentObject, $strControlId);
			$this->lblOrdenesTrabajoId->Name = QApplication::Translate('Ordenes Trabajo');
			$this->lblOrdenesTrabajoId->Text = ($this->objResultados->OrdenesTrabajo) ? $this->objResultados->OrdenesTrabajo->__toString() : null;
			return $this->lblOrdenesTrabajoId;
		}

		/**
		 * Create and setup QListBox lstAnalisis
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstAnalisis_Create($strControlId = null) {
			$this->lstAnalisis = new QListBox($this->objParentObject, $strControlId);
			$this->lstAnalisis->Name = QApplication::Translate('Analisis');
			$this->lstAnalisis->AddItem(QApplication::Translate('- Select One -'), null);
			$objAnalisisArray = Analisis::LoadAll();
			if ($objAnalisisArray) foreach ($objAnalisisArray as $objAnalisis) {
				$objListItem = new QListItem($objAnalisis->__toString(), $objAnalisis->AnalisisId);
				if (($this->objResultados->Analisis) && ($this->objResultados->Analisis->AnalisisId == $objAnalisis->AnalisisId))
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
			$this->lblAnalisisId->Text = ($this->objResultados->Analisis) ? $this->objResultados->Analisis->__toString() : null;
			return $this->lblAnalisisId;
		}

		/**
		 * Create and setup QTextBox txtEstado
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtEstado_Create($strControlId = null) {
			$this->txtEstado = new QTextBox($this->objParentObject, $strControlId);
			$this->txtEstado->Name = QApplication::Translate('Estado');
			$this->txtEstado->Text = $this->objResultados->Estado;
			return $this->txtEstado;
		}

		/**
		 * Create and setup QLabel lblEstado
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblEstado_Create($strControlId = null) {
			$this->lblEstado = new QLabel($this->objParentObject, $strControlId);
			$this->lblEstado->Name = QApplication::Translate('Estado');
			$this->lblEstado->Text = $this->objResultados->Estado;
			return $this->lblEstado;
		}

		/**
		 * Create and setup QListBox lstUsuarios
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstUsuarios_Create($strControlId = null) {
			$this->lstUsuarios = new QListBox($this->objParentObject, $strControlId);
			$this->lstUsuarios->Name = QApplication::Translate('Usuarios');
			$this->lstUsuarios->AddItem(QApplication::Translate('- Select One -'), null);
			$objUsuariosArray = Usuarios::LoadAll();
			if ($objUsuariosArray) foreach ($objUsuariosArray as $objUsuarios) {
				$objListItem = new QListItem($objUsuarios->__toString(), $objUsuarios->UsuariosId);
				if (($this->objResultados->Usuarios) && ($this->objResultados->Usuarios->UsuariosId == $objUsuarios->UsuariosId))
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
			$this->lblUsuariosId->Text = ($this->objResultados->Usuarios) ? $this->objResultados->Usuarios->__toString() : null;
			return $this->lblUsuariosId;
		}

		/**
		 * Create and setup QDateTimePicker calFecha
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calFecha_Create($strControlId = null) {
			$this->calFecha = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calFecha->Name = QApplication::Translate('Fecha');
			$this->calFecha->DateTime = $this->objResultados->Fecha;
			$this->calFecha->DateTimePickerType = QDateTimePickerType::Date;
			return $this->calFecha;
		}

		/**
		 * Create and setup QLabel lblFecha
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblFecha_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblFecha = new QLabel($this->objParentObject, $strControlId);
			$this->lblFecha->Name = QApplication::Translate('Fecha');
			$this->strFechaDateTimeFormat = $strDateTimeFormat;
			$this->lblFecha->Text = sprintf($this->objResultados->Fecha) ? $this->objResultados->Fecha->__toString($this->strFechaDateTimeFormat) : null;
			return $this->lblFecha;
		}

		protected $strFechaDateTimeFormat;


		/**
		 * Create and setup QTextBox txtNorma
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNorma_Create($strControlId = null) {
			$this->txtNorma = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNorma->Name = QApplication::Translate('Norma');
			$this->txtNorma->Text = $this->objResultados->Norma;
			return $this->txtNorma;
		}

		/**
		 * Create and setup QLabel lblNorma
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblNorma_Create($strControlId = null) {
			$this->lblNorma = new QLabel($this->objParentObject, $strControlId);
			$this->lblNorma->Name = QApplication::Translate('Norma');
			$this->lblNorma->Text = $this->objResultados->Norma;
			return $this->lblNorma;
		}

		/**
		 * Create and setup QTextBox txtMedicion
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtMedicion_Create($strControlId = null) {
			$this->txtMedicion = new QTextBox($this->objParentObject, $strControlId);
			$this->txtMedicion->Name = QApplication::Translate('Medicion');
			$this->txtMedicion->Text = $this->objResultados->Medicion;
			return $this->txtMedicion;
		}

		/**
		 * Create and setup QLabel lblMedicion
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblMedicion_Create($strControlId = null) {
			$this->lblMedicion = new QLabel($this->objParentObject, $strControlId);
			$this->lblMedicion->Name = QApplication::Translate('Medicion');
			$this->lblMedicion->Text = $this->objResultados->Medicion;
			return $this->lblMedicion;
		}

		/**
		 * Create and setup QTextBox txtResultado
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtResultado_Create($strControlId = null) {
			$this->txtResultado = new QTextBox($this->objParentObject, $strControlId);
			$this->txtResultado->Name = QApplication::Translate('Resultado');
			$this->txtResultado->Text = $this->objResultados->Resultado;
			return $this->txtResultado;
		}

		/**
		 * Create and setup QLabel lblResultado
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblResultado_Create($strControlId = null) {
			$this->lblResultado = new QLabel($this->objParentObject, $strControlId);
			$this->lblResultado->Name = QApplication::Translate('Resultado');
			$this->lblResultado->Text = $this->objResultados->Resultado;
			return $this->lblResultado;
		}



		/**
		 * Refresh this MetaControl with Data from the local Resultados object.
		 * @param boolean $blnReload reload Resultados from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objResultados->Reload();

			if ($this->lblResultadosId) if ($this->blnEditMode) $this->lblResultadosId->Text = $this->objResultados->ResultadosId;

			if ($this->lstOrdenesTrabajo) {
					$this->lstOrdenesTrabajo->RemoveAllItems();
				$this->lstOrdenesTrabajo->AddItem(QApplication::Translate('- Select One -'), null);
				$objOrdenesTrabajoArray = OrdenesTrabajo::LoadAll();
				if ($objOrdenesTrabajoArray) foreach ($objOrdenesTrabajoArray as $objOrdenesTrabajo) {
					$objListItem = new QListItem($objOrdenesTrabajo->__toString(), $objOrdenesTrabajo->OrdenesTrabajoId);
					if (($this->objResultados->OrdenesTrabajo) && ($this->objResultados->OrdenesTrabajo->OrdenesTrabajoId == $objOrdenesTrabajo->OrdenesTrabajoId))
						$objListItem->Selected = true;
					$this->lstOrdenesTrabajo->AddItem($objListItem);
				}
			}
			if ($this->lblOrdenesTrabajoId) $this->lblOrdenesTrabajoId->Text = ($this->objResultados->OrdenesTrabajo) ? $this->objResultados->OrdenesTrabajo->__toString() : null;

			if ($this->lstAnalisis) {
					$this->lstAnalisis->RemoveAllItems();
				$this->lstAnalisis->AddItem(QApplication::Translate('- Select One -'), null);
				$objAnalisisArray = Analisis::LoadAll();
				if ($objAnalisisArray) foreach ($objAnalisisArray as $objAnalisis) {
					$objListItem = new QListItem($objAnalisis->__toString(), $objAnalisis->AnalisisId);
					if (($this->objResultados->Analisis) && ($this->objResultados->Analisis->AnalisisId == $objAnalisis->AnalisisId))
						$objListItem->Selected = true;
					$this->lstAnalisis->AddItem($objListItem);
				}
			}
			if ($this->lblAnalisisId) $this->lblAnalisisId->Text = ($this->objResultados->Analisis) ? $this->objResultados->Analisis->__toString() : null;

			if ($this->txtEstado) $this->txtEstado->Text = $this->objResultados->Estado;
			if ($this->lblEstado) $this->lblEstado->Text = $this->objResultados->Estado;

			if ($this->lstUsuarios) {
					$this->lstUsuarios->RemoveAllItems();
				$this->lstUsuarios->AddItem(QApplication::Translate('- Select One -'), null);
				$objUsuariosArray = Usuarios::LoadAll();
				if ($objUsuariosArray) foreach ($objUsuariosArray as $objUsuarios) {
					$objListItem = new QListItem($objUsuarios->__toString(), $objUsuarios->UsuariosId);
					if (($this->objResultados->Usuarios) && ($this->objResultados->Usuarios->UsuariosId == $objUsuarios->UsuariosId))
						$objListItem->Selected = true;
					$this->lstUsuarios->AddItem($objListItem);
				}
			}
			if ($this->lblUsuariosId) $this->lblUsuariosId->Text = ($this->objResultados->Usuarios) ? $this->objResultados->Usuarios->__toString() : null;

			if ($this->calFecha) $this->calFecha->DateTime = $this->objResultados->Fecha;
			if ($this->lblFecha) $this->lblFecha->Text = sprintf($this->objResultados->Fecha) ? $this->objResultados->Fecha->__toString($this->strFechaDateTimeFormat) : null;

			if ($this->txtNorma) $this->txtNorma->Text = $this->objResultados->Norma;
			if ($this->lblNorma) $this->lblNorma->Text = $this->objResultados->Norma;

			if ($this->txtMedicion) $this->txtMedicion->Text = $this->objResultados->Medicion;
			if ($this->lblMedicion) $this->lblMedicion->Text = $this->objResultados->Medicion;

			if ($this->txtResultado) $this->txtResultado->Text = $this->objResultados->Resultado;
			if ($this->lblResultado) $this->lblResultado->Text = $this->objResultados->Resultado;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC RESULTADOS OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Resultados instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveResultados() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstOrdenesTrabajo) $this->objResultados->OrdenesTrabajoId = $this->lstOrdenesTrabajo->SelectedValue;
				if ($this->lstAnalisis) $this->objResultados->AnalisisId = $this->lstAnalisis->SelectedValue;
				if ($this->txtEstado) $this->objResultados->Estado = $this->txtEstado->Text;
				if ($this->lstUsuarios) $this->objResultados->UsuariosId = $this->lstUsuarios->SelectedValue;
				if ($this->calFecha) $this->objResultados->Fecha = $this->calFecha->DateTime;
				if ($this->txtNorma) $this->objResultados->Norma = $this->txtNorma->Text;
				if ($this->txtMedicion) $this->objResultados->Medicion = $this->txtMedicion->Text;
				if ($this->txtResultado) $this->objResultados->Resultado = $this->txtResultado->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Resultados object
				$this->objResultados->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Resultados instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteResultados() {
			$this->objResultados->Delete();
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
				case 'Resultados': return $this->objResultados;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Resultados fields -- will be created dynamically if not yet created
				case 'ResultadosIdControl':
					if (!$this->lblResultadosId) return $this->lblResultadosId_Create();
					return $this->lblResultadosId;
				case 'ResultadosIdLabel':
					if (!$this->lblResultadosId) return $this->lblResultadosId_Create();
					return $this->lblResultadosId;
				case 'OrdenesTrabajoIdControl':
					if (!$this->lstOrdenesTrabajo) return $this->lstOrdenesTrabajo_Create();
					return $this->lstOrdenesTrabajo;
				case 'OrdenesTrabajoIdLabel':
					if (!$this->lblOrdenesTrabajoId) return $this->lblOrdenesTrabajoId_Create();
					return $this->lblOrdenesTrabajoId;
				case 'AnalisisIdControl':
					if (!$this->lstAnalisis) return $this->lstAnalisis_Create();
					return $this->lstAnalisis;
				case 'AnalisisIdLabel':
					if (!$this->lblAnalisisId) return $this->lblAnalisisId_Create();
					return $this->lblAnalisisId;
				case 'EstadoControl':
					if (!$this->txtEstado) return $this->txtEstado_Create();
					return $this->txtEstado;
				case 'EstadoLabel':
					if (!$this->lblEstado) return $this->lblEstado_Create();
					return $this->lblEstado;
				case 'UsuariosIdControl':
					if (!$this->lstUsuarios) return $this->lstUsuarios_Create();
					return $this->lstUsuarios;
				case 'UsuariosIdLabel':
					if (!$this->lblUsuariosId) return $this->lblUsuariosId_Create();
					return $this->lblUsuariosId;
				case 'FechaControl':
					if (!$this->calFecha) return $this->calFecha_Create();
					return $this->calFecha;
				case 'FechaLabel':
					if (!$this->lblFecha) return $this->lblFecha_Create();
					return $this->lblFecha;
				case 'NormaControl':
					if (!$this->txtNorma) return $this->txtNorma_Create();
					return $this->txtNorma;
				case 'NormaLabel':
					if (!$this->lblNorma) return $this->lblNorma_Create();
					return $this->lblNorma;
				case 'MedicionControl':
					if (!$this->txtMedicion) return $this->txtMedicion_Create();
					return $this->txtMedicion;
				case 'MedicionLabel':
					if (!$this->lblMedicion) return $this->lblMedicion_Create();
					return $this->lblMedicion;
				case 'ResultadoControl':
					if (!$this->txtResultado) return $this->txtResultado_Create();
					return $this->txtResultado;
				case 'ResultadoLabel':
					if (!$this->lblResultado) return $this->lblResultado_Create();
					return $this->lblResultado;
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
					// Controls that point to Resultados fields
					case 'ResultadosIdControl':
						return ($this->lblResultadosId = QType::Cast($mixValue, 'QControl'));
					case 'OrdenesTrabajoIdControl':
						return ($this->lstOrdenesTrabajo = QType::Cast($mixValue, 'QControl'));
					case 'AnalisisIdControl':
						return ($this->lstAnalisis = QType::Cast($mixValue, 'QControl'));
					case 'EstadoControl':
						return ($this->txtEstado = QType::Cast($mixValue, 'QControl'));
					case 'UsuariosIdControl':
						return ($this->lstUsuarios = QType::Cast($mixValue, 'QControl'));
					case 'FechaControl':
						return ($this->calFecha = QType::Cast($mixValue, 'QControl'));
					case 'NormaControl':
						return ($this->txtNorma = QType::Cast($mixValue, 'QControl'));
					case 'MedicionControl':
						return ($this->txtMedicion = QType::Cast($mixValue, 'QControl'));
					case 'ResultadoControl':
						return ($this->txtResultado = QType::Cast($mixValue, 'QControl'));
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