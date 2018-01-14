<?php

namespace CriteriaEngine\Interfaces;

interface CriterizableObjectInterface{
	/**
	 * Returns an asociative array of the attributes/values to be evaluated by a criteria object.
	 * @return [type] [description]
	 */
	public function get_attributes_to_be_evaluated();
}