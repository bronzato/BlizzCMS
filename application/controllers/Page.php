<?php
/**
 * BlizzCMS
 *
 * @author  WoW-CMS
 * @copyright  Copyright (c) 2017 - 2020, WoW-CMS.
 * @license https://opensource.org/licenses/MIT MIT License
 * @link    https://wow-cms.com
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller
{
	public function index($uri = null)
	{
		if (empty($uri) || ! $this->base->find_page($uri))
		{
			show_404();
		}

		$data = [
			'page' => $this->base->get_page($uri)
		];

		$this->template->title(config_item('app_name'), $data['page']->title);

		$this->template->build('page', $data);
	}
}