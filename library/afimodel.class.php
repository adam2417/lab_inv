<?php
class AfiModel extends SQLQuery {
	protected $_model,$table_name;

	function __construct() {
		
		global $inflect;
		$this->connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
		$this->_limit = PAGINATE_LIMIT;
		$this->_model = get_class($this);
		$this->_table = strtolower($this->table_name);
		if (!isset($this->abstract)) {
			$this->_describe();
		}
	}

	function __destruct() {
	}
}
