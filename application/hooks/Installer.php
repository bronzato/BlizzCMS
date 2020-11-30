<?php
/**
 * BlizzCMS
 *
 * @author  WoW-CMS
 * @copyright   Copyright (c) 2019-2020, WoW-CMS (https://wow-cms.com/)
 * @license http://opensource.org/licenses/MIT  MIT License
 * @link    https://wow-cms.com
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Installer
{
	public function initialize()
	{
		$CI =& get_instance();

		if ($CI->config->item('installer_blocked') == NULL && !in_array($CI->uri->segment(1), ['install']))
		{
			redirect('install');
		}
	}
}