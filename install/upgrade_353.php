<?php
/*======================================================================*\
|| #################################################################### ||
|| # vBulletin 3.6.8 - Licence Number VB1234567890
|| # ---------------------------------------------------------------- # ||
|| # Copyright �2000-2007 Jelsoft Enterprises Ltd. All Rights Reserved. ||
|| # This file may not be redistributed in whole or significant part. # ||
|| # ---------------- VBULLETIN IS NOT FREE SOFTWARE ---------------- # ||
|| # http://www.vbulletin.com | http://www.vbulletin.com/license.html # ||
|| #################################################################### ||
\*======================================================================*/

error_reporting(E_ALL & ~E_NOTICE);

define('THIS_SCRIPT', 'upgrade_353.php');
define('VERSION', '3.5.3');
define('PREV_VERSION', '3.5.2');

$phrasegroups = array();
$specialtemplates = array();

// #############################################################################
// require the code that makes it all work...
require_once('./upgradecore.php');

// #############################################################################
// welcome step
if ($vbulletin->GPC['step'] == 'welcome')
{
	if ($vbulletin->options['templateversion'] == PREV_VERSION)
	{
		echo "<blockquote><p>&nbsp;</p>";
		echo "$vbphrase[upgrade_start_message]";
		echo "<p>&nbsp;</p></blockquote>";
	}
	else
	{
		echo "<blockquote><p>&nbsp;</p>";
		echo "$vbphrase[upgrade_wrong_version]";
		echo "<p>&nbsp;</p></blockquote>";
		print_upgrade_footer();
	}
}


// #############################################################################
if ($vbulletin->GPC['step'] == 1)
{
	// remove the product patch
	$productid = $db->escape_string('vb_calendar352_xss_fix');

	$db->query_write("DELETE FROM " . TABLE_PREFIX . "product WHERE productid = '$productid'");
	$db->query_write("DELETE FROM " . TABLE_PREFIX . "productcode WHERE productid = '$productid'");
	$db->query_write("DELETE FROM " . TABLE_PREFIX . "plugin WHERE product = '$productid'");

	echo '<ul><li>' . $upgrade_phrases['upgrade_353.php']['remove_352_xss_plugin'] . '</li></ul>';

}

// #############################################################################
// FINAL step (notice the SCRIPTCOMPLETE define)
if ($vbulletin->GPC['step'] == 2)
{
	// tell log_upgrade_step() that the script is done
	define('SCRIPTCOMPLETE', true);
}

// #############################################################################

print_next_step();
print_upgrade_footer();

/*======================================================================*\
|| ####################################################################
|| # Downloaded: XXXXXXXXXXXXXXXXXXX
|| # CVS: $RCSfile$ - $Revision: 14440 $
|| ####################################################################
\*======================================================================*/
?>