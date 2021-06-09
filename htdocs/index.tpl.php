<?php require(__INCLUDES__ . '/header.inc.php'); ?>

<?php $this->RenderBegin(); ?>
<script type="text/javascript" src="<?php echo __VIRTUAL_DIRECTORY__ ."/assets/js/jquery.js"; ?>"></script>
<script type="text/javascript" src="<?php echo __VIRTUAL_DIRECTORY__ ."/assets/js/jquery.autocomplete.js";?>"></script>
<script type="text/javascript" src="<?php echo __VIRTUAL_DIRECTORY__ ."/assets/js/jquery.bgiframe.min.js"?>"></script>
<?php //QApplication::$Database[1]->EnableProfiling(); ?>

<!-- Start Qcubed -->

<div id="titleBar">
    <h2>DEV!!!!!!!!SIGA - Sistema de Gesti&oacute;n de An&aacute;lisis</h2><?php //echo $_SESSION['UsuarioRol']; ?>
    <div class="bienvenidos">Bienvenido <?php $this->lblNombreUsuario->Render(); ?></div>
</div>
<div id="middlebar">
    <?php $this->objDefaultWaitIcon->Render(); ?><a class="logout" href="index.php?action=salir">Cerrar Sesion</a>
    <span class="logout" >
        <?php if ($_SESSION['UsuarioRol']=='analistas' || $_SESSION['UsuarioRol']=='responsablecalidad') {
            $this->lnkMisAnalisis->Render(); ?>
        |
            <?php $this->lnkTodosAnalisis->Render(); ?>
        |
        <?php
        } else {
            $this->lnkTodosAnalisis->Render();
            echo " | ";
        }
        $this->bntRefresh->Render(); ?>
    </span>

    <div>
        <ul class="menu" onclick="javascript:showlayer('sm_2')">
            <li><a href="#">Ver</a></li>
            <ul class="submenu" id="sm_2">
                <li><?php $this->lnkVerMuestras->Render();?></li>
                <li><?php $this->lnkVerCongeladas->Render();?></li>
                <li><?php $this->lnkVerEnProceso->Render();?></li>
            </ul>
        </ul>
    </div>
    <div>
        <ul class="menu" onclick="javascript:showlayer('sm_1')">
            <?php if ($_SESSION['UsuarioRol']=='responsablemuestras') { ?>
            <li><a href="#">Ingresar</a></li>
            <ul class="submenu" id="sm_1" style="margin-left:65px">
                <li><?php $this->objMuestrasCreateNew->btnCreateNew->Render();?></li>
                <li><?php $this->objOrdenesCreateNew->btnCreateNew->Render();?></li>
                <li><?php $this->lnkNuevoEnsayo->Render();?></li>
                 <li><?php $this->lnkNuevoCliente->Render();?></li>
                <li><?php $this->objUsuariosCreateNew->btnCreateNew->Render();?></li>
            </ul>
        </ul>
        <?php } //Fin IF resposable muestras ?>
    </div>
</div>
<div class="" id="right" onmouseover="javascript:hidelayer();">
    <?php //$this->lnkVolver->Render(); ?>
    <?php $this->pnlList->Render(); ?>
    <?php $this->pnlEdit->Render(); ?>
    <?php $this->analisisResultadosPanel->Render(); ?>
</div>
<br/><br/>
<link rel='stylesheet' type='text/css' media='all' href='/siga2/assets/css/jquery.autocomplete.css' />
<?php $this->RenderEnd(); ?>
<?php //QApplication::$Database[1]->OutputProfiling(); ?>
<?php require(__INCLUDES__ . '/footer.inc.php'); ?>
