<?php

namespace CriteriaEngine\Classes;
use CriteriaEngine\Classes\BaseCriteriaListRepository as BaseCriteriaListRepository;
use CriteriaEngine\Interfaces\CriteriaEngineInterface as CriteriaEngineInterface;

class BaseCriteriaEngine implements CriteriaEngineInterface{
	public function __construct(BaseCriteriaListRepository $criteria_list_repository){
		$this->criteria_class_list = $criteria_list_repository::get_criteria_list();
	}

	/**
	 * [meet_first_criteria_on_list description]
	 * @param  [type] $object [description]
	 * @return [type]         [description]
	 */
	public function meet_first_criteria_on_list(\CriteriaEngine\Interfaces\CriterizableObjectInterface $object){
		foreach($this->criteria_class_list as $criteria){
			if($criteria::meets_criteria($object)){
				$criteria::execute($object);
				break;
			}
		}
	}

	/**
	 * [meet_all_criteria_on_list description]
	 * @param  [type] $object [description]
	 * @return [type]         [description]
	 */
	public function meet_all_criteria_on_list(\CriteriaEngine\Interfaces\CriterizableObjectInterface $object){
		foreach($this->criteria_class_list as $criteria){
			$criteria::execute_if_meets_criteria($object);
		}		
	}
}