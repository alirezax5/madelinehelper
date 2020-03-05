<?php


namespace doc;


use types\{bytes,
	DataJSON,
	InputPhoneCall,
	InputUser,
	long,
	PhoneCallProtocol,
	phone_PhoneCall,
	PhoneCallDiscardReason,
	Updates
};

class phone {

	/**
	 * @param InputPhoneCall $peer
	 * @param bytes $g_b
	 * @param PhoneCallProtocol $protocol
	 *
	 * @return phone_PhoneCall
	 * @link https://docs.madelineproto.xyz/API_docs/methods/phone.acceptCall.html
	 *
	 */
	public function acceptCall( $peer, $g_b, $protocol ) {
	}

	/**
	 * @param InputPhoneCall $peer
	 * @param bytes $g_b
	 * @param PhoneCallProtocol $protocol
	 * @param long $key_fingerprint
	 *
	 * @return phone_PhoneCall
	 * @link https://docs.madelineproto.xyz/API_docs/methods/phone.confirmCall.html
	 *
	 */
	public function confirmCall( $peer, $g_b, $key_fingerprint, $protocol ) {
	}

	/**
	 * @param InputPhoneCall $peer
	 * @param bool $video
	 * @param int $duration
	 * @param PhoneCallDiscardReason $reason
	 * @param long $connection_id
	 *
	 * @return Updates
	 * @link https://docs.madelineproto.xyz/API_docs/methods/discardCall.discardCall.html
	 *
	 */
	public function discardCall( $video, $peer, $duration, $reason, $connection_id ) {
	}

	/**
	 *
	 * @return DataJSON
	 * @link https://docs.madelineproto.xyz/API_docs/methods/discardCall.getCallConfig.html
	 *
	 */
	public function getCallConfig() {
	}

	/**
	 * @param InputPhoneCall $peer
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/discardCall.receivedCall.html
	 *
	 */
	public function receivedCall( $peer ) {
	}

	/**
	 * @param bool $video
	 * @param InputUser $user_id
	 * @param PhoneCallProtocol $protocol
	 * @param bytes $g_a_hash
	 *
	 * @return phone_PhoneCall
	 * @link https://docs.madelineproto.xyz/API_docs/methods/phone.requestCall.html
	 *
	 */
	public function requestCall( $video, $user_id, $g_a_hash, $protocol ) {
	}

	/**
	 * @param InputPhoneCall $peer
	 * @param DataJSON $debug
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/phone.saveCallDebug.html
	 *
	 */
	public function saveCallDebug( $peer, $debug ) {
	}

	/**
	 * @param bool $user_initiative
	 * @param InputPhoneCall $peer
	 * @param int $rating
	 * @param string $comment
	 *
	 * @return Updates
	 * @link https://docs.madelineproto.xyz/API_docs/methods/phone.setCallRating.html
	 *
	 */
	public function setCallRating( $user_initiative, $peer, $rating, $comment ) {
	}

}