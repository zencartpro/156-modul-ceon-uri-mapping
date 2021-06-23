<?php

/**
 * Autoloader array for Ceon URI Mapping functionality. Makes sure that Ceon URI Mapping is instantiated at the
 * right point of the Zen Cart initsystem.
 * 
 * @package     ceon_uri_mapping
 * @author      Conor Kerr <zen-cart.uri-mapping@ceon.net>
 * @copyright   Copyright 2008-2019 Ceon
 * @copyright   Copyright 2003-2021 Zen Cart Development Team
 * @copyright   Portions Copyright 2003 osCommerce
 * @link        http://ceon.net/software/business/zen-cart/uri-mapping
 * @license     http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version     $Id: config.ceon_uri_mapping.php 2021-06-23 09:26:10Z webchills $
 */

if (!defined('IS_ADMIN_FLAG')) {
	die('Illegal Access');
} 

$autoLoadConfig[0][] = array(
	'autoType' => 'class',
	'loadFile' => 'class.CeonURIMappingHandler.php'
	);

$autoLoadConfig[95][] = array(
	'autoType' => 'classInstantiate',
	'className' => 'CeonURIMappingHandler',
	'objectName' => 'ceon_uri_mapping'
	);
//torvista added this "manual" autoload to instantiate earlier than using auto.ceon_uri_mapping_link_build.php, for breadcrumbs
$autoLoadConfig[0][] = array(
    'autoType' => 'class',
    'loadFile' => 'observers/class.ceon_uri_mapping_link_build.php'
     );
$autoLoadConfig[165][] = array(
    'autoType' => 'classInstantiate',
    'className' => 'CeonUriMappingLinkBuild',
    'objectName' => 'ceon_uri_mapping_link_build'
     );

$autoLoadConfig[45][] = array(
	'autoType' => 'init_script',
	'loadFile' => 'init_ceon_uri_mapping_sessions.php',
);
