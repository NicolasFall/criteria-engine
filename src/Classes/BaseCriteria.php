<?php

namespace CriteriaEngine\Classes;
use CriteriaEngine\Interfaces\CriteriaInterface as CriteriaInterface;

class BaseCriteria implements CriteriaInterface{

	// Keys of the names of attributes expected to be validated.
	protected static $validate = [];

	public static function get_required_validations(){
		return array_flip(static::$validate);
	}

	public static function meets_criteria(\CriteriaEngine\Interfaces\CriterizableObjectInterface $object){
		$attr = $object->get_attributes_to_be_evaluated();
		if(!self::validate_attributes_array_structure($attr)){
			throw new \Exception("Attributes structure fail. Attirbutes doesn't match attributes needed in {static::class}.", 1);
		}
		return static::meets_criteria_hook($object);	
	}

	/**
	 * [meets_criteria_hook description]
	 * @param  [type] $object [description]
	 * @return [type]         [description]
	 */
	protected static function meets_criteria_hook(\CriteriaEngine\Interfaces\CriterizableObjectInterface $object){
		throw new \Exception("meets_criteria_hook not redefined.", 1);		
	}

	protected static function validate_attributes_array_structure($array){
		$intersect = array_intersect_key(static::get_required_validations(), $array); 
		return count($intersect) == count(static::get_required_validations()); 
	}
}
