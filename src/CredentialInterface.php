<?php
namespace Bleicker\Account;

/**
 * Class Credential
 *
 * @package Bleicker\Account
 */
interface CredentialInterface {

	/**
	 * @param AccountInterface $account
	 * @return $this
	 */
	public function setAccount(AccountInterface $account = NULL);

	/**
	 * @return AccountInterface
	 */
	public function getAccount();

	/**
	 * @param string $value
	 * @return $this
	 */
	public function setValue($value = NULL);

	/**
	 * @return string
	 */
	public function getValue();

	/**
	 * @return int
	 */
	public function getId();
}