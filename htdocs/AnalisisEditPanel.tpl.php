<?php
	// This is the HTML template include file (.tpl.php) for analisisEditPanel.
	// Remember that this is a DRAFT.  It is MEANT to be altered/modified.
	// Be sure to move this out of the drafts/dashboard subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.
?>
	<div id="formControls">
		<?php $_CONTROL->lblAnalisisId->RenderWithName(); ?>

		<?php $_CONTROL->txtNombre->RenderWithName(); ?>

		<?php $_CONTROL->txtTiempoDemora->RenderWithName(); ?>
            <div style="width:450px">
            
                <div id="listMetodos">
                     <label style="display:block;">Métodos</label>
                  <?php $_CONTROL->lstMetodoses->Render(); ?>
	    </div>
		
            
                <div id="listUnidades">
                 <label style="display:block;">Unidades</label>
                  <?php $_CONTROL->lstUnidadeses->Render(); ?>
	    </div>
            </div>
	</div>

<div id="formActions" style="margin-top:230px;">
		<div id="save"><?php $_CONTROL->btnSave->Render(); ?></div>
		<div id="cancel"><?php $_CONTROL->btnCancel->Render(); ?></div>
		<div id="delete"><?php $_CONTROL->btnDelete->Render(); ?></div>
	</div>
