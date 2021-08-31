<?php

/**
 * Configuration file.
 * This file is auto-generated.
 *
 * @package Config
 *
 * @copyright YetiForce Sp. z o.o
 * @license   YetiForce Public License 4.0 (licenses/LicenseEN.txt or yetiforce.com)
 */

namespace Config\Modules;

/**
 * Configuration file: Config\Modules\SQuotes.
 */
class SQuotes
{
	/** List of fields read from related module */
	public static $INVENTORY_ON_SELECT_AUTO_COMPLETE = [
		'description' => ['ref' => 'getInventoryListName'],
		'price' => ['ref' => 'getInventoryPrice'],
	];
}
