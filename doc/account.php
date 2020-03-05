<?php

namespace doc;

use types\{auth_SentCode,
	bytes,
	Document,
	InputDocument,
	InputPeer,
	long,
	ReportReason,
	SecureValueHash,
	SecureCredentialsEncrypted,
	Updates,
	User,
	Theme,
	SecureValueType,
	AccountDaysTTL,
	SecureValue,
	account_AuthorizationForm,
	account_Authorizations,
	account_AutoDownloadSettings,
	InputNotifyPeer,
	PeerNotifySettings,
	account_Password,
	InputCheckPasswordSRP,
	account_PasswordSettings,
	InputPrivacyKey,
	account_PrivacyRules,
	InputTheme,
	account_Themes,
	account_TmpPassword,
	InputWallPaper,
	WallPaper,
	account_WallPapers,
	account_WebAuthorizations,
	WallPaperSettings,
	AutoDownloadSettings,
	InputSecureValue,
	CodeSettings,
	account_SentEmailCode,
	InputPrivacyRule,
	InputPeerNotifySettings,
	account_PasswordInputSettings,
	InputFile
};

class account {

	/**
	 * @param int $bot_id
	 * @param string $scope
	 * @param string $public_key
	 * @param SecureValueHash $value_hashes
	 * @param SecureCredentialsEncrypted $credentials
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.acceptAuthorization.html
	 *
	 */
	public function acceptAuthorization( $bot_id, $scope, $public_key, $value_hashes, $credentials ) {
	}

	/**
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.cancelPasswordEmail.html
	 *
	 */
	public function cancelPasswordEmail() {
	}

	/**
	 * @param string $phone_number
	 * @param string $phone_code_hash
	 * @param string $phone_code
	 *
	 * @return User
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.changePhone.html
	 *
	 */
	public function changePhone( $phone_number, $phone_code_hash, $phone_code ) {
	}

	/**
	 * @param string $username
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.checkUsername.html
	 *
	 */
	public function checkUsername( $username ) {
	}

	/**
	 * @param string $code
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.confirmPasswordEmail.html
	 *
	 */
	public function confirmPasswordEmail( $code ) {
	}

	/**
	 * @param string $phone_code_hash
	 * @param string $phone_code
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.confirmPhone.html
	 *
	 */
	public function confirmPhone( $phone_code_hash, $phone_code ) {
	}

	/**
	 * @param string $slug
	 * @param string $title
	 * @param InputDocument $document
	 *
	 * @return Theme
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.createTheme.html
	 *
	 */
	public function createTheme( $slug, $title, $document ) {
	}

	/**
	 * @param string $reason
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.deleteAccount.html
	 *
	 */
	public function deleteAccount( $reason ) {
	}

	/**
	 * @param string $types
	 *
	 * @return SecureValueType
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.deleteSecureValue.html
	 *
	 */
	public function deleteSecureValue( $types ) {
	}

	/**
	 * @param bool $success
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.finishTakeoutSession.html
	 *
	 */
	public function finishTakeoutSession( $success ) {
	}

	/**
	 *
	 * @return AccountDaysTTL
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.getAccountTTL.html
	 *
	 */
	public function getAccountTTL() {
	}

	/**
	 *
	 * @return SecureValue
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.getAllSecureValues.html
	 *
	 */
	public function getAllSecureValues() {
	}

	/**
	 * @param int $bot_id
	 * @param string $scope
	 * @param string $public_key
	 *
	 * @return account_AuthorizationForm
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.getAuthorizationForm.html
	 *
	 */
	public function getAuthorizationForm( $bot_id, $scope, $public_key ) {
	}

	/**
	 *
	 * @return account_Authorizations
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.getAuthorizations.html
	 *
	 */
	public function getAuthorizations() {
	}

	/**
	 *
	 * @return account_AutoDownloadSettings
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.getAutoDownloadSettings.html
	 *
	 */
	public function getAutoDownloadSettings() {
	}

	/**
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.getContactSignUpNotification.html
	 *
	 */
	public function getContactSignUpNotification() {
	}

	/**
	 * @param bool $compare_sound
	 * @param InputNotifyPeer $peer
	 *
	 * @return Updates
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.getNotifyExceptions.html
	 *
	 */
	public function getNotifyExceptions( $compare_sound, $peer ) {
	}

	/**
	 * @param InputNotifyPeer $peer
	 *
	 * @return PeerNotifySettings
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.getNotifySettings.html
	 *
	 */
	public function getNotifySettings( $peer ) {
	}

	/**
	 *
	 * @return account_Password
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.getPassword.html
	 *
	 */
	public function getPassword() {
	}

