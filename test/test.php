<?php

require_once( __DIR__ . '/../vendor/autoload.php');

$repo = new CriteriaEngine\Test\CriteriaListRepoStub();
$engine = new CriteriaEngine\Classes\BaseCriteriaEngine($repo);
$object = new CriteriaEngine\Test\StubObject();



echo str_pad("TEST 1", 50, "=", STR_PAD_BOTH);
echo "\nObject value: 100\n";
$object->set_value(100);

echo "\nFirst criteria meet:\n";
$engine->meet_first_criteria_on_list($object);
echo "\n";
echo "\nAll criteria meet:\n";
$engine->meet_all_criteria_on_list($object);
echo "\n";

echo str_pad("TEST 2", 50, "=", STR_PAD_BOTH);

echo "\nObject value: 30\n";
$object->set_value(30);

echo "\nFirst criteria meet:\n";
$engine->meet_first_criteria_on_list($object);
echo "\n";
echo "\nAll criteria meet:\n";
$engine->meet_all_criteria_on_list($object);
echo "\n";

echo str_pad("TEST 3", 50, "=", STR_PAD_BOTH);

echo "\nObject value: 50\n";
$object->set_value(50);

echo "\nFirst criteria meet:\n";
$engine->meet_first_criteria_on_list($object);
echo "\n";
echo "\nAll criteria meet:\n";
$engine->meet_all_criteria_on_list($object);
echo "\n";