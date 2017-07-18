<?php
require('../includes/prepend.inc.php');
require("dompdf/dompdf_config.inc.php");
class PdfGenerator extends QForm {

public $lblOrdenesTrabajoId;
 public $lblFechaEntrada;
 public $lblCliente;
 public $lblCargador;
 public $lblBuque;
 public $lblKg;
 public $lblPuerto;
 public $lblReferenciaCliente;
 public $lblDestino;
 public $lblMuestra;
 public $lblNroMuestra;
 public $lblObservaciones;
 public $lblObservaciones2;
 public $lblFechaResultados;
 public $arrResultados;
 public $lblClienteDireccion;
 public $firmado;
 public $LogoOAA;

protected function Form_Create() {

  $this->lblBuque = new QLabel($this);
  $this->lblCargador = New QLabel($this);
  $this->lblCliente = new QLabel($this);
  $this->lblClienteDireccion = new QLabel($this);
  $this->lblDestino = new QLabel($this);
  $this->lblFechaEntrada = new QLabel($this);
  $this->lblKg = new QLabel($this);
  $this->lblMuestra  = new QLabel($this);
  $this->lblNroMuestra  = new QLabel($this);
  $this->lblOrdenesTrabajoId = new QLabel($this);
  $this->lblPuerto = new QLabel($this);
  $this->lblReferenciaCliente = new QLabel($this);
  $this->lblObservaciones = new QLabel($this);
  $this->lblObservaciones2 = new QLabel($this);
  $this->lblFechaResultados = new QLabel($this);
  $this->firmado = false;
  $this->LogoOAA = false;
  //$this->arrResultados = new Resultados();

   if (QApplication::QueryString('intOrdenesTrabajoId')) {
                $this->Load_DatosCertificado(QApplication::QueryString('intOrdenesTrabajoId'));
            }

  }

 public function Load_DatosCertificado($intOrdenesTrabajoId) {

      $objOrdenesTrabajo = OrdenesTrabajo::Load($intOrdenesTrabajoId);

      $this->arrResultados = Resultados::LoadArrayByOrdenesTrabajoId($intOrdenesTrabajoId,QQ::OrderBy(QQN::Resultados()->Analisis->Nombre, true));

      $this->lblBuque->Text = $objOrdenesTrabajo->Buque;
      $this->lblCargador->Text = $objOrdenesTrabajo->Cargador;
      $this->lblCliente->Text = $objOrdenesTrabajo->Clientes->Nombre;
      $this->lblDestino->Text = $objOrdenesTrabajo->Destino;
      $this->lblFechaEntrada->Text = $objOrdenesTrabajo->FechaEntrada->__toString();
      $this->lblKg->Text = $objOrdenesTrabajo->Kg;
      $this->lblMuestra->Text  = $objOrdenesTrabajo->Muestras->Detalle;
      $this->lblOrdenesTrabajoId->Text = $objOrdenesTrabajo->OrdenesTrabajoId;
      $this->lblPuerto->Text = $objOrdenesTrabajo->Puerto;
      $this->lblReferenciaCliente->Text = $objOrdenesTrabajo->ReferenciaCliente;
      $this->lblNroMuestra->Text = $objOrdenesTrabajo->MuestrasId;
      $this->lblObservaciones->Text = $objOrdenesTrabajo->Muestras->Observaciones;
      $this->lblObservaciones2->Text = $objOrdenesTrabajo->Observaciones;
      $this->lblClienteDireccion->Text = $objOrdenesTrabajo->Clientes->Direccion;
      if($objOrdenesTrabajo->FechaFinalizado!=NULL){
        $this->lblFechaResultados->Text = $objOrdenesTrabajo->FechaFinalizado->__toString();
      }
      if($objOrdenesTrabajo->Estado == 'Firmado')
	$this->firmado = 'true';
      else
	$this->firmado = 'false';	
	
	foreach ($this->arrResultados as $Resultados) {
	   if(stripos($Resultados->Norma,'%norma%')) {
		echo "true";
		//$this->LogoOAA = 'true';
		//break;
	   }else{echo "false";} 
		print_r($Resultados->Norma);
	}
	die();
  }

}
PdfGenerator::Run('PdfGenerator');

?>
