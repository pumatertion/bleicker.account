<?php

namespace Bleicker\Account;

use Doctrine\Common\Collections\Collection;

/**
 * Interface AccountInterface
 *
 * @package Bleicker\Account
 */
interface AccountInterface {

	/**
	 * @return string
	 */
	public function getIdentity();

	/**
	 * @param string $identity
	 * @return $this
	 */
	public function setIdentity($identity = NULL);

	/**
	 * @return Collection
	 */
	public function getRoles();

	/**
	 * @param RoleInterface $role
	 * @return $this
	 */
	public function addRole(RoleInterface $role);

	/**
	 * @param RoleInterface $role
	 * @return $this
	 */
	public function removeRole(RoleInterface $role);
}