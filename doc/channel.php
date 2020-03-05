<?php

namespace doc;

use types\InputGeoPoint;
use types\InputChannel;
use types\InputUser;
use types\ChatAdminRights;
use types\ChatBannedRights;
use types\InputCheckPasswordSRP;
use types\InputChatPhoto;
use types\ChannelAdminLogEventsFilter;
use types\long;
use types\messages_ChatFull;
use types\messages_Chats;
use types\InputMessage;
use types\messages_Messages;
use types\channels_ChannelParticipant;
use types\ChannelParticipantsFilter;
use types\channels_ChannelParticipants;
use types\Updates;
use types\InputStickerSet;

class channel {
	/**
	 * @param InputChannel|null $channel
	 * @param string $username
	 *
	 * @link https://docs.madelineproto.xyz/API_docs/methods/channels.checkUsername.html
	 */
	public function checkUsername( $channel, string $username ) {
	}

	/**
	 * @param bool|null $broadcast
	 * @param bool|null $megagroup
	 * @param string $title
	 * @param string $about
	 * @param InputGeoPoint|null $geo_point
	 * @param string|null $address
	 *
	 * @link https://docs.madelineproto.xyz/API_docs/methods/channels.createChannel.html
	 */
	public function createChannel( $broadcast, $megagroup, $title, $about, $geo_point, $address ) {

	}

	/**
	 * @param InputChannel|null $channel
	 *
	 * @link https://docs.madelineproto.xyz/API_docs/methods/channels.deleteChannel.html
	 */
	public function deleteChannel( $channel ) {
	}

	/**
	 * @param InputChannel|null $channel
	 * @param int $max_id
	 *
	 * @link https://docs.madelineproto.xyz/API_docs/methods/channels.deleteHistory.html
	 */
	public function deleteHistory( $channel, $max_id ) {
	}

	/**
	 * @param InputChannel|null $channel
	 * @param array $id
	 *
	 * @link https://docs.madelineproto.xyz/API_docs/methods/channels.deleteMessages.html
	 */
	public function deleteMessages( $channel, $id ) {
	}

	/**
	 * @param InputChannel|null $channel
	 * @param InputUser|null $user_id
	 *
	 * @link https://docs.madelineproto.xyz/API_docs/methods/channels.deleteUserHistory.html
	 */
	public function deleteUserHistory( $channel, $user_id ) {
	}

	/**
	 * @param InputChannel|null $channel
	 * @param InputUser|null $user_id
	 * @param ChatAdminRights $admin_rights
	 * @param string $rank
	 *
	 * @link https://docs.madelineproto.xyz/API_docs/methods/channels.editAdmin.html
	 */
	public function editAdmin( $channel, $user_id, $admin_rights, $rank ) {
	}

	/**
	 * @param InputChannel|null $channel
	 * @param InputUser|null $user_id
	 * @param ChatBannedRights $banned_rights
	 *
	 * @link https://docs.madelineproto.xyz/API_docs/methods/channels.editBanned.html
	 */
	public function editBanned( $channel, $user_id, $banned_rights ) {
	}

	/**
	 * @param InputChannel|null $channel
	 * @param InputUser|null $user_id
	 * @param InputCheckPasswordSRP $password
	 *
	 * @link https://docs.madelineproto.xyz/API_docs/methods/channels.editCreator.html
	 */
	public function editCreator( $channel, $user_id, $password ) {
	}

	/**
	 * @param InputChannel|null $channel
	 * @param InputGeoPoint|null $user_id
	 * @param string $address
	 *
	 * @link https://docs.madelineproto.xyz/API_docs/methods/channels.editLocation.html
	 */
	public function editLocation( $channel, $geo_point, $address ) {
	}

	/**
	 * @param InputChannel|null $channel
	 * @param InputChatPhoto|null $photo
	 *
	 * @link https://docs.madelineproto.xyz/API_docs/methods/channels.editPhoto.html
	 */
	public function editPhoto( $channel, $photo ) {
	}

	/**
	 * @param InputChannel|null $channel
	 * @param string $title
	 *
	 * @link https://docs.madelineproto.xyz/API_docs/methods/channels.editTitle.html
	 */
	public function editTitle( $channel, $title ) {
	}

	/**
	 * @param InputChannel|null $channel
	 * @param int $id
	 * @param bool $grouped
	 *
	 * @link https://docs.madelineproto.xyz/API_docs/methods/channels.exportMessageLink.html
	 */
	public function exportMessageLink( $channel, $id, $grouped ) {
	}

	/**
	 * @param InputChannel|null $channel
	 * @param string $q
	 * @param ChannelAdminLogEventsFilter|null $events_filter
	 * @param InputUser|null $admins
	 * @param long $max_id
	 * @param long $min_id
	 * @param int $limit
	 *
	 * @link https://docs.madelineproto.xyz/API_docs/methods/channels.getAdminLog.html
	 */
	public function getAdminLog( $channel, $q, $events_filter, $admins, $max_id, $min_id, $limit ) {
	}

