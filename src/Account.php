<?php

namespace Bleicker\Account;

/**
 * Class Account
 *
 * @package Bleicker\Account
 */
class Account implements AccountInterface {

	/**
	 * @var string
	 */
	protected $username;

	/**
	 * @param string $username
	 * @return $this
	 */
	public function setUsername($username) {
		$this->username = $username;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getUsername() {
		return $this->username;
	}
}
