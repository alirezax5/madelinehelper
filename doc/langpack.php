<?php


namespace doc;


use types\LangPackDifference;
use types\LangPackLanguage;
use types\LangPackString;

class langpack {

	/**
	 * @param string $lang_pack
	 * @param string $lang_code
	 * @param int $from_version
	 *
	 * @return LangPackDifference
	 * @link https://docs.madelineproto.xyz/API_docs/methods/langpack.getDifference.html
	 *
	 */
	public function getDifference( $lang_pack, $lang_code, $from_version ) {
	}

	/**
	 * @param string $lang_pack
	 * @param string $lang_code
	 *
	 * @return LangPackDifference
	 * @link https://docs.madelineproto.xyz/API_docs/methods/langpack.getLangPack.html
	 *
	 */
	public function getLangPack( $lang_pack, $lang_code ) {
	}

	/**
	 * @param string $lang_pack
	 * @param string $lang_code
	 *
	 * @return LangPackLanguage
	 * @link https://docs.madelineproto.xyz/API_docs/methods/langpack.getLanguage.html
	 *
	 */
	public function getLanguage( $lang_pack, $lang_code ) {
	}

	/**
	 * @param string $lang_pack
	 *
	 * @return LangPackLanguage
	 * @link https://docs.madelineproto.xyz/API_docs/methods/langpack.getLanguages.html
	 *
	 */
	public function getLanguages( $lang_pack ) {
	}

	/**
	 * @param string $lang_pack
	 * @param string $lang_code
	 * @param string $keys
	 *
	 * @return LangPackString
	 * @link https://docs.madelineproto.xyz/API_docs/methods/langpack.getStrings.html
	 *
	 */
	public function getStrings( $lang_pack, $lang_code, $keys ) {
	}
}