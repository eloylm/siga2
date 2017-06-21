<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CopiarAnalisisPanel
 *
 * @author User
 */

 require('../includes/prepend.inc.php');
class CopiarAnalisisPanel extends QPanel  {
    // Callback Method Names

    protected $strSetEditPanelMethod;
    protected $strCloseEditPanelMethod;

    public function __construct($objParentObject, $strSetEditPanelMethod, $strCloseEditPanelMethod, $strControlId = null) {
    // Call the Parent
        try {
            parent::__construct($objParentObject, $strControlId);
        } catch (QCallerException $objExc) {
            $objExc->IncrementOffset();
            throw $objExc;
        }

        // Record Method Callbacks
        $this->strSetEditPanelMethod = $strSetEditPanelMethod;
        $this->strCloseEditPanelMethod = $strCloseEditPanelMethod;

        // Setup the Template
        $this->Template = 'CopiarAnalisisPanel.tpl.php';

    }
}
?>
