<?php
	/**
	 * This is a quick-and-dirty draft QPanel object to do Create, Edit, and Delete functionality
	 * of the OrdenesTrabajo class.  It uses the code-generated
	 * OrdenesTrabajoMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a OrdenesTrabajo columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both ordenes_trabajo_edit.php AND
	 * ordenes_trabajo_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class OrdenesTrabajoEditPanel extends QPanel {
		// Local instance of the OrdenesTrabajoMetaControl
		protected $mctOrdenesTrabajo;

		// Controls for OrdenesTrabajo's Data Fields
		public $lblOrdenesTrabajoId;
		public $calFechaEntrada;
		public $lstClientes;
		public $txtCargador;
		public $txtBuque;
		public $txtKg;
		public $txtPuerto;
		public $txtReferenciaCliente;
		public $txtDestino;
		public $lstMuestras;
		public $lstUsuarios;
		public $chkNew;
		public $txtEstado;
		public $txtObservaciones;
		public $calFechaFinalizado;

		// Other ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References
		public $lstAnalisises;

		// Other Controls
		public $btnSave;
		public $btnDelete;
		public $btnCancel;

		// Callback
		protected $strClosePanelMethod;

		public function __construct($objParentObject, $strClosePanelMethod, $intOrdenesTrabajoId = null, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Setup Callback and Template
			$this->strTemplate = 'OrdenesTrabajoEditPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;

			// Construct the OrdenesTrabajoMetaControl
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctOrdenesTrabajo = OrdenesTrabajoMetaControl::Create($this, $intOrdenesTrabajoId);

			// Call MetaControl's methods to create qcontrols based on OrdenesTrabajo's data fields
			$this->lblOrdenesTrabajoId = $this->mctOrdenesTrabajo->lblOrdenesTrabajoId_Create();
			$this->calFechaEntrada = $this->mctOrdenesTrabajo->calFechaEntrada_Create();
			$this->lstClientes = $this->mctOrdenesTrabajo->lstClientes_Create();
			$this->txtCargador = $this->mctOrdenesTrabajo->txtCargador_Create();
			$this->txtBuque = $this->mctOrdenesTrabajo->txtBuque_Create();
			$this->txtKg = $this->mctOrdenesTrabajo->txtKg_Create();
			$this->txtPuerto = $this->mctOrdenesTrabajo->txtPuerto_Create();
			$this->txtReferenciaCliente = $this->mctOrdenesTrabajo->txtReferenciaCliente_Create();
			$this->txtDestino = $this->mctOrdenesTrabajo->txtDestino_Create();
			$this->lstMuestras = $this->mctOrdenesTrabajo->lstMuestras_Create();
			$this->lstUsuarios = $this->mctOrdenesTrabajo->lstUsuarios_Create();
			$this->chkNew = $this->mctOrdenesTrabajo->chkNew_Create();
			$this->txtEstado = $this->mctOrdenesTrabajo->txtEstado_Create();
			$this->txtObservaciones = $this->mctOrdenesTrabajo->txtObservaciones_Create();
			$this->calFechaFinalizado = $this->mctOrdenesTrabajo->calFechaFinalizado_Create();
			$this->lstAnalisises = $this->mctOrdenesTrabajo->lstAnalisises_Create();

			// Create Buttons and Actions on this Form
			$this->btnSave = new QButton($this);
			$this->btnSave->Text = QApplication::Translate('Save');
			$this->btnSave->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnSave_Click'));
			$this->btnSave->CausesValidation = $this;

			$this->btnCancel = new QButton($this);
			$this->btnCancel->Text = QApplication::Translate('Cancel');
			$this->btnCancel->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCancel_Click'));

			$this->btnDelete = new QButton($this);
			$this->btnDelete->Text = QApplication::Translate('Delete');
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(QApplication::Translate('Are you SURE you want to DELETE this') . ' ' . QApplication::Translate('OrdenesTrabajo') . '?'));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctOrdenesTrabajo->EditMode;
		}

		// Control AjaxAction Event Handlers
		public function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the OrdenesTrabajoMetaControl
			$this->mctOrdenesTrabajo->SaveOrdenesTrabajo();
			$this->CloseSelf(true);
		}

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the OrdenesTrabajoMetaControl
			$this->mctOrdenesTrabajo->DeleteOrdenesTrabajo();
			$this->CloseSelf(true);
		}

		public function btnCancel_Click($strFormId, $strControlId, $strParameter) {
			$this->CloseSelf(false);
		}

		// Close Myself and Call ClosePanelMethod Callback
		protected function CloseSelf($blnChangesMade) {
			$strMethod = $this->strClosePanelMethod;
			$this->objForm->$strMethod($blnChangesMade);
		}
	}
?>