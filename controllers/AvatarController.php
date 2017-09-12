<?php

use Cajogos\Biscuit\Template as Template;
use Cajogos\Biscuit\Controller as Controller;

class AvatarController extends Controller
{
	public static function displayCreate()
	{
		$tpl = Template::create('pages/avatar/create.tpl');
		$tpl->assign('page_title', 'Avatar Creator - Mini You World');
		$tpl->display();
	}
}