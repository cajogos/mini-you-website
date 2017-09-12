<?php

$router = new AltoRouter();

// Index page mapping
$router->map('GET', '/', 'DefaultController::display', 'index');

// Avatar Pages
$router->map('GET', '/avatar/create', 'AvatarController::displayCreate');

/**
 * Function that handles the AltoRouter object - must be present in order for your routes to work
 * @param AltoRouter $router
 */
function handleRouting(AltoRouter $router)
{
	$match = $router->match();
	if ($match && is_callable($match['target']))
	{
		call_user_func_array($match['target'], $match['params']);
	}
	else
	{
		header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
		$tpl = Cajogos\Biscuit\Template::create('pages/404.tpl');
		$tpl->display();
	}
}
handleRouting($router);