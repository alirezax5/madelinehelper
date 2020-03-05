<?php


namespace doc;


use types\{auth_SentCode,
	bytes,
	CodeSettings,
	InputCheckPasswordSRP,
	long,
	auth_Authorization,
	auth_ExportedAuthorization,
	auth_PasswordRecovery
};

class auth {

	/**
	 * @param long $perm_auth_key_id
	 * @param long $nonce
	 * @param int $expires_at
	 * @param bytes $encrypted_message
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/auth.bindTempAuthKey.html
	 *
	 */
	public function bindTempAuthKey( $perm_auth_key_id, $nonce, $expires_at, $encrypted_message ) {
	}

	/**
	 * @param string $phone_number
	 * @param string $phone_code_hash
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/auth.cancelCode.html
	 *
	 */
	public function cancelCode( $phone_number, $phone_code_hash ) {
	}

	/**
	 * @param InputCheckPasswordSRP $password
	 *
	 * @return auth_Authorization
	 * @link https://docs.madelineproto.xyz/API_docs/methods/auth.checkPassword.html
	 *
	 */
	public function checkPassword( $password ) {
	}

	/**
	 * @param long $except_auth_keys
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/auth.dropTempAuthKeys.html
	 *
	 */
	public function dropTempAuthKeys( $except_auth_keys ) {
	}

	/**
	 * @param int $dc_id
	 *
	 * @return auth_ExportedAuthorization
	 * @link https://docs.madelineproto.xyz/API_docs/methods/auth.exportAuthorization.html
	 *
	 */
	public function exportAuthorization( $dc_id ) {
	}

	/**
	 * @param int $id
	 * @param bytes $bytes
	 *
	 * @return auth_Authorization
	 * @link https://docs.madelineproto.xyz/API_docs/methods/auth.importAuthorization.html
	 *
	 */
	public function importAuthorization( $id, $bytes ) {
	}

	/**
	 * @param int $api_id
	 * @param string $api_hash
	 * @param string $bot_auth_token
	 *
	 * @return auth_Authorization
	 * @link https://docs.madelineproto.xyz/API_docs/methods/auth.importBotAuthorization.html
	 *
	 */
	public function importBotAuthorization( $api_id, $api_hash, $bot_auth_token ) {
	}

	/**
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/auth.logOut.html
	 *
	 */
	public function logOut() {
	}

	/**
	 * @param string $code
	 *
	 * @return auth_Authorization
	 * @link https://docs.madelineproto.xyz/API_docs/methods/auth.recoverPassword.html
	 *
	 */
	public function recoverPassword( $code ) {
	}

	/**
	 *
	 * @return auth_PasswordRecovery
	 * @link https://docs.madelineproto.xyz/API_docs/methods/auth.requestPasswordRecovery.html
	 *
	 */
	public function requestPasswordRecovery() {
	}

	/**
	 * @param string $phone_number
	 * @param string $phone_code_hash
	 *
	 * @return auth_SentCode
	 * @link https://docs.madelineproto.xyz/API_docs/methods/auth.resendCode.html
	 *
	 */
	public function resendCode( $phone_number, $phone_code_hash ) {
	}

	/**
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/auth.resetAuthorizations.html
	 *
	 */
	public function resetAuthorizations() {
	}

	/**
	 * @param string $phone_number
	 * @param int $api_id
	 * @param string $api_hash
	 * @param CodeSettings $settings
	 *
	 * @return auth_SentCode
	 * @link https://docs.madelineproto.xyz/API_docs/methods/auth.sendCode.html
	 *
	 */
	public function sendCode( $phone_number, $api_id, $api_hash, $settings ) {
	}

	/**
	 * @param string $phone_number
	 * @param string $phone_code_hash
	 * @param string $phone_code
	 *
	 * @return auth_Authorization
	 * @link https://docs.madelineproto.xyz/API_docs/methods/auth.signIn.html
	 *
	 */
	public function signIn( $phone_number, $phone_code_hash, $phone_code ) {
	}

	/**
	 * @param string $phone_number
	 * @param string $phone_code_hash
	 * @param string $first_name
	 * @param string $last_name
	 *
	 * @return auth_Authorization
	 * @link https://docs.madelineproto.xyz/API_docs/methods/auth.signUp.html
	 *
	 */
	public function signUp( $phone_number, $phone_code_hash, $first_name, $last_name ) {
	}
}