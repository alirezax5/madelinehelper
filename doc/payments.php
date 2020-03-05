<?php


namespace doc;

use types\{payments_PaymentForm,
	payments_PaymentReceipt,
	payments_SavedInfo,
	InputPaymentCredentials,
	payments_PaymentResult,
	PaymentRequestedInfo,
	payments_ValidatedRequestedInfo};

class payments {

	/**
	 * @param bool $credentials
	 * @param bool $info
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/payments.clearSavedInfo.html
	 *
	 */
	public function clearSavedInfo( $credentials, $info ) {
	}

	/**
	 * @param int $msg_id
	 *
	 * @return payments_PaymentForm
	 * @link https://docs.madelineproto.xyz/API_docs/methods/payments.getPaymentForm.html
	 *
	 */
	public function getPaymentForm( $msg_id ) {
	}

	/**
	 * @param int $msg_id
	 *
	 * @return payments_PaymentReceipt
	 * @link https://docs.madelineproto.xyz/API_docs/methods/payments.getPaymentReceipt.html
	 *
	 */
	public function getPaymentReceipt( $msg_id ) {
	}

	/**
	 *
	 * @return payments_SavedInfo
	 * @link https://docs.madelineproto.xyz/API_docs/methods/payments.getSavedInfo.html
	 *
	 */
	public function getSavedInfo() {
	}

	/**
	 * @param int $msg_id
	 * @param string $requested_info_id
	 * @param string $shipping_option_id
	 * @param InputPaymentCredentials $credentials
	 *
	 * @return payments_PaymentResult
	 * @link https://docs.madelineproto.xyz/API_docs/methods/payments.sendPaymentForm.html
	 *
	 */
	public function sendPaymentForm( $msg_id, $requested_info_id, $shipping_option_id, $credentials ) {
	}

	/**
	 * @param bool $save
	 * @param int $msg_id
	 * @param PaymentRequestedInfo $info
	 *
	 * @return payments_ValidatedRequestedInfo
	 * @link https://docs.madelineproto.xyz/API_docs/methods/payments.validateRequestedInfo.html
	 *
	 */
	public function validateRequestedInfo( $save, $msg_id, $info ) {
	}
}