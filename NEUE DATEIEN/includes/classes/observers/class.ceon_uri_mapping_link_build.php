<?php

/**torvista: changed from auto as not loaded soon enough for breadcrumbs
 * Observer for Ceon URI Mapping link creation. Watches html_output.php function zen_href_link
 *
 * @package     ceon_uri_mapping
 * @author      Conor Kerr <zen-cart.uri-mapping@ceon.net>
 * @author      torvista
 * @copyright   Copyright 2008-2019 Ceon
 * @copyright   Copyright 2003-2007 Zen Cart Development Team
 * @copyright   Portions Copyright 2003 osCommerce
 * @link        https://github.com/torvista/CEON-URI-Mapping
 * @license     http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version     2016
 */
class CeonUriMappingLinkBuild extends base
{
		public function __construct()
		{
				$this->attach($this, array('NOTIFY_SEFU_INTERCEPT'));//OOP. Called from function zen_href_link (html_output.php)
				//global $zco_notifier;//if notifier is in procedural code
				//$zco_notifier->attach($this, array('NOTIFY_SEFU_INTERCEPT'));
		
		}
		
		public function updateNotifySefuIntercept(&$callingClass, $notifier, $p1, &$link, $page, $parameters, $connection, $add_session_id, $static, &$use_dir_ws_catalog)//& required for &$link to modify it inside here
		{
				if (!(defined('CEON_URI_MAPPING_ENABLED') && CEON_URI_MAPPING_ENABLED == 1 && $static == false)) {
					return;
				}
				
				static $ceon_uri_mapping_href_link_builder;
				
				if (!isset($ceon_uri_mapping_href_link_builder)) {
				
						require_once(DIR_WS_CLASSES . 'class.CeonURIMappingHREFLinkBuilder.php');
						
						$ceon_uri_mapping_href_link_builder = new CeonURIMappingHREFLinkBuilder();
				}
				
				$temp_link = HTTP_SERVER;
				
				if ($connection == 'SSL' && ENABLE_SSL == 'true') {
						$temp_link = HTTPS_SERVER;
				}
				
				if ($ceon_uri_mapping_href_link_builder->buildHREFLink($temp_link, $page, $parameters, $connection, $add_session_id)) {
						$link = $ceon_uri_mapping_href_link_builder->getHREFLink();
				}
		}
		
		public function update(&$callingClass, $notifier, $p1, &$link, $page, $parameters, $connection, $add_session_id, $static, &$use_dir_ws_catalog)//& required for &$link to modify it inside here
		{
				if (!(defined('CEON_URI_MAPPING_ENABLED') && CEON_URI_MAPPING_ENABLED == 1 && $static == false)) {
					trigger_error('closed', E_USER_WARNING);
					return;
				}
				
				$this->updateNotifySefuIntercept($callingClass, $notifier, $p1, $link, $page, $parameters, $connection, $add_session_id, $static, $use_dir_ws_catalog);
		}
}