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
		$credential = new Credential('secret', $account);
		$this->assertEquals('john', $credential->getAccount()->getIdentity());
		$this->assertEquals('secret', $credential->getValue());
	}

	/**
	 * @test
	 */
	public function constructTest() {
		$credential = new Credential();
		$this->assertNull($credential->getAccount());
		$this->assertNull($credential->getValue());
	}

	/**
	 * @test
	 */
	public function setAccountTest() {
		$account = new Account('john');
		$credential = new Credential();
		$credential->setAccount($account);
		$this->assertEquals('john', $credential->getAccount()->getIdentity());
		$this->assertNull($credential->getValue());
	}
}
