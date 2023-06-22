<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/margins.bundle.css',
	'js' => 'dist/margins.bundle.js',
	'rel' => [
		'main.polyfill.core',
	],
	'skip_core' => true,
];