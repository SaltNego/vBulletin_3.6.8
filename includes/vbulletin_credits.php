<?php
/*======================================================================*\
|| #################################################################### ||
|| # vBulletin 3.6.8 - Licence Number VB1234567890
|| # ---------------------------------------------------------------- # ||
|| # Copyright 2000-2007 Jelsoft Enterprises Ltd. All Rights Reserved. ||
|| # This file may not be redistributed in whole or significant part. # ||
|| # ---------------- VBULLETIN IS NOT FREE SOFTWARE ---------------- # ||
|| # http://www.vbulletin.com | http://www.vbulletin.com/license.html # ||
|| #################################################################### ||
\*======================================================================*/

if (!isset($GLOBALS['vbulletin']->db))
{
	exit;
}

// display the credits table for use in admin/mod control panels

print_form_header('index', 'home');
print_table_header($vbphrase['vbulletin_developers_and_contributors']);
print_column_style_code(array('white-space: nowrap', ''));
print_label_row('<b>' . $vbphrase['software_developed_by'] . '</b>', '
	<a>Jelsoft Enterprises Limited</a>
', '', 'top', NULL, false);
print_label_row('<b>' . $vbphrase['product_manager'] . '</b>', '
	<a>Kier Darby</a>,
	<a>John Percival</a>
', '', 'top', NULL, false);
print_label_row('<b>' . $vbphrase['business_development'] . '</b>', '
	<a>James Limm</a>,
	<a>Ashley Busby</a>
', '', 'top', NULL, false);
print_label_row('<b>' . $vbphrase['software_development'] . '</b>', '
	<a>Kier Darby</a>,
	<a>Freddie Bingham</a>,
	<a>Scott MacVicar</a>,
	<a>Mike Sullivan</a>,
	<a>Jerry Hutchings</a>,
	<a>Andreas Kirbach</a>
', '', 'top', NULL, false);
print_label_row('<b>' . $vbphrase['graphics_development'] . '</b>', '
	<a>Kier Darby</a>,
	<a>Fabio Passaro</a>
', '', 'top', NULL, false);
print_label_row('<b>' . $vbphrase['other_contributions_from'] . '</b>', '
	<a>Jake Bunce</a>,
	<a>Doron Rosenberg</a>,
	<a>Overgrow</a>,
	<a>Kevin Schumacher</a>,
	<a>Chen Avinadav</a>,
	<a>Floris Fiedeldij Dop</a>,
	<a>Stephan \'pogo\' Pogodalla</a>,
	<a>Michael \'Mystics\' K&ouml;nig</a>,
	<a>Torstein H&oslash;nsi</a>,
	<a>Mark James</a>
', '', 'top', NULL, false);
print_label_row('<b>' . $vbphrase['copyright_enforcement_by'] . '</b>', '
	<a>Pirate Reports</a>
', '', 'top', NULL, false);
print_table_footer();

/*======================================================================*\
|| ####################################################################
|| # Downloaded: XXXXXXXXXXXXXXXXXXX
|| # CVS: $RCSfile$ - $Revision: 17340 $
|| ####################################################################
\*======================================================================*/
?>