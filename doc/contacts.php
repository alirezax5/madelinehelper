<?php

namespace doc;

use types\InputChannel;
use types\InputGeoPoint;
use types\InputUser;
use types\Updates;
use types\contacts_Blocked;
use types\contacts_Contacts;
use types\SavedContact;
use types\ContactStatus;
use types\contacts_TopPeers;
use types\InputContact;
use types\contacts_ImportedContacts;
use types\TopPeerCategory;
use types\InputPeer;
use types\contacts_ResolvedPeer;
use types\contacts_Found;

class contacts {

	/**
	 * @param InputUser|null $id
	 *
	 * @return Updates
	 * @link https://docs.madelineproto.xyz/API_docs/methods/contacts.acceptContact.html
	 *
	 */
	public function acceptContact( $id ) {
	}

	/**
	 * @param InputUser|null $id
	 * @param bool|null $add_phone_privacy_exception
	 * @param string $first_name
	 * @param string $last_name
	 * @param string $phone
	 *
	 * @return Updates
	 * @link https://docs.madelineproto.xyz/API_docs/methods/contacts.addContact.html
	 *
	 */
	public function addContact( $add_phone_privacy_exception, $id, $first_name, $last_name, $phone ) {
	}

	/**
	 * @param InputUser|null $id
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/contacts.block.html
	 *
	 */
	public function block( $id ) {
	}

	/**
	 * @param array $phones
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/contacts.deleteByPhones.html
	 *
	 */
	public function deleteByPhones( $phones ) {
	}

	/**
	 * @param InputUser $id
	 *
	 * @return Updates
	 * @link https://docs.madelineproto.xyz/API_docs/methods/contacts.deleteContacts.html
	 *
	 */
	public function deleteContacts( $id ) {
	}

	/**
	 * @param int $offset
	 * @param int $limit
	 *
	 * @return contacts_Blocked
	 * @link https://docs.madelineproto.xyz/API_docs/methods/contacts.getBlocked.html
	 *
	 */
	public function getBlocked( $offset, $limit ) {
	}

	/**
	 * @param array $hash
	 *
	 * @return int
	 * @link https://docs.madelineproto.xyz/API_docs/methods/contacts.getContactIDs.html
	 *
	 */
	public function getContactIDs( $hash ) {
	}

	/**
	 * @param array $hash
	 *
	 * @return contacts_Contacts
	 * @link https://docs.madelineproto.xyz/API_docs/methods/contacts.getContacts.html
	 *
	 */
	public function getContacts( $hash ) {
	}

	/**
	 * @param InputGeoPoint $geo_point
	 *
	 * @return Updates
	 * @link https://docs.madelineproto.xyz/API_docs/methods/contacts.getLocated.html
	 *
	 */
	public function getLocated( $geo_point ) {
	}

	/**
	 *
	 * @return SavedContact
	 * @link https://docs.madelineproto.xyz/API_docs/methods/contacts.getSaved.html
	 *
	 */
	public function getSaved() {
	}

	/**
	 *
	 * @return ContactStatus
	 * @link https://docs.madelineproto.xyz/API_docs/methods/contacts.getStatuses.html
	 *
	 */
	public function getStatuses() {
	}

	/**
	 * @param bool|null $correspondents
	 * @param bool|null $bots_pm
	 * @param bool|null $bots_inline
	 * @param bool|null $phone_calls
	 * @param bool|null $forward_users
	 * @param bool|null $forward_chats
	 * @param bool|null $groups
	 * @param bool|null $channels
	 * @param int $offset
	 * @param int $limit
	 * @param array|null $hash
	 *
	 * @return contacts_TopPeers
	 * @link https://docs.madelineproto.xyz/API_docs/methods/contacts.getTopPeers.html
	 *
	 */
	public function getTopPeers( $correspondents, $bots_pm, $bots_inline, $phone_calls, $forward_users, $forward_chats, $groups, $channels, $offset, $limit, $hash ) {
	}

	/**
	 * @param InputContact $contacts
	 *
	 * @return contacts_ImportedContacts
	 * @link https://docs.madelineproto.xyz/API_docs/methods/contacts.importContacts.html
	 *
	 */
	public function importContacts( $contacts ) {
	}

	/**
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/contacts.resetSaved.html
	 *
	 */
	public function resetSaved() {
	}

	/**
	 * @param TopPeerCategory $contacts
	 * @param InputPeer $peer
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/contacts.resetTopPeerRating.html
	 *
	 */
	public function resetTopPeerRating( $category, $peer ) {
	}

	/**
	 * @param string $username
	 *
	 * @return contacts_ResolvedPeer
	 * @link https://docs.madelineproto.xyz/API_docs/methods/contacts.resolveUsername.html
	 *
	 */
	public function resolveUsername( $username ) {
	}

	/**
	 * @param string $q
	 * @param int $limit
	 *
	 * @return contacts_Found
	 * @link https://docs.madelineproto.xyz/API_docs/methods/contacts.search.html
	 *
	 */
	public function search( $q, $limit ) {
	}

	/**
	 * @param bool $enabled
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/contacts.toggleTopPeers.html
	 *
	 */
	public function toggleTopPeers( $enabled ) {
	}

	/**
	 * @param InputUser $id
	 *
	 * @return bool
	 * @link https://docs.madelineproto.xyz/API_docs/methods/contacts.unblock.html
	 *
	 */
	public function unblock( $id ) {
	}
}