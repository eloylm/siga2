<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Clientes class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Clientes object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a ClientesMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package SIGA
	 * @subpackage MetaControls
	 * property-read Clientes $Clientes the actual Clientes data class being edited
	 * property QLabel $ClientesIdControl
	 * property-read QLabel $ClientesIdLabel
	 * property QTextBox $NombreControl
	 * property-read QLabel $NombreLabel
	 * property QTextBox $DireccionControl
	 * property-read QLabel $DireccionLabel
	 * property QTextBox $LocalidadControl
	 * property-read QLabel $LocalidadLabel
	 * property QTextBox $ProvinciaControl
	 * property-read QLabel $ProvinciaLabel
	 * property QTextBox $EmailControl
	 * property-read QLabel $EmailLabel
	 * property QTextBox $ResponsableContactoControl
	 * property-read QLabel $ResponsableContactoLabel
	 * property QDateTimePicker $FechaAltaControl
	 * property-read QLabel $FechaAltaLabel
	 * property QCheckBox $EstadoControl
	 * property-read QLabel $EstadoLabel
	 * property QTextBox $EmailSecundarioControl
	 * property-read QLabel $EmailSecundarioLabel
	 * property QTextBox $TelefonoControl
	 * property-read QLabel $TelefonoLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class ClientesMetaControlGen extends QBaseClass {
		// General Variables
		protected $objClientes;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of Clientes's individual data fields
		protected $lblClientesId;
		protected $txtNombre;
		protected $txtDireccion;
		protected $txtLocalidad;
		protected $txtProvincia;
		protected $txtEmail;
		protected $txtResponsableContacto;
		protected $calFechaAlta;
		protected $chkEstado;
		protected $txtEmailSecundario;
		protected $txtTelefono;

		// Controls that allow the viewing of Clientes's individual data fields
		protected $lblNombre;
		protected $lblDireccion;
		protected $lblLocalidad;
		protected $lblProvincia;
		protected $lblEmail;
		protected $lblResponsableContacto;
		protected $lblFechaAlta;
		protected $lblEstado;
		protected $lblEmailSecundario;
		protected $lblTelefono;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * ClientesMetaControl to edit a single Clientes object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Clientes object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ClientesMetaControl
		 * @param Clientes $objClientes new or existing Clientes object
		 */
		 public function __construct($objParentObject, Clientes $objClientes) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this ClientesMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Clientes object
			$this->objClientes = $objClientes;

			// Figure out if we're Editing or Creating New
			if ($this->objClientes->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this ClientesMetaControl
		 * @param integer $intClientesId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Clientes object creation - defaults to CreateOrEdit
 		 * @return ClientesMetaControl
		 */
		public static function Create($objParentObject, $intClientesId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intClientesId)) {
				$objClientes = Clientes::Load($intClientesId);

				// Clientes was found -- return it!
				if ($objClientes)
					return new ClientesMetaControl($objParentObject, $objClientes);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Clientes object with PK arguments: ' . $intClientesId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new ClientesMetaControl($objParentObject, new Clientes());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ClientesMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Clientes object creation - defaults to CreateOrEdit
		 * @return ClientesMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intClientesId = QApplication::PathInfo(0);
			return ClientesMetaControl::Create($objParentObject, $intClientesId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ClientesMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Clientes object creation - defaults to CreateOrEdit
		 * @return ClientesMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intClientesId = QApplication::QueryString('intClientesId');
			return ClientesMetaControl::Create($objParentObject, $intClientesId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblClientesId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblClientesId_Create($strControlId = null) {
			$this->lblClientesId = new QLabel($this->objParentObject, $strControlId);
			$this->lblClientesId->Name = QApplication::Translate('Clientes Id');
			if ($this->blnEditMode)
				$this->lblClientesId->Text = $this->objClientes->ClientesId;
			else
				$this->lblClientesId->Text = 'N/A';
			return $this->lblClientesId;
		}

		/**
		 * Create and setup QTextBox txtNombre
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNombre_Create($strControlId = null) {
			$this->txtNombre = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNombre->Name = QApplication::Translate('Nombre');
			$this->txtNombre->Text = $this->objClientes->Nombre;
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
			$this->lblNombre->Text = $this->objClientes->Nombre;
			return $this->lblNombre;
		}

		/**
		 * Create and setup QTextBox txtDireccion
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtDireccion_Create($strControlId = null) {
			$this->txtDireccion = new QTextBox($this->objParentObject, $strControlId);
			$this->txtDireccion->Name = QApplication::Translate('Direccion');
			$this->txtDireccion->Text = $this->objClientes->Direccion;
			return $this->txtDireccion;
		}

		/**
		 * Create and setup QLabel lblDireccion
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblDireccion_Create($strControlId = null) {
			$this->lblDireccion = new QLabel($this->objParentObject, $strControlId);
			$this->lblDireccion->Name = QApplication::Translate('Direccion');
			$this->lblDireccion->Text = $this->objClientes->Direccion;
			return $this->lblDireccion;
		}

		/**
		 * Create and setup QTextBox txtLocalidad
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtLocalidad_Create($strControlId = null) {
			$this->txtLocalidad = new QTextBox($this->objParentObject, $strControlId);
			$this->txtLocalidad->Name = QApplication::Translate('Localidad');
			$this->txtLocalidad->Text = $this->objClientes->Localidad;
			return $this->txtLocalidad;
		}

		/**
		 * Create and setup QLabel lblLocalidad
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblLocalidad_Create($strControlId = null) {
			$this->lblLocalidad = new QLabel($this->objParentObject, $strControlId);
			$this->lblLocalidad->Name = QApplication::Translate('Localidad');
			$this->lblLocalidad->Text = $this->objClientes->Localidad;
			return $this->lblLocalidad;
		}

		/**
		 * Create and setup QTextBox txtProvincia
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtProvincia_Create($strControlId = null) {
			$this->txtProvincia = new QTextBox($this->objParentObject, $strControlId);
			$this->txtProvincia->Name = QApplication::Translate('Provincia');
			$this->txtProvincia->Text = $this->objClientes->Provincia;
			return $this->txtProvincia;
		}

		/**
		 * Create and setup QLabel lblProvincia
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblProvincia_Create($strControlId = null) {
			$this->lblProvincia = new QLabel($this->objParentObject, $strControlId);
			$this->lblProvincia->Name = QApplication::Translate('Provincia');
			$this->lblProvincia->Text = $this->objClientes->Provincia;
			return $this->lblProvincia;
		}

		/**
		 * Create and setup QTextBox txtEmail
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtEmail_Create($strControlId = null) {
			$this->txtEmail = new QTextBox($this->objParentObject, $strControlId);
			$this->txtEmail->Name = QApplication::Translate('Email');
			$this->txtEmail->Text = $this->objClientes->Email;
			$this->txtEmail->Required = true;
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
			$this->lblEmail->Text = $this->objClientes->Email;
			$this->lblEmail->Required = true;
			return $this->lblEmail;
		}

		/**
		 * Create and setup QTextBox txtResponsableContacto
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtResponsableContacto_Create($strControlId = null) {
			$this->txtResponsableContacto = new QTextBox($this->objParentObject, $strControlId);
			$this->txtResponsableContacto->Name = QApplication::Translate('Responsable Contacto');
			$this->txtResponsableContacto->Text = $this->objClientes->ResponsableContacto;
			return $this->txtResponsableContacto;
		}

		/**
		 * Create and setup QLabel lblResponsableContacto
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblResponsableContacto_Create($strControlId = null) {
			$this->lblResponsableContacto = new QLabel($this->objParentObject, $strControlId);
			$this->lblResponsableContacto->Name = QApplication::Translate('Responsable Contacto');
			$this->lblResponsableContacto->Text = $this->objClientes->ResponsableContacto;
			return $this->lblResponsableContacto;
		}

		/**
		 * Create and setup QDateTimePicker calFechaAlta
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calFechaAlta_Create($strControlId = null) {
			$this->calFechaAlta = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calFechaAlta->Name = QApplication::Translate('Fecha Alta');
			$this->calFechaAlta->DateTime = $this->objClientes->FechaAlta;
			$this->calFechaAlta->DateTimePickerType = QDateTimePickerType::Date;
			return $this->calFechaAlta;
		}

		/**
		 * Create and setup QLabel lblFechaAlta
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblFechaAlta_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblFechaAlta = new QLabel($this->objParentObject, $strControlId);
			$this->lblFechaAlta->Name = QApplication::Translate('Fecha Alta');
			$this->strFechaAltaDateTimeFormat = $strDateTimeFormat;
			$this->lblFechaAlta->Text = sprintf($this->objClientes->FechaAlta) ? $this->objClientes->FechaAlta->__toString($this->strFechaAltaDateTimeFormat) : null;
			return $this->lblFechaAlta;
		}

		protected $strFechaAltaDateTimeFormat;


		/**
		 * Create and setup QCheckBox chkEstado
		 * @param string $strControlId optional ControlId to use
		 * @return QCheckBox
		 */
		public function chkEstado_Create($strControlId = null) {
			$this->chkEstado = new QCheckBox($this->objParentObject, $strControlId);
			$this->chkEstado->Name = QApplication::Translate('Estado');
			$this->chkEstado->Checked = $this->objClientes->Estado;
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
			$this->lblEstado->Text = ($this->objClientes->Estado) ? QApplication::Translate('Yes') : QApplication::Translate('No');
			return $this->lblEstado;
		}

		/**
		 * Create and setup QTextBox txtEmailSecundario
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtEmailSecundario_Create($strControlId = null) {
			$this->txtEmailSecundario = new QTextBox($this->objParentObject, $strControlId);
			$this->txtEmailSecundario->Name = QApplication::Translate('Email Secundario');
			$this->txtEmailSecundario->Text = $this->objClientes->EmailSecundario;
			return $this->txtEmailSecundario;
		}

		/**
		 * Create and setup QLabel lblEmailSecundario
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblEmailSecundario_Create($strControlId = null) {
			$this->lblEmailSecundario = new QLabel($this->objParentObject, $strControlId);
			$this->lblEmailSecundario->Name = QApplication::Translate('Email Secundario');
			$this->lblEmailSecundario->Text = $this->objClientes->EmailSecundario;
			return $this->lblEmailSecundario;
		}

		/**
		 * Create and setup QTextBox txtTelefono
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtTelefono_Create($strControlId = null) {
			$this->txtTelefono = new QTextBox($this->objParentObject, $strControlId);
			$this->txtTelefono->Name = QApplication::Translate('Telefono');
			$this->txtTelefono->Text = $this->objClientes->Telefono;
			return $this->txtTelefono;
		}

		/**
		 * Create and setup QLabel lblTelefono
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblTelefono_Create($strControlId = null) {
			$this->lblTelefono = new QLabel($this->objParentObject, $strControlId);
			$this->lblTelefono->Name = QApplication::Translate('Telefono');
			$this->lblTelefono->Text = $this->objClientes->Telefono;
			return $this->lblTelefono;
		}



		/**
		 * Refresh this MetaControl with Data from the local Clientes object.
		 * @param boolean $blnReload reload Clientes from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objClientes->Reload();

			if ($this->lblClientesId) if ($this->blnEditMode) $this->lblClientesId->Text = $this->objClientes->ClientesId;

			if ($this->txtNombre) $this->txtNombre->Text = $this->objClientes->Nombre;
			if ($this->lblNombre) $this->lblNombre->Text = $this->objClientes->Nombre;

			if ($this->txtDireccion) $this->txtDireccion->Text = $this->objClientes->Direccion;
			if ($this->lblDireccion) $this->lblDireccion->Text = $this->objClientes->Direccion;

			if ($this->txtLocalidad) $this->txtLocalidad->Text = $this->objClientes->Localidad;
			if ($this->lblLocalidad) $this->lblLocalidad->Text = $this->objClientes->Localidad;

			if ($this->txtProvincia) $this->txtProvincia->Text = $this->objClientes->Provincia;
			if ($this->lblProvincia) $this->lblProvincia->Text = $this->objClientes->Provincia;

			if ($this->txtEmail) $this->txtEmail->Text = $this->objClientes->Email;
			if ($this->lblEmail) $this->lblEmail->Text = $this->objClientes->Email;

			if ($this->txtResponsableContacto) $this->txtResponsableContacto->Text = $this->objClientes->ResponsableContacto;
			if ($this->lblResponsableContacto) $this->lblResponsableContacto->Text = $this->objClientes->ResponsableContacto;

			if ($this->calFechaAlta) $this->calFechaAlta->DateTime = $this->objClientes->FechaAlta;
			if ($this->lblFechaAlta) $this->lblFechaAlta->Text = sprintf($this->objClientes->FechaAlta) ? $this->objClientes->FechaAlta->__toString($this->strFechaAltaDateTimeFormat) : null;

			if ($this->chkEstado) $this->chkEstado->Checked = $this->objClientes->Estado;
			if ($this->lblEstado) $this->lblEstado->Text = ($this->objClientes->Estado) ? QApplication::Translate('Yes') : QApplication::Translate('No');

			if ($this->txtEmailSecundario) $this->txtEmailSecundario->Text = $this->objClientes->EmailSecundario;
			if ($this->lblEmailSecundario) $this->lblEmailSecundario->Text = $this->objClientes->EmailSecundario;

			if ($this->txtTelefono) $this->txtTelefono->Text = $this->objClientes->Telefono;
			if ($this->lblTelefono) $this->lblTelefono->Text = $this->objClientes->Telefono;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC CLIENTES OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Clientes instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveClientes() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNombre) $this->objClientes->Nombre = $this->txtNombre->Text;
				if ($this->txtDireccion) $this->objClientes->Direccion = $this->txtDireccion->Text;
				if ($this->txtLocalidad) $this->objClientes->Localidad = $this->txtLocalidad->Text;
				if ($this->txtProvincia) $this->objClientes->Provincia = $this->txtProvincia->Text;
				if ($this->txtEmail) $this->objClientes->Email = $this->txtEmail->Text;
				if ($this->txtResponsableContacto) $this->objClientes->ResponsableContacto = $this->txtResponsableContacto->Text;
				if ($this->calFechaAlta) $this->objClientes->FechaAlta = $this->calFechaAlta->DateTime;
				if ($this->chkEstado) $this->objClientes->Estado = $this->chkEstado->Checked;
				if ($this->txtEmailSecundario) $this->objClientes->EmailSecundario = $this->txtEmailSecundario->Text;
				if ($this->txtTelefono) $this->objClientes->Telefono = $this->txtTelefono->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Clientes object
				$this->objClientes->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Clientes instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteClientes() {
			$this->objClientes->Delete();
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
				case 'Clientes': return $this->objClientes;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Clientes fields -- will be created dynamically if not yet created
				case 'ClientesIdControl':
					if (!$this->lblClientesId) return $this->lblClientesId_Create();
					return $this->lblClientesId;
				case 'ClientesIdLabel':
					if (!$this->lblClientesId) return $this->lblClientesId_Create();
					return $this->lblClientesId;
				case 'NombreControl':
					if (!$this->txtNombre) return $this->txtNombre_Create();
					return $this->txtNombre;
				case 'NombreLabel':
					if (!$this->lblNombre) return $this->lblNombre_Create();
					return $this->lblNombre;
				case 'DireccionControl':
					if (!$this->txtDireccion) return $this->txtDireccion_Create();
					return $this->txtDireccion;
				case 'DireccionLabel':
					if (!$this->lblDireccion) return $this->lblDireccion_Create();
					return $this->lblDireccion;
				case 'LocalidadControl':
					if (!$this->txtLocalidad) return $this->txtLocalidad_Create();
					return $this->txtLocalidad;
				case 'LocalidadLabel':
					if (!$this->lblLocalidad) return $this->lblLocalidad_Create();
					return $this->lblLocalidad;
				case 'ProvinciaControl':
					if (!$this->txtProvincia) return $this->txtProvincia_Create();
					return $this->txtProvincia;
				case 'ProvinciaLabel':
					if (!$this->lblProvincia) return $this->lblProvincia_Create();
					return $this->lblProvincia;
				case 'EmailControl':
					if (!$this->txtEmail) return $this->txtEmail_Create();
					return $this->txtEmail;
				case 'EmailLabel':
					if (!$this->lblEmail) return $this->lblEmail_Create();
					return $this->lblEmail;
				case 'ResponsableContactoControl':
					if (!$this->txtResponsableContacto) return $this->txtResponsableContacto_Create();
					return $this->txtResponsableContacto;
				case 'ResponsableContactoLabel':
					if (!$this->lblResponsableContacto) return $this->lblResponsableContacto_Create();
					return $this->lblResponsableContacto;
				case 'FechaAltaControl':
					if (!$this->calFechaAlta) return $this->calFechaAlta_Create();
					return $this->calFechaAlta;
				case 'FechaAltaLabel':
					if (!$this->lblFechaAlta) return $this->lblFechaAlta_Create();
					return $this->lblFechaAlta;
				case 'EstadoControl':
					if (!$this->chkEstado) return $this->chkEstado_Create();
					return $this->chkEstado;
				case 'EstadoLabel':
					if (!$this->lblEstado) return $this->lblEstado_Create();
					return $this->lblEstado;
				case 'EmailSecundarioControl':
					if (!$this->txtEmailSecundario) return $this->txtEmailSecundario_Create();
					return $this->txtEmailSecundario;
				case 'EmailSecundarioLabel':
					if (!$this->lblEmailSecundario) return $this->lblEmailSecundario_Create();
					return $this->lblEmailSecundario;
				case 'TelefonoControl':
					if (!$this->txtTelefono) return $this->txtTelefono_Create();
					return $this->txtTelefono;
				case 'TelefonoLabel':
					if (!$this->lblTelefono) return $this->lblTelefono_Create();
					return $this->lblTelefono;
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
					// Controls that point to Clientes fields
					case 'ClientesIdControl':
						return ($this->lblClientesId = QType::Cast($mixValue, 'QControl'));
					case 'NombreControl':
						return ($this->txtNombre = QType::Cast($mixValue, 'QControl'));
					case 'DireccionControl':
						return ($this->txtDireccion = QType::Cast($mixValue, 'QControl'));
					case 'LocalidadControl':
						return ($this->txtLocalidad = QType::Cast($mixValue, 'QControl'));
					case 'ProvinciaControl':
						return ($this->txtProvincia = QType::Cast($mixValue, 'QControl'));
					case 'EmailControl':
						return ($this->txtEmail = QType::Cast($mixValue, 'QControl'));
					case 'ResponsableContactoControl':
						return ($this->txtResponsableContacto = QType::Cast($mixValue, 'QControl'));
					case 'FechaAltaControl':
						return ($this->calFechaAlta = QType::Cast($mixValue, 'QControl'));
					case 'EstadoControl':
						return ($this->chkEstado = QType::Cast($mixValue, 'QControl'));
					case 'EmailSecundarioControl':
						return ($this->txtEmailSecundario = QType::Cast($mixValue, 'QControl'));
					case 'TelefonoControl':
						return ($this->txtTelefono = QType::Cast($mixValue, 'QControl'));
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