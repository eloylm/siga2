<?php
	//require('includes/configuration/prepend.inc.php');
        require('includes/prepend.inc.php');
        require('includes/qcodo/qform/QJavaScriptAutoCompleteTextBox.class.php');
        //require('includes/qcodo/qform/QAutoCompleteTextBoxEvent.class.php');
        //require('includes/qcodo/qform/QAutoCompleteTextBox.class.php');
        require('includes/qcodo/qform/QAjaxAutoCompleteTextBox.class.php');

	class SampleForm extends QForm {
		protected $txtServerSide;
		protected $txtClientSide;

		protected function Form_Create() {
			$this->txtServerSide = new QAjaxAutoCompleteTextBox($this, 'txtServerSide_Change');
			$this->txtServerSide->Name = QApplication::Translate('Keyword');
			
			$arrAutoCompleteItems = array();
			$arrPersons = Clienes::LoadAll();
			foreach ($arrPersons as $person) {
				$arrAutoCompleteItems[] = $person->Nombre . " " . $person->ClienteId;
			}
			
			$this->txtClientSide = new QJavaScriptAutoCompleteTextBox($this, $arrAutoCompleteItems);
		}
		
		public function txtServerSide_Change($strParameter){
			$objMemberArray = Clientes::QueryArray(
				QQ::OrCondition(
					QQ::Like(QQN::Clientes()->Nombre, $strParameter . '%')
					
				),
					
				QQ::Clause(QQ::OrderBy(QQN::Clientes()->Nombre))
			);
			
			$result = array();
			foreach($objMemberArray as $objMember){
				$result[] = $objMember->Nombre;
			}
			
			return $result;
		}
	}

	SampleForm::Run('SampleForm');
?>