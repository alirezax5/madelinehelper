<?php


namespace doc;


use types\{InputFile, InputPhoto, InputUser, long, photos_Photos, UserProfilePhoto};

class photos {

	/**
	 * @param InputPhoto $id
	 *
	 * @return long
	 * @link https://docs.madelineproto.xyz/API_docs/methods/photos.deletePhotos.html
	 *
	 */
	public function deletePhotos( $id ) {
	}

	/**
	 * @param InputUser $user_id
	 * @param int $offset
	 * @param long $max_id
	 * @param int $limit
	 *
	 * @return photos_Photos
	 * @link https://docs.madelineproto.xyz/API_docs/methods/photos.getUserPhotos.html
	 *
	 */
	public function getUserPhotos( $user_id, $offset, $max_id, $limit ) {
	}

	/**
	 * @param InputPhoto $id
	 *
	 * @return UserProfilePhoto
	 * @link https://docs.madelineproto.xyz/API_docs/methods/photos.updateProfilePhoto.html
	 *
	 */
	public function updateProfilePhoto( $id ) {
	}

	/**
	 * @param InputFile $file
	 *
	 * @return photos_Photos
	 * @link https://docs.madelineproto.xyz/API_docs/methods/photos.uploadProfilePhoto.html
	 *
	 */
	public function uploadProfilePhoto( $file ) {
	}

}