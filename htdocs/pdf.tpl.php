<?php $this->RenderBegin(); ?>
<?php ob_start(); ?>
<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo $this->lblOrdenesTrabajoId->Text; ?></title>
<?php if($_GET['format']=='doc') { ?>
<style type="text/css">
@page {margin-top: -15mm; margin-bottom: 0mm; }
@media print { body {margin-top: -15mm; margin-bottom: 0mm;  margin-left: 0mm; margin-right: 0mm} }
body{font-family:Arial, Helvetica, sans-serif;width: 174mm; margin-left:-15mm; margin-right:0;font-size: 10px;  margin-top:-10mm; height:210mm}
header{margin-top:-15mm;width:174mm;margin-left:-15mm; height:0}
.tabla-header{width: 174mm;margin-left: -15mm; margin-top:-15mm}
.tabla-header td{border:0}
.datos{  
    width: 174mm;
    display:block;
    margin-left: 2mm;
    margin-top: 10mm;
}
.tablaborde th, td {
  border: solid #000;
  border-width: thin;
  width:174mm;
}
.tablasinborde th, td {
  border: solid #fff;
  border-width: thin;
  page-break-before: auto; /* 'always,' 'avoid,' 'left,' 'inherit,' or 'right' */
  page-break-after: auto; /* 'always,' 'avoid,' 'left,' 'inherit,' or 'right' */
  page-break-inside: avoid; /* or 'auto' */
  width:174mm;
  }
.firma{font-size: 7px;}
footer{
  width:174mm;
  color: white;
  font-weight: bold;
  font-size:7px;
  bottom: 0;
  position:static;
	  margin-left: -15mm;
  page-break-before: auto; /* 'always,' 'avoid,' 'left,' 'inherit,' or 'right' */
  page-break-after: auto; /* 'always,' 'avoid,' 'left,' 'inherit,' or 'right' */
  page-break-inside: avoid; /* or 'auto' */
}
section{margin-left: -15mm;}
.tabla_datos {
        font-family:Arial, Helvetica, sans-serif; text-decoration: none;
        border: thin solid #666; border-collapse: collapse; page-break-inside:avoid;
        width: 174mm;
	margin-left:-15mm;
	display:inline-block;  
}
.tabla_datos td {padding:4px; border: thin solid #999;}
.tabla_datos th {font-weight: bold; text-transform: uppercase; padding:4px; border: 1px solid #999;}
 
</style>
<?php  } else if($_GET['format']=='pdf'){?>
<style type="text/css">
@page {margin-top: 5mm; margin-bottom: 0mm; }
@media print { body {margin-top: 5mm; margin-bottom: 0mm;  margin-left: 0mm; margin-right: 0mm} }
body{font-family:Arial, Helvetica, sans-serif;width: 210mm; margin-left:15mm; margin-right:0;font-size: 11px;  margin-top: 1; height:297mm}
header{top:-5mm;width:190mm;margin-left:0;margin-right:0}
.tabla-header{width: 190mm;margin-left: 0;}
.tabla-header td{border:0}
.datos{  
    width: 210mm;
    display:block;
    margin-left: 0;
    margin-top: 10mm;
}
.tablaborde th, td {
  border: solid #000;
  border-width: thin;
  width:210mm;
}
.tablasinborde th, td {
  border: solid #fff;
  border-width: thin;
  page-break-before: auto; /* 'always,' 'avoid,' 'left,' 'inherit,' or 'right' */
  page-break-after: auto; /* 'always,' 'avoid,' 'left,' 'inherit,' or 'right' */
  page-break-inside: avoid; /* or 'auto' */
  width:210mm;
  }
.firma{font-size: 7px;}
footer{
  width:210mm;
  color: white;
  font-weight: bold;
  font-size:7px;
  bottom: 0;
  position:static;
  margin-left: 5mm;
  page-break-before: auto; /* 'always,' 'avoid,' 'left,' 'inherit,' or 'right' */
  page-break-after: auto; /* 'always,' 'avoid,' 'left,' 'inherit,' or 'right' */
  page-break-inside: avoid; /* or 'auto' */
}
section{margin-left: 0; margin-right:0}
.tabla_datos {
        font-family:Arial, Helvetica, sans-serif; text-decoration: none;
        border: thin solid #666; border-collapse: collapse; page-break-inside:avoid;
        width: 210mm;
  	margin-right: 0;
	margin-left:0;
	display:inline-block;  
}
.tabla_datos td {padding:4px; border: thin solid #999;}
.tabla_datos th {font-weight: bold; text-transform: uppercase; padding:4px; border: 1px solid #999;}
.linea-fin {
	border-top: 1px solid #8c8b8b;
	border-bottom: 1px solid #fff;
} 
</style>
<?php  }?>
</head>
<body>

<?php if(isset($_REQUEST['do']) and ($_REQUEST['do'] == 'orden')) {?>
<div id="datos">
	 <div id="logo" align="left">
		 <h5>PG-02-F1 V3 COMANDA</h5>
		 <H3>INSTITUTO QUÍMICO ARGENTINO S.A.</H3>
	 </div>
	
          <hr>
<h2>Nro Orden IQA: <?php $this->lblOrdenesTrabajoId->Render(); ?></h2>
<table class=tabla_datos border="1" cellpadding="2" cellspacing="0"  style="width: 100%;">

    <tr>
      <td><strong>Cliente</strong></td>
      <td align="right"><?php $this->lblCliente->Render(); ?></td>
    </tr>
    <tr>
      <td><strong>Mercaderia</strong></td>
      <td align="right"><?php $this->lblMuestra->Render(); ?></td>
    </tr>
    <tr>
      <td><strong>Cargador</strong></td>
      <td align="right"><?php $this->lblCargador->Render(); ?></td>
    </tr>
    <tr>
      <td><strong>Buque</strong></td>
      <td align="right"><?php $this->lblBuque->Render(); ?></td>
    </tr>
    <tr>
      <td><strong>Destino</strong></td>
      <td align="right"><?php $this->lblDestino->Render(); ?></td>
    </tr>
    <tr>
      <td><strong>Kg</strong></td>
      <td align="right"><?php $this->lblKg->Render(); ?></td>
    </tr>
    <tr>
      <td><strong>Puerto</strong></td>
      <td align="right"><?php $this->lblPuerto->Render(); ?></td>
    </tr>
    <tr>
      <td><strong>Ref Cliente</strong></td>
      <td align="right"><?php $this->lblReferenciaCliente->Render(); ?></td>
    </tr>
    <tr>
     <td><strong>
      Fecha ingreso muestra</strong></td>
      <td align="right"><?php $this->lblFechaEntrada->Render(); ?></td>
    </tr>
    <tr>
     <td><strong> Condici&oacute;n de la muestra</strong></td>
      <td align="right"><?php $this->lblObservaciones->Render(); ?></td>
    </tr>
    <tr>
     <td><strong>Observaciones</strong></td>
      <td align="right"><?php $this->lblObservaciones2->Render(); ?></td>
    </tr>
</table>
<p>&nbsp;</p>
<table  class=tabla_datos border="1" style="width: 100%"  cellpadding="0" cellspacing="0">
     <tr>
      <td><strong>Especificaciones</strong></td>
      <td><strong>Método de ensayo</strong></td>
      <td><strong>Unidad</strong></td>
      <td><strong>Resultados</strong></td>
     </tr>
<?php $i=0; foreach ($this->arrResultados as $resultado){
        $i++;
	echo "<tr>";
	echo "<td>".$i." - $resultado->Analisis</td>";
	echo "<td>$resultado->Norma</td>";
	echo "<td>$resultado->Medicion</td>";
        if($resultado->Estado == 'Sin cargar')
            echo "<td>&nbsp;</td>";
        else
            echo "<td>$resultado->Resultado</td>";
        echo "</tr>";
        
 }
?>
</table>
</div>
    <?php if($resultado->Estado != 'Sin cargar'){ ?>
    <p style="text-align:justify">
        El presente informe de ensayo se entrega a pedido del cliente y no es valido como informe final del
        Instituto Qu&iacute;mico Argentino S.A.
        Los resultados informados son parciales y serán verificados por el Director Técnico y validados en el informe final.
    </p>
 <?php }?>
    
<?php } else { ?>
<header>
<table class="tabla-header">
<tr>
<td>
<img width=266px height=47px src=<?php echo "http://".$_SERVER['SERVER_ADDR']."/siga2/assets/images/logo-iqa-certificado.png" ?>>
<!--img width=266px height=47px src=<?php //echo'data:image/png;base64,'.base64_encode(file_get_contents("/var/www/html/siga2/assets/images/logo-iqa-certificado.png")); ?>-->
</td>
<td>
<?php 
$array = array(
"SAGPyA 1075/94 NORMA XX Y 1262/2004",
"SAGPyA 1075/94 NORMA XX Y 1262/2005",
"SAGPyA 1075/94 NORMA XX Y 1262/2006",
"SAGPyA 1075/94 NORMA XX Y 1262/2007",
"SAGPyA 1075/94 NORMA XX Y 1262/2008",
"SAGPyA 1075/94 NORMA XII",
"SAGPyA 151/2008 NORMA XVII",
"SAGPyA 1075/94 NORMA XXVI",
"SAGPyA 1075/94 NORMA IX",
"SAGPyA 1075/94 NORMA XXVI",
"ISO 660:2009",
"IRAM 15850-2:2009");
$asterisco = '*';
//print_r($array);
	foreach ($this->arrResultados as $resultado){
//		 print_r($resultado->Norma);
		if (in_array($resultado->Norma,$array)) {
			$this->LogoOAA = 'true';
			$asterisco = '';
		}
	}
//die();

?>

<?php if($this->LogoOAA == 'true') { ?>
<img align="right" width=130px height=66px src=<?php echo "http://".$_SERVER['SERVER_ADDR']."/siga2/assets/images/logo-oaa.png" ;?>>
<!--img align="right" width=130px height=66px src=<?php //echo 'data:image/png;base64,'.base64_encode(file_get_contents("/var/www/html/siga2/assets/images/logo-oaa.png")) ;?>-->
<?php } ?>
</td>
</tr>
</table>
</header>
<section>
<div class="datos">
 <div align="center">          <b><u>Informe de Ensayo Nº <?php $this->lblOrdenesTrabajoId->Render(); ?></u></b>
      </div>
      
  <p>Sres.</p>
<p><?php $this->lblCliente->Render(); ?></p>
<p><?php $this->lblClienteDireccion->Render(); ?><br></p>
<table class=tabla_datos border="1" cellpadding="0" cellspacing="0">

    <tr>
      <td>
      <strong>Descripci&oacute;n de la muestra</strong></td>
      <td align="right">

        <tr>
      <td><strong>Mercaderia</strong></td>
      <td align="right"><?php $this->lblMuestra->Render(); ?></td>
    </tr>
    <tr>
      <td><strong>Cargador</strong></td>
      <td align="right"><?php $this->lblCargador->Render(); ?></td>
    </tr>
    <tr>
      <td><strong>Buque</strong></td>
      <td align="right"><?php $this->lblBuque->Render(); ?></td>
    </tr>
    <tr>
      <td><strong>Destino</strong></td>
      <td align="right"><?php $this->lblDestino->Render(); ?></td>
    </tr>
    <tr>
      <td><strong>Kg</strong></td>
      <td align="right"><?php $this->lblKg->Render(); ?></td>
    </tr>
    <tr>
      <td><strong>Puerto</strong></td>
      <td align="right"><?php $this->lblPuerto->Render(); ?></td>
    </tr>
    <tr>
      <td><strong>Referencia Cliente</strong></td>
      <td align="right"><?php $this->lblReferenciaCliente->Render(); ?></td>
    </tr>
     <tr>
     <td><strong>Observaciones</strong></td>
      <td align="right"><?php $this->lblObservaciones2->Render(); ?></td>
    </tr>
	</td>
    </tr>
    <tr>
      <td>
      <strong>Condici&oacute;n de la muestra</strong></td>
      <td align="right"><?php $this->lblObservaciones->Render(); ?></td>
    </tr>
    <tr>
      <td><strong>Fecha ingreso muestra</strong></td>
      <td align="right"><?php $this->lblFechaEntrada->Render(); ?></td>
    </tr>
    <tr>
        <td><strong>Fecha del an&aacute;lisis</strong></td>
      <td align="right"><?php echo $this->lblFechaResultados->Render(); ?></td>
    </tr>

</table>
<p>&nbsp;</p>
<table  class=tabla_datos border="1"  cellpadding="0" cellspacing="0">
     <tr>
      <td><strong>Especificaciones</strong></td>
      <td><strong>Método de Ensayo</strong></td>
      <td><strong>Unidad</strong></td>
      <td><strong>Resultados</strong></td>
      <td>U</td>
    </tr>
<?php foreach ($this->arrResultados as $resultado){
	echo "<tr>";
	echo "<td>$resultado->Analisis $asterisco </td>";
	echo "<td>$resultado->Norma</td>";
	echo "<td>$resultado->Medicion</td>";
	echo "<td>$resultado->Resultado</td>";
	echo "<td></td>";
	echo "</tr>";
 }
?>
</table>
<p>&nbsp;</p>
<p><strong><u>Referencias:</u>
<p>Lugar de ejecuci&oacute;n de Ensayo:
<br>
(A): Laboratorio Central Buenos Aires<br>
<p>Alcance de la Acreditaci&oacute;n OAA
<br>
(*)Los ensayos marcados con (*)
no est&aacute;n incluidos en el alcance de la acreditaci&oacute;n del
OAA </p>
<p><u>Notas:</u></p>
<p>Nota 1: Los resultados de los ensayo se refieren
exclusivamente a la muestra entregada en las instalaciones del
laboratorio.<br></p>
<p>Nota 2: El presente informe de ensayo no debe
reproducirse , excepto en su totalidad, sin la
aprobaci&oacute;n escrita del
laboratorio.<br></p>
<p>Nota 3: Las opiniones, interpretaciones, etc. que se indican a
continuaci&oacute;n est&aacute;n fuera del alcance de la
acreditaci&oacute;n del OAA.<br>
</strong></p>

<table class=tabla_datos border="1" cellpadding="0" cellspacing="0">
      <tr>
      <td>
      <p>&nbsp;</p>
      </td>
    </tr>
    <tr>
      <td>
      <p>&nbsp;</p>
      </td>
    </tr>
    <tr>
      <td>
      <p>&nbsp;</p>
      </td>
    </tr>
    <tr>
      <td>
      <p>&nbsp;</p>
      </td>
    </tr>
</table>
<p>&nbsp;</p>
<p><strong><u>Observaciones:</u></strong></p>
<table class=tabla_datos  border="1" cellpadding="0" cellspacing="0">
    <tr>
      <td>
      <p>&nbsp;</p>
      </td>
    </tr>
    <tr>
      <td>
      <p>&nbsp;</p>
      </td>
    </tr>
    <tr>
      <td>
      <p>&nbsp;</p>
      </td>
    </tr>
    <tr>
      <td>
      <p>&nbsp;</p>
      </td>
    </tr>
</table>
<p>&nbsp;</p>

<table class="tablasinborde" border="0" cellpadding="0" cellspacing="0"  >
<tr>
<td>
<p><strong>El tiempo de conservación de las muestras será de: 3 (tres) meses</strong></p>
<p align="right"><strong>Fecha de emisi&oacute;n del informe de ensayo</strong></p>
<p align="right">Lugar y Fecha</p>
<p align="right">Buenos Aires, Argentina - <?php echo date("d-m-Y"); ?></p>
<hr class=linea-fin />
<p align="right">Fin del Informe</p>
<?php if ($this->firmado == 'true'){ ?>
<p align="right">
<!--img width=117px height=121px src=<?php //echo 'data:image/png;base64,'.base64_encode(file_get_contents("/var/www/html/siga2/assets/images/firma-luis.png")); ?>-->
<img width=117px height=121px src=<?php echo "http://".$_SERVER['SERVER_ADDR']."/siga2/assets/images/firma-luis.png"; ?>>
</p>
<p class="firma" align="right">Dr. LUIS O. MORENO <br /> Instituto Qu&iacute;mico Argentino S.A. <br /> Director T&eacute;cnico
<?php } ?>
</td>
</tr>
</div>
</table>
</section>
<footer>
<table class="tabla-header" border="0" cellpadding="0" cellspacing="0">
<tr>
<td>
<img src=<?php echo "http://".$_SERVER['SERVER_ADDR']."/siga2/assets/images/footer.png" ?>>
<!--img src=<?php // echo 'data:image/png;base64,'.base64_encode(file_get_contents("/var/www/html/siga2/assets/images/footer.png")); ?>-->
</td>
</tr>
</table>
</footer>
</body>
</html>
<?php } //fin else ?>
<?php

$html=ob_get_contents();
while (@ob_get_clean());

if($_GET['format']=='pdf'){
#echo $html;
    $filename = file_put_contents ($this->lblOrdenesTrabajoId->Text.'.html',$html);
    header("Content-type: application/pdf");
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Content-Disposition: attachment; filename=".$this->lblOrdenesTrabajoId->Text.".pdf");
    passthru('wkhtmltopdf -s A4 '.$this->lblOrdenesTrabajoId->Text.'.html '.$this->lblOrdenesTrabajoId->Text.'.pdf');
    $f = file_get_contents($this->lblOrdenesTrabajoId->Text.'.pdf');
    echo $f;
    #unlink($this->lblOrdenesTrabajoId->Text.'.html');
    #unlink($this->lblOrdenesTrabajoId->Text.'.pdf');
  
} else if($_GET['format']=='doc') {
#echo $html;

    header("Content-type: application/vnd.ms-word");
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Content-Disposition: attachment; filename=".$this->lblOrdenesTrabajoId->Text.".doc");

    $filename = file_put_contents ($this->lblOrdenesTrabajoId->Text.'.doc',$html);
    $f = file_get_contents($this->lblOrdenesTrabajoId->Text.'.doc');
    echo $f;
    unlink($this->lblOrdenesTrabajoId->Text.'.doc');
    #passthru('wkhtmltopdf /tmp/'.$this->lblOrdenesTrabajoId->Text.'.html /tmp/'.$this->lblOrdenesTrabajoId->Text.'.pdf');
}

?>
<?php $this->RenderEnd(); ?>
