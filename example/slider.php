<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Главная');

use Bitrix\Main\UI\Extension;

(defined('B_PROLOG_INCLUDED') && B_PROLOG_INCLUDED === true) || die();

CJSCore::Init(['fx']);
Extension::load(['izifir.slider']);
?>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    new BX.Izifir.Slider('[data-slider]', {});
  });
</script>

<section>
    <div data-slider>
        <div data-slider-container>
            <div data-slide style="background: #2c3e50;">
                <span>1</span>
            </div>
            <div data-slide style="background: #fc4349;">
                <span>2</span>
            </div>
            <div data-slide style="background: #229933;">
                <span>3</span>
            </div>
        </div>
    </div>
</section>



<div data-description>
    <div data-container>
        <div data-row style="margin-bottom: 1.5em">
            <div data-col>
                <h3 style="margin-bottom: .5em">Разметка:</h3>

                <div data-code>
                    <pre class="html5" style="font-family:monospace;"><ol><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">section</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">    <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">div</span> data-slider&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">        <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">div</span> data-slider-container&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">            <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">div</span> data-slide <span style="color: #000066;">style</span><span style="color: #66cc66;">=</span><span style="color: #ff0000;">&quot;background: #2c3e50;&quot;</span>&gt;</span></div></li><li style="font-weight: bold; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">                <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">span</span>&gt;</span>1<span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">span</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">            <span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">div</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">            <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">div</span> data-slide <span style="color: #000066;">style</span><span style="color: #66cc66;">=</span><span style="color: #ff0000;">&quot;background: #fc4349;&quot;</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">                <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">span</span>&gt;</span>2<span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">span</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">            <span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">div</span>&gt;</span></div></li><li style="font-weight: bold; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">            <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">div</span> data-slide <span style="color: #000066;">style</span><span style="color: #66cc66;">=</span><span style="color: #ff0000;">&quot;background: #229933;&quot;</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">                <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">span</span>&gt;</span>3<span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">span</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">            <span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">div</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">        <span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">div</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">    <span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">div</span>&gt;</span></div></li><li style="font-weight: bold; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">section</span>&gt;</span></div></li></ol></pre>
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
</style>

<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>
