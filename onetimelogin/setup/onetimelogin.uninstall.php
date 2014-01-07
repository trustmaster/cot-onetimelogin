<?php

defined('COT_CODE') or die('Wrong URL');

global $db_users;

if ($db->query("SHOW COLUMNS FROM `$db_users` WHERE `Field` = 'user_onetimelogin'")->rowCount() == 1)
{
	$db->query("ALTER TABLE `$db_users` DROP COLUMN `user_onetimelogin`");
}
