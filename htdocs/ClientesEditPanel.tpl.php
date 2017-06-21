<?php
	// This is the HTML template include file (.tpl.php) for clientesEditPanel.
	// Remember that this is a DRAFT.  It is MEANT to be altered/modified.
	// Be sure to move this out of the drafts/dashboard subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.
?>
	<div id="formControls">
		<?php $_CONTROL->lblClientesId->RenderWithName(); ?>

		<?php $_CONTROL->txtNombre->RenderWithName(); ?>

		<?php $_CONTROL->txtTelefono->RenderWithName(); ?>

		<?php $_CONTROL->txtDireccion->RenderWithName(); ?>

		<?php $_CONTROL->txtLocalidad->RenderWithName(); ?>

		<?php $_CONTROL->txtProvincia->RenderWithName(); ?>

		<?php $_CONTROL->txtEmail->RenderWithName(); ?>

		<?php $_CONTROL->txtResponsableContacto->RenderWithName(); ?>

		<?php $_CONTROL->calFechaAlta->RenderWithName(); ?>

		<?php $_CONTROL->chkEstado->RenderWithName(); ?>

		<?php $_CONTROL->txtEmailSecundario->RenderWithName(); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $_CONTROL->btnSave->Render(); ?></div>
		<div id="cancel"><?php $_CONTROL->btnCancel->Render(); ?></div>
		<div id="delete"><?php $_CONTROL->btnDelete->Render(); ?></div>
	</div>
