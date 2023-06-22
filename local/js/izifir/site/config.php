<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/Site.bundle.css',
	'js' => 'dist/Site.bundle.js',
	'rel' => [
		'main.polyfill.core',
		'izifir.core',
	],
	'skip_core' => true,
];