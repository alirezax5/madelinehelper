<?php

namespace doc;

use types\{ChatBannedRights,
	InputGeoPoint,
	InputMessage,
	InputUser,
	long,
	InputEncryptedChat,
	EncryptedChat,
	bytes,
	InputPeer,
	MessageEntity,
	messages_ChatFull,
	messages_Chats,
	messages_Messages,
	Updates,
	UrlAuthResult,
	InputChatPhoto,
	ChatInvite,
	messages_AffectedHistory,
	messages_AffectedMessages,
	InputBotInlineMessageID,
	InputMedia,
	ReplyMarkup,
	ExportedChatInvite,
	InputDocument,
	messages_AllStickers,
	messages_ArchivedStickers,
	InputStickeredMedia,
	StickerSetCovered,
	messages_BotCallbackAnswer,
	messages_DhConfig,
	DialogPeer,
	messages_Dialogs,
	Document,
	EmojiKeywordsDifference,
	EmojiLanguage,
	EmojiURL,
	messages_FavedStickers,
	messages_FeaturedStickers,
	messages_HighScores,
	messages_BotResults,
	messages_MessageEditData,
	ChatOnlines,
	InputDialogPeer,
	messages_PeerDialogs,
	PeerSettings,
	messages_RecentStickers,
	messages_SavedGifs,
	MessagesFilter,
	messages_SearchCounter,
	MessageRange,
	StatsURL,
	InputStickerSet,
	messages_StickerSet,
	messages_Stickers,
	WebPage,
	MessageMedia,
	messages_StickerSetInstallResult,
	ReceivedNotifyMessage,
	ReportReason,
	messages_FoundGifs,
	messages_FoundStickerSets,
	messages_SentEncryptedMessage,
	InputEncryptedFile,
	InputSingleMedia,
	ShippingOption,
	InputBotInlineResult,
	InlineBotSwitchPM,
	SendMessageAction,
	EncryptedFile
};

class messages {

	/**
	 * @param InputEncryptedChat $peer
	 * @param bytes $g_b
	 * @param long $key_fingerprint
	 *
	 * @return EncryptedChat
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.acceptEncryption.html
	 *
	 */
	public function acceptEncryption( $peer, $g_b, $key_fingerprint ) {
	}

	/**
	 * @param bool $write_allowed
	 * @param InputPeer $peer
	 * @param int $msg_id
	 * @param int $button_id
	 *
	 * @return UrlAuthResult
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.acceptUrlAuth.html
	 *
	 */
	public function acceptUrlAuth( $write_allowed, $peer, $msg_id, $button_id ) {
	}

	/**
	 * @param InputPeer $chat_id
	 * @param InputPeer $user_id
	 * @param int $fwd_limit
	 *
	 * @return Updates
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.addChatUser.html
	 *
	 */
	public function addChatUser( $chat_id, $user_id, $fwd_limit ) {
	}

	/**
	 * @param string $hash
	 *
	 * @return ChatInvite
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.checkChatInvite.html
	 *
	 */
	public function checkChatInvite( $hash ) {
	}

	/**
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.clearAllDrafts.html
	 *
	 */
	public function clearAllDrafts() {
	}

	/**
	 * @param bool $attached
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.clearRecentStickers.html
	 *
	 */
	public function clearRecentStickers( $attached ) {
	}

	/**
	 * @param InputUser $users
	 * @param string $title
	 *
	 * @return Updates
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.createChat.html
	 *
	 */
	public function createChat( $users, $title ) {
	}

	/**
	 * @param InputPeer $chat_id
	 * @param InputUser $user_id
	 *
	 * @return Updates
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.deleteChatUser.html
	 *
	 */
	public function deleteChatUser( $chat_id, $user_id ) {
	}

	/**
	 * @param bool $just_clear
	 * @param bool $revoke
	 * @param InputPeer $peer
	 * @param int $max_id
	 *
	 * @return messages_AffectedHistory
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.deleteHistory.html
	 *
	 */
	public function deleteHistory( $just_clear, $revoke, $peer, $max_id ) {
	}

