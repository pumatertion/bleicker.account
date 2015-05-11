<?php
namespace Bleicker\Account;

/**
 * Class Role
 *
 * @package Bleicker\Account
 */
interface RoleInterface {

	/**
	 * @return integer
	 */
	public function getId();

	/**
	 * @return string
	 */
	public function getName();
}