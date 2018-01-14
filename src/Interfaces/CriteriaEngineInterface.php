<?php

namespace CriteriaEngine\Interfaces;

interface CriteriaEngineInterface{
	
	public function meet_first_criteria_on_list(\CriteriaEngine\Interfaces\CriterizableObjectInterface $object);
	public function meet_all_criteria_on_list(\CriteriaEngine\Interfaces\CriterizableObjectInterface $object);
}