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
    div#datos{  
	width:21cm;
	height:29.7cm;      
    }
    div#logo{
        width:100%;
    }
  .tablaborde th, td {
  border: solid #000;
  border-width: thin;
  }

.tabla_datos {
        font-family:Arial, Helvetica, sans-serif; text-decoration: none;font-size: 12px;
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
  </style>
</head>
<body>

<?php if(isset($_REQUEST['do']) and ($_REQUEST['do'] == 'orden')) {?>
<div id="datos">
	 <div id="logo" align="left">
		 <h5>PG-21-F1 V1 COMANDA</h5>
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
<div id="datos">

      <div align="center"><!--img src="logoIQAnp.jpg" height="75" width="418"-->
          <b><u>Informe de Ensayo Nº <?php $this->lblOrdenesTrabajoId->Render(); ?></u></b>
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
    <!--tr>
      <td>
      Condici&oacute;n de la muestra</td>
      <td align="right"><?php /*$this->lblObservaciones->Render();*/ ?></td>
    </tr-->
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
<table  class=tabla_datos border="1" style="width: 90%"  cellpadding="0" cellspacing="0">
     <tr>
      <td><strong>Especificaciones</strong></td>
      <td><strong>Método de Ensayo</strong></td>
      <td><strong>Unidad</strong></td>
      <td><strong>Resultados</strong></td>
      <td>U</td>
    </tr>
<?php foreach ($this->arrResultados as $resultado){
	echo "<tr>";
	echo "<td>$resultado->Analisis</td>";
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
acreditaci&oacute;n del OAA.</p>
<p>Nota 4: Los resultados aplican a la muestra tal como se recibió<br>
</strong></p>

<table class=tabla_datos style="width: 77%"  border="1" cellpadding="0" cellspacing="0">
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
<table class=tabla_datos style="width: 77%" border="1" cellpadding="0" cellspacing="0">
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
<p><strong>El tiempo de conservación de las muestras será de: 3 (tres) meses</strong></p>
<p>&nbsp;</p>
<p><strong>Fecha de emisi&oacute;n del informe de ensayo</strong></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>Lugar y Fecha</p>
<p>&nbsp;</p>
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