	/**
	 * @param int $id
	 * @param bool $revoke
	 *
	 * @return messages_AffectedMessages
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.deleteMessages.html
	 *
	 */
	public function deleteMessages( $id, $revoke ) {
	}

	/**
	 * @param InputPeer $peer
	 * @param int $id
	 *
	 * @return Updates
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.deleteScheduledMessages.html
	 *
	 */
	public function deleteScheduledMessages( $peer, $id ) {
	}

	/**
	 * @param int $chat_id
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.discardEncryption.html
	 *
	 */
	public function discardEncryption( $chat_id ) {
	}

	/**
	 * @param InputPeer $peer
	 * @param string $about
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.editChatAbout.html
	 *
	 */
	public function editChatAbout( $peer, $about ) {
	}

	/**
	 * @param InputPeer $chat_id
	 * @param InputUser $user_id
	 * @param bool $is_admin
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.editChatAdmin.html
	 *
	 */
	public function editChatAdmin( $chat_id, $user_id, $is_admin ) {
	}

	/**
	 * @param InputPeer $peer
	 * @param ChatBannedRights $banned_rights
	 *
	 * @return Updates
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.editChatDefaultBannedRights.html
	 *
	 */
	public function editChatDefaultBannedRights( $peer, $banned_rights ) {
	}

	/**
	 * @param InputPeer $chat_id
	 * @param InputChatPhoto $photo
	 *
	 * @return Updates
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.editChatPhoto.html
	 *
	 */
	public function editChatPhoto( $chat_id, $photo ) {
	}

	/**
	 * @param InputPeer $chat_id
	 * @param string $title
	 *
	 * @return Updates
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.editChatTitle.html
	 *
	 */
	public function editChatTitle( $chat_id, $title ) {
	}

	/**
	 * @param bool $no_webpage
	 * @param InputBotInlineMessageID $id
	 * @param string $message
	 * @param InputMedia $media
	 * @param ReplyMarkup $reply_markup
	 * @param MessageEntity $entities
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.editInlineBotMessage.html
	 *
	 */
	public function editInlineBotMessage( $no_webpage, $id, $message, $media, $reply_markup, $entities ) {
	}


	/**
	 * @param bool $no_webpage
	 * @param InputBotInlineMessageID $id
	 * @param string $message
	 * @param InputMedia $media
	 * @param ReplyMarkup $reply_markup
	 * @param MessageEntity $entities
	 * @param int $schedule_date
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.editMessage.html
	 *
	 */
	public function editMessage( $no_webpage, $id, $message, $media, $reply_markup, $entities, $schedule_date ) {
	}

	/**
	 * @param InputPeer $peer
	 *
	 * @return ExportedChatInvite
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.exportChatInvite.html
	 *
	 */
	public function exportChatInvite( $peer ) {
	}

	/**
	 * @param InputDocument $id
	 * @param bool $unfave
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.faveSticker.html
	 *
	 */
	public function faveSticker( $id, $unfave ) {
	}

	/**
	 * @param bool $silent
	 * @param bool $background
	 * @param bool $with_my_score
	 * @param bool $grouped
	 * @param InputPeer $from_peer
	 * @param int $id
	 * @param InputPeer $to_peer
	 * @param int $schedule_date
	 *
	 * @return Updates
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.forwardMessages.html
	 *
	 */
	public function forwardMessages( $silent, $background, $with_my_score, $grouped, $from_peer, $id, $to_peer, $schedule_date ) {
	}

	/**
	 * @param int $except_ids
	 *
	 * @return messages_Chats
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.getAllChats.html
	 *
	 */
	public function getAllChats( $except_ids ) {
	}

	/**
	 *
	 * @return Updates
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.getAllDrafts.html
	 *
	 */
	public function getAllDrafts() {
	}

