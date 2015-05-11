<?php

namespace Tests\Bleicker\Account\Unit;

use Bleicker\Account\Account;
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
}
