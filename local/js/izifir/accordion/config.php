<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/Accordion.bundle.css',
	'js' => 'dist/Accordion.bundle.js',
	'rel' => [
		'main.core',
		'izifir.animate',
	],
	'skip_core' => false,
];