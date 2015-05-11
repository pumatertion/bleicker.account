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