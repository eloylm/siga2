<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of QDataGridclass
 *
 * @author slack
 */
class QDataGrid extends QDataGridBase {
   protected $strCssClass = 'datagrid';

        // Let's Show a Footer
        protected $blnShowFooter = true;

        // Let's define the footer to be to display our alternate paginator
        // We'll use the already built-in GetPaginatorRowHtml, sending in our ALTERNATE paginator, to help with the rendering
        protected function GetFooterRowHtml() {
            if ($this->objPaginatorAlternate)
                return sprintf('<tr><td colspan="%s">%s</td></tr>', count($this->objColumnArray), $this->GetPaginatorRowHtml($this->objPaginatorAlternate));
        }
    }
?>