	/**
	 * @param int $hash
	 *
	 * @return messages_AllStickers
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.getAllStickers.html
	 *
	 */
	public function getAllStickers( $hash ) {
	}

	/**
	 * @param bool $masks
	 * @param long $offset_id
	 * @param int $limit
	 *
	 * @return messages_ArchivedStickers
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.getArchivedStickers.html
	 *
	 */
	public function getArchivedStickers( $masks, $offset_id, $limit ) {
	}

	/**
	 * @param InputStickeredMedia $media
	 *
	 * @return StickerSetCovered
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.getAttachedStickers.html
	 *
	 */
	public function getAttachedStickers( $media ) {
	}

	/**
	 * @param bool $game
	 * @param InputPeer $peer
	 * @param int $msg_id
	 * @param bytes $data
	 *
	 * @return messages_BotCallbackAnswer
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.getBotCallbackAnswer.html
	 *
	 */
	public function getBotCallbackAnswer( $game, $peer, $msg_id, $data ) {
	}

	/**
	 * @param int $id
	 *
	 * @return messages_Chats
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.getChats.html
	 *
	 */
	public function getChats( $id ) {
	}

	/**
	 * @param InputUser $user_id
	 * @param int $max_id
	 * @param int $limit
	 *
	 * @return messages_Chats
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.getCommonChats.html
	 *
	 */
	public function getCommonChats( $user_id, $max_id, $limit ) {
	}

	/**
	 * @param int $version
	 * @param int $random_length
	 *
	 * @return messages_DhConfig
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.getDhConfig.html
	 *
	 */
	public function getDhConfig( $version, $random_length ) {
	}

	/**
	 * @return DialogPeer
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.getDialogUnreadMarks.html
	 *
	 */
	public function getDialogUnreadMarks() {
	}

	/**
	 * @param bool $exclude_pinned
	 * @param int $folder_id
	 * @param int $offset_date
	 * @param int $offset_id
	 * @param int $limit
	 * @param int $hash
	 * @param InputPeer $offset_peer
	 *
	 * @return messages_Dialogs
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.getDialogs.html
	 *
	 */
	public function getDialogs( $exclude_pinned, $folder_id, $offset_date, $offset_id, $offset_peer, $limit, $hash ) {
	}

	/**
	 * @param bytes $sha256 ,
	 * @param int $size
	 * @param string $mime_type
	 *
	 * @return Document
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.getDocumentByHash.html
	 *
	 */
	public function getDocumentByHash( $sha256, $size, $mime_type ) {
	}

	/**
	 * @param string $lang_code
	 *
	 * @return EmojiKeywordsDifference
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.getEmojiKeywords.html
	 *
	 */
	public function getEmojiKeywords( $lang_code ) {
	}

	/**
	 * @param string $lang_code
	 * @param int $from_version
	 *
	 * @return EmojiKeywordsDifference
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.getEmojiKeywordsDifference.html
	 *
	 */
	public function getEmojiKeywordsDifference( $lang_code, $from_version ) {
	}

	/**
	 * @param string $lang_code
	 *
	 * @return EmojiLanguage
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.getEmojiKeywordsLanguages.html
	 *
	 */
	public function getEmojiKeywordsLanguages( $lang_code ) {
	}

	/**
	 * @param string $lang_code
	 *
	 * @return EmojiURL
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.getEmojiURL.html
	 *
	 */
	public function getEmojiURL( $lang_code ) {
	}

	/**
	 * @param int $hash
	 *
	 * @return messages_FavedStickers
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.getFavedStickers.html
	 *
	 */
	public function getFavedStickers( $hash ) {
	}

	/**
	 * @param int $hash
	 *
	 * @return messages_FeaturedStickers
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.getFeaturedStickers.html
	 *
	 */
	public function getFeaturedStickers( $hash ) {
	}

	/**
	 * @param InputPeer $chat_id
	 *
	 * @return messages_ChatFull
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.getFullChat.html
	 *
	 */
	public function getFullChat( $chat_id ) {
	}

