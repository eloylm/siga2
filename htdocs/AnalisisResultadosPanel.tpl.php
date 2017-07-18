<div id="descargaPdf" class="etiqueta">
    <?php
    
        echo 'Descargar Orden de Trabajo: <a href=pdf.php?do=orden&action=resultados&format=doc&intOrdenesTrabajoId='.
        QApplication::QueryString('intOrdenesTrabajoId').'><img src="'. __VIRTUAL_DIRECTORY__ .'/assets/images/ico_orden.jpg" border=0 title="Descargar Orden de Trabajo" alt="Descargar Orden de Trabajo"></a>';
    
    ?></p>
        

    <?php if(($_SESSION['UsuarioRol']=='responsablecertificados') && isset($_SESSION['resultados'])) {
        echo '<p>Descargar Informe: <a href=pdf.php?action=resultados&format=doc&intOrdenesTrabajoId='.
            QApplication::QueryString('intOrdenesTrabajoId').'><img src="'. __VIRTUAL_DIRECTORY__ .'/assets/images/ico_pdf.jpg" border=0 title="Descargar Informe" alt="Descargar Informe"></a>';
    
    ?>
    
    <?php
        }
    ?>
</div>
<table width="60%" border="0" cellpadding="0" cellspacing="1" id="table3">
  <tr class="select">
    <td><div class="etiqueta" align="right">Nro de Orden:</div></td>
    <td><?php $_CONTROL->lblOrdenesTrabajoId->Render(); ?></td>
    <td><div class="etiqueta" align="right">Fecha de Ingreso:</div></td>
    <td><?php $_CONTROL->lblFechaEntrada->Render(); ?></td>
  </tr>
  <tr>
    <td><div class="etiqueta" align="right">Cliente:</div></td>
    <td><?php $_CONTROL->lblCliente->Render(); ?></td>
    <td><div class="etiqueta" align="right">Peso en Kg:</div></td>
    <td><?php $_CONTROL->lblKg->Render(); ?></td>
  </tr>
  <tr class="select">
    <td><div class="etiqueta" align="right">Destino:</div></td>
    <td><?php $_CONTROL->lblDestino->Render(); ?></td>
    <td><div class="etiqueta" align="right">Mercaderia:</div></td>
    <td><?php $_CONTROL->lblMuestra->Render(); ?></td>
  </tr>
  <tr>
    <td><div class="etiqueta" align="right">Buque:</div></td>
    <td><?php $_CONTROL->lblBuque->Render(); ?></td>
    <td><div class="etiqueta" class="etiqueta" align="right">Puerto:</div></td>
    <td><?php $_CONTROL->lblPuerto->Render(); ?></td>
  </tr>
  <tr class="select">
    <td><div class="etiqueta" align="right">Cargador:</div></td>
    <td><?php $_CONTROL->lblCargador->Render(); ?></td>
    <td><div class="etiqueta" align="right">Nro Referencia Cliente:</div></td>
    <td><?php $_CONTROL->lblReferenciaCliente->Render(); ?></td>
  </tr>
</table>

<?php $_CONTROL->dtgResultados->Render(); ?>
<p>&nbsp;
<p align="right">
<?php
 if($_SESSION['UsuarioRol']=='directortecnico') {
    $_CONTROL->btnFirmar->Render();
 }?>
&nbsp;
<?php
 if($_SESSION['UsuarioRol']=='directortecnico') {
    $_CONTROL->btnCongelar->Render();
 }?>
</p>
