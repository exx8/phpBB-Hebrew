<?php
/**
*
* acp_extensions [Hebrew]
*
* @package language
* @copyright (c) 2005 phpBB Group
* @author 2008 - phpBB הישראלי - phpBB.co.il
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}


// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine


$lang = array_merge($lang, array(
	'EXTENSION'					=> 'תוסף',
	'EXTENSIONS'				=> 'תוספות',
	'EXTENSIONS_ADMIN'			=> 'מנהל התוספות',
	'EXTENSIONS_EXPLAIN'		=> 'מנהלים התוספות הוא כלי במערכת הphpBB שלך שמאפשרת לך למנהל את כל התוספות שלך, מצבם וצפיה במידע אודותם.',
		'EXTENSION_INVALID_LIST'	=> 'The “%s” extension is not valid.<br />%s<br /><br />',
	'EXTENSION_NOT_AVAILABLE'	=> 'The selected extension is not available for this board, please verify your phpBB and PHP versions are allowed (see the details page).',

	'DETAILS'				=> 'Details',

	'EXTENSIONS_DISABLED'	=> 'Disabled Extensions',
	'EXTENSIONS_ENABLED'	=> 'Enabled Extensions',

	'EXTENSION_DELETE_DATA'	=> 'Delete data',
	'EXTENSION_DISABLE'		=> 'Disable',
	'EXTENSION_ENABLE'		=> 'Enable',

	'EXTENSION_DELETE_DATA_EXPLAIN'	=> 'Deleting an extension’s data removes all of its data and settings. The extension files are retained so it can be enabled again.',
	'EXTENSION_DISABLE_EXPLAIN'		=> 'Disabling an extension retains its files, data and settings but removes any functionality added by the extension.',
	'EXTENSION_ENABLE_EXPLAIN'		=> 'Enabling an extension allows you to use it on your board.',

	'EXTENSION_DELETE_DATA_IN_PROGRESS'	=> 'The extension’s data is currently being deleted. Please do not leave or refresh this page until it is completed.',
	'EXTENSION_DISABLE_IN_PROGRESS'	=> 'The extension is currently being disabled. Please do not leave or refresh this page until it is completed.',
	'EXTENSION_ENABLE_IN_PROGRESS'	=> 'The extension is currently being enabled. Please do not leave or refresh this page until it is completed.',

	'EXTENSION_DELETE_DATA_SUCCESS'	=> 'The extension’s data was deleted successfully',
	'EXTENSION_DISABLE_SUCCESS'		=> 'The extension was disabled successfully',
	'EXTENSION_ENABLE_SUCCESS'		=> 'The extension was enabled successfully',

	'EXTENSION_NAME'		=> 'Extension Name',
	'EXTENSION_ACTIONS'		=> 'Actions',
	'EXTENSION_OPTIONS'		=> 'Options',

	'EXTENSION_DELETE_DATA_CONFIRM'	=> 'Are you sure that you wish to delete the data associated with “%s”?<br /><br />This removes all of its data and settings and cannot be undone!',
	'EXTENSION_DISABLE_CONFIRM'		=> 'Are you sure that you wish to disable the “%s” extension?',
	'EXTENSION_ENABLE_CONFIRM'		=> 'Are you sure that you wish to enable the “%s” extension?',

	'RETURN_TO_EXTENSION_LIST'	=> 'Return to the extension list',

	'EXT_DETAILS'			=> 'פרטי התוספת',
	'DISPLAY_NAME'			=> 'שם מוצג',
	'CLEAN_NAME'			=> 'שם נקי',
	'TYPE'					=> 'סוג',
	'DESCRIPTION'			=> 'תיאור',
	'VERSION'				=> 'גרסא',
	'HOMEPAGE'				=> 'דף הבית',
	'PATH'					=> 'File Path',
	'TIME'					=> 'זמן שחרור',
	'LICENCE'				=> 'רשיון',

	'REQUIREMENTS'			=> 'דרישות',
	'PHPBB_VERSION'			=> 'גרסת phpBB',
	'PHP_VERSION'			=> 'גרסת PHP',
	'AUTHOR_INFORMATION'	=> 'מידע אודות היוצר',
	'AUTHOR_NAME'			=> 'שם',
	'AUTHOR_EMAIL'			=> 'דואר אלקטורני',
	'AUTHOR_HOMEPAGE'		=> 'דף הבית',
	'AUTHOR_ROLE'			=> 'תפקיד',
));