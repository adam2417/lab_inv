<?php
class HomeController extends AfiController
{
    function beforeAction () {
        /*if(!isset($_SESSION['userid'])){
            redirectAction('login','index',array());
        }*/
	}
    
    function index(){
       $this->set('content','hallow');
    }
	
	function afterAction() {

	}
}