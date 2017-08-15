<?php require(__INCLUDES__ . '/header.inc.php'); ?>
<div id="middlebar"><h2>SIGA - Sistema de Gesti&oacute;n de An&aacute;lisis VERSIÓN DE PRUEBA</h2></div>
<div id="login">
    <?php $this->RenderBegin() ?>
    <p>
        <?php $this->txtUsername->RenderWithName(); ?>
    </p>
    <p>
        <?php $this->txtPassword->RenderWithName(); ?>
    </p>
    <p>&nbsp;</p>
    <p class="submit">
        <?php $this->btnLogin->Render() ?>
        <?php $this->RenderEnd() ?>
    </p>
</div>
<script type="text/javascript">
    try{document.getElementById('c1').focus();}catch(e){}
</script>
<?php require(__INCLUDES__ . '/footer.inc.php'); ?>

