<?php
class Template

{
	protected $variables = array();
	protected $_controller;
	protected $_action;
	function __construct($controller, $action)
	{
		$this->_controller = $controller;
		$this->_action = $action;
		$this->set('controller', $controller);
		$this->set('action', $action);
	}

	/** Set Variables **/
	function set($name, $value)
	{
		$this->variables[$name] = $value;
	}

	/** Display Template **/
	function render()
	{
		$html = new HTML;
		extract($this->variables);
		if (file_exists(ROOT . DS . 'application' . DS . 'views' . DS . $this->_controller . DS . 'template' . '.php')) {
			include (ROOT . DS . 'application' . DS . 'views' . DS . $this->_controller . DS . 'template' . '.php');
		}
		else {
			if (TEMPLATE_STYLE != (null || '')) {
				include (ROOT . DS . 'application' . DS . 'views' . DS . 'templates' . DS . TEMPLATE_STYLE . DS . 'template.php');
			}
			else {
				include (ROOT . DS . 'application' . DS . 'views' . DS . 'templates' . DS . DEFAULT_TEMPLATE_STYLE . DS . 'template.php');
			}
		}
	}
}
