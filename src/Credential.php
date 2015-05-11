<?php

namespace Bleicker\Account;

/**
 * Class Credential
 *
 * @package Bleicker\Account
 */
class Credential {

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
	 * @param int $id
	 * @return $this
	 */
	public function setId($id) {
		$this->id = $id;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @param AccountInterface $account
	 * @return $this
	 */
	public function setAccount(AccountInterface $account) {
		$this->account = $account;
		return $this;
	}

	/**
	 * @return AccountInterface
	 */
	public function getAccount() {
		return $this->account;
	}

	/**
	 * @param string $password
	 * @return $this
	 */
	public function setPassword($password) {
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
