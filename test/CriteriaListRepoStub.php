<?php

namespace CriteriaEngine\Test;
use CriteriaEngine\Test\GreaterThan100;
use CriteriaEngine\Test\LesserThan50;
use CriteriaEngine\Classes\BaseCriteriaListRepository;

class CriteriaListRepoStub extends BaseCriteriaListRepository{
	public static function get_criteria_list(){
		return [
			GreaterThan100::class,
			LesserThan50::class,
		];
	}
}