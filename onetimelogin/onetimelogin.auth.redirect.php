<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=users.auth.check.done
[END_COT_EXT]
==================== */

defined('COT_CODE') or die('Wrong URL');

if (!empty($onetimelogin))
{
	// clear the token
	$db->query("UPDATE $db_users SET user_onetimelogin = '' WHERE user_id = $ruserid");
	// redirect to profile settings
	cot_redirect(cot_url('users', 'm=profile', '', TRUE));
}
