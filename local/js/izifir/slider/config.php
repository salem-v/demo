<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/slider.bundle.css',
	'js' => 'dist/slider.bundle.js',
	'rel' => [
		'main.polyfill.core',
		'ui.core',
		'izifir.animate',
	],
	'skip_core' => true,
];