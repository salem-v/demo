<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/mobile_menu.bundle.css',
	'js' => 'dist/mobile_menu.bundle.js',
	'rel' => [
		'main.polyfill.core',
		'izifir.animate',
	],
	'skip_core' => true,
];