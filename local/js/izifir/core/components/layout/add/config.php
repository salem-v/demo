<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/add.bundle.css',
	'js' => 'dist/add.bundle.js',
	'rel' => [
		'main.polyfill.core',
	],
	'skip_core' => true,
];