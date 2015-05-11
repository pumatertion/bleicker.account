<?php

namespace Bleicker\Account;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * Class Account
 *
 * @package Bleicker\Account
 */
class Account implements AccountInterface {

	/**
	 * @var integer
	 */
	protected $id;

	/**
	 * @var string
	 */
	protected $identity;

	/**
	 * @var Collection
	 */
	protected $roles;

	/**
	 * @param string $identity
	 */
	public function __construct($identity = NULL) {
		$this->identity = $identity;
		$this->roles = new ArrayCollection();
	}

	/**
	 * @return integer
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return string
	 */
	public function getIdentity() {
		return $this->identity;
	}

	/**
	 * @param string $identity
	 * @return $this
	 */
	public function setIdentity($identity = NULL) {
		$this->identity = $identity;
		return $this;
	}

	/**
	 * @return Collection
	 */
	public function getRoles() {
		return $this->roles;
	}

	/**
	 * @param RoleInterface $role
	 * @return $this
	 */
	public function addRole(RoleInterface $role) {
		if (!$this->getRoles()->contains($role)) {
			$this->getRoles()->add($role);
		}
		return $this;
	}

	/**
	 * @param RoleInterface $role
	 * @return $this
	 */
	public function removeRole(RoleInterface $role) {
		if ($this->getRoles()->contains($role)) {
			$this->getRoles()->removeElement($role);
		}
		return $this;
	}
}
