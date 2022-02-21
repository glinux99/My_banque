<?php
error_reporting(E_ALL | E_STRICT);
// define constants
define('PROJECT_DIR', realpath('./'));
define('LOCALE_DIR', PROJECT_DIR .'/locale');
define('DEFAULT_LOCALE', '');
require('gettext/gettext.inc');
$supported_locales = array('en_US', 'fr_FR');
$encoding = 'UTF-8';
$locale = (isset($_GET['lang']))? $_GET['lang'] : DEFAULT_LOCALE;
// gettext setup
$locale='en_US.UTF-8';
//T_setlocale(LC_MESSAGES, $locale);
setlocale(LC_MESSAGES, $locale);
// Set the text domain as 'messages'
$domain = 'traduction';
bindtextdomain($domain, LOCALE_DIR);
// bind_textdomain_codeset is supported only in PHP 4.2.0+
if (function_exists('bind_textdomain_codeset')) 
  bind_textdomain_codeset($domain, $encoding);
textdomain($domain);

header("Content-type: text/html; charset=$encoding");
?>
