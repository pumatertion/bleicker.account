<?php

namespace Tests\Bleicker\Account\Unit;

use Bleicker\Account\Account;
use Bleicker\Account\Credential;
use Tests\Bleicker\Account\UnitTestCase;

/**
 * Class CredentialTest
 *
 * @package Tests\Bleicker\Account\Unit
 */
class CredentialTest extends UnitTestCase {

	/**
	 * @test
	 */
	public function createTest() {
		$account = new Account('john');
		$credential = new Credential($account, 'secret');
		$this->assertEquals('john', $credential->getAccount()->getIdentity());
	}
}
