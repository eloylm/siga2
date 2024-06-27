<?php setlocale(LC_ALL,"es_AR.utf8");?>
<?php $this->RenderBegin(); ?>
<?php ob_start();?>

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
    div#datos{  
	width:21cm;
	height:29.7cm;      
	font-family:Arial, Helvetica, sans-serif; text-decoration: none;font-size: 11px;
    }
    div#logo{
        width:100%;
    }
  .tablaborde th, td {
  border: solid #000;
  border-width: thin;
  }
.tab {
    display: inline-block;
    margin-left: 8em;
}

.tabla_datos {
        font-family:Arial, Helvetica, sans-serif; text-decoration: none;font-size: 11px;
        border: thin solid #666; border-collapse: collapse; page-break-inside:avoid;
}
.tabla_datos td {
        padding:4px; border: thin solid #999;
}
.tabla_datos th {
        font-weight: bold; text-transform: uppercase; padding:4px; border: 1px solid #999;
/*      color: #FFFFFF; background-color: #B0B0B0; */

}
.linea-fin {
	border-top: 1px solid #8c8b8b;
	border-bottom: 1px solid #fff;
}
.header {
  border: 1px solid black;
  margin-top: 1px;
  margin-bottom: 1px;
  padding: 0px;
}

.cabecera{font-family:Arial, Helvetica, sans-serif; text-decoration: none;font-size: 9px;
        border: none;  display:inline-block; font-weight:bold;
}
  </style>
</head>
<body>