	/**
	 * @param InputCheckPasswordSRP $password
	 *
	 * @return account_PasswordSettings
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.getPasswordSettings.html
	 *
	 */
	public function getPasswordSettings( $password ) {
	}

	/**
	 * @param InputPrivacyKey $key
	 *
	 * @return account_PrivacyRules
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.getPrivacy.html
	 *
	 */
	public function getPrivacy( $key ) {
	}

	/**
	 * @param SecureValueType $types
	 *
	 * @return SecureValue
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.getSecureValue.html
	 *
	 */
	public function getSecureValue( $types ) {
	}

	/**
	 * @param string $format
	 * @param InputTheme $theme
	 * @param long $document_id
	 *
	 * @return Theme
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.getTheme.html
	 *
	 */
	public function getTheme( $format, $theme, $document_id ) {
	}

	/**
	 * @param string $format
	 * @param int $hash
	 *
	 * @return account_Themes
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.getThemes.html
	 *
	 */
	public function getThemes( $format, $hash ) {
	}

	/**
	 * @param InputCheckPasswordSRP $password
	 * @param int $period
	 *
	 * @return account_TmpPassword
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.getTmpPassword.html
	 *
	 */
	public function getTmpPassword( $password, $period ) {
	}

	/**
	 * @param InputWallPaper $wallpaper
	 *
	 * @return WallPaper
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.getWallPaper.html
	 *
	 */
	public function getWallPaper( $wallpaper ) {
	}

	/**
	 * @param int $hash
	 *
	 * @return account_WallPapers
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.getWallPaper.html
	 *
	 */
	public function getWallPapers( $hash ) {
	}

	/**
	 *
	 * @return account_WebAuthorizations
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.getWebAuthorizations.html
	 *
	 */
	public function getWebAuthorizations() {
	}

	/**
	 * @param bool $contacts
	 * @param bool $message_users
	 * @param bool $message_chats
	 * @param bool $message_megagroups
	 * @param bool $message_channels
	 * @param int $files
	 *
	 * @return account_WebAuthorizations
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.initTakeoutSession.html
	 *
	 */
	public function initTakeoutSession( $contacts, $message_users, $message_chats, $message_megagroups, $message_channels, $files, $file_max_size ) {
	}

	/**
	 * @param bool $dark
	 * @param string $format
	 * @param InputTheme $theme
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.installTheme.html
	 *
	 */
	public function installTheme( $dark, $format, $theme ) {
	}

	/**
	 * @param InputWallPaper $wallpaper
	 * @param WallPaperSettings $settings
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.installWallPaper.html
	 *
	 */
	public function installWallPaper( $wallpaper, $settings ) {
	}

	/**
	 * @param bool $no_muted
	 * @param int $token_type
	 * @param string $token
	 * @param bool $app_sandbox
	 * @param bytes $secret
	 * @param int $other_uids
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.registerDevice.html
	 *
	 */
	public function registerDevice( $no_muted, $token_type, $token, $app_sandbox, $secret, $other_uids ) {
	}

	/**
	 * @param InputPeer $peer
	 * @param ReportReason $reason
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.reportPeer.html
	 *
	 */
	public function reportPeer( $peer, $reason ) {
	}

	/**
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.resendPasswordEmail.html
	 *
	 */
	public function resendPasswordEmail() {
	}

	/**
	 * @param long $hash
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.resetAuthorization.html
	 *
	 */
	public function resetAuthorization( $hash ) {
	}

	/**
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.resetNotifySettings.html
	 *
	 */
	public function resetNotifySettings() {
	}

	/**
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.resetWallPapers.html
	 *
	 */
	public function resetWallPapers() {
	}

	/**
	 * @param long $hash
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.resetWebAuthorization.html
	 *
	 */
	public function resetWebAuthorization( $hash ) {
	}

	/**
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.resetWebAuthorizations.html
	 *
	 */
	public function resetWebAuthorizations() {
	}

	/**
	 * @param bool $low
	 * @param bool $high
	 * @param AutoDownloadSettings $settings
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.saveAutoDownloadSettings.html
	 *
	 */
	public function saveAutoDownloadSettings( $low, $high, $settings ) {
	}

	/**
	 * @param InputSecureValue $value
	 * @param long $secure_secret_id
	 *
	 * @return SecureValue
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.saveSecureValue.html
	 *
	 */
	public function saveSecureValue( $value, $secure_secret_id ) {
	}

	/**
	 * @param InputTheme $theme
	 * @param bool $unsave
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.saveTheme.html
	 *
	 */
	public function saveTheme( $theme, $unsave ) {
	}

