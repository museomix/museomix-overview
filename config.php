<?php
header('Content-Type: text/html; charset=utf-8');

ini_set('display_errors', '1');
$locale = 'fr_FR.utf8';
if (isset($GET['lang']))
	$locale = $_GET['lang'];
putenv('LANG='.$locale);
$lang = explode('.', $locale);
$lang = $lang[0];
setlocale(LC_ALL, $locale);

$domain = 'overview';
bindtextdomain($domain, './lang');
bind_textdomain_codeset($domain, 'UTF-8');
textdomain($domain);

?>