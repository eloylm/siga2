<?php
	require(__DATAGEN_META_CONTROLS__ . '/AnalisisMetaControlGen.class.php');

	/**
	 * This is a MetaControl customizable subclass, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality of the
	 * Analisis class.  This code-generated class extends from
	 * the generated MetaControl class, which contains all the basic elements to help a QPanel or QForm
	 * display an HTML form that can manipulate a single Analisis object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a AnalisisMetaControl
	 * class.
	 *
	 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
	 * or overwrite this file.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 */
	class AnalisisMetaControl extends AnalisisMetaControlGen {
            public function lstOrdenesTrabajos_Create($strControlId = null) {
			$this->lstOrdenesTrabajos = new QCheckBoxList($this->objParentObject, $strControlId);
			$this->lstOrdenesTrabajos->Name = QApplication::Translate('Ordenes Trabajos');
			/*$this->lstOrdenesTrabajos->SelectionMode = QSelectionMode::Multiple;*/
			$objAssociatedArray = $this->objAnalisis->GetOrdenesTrabajoArray();
			$objOrdenesTrabajoArray = OrdenesTrabajo::LoadAll(QQ::OrderBy(QQN::OrdenesTrabajo()->OrdenesTrabajoId,true));
			if ($objOrdenesTrabajoArray) foreach ($objOrdenesTrabajoArray as $objOrdenesTrabajo) {
				$objListItem = new QListItem($objOrdenesTrabajo->__toString(), $objOrdenesTrabajo->OrdenesTrabajoId);
				foreach ($objAssociatedArray as $objAssociated) {
					if ($objAssociated->OrdenesTrabajoId == $objOrdenesTrabajo->OrdenesTrabajoId)
						$objListItem->Selected = true;
				}
				$this->lstOrdenesTrabajos->AddItem($objListItem);
			}
			return $this->lstOrdenesTrabajos;
		}

                		/**
		 * Create and setup QListBox lstMetodoses
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
            public function lstMetodoses_Create($strControlId = null) {
                    $this->lstMetodoses = new QCheckBoxList($this->objParentObject, $strControlId);
                    $this->lstMetodoses->Name = QApplication::Translate('Metodoses');
                    $objAssociatedArray = $this->objAnalisis->GetMetodosArray();
                    $objMetodosArray = Metodos::LoadAll(QQ::OrderBy(QQN::Metodos()->MetodoId,true));
                    if ($objMetodosArray) foreach ($objMetodosArray as $objMetodos) {
                            $objListItem = new QListItem($objMetodos->__toString(), $objMetodos->MetodoId);
                            foreach ($objAssociatedArray as $objAssociated) {
                                    if ($objAssociated->MetodoId == $objMetodos->MetodoId)
                                            $objListItem->Selected = true;
                            }
                            $this->lstMetodoses->AddItem($objListItem);
                    }
                    return $this->lstMetodoses;
            }

            public function lstUnidadeses_Create($strControlId = null) {
			$this->lstUnidadeses = new QCheckBoxList($this->objParentObject, $strControlId);
			$this->lstUnidadeses->Name = QApplication::Translate('Unidadeses');
			$objAssociatedArray = $this->objAnalisis->GetUnidadesArray();
			$objUnidadesArray = Unidades::LoadAll(QQ::OrderBy(QQN::Unidades()->UnidadId,true));
			if ($objUnidadesArray) foreach ($objUnidadesArray as $objUnidades) {
				$objListItem = new QListItem($objUnidades->__toString(), $objUnidades->UnidadId);
				foreach ($objAssociatedArray as $objAssociated) {
					if ($objAssociated->UnidadId == $objUnidades->UnidadId)
						$objListItem->Selected = true;
				}
				$this->lstUnidadeses->AddItem($objListItem);
			}
			return $this->lstUnidadeses;
		}
	}
?>