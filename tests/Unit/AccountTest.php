<?php

namespace Tests\Bleicker\Account\Unit;

use Bleicker\Account\Account;
use Bleicker\Account\Role;
use Tests\Bleicker\Account\UnitTestCase;

/**
 * Class AccountTest
 *
 * @package Tests\Bleicker\Account\Unit
 */
class AccountTest extends UnitTestCase {

	/**
	 * @test
	 */
	public function createTest() {
		$account = new Account('john');
		$this->assertEquals('john', $account->getIdentity());
	}

	/**
	 * @test
	 */
	public function addRoleTest() {
		$account = new Account('john');
		$role = new Role('Admin');
		$account->addRole($role);
		$this->assertEquals(1, $account->getRoles()->count());
		$this->assertTrue($account->getRoles()->contains($role));
	}

	/**
	 * @test
	 */
	public function removeRoleTest() {
		$account = new Account('john');
		$role = new Role('Admin');
		$account->addRole($role)->removeRole($role);
		$this->assertEquals(0, $account->getRoles()->count());
		$this->assertFalse($account->getRoles()->contains($role));
	}
}
