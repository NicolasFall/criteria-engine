<?php

namespace CriteriaEngine\Test;

class StubObject implements \CriteriaEngine\Interfaces\CriterizableObjectInterface{
	protected $value = 0;
	public function set_value($val){
		$this->value = $val;
	}
	public function get_value(){
		return $this->value;
	}

	public function get_attributes_to_be_evaluated(){
		return [
			"value" => $this->value
		];
	}
}