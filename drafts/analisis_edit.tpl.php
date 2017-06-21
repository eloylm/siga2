<?php
	// This is the HTML template include file (.tpl.php) for the analisis_edit.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

	// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.

	$strPageTitle = QApplication::Translate('Analisis') . ' - ' . $this->mctAnalisis->TitleVerb;
	require(__INCLUDES__ . '/header.inc.php');
?>

	<?php $this->RenderBegin() ?>

	<div id="titleBar">
		<h2><?php _p($this->mctAnalisis->TitleVerb); ?></h2>
		<h1><?php _t('Analisis')?></h1>
	</div>

	<div id="formControls">
		<?php $this->lblAnalisisId->RenderWithName(); ?>

		<?php $this->txtNombre->RenderWithName(); ?>

		<?php $this->txtTiempoDemora->RenderWithName(); ?>

		<?php $this->lstMetodoses->RenderWithName(true, "Rows=7"); ?>

		<?php $this->lstOrdenesTrabajos->RenderWithName(true, "Rows=7"); ?>

		<?php $this->lstUnidadeses->RenderWithName(true, "Rows=7"); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $this->btnSave->Render(); ?></div>
		<div id="cancel"><?php $this->btnCancel->Render(); ?></div>
		<div id="delete"><?php $this->btnDelete->Render(); ?></div>
	</div>

	<?php $this->RenderEnd() ?>	

<?php require(__INCLUDES__ .'/footer.inc.php'); ?>