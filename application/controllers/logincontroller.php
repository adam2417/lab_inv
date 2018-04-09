<?php
//session_start();
class LoginController extends AfiController
{
    function beforeAction () {
	}
    
    function index(){
        $login = $this->load_model('user');
        if(isset($_POST['login'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $login->setUserId($username);
            $login->setPassword($password);
            $userlist = $login->isLogin();
            
            if(count($userlist) > 0) {
                foreach ($userlist as $user){ 
                    /*session_set_save_handler(array($handler, 'sess_open'),
                        array($handler, 'sess_close'),
                        array($handler, 'sess_read'),
                        array($handler, 'sess_write'),
                        array($handler, 'sess_destroy'),
                        array($handler, 'sess_gc'));*/

                    //session_start();
                    $_SESSION['userid'] = $user["UserModel"]['userid'];
                    $_SESSION['username'] = $user['pegawai']['nama'];
                    $_SESSION['golongan'] = $user['pegawai']['golongan'];
                }
               // var_dump($_SESSION);
               redirectAction('home','index',array());
            }
         }
        $this->set('content','Login now');
    }
    
    function logout() {
        if(isset($_SESSION['userid'])){
            unset($_SESSION['userid']);
            unset($_SESSION['username']);
            unset($_SESSION['golongan']);
            
            redirectAction('login','index',array());
        }
    }
    
    function afterAction() {
	}
}