	/**
	 * @param InputPeer $peer
	 * @param int $id
	 * @param InputUser $user_id
	 *
	 * @return messages_HighScores
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.getGameHighScores.html
	 *
	 */
	public function getGameHighScores( $peer, $id, $user_id ) {
	}

	/**
	 * @param InputPeer $peer
	 * @param int $offset_id
	 * @param int $offset_date
	 * @param int $add_offset
	 * @param int $limit
	 * @param int $max_id
	 * @param int $min_id
	 * @param int $hash
	 *
	 * @return messages_Messages
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.getHistory.html
	 *
	 */
	public function getHistory( $peer, $offset_id, $offset_date, $add_offset, $limit, $max_id, $min_id, $hash ) {
	}

	/**
	 * @param InputPeer $peer
	 * @param InputUser $bot
	 * @param InputGeoPoint $geo_point
	 * @param string $query
	 * @param string $offset
	 *
	 * @return messages_BotResults
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.getInlineBotResults.html
	 *
	 */
	public function getInlineBotResults( $bot, $peer, $geo_point, $query, $offset ) {
	}

	/**
	 * @param InputPeer $user_id
	 * @param InputBotInlineMessageID $id
	 *
	 * @return messages_HighScores
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.getInlineGameHighScores.html
	 *
	 */
	public function getInlineGameHighScores( $id, $user_id ) {
	}

	/**
	 * @param int $hash
	 *
	 * @return messages_AllStickers
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.getMaskStickers.html
	 *
	 */
	public function getMaskStickers( $hash ) {
	}

	/**
	 * @param InputPeer $peer
	 * @param int $id
	 *
	 * @return messages_MessageEditData
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.getMessageEditData.html
	 *
	 */
	public function getMessageEditData( $peer, $id ) {
	}

	/**
	 * @param InputMessage $id
	 *
	 * @return messages_Messages
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.getMessages.html
	 *
	 */
	public function getMessages( $id ) {
	}

	/**
	 * @param InputPeer $peer
	 * @param int $id
	 * @param bool $increment
	 *
	 * @return int
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.getMessagesViews.html
	 *
	 */
	public function getMessagesViews( $peer, $id, $increment ) {
	}

	/**
	 * @param InputPeer $peer
	 *
	 * @return ChatOnlines
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.getOnlines.html
	 *
	 */
	public function getOnlines( $peer ) {
	}

	/**
	 * @param InputDialogPeer $peer
	 *
	 * @return messages_PeerDialogs
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.getPeerDialogs.html
	 *
	 */
	public function getPeerDialogs( $peer ) {
	}

	/**
	 * @param InputPeer $peer
	 *
	 * @return PeerSettings
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.getPeerSettings.html
	 *
	 */
	public function getPeerSettings( $peer ) {
	}

	/**
	 * @param int $folder_id
	 *
	 * @return messages_PeerDialogs
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.getPinnedDialogs.html
	 *
	 */
	public function getPinnedDialogs( $folder_id ) {
	}

	/**
	 * @param InputPeer $peer
	 * @param int $msg_id
	 *
	 * @return Updates
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.getPollResults.html
	 *
	 */
	public function getPollResults( $peer, $msg_id ) {
	}

	/**
	 * @param InputPeer $peer
	 * @param int $limit
	 * @param int $hash
	 *
	 * @return messages_Messages
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.getRecentLocations.html
	 *
	 */
	public function getRecentLocations( $peer, $limit, $hash ) {
	}

	/**
	 * @param bool $attached
	 * @param int $hash
	 *
	 * @return messages_RecentStickers
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.getRecentStickers.html
	 *
	 */
	public function getRecentStickers( $attached, $hash ) {
	}

	/**
	 * @param int $hash
	 *
	 * @return messages_SavedGifs
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.getSavedGifs.html
	 *
	 */
	public function getSavedGifs( $hash ) {
	}

