<?php

//------------------------------------------------------------------------------
//
//  eTraxis - Records tracking web-based system
//  Copyright (C) 2005-2011  Artem Rodygin
//
//  This program is free software: you can redistribute it and/or modify
//  it under the terms of the GNU General Public License as published by
//  the Free Software Foundation, either version 3 of the License, or
//  (at your option) any later version.
//
//  This program is distributed in the hope that it will be useful,
//  but WITHOUT ANY WARRANTY; without even the implied warranty of
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//  GNU General Public License for more details.
//
//  You should have received a copy of the GNU General Public License
//  along with this program.  If not, see <http://www.gnu.org/licenses/>.
//
//------------------------------------------------------------------------------

/**
 * @package eTraxis
 * @ignore
 */

/**#@+
 * Dependency.
 */
require_once('../engine/engine.php');
/**#@-*/

init_page();

if (get_user_level() != USER_LEVEL_ADMIN)
{
    debug_write_log(DEBUG_NOTICE, 'User must have admin rights to be allowed.');
    header('Location: ../index.php');
    exit;
}

// generate breadcrumbs and tabs

$xml = '<breadcrumbs>'
     . '<breadcrumb url="index.php">' . get_html_resource(RES_CONFIGURATION_ID) . '</breadcrumb>'
     . '</breadcrumbs>'
     . '<tabs>'
     . '<tab url="general.php">'     . get_html_resource(RES_GENERAL_INFO_ID)        . '</tab>'
     . '<tab url="security.php">'    . get_html_resource(RES_SECURITY_ID)            . '</tab>'
     . '<tab url="database.php">'    . get_html_resource(RES_DATABASE_ID)            . '</tab>'
     . '<tab url="ldap.php">'        . get_html_resource(RES_ACTIVE_DIRECTORY_ID)    . '</tab>'
     . '<tab url="attachments.php">' . get_html_resource(RES_ATTACHMENTS_ID)         . '</tab>'
     . '<tab url="email.php">'       . get_html_resource(RES_EMAIL_NOTIFICATIONS_ID) . '</tab>'
     . '<tab url="debug.php">'       . get_html_resource(RES_DEBUG_ID)               . '</tab>'
     . '</tabs>';

echo(xml2html($xml, get_html_resource(RES_CONFIGURATION_ID)));

?>
