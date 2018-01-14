<?php

namespace CriteriaEngine\Test;
use CriteriaEngine\Classes\BaseCriteria as BaseCriteria;

class GreaterThan100 extends BaseCriteria{

	protected static $validate = ['value'];

	/**
	 * [meets_criteria description]
	 * @param  [type] $object [description]
	 * @return [type]         [description]
	 */
	protected static function meets_criteria_hook(\CriteriaEngine\Interfaces\CriterizableObjectInterface $object){
		return $object->get_value() > 100;
	}

	public static function execute($object){
		echo "GreaterTahn100 meeted.\n";
		return 0;
	}

	public static function execute_if_meets_criteria(\CriteriaEngine\Interfaces\CriterizableObjectInterface $object){
		if(static::meets_criteria($object)){
			return static::execute($object);
		}
	}
}