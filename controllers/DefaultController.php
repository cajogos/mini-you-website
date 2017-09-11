<?php

use Cajogos\Biscuit\Template as Template;
use Cajogos\Biscuit\Controller as Controller;

class DefaultController extends Controller
{
	public static function display()
	{
		$tpl = Template::create('pages/index.tpl');
		$tpl->assign('page_title', 'Mini You World');
		$tpl->display();
	}
}