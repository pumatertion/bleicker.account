<?php

namespace Bleicker\Account;

/**
 * Class Role
 *
 * @package Bleicker\Account
 */
class Role implements RoleInterface {

	/**
	 * @var integer
	 */
	protected $id;

	/**
	 * @var string
	 */
	protected $name;

	/**
	 * @param string $name
	 */
	public function __construct($name) {
		$this->name = $name;
	}

	/**
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}
}
