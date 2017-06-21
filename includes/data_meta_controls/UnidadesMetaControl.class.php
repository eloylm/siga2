<?php
	require(__DATAGEN_META_CONTROLS__ . '/UnidadesMetaControlGen.class.php');

	/**
	 * This is a MetaControl customizable subclass, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality of the
	 * Unidades class.  This code-generated class extends from
	 * the generated MetaControl class, which contains all the basic elements to help a QPanel or QForm
	 * display an HTML form that can manipulate a single Unidades object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a UnidadesMetaControl
	 * class.
	 *
	 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
	 * or overwrite this file.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 */
	class UnidadesMetaControl extends UnidadesMetaControlGen {
            public function lstAnalisises_Create($strControlId = null) {
                $this->lstAnalisises = new QCheckBoxList($this->objParentObject, $strControlId);
                $this->lstAnalisises->Name = QApplication::Translate('Analisis');
                $objAssociatedArray = $this->objUnidades->GetAnalisisArray();
                $objAnalisisArray = Analisis::LoadAll(QQ::OrderBy(QQN::Analisis()->Nombre, true));
                if ($objAnalisisArray)
                    foreach ($objAnalisisArray as $objAnalisis) {
                        $objListItem = new QListItem($objAnalisis->__toString(), $objAnalisis->AnalisisId);
                        foreach ($objAssociatedArray as $objAssociated) {
                            if ($objAssociated->AnalisisId == $objAnalisis->AnalisisId)
                                $objListItem->Selected = true;
                        }
                        $this->lstAnalisises->AddItem($objListItem);
                }
                return $this->lstAnalisises;
        }
	}
?>