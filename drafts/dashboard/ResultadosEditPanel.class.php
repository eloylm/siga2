<?php
	/**
	 * This is a quick-and-dirty draft QPanel object to do Create, Edit, and Delete functionality
	 * of the Resultados class.  It uses the code-generated
	 * ResultadosMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a Resultados columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both resultados_edit.php AND
	 * resultados_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class ResultadosEditPanel extends QPanel {
		// Local instance of the ResultadosMetaControl
		protected $mctResultados;

		// Controls for Resultados's Data Fields
		public $lblResultadosId;
		public $lstOrdenesTrabajo;
		public $lstAnalisis;
		public $txtEstado;
		public $lstUsuarios;
		public $calFecha;
		public $txtNorma;
		public $txtMedicion;
		public $txtResultado;

		// Other ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References

		// Other Controls
		public $btnSave;
		public $btnDelete;
		public $btnCancel;

		// Callback
		protected $strClosePanelMethod;

		public function __construct($objParentObject, $strClosePanelMethod, $intResultadosId = null, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Setup Callback and Template
			$this->strTemplate = 'ResultadosEditPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;

			// Construct the ResultadosMetaControl
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctResultados = ResultadosMetaControl::Create($this, $intResultadosId);

			// Call MetaControl's methods to create qcontrols based on Resultados's data fields
			$this->lblResultadosId = $this->mctResultados->lblResultadosId_Create();
			$this->lstOrdenesTrabajo = $this->mctResultados->lstOrdenesTrabajo_Create();
			$this->lstAnalisis = $this->mctResultados->lstAnalisis_Create();
			$this->txtEstado = $this->mctResultados->txtEstado_Create();
			$this->lstUsuarios = $this->mctResultados->lstUsuarios_Create();
			$this->calFecha = $this->mctResultados->calFecha_Create();
			$this->txtNorma = $this->mctResultados->txtNorma_Create();
			$this->txtMedicion = $this->mctResultados->txtMedicion_Create();
			$this->txtResultado = $this->mctResultados->txtResultado_Create();

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
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(QApplication::Translate('Are you SURE you want to DELETE this') . ' ' . QApplication::Translate('Resultados') . '?'));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctResultados->EditMode;
		}

		// Control AjaxAction Event Handlers
		public function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the ResultadosMetaControl
			$this->mctResultados->SaveResultados();
			$this->CloseSelf(true);
		}

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the ResultadosMetaControl
			$this->mctResultados->DeleteResultados();
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