<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MuestrasDialogBoxclass
 *
 * @author pabloq
 */
class MuestrasDialogBox extends QDialogBox {
    public $btnSave;
    public $btnCancel;
    public $pnlMuestrasDisplay;

    // Object Variables
    protected $strCloseCallback;
    protected $fltValue;

    // Default Overrides
    protected $blnMatteClickable = true;
    protected $strTemplate = 'MuestrasDialogBox.tpl.php';

    public function __construct($objParentObject, $strClosePanelMethod, $intMuestrasId = null, $strControlId = null) {
           try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
            // Define local child controls
            $this->pnlMuestrasDisplay = new Qpanel($this);

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

            
    }
           public function btnSave_Click($strFormId, $strControlId, $strParameter) {
                                // Delegate "Save" processing to the MuestrasMetaControl
                                $this->mctMuestras->SaveMuestras();
                                $this->CloseSelf(true);
                        }
            public function btnCancel_Click($strFormId, $strControlId, $strParameter) {
                              //  $this->CloseSelf(false);
                              $this->HideDialogBox();
                        }

        // Close Myself and Call ClosePanelMethod Callback
            protected function CloseSelf($blnChangesMade) {
                    $strMethod = $this->strClosePanelMethod;
                    $this->objForm->$strMethod($blnChangesMade);
            }
}
?>
