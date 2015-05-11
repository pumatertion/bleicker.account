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
	 * @param string $password
	 * @param AccountInterface $account
	 */
	public function __construct($password = NULL, AccountInterface $account = NULL) {
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

	/**
	 * @param AccountInterface $account
	 * @return $this
	 */
	public function setAccount(AccountInterface $account = NULL) {
		$this->account = $account;
		return $this;
	}

	/**
	 * @param string $password
	 * @return $this
	 */
	public function setPassword($password = NULL) {
		$this->password = $password;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPassword() {
		return $this->password;
	}
}
