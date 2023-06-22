<?php
/**
 * @global $APPLICATION CMain
 */
(defined('B_PROLOG_INCLUDED') && B_PROLOG_INCLUDED === true) || die();
require_once(__DIR__ . '/assets/assets.php');
?>

<!doctype html>
<html lang="<?= LANGUAGE_ID ?>">
    <head>
        <?php $APPLICATION->ShowHead(); ?>
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <?php $APPLICATION->ShowPanel(); ?>
        <div data-page>
            <header data-page-header>
                <div data-container>
                    <div data-row>
                        <div data-col="auto">
                            Header
                        </div>
                    </div>
                </div>
            </header>
            <main data-page-main>
                content