	/**
	 * @param InputPeer $peer
	 * @param int $hash
	 *
	 * @return messages_Messages
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.getScheduledHistory.html
	 *
	 */
	public function getScheduledHistory( $peer, $hash ) {
	}

	/**
	 * @param InputPeer $peer
	 * @param int $id
	 *
	 * @return messages_Messages
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.getScheduledMessages.html
	 *
	 */
	public function getScheduledMessages( $peer, $id ) {
	}

	/**
	 * @param InputPeer $peer
	 * @param MessagesFilter $filters
	 *
	 * @return messages_SearchCounter
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.getSearchCounters.html
	 *
	 */
	public function getSearchCounters( $peer, $filters ) {
	}

	/**
	 *
	 * @return MessageRange
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.getSplitRanges.html
	 *
	 */
	public function getSplitRanges() {
	}

	/**
	 * @param bool $dark
	 * @param InputPeer $peer
	 * @param string $params
	 *
	 * @return StatsURL
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.getStatsURL.html
	 *
	 */
	public function getStatsURL( $dark, $peer, $params ) {
	}

	/**
	 * @param InputStickerSet $stickerset
	 *
	 * @return messages_StickerSet
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.getStickerSet.html
	 *
	 */
	public function getStickerSet( $stickerset ) {
	}

	/**
	 * @param string $emoticon
	 * @param int $hash
	 *
	 * @return messages_Stickers
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.getStickers.html
	 *
	 */
	public function getStickers( $emoticon, $hash ) {
	}

	/**
	 * @param InputPeer $peer
	 * @param int $offset_id
	 * @param int $add_offset
	 * @param int $limit
	 * @param int $max_id
	 * @param int $min_id
	 *
	 * @return messages_Messages
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.getUnreadMentions.html
	 *
	 */
	public function getUnreadMentions( $peer, $offset_id, $add_offset, $limit, $max_id, $min_id ) {
	}

	/**
	 * @param string $url
	 * @param int $hash
	 *
	 * @return WebPage
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.getWebPage.html
	 *
	 */
	public function getWebPage( $url, $hash ) {
	}

	/**
	 * @param string $message
	 * @param MessageEntity $entities
	 *
	 * @return MessageMedia
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.getWebPagePreview.html
	 *
	 */
	public function getWebPagePreview( $message, $entities ) {
	}

	/**
	 * @param InputPeer $peer
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.hidePeerSettingsBar.html
	 *
	 */
	public function hidePeerSettingsBar( $peer ) {
	}

	/**
	 * @param string $hash
	 *
	 * @return Updates
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.importChatInvite.html
	 *
	 */
	public function importChatInvite( $hash ) {
	}

	/**
	 * @param InputStickerSet $stickerset
	 * @param bool $archived
	 *
	 * @return messages_StickerSetInstallResult
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.installStickerSet.html
	 *
	 */
	public function installStickerSet( $stickerset, $archived ) {
	}

	/**
	 * @param InputDialogPeer $peer
	 * @param bool $unread
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.markDialogUnread.html
	 *
	 */
	public function markDialogUnread( $unread, $peer ) {
	}

	/**
	 * @param InputPeer $chat_id
	 *
	 * @return Updates
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.migrateChat.html
	 *
	 */
	public function migrateChat( $chat_id ) {
	}

	/**
	 * @param InputEncryptedChat $peer
	 * @param int $max_date
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.readEncryptedHistory.html
	 *
	 */
	public function readEncryptedHistory( $peer, $max_date ) {
	}

	/**
	 * @param long $id
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.readFeaturedStickers.html
	 *
	 */
	public function readFeaturedStickers( $id ) {
	}

	/**
	 * @param InputPeer $peer
	 * @param int $max_id
	 *
	 * @return messages_AffectedMessages
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.readHistory.html
	 *
	 */
	public function readHistory( $peer, $max_id ) {
	}

	/**
	 * @param InputPeer $peer
	 *
	 * @return messages_AffectedHistory
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.readMentions.html
	 *
	 */
	public function readMentions( $peer ) {
	}

