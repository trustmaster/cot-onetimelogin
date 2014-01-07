<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=tools
[END_COT_EXT]
==================== */

defined('COT_CODE') or die('Wrong URL');

if ($a == 'generate')
{
	cot_check_xg();
	$db->query("UPDATE $db_users SET user_onetimelogin = MD5(RAND())");
	cot_message('Done');
	cot_redirect(cot_url('admin', 'm=other&p=onetimelogin', '', true));
}
elseif ($a == 'clear')
{
	cot_check_xg();
	$db->query("UPDATE $db_users SET user_onetimelogin = ''");
	cot_message('Done');
	cot_redirect(cot_url('admin', 'm=other&p=onetimelogin', '', true));
}

$tt = new XTemplate(cot_tplfile('onetimelogin.tools', 'plug'));

cot_display_messages($tt);

$tt->assign(array(
	'ONETIMELOGIN_GENERATE_URL' => cot_url('admin', 'm=other&p=onetimelogin&a=generate&x='.$sys['xk']),
	'ONETIMELOGIN_CLEAR_URL' => cot_url('admin', 'm=other&p=onetimelogin&a=clear&x='.$sys['xk'])
 ));

$tt->parse();
$plugin_body = $tt->text('MAIN');
