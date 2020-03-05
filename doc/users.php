<?php


namespace doc;


use types\{InputUser, UserFull, User, SecureValueError};

class users {

	/**
	 * @param InputUser $id
	 *
	 * @return UserFull
	 * @link https://docs.madelineproto.xyz/API_docs/methods/users.getFullUser.html
	 *
	 */
	public function getFullUser( $id ) {
	}

	/**
	 * @param InputUser $id
	 *
	 * @return User
	 * @link https://docs.madelineproto.xyz/API_docs/methods/users.getUsers.html
	 *
	 */
	public function getUsers( $id ) {
	}

	/**
	 * @param InputUser $id
	 * @param SecureValueError $errors
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/users.setSecureValueErrors.html
	 *
	 */
	public function setSecureValueErrors( $id, $errors ) {
	}
}