<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Главная');

use Bitrix\Main\UI\Extension;

(defined('B_PROLOG_INCLUDED') && B_PROLOG_INCLUDED === true) || die();

CJSCore::Init(['fx']);
Extension::load(['izifir.mobile_menu', 'izifir.footer_mobile']);
?>
<script>
    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.MobileMenu()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.FooterMobile()
    })
</script>

<div data-footer-mobile class="footer-mobile">
    <div data-container class="container">
        <div data-row="jc-around ai-end">
            <div data-col="3" class="col-3">
                <a href="/" data-footer-mobile="link link--home">
                   <span>Главная</span>
                </a>
            </div>
            <div data-col="3" class="col-3">
                <a href="#" data-footer-mobile="link link--contacts" data-mobile-contacts-toggle>
                    <span>Контакты</span>
                </a>
            </div>
            <div data-col="3" class="col-3">
                <span data-footer-mobile="link link--menu" data-toggle-mobile-menu="footer">
                    <span>Меню</span>
                </span>
            </div>
        </div>
    </div>
</div>

<div class="mobile-contacts" data-mobile-contacts>
    <div data-container>
        <h2>Контакты</h2>
        <h4 data-mobile-contacts="title">Адрес:</h4>
        <a href="#" data-footer-mobile="link" data-mobile-contacts="link">350049, г. Краснодар, ул. Пластунская, 12</a>
        <h4 data-mobile-contacts="title">Телефон:</h4>
        <a href="#" data-footer-mobile="link" data-mobile-contacts="link">8 (800) 550-88-14</a>
        <h4 data-mobile-contacts="title">Почта:</h4>
        <a href="#" data-footer-mobile="link" data-mobile-contacts="link">info@izifir.ru</a>

        <div class="footer__social">
            <div class="row">
                <div class="col-xl-3 col-md-1 col-3">
                    <a href="" class="social_link btn btn__arrow">
                        <picture><img src="\local\templates\.default\assets\img\icons\teleg.svg" alt="teleg" width="24px" height="19px"></picture>
                    </a>
                </div>
                <div class="col-xl-3 col-md-1 col-3">
                    <a href="" class="social_link btn btn__arrow">
                        <picture><img src="\local\templates\.default\assets\img\icons\vk-f.svg" alt="vk" width="24px" height="19px"></picture>
                    </a>
                </div>
                <div class="col-xl-3 col-md-1 col-3">
                    <a href="" class="social_link btn btn__arrow">
                        <picture><img src="\local\templates\.default\assets\img\icons\whatsapp-f.svg" alt="whatsapp" width="24px" height="19px"></picture>
                    </a>
                </div>
                <div class="col-xl-3 col-md-1 col-3">
                    <a href="" class="social_link btn btn__arrow">
                        <picture><img src="\local\templates\.default\assets\img\icons\odnoklasniki.svg" alt="odnoklasniki" width="24px" height="19px"></picture>
                    </a>
                </div>
                <div class="col-xl-3 col-md-1 col-3">
                    <a href="" class="social_link btn btn__arrow">
                        <picture><img src="\local\templates\.default\assets\img\icons\behance.svg" alt="behance" width="24px" height="19px"></picture>
                    </a>
                </div>
                <div class="col-xl-3 col-md-1 col-3">
                    <a href="" class="social_link btn btn__arrow">
                        <picture><img src="\local\templates\.default\assets\img\icons\dribble.svg" alt="dribble" width="24px" height="19px"></picture>
                    </a>
                </div>
                <div class="col-xl-3 col-md-1 col-3">
                    <a href="" class="social_link btn btn__arrow">
                        <picture><img src="\local\templates\.default\assets\img\icons\youtube.svg" alt="youtube" width="24px" height="19px"></picture>
                    </a>
                </div>
                <div class="col-xl-3 col-md-1 col-3">
                    <a href="" class="social_link btn btn__arrow">
                        <picture><img src="\local\templates\.default\assets\img\icons\r.svg" alt="r" width="25px" height="19px"></picture>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<nav data-mobile-nav="footer">
    <div data-mobile-nav="title">
        <p>Меню</p>

        <div class="navigate_button">
            <div class="btn btn__arrow navigate_btn">
                <img src="\local\templates\.default\assets\img\icons\arrow-next.svg" alt="arrow-next" width="8" height="17">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="mobile-nav__menu active" data-level="1">
            <div class="row">
                <div class="col-12">
                    <ul class="mobile-nav__list">
                        <li class="mobile-nav__item">
                            <a href="/" class="mobile-nav__link">
                                Главная
                            </a>
                            <span></span>
                        </li>
                        <li class="mobile-nav__item active">
                            <a href="" class="mobile-nav__link is-parent" data-menu-link>
                                Создание сайтов
                            </a>
                            <span class="menu_link" data-parent="0" data-id="11"></span>
                        </li>
                        <li class="mobile-nav__item active" data-parent="0" data-id="11">
                            <a href="" class="mobile-nav__link is-parent" data-menu-link>
                                Создание сайтов
                            </a>
                            <span></span>
                        </li>
                        <li class="mobile-nav__item active" data-parent="0" data-id="11">
                            <a href="" class="mobile-nav__link is-parent" data-menu-link>
                                Создание сайтов
                            </a>
                            <span></span>
                        </li>
                        <li class="mobile-nav__item active" data-parent="0" data-id="11">
                            <a href="" class="mobile-nav__link is-parent" data-menu-link>
                                Создание сайтов
                            </a>
                            <span></span>
                        </li>
                        <li class="mobile-nav__item active" data-parent="0" data-id="11">
                            <a href="" class="mobile-nav__link is-parent" data-menu-link>
                                Создание сайтов
                            </a>
                            <span></span>
                        </li>
                        <li class="mobile-nav__item active" data-parent="0" data-id="11">
                            <a href="" class="mobile-nav__link is-parent" data-menu-link>
                                Создание сайтов
                            </a>
                            <span></span>
                        </li>
                        <li class="mobile-nav__item active" data-parent="0" data-id="11">
                            <a href="" class="mobile-nav__link is-parent" data-menu-link>
                                Создание сайтов
                            </a>
                            <span></span>
                        </li>
                        <li class="mobile-nav__item active" data-parent="0" data-id="11">
                            <a href="" class="mobile-nav__link is-parent" data-menu-link>
                                Создание сайтов
                            </a>
                            <span></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="mobile-nav__menu" data-level="2" data-id="11">
            <div class="row">
                <div class="col-12">
                    <ul class="mobile-nav__list">
                        <li class="mobile-nav__item">
                            <a href="/" class="mobile-nav__link is-active">
                                Главная
                            </a>
                            <span class="menu_link" data-parent="11" data-id="21"></span>
                        </li>
                        <li class="mobile-nav__item" data-parent="11" data-id="21">
                            <a href="/" class="mobile-nav__link is-active" data-id-level="2">
                                Разработка мобильных приложений
                            </a>
                            <span></span>
                        </li>
                        <li class="mobile-nav__item" data-parent="11" data-id="21">
                            <a href="/" class="mobile-nav__link is-active" data-id-level="2">
                                Главная
                            </a>
                            <span></span>
                        </li>
                        <li class="mobile-nav__item" data-parent="11" data-id="21">
                            <a href="/" class="mobile-nav__link is-active" data-id-level="2">
                                Техническая поддержка Битрикс24
                            </a>
                            <span></span>
                        </li>
                        <li class="mobile-nav__item" data-parent="11" data-id="21">
                            <a href="/" class="mobile-nav__link is-active" data-id-level="2">
                                Главная
                            </a>
                            <span></span>
                        </li>
                        <li class="mobile-nav__item" data-parent="11" data-id="21">
                            <a href="/" class="mobile-nav__link is-active" data-id-level="2">
                                Главная
                            </a>
                            <span></span>
                        </li>
                        <li class="mobile-nav__item" data-parent="11" data-id="21">
                            <a href="/" class="mobile-nav__link is-active" data-id-level="2">
                                Главная
                            </a>
                            <span></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="mobile-nav__menu" data-level="3" data-id="21">
            <div class="row">
                <div class="col-12">
                    <ul class="mobile-nav__list">
                        <li class="mobile-nav__item">
                            <a href="/" class="mobile-nav__link">
                                Главная
                            </a>
                        </li>
                        <li class="mobile-nav__item active">
                            <a href="" class="mobile-nav__link">
                                Создание сайтов
                            </a>
                        </li>
                        <li class="mobile-nav__item active">
                            <a href="" class="mobile-nav__link">
                                Создание сайтов
                            </a>
                        </li>
                        <li class="mobile-nav__item active">
                            <a href="" class="mobile-nav__link">
                                Создание сайтов
                            </a>
                        </li>
                        <li class="mobile-nav__item active">
                            <a href="" class="mobile-nav__link">
                                Создание сайтов
                            </a>
                        </li>
                        <li class="mobile-nav__item active">
                            <a href="" class="mobile-nav__link">
                                Создание сайтов
                            </a>
                        </li>
                        <li class="mobile-nav__item active">
                            <a href="" class="mobile-nav__link">
                                Создание сайтов
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>

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
