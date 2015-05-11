<?php

namespace Bleicker\Account;

/**
 * Class Credential
 *
 * @package Bleicker\Account
 */
class Credential implements CredentialInterface {

	/**
	 * @var integer
	 */
	protected $id;

	/**
	 * @var AccountInterface
	 */
	protected $account;

	/**
	 * @var string
	 */
	protected $password;

	/**
	 * @param AccountInterface $account
	 * @param string $password
	 */
	public function __construct(AccountInterface $account, $password) {
		$this->account = $account;
		$this->password = $password;
	}

	/**
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return AccountInterface
	 */
	public function getAccount() {
		return $this->account;
	}
}
