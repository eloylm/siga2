<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the OrdenesTrabajo class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single OrdenesTrabajo object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a OrdenesTrabajoMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read OrdenesTrabajo $OrdenesTrabajo the actual OrdenesTrabajo data class being edited
	 * property QLabel $OrdenesTrabajoIdControl
	 * property-read QLabel $OrdenesTrabajoIdLabel
	 * property QDateTimePicker $FechaEntradaControl
	 * property-read QLabel $FechaEntradaLabel
	 * property QListBox $ClientesIdControl
	 * property-read QLabel $ClientesIdLabel
	 * property QTextBox $CargadorControl
	 * property-read QLabel $CargadorLabel
	 * property QTextBox $BuqueControl
	 * property-read QLabel $BuqueLabel
	 * property QIntegerTextBox $KgControl
	 * property-read QLabel $KgLabel
	 * property QTextBox $PuertoControl
	 * property-read QLabel $PuertoLabel
	 * property QTextBox $ReferenciaClienteControl
	 * property-read QLabel $ReferenciaClienteLabel
	 * property QTextBox $DestinoControl
	 * property-read QLabel $DestinoLabel
	 * property QListBox $MuestrasIdControl
	 * property-read QLabel $MuestrasIdLabel
	 * property QListBox $UsuariosIdControl
	 * property-read QLabel $UsuariosIdLabel
	 * property QCheckBox $NewControl
	 * property-read QLabel $NewLabel
	 * property QTextBox $EstadoControl
	 * property-read QLabel $EstadoLabel
	 * property QTextBox $ObservacionesControl
	 * property-read QLabel $ObservacionesLabel
	 * property QDateTimePicker $FechaFinalizadoControl
	 * property-read QLabel $FechaFinalizadoLabel
	 * property QListBox $AnalisisControl
	 * property-read QLabel $AnalisisLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class OrdenesTrabajoMetaControlGen extends QBaseClass {
		// General Variables
		protected $objOrdenesTrabajo;
		protected $objParentObject;
		protected $strTitleVerb;
		protected $blnEditMode;

		// Controls that allow the editing of OrdenesTrabajo's individual data fields
		protected $lblOrdenesTrabajoId;
		protected $calFechaEntrada;
		protected $lstClientes;
		protected $txtCargador;
		protected $txtBuque;
		protected $txtKg;
		protected $txtPuerto;
		protected $txtReferenciaCliente;
		protected $txtDestino;
		protected $lstMuestras;
		protected $lstUsuarios;
		protected $chkNew;
		protected $txtEstado;
		protected $txtObservaciones;
		protected $calFechaFinalizado;

		// Controls that allow the viewing of OrdenesTrabajo's individual data fields
		protected $lblFechaEntrada;
		protected $lblClientesId;
		protected $lblCargador;
		protected $lblBuque;
		protected $lblKg;
		protected $lblPuerto;
		protected $lblReferenciaCliente;
		protected $lblDestino;
		protected $lblMuestrasId;
		protected $lblUsuariosId;
		protected $lblNew;
		protected $lblEstado;
		protected $lblObservaciones;
		protected $lblFechaFinalizado;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References
		protected $lstAnalisises;

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References
		protected $lblAnalisises;


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * OrdenesTrabajoMetaControl to edit a single OrdenesTrabajo object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single OrdenesTrabajo object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this OrdenesTrabajoMetaControl
		 * @param OrdenesTrabajo $objOrdenesTrabajo new or existing OrdenesTrabajo object
		 */
		 public function __construct($objParentObject, OrdenesTrabajo $objOrdenesTrabajo) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this OrdenesTrabajoMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked OrdenesTrabajo object
			$this->objOrdenesTrabajo = $objOrdenesTrabajo;

			// Figure out if we're Editing or Creating New
			if ($this->objOrdenesTrabajo->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this OrdenesTrabajoMetaControl
		 * @param integer $intOrdenesTrabajoId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing OrdenesTrabajo object creation - defaults to CreateOrEdit
 		 * @return OrdenesTrabajoMetaControl
		 */
		public static function Create($objParentObject, $intOrdenesTrabajoId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intOrdenesTrabajoId)) {
				$objOrdenesTrabajo = OrdenesTrabajo::Load($intOrdenesTrabajoId);

				// OrdenesTrabajo was found -- return it!
				if ($objOrdenesTrabajo)
					return new OrdenesTrabajoMetaControl($objParentObject, $objOrdenesTrabajo);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a OrdenesTrabajo object with PK arguments: ' . $intOrdenesTrabajoId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new OrdenesTrabajoMetaControl($objParentObject, new OrdenesTrabajo());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this OrdenesTrabajoMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing OrdenesTrabajo object creation - defaults to CreateOrEdit
		 * @return OrdenesTrabajoMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intOrdenesTrabajoId = QApplication::PathInfo(0);
			return OrdenesTrabajoMetaControl::Create($objParentObject, $intOrdenesTrabajoId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this OrdenesTrabajoMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing OrdenesTrabajo object creation - defaults to CreateOrEdit
		 * @return OrdenesTrabajoMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intOrdenesTrabajoId = QApplication::QueryString('intOrdenesTrabajoId');
			return OrdenesTrabajoMetaControl::Create($objParentObject, $intOrdenesTrabajoId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblOrdenesTrabajoId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblOrdenesTrabajoId_Create($strControlId = null) {
			$this->lblOrdenesTrabajoId = new QLabel($this->objParentObject, $strControlId);
			$this->lblOrdenesTrabajoId->Name = QApplication::Translate('Ordenes Trabajo Id');
			if ($this->blnEditMode)
				$this->lblOrdenesTrabajoId->Text = $this->objOrdenesTrabajo->OrdenesTrabajoId;
			else
				$this->lblOrdenesTrabajoId->Text = 'N/A';
			return $this->lblOrdenesTrabajoId;
		}

		/**
		 * Create and setup QDateTimePicker calFechaEntrada
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calFechaEntrada_Create($strControlId = null) {
			$this->calFechaEntrada = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calFechaEntrada->Name = QApplication::Translate('Fecha Entrada');
			$this->calFechaEntrada->DateTime = $this->objOrdenesTrabajo->FechaEntrada;
			$this->calFechaEntrada->DateTimePickerType = QDateTimePickerType::Date;
			return $this->calFechaEntrada;
		}

		/**
		 * Create and setup QLabel lblFechaEntrada
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblFechaEntrada_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblFechaEntrada = new QLabel($this->objParentObject, $strControlId);
			$this->lblFechaEntrada->Name = QApplication::Translate('Fecha Entrada');
			$this->strFechaEntradaDateTimeFormat = $strDateTimeFormat;
			$this->lblFechaEntrada->Text = sprintf($this->objOrdenesTrabajo->FechaEntrada) ? $this->objOrdenesTrabajo->FechaEntrada->__toString($this->strFechaEntradaDateTimeFormat) : null;
			return $this->lblFechaEntrada;
		}

		protected $strFechaEntradaDateTimeFormat;


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
				if (($this->objOrdenesTrabajo->Clientes) && ($this->objOrdenesTrabajo->Clientes->ClientesId == $objClientes->ClientesId))
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
			$this->lblClientesId->Text = ($this->objOrdenesTrabajo->Clientes) ? $this->objOrdenesTrabajo->Clientes->__toString() : null;
			return $this->lblClientesId;
		}

		/**
		 * Create and setup QTextBox txtCargador
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCargador_Create($strControlId = null) {
			$this->txtCargador = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCargador->Name = QApplication::Translate('Cargador');
			$this->txtCargador->Text = $this->objOrdenesTrabajo->Cargador;
			return $this->txtCargador;
		}

		/**
		 * Create and setup QLabel lblCargador
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCargador_Create($strControlId = null) {
			$this->lblCargador = new QLabel($this->objParentObject, $strControlId);
			$this->lblCargador->Name = QApplication::Translate('Cargador');
			$this->lblCargador->Text = $this->objOrdenesTrabajo->Cargador;
			return $this->lblCargador;
		}

		/**
		 * Create and setup QTextBox txtBuque
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtBuque_Create($strControlId = null) {
			$this->txtBuque = new QTextBox($this->objParentObject, $strControlId);
			$this->txtBuque->Name = QApplication::Translate('Buque');
			$this->txtBuque->Text = $this->objOrdenesTrabajo->Buque;
			return $this->txtBuque;
		}

		/**
		 * Create and setup QLabel lblBuque
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblBuque_Create($strControlId = null) {
			$this->lblBuque = new QLabel($this->objParentObject, $strControlId);
			$this->lblBuque->Name = QApplication::Translate('Buque');
			$this->lblBuque->Text = $this->objOrdenesTrabajo->Buque;
			return $this->lblBuque;
		}

		/**
		 * Create and setup QIntegerTextBox txtKg
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtKg_Create($strControlId = null) {
			$this->txtKg = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtKg->Name = QApplication::Translate('Kg');
			$this->txtKg->Text = $this->objOrdenesTrabajo->Kg;
			return $this->txtKg;
		}

		/**
		 * Create and setup QLabel lblKg
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblKg_Create($strControlId = null, $strFormat = null) {
			$this->lblKg = new QLabel($this->objParentObject, $strControlId);
			$this->lblKg->Name = QApplication::Translate('Kg');
			$this->lblKg->Text = $this->objOrdenesTrabajo->Kg;
			$this->lblKg->Format = $strFormat;
			return $this->lblKg;
		}

		/**
		 * Create and setup QTextBox txtPuerto
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtPuerto_Create($strControlId = null) {
			$this->txtPuerto = new QTextBox($this->objParentObject, $strControlId);
			$this->txtPuerto->Name = QApplication::Translate('Puerto');
			$this->txtPuerto->Text = $this->objOrdenesTrabajo->Puerto;
			return $this->txtPuerto;
		}

		/**
		 * Create and setup QLabel lblPuerto
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPuerto_Create($strControlId = null) {
			$this->lblPuerto = new QLabel($this->objParentObject, $strControlId);
			$this->lblPuerto->Name = QApplication::Translate('Puerto');
			$this->lblPuerto->Text = $this->objOrdenesTrabajo->Puerto;
			return $this->lblPuerto;
		}

		/**
		 * Create and setup QTextBox txtReferenciaCliente
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtReferenciaCliente_Create($strControlId = null) {
			$this->txtReferenciaCliente = new QTextBox($this->objParentObject, $strControlId);
			$this->txtReferenciaCliente->Name = QApplication::Translate('Referencia Cliente');
			$this->txtReferenciaCliente->Text = $this->objOrdenesTrabajo->ReferenciaCliente;
			return $this->txtReferenciaCliente;
		}

		/**
		 * Create and setup QLabel lblReferenciaCliente
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblReferenciaCliente_Create($strControlId = null) {
			$this->lblReferenciaCliente = new QLabel($this->objParentObject, $strControlId);
			$this->lblReferenciaCliente->Name = QApplication::Translate('Referencia Cliente');
			$this->lblReferenciaCliente->Text = $this->objOrdenesTrabajo->ReferenciaCliente;
			return $this->lblReferenciaCliente;
		}

		/**
		 * Create and setup QTextBox txtDestino
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtDestino_Create($strControlId = null) {
			$this->txtDestino = new QTextBox($this->objParentObject, $strControlId);
			$this->txtDestino->Name = QApplication::Translate('Destino');
			$this->txtDestino->Text = $this->objOrdenesTrabajo->Destino;
			return $this->txtDestino;
		}

		/**
		 * Create and setup QLabel lblDestino
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblDestino_Create($strControlId = null) {
			$this->lblDestino = new QLabel($this->objParentObject, $strControlId);
			$this->lblDestino->Name = QApplication::Translate('Destino');
			$this->lblDestino->Text = $this->objOrdenesTrabajo->Destino;
			return $this->lblDestino;
		}

		/**
		 * Create and setup QListBox lstMuestras
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstMuestras_Create($strControlId = null) {
			$this->lstMuestras = new QListBox($this->objParentObject, $strControlId);
			$this->lstMuestras->Name = QApplication::Translate('Muestras');
			$this->lstMuestras->AddItem(QApplication::Translate('- Select One -'), null);
			$objMuestrasArray = Muestras::LoadAll();
			if ($objMuestrasArray) foreach ($objMuestrasArray as $objMuestras) {
				$objListItem = new QListItem($objMuestras->__toString(), $objMuestras->MuestrasId);
				if (($this->objOrdenesTrabajo->Muestras) && ($this->objOrdenesTrabajo->Muestras->MuestrasId == $objMuestras->MuestrasId))
					$objListItem->Selected = true;
				$this->lstMuestras->AddItem($objListItem);
			}
			return $this->lstMuestras;
		}

		/**
		 * Create and setup QLabel lblMuestrasId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblMuestrasId_Create($strControlId = null) {
			$this->lblMuestrasId = new QLabel($this->objParentObject, $strControlId);
			$this->lblMuestrasId->Name = QApplication::Translate('Muestras');
			$this->lblMuestrasId->Text = ($this->objOrdenesTrabajo->Muestras) ? $this->objOrdenesTrabajo->Muestras->__toString() : null;
			return $this->lblMuestrasId;
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
				if (($this->objOrdenesTrabajo->Usuarios) && ($this->objOrdenesTrabajo->Usuarios->UsuariosId == $objUsuarios->UsuariosId))
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
			$this->lblUsuariosId->Text = ($this->objOrdenesTrabajo->Usuarios) ? $this->objOrdenesTrabajo->Usuarios->__toString() : null;
			return $this->lblUsuariosId;
		}

		/**
		 * Create and setup QCheckBox chkNew
		 * @param string $strControlId optional ControlId to use
		 * @return QCheckBox
		 */
		public function chkNew_Create($strControlId = null) {
			$this->chkNew = new QCheckBox($this->objParentObject, $strControlId);
			$this->chkNew->Name = QApplication::Translate('New');
			$this->chkNew->Checked = $this->objOrdenesTrabajo->New;
			return $this->chkNew;
		}

		/**
		 * Create and setup QLabel lblNew
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblNew_Create($strControlId = null) {
			$this->lblNew = new QLabel($this->objParentObject, $strControlId);
			$this->lblNew->Name = QApplication::Translate('New');
			$this->lblNew->Text = ($this->objOrdenesTrabajo->New) ? QApplication::Translate('Yes') : QApplication::Translate('No');
			return $this->lblNew;
		}

		/**
		 * Create and setup QTextBox txtEstado
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtEstado_Create($strControlId = null) {
			$this->txtEstado = new QTextBox($this->objParentObject, $strControlId);
			$this->txtEstado->Name = QApplication::Translate('Estado');
			$this->txtEstado->Text = $this->objOrdenesTrabajo->Estado;
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
			$this->lblEstado->Text = $this->objOrdenesTrabajo->Estado;
			return $this->lblEstado;
		}

		/**
		 * Create and setup QTextBox txtObservaciones
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtObservaciones_Create($strControlId = null) {
			$this->txtObservaciones = new QTextBox($this->objParentObject, $strControlId);
			$this->txtObservaciones->Name = QApplication::Translate('Observaciones');
			$this->txtObservaciones->Text = $this->objOrdenesTrabajo->Observaciones;
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
			$this->lblObservaciones->Text = $this->objOrdenesTrabajo->Observaciones;
			return $this->lblObservaciones;
		}

		/**
		 * Create and setup QDateTimePicker calFechaFinalizado
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calFechaFinalizado_Create($strControlId = null) {
			$this->calFechaFinalizado = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calFechaFinalizado->Name = QApplication::Translate('Fecha Finalizado');
			$this->calFechaFinalizado->DateTime = $this->objOrdenesTrabajo->FechaFinalizado;
			$this->calFechaFinalizado->DateTimePickerType = QDateTimePickerType::Date;
			return $this->calFechaFinalizado;
		}

		/**
		 * Create and setup QLabel lblFechaFinalizado
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblFechaFinalizado_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblFechaFinalizado = new QLabel($this->objParentObject, $strControlId);
			$this->lblFechaFinalizado->Name = QApplication::Translate('Fecha Finalizado');
			$this->strFechaFinalizadoDateTimeFormat = $strDateTimeFormat;
			$this->lblFechaFinalizado->Text = sprintf($this->objOrdenesTrabajo->FechaFinalizado) ? $this->objOrdenesTrabajo->FechaFinalizado->__toString($this->strFechaFinalizadoDateTimeFormat) : null;
			return $this->lblFechaFinalizado;
		}

		protected $strFechaFinalizadoDateTimeFormat;


		/**
		 * Create and setup QListBox lstAnalisises
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstAnalisises_Create($strControlId = null) {
			$this->lstAnalisises = new QListBox($this->objParentObject, $strControlId);
			$this->lstAnalisises->Name = QApplication::Translate('Analisises');
			$this->lstAnalisises->SelectionMode = QSelectionMode::Multiple;
			$objAssociatedArray = $this->objOrdenesTrabajo->GetAnalisisArray();
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
			
			$objAssociatedArray = $this->objOrdenesTrabajo->GetAnalisisArray();
			$strItems = array();
			foreach ($objAssociatedArray as $objAssociated)
				$strItems[] = $objAssociated->__toString();
			$this->lblAnalisises->Text = implode($strGlue, $strItems);
			return $this->lblAnalisises;
		}




		/**
		 * Refresh this MetaControl with Data from the local OrdenesTrabajo object.
		 * @param boolean $blnReload reload OrdenesTrabajo from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objOrdenesTrabajo->Reload();

			if ($this->lblOrdenesTrabajoId) if ($this->blnEditMode) $this->lblOrdenesTrabajoId->Text = $this->objOrdenesTrabajo->OrdenesTrabajoId;

			if ($this->calFechaEntrada) $this->calFechaEntrada->DateTime = $this->objOrdenesTrabajo->FechaEntrada;
			if ($this->lblFechaEntrada) $this->lblFechaEntrada->Text = sprintf($this->objOrdenesTrabajo->FechaEntrada) ? $this->objOrdenesTrabajo->FechaEntrada->__toString($this->strFechaEntradaDateTimeFormat) : null;

			if ($this->lstClientes) {
					$this->lstClientes->RemoveAllItems();
				$this->lstClientes->AddItem(QApplication::Translate('- Select One -'), null);
				$objClientesArray = Clientes::LoadAll();
				if ($objClientesArray) foreach ($objClientesArray as $objClientes) {
					$objListItem = new QListItem($objClientes->__toString(), $objClientes->ClientesId);
					if (($this->objOrdenesTrabajo->Clientes) && ($this->objOrdenesTrabajo->Clientes->ClientesId == $objClientes->ClientesId))
						$objListItem->Selected = true;
					$this->lstClientes->AddItem($objListItem);
				}
			}
			if ($this->lblClientesId) $this->lblClientesId->Text = ($this->objOrdenesTrabajo->Clientes) ? $this->objOrdenesTrabajo->Clientes->__toString() : null;

			if ($this->txtCargador) $this->txtCargador->Text = $this->objOrdenesTrabajo->Cargador;
			if ($this->lblCargador) $this->lblCargador->Text = $this->objOrdenesTrabajo->Cargador;

			if ($this->txtBuque) $this->txtBuque->Text = $this->objOrdenesTrabajo->Buque;
			if ($this->lblBuque) $this->lblBuque->Text = $this->objOrdenesTrabajo->Buque;

			if ($this->txtKg) $this->txtKg->Text = $this->objOrdenesTrabajo->Kg;
			if ($this->lblKg) $this->lblKg->Text = $this->objOrdenesTrabajo->Kg;

			if ($this->txtPuerto) $this->txtPuerto->Text = $this->objOrdenesTrabajo->Puerto;
			if ($this->lblPuerto) $this->lblPuerto->Text = $this->objOrdenesTrabajo->Puerto;

			if ($this->txtReferenciaCliente) $this->txtReferenciaCliente->Text = $this->objOrdenesTrabajo->ReferenciaCliente;
			if ($this->lblReferenciaCliente) $this->lblReferenciaCliente->Text = $this->objOrdenesTrabajo->ReferenciaCliente;

			if ($this->txtDestino) $this->txtDestino->Text = $this->objOrdenesTrabajo->Destino;
			if ($this->lblDestino) $this->lblDestino->Text = $this->objOrdenesTrabajo->Destino;

			if ($this->lstMuestras) {
					$this->lstMuestras->RemoveAllItems();
				$this->lstMuestras->AddItem(QApplication::Translate('- Select One -'), null);
				$objMuestrasArray = Muestras::LoadAll();
				if ($objMuestrasArray) foreach ($objMuestrasArray as $objMuestras) {
					$objListItem = new QListItem($objMuestras->__toString(), $objMuestras->MuestrasId);
					if (($this->objOrdenesTrabajo->Muestras) && ($this->objOrdenesTrabajo->Muestras->MuestrasId == $objMuestras->MuestrasId))
						$objListItem->Selected = true;
					$this->lstMuestras->AddItem($objListItem);
				}
			}
			if ($this->lblMuestrasId) $this->lblMuestrasId->Text = ($this->objOrdenesTrabajo->Muestras) ? $this->objOrdenesTrabajo->Muestras->__toString() : null;

			if ($this->lstUsuarios) {
					$this->lstUsuarios->RemoveAllItems();
				$this->lstUsuarios->AddItem(QApplication::Translate('- Select One -'), null);
				$objUsuariosArray = Usuarios::LoadAll();
				if ($objUsuariosArray) foreach ($objUsuariosArray as $objUsuarios) {
					$objListItem = new QListItem($objUsuarios->__toString(), $objUsuarios->UsuariosId);
					if (($this->objOrdenesTrabajo->Usuarios) && ($this->objOrdenesTrabajo->Usuarios->UsuariosId == $objUsuarios->UsuariosId))
						$objListItem->Selected = true;
					$this->lstUsuarios->AddItem($objListItem);
				}
			}
			if ($this->lblUsuariosId) $this->lblUsuariosId->Text = ($this->objOrdenesTrabajo->Usuarios) ? $this->objOrdenesTrabajo->Usuarios->__toString() : null;

			if ($this->chkNew) $this->chkNew->Checked = $this->objOrdenesTrabajo->New;
			if ($this->lblNew) $this->lblNew->Text = ($this->objOrdenesTrabajo->New) ? QApplication::Translate('Yes') : QApplication::Translate('No');

			if ($this->txtEstado) $this->txtEstado->Text = $this->objOrdenesTrabajo->Estado;
			if ($this->lblEstado) $this->lblEstado->Text = $this->objOrdenesTrabajo->Estado;

			if ($this->txtObservaciones) $this->txtObservaciones->Text = $this->objOrdenesTrabajo->Observaciones;
			if ($this->lblObservaciones) $this->lblObservaciones->Text = $this->objOrdenesTrabajo->Observaciones;

			if ($this->calFechaFinalizado) $this->calFechaFinalizado->DateTime = $this->objOrdenesTrabajo->FechaFinalizado;
			if ($this->lblFechaFinalizado) $this->lblFechaFinalizado->Text = sprintf($this->objOrdenesTrabajo->FechaFinalizado) ? $this->objOrdenesTrabajo->FechaFinalizado->__toString($this->strFechaFinalizadoDateTimeFormat) : null;

			if ($this->lstAnalisises) {
				$this->lstAnalisises->RemoveAllItems();
				$objAssociatedArray = $this->objOrdenesTrabajo->GetAnalisisArray();
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
				$objAssociatedArray = $this->objOrdenesTrabajo->GetAnalisisArray();
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
				$this->objOrdenesTrabajo->UnassociateAllAnalisises();
				$objSelectedListItems = $this->lstAnalisises->SelectedItems;
				if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
					$this->objOrdenesTrabajo->AssociateAnalisis(Analisis::Load($objListItem->Value));
				}
			}
		}





		///////////////////////////////////////////////
		// PUBLIC ORDENESTRABAJO OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's OrdenesTrabajo instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveOrdenesTrabajo() {
			try {
				// Update any fields for controls that have been created
				if ($this->calFechaEntrada) $this->objOrdenesTrabajo->FechaEntrada = $this->calFechaEntrada->DateTime;
				if ($this->lstClientes) $this->objOrdenesTrabajo->ClientesId = $this->lstClientes->SelectedValue;
				if ($this->txtCargador) $this->objOrdenesTrabajo->Cargador = $this->txtCargador->Text;
				if ($this->txtBuque) $this->objOrdenesTrabajo->Buque = $this->txtBuque->Text;
				if ($this->txtKg) $this->objOrdenesTrabajo->Kg = $this->txtKg->Text;
				if ($this->txtPuerto) $this->objOrdenesTrabajo->Puerto = $this->txtPuerto->Text;
				if ($this->txtReferenciaCliente) $this->objOrdenesTrabajo->ReferenciaCliente = $this->txtReferenciaCliente->Text;
				if ($this->txtDestino) $this->objOrdenesTrabajo->Destino = $this->txtDestino->Text;
				if ($this->lstMuestras) $this->objOrdenesTrabajo->MuestrasId = $this->lstMuestras->SelectedValue;
				if ($this->lstUsuarios) $this->objOrdenesTrabajo->UsuariosId = $this->lstUsuarios->SelectedValue;
				if ($this->chkNew) $this->objOrdenesTrabajo->New = $this->chkNew->Checked;
				if ($this->txtEstado) $this->objOrdenesTrabajo->Estado = $this->txtEstado->Text;
				if ($this->txtObservaciones) $this->objOrdenesTrabajo->Observaciones = $this->txtObservaciones->Text;
				if ($this->calFechaFinalizado) $this->objOrdenesTrabajo->FechaFinalizado = $this->calFechaFinalizado->DateTime;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the OrdenesTrabajo object
				$this->objOrdenesTrabajo->Save();

				// Finally, update any ManyToManyReferences (if any)
				$this->lstAnalisises_Update();
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's OrdenesTrabajo instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteOrdenesTrabajo() {
			$this->objOrdenesTrabajo->UnassociateAllAnalisises();
			$this->objOrdenesTrabajo->Delete();
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
				case 'OrdenesTrabajo': return $this->objOrdenesTrabajo;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to OrdenesTrabajo fields -- will be created dynamically if not yet created
				case 'OrdenesTrabajoIdControl':
					if (!$this->lblOrdenesTrabajoId) return $this->lblOrdenesTrabajoId_Create();
					return $this->lblOrdenesTrabajoId;
				case 'OrdenesTrabajoIdLabel':
					if (!$this->lblOrdenesTrabajoId) return $this->lblOrdenesTrabajoId_Create();
					return $this->lblOrdenesTrabajoId;
				case 'FechaEntradaControl':
					if (!$this->calFechaEntrada) return $this->calFechaEntrada_Create();
					return $this->calFechaEntrada;
				case 'FechaEntradaLabel':
					if (!$this->lblFechaEntrada) return $this->lblFechaEntrada_Create();
					return $this->lblFechaEntrada;
				case 'ClientesIdControl':
					if (!$this->lstClientes) return $this->lstClientes_Create();
					return $this->lstClientes;
				case 'ClientesIdLabel':
					if (!$this->lblClientesId) return $this->lblClientesId_Create();
					return $this->lblClientesId;
				case 'CargadorControl':
					if (!$this->txtCargador) return $this->txtCargador_Create();
					return $this->txtCargador;
				case 'CargadorLabel':
					if (!$this->lblCargador) return $this->lblCargador_Create();
					return $this->lblCargador;
				case 'BuqueControl':
					if (!$this->txtBuque) return $this->txtBuque_Create();
					return $this->txtBuque;
				case 'BuqueLabel':
					if (!$this->lblBuque) return $this->lblBuque_Create();
					return $this->lblBuque;
				case 'KgControl':
					if (!$this->txtKg) return $this->txtKg_Create();
					return $this->txtKg;
				case 'KgLabel':
					if (!$this->lblKg) return $this->lblKg_Create();
					return $this->lblKg;
				case 'PuertoControl':
					if (!$this->txtPuerto) return $this->txtPuerto_Create();
					return $this->txtPuerto;
				case 'PuertoLabel':
					if (!$this->lblPuerto) return $this->lblPuerto_Create();
					return $this->lblPuerto;
				case 'ReferenciaClienteControl':
					if (!$this->txtReferenciaCliente) return $this->txtReferenciaCliente_Create();
					return $this->txtReferenciaCliente;
				case 'ReferenciaClienteLabel':
					if (!$this->lblReferenciaCliente) return $this->lblReferenciaCliente_Create();
					return $this->lblReferenciaCliente;
				case 'DestinoControl':
					if (!$this->txtDestino) return $this->txtDestino_Create();
					return $this->txtDestino;
				case 'DestinoLabel':
					if (!$this->lblDestino) return $this->lblDestino_Create();
					return $this->lblDestino;
				case 'MuestrasIdControl':
					if (!$this->lstMuestras) return $this->lstMuestras_Create();
					return $this->lstMuestras;
				case 'MuestrasIdLabel':
					if (!$this->lblMuestrasId) return $this->lblMuestrasId_Create();
					return $this->lblMuestrasId;
				case 'UsuariosIdControl':
					if (!$this->lstUsuarios) return $this->lstUsuarios_Create();
					return $this->lstUsuarios;
				case 'UsuariosIdLabel':
					if (!$this->lblUsuariosId) return $this->lblUsuariosId_Create();
					return $this->lblUsuariosId;
				case 'NewControl':
					if (!$this->chkNew) return $this->chkNew_Create();
					return $this->chkNew;
				case 'NewLabel':
					if (!$this->lblNew) return $this->lblNew_Create();
					return $this->lblNew;
				case 'EstadoControl':
					if (!$this->txtEstado) return $this->txtEstado_Create();
					return $this->txtEstado;
				case 'EstadoLabel':
					if (!$this->lblEstado) return $this->lblEstado_Create();
					return $this->lblEstado;
				case 'ObservacionesControl':
					if (!$this->txtObservaciones) return $this->txtObservaciones_Create();
					return $this->txtObservaciones;
				case 'ObservacionesLabel':
					if (!$this->lblObservaciones) return $this->lblObservaciones_Create();
					return $this->lblObservaciones;
				case 'FechaFinalizadoControl':
					if (!$this->calFechaFinalizado) return $this->calFechaFinalizado_Create();
					return $this->calFechaFinalizado;
				case 'FechaFinalizadoLabel':
					if (!$this->lblFechaFinalizado) return $this->lblFechaFinalizado_Create();
					return $this->lblFechaFinalizado;
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
					// Controls that point to OrdenesTrabajo fields
					case 'OrdenesTrabajoIdControl':
						return ($this->lblOrdenesTrabajoId = QType::Cast($mixValue, 'QControl'));
					case 'FechaEntradaControl':
						return ($this->calFechaEntrada = QType::Cast($mixValue, 'QControl'));
					case 'ClientesIdControl':
						return ($this->lstClientes = QType::Cast($mixValue, 'QControl'));
					case 'CargadorControl':
						return ($this->txtCargador = QType::Cast($mixValue, 'QControl'));
					case 'BuqueControl':
						return ($this->txtBuque = QType::Cast($mixValue, 'QControl'));
					case 'KgControl':
						return ($this->txtKg = QType::Cast($mixValue, 'QControl'));
					case 'PuertoControl':
						return ($this->txtPuerto = QType::Cast($mixValue, 'QControl'));
					case 'ReferenciaClienteControl':
						return ($this->txtReferenciaCliente = QType::Cast($mixValue, 'QControl'));
					case 'DestinoControl':
						return ($this->txtDestino = QType::Cast($mixValue, 'QControl'));
					case 'MuestrasIdControl':
						return ($this->lstMuestras = QType::Cast($mixValue, 'QControl'));
					case 'UsuariosIdControl':
						return ($this->lstUsuarios = QType::Cast($mixValue, 'QControl'));
					case 'NewControl':
						return ($this->chkNew = QType::Cast($mixValue, 'QControl'));
					case 'EstadoControl':
						return ($this->txtEstado = QType::Cast($mixValue, 'QControl'));
					case 'ObservacionesControl':
						return ($this->txtObservaciones = QType::Cast($mixValue, 'QControl'));
					case 'FechaFinalizadoControl':
						return ($this->calFechaFinalizado = QType::Cast($mixValue, 'QControl'));
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