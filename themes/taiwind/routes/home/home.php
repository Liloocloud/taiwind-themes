<?php
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
Use Generic\Read;

$ThisRoute = new FilesystemLoader(ROOT_THEME_ROUTES.'home/');
$ThieTwig = new Environment($ThisRoute, [
	// 'cache' => ROOT . 'cache/'
]);

$Users = _get_data_table(TB_ACCOUNTS);
$Extra['accounts'] = $Users;

// $Ads = new Read(TB_ACCOUNTS);
// $Extra['ads'] = $Ads->getArray(['ads_account_id' => 16], 1)['output'];
// $Extra['pagination'] = $Ads->Pagination()['output'];

echo $ThieTwig->render('home.twig', $Extra);
