<?php
	require(__DATAGEN_META_CONTROLS__ . '/MetodosMetaControlGen.class.php');

	/**
	 * This is a MetaControl customizable subclass, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality of the
	 * Metodos class.  This code-generated class extends from
	 * the generated MetaControl class, which contains all the basic elements to help a QPanel or QForm
	 * display an HTML form that can manipulate a single Metodos object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a MetodosMetaControl
	 * class.
	 *
	 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
	 * or overwrite this file.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 */
	class MetodosMetaControl extends MetodosMetaControlGen {
             public function lstAnalisises_Create($strControlId = null) {
                $this->lstAnalisises = new QCheckBoxList($this->objParentObject, $strControlId);
                $this->lstAnalisises->Name = QApplication::Translate('Análisis');
                $objAssociatedArray = $this->objMetodos->GetAnalisisArray();
                $objAnalisisArray = Analisis::LoadAll(QQ::OrderBy(QQN::Analisis()->Nombre, true));
                if ($objAnalisisArray) {
                    foreach ($objAnalisisArray as $objAnalisis) {
                        $objListItem = new QListItem($objAnalisis->__toString(), $objAnalisis->AnalisisId);
                        foreach ($objAssociatedArray as $objAssociated) {
                            if ($objAssociated->AnalisisId == $objAnalisis->AnalisisId)
                                $objListItem->Selected = true;
                        }
                        $this->lstAnalisises->AddItem($objListItem);
                    }
                }
                return $this->lstAnalisises;
            }
	}
?>