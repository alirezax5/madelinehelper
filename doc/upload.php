<?php


namespace doc;


use types\{bytes, long, upload_CdnFile, FileHash, InputFileLocation, upload_File, InputWebFileLocation};

class upload {

	/**
	 * @param bytes $file_token
	 * @param int $offset
	 * @param int $limit
	 *
	 * @return upload_CdnFile
	 * @link https://docs.madelineproto.xyz/API_docs/methods/upload.getCdnFile.html
	 *
	 */
	public function getCdnFile( $file_token, $offset, $limit ) {
	}

	/**
	 * @param bytes $file_token
	 * @param int $offset
	 *
	 * @return FileHash
	 * @link https://docs.madelineproto.xyz/API_docs/methods/upload.getCdnFileHashes.html
	 *
	 */
	public function getCdnFileHashes( $file_token, $offset ) {
	}

	/**
	 * @param bool $precise
	 * @param InputFileLocation $location
	 * @param int $limit
	 * @param int $offset
	 *
	 * @return upload_File
	 * @link https://docs.madelineproto.xyz/API_docs/methods/upload.getFile.html
	 *
	 */
	public function getFile( $precise, $location, $offset, $limit ) {
	}

	/**
	 * @param InputFileLocation $location
	 * @param int $offset
	 *
	 * @return FileHash
	 * @link https://docs.madelineproto.xyz/API_docs/methods/upload.getFileHashes.html
	 *
	 */
	public function getFileHashes( $location, $offse ) {
	}

	/**
	 * @param InputWebFileLocation $location
	 * @param int $offset
	 * @param int $limit
	 *
	 * @return FileHash
	 * @link https://docs.madelineproto.xyz/API_docs/methods/upload.getWebFile.html
	 *
	 */
	public function getWebFile( $location, $offse, $limit ) {
	}

	/**
	 * @param bytes $file_token
	 * @param bytes $request_token
	 *
	 * @return FileHash
	 * @link https://docs.madelineproto.xyz/API_docs/methods/upload.reuploadCdnFile.html
	 *
	 */
	public function reuploadCdnFile( $file_token, $request_token ) {
	}

	/**
	 * @param long $file_id
	 * @param int $file_part
	 * @param int $file_total_parts
	 * @param bytes $bytes
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/upload.saveBigFilePart.html
	 *
	 */
	public function saveBigFilePart( $file_id, $file_part, $file_total_parts, $bytes ) {
	}

	/**
	 * @param long $file_id
	 * @param int $file_part
	 * @param bytes $bytes
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/upload.saveFilePart.html
	 *
	 */
	public function saveFilePart( $file_id, $file_part, $bytes ) {
	}
}