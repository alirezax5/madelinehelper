<?php


namespace doc;


use types\{DataJSON, long};

class bots {

	/**
	 * @param long $query_id
	 * @param DataJSON $data
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/bots.answerWebhookJSONQuery.html
	 *
	 */
	public function answerWebhookJSONQuery( $query_id, $data ) {
	}

	/**
	 * @param string $custom_method
	 * @param DataJSON $params
	 *
	 * @return DataJSON
	 * @link https://docs.madelineproto.xyz/API_docs/methods/bots.answerWebhookJSONQuery.html
	 *
	 */
	public function sendCustomRequest( $custom_method, $params ) {
	}
}