	/**
	 * @param int $id
	 *
	 * @return messages_AffectedMessages
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.readMessageContents.html
	 *
	 */
	public function readMessageContents( $id ) {
	}

	/**
	 * @param int $max_id
	 *
	 * @return ReceivedNotifyMessage
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.receivedMessages.html
	 *
	 */
	public function receivedMessages( $max_id ) {
	}

	/**
	 * @param int $max_qts
	 *
	 * @return long
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.eceivedQueue.html
	 *
	 */
	public function eceivedQueue( $max_qts ) {
	}

	/**
	 * @param bool $force
	 * @param int $folder_id
	 * @param InputDialogPeer $order
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.reorderPinnedDialogs.html
	 *
	 */
	public function reorderPinnedDialogs( $force, $folder_id, $order ) {
	}

	/**
	 * @param bool $masks
	 * @param long $order
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.reorderStickerSets.html
	 *
	 */
	public function reorderStickerSets( $masks, $order ) {
	}

	/**
	 * @param InputPeer $peer
	 * @param int $id
	 * @param ReportReason $reason
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.report.html
	 *
	 */
	public function report( $peer, $id, $reason ) {
	}

	/**
	 * @param InputEncryptedChat $peer
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.reportEncryptedSpam.html
	 *
	 */
	public function reportEncryptedSpam( $peer ) {
	}

	/**
	 * @param InputPeer $peer
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.reportSpam.html
	 *
	 */
	public function reportSpam( $peer ) {
	}

	/**
	 * @param InputUser $user_id
	 * @param bytes $g_a
	 *
	 * @return EncryptedChat
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.requestEncryption.html
	 *
	 */
	public function requestEncryption( $user_id, $g_a ) {
	}

	/**
	 * @param InputPeer $peer
	 * @param int $msg_id
	 * @param int $button_id
	 *
	 * @return UrlAuthResult
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.requestUrlAuth.html
	 *
	 */
	public function requestUrlAuth( $peer, $msg_id, $button_id ) {
	}

	/**
	 * @param InputPeer $peer
	 * @param bool $no_webpage
	 * @param int $reply_to_msg_id
	 * @param string $message
	 * @param MessageEntity $entities
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.saveDraft.html
	 *
	 */
	public function saveDraft( $no_webpage, $reply_to_msg_id, $peer, $message, $entities ) {
	}

	/**
	 * @param InputDocument $id
	 * @param bool $unsave
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.saveGif.html
	 *
	 */
	public function saveGif( $id, $unsave ) {
	}

	/**
	 * @param bool $attached
	 * @param InputDocument $id
	 * @param bool $unsave
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.saveRecentSticker.html
	 *
	 */
	public function saveRecentSticker( $attached, $id, $unsave ) {
	}

	/**
	 * @param InputPeer $peer
	 * @param string $q
	 * @param InputUser $from_id
	 * @param MessagesFilter $filter
	 * @param int $min_date
	 * @param int $max_date
	 * @param int $offset_id
	 * @param int $add_offset
	 * @param int $limit
	 * @param int $max_id
	 * @param int $min_id
	 * @param int $hash
	 *
	 * @return messages_Messages
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.search.html
	 *
	 */
	public function search( $peer, $q, $from_id, $filter, $min_date, $max_date, $offset_id, $add_offset, $limit, $max_id, $min_id, $hash ) {
	}

	/**
	 * @param string $q
	 * @param int $offset
	 *
	 * @return messages_FoundGifs
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.searchGifs.html
	 *
	 */
	public function searchGifs( $q, $offset ) {
	}

	/**
	 * @param string $q
	 * @param int $folder_id
	 * @param int $offset_rate
	 * @param InputPeer $offset_peer
	 * @param int $offset_id
	 * @param int $limit
	 *
	 * @return messages_Messages
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.searchGlobal.html
	 *
	 */
	public function searchGlobal( $folder_id, $q, $offset_rate, $offset_peer, $offset_id, $limit ) {
	}

