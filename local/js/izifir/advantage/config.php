<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/advantage.bundle.css',
	'js' => 'dist/advantage.bundle.js',
	'rel' => [
		'main.polyfill.core',
	],
	'skip_core' => true,
];