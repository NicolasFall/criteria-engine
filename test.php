<?php

require_once('vendor/autoload.php');

$repo = new CriteriaEngine\Classes\BaseCriteriaListRepository();
$engine = new CriteriaEngine\Classes\BaseCriteriaEngine($repo);

echo 'First criteria meet:';
$engine->meet_first_criteria_on_list([]);

echo 'All criteria meet:';
$engine->meet_all_criteria_on_list([]);