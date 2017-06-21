<?php
	// This is the HTML template include file (.tpl.php) for ordenes_trabajoEditPanel.
	// Remember that this is a DRAFT.  It is MEANT to be altered/modified.
	// Be sure to move this out of the drafts/dashboard subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.
?>
	<div id="formControls">
		<?php $_CONTROL->lblOrdenesTrabajoId->RenderWithName(); ?>

		<?php $_CONTROL->calFechaEntrada->RenderWithName(); ?>

		<?php $_CONTROL->lstClientes->RenderWithName(); ?>

		<?php $_CONTROL->txtCargador->RenderWithName(); ?>

		<?php $_CONTROL->txtBuque->RenderWithName(); ?>

		<?php $_CONTROL->txtKg->RenderWithName(); ?>

		<?php $_CONTROL->txtPuerto->RenderWithName(); ?>

		<?php $_CONTROL->txtReferenciaCliente->RenderWithName(); ?>

		<?php $_CONTROL->txtDestino->RenderWithName(); ?>

		<?php $_CONTROL->lstMuestras->RenderWithName(); ?>

		<?php $_CONTROL->lstUsuarios->RenderWithName(); ?>

		<?php $_CONTROL->chkNew->RenderWithName(); ?>

		<?php $_CONTROL->txtEstado->RenderWithName(); ?>

		<?php $_CONTROL->txtObservaciones->RenderWithName(); ?>

		<?php $_CONTROL->calFechaFinalizado->RenderWithName(); ?>

		<?php $_CONTROL->lstAnalisises->RenderWithName(true, "Rows=7"); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $_CONTROL->btnSave->Render(); ?></div>
		<div id="cancel"><?php $_CONTROL->btnCancel->Render(); ?></div>
		<div id="delete"><?php $_CONTROL->btnDelete->Render(); ?></div>
	</div>
