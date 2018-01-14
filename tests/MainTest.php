<?php
use PHPUnit\Framework\TestCase;

use CriteriaEngine\Test\GreaterThan100;
use CriteriaEngine\Test\LesserThan50;
use CriteriaEngine\Test\StubObject as StubObject;

class MainTest extends TestCase
{
    public function test_meets_criteria()
    {
		$gt100 = new GreaterThan100();
		$lt50 = new LesserThan50();
		$object = new StubObject();

		$object->set_value(150);
		$this->assertTrue($gt100->meets_criteria($object));
		$this->assertFalse($lt50->meets_criteria($object));

		$object->set_value(25);
		$this->assertFalse($gt100->meets_criteria($object));
		$this->assertTrue($lt50->meets_criteria($object));

		$object->set_value(75);
		$this->assertFalse($gt100->meets_criteria($object));
		$this->assertFalse($lt50->meets_criteria($object));
    }
}
