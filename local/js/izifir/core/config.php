<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/Core.bundle.css',
	'js' => 'dist/Core.bundle.js',
	'rel' => [
		'main.polyfill.core',
		'izifir.core.components.layout.reboot',
		'izifir.core.components.layout.grid',
	],
	'skip_core' => true,
];