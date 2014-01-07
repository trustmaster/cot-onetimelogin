<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=users.auth.check.query
[END_COT_EXT]
==================== */

defined('COT_CODE') or die('Wrong URL');

$userid       = cot_import('uid', 'G', 'INT');
$onetimelogin = cot_import('otl', 'G', 'TXT');

if ($userid > 0 && !empty($onetimelogin))
{
	$user_select_condition = "user_id = $userid AND user_onetimelogin = " . $db->quote($onetimelogin);
}
