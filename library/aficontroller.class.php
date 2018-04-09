<?php
session_start();
class AfiController {
	
	protected $_controller;
	protected $_action;
	protected $_template;

	public $doNotRenderHeader;
	public $render;
    
    protected $_model;

	function __construct($controller, $action) {
		
		global $inflect;

		$this->_controller = ucfirst($controller);
		$this->_action = $action;
        
		$this->doNotRenderHeader = 0;
		$this->render = 1;
		$this->_template = new Template($controller,$action);        
	}
    
    function load_model($model) {
        $this->_model = ucfirst($model.'Model');        
        return new $this->_model;
    }

	function set($name,$value) {
		$this->_template->set($name,$value);
	}

	function __destruct() {
		if ($this->render) {
			$this->_template->render();
		}
	}    
}