<?php
	/**
	 * This is a quick-and-dirty draft QPanel object to do Create, Edit, and Delete functionality
	 * of the Muestras class.  It uses the code-generated
	 * MuestrasMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a Muestras columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both muestras_edit.php AND
	 * muestras_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class MuestrasEditPanel extends QPanel {
		// Local instance of the MuestrasMetaControl
		protected $mctMuestras;

		// Controls for Muestras's Data Fields
		public $lblMuestrasId;
		public $txtDetalle;
		public $txtObservaciones;
		public $lstClientes;
		public $chkEstado;
		public $lstUsuarios;

		// Other ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References

		// Other Controls
		public $btnSave;
		public $btnDelete;
		public $btnCancel;

		// Callback
		protected $strClosePanelMethod;

		public function __construct($objParentObject, $strClosePanelMethod, $intMuestrasId = null, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Setup Callback and Template
			$this->strTemplate = 'MuestrasEditPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;

			// Construct the MuestrasMetaControl
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctMuestras = MuestrasMetaControl::Create($this, $intMuestrasId);

			// Call MetaControl's methods to create qcontrols based on Muestras's data fields
			$this->lblMuestrasId = $this->mctMuestras->lblMuestrasId_Create();
			$this->txtDetalle = $this->mctMuestras->txtDetalle_Create();
			$this->txtObservaciones = $this->mctMuestras->txtObservaciones_Create();
			$this->lstClientes = $this->mctMuestras->lstClientes_Create();
			$this->chkEstado = $this->mctMuestras->chkEstado_Create();
			//$this->lstUsuarios = $this->mctMuestras->lstUsuarios_Create();

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
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(QApplication::Translate('Are you SURE you want to DELETE this') . ' ' . QApplication::Translate('Muestras') . '?'));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctMuestras->EditMode;

                        $this->txtDetalle->Focus();
		}

		// Control AjaxAction Event Handlers
		public function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the MuestrasMetaControl
			$this->mctMuestras->SaveMuestras();
			$this->CloseSelf(true);
		}

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the MuestrasMetaControl
			$this->mctMuestras->DeleteMuestras();
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
                 public function txtCliente_Change($strFormId, $strControlId, $strParameter) {
                    $queryid='SELECT clientes_id from clientes where nombre ='."'".$this->lstClientes->Text."'";
                    $objDb = QApplication::$Database[1];
                    $objResult = $objDb->Query($queryid);
                    $objProjectArray = Clientes::InstantiateDbResult($objResult);
                    foreach ($objProjectArray as $objProject) {
                        $this->lstClientes->Name=$objProject->ClientesId;
                    }
                     //$this->chkEstado->Focus();
                     

            }
	}
?>