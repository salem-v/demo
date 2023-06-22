<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/example.bundle.css',
	'js' => 'dist/example.bundle.js',
	'rel' => [
		'main.polyfill.core',
	],
	'skip_core' => true,
];