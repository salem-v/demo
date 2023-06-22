<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/Animate.bundle.css',
	'js' => 'dist/Animate.bundle.js',
	'rel' => [
		'main.polyfill.core',
	],
	'skip_core' => true,
];