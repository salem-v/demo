<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/Reboot.bundle.css',
	'js' => 'dist/Reboot.bundle.js',
	'rel' => [
		'main.polyfill.core',
	],
	'skip_core' => true,
];