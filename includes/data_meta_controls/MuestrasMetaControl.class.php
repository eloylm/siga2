<?php
	require(__DATAGEN_META_CONTROLS__ . '/MuestrasMetaControlGen.class.php');

	/**
	 * This is a MetaControl customizable subclass, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality of the
	 * Muestras class.  This code-generated class extends from
	 * the generated MetaControl class, which contains all the basic elements to help a QPanel or QForm
	 * display an HTML form that can manipulate a single Muestras object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a MuestrasMetaControl
	 * class.
	 *
	 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
	 * or overwrite this file.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 */
	class MuestrasMetaControl extends MuestrasMetaControlGen {

      public function SaveMuestras() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtDetalle) $this->objMuestras->Detalle = $this->txtDetalle->Text;
				if ($this->txtObservaciones) $this->objMuestras->Observaciones = $this->txtObservaciones->Text;
				if ($this->lstClientes) $this->objMuestras->ClientesId = $this->lstClientes->Name;
				if ($this->chkEstado) $this->objMuestras->Estado = $this->chkEstado->Checked;
				$this->objMuestras->UsuariosId = $_SESSION['idUsuario'];

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Muestras object
				$this->objMuestras->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}


        public function lstClientes_Create($strControlId = null) {

        $this->lstClientes = new QAutoCompleteTextBox($this->objParentObject);
        $this->lstClientes->Name = 'Cliente';

        $clientes = Clientes::LoadAll();

        foreach ($clientes as $cliente) {
            $lstCliente = new QListItem($cliente->Nombre,$cliente->ClientesId);
            $this->lstClientes->AddItem($lstCliente);
        }
       
        if($this->objMuestras->Clientes){
            $this->lstClientes->Name = $this->objMuestras->ClientesId;
            $this->lstClientes->Text = $this->objMuestras->Clientes->Nombre;
        }
       
       
        $this->lstClientes->AddAction(new QClickEvent(), new QAjaxControlAction($this->objParentObject,'txtCliente_Change'));
        $this->lstClientes->AddAction(new QFocusEvent(), new QAjaxControlAction($this->objParentObject,'txtCliente_Change'));
        
       
        return $this->lstClientes;

        }
        public function txtObservaciones_Create($strControlId = null) {
			$this->txtObservaciones = new QTextBox($this->objParentObject, $strControlId);
			$this->txtObservaciones->Name = QApplication::Translate('Observaciones');
			$this->txtObservaciones->Text = $this->objMuestras->Observaciones;
                        $this->txtObservaciones->TextMode = QTextMode::MultiLine;
			return $this->txtObservaciones;
		}
    }
?>