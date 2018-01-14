<?php

namespace CriteriaEngine\Test;
use CriteriaEngine\Classes\BaseCriteria as BaseCriteria;

class GreaterThan100 extends BaseCriteria{
	/**
	 * Returns wheter or not the object passed as an argument meets the criteria this
	 * class implements.
	 * @param  [type] $object [description]
	 * @return [type]         [description]
	 */
	public static function meets_criteria($object){
		return $object->get_value() > 50;
	}

	public static function execute($object){
		echo "GreaterTahn100 meeted.\n";
		return 0;
	}

	public static function execute_if_meets_criteria($object){
		if(static::meets_criteria($object)){
			return static::execute($object);
		}
	}
}