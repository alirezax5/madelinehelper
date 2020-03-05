<?php

namespace danog\MadelineProto;

use doc\{messages,
	account,
	channel,
	contacts,
	folders,
	help,
	langpack,
	payments,
	phone,
	photos,
	stickers,
	updates as UpdatesAlias,
	upload,
	users,
	auth,
	bots,
};
use types\{long, x, InputClientProxy, MessageRange, auth_SentCode};

class API {
	/**
	 * @var messages $messages
	 */
	public $messages;
	/**
	 * @var account $account
	 */
	public $account;

	/**
	 * @var channel $channel
	 */
	public $channel;

	/**
	 * @var contacts $contacts
	 */
	public $contacts;

	/**
	 * @var folders $folders
	 */
	public $folders;

	/**
	 * @var help $help
	 */
	public $help;

	/**
	 * @var langpack $langpack
	 */
	public $langpack;

	/**
	 * @var payments $payments
	 */
	public $payments;

	/**
	 * @var phone $phone
	 */
	public $phone;


	/**
	 * @var photos $photos
	 */
	public $photos;

	/**
	 * @var stickers $stickers
	 */
	public $stickers;

	/**
	 * @var UpdatesAlias $updates
	 */
	public $updates;

	/**
	 * @var upload $upload
	 */
	public $upload;

	/**
	 * @var auth $auth
	 */
	public $auth;


	/**
	 * @var users $users
	 */
	public $users;

	public function start() {
	}

	public function get_updates( $offset, $limit, $timeout ) {

	}


	public function get_info( $update ) {

	}

	/**
	 * @param int $api_id
	 * @param string $device_model
	 * @param string $system_version
	 * @param string $app_version
	 * @param string $system_lang_code
	 * @param string $lang_pack
	 * @param string $lang_code
	 * @param InputClientProxy|null $proxy
	 * @param x $query !x
	 *
	 * @return x
	 * @link https://docs.madelineproto.xyz/API_docs/methods/initConnection.html
	 *
	 */
	public function initConnection( $api_id, $device_model, $system_version, $app_version, $system_lang_code, $lang_pack, $lang_code, $proxy, $query ) {
	}

	/**
	 * @param long $msg_id
	 * @param x $query !x
	 *
	 * @return x
	 * @link https://docs.madelineproto.xyz/API_docs/methods/invokeAfterMsg.html
	 *
	 */
	public function invokeAfterMsg( $msg_id, $query ) {
	}

	/**
	 * @param long $msg_id
	 * @param x $query !x
	 *
	 * @return x
	 * @link https://docs.madelineproto.xyz/API_docs/methods/invokeAfterMsgs.html
	 *
	 */
	public function invokeAfterMsgs( $msg_id, $query ) {
	}

	/**
	 * @param int $layer
	 * @param x $query !x
	 *
	 * @return x
	 * @link https://docs.madelineproto.xyz/API_docs/methods/invokeWithLayer.html
	 *
	 */
	public function invokeWithLayer( $layer, $query ) {
	}

	/**
	 * @param MessageRange $range
	 * @param x $query !x
	 *
	 * @return x
	 * @link https://docs.madelineproto.xyz/API_docs/methods/invokeWithMessagesRange.html
	 *
	 */
	public function invokeWithMessagesRange( $range, $query ) {
	}


	/**
	 * @param long $takeout_id
	 * @param x $query !x
	 *
	 * @return x
	 * @link https://docs.madelineproto.xyz/API_docs/methods/invokeWithTakeout.html
	 *
	 */
	public function invokeWithTakeout( $takeout_id, $query ) {
	}

	/**
	 * @param x $query !x
	 *
	 * @return x
	 * @link https://docs.madelineproto.xyz/API_docs/methods/invokeWithoutUpdates.html
	 *
	 */
	public function invokeWithoutUpdates( $query ) {
	}

	/**
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/logout.html
	 *
	 */
	public function logout() {
	}

	/**
	 * @param string $number
	 *
	 * @return auth_SentCode
	 * @link https://docs.madelineproto.xyz/API_docs/methods/phoneLogin.html
	 *
	 */
	public function phoneLogin( $number ) {
	}

	/**
	 *
	 * @link https://docs.madelineproto.xyz/API_docs/methods/completePhoneLogin.html
	 *
	 */
	public function completePhoneLogin( $code ) {
	}

	/**
	 *
	 * @link https://docs.madelineproto.xyz/API_docs/methods/complete2FALogin.html
	 *
	 */
	public function complete2FALogin( $password ) {
	}

	/**
	 *
	 * @link https://docs.madelineproto.xyz/API_docs/methods/botLogin.html
	 *
	 */
	public function botLogin( $password ) {
	}

	/**
	 *
	 * @link https://docs.madelineproto.xyz/API_docs/methods/getDialogs.html
	 *
	 */
	public function getDialogs() {
	}

	/**
	 *
	 * @link https://docs.madelineproto.xyz/API_docs/methods/getPwrChat.html
	 *
	 */
	public function getPwrChat( $id ) {
	}

	/**
	 *
	 * @link https://docs.madelineproto.xyz/API_docs/methods/getInfo.html
	 *
	 */
	public function getInfo( $id ) {
	}

	/**
	 *
	 * @link https://docs.madelineproto.xyz/API_docs/methods/getFullInfo.html
	 *
	 */
	public function getFullInfo( $id ) {
	}

	/**
	 *
	 * @link https://docs.madelineproto.xyz/API_docs/methods/getSelf.html
	 *
	 */
	public function getSelf() {
	}

	/**
	 *
	 * @link https://docs.madelineproto.xyz/API_docs/methods/requestCall.html
	 *
	 */
	public function requestCall( $id ) {
	}

	/**
	 *
	 * @link https://docs.madelineproto.xyz/API_docs/methods/requestSecretChat.html
	 *
	 */
	public function requestSecretChat( $id ) {
	}

}

?>
