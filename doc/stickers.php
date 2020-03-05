<?php


namespace doc;

use types\{InputDocument, InputStickerSet, InputStickerSetItem, InputUser, messages_StickerSet};

class stickers {

	/**
	 * @param InputStickerSet $stickerset
	 * @param InputStickerSetItem $sticker
	 *
	 * @return messages_StickerSet
	 * @link https://docs.madelineproto.xyz/API_docs/methods/stickers.addStickerToSet.html
	 *
	 */
	public function addStickerToSet( $stickerset, $sticker ) {
	}

	/**
	 * @param int $position
	 * @param InputDocument $sticker
	 *
	 * @return messages_StickerSet
	 * @link https://docs.madelineproto.xyz/API_docs/methods/stickers.changeStickerPosition.html
	 *
	 */
	public function changeStickerPosition( $sticker, $position ) {
	}

	/**
	 * @param bool $masks
	 * @param InputUser $user_id
	 * @param string $title
	 * @param string $short_name
	 * @param InputStickerSetItem $stickers
	 *
	 * @return messages_StickerSet
	 * @link https://docs.madelineproto.xyz/API_docs/methods/stickers.createStickerSet.html
	 *
	 */
	public function createStickerSet( $masks,$user_id,$title,$short_name,$stickers ) {
	}

	/**
	 * @param InputDocument $sticker
	 *
	 * @return messages_StickerSet
	 * @link https://docs.madelineproto.xyz/API_docs/methods/stickers.removeStickerFromSet.html
	 *
	 */
	public function removeStickerFromSet( $sticker ) {
	}
}