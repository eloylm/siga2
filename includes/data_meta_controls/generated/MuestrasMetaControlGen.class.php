<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Muestras class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Muestras object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a MuestrasMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package SIGA
	 * @subpackage MetaControls
	 * property-read Muestras $Muestras the actual Muestras data class being edited
	 * property QLabel $MuestrasIdControl
	 * property-read QLabel $MuestrasIdLabel
	 * property QTextBox $DetalleControl
	 * property-read QLabel $DetalleLabel
	 * property QTextBox $ObservacionesControl
	 * property-read QLabel $ObservacionesLabel
	 * property QListBox $ClientesIdControl
	 * property-read QLabel $ClientesIdLabel
	 * property QCheckBox $EstadoControl
	 * property-read QLabel $EstadoLabel
	 * property QListBox $UsuariosIdControl
	 * property-read QLabel $UsuariosIdLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class MuestrasMetaControlGen extends QBaseClass {
		// General Variables
		protected $objMuestras;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of Muestras's individual data fields
		protected $lblMuestrasId;
		protected $txtDetalle;
		protected $txtObservaciones;
		protected $lstClientes;
		protected $chkEstado;
		protected $lstUsuarios;

		// Controls that allow the viewing of Muestras's individual data fields
		protected $lblDetalle;
		protected $lblObservaciones;
		protected $lblClientesId;
		protected $lblEstado;
		protected $lblUsuariosId;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * MuestrasMetaControl to edit a single Muestras object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Muestras object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this MuestrasMetaControl
		 * @param Muestras $objMuestras new or existing Muestras object
		 */
		 public function __construct($objParentObject, Muestras $objMuestras) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this MuestrasMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Muestras object
			$this->objMuestras = $objMuestras;

			// Figure out if we're Editing or Creating New
			if ($this->objMuestras->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this MuestrasMetaControl
		 * @param integer $intMuestrasId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Muestras object creation - defaults to CreateOrEdit
 		 * @return MuestrasMetaControl
		 */
		public static function Create($objParentObject, $intMuestrasId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intMuestrasId)) {
				$objMuestras = Muestras::Load($intMuestrasId);

				// Muestras was found -- return it!
				if ($objMuestras)
					return new MuestrasMetaControl($objParentObject, $objMuestras);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Muestras object with PK arguments: ' . $intMuestrasId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new MuestrasMetaControl($objParentObject, new Muestras());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this MuestrasMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Muestras object creation - defaults to CreateOrEdit
		 * @return MuestrasMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intMuestrasId = QApplication::PathInfo(0);
			return MuestrasMetaControl::Create($objParentObject, $intMuestrasId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this MuestrasMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Muestras object creation - defaults to CreateOrEdit
		 * @return MuestrasMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intMuestrasId = QApplication::QueryString('intMuestrasId');
			return MuestrasMetaControl::Create($objParentObject, $intMuestrasId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblMuestrasId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblMuestrasId_Create($strControlId = null) {
			$this->lblMuestrasId = new QLabel($this->objParentObject, $strControlId);
			$this->lblMuestrasId->Name = QApplication::Translate('Muestras Id');
			if ($this->blnEditMode)
				$this->lblMuestrasId->Text = $this->objMuestras->MuestrasId;
			else
				$this->lblMuestrasId->Text = 'N/A';
			return $this->lblMuestrasId;
		}

		/**
		 * Create and setup QTextBox txtDetalle
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtDetalle_Create($strControlId = null) {
			$this->txtDetalle = new QTextBox($this->objParentObject, $strControlId);
			$this->txtDetalle->Name = QApplication::Translate('Detalle');
			$this->txtDetalle->Text = $this->objMuestras->Detalle;
			return $this->txtDetalle;
		}

		/**
		 * Create and setup QLabel lblDetalle
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblDetalle_Create($strControlId = null) {
			$this->lblDetalle = new QLabel($this->objParentObject, $strControlId);
			$this->lblDetalle->Name = QApplication::Translate('Detalle');
			$this->lblDetalle->Text = $this->objMuestras->Detalle;
			return $this->lblDetalle;
		}

		/**
		 * Create and setup QTextBox txtObservaciones
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtObservaciones_Create($strControlId = null) {
			$this->txtObservaciones = new QTextBox($this->objParentObject, $strControlId);
			$this->txtObservaciones->Name = QApplication::Translate('Observaciones');
			$this->txtObservaciones->Text = $this->objMuestras->Observaciones;
			return $this->txtObservaciones;
		}

		/**
		 * Create and setup QLabel lblObservaciones
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblObservaciones_Create($strControlId = null) {
			$this->lblObservaciones = new QLabel($this->objParentObject, $strControlId);
			$this->lblObservaciones->Name = QApplication::Translate('Observaciones');
			$this->lblObservaciones->Text = $this->objMuestras->Observaciones;
			return $this->lblObservaciones;
		}

		/**
		 * Create and setup QListBox lstClientes
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstClientes_Create($strControlId = null) {
			$this->lstClientes = new QListBox($this->objParentObject, $strControlId);
			$this->lstClientes->Name = QApplication::Translate('Clientes');
			$this->lstClientes->AddItem(QApplication::Translate('- Select One -'), null);
			$objClientesArray = Clientes::LoadAll();
			if ($objClientesArray) foreach ($objClientesArray as $objClientes) {
				$objListItem = new QListItem($objClientes->__toString(), $objClientes->ClientesId);
				if (($this->objMuestras->Clientes) && ($this->objMuestras->Clientes->ClientesId == $objClientes->ClientesId))
					$objListItem->Selected = true;
				$this->lstClientes->AddItem($objListItem);
			}
			return $this->lstClientes;
		}

		/**
		 * Create and setup QLabel lblClientesId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblClientesId_Create($strControlId = null) {
			$this->lblClientesId = new QLabel($this->objParentObject, $strControlId);
			$this->lblClientesId->Name = QApplication::Translate('Clientes');
			$this->lblClientesId->Text = ($this->objMuestras->Clientes) ? $this->objMuestras->Clientes->__toString() : null;
			return $this->lblClientesId;
		}

		/**
		 * Create and setup QCheckBox chkEstado
		 * @param string $strControlId optional ControlId to use
		 * @return QCheckBox
		 */
		public function chkEstado_Create($strControlId = null) {
			$this->chkEstado = new QCheckBox($this->objParentObject, $strControlId);
			$this->chkEstado->Name = QApplication::Translate('Estado');
			$this->chkEstado->Checked = $this->objMuestras->Estado;
			return $this->chkEstado;
		}

		/**
		 * Create and setup QLabel lblEstado
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblEstado_Create($strControlId = null) {
			$this->lblEstado = new QLabel($this->objParentObject, $strControlId);
			$this->lblEstado->Name = QApplication::Translate('Estado');
			$this->lblEstado->Text = ($this->objMuestras->Estado) ? QApplication::Translate('Yes') : QApplication::Translate('No');
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
			$this->lstUsuarios->Required = true;
			if (!$this->blnEditMode)
				$this->lstUsuarios->AddItem(QApplication::Translate('- Select One -'), null);
			$objUsuariosArray = Usuarios::LoadAll();
			if ($objUsuariosArray) foreach ($objUsuariosArray as $objUsuarios) {
				$objListItem = new QListItem($objUsuarios->__toString(), $objUsuarios->UsuariosId);
				if (($this->objMuestras->Usuarios) && ($this->objMuestras->Usuarios->UsuariosId == $objUsuarios->UsuariosId))
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
			$this->lblUsuariosId->Text = ($this->objMuestras->Usuarios) ? $this->objMuestras->Usuarios->__toString() : null;
			$this->lblUsuariosId->Required = true;
			return $this->lblUsuariosId;
		}



		/**
		 * Refresh this MetaControl with Data from the local Muestras object.
		 * @param boolean $blnReload reload Muestras from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objMuestras->Reload();

			if ($this->lblMuestrasId) if ($this->blnEditMode) $this->lblMuestrasId->Text = $this->objMuestras->MuestrasId;

			if ($this->txtDetalle) $this->txtDetalle->Text = $this->objMuestras->Detalle;
			if ($this->lblDetalle) $this->lblDetalle->Text = $this->objMuestras->Detalle;

			if ($this->txtObservaciones) $this->txtObservaciones->Text = $this->objMuestras->Observaciones;
			if ($this->lblObservaciones) $this->lblObservaciones->Text = $this->objMuestras->Observaciones;

			if ($this->lstClientes) {
					$this->lstClientes->RemoveAllItems();
				$this->lstClientes->AddItem(QApplication::Translate('- Select One -'), null);
				$objClientesArray = Clientes::LoadAll();
				if ($objClientesArray) foreach ($objClientesArray as $objClientes) {
					$objListItem = new QListItem($objClientes->__toString(), $objClientes->ClientesId);
					if (($this->objMuestras->Clientes) && ($this->objMuestras->Clientes->ClientesId == $objClientes->ClientesId))
						$objListItem->Selected = true;
					$this->lstClientes->AddItem($objListItem);
				}
			}
			if ($this->lblClientesId) $this->lblClientesId->Text = ($this->objMuestras->Clientes) ? $this->objMuestras->Clientes->__toString() : null;

			if ($this->chkEstado) $this->chkEstado->Checked = $this->objMuestras->Estado;
			if ($this->lblEstado) $this->lblEstado->Text = ($this->objMuestras->Estado) ? QApplication::Translate('Yes') : QApplication::Translate('No');

			if ($this->lstUsuarios) {
					$this->lstUsuarios->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstUsuarios->AddItem(QApplication::Translate('- Select One -'), null);
				$objUsuariosArray = Usuarios::LoadAll();
				if ($objUsuariosArray) foreach ($objUsuariosArray as $objUsuarios) {
					$objListItem = new QListItem($objUsuarios->__toString(), $objUsuarios->UsuariosId);
					if (($this->objMuestras->Usuarios) && ($this->objMuestras->Usuarios->UsuariosId == $objUsuarios->UsuariosId))
						$objListItem->Selected = true;
					$this->lstUsuarios->AddItem($objListItem);
				}
			}
			if ($this->lblUsuariosId) $this->lblUsuariosId->Text = ($this->objMuestras->Usuarios) ? $this->objMuestras->Usuarios->__toString() : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC MUESTRAS OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Muestras instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveMuestras() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtDetalle) $this->objMuestras->Detalle = $this->txtDetalle->Text;
				if ($this->txtObservaciones) $this->objMuestras->Observaciones = $this->txtObservaciones->Text;
				if ($this->lstClientes) $this->objMuestras->ClientesId = $this->lstClientes->SelectedValue;
				if ($this->chkEstado) $this->objMuestras->Estado = $this->chkEstado->Checked;
				if ($this->lstUsuarios) $this->objMuestras->UsuariosId = $this->lstUsuarios->SelectedValue;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Muestras object
				$this->objMuestras->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Muestras instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteMuestras() {
			$this->objMuestras->Delete();
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
				case 'Muestras': return $this->objMuestras;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Muestras fields -- will be created dynamically if not yet created
				case 'MuestrasIdControl':
					if (!$this->lblMuestrasId) return $this->lblMuestrasId_Create();
					return $this->lblMuestrasId;
				case 'MuestrasIdLabel':
					if (!$this->lblMuestrasId) return $this->lblMuestrasId_Create();
					return $this->lblMuestrasId;
				case 'DetalleControl':
					if (!$this->txtDetalle) return $this->txtDetalle_Create();
					return $this->txtDetalle;
				case 'DetalleLabel':
					if (!$this->lblDetalle) return $this->lblDetalle_Create();
					return $this->lblDetalle;
				case 'ObservacionesControl':
					if (!$this->txtObservaciones) return $this->txtObservaciones_Create();
					return $this->txtObservaciones;
				case 'ObservacionesLabel':
					if (!$this->lblObservaciones) return $this->lblObservaciones_Create();
					return $this->lblObservaciones;
				case 'ClientesIdControl':
					if (!$this->lstClientes) return $this->lstClientes_Create();
					return $this->lstClientes;
				case 'ClientesIdLabel':
					if (!$this->lblClientesId) return $this->lblClientesId_Create();
					return $this->lblClientesId;
				case 'EstadoControl':
					if (!$this->chkEstado) return $this->chkEstado_Create();
					return $this->chkEstado;
				case 'EstadoLabel':
					if (!$this->lblEstado) return $this->lblEstado_Create();
					return $this->lblEstado;
				case 'UsuariosIdControl':
					if (!$this->lstUsuarios) return $this->lstUsuarios_Create();
					return $this->lstUsuarios;
				case 'UsuariosIdLabel':
					if (!$this->lblUsuariosId) return $this->lblUsuariosId_Create();
					return $this->lblUsuariosId;
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
					// Controls that point to Muestras fields
					case 'MuestrasIdControl':
						return ($this->lblMuestrasId = QType::Cast($mixValue, 'QControl'));
					case 'DetalleControl':
						return ($this->txtDetalle = QType::Cast($mixValue, 'QControl'));
					case 'ObservacionesControl':
						return ($this->txtObservaciones = QType::Cast($mixValue, 'QControl'));
					case 'ClientesIdControl':
						return ($this->lstClientes = QType::Cast($mixValue, 'QControl'));
					case 'EstadoControl':
						return ($this->chkEstado = QType::Cast($mixValue, 'QControl'));
					case 'UsuariosIdControl':
						return ($this->lstUsuarios = QType::Cast($mixValue, 'QControl'));
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