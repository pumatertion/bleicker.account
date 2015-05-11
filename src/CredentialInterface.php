<?php
namespace Bleicker\Account;

/**
 * Class Credential
 *
 * @package Bleicker\Account
 */
interface CredentialInterface {

	/**
	 * @return AccountInterface
	 */
	public function getAccount();

	/**
	 * @return string
	 */
	public function getValue();

	/**
	 * @return int
	 */
	public function getId();
}