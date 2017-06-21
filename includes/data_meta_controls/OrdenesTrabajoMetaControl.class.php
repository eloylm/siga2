<?php
require(__DATAGEN_META_CONTROLS__ . '/OrdenesTrabajoMetaControlGen.class.php');

/**
 * This is a MetaControl customizable subclass, providing a QForm or QPanel access to event handlers
 * and QControls to perform the Create, Edit, and Delete functionality of the
 * OrdenesTrabajo class.  This code-generated class extends from
 * the generated MetaControl class, which contains all the basic elements to help a QPanel or QForm
 * display an HTML form that can manipulate a single OrdenesTrabajo object.
 *
 * To take advantage of some (or all) of these control objects, you
 * must create a new QForm or QPanel which instantiates a OrdenesTrabajoMetaControl
 * class.
 *
 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
 * or overwrite this file.
 *
 * @package My Application
 * @subpackage MetaControls
 */
class OrdenesTrabajoMetaControl extends OrdenesTrabajoMetaControlGen {
//protected $idClientes;
    public $lblIdCliente;
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
            $this->objOrdenesTrabajo->FechaEntrada = new QDateTime(date('Y-m-j'));
            //$this->objOrdenesTrabajo->FechaFinalizado = new QDateTime(date('0000-00-00'));
            //if ($this->lstClientes)
            $this->objOrdenesTrabajo->ClientesId = $this->lstClientes->Name;

            if ($this->txtCargador) $this->objOrdenesTrabajo->Cargador = $this->txtCargador->Text;
            if ($this->txtBuque) $this->objOrdenesTrabajo->Buque = $this->txtBuque->Text;
            if ($this->txtKg) $this->objOrdenesTrabajo->Kg = $this->txtKg->Text;
            if ($this->txtPuerto) $this->objOrdenesTrabajo->Puerto = $this->txtPuerto->Text;
            if ($this->txtReferenciaCliente) $this->objOrdenesTrabajo->ReferenciaCliente = $this->txtReferenciaCliente->Text;
            if ($this->txtDestino) $this->objOrdenesTrabajo->Destino = $this->txtDestino->Text;
            if ($this->lstMuestras) $this->objOrdenesTrabajo->MuestrasId = $this->lstMuestras->SelectedValue;
            if ($this->txtObservaciones) $this->objOrdenesTrabajo->Observaciones = $this->txtObservaciones->Text;
            $this->objOrdenesTrabajo->UsuariosId =$_SESSION['idUsuario'];
            $this->objOrdenesTrabajo->New = True;
            $this->objOrdenesTrabajo->Estado = $this->txtEstado->Text;
            // Update any UniqueReverseReferences (if any) for controls that have been created for it
            //todo: preguntar si es un update o un insert
            $this->objOrdenesTrabajo->DeleteResultadosbyEstado('Sin cargar');
            
            // Save the OrdenesTrabajo object
            
                $this->objOrdenesTrabajo->Save();

            // Finally, update any ManyToManyReferences (if any)
            $this->lstAnalisises_Update();
        } catch (QCallerException $objExc) {
            $objExc->IncrementOffset();
            throw $objExc;
        }
    }

    public function lstClientes_Create($strControlId = null) {

        $this->lstClientes = new QAutoCompleteTextBox($this->objParentObject);
        
        $clientes = Clientes::LoadAll();

        foreach ($clientes as $cliente) {
            $lstCliente = new QListItem($cliente->Nombre,$cliente->ClientesId);
            $this->lstClientes->AddItem($lstCliente);
        }
        $this->lstClientes->AddAction(new QclickEvent(), new QAjaxControlAction($this->objParentObject,'txtCliente_Change'));
        $this->lstClientes->AddAction(new QFocusEvent(), new QAjaxControlAction($this->objParentObject,'txtCliente_Change'));
       
        if($this->objOrdenesTrabajo->Clientes){
            $this->lstClientes->Name = $this->objOrdenesTrabajo->ClientesId;
            $this->lstClientes->Text = $this->objOrdenesTrabajo->Clientes->Nombre;
        }
        return $this->lstClientes;

    }
    public function txtObservaciones_Create($strControlId = null) {
        $this->txtObservaciones = new QTextBox($this->objParentObject, $strControlId);
        $this->txtObservaciones->Name = QApplication::Translate('Observaciones');
        $this->txtObservaciones->Text = $this->objOrdenesTrabajo->Observaciones;
        $this->txtObservaciones->TextMode = QTextMode::MultiLine;
        $this->txtObservaciones->CssClass ="observaciones";
        return $this->txtObservaciones;
    }

    public function txtServerSide_Change($strFormId, $strControlId, $strParameter) {
        $objMemberArray = Clientes::QueryArray(
            QQ::OrCondition(
            QQ::ILike(QQN::Clientes()->Nombre, $strParameter . '%')),
            QQ::Clause(QQ::OrderBy(QQN::Clientes()->Nombre)));
        $result = array();
        foreach($objMemberArray as $objMember) {
            $result[] = $objMember->Nombre;
        }

        return $result;
    }


    public function lstAnalisises_Create($strControlId = null) {
        $this->lstAnalisises = new QCheckBoxList($this->objParentObject, $strControlId);
        $this->lstAnalisises->Name = QApplication::Translate('Análisis');

        $objAssociatedArray = $this->objOrdenesTrabajo->GetAnalisisArray();
        $objAnalisisArray = Analisis::LoadAll(QQ::OrderBy(QQN::Analisis()->Nombre, true));

        if ($objAnalisisArray) {
            
            foreach ($objAnalisisArray as $objAnalisis) {
                $objListItem = new QListItem ($objAnalisis->__toString(), $objAnalisis->AnalisisId);
                foreach ($objAssociatedArray as $objAssociated) {
                    if ($objAssociated->AnalisisId == $objAnalisis->AnalisisId)
                       
                        $objListItem->Selected = true;
                }
                
                $this->lstAnalisises->AddItem($objListItem);
            }
        }
        return $this->lstAnalisises;
    }

    public function lstMuestras_Create($strControlId = null) {
        $this->lstMuestras = new QListBox($this->objParentObject, $strControlId);
        $this->lstMuestras->Name = QApplication::Translate('Muestras');
        $this->lstMuestras->AddItem(QApplication::Translate('- Select One -'), null);
        $objMuestrasArray = Muestras::LoadbyEstado(QQ::OrderBy(QQN::Muestras()->MuestrasId, false));
        if ($objMuestrasArray) foreach ($objMuestrasArray as $objMuestras) {
                $objListItem = new QListItem($objMuestras->__toString(), $objMuestras->MuestrasId);
                if (($this->objOrdenesTrabajo->Muestras) && ($this->objOrdenesTrabajo->Muestras->MuestrasId == $objMuestras->MuestrasId))
                        $objListItem->Selected = true;
                $this->lstMuestras->AddItem($objListItem);
        }
        return $this->lstMuestras;
    }

    public function txtEstado_Create($strControlId = null) {
        $this->txtEstado = new QTextBox($this->objParentObject, $strControlId);
        $this->txtEstado->Name = QApplication::Translate('Estado');
        $this->txtEstado->Text = 'Activo';
        $this->txtEstado->Visible = True;

        return $this->txtEstado;
    }
    public function DeleteOrdenesTrabajo() {
        $this->objOrdenesTrabajo->UnassociateAllAnalisises();
        $this->objOrdenesTrabajo->UnassociateAllResultadoses();
        $this->objOrdenesTrabajo->Delete();
    }
    
}
?>