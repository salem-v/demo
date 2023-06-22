<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/footer_mobile.bundle.css',
	'js' => 'dist/footer_mobile.bundle.js',
	'rel' => [
		'main.polyfill.core',
	],
	'skip_core' => true,
];