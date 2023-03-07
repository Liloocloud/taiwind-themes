<?php
ob_start();
require_once "_Kernel/___Kernel.php";
require_once ROOT_THEME . "__config.theme.php";
require_once ROOT_THEME . "__fun.theme.php";

/**
 * Template engine
 */
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
$inc = new FilesystemLoader(ROOT . 'themes/taiwind/inc/');
$twig = new Environment($inc, [
    'cache' => ROOT . 'cache/',
]);

/**
 * Get configs
 */
$Configs = _get_data_table(TB_OPTIONS);
$Extra['config'] = [];
foreach ($Configs as $Docty) {
    $Extra['config'][$Docty['opt_meta']] = $Docty['opt_values'];
}
if (isset(URL()[0])) {$URL = URL()[0];} else { $URL = 'home';}
	echo $twig->render('doctype.twig', $Extra);
if (!pathinfoURLString(__THEME__['header_pages_disabled'])) {
    echo $twig->render('header.twig', $Extra);
}

/**
 * Leitura das rotas
 */
$ROUTES = new Explore\OpenDirFile(ROOT_THEME_ROUTES);
$ROUTES = $ROUTES->list();
$URL_Q = array_filter(URL());

if (isset($URL_Q[0]) && !empty($URL_Q)) {
    require_once ROOT_THEME . '__routes.php';
    if (is_dir(ROOT_THEME_ROUTES . $URL_Q[0]) && array_key_exists($URL_Q[0], __ROUTES__)) {
        require_once ROOT_THEME_ROUTES . $URL_Q[0] . '/' . __ROUTES__[$URL_Q[0]]['php'];
    } else {
        require_once ROOT_THEME_ROUTES . '404/404.php';
    }
} else {
    require_once ROOT_THEME_ROUTES . 'home/home.php';
}

// Footer
if(!pathinfoURLString(__THEME__['footer_pages_disabled'])){
	echo $twig->render('footer.twig', $Extra);
}
// Copyright
if(!pathinfoURLString(__THEME__['copyright_pages_disabled'])){
	echo $twig->render('copyright.twig', $Extra);
}



ob_end_flush();
_check_filehtaccess();