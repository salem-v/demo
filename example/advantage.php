<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Главная');

use Bitrix\Main\UI\Extension;

(defined('B_PROLOG_INCLUDED') && B_PROLOG_INCLUDED === true) || die();

CJSCore::Init(['fx']);
Extension::load(['izifir.advantage']);
?>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        new BX.Izifir.Advantage();
    });
</script>

<div data-container>
    <div data-row>
        <div data-col>
            <h1>Блок "Преимущества"</h1>
        </div>
    </div>
</div>

<div data-advantage>
    <div data-container>
        <div data-row>
            <div data-col="md-4">
                <div data-advantage="row">
                    <div data-advantage="picture">
                        <picture>
                            <img src="https://placehold.co/600x400" alt="img" width="300" height="200"
                                 data-advantage="img">
                        </picture>
                    </div>
                    <h3 data-advantage="title">Lorem ipsum dolor sit amet</h3>
                    <div data-advantage="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum
                        tempor sodales ultricies. Cras rhoncus nibh quis ultrices pellentesque. Sed non fringilla ante,
                        nec semper justo. Aenean pharetra a sem nec bibendum. Fusce ante purus, suscipit et eros at,
                        iaculis imperdiet ipsum. Curabitur nec commodo lacus, id maximus libero.
                    </div>
                </div>
            </div>
            <div data-col="md-4">
                <div data-advantage="row">
                    <div data-advantage="picture">
                        <picture>
                            <img src="https://placehold.co/600x400" alt="img" width="300" height="200"
                                 data-advantage="img">
                        </picture>
                    </div>
                    <h3 data-advantage="title">Lorem ipsum dolor sit amet</h3>
                    <div data-advantage="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum
                        tempor sodales ultricies. Cras rhoncus nibh quis ultrices pellentesque. Sed non fringilla ante,
                        nec semper justo. Aenean pharetra a sem nec bibendum. Fusce ante purus, suscipit et eros at,
                        iaculis imperdiet ipsum. Curabitur nec commodo lacus, id maximus libero.
                    </div>
                </div>
            </div>
            <div data-col="md-4">
                <div data-advantage="row">
                    <div data-advantage="picture">
                        <picture>
                            <img src="https://placehold.co/600x400" alt="img" width="300" height="200"
                                 data-advantage="img">
                        </picture>
                    </div>
                    <h3 data-advantage="title">Lorem ipsum dolor sit amet</h3>
                    <div data-advantage="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum
                        tempor sodales ultricies. Cras rhoncus nibh quis ultrices pellentesque. Sed non fringilla ante,
                        nec semper justo. Aenean pharetra a sem nec bibendum. Fusce ante purus, suscipit et eros at,
                        iaculis imperdiet ipsum. Curabitur nec commodo lacus, id maximus libero.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div data-description>
    <div data-container>
        <div data-row style="margin-bottom: 1.5em">
            <div data-col>
                <h3 style="margin-bottom: .5em">Разметка:</h3>

                <div data-code>
                    <pre class="html5" style="font-family:monospace;"><ol><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">div</span> data-advantage&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">    <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">div</span> data-container&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">        <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">div</span> data-row&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">            <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">div</span> data-col<span style="color: #66cc66;">=</span><span style="color: #ff0000;">&quot;md-4&quot;</span>&gt;</span></div></li><li style="font-weight: bold; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">                <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">div</span> data-advantage<span style="color: #66cc66;">=</span><span style="color: #ff0000;">&quot;row&quot;</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">                    <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">div</span> data-advantage<span style="color: #66cc66;">=</span><span style="color: #ff0000;">&quot;picture&quot;</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">                        <span style="color: #009900;">&lt;picture&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">                            <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">img</span> <span style="color: #000066;">src</span><span style="color: #66cc66;">=</span><span style="color: #ff0000;">&quot;...&quot;</span> <span style="color: #000066;">alt</span><span style="color: #66cc66;">=</span><span style="color: #ff0000;">&quot;img&quot;</span> <span style="color: #000066;">width</span><span style="color: #66cc66;">=</span><span style="color: #ff0000;">&quot;300&quot;</span> <span style="color: #000066;">height</span><span style="color: #66cc66;">=</span><span style="color: #ff0000;">&quot;200&quot;</span> data-advantage<span style="color: #66cc66;">=</span><span style="color: #ff0000;">&quot;img&quot;</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">                        <span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span>picture&gt;</span></div></li><li style="font-weight: bold; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">                    <span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">div</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">                    <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">h3</span> data-advantage<span style="color: #66cc66;">=</span><span style="color: #ff0000;">&quot;title&quot;</span>&gt;</span>Lorem ipsum dolor sit amet<span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">h3</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">                    <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">div</span> data-advantage<span style="color: #66cc66;">=</span><span style="color: #ff0000;">&quot;text&quot;</span>&gt;</span>Lorem ipsum dolor sit amet, consectetur dipiscing elit. Vestibulum tempor sodales...</div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">                    <span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">div</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">                <span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">div</span>&gt;</span></div></li><li style="font-weight: bold; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">            <span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">div</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">            <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">div</span> data-col<span style="color: #66cc66;">=</span><span style="color: #ff0000;">&quot;md-4&quot;</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">                <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">div</span> data-advantage<span style="color: #66cc66;">=</span><span style="color: #ff0000;">&quot;row&quot;</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">                    <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">div</span> data-advantage<span style="color: #66cc66;">=</span><span style="color: #ff0000;">&quot;picture&quot;</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">                        <span style="color: #009900;">&lt;picture&gt;</span></div></li><li style="font-weight: bold; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">                            <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">img</span> <span style="color: #000066;">src</span><span style="color: #66cc66;">=</span><span style="color: #ff0000;">&quot;...&quot;</span> <span style="color: #000066;">alt</span><span style="color: #66cc66;">=</span><span style="color: #ff0000;">&quot;img&quot;</span> <span style="color: #000066;">width</span><span style="color: #66cc66;">=</span><span style="color: #ff0000;">&quot;300&quot;</span> <span style="color: #000066;">height</span><span style="color: #66cc66;">=</span><span style="color: #ff0000;">&quot;200&quot;</span> data-advantage<span style="color: #66cc66;">=</span><span style="color: #ff0000;">&quot;img&quot;</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">                        <span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span>picture&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">                    <span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">div</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">                    <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">h3</span> data-advantage<span style="color: #66cc66;">=</span><span style="color: #ff0000;">&quot;title&quot;</span>&gt;</span>Lorem ipsum dolor sit amet<span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">h3</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">                    <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">div</span> data-advantage<span style="color: #66cc66;">=</span><span style="color: #ff0000;">&quot;text&quot;</span>&gt;</span>Lorem ipsum dolor sit amet, consectetur dipiscing elit. Vestibulum tempor sodales...</div></li><li style="font-weight: bold; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">                    <span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">div</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">                <span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">div</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">            <span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">div</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">            <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">div</span> data-col<span style="color: #66cc66;">=</span><span style="color: #ff0000;">&quot;md-4&quot;</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">                <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">div</span> data-advantage<span style="color: #66cc66;">=</span><span style="color: #ff0000;">&quot;row&quot;</span>&gt;</span></div></li><li style="font-weight: bold; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">                    <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">div</span> data-advantage<span style="color: #66cc66;">=</span><span style="color: #ff0000;">&quot;picture&quot;</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">                        <span style="color: #009900;">&lt;picture&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">                            <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">img</span> <span style="color: #000066;">src</span><span style="color: #66cc66;">=</span><span style="color: #ff0000;">&quot;...&quot;</span> <span style="color: #000066;">alt</span><span style="color: #66cc66;">=</span><span style="color: #ff0000;">&quot;img&quot;</span> <span style="color: #000066;">width</span><span style="color: #66cc66;">=</span><span style="color: #ff0000;">&quot;300&quot;</span> <span style="color: #000066;">height</span><span style="color: #66cc66;">=</span><span style="color: #ff0000;">&quot;200&quot;</span> data-advantage<span style="color: #66cc66;">=</span><span style="color: #ff0000;">&quot;img&quot;</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">                        <span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span>picture&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">                    <span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">div</span>&gt;</span></div></li><li style="font-weight: bold; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">                    <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">h3</span> data-advantage<span style="color: #66cc66;">=</span><span style="color: #ff0000;">&quot;title&quot;</span>&gt;</span>Lorem ipsum dolor sit amet<span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">h3</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">                    <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">div</span> data-advantage<span style="color: #66cc66;">=</span><span style="color: #ff0000;">&quot;text&quot;</span>&gt;</span>Lorem ipsum dolor sit amet, consectetur dipiscing elit. Vestibulum tempor sodales...</div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">                    <span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">div</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">                <span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">div</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">            <span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">div</span>&gt;</span></div></li><li style="font-weight: bold; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">        <span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">div</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">    <span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">div</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">div</span>&gt;</span></div></li></ol></pre>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    pre ol {
        list-style: decimal;
        white-space: pre;
    }

    [data-code] {
        padding: .5em;
        background-color: #eee;
    }

    [data-description] {
        margin: 1.75rem;
    }
</style>

<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>