	/**
	 * @param bool $exclude_featured
	 * @param string $q
	 * @param int $hash
	 *
	 * @return messages_FoundStickerSets
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.searchStickerSets.html
	 *
	 */
	public function searchStickerSets( $exclude_featured, $q, $hash ) {
	}

	/**
	 * @param InputEncryptedChat $peer
	 * @param bytes $data
	 *
	 * @return messages_SentEncryptedMessage
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.sendEncrypted.html
	 *
	 */
	public function sendEncrypted( $peer, $data ) {
	}

	/**
	 * @param InputEncryptedChat $peer
	 * @param bytes $data
	 * @param InputEncryptedFile $file
	 *
	 * @return messages_SentEncryptedMessage
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.sendEncryptedFile.html
	 *
	 */
	public function sendEncryptedFile( $peer, $data, $file ) {
	}

	/**
	 * @param InputEncryptedChat $peer
	 * @param bytes $data
	 *
	 * @return messages_SentEncryptedMessage
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.sendEncryptedService.html
	 *
	 */
	public function sendEncryptedService( $peer, $data ) {
	}

	/**
	 * @param InputPeer $peer
	 * @param bool $silent
	 * @param bool $background
	 * @param bool $clear_draft
	 * @param bool $hide_via
	 * @param int $reply_to_msg_id
	 * @param long $query_id
	 * @param string $id
	 * @param int $schedule_date
	 *
	 * @return Updates
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.sendInlineBotResult.html
	 *
	 */
	public function sendInlineBotResult( $silent, $background, $clear_draft, $hide_via, $peer, $reply_to_msg_id, $query_id, $id, $schedule_date ) {
	}

	/**
	 * @param InputPeer $peer
	 * @param bool $silent
	 * @param bool $background
	 * @param bool $clear_draft
	 * @param int $reply_to_msg_id
	 * @param InputMedia $media
	 * @param string $message
	 * @param ReplyMarkup $reply_markup
	 * @param MessageEntity $entities
	 * @param int $schedule_date
	 *
	 * @return Updates
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.sendMedia.html
	 *
	 */
	public function sendMedia( $silent, $background, $clear_draft, $peer, $reply_to_msg_id, $media, $message, $reply_markup, $entities, $schedule_date ) {
	}

	/**
	 * @param InputPeer $peer
	 * @param bool $no_webpage
	 * @param bool $silent
	 * @param bool $background
	 * @param bool $clear_draft
	 * @param int $reply_to_msg_id
	 * @param string $message
	 * @param ReplyMarkup $reply_markup
	 * @param MessageEntity $entities
	 * @param int $schedule_date
	 *
	 * @return Updates
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.sendMessage.html
	 *
	 */
	public function sendMessage( $no_webpage, $silent, $background, $clear_draft, $peer, $reply_to_msg_id, $message, $reply_markup, $entities, $schedule_date ) {
	}

	/**
	 * @param InputPeer $peer
	 * @param bool $no_webpage
	 * @param bool $silent
	 * @param bool $background
	 * @param bool $clear_draft
	 * @param int $reply_to_msg_id
	 * @param InputSingleMedia $multi_media
	 * @param int $schedule_date
	 *
	 * @return Updates
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.sendMultiMedia.html
	 *
	 */
	public function sendMultiMedia( $no_webpage, $silent, $background, $clear_draft, $peer, $reply_to_msg_id, $multi_media, $schedule_date ) {
	}

	/**
	 * @param InputPeer $peer
	 * @param int $id
	 *
	 * @return Updates
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.sendScheduledMessages.html
	 *
	 */
	public function sendScheduledMessages( $peer, $id ) {
	}

	/**
	 * @param InputPeer $peer
	 * @param int $reply_to_msg_id
	 *
	 * @return Updates
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.sendScreenshotNotification.html
	 *
	 */
	public function sendScreenshotNotification( $peer, $reply_to_msg_id ) {
	}

