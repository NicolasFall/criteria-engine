<?php

namespace CriteriaEngine\Classes;
use CriteriaEngine\Criteria\ExampleCriteria as ExampleCriteria;
use CriteriaEngine\Criteria\ExampleCriteriaBis as ExampleCriteriaBis;
use CriteriaEngine\Interfaces\CriteriaListRepositoryInterface as CriteriaListRepositoryInterface;

class BaseCriteriaListRepository implements CriteriaListRepositoryInterface{
	public static function get_criteria_list(){
		return [
			ExampleCriteria::class,
			ExampleCriteria2::class,
		];
		throw new Exception("get_criteria_list must be redefined. In {self::class} ", 1);		
	}
}
