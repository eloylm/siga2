<?php
	// This is the HTML template include file (.tpl.php) for ordenes_trabajoEditPanel.
	// Remember that this is a DRAFT.  It is MEANT to be altered/modified.
	// Be sure to move this out of the drafts/dashboard subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.
?>

	<div id="formControls">
            <div  style="float:left;margin-left:10px;margin-right:10px;">
                    <?php //$_CONTROL->calFechaEntrada->RenderWithName(); ?>
            <br>
                   <label style="display:block">Mercaderia</label><br><?php $_CONTROL->lstMuestras->RenderWithError(); ?>
                <p>
                    <label style="display:block">Cargador</label><br> <?php $_CONTROL->txtCargador->Render(); ?>
                  
            </div>
            <div style="float:left;margin-right:10px;margin-top:0px">
            <br>
                   <label style="display:block">Cliente</label><br><?php $_CONTROL->lstClientes->RenderWithError(); ?>
                   <p>
                  <label style="display:block">Buque</label><br>  <?php $_CONTROL->txtBuque->Render(); ?>
            </div>
            <div style="float:left;margin-right:10px;margin-top:0px">
            <br>
              <label style="display:block">Puerto</label> <br><?php $_CONTROL->txtPuerto->Render(); ?>
              <p>
                <label style="display:block">Kg</label><br><?php $_CONTROL->txtKg->Render(); ?>
              <p>
            </div>
            <div style="margin-left:10px">
               <br>
               <label style="display:block">Nro de Referencia</label><br><?php $_CONTROL->txtReferenciaCliente->Render(); ?>
                <p>
               <label style="display:block">Destino</label><br> <?php $_CONTROL->txtDestino->Render(); ?>
                
            </div>

	</div>
<div id="analisisObservaciones">
        <div id="txtObservaciones">
            <label style="display:block">Observaciones</label><br><?php $_CONTROL->txtObservaciones->Render("Rows=15"); ?>
        </div>
    <label style="display:block; margin-left:50px">Ensayos</label>
    <div id="listAnalisis"><br><?php $_CONTROL->lstAnalisises->Render(); ?></div>
        
</div>

	<div id="formActions" style="float:left;margin-left:30px">
		<div id="save"><?php $_CONTROL->btnSave->Render(); ?></div>
		<div id="cancel"><?php $_CONTROL->btnCancel->Render(); ?></div>
		<div id="delete"><?php $_CONTROL->btnDelete->Render(); ?></div>
	</div>
