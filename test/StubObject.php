<?php

namespace CriteriaEngine\Test;

class StubObject{
	public function set_value($val){
		$this->value = $val;
	}
	public function get_value(){
		return $this->value;
	}
}