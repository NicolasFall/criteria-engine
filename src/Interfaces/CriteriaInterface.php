<?php

namespace CriteriaEngine\Interfaces;

interface CriteriaInterface{
	/**
	 * Returns wheter or not the object passed as an argument meets the criteria this
	 * class implements.
	 * @param  [type] $object [description]
	 * @return [type]         [description]
	 */
	public static function meets_criteria($object);
}