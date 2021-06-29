<?php
	require('includes/prepend.inc.php');
#prueba
	class SampleForm extends QForm {
		protected $txtServerSide;
		protected $txtClientSide;

                protected $lblCliente;
                //protected $lstCliente;


		protected function Form_Create() {

                        $this->lblCliente = new QLabel($this);
                        $this->lblCliente->Name = 'Cliente';
                        $this->lblCliente->Text = 'Nada';
                         $this->txtClientSide = new QAutoCompleteTextBox($this);

                        $clientes = Clientes::LoadAll();

                        foreach ($clientes as $cliente){
                            $lstCliente = new QListItem($cliente->Nombre,$cliente->ClientesId);
                            $this->txtClientSide->AddItem($lstCliente);
                            $arrAutoCompleteItems[] =$cliente->Nombre." ".$cliente->ClientesId;

                        }

                       $this->txtClientSide->Name = QApplication::Translate('Keyword');
                       $this->txtClientSide->AddAction(new QChangeEvent(), new QAjaxAction('txtCliente_Change'));
                        print_r($this->txtClientSide);

                }
              protected function txtCliente_Change($strFormId, $strControlId, $strParameter){

                  foreach ($this->txtClientSide->SelectedValue as $value){
                      $this->lblCliente->Text = $value;
                  }
                     $queryid='SELECT clientes_id from clientes where nombre ='."'".$this->txtClientSide->Text."'";
                     $objDb = QApplication::$Database[1];
                     $objResult = $objDb->Query($queryid);
                     $objProjectArray = Clientes::InstantiateDbResult($objResult);
                    foreach ($objProjectArray as $objProject){
                        $this->lblCliente->Text=$objProject->ClientesId;
                    }
              }
             protected function txtServerSide_Change($strParameter){
                $objMemberArray = Clientes::QueryArray(
                                        QQ::OrCondition(
                                                QQ::Like(QQN::Clientes()->Nombre, $strParameter . '%')),
                                        QQ::Clause(QQ::OrderBy(QQN::Clientes()->Nombre)));
                $result = array();
                foreach($objMemberArray as $objMember){
                        $result[] = $objMember->Nombre;
                }

                return $result;
    }
        }

	SampleForm::Run('SampleForm');
?>