	/**
	 * @param InputWallPaper $wallpaper
	 * @param bool $unsave
	 * @param WallPaperSettings $settings
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.saveWallPaper.html
	 *
	 */
	public function saveWallPaper( $wallpaper, $unsave, $settings ) {
	}

	/**
	 * @param string $phone_number
	 * @param CodeSettings $settings
	 *
	 * @return auth_SentCode
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.sendChangePhoneCode.html
	 *
	 */
	public function sendChangePhoneCode( $phone_number, $settings ) {
	}

	/**
	 * @param string $hash
	 * @param CodeSettings $settings
	 *
	 * @return auth_SentCode
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.sendConfirmPhoneCode.html
	 *
	 */
	public function sendConfirmPhoneCode( $hash, $settings ) {
	}

	/**
	 * @param string $email
	 *
	 * @return account_SentEmailCode
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.sendVerifyEmailCode.html
	 *
	 */
	public function sendVerifyEmailCode( $email ) {
	}

	/**
	 * @param string $phone_number
	 * @param CodeSettings $settings
	 *
	 * @return auth_SentCode
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.sendVerifyPhoneCode.html
	 *
	 */
	public function sendVerifyPhoneCode( $phone_number, $settings ) {
	}

	/**
	 * @param AccountDaysTTL $phone_number
	 *
	 * @return Bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.setAccountTTL.html
	 *
	 */
	public function setAccountTTL( $ttl ) {
	}

	/**
	 * @param AccountDaysTTL $phone_number
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.setContactSignUpNotification.html
	 *
	 */
	public function setContactSignUpNotification( $silent ) {
	}

	/**
	 * @param InputPrivacyKey $key
	 * @param InputPrivacyRule $rules
	 *
	 * @return account_PrivacyRules
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.setPrivacy.html
	 *
	 */
	public function setPrivacy( $key, $rules ) {
	}

	/**
	 * @param int $token_type
	 * @param string $token
	 * @param int $other_uids
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.unregisterDevice.html
	 *
	 */
	public function unregisterDevice( $token_type, $token, $other_uids ) {
	}

	/**
	 * @param int $period
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.updateDeviceLocked.html
	 *
	 */
	public function updateDeviceLocked( $period ) {
	}

	/**
	 * @param InputNotifyPeer $peer
	 * @param InputPeerNotifySettings $settings
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.updateNotifySettings.html
	 *
	 */
	public function updateNotifySettings( $peer, $settings ) {
	}

	/**
	 * @param InputCheckPasswordSRP $password
	 * @param account_PasswordInputSettings $new_settings
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.updatePasswordSettings.html
	 *
	 */
	public function updatePasswordSettings( $password, $new_settings ) {
	}

	/**
	 * @param string $first_name
	 * @param string $last_name
	 * @param string $about
	 *
	 * @return User
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.updateProfile.html
	 *
	 */
	public function updateProfile( $first_name, $last_name, $about ) {
	}

	/**
	 * @param bool $offline
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.updateStatus.html
	 *
	 */
	public function updateStatus( $offline ) {
	}

	/**
	 * @param string $format
	 * @param InputTheme $theme
	 * @param string $slug
	 * @param string $title
	 * @param InputDocument $document
	 *
	 * @return Theme
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.updateTheme.html
	 *
	 */
	public function updateTheme( $format, $theme, $slug, $title, $document ) {
	}

	/**
	 * @param string $username
	 *
	 * @return User
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.updateUsername.html
	 *
	 */
	public function updateUsername( $username ) {
	}

	/**
	 * @param InputFile $file
	 * @param InputFile $thumb
	 * @param string $file_name
	 * @param string $mime_type
	 *
	 * @return Document
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.uploadTheme.html
	 *
	 */
	public function uploadTheme( $file, $thumb, $file_name, $mime_type ) {
	}

	/**
	 * @param InputFile $file
	 * @param WallPaperSettings $settings
	 * @param string $mime_type
	 *
	 * @return WallPaper
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.uploadWallPaper.html
	 *
	 */
	public function uploadWallPaper( $file, $mime_type, $settings ) {
	}

	/**
	 * @param string $email
	 * @param string $code
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.verifyEmail.html
	 *
	 */
	public function verifyEmail( $email, $code ) {
	}

	/**
	 * @param string $phone_number
	 * @param string $phone_code_hash
	 * @param string $phone_code
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/account.verifyPhone.html
	 *
	 */
	public function verifyPhone( $phone_number, $phone_code_hash, $phone_code ) {
	}
}