<?php if(isset($_REQUEST['do']) and ($_REQUEST['do'] == 'orden')) {?>
<div id="datos">
	<div class="cabecera" align="right">PG-21-F1 V2 COMANDA </div>
	<div class="cabecera" align="left">INSTITUTO QUÍMICO ARGENTINO S.A.</div>
<h5 align="center">Nro Orden IQA: <?php $this->lblOrdenesTrabajoId->Render(); ?></h5>
<hr class="header" />

<b>Solicitante: </b><?php $this->lblCliente->Render();?></p>
<p><b>Mercader&iacute;a: </b><?php $this->lblMuestra->Render(); ?><span class=tab>&nbsp;</span> 
<b>Cargador: </b><?php if($this->lblCargador->Text !="") $this->lblCargador->Render();else echo ' - '; ?><br>
<b>Buque: </b><?php if($this->lblBuque->Text != "") $this->lblBuque->Render();else echo ' - '; ?> <span class="tab">&nbsp;</span>
<b>Destino: </b><?php if($this->lblDestino->Text != "") $this->lblDestino->Render(); echo ' - ';?> <span class="tab">&nbsp;</span>
<b>Kg: </b> <?php if($this->lblKg->Text != "") $this->lblKg->Render(); else echo ' - '; ?> <span class="tab">&nbsp;</span>
<br><b>Puerto: </b> <?php if($this->lblPuerto->Text != "") $this->lblPuerto->Render(); else echo ' - '; ?> <span class="tab">&nbsp;</span>
<b>Referencia: </b><?php if($this->lblReferenciaCliente->Text != "") $this->lblReferenciaCliente->Render(); else echo ' - ';?><span class="tab">&nbsp;</span>
<br><b>Observaciones: </b><?php if($this->lblObservaciones2->Text != "") $this->lblObservaciones2->Render(); else echo ' - ';?> <span class="tab">&nbsp;</span> 
<p></p>
<b>Condici&oacute;n de la muestra: </b> <?php if($this->lblObservaciones->Text !="") $this->lblObservaciones->Render();else echo 'En condiciones'; ?><span class="tab">&nbsp;</span>
<b>Fecha&nbsp;ingreso&nbsp;muestra: </b> <?php $this->lblFechaEntrada->Render(); ?><span class="tab"></span>

<hr class="header" />
<br>
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
<div id="datos">

      <div align="center"><!--img src="logoIQAnp.jpg" height="75" width="418"-->
          <b><u>Informe de Ensayo Nº <?php $this->lblOrdenesTrabajoId->Render(); ?></u></b>
      </div>
      
<p><b>Solicitante: </b><?php $this->lblCliente->Render();?></p>
<p><b>Mercader&iacute;a: </b><?php $this->lblMuestra->Render(); ?><span class=tab>&nbsp;</span> 
<b>Cargador: </b><?php if($this->lblCargador->Text !="") $this->lblCargador->Render();else echo ' - '; ?><br>
<b>Buque: </b><?php if($this->lblBuque->Text != "") $this->lblBuque->Render();else echo ' - '; ?> <span class="tab">&nbsp;</span>
<b>Destino: </b><?php if($this->lblDestino->Text != "") $this->lblDestino->Render(); echo ' - ';?> <span class="tab">&nbsp;</span>
<b>Kg: </b> <?php if($this->lblKg->Text != "") $this->lblKg->Render(); else echo ' - '; ?> <span class="tab">&nbsp;</span>
<br><b>Puerto: </b> <?php if($this->lblPuerto->Text != "") $this->lblPuerto->Render(); else echo ' - '; ?> <span class="tab">&nbsp;</span>
<b>Referencia: </b><?php if($this->lblReferenciaCliente->Text != "") $this->lblReferenciaCliente->Render(); else echo ' - ';?><span class="tab">&nbsp;</span>
<b>Observaciones: </b><?php if($this->lblObservaciones2->Text != "") $this->lblObservaciones2->Render(); else echo ' - ';?> <span class="tab">&nbsp;</span> 
<p></p>
<b>Condici&oacute;n de la muestra: </b> <?php if($this->lblObservaciones->Text !="") $this->lblObservaciones->Render();else echo 'En condiciones'; ?><span class="tab">&nbsp;</span>
<b>Fecha&nbsp;ingreso&nbsp;muestra: </b> <?php $this->lblFechaEntrada->Render(); ?><span class="tab"></span>
<b>Fecha&nbsp;del&nbsp;an&aacute;lisis:&nbsp;</b>Desde&nbsp;<?php echo $this->lblFechaEntrada->Text;?>&nbsp;hasta&nbsp;<?php echo $this->lblFechaResultados->Render(); ?></p>


<p>&nbsp;</p>
<table  class=tabla_datos border="1" style="width: auto"  cellpadding="0" cellspacing="0">
     <tr>
      <td><strong>Especificaciones</strong></td>
      <td><strong>Método de Ensayo</strong></td>
      <td><strong>Unidad</strong></td>
      <td><strong>Resultados</strong></td>
    </tr>
<?php foreach ($this->arrResultados as $resultado){
	echo "<tr>";
	echo "<td>$resultado->Analisis</td>";
	echo "<td>$resultado->Norma</td>";
	echo "<td>$resultado->Medicion</td>";
	echo "<td>$resultado->Resultado</td>";
	echo "</tr>";
 }
?>
</table>
<p><strong>El tiempo de conservación de las muestras será de: 3 (tres) meses</strong></p>
<p>
<?php
//$currentDateTime = new DateTime('now');
//$currentDate = $currentDateTime->format('j');
//echo 'Buenos Aires,'.$currentDate;
?>
</p>
<p>
<?php
		
echo strftime("Buenos Aires, %d de %B de %Y");
?>
</p>
<hr class="linea-fin" />
<p align="right">Fin del Informe</p>
</div>
</body>
</html>
<?php } //fin else ?>
<?php

$html=ob_get_contents();
while (@ob_get_clean());

if($_GET['format']=='pdf'){
  
} else if($_GET['format']=='doc') {
    
    header("Content-type: application/rtf");
    header("Content-Disposition: attachment; filename=".$this->lblOrdenesTrabajoId->Text.".rtf");
    $filename = file_put_contents ($this->lblOrdenesTrabajoId->Text.'.rtf',$html);
    $f = file_get_contents($this->lblOrdenesTrabajoId->Text.'.rtf');
    echo $f;
    unlink($this->lblOrdenesTrabajoId->Text.'.rtf');
}

//echo $html;
?>
<?php $this->RenderEnd(); ?>
