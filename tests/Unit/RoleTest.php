<?php

namespace Tests\Bleicker\Account\Unit;

use Bleicker\Account\Role;
use Tests\Bleicker\Account\UnitTestCase;

/**
 * Class RoleTest
 *
 * @package Tests\Bleicker\Account\Unit
 */
class RoleTest extends UnitTestCase {

	/**
	 * @test
	 */
	public function createTest() {
		$role = new Role('foo');
		$this->assertEquals('foo', $role->getName());
	}
}
