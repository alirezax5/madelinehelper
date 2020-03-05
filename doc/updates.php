<?php


namespace doc;


use types\{InputChannel, ChannelMessagesFilter, updates_ChannelDifference, updates_Difference, updates_State};

class updates {

	/**
	 * @param bool $force
	 * @param InputChannel $channel
	 * @param ChannelMessagesFilter $filter
	 * @param int $pts
	 * @param int $limit
	 *
	 * @return updates_ChannelDifference
	 * @link https://docs.madelineproto.xyz/API_docs/methods/updates.getChannelDifference.html
	 *
	 */
	public function getChannelDifference( $force, $channel, $filter, $pts, $limit ) {
	}

	/**
	 * @param int $pts_total_limit
	 * @param int $date
	 * @param int $qts
	 * @param int $pts
	 *
	 * @return updates_Difference
	 * @link https://docs.madelineproto.xyz/API_docs/methods/updates.getDifference.html
	 *
	 */
	public function getDifference( $pts, $pts_total_limit, $date, $qts ) {
	}

	/**
	 *
	 * @return updates_State
	 * @link https://docs.madelineproto.xyz/API_docs/methods/updates.getState.html
	 *
	 */
	public function getState() {
	}
}