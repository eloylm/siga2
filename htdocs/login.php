<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


require_once('../includes/prepend.inc.php');
class LoginForm extends QForm {
    protected $txtUsername;
    protected $txtPassword;
    protected $btnLogin;
    protected function Form_Create() {
        $this->txtUsername = new QTextBox($this,'txtUser');
        $this->txtUsername->Name = QApplication::Translate('User');
        $this->txtUsername->Validate();
        $this->txtPassword = new QTextBox($this,'txtPass');
        $this->txtPassword->Name = QApplication::Translate('Password');
        $this->txtPassword->Validate();
        $this->txtPassword->TextMode = QTextMode::Password;
        $this->btnLogin = new QButton($this);
        $this->btnLogin->Text = QApplication::Translate('Login');
        $this->btnLogin->AddAction(new QClickEvent(), new QServerAction('btnLogin_Click'));
        $this->btnLogin->PrimaryButton = true;

    }
    protected function Form_Validate() {
    // By default, we report that Custom Validations passed
        $blnToReturn = true;

        // Custom Validation Rules
        // TODO: Be sure to set $blnToReturn to false if any custom validation fails!

        $blnFocused = false;
        foreach ($this->GetErrorControls() as $objControl) {
        // Set Focus to the top-most invalid control
            if (!$blnFocused) {
                $objControl->Focus();
                $blnFocused = true;
            }

            // Blink on ALL invalid controls
            $objControl->Blink();
        }

        return $blnToReturn;
    }
    protected function btnLogin_Click($strFormId, $strControlId, $strParameter) {

        $objUser = Usuarios::LoadByUsuario($this->txtUsername->Text);

        if (!$objUser || $objUser->Password != $this->txtPassword->Text) {
            $this->txtPassword->Text = "";
            $this->txtPassword->Warning = "Usuario o clave incorrecto";
            $this->Form_Validate();
        }else {
            $objRoles = Roles::LoadArrayByUsuarios($objUser->UsuariosId);
            $_SESSION['User'] = serialize($objUser);
            $_SESSION['Usuario']=$objUser->Usuario;
            $_SESSION['idUsuario'] = $objUser->UsuariosId;
            $_SESSION['EstadoOt'] = '';
            foreach ($objRoles as $objRol) {
                $_SESSION['UsuarioRol'] = $objRol->Descrip;
            }
            QApplication::Redirect('index.php');
        }
    }
}
LoginForm::Run('LoginForm', 'login.tpl.php');
?>
