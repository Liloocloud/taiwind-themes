<?php

ob_start();
require_once "_Kernel/___Kernel.php";

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$inc = new FilesystemLoader(ROOT.'themes/taiwind/inc/');
$twig = new Environment($inc, [
	// 'cache' => ROOT . 'cache/'
]);

echo $twig->render('doctype.twig', $Extra);
echo $twig->render('header.twig', $Extra);


/**
 * Leitura das rotas
 */
$ROUTES = new Explore\OpenDirFile(ROOT_THEME_ROUTES); 
$ROUTES = $ROUTES->list();
$URL_Q = array_filter(URL());

if(isset($URL_Q[0]) && !empty($URL_Q)){
	require_once ROOT_THEME.'__routes.php';
	if(is_dir(ROOT_THEME_ROUTES.$URL_Q[0]) && array_key_exists($URL_Q[0], __ROUTES__)){
		require_once ROOT_THEME_ROUTES.$URL_Q[0].'/'.__ROUTES__[$URL_Q[0]]['php'];
	}else{
		require_once ROOT_THEME_ROUTES.'404/404.php';
	}
}else{
	require_once ROOT_THEME_ROUTES.'home/home.php';
}

echo $twig->render('footer.twig', $Extra);
echo $twig->render('copyright.twig', $Extra);
ob_end_flush();