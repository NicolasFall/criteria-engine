<?php

namespace CriteriaEngine\Classes;
use CriteriaEngine\Interfaces\CriteriaInterface as CriteriaInterface;

class BaseCriteria implements CriteriaInterface{
	/**
	 * Returns wheter or not the object passed as an argument meets the criteria this
	 * class implements.
	 * @param  [type] $object [description]
	 * @return [type]         [description]
	 */
	public static function meets_criteria($object){
		throw new Exception("meets_criteria not redefined.", 1);		
	}
}
