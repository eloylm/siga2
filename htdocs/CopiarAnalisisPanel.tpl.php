<?php

?>
	<div id="formControls">

		<?php $_CONTROL->txtDetalle->RenderWithName(); ?>

		<?php $_CONTROL->txtObservaciones->RenderWithName(); ?>

            <div  style="display:inline">
                <div  class="renderWithName">
                <div class="left">
                 <label for="72">Cliente</label>
                </div>
                
                </div>
            </div>
		
		<?php //$_CONTROL->lstUsuarios->RenderWithName(); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $_CONTROL->btnSave->Render(); ?></div>
		<div id="cancel"><?php $_CONTROL->btnCancel->Render(); ?></div>
		<div id="delete"><?php $_CONTROL->btnDelete->Render(); ?></div>
	</div>
