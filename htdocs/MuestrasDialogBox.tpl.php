<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<div id="formControls">
		<?php $_CONTROL->lblMuestrasId->RenderWithName(); ?>

		<?php $_CONTROL->txtDetalle->RenderWithName(); ?>

		<?php $_CONTROL->txtObservaciones->RenderWithName(); ?>

		<?php $_CONTROL->lstClientes->RenderWithName(); ?>

		<?php $_CONTROL->chkEstado->RenderWithName(); ?>

		<?php //$_CONTROL->lstUsuarios->RenderWithName(); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $_CONTROL->btnSave->Render(); ?></div>
		<div id="cancel"><?php $_CONTROL->btnCancel->Render(); ?></div>

	</div>
