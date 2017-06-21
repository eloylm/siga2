<?php
	// This is the HTML template include file (.tpl.php) for muestrasEditPanel.
	// Remember that this is a DRAFT.  It is MEANT to be altered/modified.
	// Be sure to move this out of the drafts/dashboard subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.
?>
	<div id="formControls">
		<?php $_CONTROL->lblMuestrasId->RenderWithName(); ?>

		<?php $_CONTROL->txtDetalle->RenderWithName(); ?>

		<?php $_CONTROL->txtObservaciones->RenderWithName(); ?>

		<?php $_CONTROL->lstClientes->RenderWithName(); ?>

		<?php $_CONTROL->chkEstado->RenderWithName(); ?>

		<?php $_CONTROL->lstUsuarios->RenderWithName(); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $_CONTROL->btnSave->Render(); ?></div>
		<div id="cancel"><?php $_CONTROL->btnCancel->Render(); ?></div>
		<div id="delete"><?php $_CONTROL->btnDelete->Render(); ?></div>
	</div>
