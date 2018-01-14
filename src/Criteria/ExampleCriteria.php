<?php

namespace CriteriaEngine\Criteria;
use CriteriaEngine\Classes\BaseCriteria as BaseCriteria;

class ExampleCriteria extends BaseCriteria{
	/**
	 * Returns wheter or not the object passed as an argument meets the criteria this
	 * class implements.
	 * @param  [type] $object [description]
	 * @return [type]         [description]
	 */
	public static function meets_criteria($object){
		return true;
	}

	public static function execute($object){
		echo "ExampleCriteria meeted.\n";
		return 0;
	}

	public static function execute_if_meets_criteria($object){
		if(static::meets_criteria($object)){
			return static::execute($object);
		}
	}
}