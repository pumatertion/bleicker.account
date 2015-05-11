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
	protected $value;

	/**
	 * @param string $value
	 * @param AccountInterface $account
	 */
	public function __construct($value = NULL, AccountInterface $account = NULL) {
		$this->account = $account;
		$this->value = $value;
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
	 * @param string $value
	 * @return $this
	 */
	public function setValue($value = NULL) {
		$this->value = $value;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getValue() {
		return $this->value;
	}
}
