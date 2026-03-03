<?php

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang =[];
}

$lang = array_merge($lang, [
	'AUTH_PROVIDER_OAUTH_SERVICE_NCRS'	=> 'Login with NeedCoolerShoes',
	'NCRS_UNLINK_ERROR' => 'Account cannot be unlinked from NeedCoolerShoes.'
]);
