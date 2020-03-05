<?php


namespace doc;


use types\InputUser;
use types\DataJSON;
use types\MessageEntity;
use types\help_UserInfo;
use types\Updates;
use types\JSONValue;
use types\help_AppUpdate;
use types\CdnConfig;
use types\Config;
use types\help_DeepLinkInfo;
use types\help_InviteText;
use types\NearestDc;
use types\help_PassportConfig;
use types\help_ProxyData;
use types\help_RecentMeUrls;
use types\help_Support;
use types\help_SupportName;
use types\help_TermsOfServiceUpdate;
use types\InputAppEvent;

class help {

	/**
	 * @param DataJSON $id
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/help.acceptTermsOfService.html
	 *
	 */
	public function acceptTermsOfService( $id ) {
	}

	/**
	 * @param InputUser $user_id
	 * @param string $message
	 * @param string|null $parse_mode
	 * @param MessageEntity $entities
	 *
	 * @return help_UserInfo
	 * @link https://docs.madelineproto.xyz/API_docs/methods/help.editUserInfo.html
	 *
	 */
	public function editUserInfo( $user_id, $message, $entities, $parse_mode ) {
	}

	/**
	 * @param string $prev_app_version
	 *
	 * @return Updates
	 * @link https://docs.madelineproto.xyz/API_docs/methods/help.getAppChangelog.html
	 *
	 */
	public function getAppChangelog( $prev_app_version ) {
	}

	/**
	 *
	 * @return JSONValue
	 * @link https://docs.madelineproto.xyz/API_docs/methods/help.getAppConfig.html
	 *
	 */
	public function getAppConfig() {
	}

	/**
	 * @param string $source
	 *
	 * @return help_AppUpdate
	 * @link https://docs.madelineproto.xyz/API_docs/methods/help.getAppUpdate.html
	 *
	 */
	public function getAppUpdate( $source ) {
	}

	/**
	 *
	 * @return CdnConfig
	 * @link https://docs.madelineproto.xyz/API_docs/methods/help.getCdnConfig.html
	 *
	 */
	public function getCdnConfig() {
	}

	/**
	 *
	 * @return Config
	 * @link https://docs.madelineproto.xyz/API_docs/methods/help.getConfig.html
	 *
	 */
	public function getConfig() {
	}

	/**
	 * @param string $path
	 *
	 * @return help_DeepLinkInfo
	 * @link https://docs.madelineproto.xyz/API_docs/methods/help.getDeepLinkInfo.html
	 *
	 */
	public function getDeepLinkInfo( $path ) {
	}

	/**
	 *
	 * @return help_InviteText
	 * @link https://docs.madelineproto.xyz/API_docs/methods/help.getInviteText.html
	 *
	 */
	public function getInviteText() {
	}

	/**
	 *
	 * @return NearestDc
	 * @link https://docs.madelineproto.xyz/API_docs/methods/help.getNearestDc.html
	 *
	 */
	public function getNearestDc() {
	}

	/**
	 * @param int $hash
	 *
	 * @return help_PassportConfig
	 * @link https://docs.madelineproto.xyz/API_docs/methods/help.getPassportConfig.html
	 *
	 */
	public function getPassportConfig( $hash ) {
	}

	/**
	 *
	 * @return help_ProxyData
	 * @link https://docs.madelineproto.xyz/API_docs/methods/help.getProxyData.html
	 *
	 */
	public function getProxyData() {
	}

	/**
	 * @param string $referer
	 *
	 * @return help_RecentMeUrls
	 * @link https://docs.madelineproto.xyz/API_docs/methods/help.getRecentMeUrls.html
	 *
	 */
	public function getRecentMeUrls( $referer ) {
	}

	/**
	 *
	 * @return help_Support
	 * @link https://docs.madelineproto.xyz/API_docs/methods/help.getSupport.html
	 *
	 */
	public function getSupport() {
	}

	/**
	 *
	 * @return help_SupportName
	 * @link https://docs.madelineproto.xyz/API_docs/methods/help.getSupportName.html
	 *
	 */
	public function getSupportName() {
	}

	/**
	 *
	 * @return help_TermsOfServiceUpdate
	 * @link https://docs.madelineproto.xyz/API_docs/methods/help.getTermsOfServiceUpdate.html
	 *
	 */
	public function getTermsOfServiceUpdate() {
	}

	/**
	 * @param InputUser $user_id
	 *
	 * @return help_UserInfo
	 * @link https://docs.madelineproto.xyz/API_docs/methods/help.getUserInfo.html
	 *
	 */
	public function getUserInfo( $user_id ) {
	}

	/**
	 * @param InputAppEvent $events
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/help.saveAppLog.html
	 *
	 */
	public function saveAppLog( $events ) {
	}

	/**
	 * @param int $pending_updates_count
	 * @param string $message
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/help.setBotUpdatesStatus.html
	 *
	 */
	public function setBotUpdatesStatus( $pending_updates_count, $message ) {
	}
}