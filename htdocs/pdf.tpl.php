<?php $this->RenderBegin(); ?>
<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Documento</title>
<script type="text/php">

  if ( isset($do</title>
<script type="text/php">

  if ( mpdf) ) {

    $font = Font_Metrics::get_font("verdana", "bold");
    $dompdf->page_text(72, 18, "Header: {PAGE_NUM} of {PAGE_COUNT}", $font, 6, array(0,0,0));

  }
  </script>
<style type="text/css">
body{font-family:Arial, Helvetica, sans-serif;}

    .datos{  
      width: 210mm;
    }
    div#logo{
        width:100%;
    }
  .tablaborde th, td {
  border: solid #000;
  border-width: thin;
  }
  .tablasinborde th, td {
  border: solid #fff;
  border-width: thin;
    page-break-before: auto; /* 'always,' 'avoid,' 'left,' 'inherit,' or 'right' */
    page-break-after: auto; /* 'always,' 'avoid,' 'left,' 'inherit,' or 'right' */
    page-break-inside: avoid; /* or 'auto' */
  }
.verde-oscuro{
background-color: green;
width: 100%;
height: 10px;
margin-top: -7px;

}
.verde-claro{
background-color: #6da26d;
width: 100%;
height: 10px;
margin-top: -7px;
margin-bottom:5px;
}
body{
font-size: 10px;
}
.firma{font-size: 7px;}
.footer{
margin-left: 100px;
width: 70%;
color: white;
font-weight: bold;
font-size:7px;
}
.tabla_datos {
        font-family:Arial, Helvetica, sans-serif; text-decoration: none;
        border: thin solid #666; border-collapse: collapse; page-break-inside:avoid;
}
.tabla_datos td {
        padding:4px; border: thin solid #999;
}
.tabla_datos th {
        font-weight: bold; text-transform: uppercase; padding:4px; border: 1px solid #999;
/*      color: #FFFFFF; background-color: #B0B0B0; */
}
.tabla-header{width:100%;}
.tabla-header td{border:0}
  </style>
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
<div class="datos">
<div id="images">
<table class="tabla-header">
<tr>
<td colspan=2>
<img width=100% height=14px src=<?php echo "http://".$_SERVER['SERVER_ADDR']."/siga2/assets/images/header-color.png" ?>>
</td>
</tr>
<tr>
<td>
<img width=266px height=47px src=<?php echo "http://".$_SERVER['SERVER_ADDR']."/siga2/assets/images/logo-iqa-certificado.png" ?>>
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
<?php } ?>
</td>
</tr>
</table>
</div>     
 <div align="center">          <b><u>Informe de Ensayo Nº <?php $this->lblOrdenesTrabajoId->Render(); ?></u></b>
      </div>
      
  <p>Sres.</p>
<p><?php $this->lblCliente->Render(); ?></p>
<p><?php $this->lblClienteDireccion->Render(); ?><br></p>
<table class=tabla_datos border="1" cellpadding="0" cellspacing="0"  style="width: 100%;">

    <tr>
      <td>
      <strong>Descripci&oacute;n de la muestra</strong></td>
      <td align="right"><table class=tabla_datos border="1" cellpadding="2" cellspacing="0"  style="width: 100%;">

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
</table></td>
    </tr>
    <tr>
      <td>
      Condici&oacute;n de la muestra</td>
      <td align="right"><?php $this->lblObservaciones->Render(); ?></td>
    </tr>
    <tr>
      <td>Fecha ingreso muestra</td>
      <td align="right"><?php $this->lblFechaEntrada->Render(); ?></td>
    </tr>
    <tr>
        <td>Fecha del an&aacute;lisis</td>
      <td align="right"><?php echo $this->lblFechaResultados->Render(); ?></td>
    </tr>

</table>
<p>&nbsp;</p>
<table  class=tabla_datos border="1" style="width: 100%"  cellpadding="0" cellspacing="0">
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
<p><strong><u>Referencias:</u></p>
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

<table class=tabla_datos style="width: 100%"  border="1" cellpadding="0" cellspacing="0">
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
<table class=tabla_datos style="width: 100%" border="1" cellpadding="0" cellspacing="0">
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
<table class="tablasinborde" border="0" cellpadding="0" cellspacing="0" width="100%" >
<tr>
<td>
<p align="right"><strong>Fecha de emisi&oacute;n del informe de ensayo</strong></p>
<p align="right">Lugar y Fecha</p>
<p align="right">Buenos Aires, Argentina - <?php echo date("d-m-Y"); ?></p>
<?php if ($this->firmado == 'true'){ ?>
<p align="right"><img width=117px height=121px src=<?php echo "http://".$_SERVER['SERVER_ADDR']."/siga2/assets/images/firma-luis.png"; ?>></p>
<p class="firma" align="right">Dr. LUIS O. MORENO <br /> Instituto Qu&iacute;mico Argentino S.A. <br /> Director T&eacute;cnico
<?php } ?>
</td>
</tr>
</table>
<table class="tablasinborde" border="0" cellpadding="0" cellspacing="0" width="100%" >
<tr>
<td>
<img width=563px height=62px src=<?php echo "http://".$_SERVER['SERVER_ADDR']."/siga2/assets/images/footer-gray.png" ?>>
</td>
</tr>
</table>
</div>
</body>
</html>
<?php } //fin else ?>
<?php

$html=ob_get_contents();
while (@ob_get_clean());

if($_GET['format']=='pdf'){
  
} else if($_GET['format']=='doc') {
echo $html;

    #header("Content-type: application/octet-stream");
    header("Content-type: application/vnd.ms-word");
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Content-Disposition: attachment; filename=".$this->lblOrdenesTrabajoId->Text.".doc");

    $filename = file_put_contents ($this->lblOrdenesTrabajoId->Text.'.doc',$html);
    $f = file_get_contents($this->lblOrdenesTrabajoId->Text.'.doc');
    echo $f;
    unlink($this->lblOrdenesTrabajoId->Text.'.doc');

}

?>
<?php $this->RenderEnd(); ?>