	/**
	 * @param bool $by_location
	 * @param bool $check_limit
	 *
	 * @link https://docs.madelineproto.xyz/API_docs/methods/channels.getAdminedPublicChannels.html
	 */
	public function getAdminedPublicChannels( $by_location, $check_limit ) {
	}

	/**
	 * @param InputChannel|array $id
	 *
	 * @link https://docs.madelineproto.xyz/API_docs/methods/channels.getChannels.html
	 */
	public function getChannels( $id ) {
	}

	/**
	 * @param InputChannel $channel
	 *
	 * @return messages_ChatFull
	 * @link https://docs.madelineproto.xyz/API_docs/methods/channels.getFullChannel.html
	 *
	 */
	public function getFullChannel( $channel ) {
	}

	/**
	 *
	 * @return messages_Chats
	 * @link https://docs.madelineproto.xyz/API_docs/methods/channels.getGroupsForDiscussion.html
	 *
	 */
	public function getGroupsForDiscussion() {
	}

	/**
	 * @param int $offset
	 *
	 * @return messages_Chats
	 * @link https://docs.madelineproto.xyz/API_docs/methods/channels.getLeftChannels.html
	 *
	 */
	public function getLeftChannels( $offset ) {
	}

	/**
	 * @param InputChannel|null $channel
	 * @param InputMessage $id
	 *
	 * @return messages_Messages
	 * @link https://docs.madelineproto.xyz/API_docs/methods/channels.getMessages.html
	 *
	 */
	public function getMessages( $channel, $id ) {
	}


	/**
	 * @param InputChannel|null $channel
	 * @param InputUser|null $user_id
	 *
	 * @return channels_ChannelParticipant
	 * @link https://docs.madelineproto.xyz/API_docs/methods/channels.getParticipant.html
	 *
	 */
	public function getParticipant( $channel, $user_id ) {
	}


	/**
	 * @param InputChannel|null $channel
	 * @param ChannelParticipantsFilter $filter
	 * @param int $offset
	 * @param int $limit
	 * @param array|null $hash
	 *
	 * @return channels_ChannelParticipants
	 * @link https://docs.madelineproto.xyz/API_docs/methods/channels.getParticipants.html
	 *
	 */
	public function getParticipants( $channel, $filter, $offset, $limit, $hash ) {
	}

	/**
	 * @param InputChannel|null $channel
	 * @param InputUser $users
	 *
	 * @return Updates
	 * @link https://docs.madelineproto.xyz/API_docs/methods/channels.inviteToChannel.html
	 *
	 */
	public function inviteToChannel( $channel, $users ) {
	}

	/**
	 * @param InputChannel|null $channel
	 *
	 * @return Updates
	 * @link https://docs.madelineproto.xyz/API_docs/methods/channels.joinChannel.html
	 *
	 */
	public function joinChannel( $channel ) {
	}

	/**
	 * @param InputChannel|null $channel
	 *
	 * @return Updates
	 * @link https://docs.madelineproto.xyz/API_docs/methods/channels.leaveChannel.html
	 *
	 */
	public function leaveChannel( $channel ) {
	}

	/**
	 * @param InputChannel|null $channel
	 * @param int $max_id
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/channels.readHistory.html
	 *
	 */
	public function readHistory( $channel, $max_id ) {
	}

	/**
	 * @param InputChannel|null $channel
	 * @param array $id
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/channels.readMessageContents.html
	 *
	 */
	public function readMessageContents( $channel, $id ) {
	}

	/**
	 * @param InputChannel|null $channel
	 * @param InputUser $user_id
	 * @param array $id
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/channels.reportSpam.html
	 *
	 */
	public function reportSpam( $channel, $user_id, $id ) {
	}

	/**
	 * @param InputChannel $broadcast
	 * @param InputChannel $group
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/channels.setDiscussionGroup.html
	 *
	 */
	public function setDiscussionGroup( $broadcast, $group ) {
	}

	/**
	 * @param InputChannel|null $channel
	 * @param InputStickerSet $stickerset
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/channels.setStickers.html
	 *
	 */
	public function setStickers( $channel, $stickerset ) {
	}

	/**
	 * @param InputChannel|null $channel
	 * @param bool $enabled
	 *
	 * @return Updates
	 * @link https://docs.madelineproto.xyz/API_docs/methods/channels.togglePreHistoryHidden.html
	 *
	 */
	public function togglePreHistoryHidden( $channel, $enabled ) {
	}

	/**
	 * @param InputChannel|null $channel
	 * @param bool $enabled
	 *
	 * @return Updates
	 * @link https://docs.madelineproto.xyz/API_docs/methods/channels.toggleSignatures.html
	 *
	 */
	public function toggleSignatures( $channel, $enabled ) {
	}

	/**
	 * @param InputChannel|null $channel
	 * @param int $seconds
	 *
	 * @return Updates
	 * @link https://docs.madelineproto.xyz/API_docs/methods/channels.toggleSlowMode.html
	 *
	 */
	public function toggleSlowMode( $channel, $seconds ) {
	}

	/**
	 * @param InputChannel|null $channel
	 * @param string $username
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/channels.updateUsername.html
	 *
	 */
	public function updateUsername( $channel, $username ) {
	}
}