	/**
	 * @param InputPeer $peer
	 * @param int $msg_id
	 * @param bytes $options
	 *
	 * @return Updates
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.sendVote.html
	 *
	 */
	public function sendVote( $peer, $msg_id, $options ) {
	}

	/**
	 * @param bool $alert
	 * @param long $query_id
	 * @param string $message
	 * @param string $url
	 * @param int $cache_time
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.setBotCallbackAnswer.html
	 *
	 */
	public function setBotCallbackAnswer( $alert, $query_id, $message, $url, $cache_time ) {
	}

	/**
	 * @param bool $success
	 * @param long $query_id
	 * @param string $error
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.setBotPrecheckoutResults.html
	 *
	 */
	public function setBotPrecheckoutResults( $success, $query_id, $error ) {
	}

	/**
	 * @param ShippingOption $shipping_options
	 * @param long $query_id
	 * @param string $error
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.setBotShippingResults.html
	 *
	 */
	public function setBotShippingResults( $shipping_options, $query_id, $error ) {
	}

	/**
	 * @param InputEncryptedChat $peer
	 * @param bool $typing
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.setEncryptedTyping.html
	 *
	 */
	public function setEncryptedTyping( $peer, $typing ) {
	}

	/**
	 * @param bool $edit_message
	 * @param bool $force
	 * @param InputPeer $peer
	 * @param int $id
	 * @param InputUser $user_id
	 * @param int $score
	 *
	 * @return Updates
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.setGameScore.html
	 *
	 */
	public function setGameScore( $edit_message, $force, $peer, $id, $user_id ) {
	}

	/**
	 * @param bool $gallery
	 * @param bool $private
	 * @param long $query_id
	 * @param InputBotInlineResult $results
	 * @param int $cache_time
	 * @param string $next_offset
	 * @param InlineBotSwitchPM $switch_pm
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.setInlineBotResults.html
	 *
	 */
	public function setInlineBotResults( $gallery, $private, $query_id, $results, $cache_time, $next_offset, $switch_pm ) {
	}

	/**
	 * @param bool $edit_message
	 * @param bool $force
	 * @param InputBotInlineMessageID $id
	 * @param InputUser $user_id
	 * @param int $score
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.setInlineGameScore.html
	 *
	 */
	public function setInlineGameScore( $edit_message, $force, $id, $user_id, $score ) {
	}

	/**
	 * @param InputPeer $peer
	 * @param SendMessageAction $action
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.setTyping.html
	 *
	 */
	public function setTyping( $peer, $action ) {
	}

	/**
	 * @param InputUser $bot
	 * @param InputPeer $peer
	 * @param string $start_param
	 *
	 * @return Updates
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.startBot.html
	 *
	 */
	public function startBot( $bot, $peer, $start_param ) {
	}

	/**
	 * @param bool $pinned
	 * @param InputDialogPeer $peer
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.toggleDialogPin.html
	 *
	 */
	public function toggleDialogPin( $pinned, $peer ) {
	}

	/**
	 * @param InputStickerSet $stickerset
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.uninstallStickerSet.html
	 *
	 */
	public function uninstallStickerSet( $stickerset ) {
	}

	/**
	 * @param InputPeer $peer
	 * @param bool $silent
	 * @param int $id
	 *
	 * @return Updates
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.updatePinnedMessage.html
	 *
	 */
	public function updatePinnedMessage( $silent, $peer, $id ) {
	}

	/**
	 * @param InputEncryptedChat $peer
	 * @param InputEncryptedFile $file
	 *
	 * @return EncryptedFile
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.uploadEncryptedFile.html
	 *
	 */
	public function uploadEncryptedFile($peer, $file ) {
	}

	/**
	 * @param InputPeer $peer
	 * @param InputMedia $media
	 *
	 * @return MessageMedia
	 * @link https://docs.madelineproto.xyz/API_docs/methods/messages.uploadMedia.html
	 *
	 */
	public function uploadMedia($peer, $media ) {
	}
}