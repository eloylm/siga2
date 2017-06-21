<?php
	// This is the HTML template include file (.tpl.php) for the clientes_edit.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

	// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.

	$strPageTitle = QApplication::Translate('Clientes') . ' - ' . $this->mctClientes->TitleVerb;
	require(__INCLUDES__ . '/header.inc.php');
?>

	<?php $this->RenderBegin() ?>

	<div id="titleBar">
		<h2><?php _p($this->mctClientes->TitleVerb); ?></h2>
		<h1><?php _t('Clientes')?></h1>
	</div>

	<div id="formControls">
		<?php $this->lblClientesId->RenderWithName(); ?>

		<?php $this->txtNombre->RenderWithName(); ?>

		<?php $this->txtDireccion->RenderWithName(); ?>

		<?php $this->txtLocalidad->RenderWithName(); ?>

		<?php $this->txtProvincia->RenderWithName(); ?>

		<?php $this->txtEmail->RenderWithName(); ?>

		<?php $this->txtResponsableContacto->RenderWithName(); ?>

		<?php $this->calFechaAlta->RenderWithName(); ?>

		<?php $this->chkEstado->RenderWithName(); ?>

		<?php $this->txtEmailSecundario->RenderWithName(); ?>

		<?php $this->txtTelefono->RenderWithName(); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $this->btnSave->Render(); ?></div>
		<div id="cancel"><?php $this->btnCancel->Render(); ?></div>
		<div id="delete"><?php $this->btnDelete->Render(); ?></div>
	</div>

	<?php $this->RenderEnd() ?>	

<?php require(__INCLUDES__ .'/footer.inc.php'); ?>