<?php
	// This is the HTML template include file (.tpl.php) for the ordenes_trabajo_edit.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

	// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.

	$strPageTitle = QApplication::Translate('OrdenesTrabajo') . ' - ' . $this->mctOrdenesTrabajo->TitleVerb;
	require(__INCLUDES__ . '/header.inc.php');
?>

	<?php $this->RenderBegin() ?>

	<div id="titleBar">
		<h2><?php _p($this->mctOrdenesTrabajo->TitleVerb); ?></h2>
		<h1><?php _t('OrdenesTrabajo')?></h1>
	</div>

	<div id="formControls">
		<?php $this->lblOrdenesTrabajoId->RenderWithName(); ?>

		<?php $this->calFechaEntrada->RenderWithName(); ?>

		<?php $this->lstClientes->RenderWithName(); ?>

		<?php $this->txtCargador->RenderWithName(); ?>

		<?php $this->txtBuque->RenderWithName(); ?>

		<?php $this->txtKg->RenderWithName(); ?>

		<?php $this->txtPuerto->RenderWithName(); ?>

		<?php $this->txtReferenciaCliente->RenderWithName(); ?>

		<?php $this->txtDestino->RenderWithName(); ?>

		<?php $this->lstMuestras->RenderWithName(); ?>

		<?php $this->lstUsuarios->RenderWithName(); ?>

		<?php $this->chkNew->RenderWithName(); ?>

		<?php $this->txtEstado->RenderWithName(); ?>

		<?php $this->txtObservaciones->RenderWithName(); ?>

		<?php $this->calFechaFinalizado->RenderWithName(); ?>

		<?php $this->lstAnalisises->RenderWithName(true, "Rows=7"); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $this->btnSave->Render(); ?></div>
		<div id="cancel"><?php $this->btnCancel->Render(); ?></div>
		<div id="delete"><?php $this->btnDelete->Render(); ?></div>
	</div>

	<?php $this->RenderEnd() ?>	

<?php require(__INCLUDES__ .'/footer.inc.php'); ?>