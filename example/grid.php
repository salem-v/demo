<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Главная');

use Bitrix\Main\UI\Extension;

(defined('B_PROLOG_INCLUDED') && B_PROLOG_INCLUDED === true) || die();

Extension::load(['izifir.example']);
?>
<script>
    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Example()
    })
</script>

<!--region Container-->
<div data-section>
    <div data-container="fluid">
        <div data-container>
            <h2 data-title>Container fluid</h2>
            <div data-text>Контейнер на всю ширину</div>
        </div>
        <div data-row>
            <div data-col data-style="col">col</div>
            <div data-col data-style="col">col</div>
            <div data-col data-style="col">col</div>
        </div>
        <div data-container>
            <code>
            <textarea disabled data-style="highlight" style="height: 160px">
                <div data-container="fluid">
                    <div data-row>
                        <div data-col>col</div>
                        <div data-col>col</div>
                        <div data-col>col</div>
                    </div>
                </div>
            </textarea>
            </code>
        </div>
    </div>
</div>

<section data-section>
    <div data-container>
        <h2 data-title>Container</h2>
        <h3 data-title="sec">col, col-auto, col-*</h3>
        <div data-row>
            <div data-col data-style="col">col</div>
            <div data-col data-style="col">col</div>
            <div data-col data-style="col">col</div>
            <div data-col data-style="col">col</div>
        </div>
        <div data-row>
            <div data-col data-style="col">col</div>
            <div data-col="auto" data-style="col">col-auto</div>
        </div>
        <div data-row>
            <div data-col="2" data-style="col">col-2</div>
            <div data-col="4" data-style="col">col-4</div>
            <div data-col="5" data-style="col">col-5</div>
            <div data-col="1" data-style="col">col-1</div>
        </div>
        <code>
            <textarea disabled data-style="highlight" style="height: 370px">
                <div data-container>
                    <div data-row>
                        <div data-col>col</div>
                        <div data-col>col</div>
                        <div data-col>col</div>
                        <div data-col>col</div>
                    </div>
                    <div data-row>
                        <div data-col>col</div>
                        <div data-col="auto">col-auto</div>
                    </div>
                    <div data-row>
                        <div data-col="2">col-2</div>
                        <div data-col="4">col-4</div>
                        <div data-col="5">col-5</div>
                        <div data-col="1">col-1</div>
                    </div>
                </div>
            </textarea>
        </code>

        <h3 data-title="sec">row-cols</h3>
        <div data-text>Используйте адаптивные .row-cols-* классы, чтобы быстро установить количество столбцов, которые лучше всего отображают ваш контент и макет. В то время как обычные .col-* классы применяются к отдельным столбцам (например, .col-md-4), классы столбцов строк устанавливаются для родительского элемента .row как ярлык. С помощью .row-cols-auto вы можете придать столбцам их естественную ширину.</div>
        <div data-row data-row-cols="4">
            <div data-col="col" data-style="col">col-3</div>
            <div data-col="col" data-style="col">col-3</div>
            <div data-col="col" data-style="col">col-3</div>
            <div data-col="col" data-style="col">col-3</div>
        </div>
        <code>
            <textarea disabled data-style="highlight" style="height: 180px">
                <div data-container>
                    <div data-row data-row-cols="4">
                        <div data-col="col">col-3</div>
                        <div data-col="col">col-3</div>
                        <div data-col="col">col-3</div>
                        <div data-col="col">col-3</div>
                    </div>
                </div>
            </textarea>
        </code>
    </div>
</section>
<!--endregion-->

<section data-section>
    <div data-container>
        <h2 data-title>Flex-direction</h2>
        <div data-text>Свойство управляет направлением основной оси внутри флекс-контейнера</div>
        <h3 data-title="sec">row, column, reverse, row-reverse, column-reverse</h3>
        <div data-row="fd-row" data-style="row-b">
            <div data-col="3" data-style="col">col 1</div>
            <div data-col="3" data-style="col">col-2</div>
            <div data-col="3" data-style="col">col-3</div>
        </div>
        <div data-row="fd-column" data-style="row-b">
            <div data-col="3" data-style="col">col-1</div>
            <div data-col="3" data-style="col">col-2</div>
            <div data-col="3" data-style="col">col-3</div>
        </div>
        <div data-row="fd-row-reverse" data-style="row-b">
            <div data-col="3" data-style="col">col-1</div>
            <div data-col="3" data-style="col">col-2</div>
            <div data-col="3" data-style="col">col-3</div>
        </div>
        <div data-row="fd-column-reverse" data-style="row-b">
            <div data-col="3" data-style="col">col-1</div>
            <div data-col="3" data-style="col">col-2</div>
            <div data-col="3" data-style="col">col-3</div>
        </div>
        <code>
            <textarea disabled data-style="highlight" style="height: 435px">
                <div data-container>
                    <div data-row="fd-row">
                        <div data-col="3">col 1</div>
                        <div data-col="3">col-2</div>
                        <div data-col="3">col-3</div>
                    </div>
                    <div data-row="fd-column">
                        <div data-col="3">col-1</div>
                        <div data-col="3">col-2</div>
                        <div data-col="3">col-3</div>
                    </div>
                    <div data-row="fd-row-reverse">
                        <div data-col="3">col-1</div>
                        <div data-col="3">col-2</div>
                        <div data-col="3">col-3</div>
                    </div>
                    <div data-row="fd-column-reverse">
                        <div data-col="3">col-1</div>
                        <div data-col="3">col-2</div>
                        <div data-col="3">col-3</div>
                    </div>
                </div>
            </textarea>
        </code>
    </div>
</section>

<section data-section>
    <div data-container>
        <h2 data-title>Justify-content</h2>
        <div data-text>Для выравнивания столбцов по горизонтали</div>
        <h3 data-title="sec">between, around, evenly, end, center, start</h3>
        <div data-row="jc-between" data-style="row-b">
            <div data-col="3" data-style="col">col-3</div>
            <div data-col="3" data-style="col">col-3</div>
            <div data-col="3" data-style="col">col-3</div>
        </div>
        <div data-row="jc-around" data-style="row-b">
            <div data-col="3" data-style="col">col-3</div>
            <div data-col="3" data-style="col">col-3</div>
            <div data-col="3" data-style="col">col-3</div>
        </div>
        <div data-row="jc-evenly" data-style="row-b">
            <div data-col="3" data-style="col">col-3</div>
            <div data-col="3" data-style="col">col-3</div>
            <div data-col="3" data-style="col">col-3</div>
        </div>
        <div data-row="jc-end" data-style="row-b">
            <div data-col="3" data-style="col">col-3</div>
            <div data-col="3" data-style="col">col-3</div>
            <div data-col="3" data-style="col">col-3</div>
        </div>
        <div data-row="jc-center" data-style="row-b">
            <div data-col="3" data-style="col">col-3</div>
            <div data-col="3" data-style="col">col-3</div>
            <div data-col="3" data-style="col">col-3</div>
        </div>
        <div data-row="jc-start" data-style="row-b">
            <div data-col="3" data-style="col">col-3</div>
            <div data-col="3" data-style="col">col-3</div>
            <div data-col="3" data-style="col">col-3</div>
        </div>
        <code>
            <textarea disabled data-style="highlight" style="height: 625px">
                <div data-container>
                    <div data-row="jc-between">
                        <div data-col="3">col-3</div>
                        <div data-col="3">col-3</div>
                        <div data-col="3">col-3</div>
                    </div>
                    <div data-row="jc-around">
                        <div data-col="3">col-3</div>
                        <div data-col="3">col-3</div>
                        <div data-col="3">col-3</div>
                    </div>
                    <div data-row="jc-evenly">
                        <div data-col="3">col-3</div>
                        <div data-col="3">col-3</div>
                        <div data-col="3">col-3</div>
                    </div>
                    <div data-row="jc-end">
                        <div data-col="3">col-3</div>
                        <div data-col="3">col-3</div>
                        <div data-col="3">col-3</div>
                    </div>
                    <div data-row="jc-center">
                        <div data-col="3">col-3</div>
                        <div data-col="3">col-3</div>
                        <div data-col="3">col-3</div>
                    </div>
                    <div data-row="jc-start">
                        <div data-col="3">col-3</div>
                        <div data-col="3">col-3</div>
                        <div data-col="3">col-3</div>
                    </div>
                </div>
            </textarea>
        </code>
    </div>
</section>

<section data-section>
    <div data-container>
        <h2 data-title>Align-items</h2>
        <div data-text>Для выравнивания столбцов по вертикали</div>
        <h3 data-title="sec">start, end, center, baseline, stretch</h3>
        <div data-row="ai-start"  data-style="row-height">
            <div data-col data-style="col">col</div>
            <div data-col data-style="col">col</div>
            <div data-col data-style="col">col</div>
        </div>
        <div data-row="ai-end" data-style="row-height">
            <div data-col data-style="col">col</div>
            <div data-col data-style="col">col</div>
            <div data-col data-style="col">col</div>
        </div>
        <div data-row="ai-center" data-style="row-height">
            <div data-col data-style="col">col</div>
            <div data-col data-style="col">col</div>
            <div data-col data-style="col">col</div>
        </div>
        <div data-row="ai-baseline" data-style="row-height">
            <div data-col data-style="col">col</div>
            <div data-col data-style="col">col</div>
            <div data-col data-style="col">col</div>
        </div>
        <div data-row="ai-stretch" data-style="row-height">
            <div data-col data-style="col">col</div>
            <div data-col data-style="col">col</div>
            <div data-col data-style="col">col</div>
        </div>
        <code>
            <textarea disabled data-style="highlight" style="height: 530px">
                <div data-container>
                    <div data-row="ai-start">
                        <div data-col>col</div>
                        <div data-col>col</div>
                        <div data-col>col</div>
                    </div>
                    <div data-row="ai-end">
                        <div data-col>col</div>
                        <div data-col>col</div>
                        <div data-col>col</div>
                    </div>
                    <div data-row="ai-center">
                        <div data-col>col</div>
                        <div data-col>col</div>
                        <div data-col>col</div>
                    </div>
                    <div data-row="ai-baseline">
                        <div data-col>col</div>
                        <div data-col>col</div>
                        <div data-col>col</div>
                    </div>
                    <div data-row="ai-stretch">
                        <div data-col>col</div>
                        <div data-col>col</div>
                        <div data-col>col</div>
                    </div>
                </div>
            </textarea>
        </code>
    </div>
</section>

<section data-section>
    <div data-container>
        <h2 data-title>Align-content</h2>
        <div data-text>Свойство распределяет свободное пространство по поперечной оси между строками флекс-элементов</div>
        <h3 data-title="sec">start, end, center</h3>
        <div data-row="ac-start"  data-style="row-height">
            <div data-col="3" data-style="col">col-3</div>
            <div data-col="4" data-style="col">col-4</div>
            <div data-col="3" data-style="col">col-3</div>
            <div data-col="4" data-style="col">col-4</div>
            <div data-col="3" data-style="col">col-3</div>
        </div>
        <div data-row="aс-end" data-style="row-height">
            <div data-col="3" data-style="col">col-3</div>
            <div data-col="4" data-style="col">col-4</div>
            <div data-col="3" data-style="col">col-3</div>
            <div data-col="4" data-style="col">col-4</div>
            <div data-col="3" data-style="col">col-3</div>
        </div>
        <div data-row="ac-center" data-style="row-height">
            <div data-col="3" data-style="col">col-3</div>
            <div data-col="4" data-style="col">col-4</div>
            <div data-col="3" data-style="col">col-3</div>
            <div data-col="4" data-style="col">col-4</div>
            <div data-col="3" data-style="col">col-3</div>
        </div>
        <code>
            <textarea disabled data-style="highlight" style="height: 460px">
                <div data-container>
                    <div data-row="ac-start">
                        <div data-col="3">col-3</div>
                        <div data-col="4">col-4</div>
                        <div data-col="3">col-3</div>
                        <div data-col="4">col-4</div>
                        <div data-col="3">col-3</div>
                    </div>
                    <div data-row="aс-end">
                        <div data-col="3">col-3</div>
                        <div data-col="4">col-4</div>
                        <div data-col="3">col-3</div>
                        <div data-col="4">col-4</div>
                        <div data-col="3">col-3</div>
                    </div>
                    <div data-row="ac-center">
                        <div data-col="3">col-3</div>
                        <div data-col="4">col-4</div>
                        <div data-col="3">col-3</div>
                        <div data-col="4">col-4</div>
                        <div data-col="3">col-3</div>
                    </div>
                </div>
            </textarea>
        </code>
        <h3 data-title="sec">between, around, stretch</h3>
        <div data-row="ac-between" data-style="row-height">
            <div data-col="3" data-style="col">col-3</div>
            <div data-col="4" data-style="col">col-4</div>
            <div data-col="3" data-style="col">col-3</div>
            <div data-col="4" data-style="col">col-4</div>
            <div data-col="3" data-style="col">col-3</div>
        </div>
        <div data-row="ac-around" data-style="row-height">
            <div data-col="3" data-style="col">col-3</div>
            <div data-col="4" data-style="col">col-4</div>
            <div data-col="3" data-style="col">col-3</div>
            <div data-col="4" data-style="col">col-4</div>
            <div data-col="3" data-style="col">col-3</div>
        </div>
        <div data-row="ac-stretch" data-style="row-height">
            <div data-col="3" data-style="col">col-3</div>
            <div data-col="4" data-style="col">col-4</div>
            <div data-col="3" data-style="col">col-3</div>
            <div data-col="4" data-style="col">col-4</div>
            <div data-col="3" data-style="col">col-3</div>
        </div>
        <code>
            <textarea disabled data-style="highlight" style="height: 460px">
                <div data-container>
                    <div data-row="ac-between">
                        <div data-col="3">col-3</div>
                        <div data-col="4">col-4</div>
                        <div data-col="3">col-3</div>
                        <div data-col="4">col-4</div>
                        <div data-col="3">col-3</div>
                    </div>
                    <div data-row="ac-around">
                        <div data-col="3">col-3</div>
                        <div data-col="4">col-4</div>
                        <div data-col="3">col-3</div>
                        <div data-col="4">col-4</div>
                        <div data-col="3">col-3</div>
                    </div>
                    <div data-row="ac-stretch">
                        <div data-col="3">col-3</div>
                        <div data-col="4">col-4</div>
                        <div data-col="3">col-3</div>
                        <div data-col="4">col-4</div>
                        <div data-col="3">col-3</div>
                    </div>
                </div>
            </textarea>
        </code>
    </div>
</section>

<section data-section>
    <div data-container>
        <h2 data-title>Order (Классы порядка)</h2>
        <div data-text>Можно менять порядок отображения флекс-элементов внутри флекс-контейнера</div>
        <h3 data-title="sec">order: 1, 2, 3...</h3>
        <div data-row>
            <div data-col="2" data-style="col">first elem</div>
            <div data-col="2" data-style="col" data-order="4">second elem</div>
            <div data-col="2" data-style="col">third elem</div>
            <div data-col="2" data-style="col" data-order="1">fourth elem</div>
            <div data-col="2" data-style="col">fifth elem</div>
        </div>
        <code>
            <textarea disabled data-style="highlight" style="height: 200px">
                <div data-container>
                    <div data-row>
                        <div data-col="2">first elem</div>
                        <div data-col="2" data-order="4">second elem</div>
                        <div data-col="2">third elem</div>
                        <div data-col="2" data-order="1">fourth elem</div>
                        <div data-col="2">fifth elem</div>
                    </div>
                </div>
            </textarea>
        </code>
        <h3 data-title="sec">order: first / last</h3>
        <div data-row>
            <div data-col="2" data-style="col">first elem</div>
            <div data-col="2" data-style="col">second elem</div>
            <div data-col="2" data-style="col" data-order="last">third elem</div>
            <div data-col="2" data-style="col" data-order="first">fourth elem</div>
            <div data-col="2" data-style="col">fifth elem</div>
        </div>
        <code>
            <textarea disabled data-style="highlight" style="height: 200px">
                <div data-container>
                    <div data-row>
                        <div data-col="2">first elem</div>
                        <div data-col="2">second elem</div>
                        <div data-col="2" data-order="last">third elem</div>
                        <div data-col="2" data-order="first">fourth elem</div>
                        <div data-col="2">fifth elem</div>
                    </div>
                </div>
            </textarea>
        </code>
    </div>
</section>

<section>
    <div data-container>
        <h2 data-title>Интервал</h2>
        <div data-text>
            <p>Классы именуются в формате <b>{property}{sides}-{size}</b> для <b>xs</b> и <b>{property}{sides}-{breakpoint}-{size}</b> для
            <b>sm, md, lg, xl и xxl</b>.</p><br>
            <p>Где свойство - одно из:</p>
            <ul data-list>
                <li data-list-item><b>m</b> - для классов, которые устанавливают margin</li>
                <li data-list-item><b>p</b> - для классов, которые устанавливают padding</li>
            </ul>
            <p>Где стороны - одна из:</p>
            <ul data-list>
                <li data-list-item><b>t</b> - для классов, которые устанавливают margin-top или padding-top</li>
                <li data-list-item><b>b</b> - для классов, которые устанавливают margin-bottom или padding-bottom</li>
                <li data-list-item><b>l</b> - для классов, которые устанавливают margin-left или padding-left в LTR, margin-right или
                    padding-right в RTL</li>
                <li data-list-item><b>r</b> - для классов, которые устанавливают margin-right или padding-right в LTR, margin-left или
                    padding-left в RTL</li>
                <li data-list-item><b>x</b> - для классов, которые устанавливают оба *-left и *-right</li>
                <li data-list-item><b>y</b> - для классов, которые устанавливают оба *-top и *-bottom</li>
                <li data-list-item><b>blank</b> - для классов, которые устанавливают a margin или padding со всех 4 сторон элемента</li>
            </ul>
            <p>Где размер - один из:</p>
            <ul data-list>
                <li data-list-item><b>0</b> - или классы, устраняющие margin или padding установив его на 0</li>
                <li data-list-item><b>1</b> - (по умолчанию) для классов, которые устанавливают the margin или padding равным $spacer * .25</li>
                <li data-list-item><b>2</b> - (по умолчанию) для классов, которые устанавливают the margin или padding равным $spacer * .5</li>
                <li data-list-item><b>3</b> - (по умолчанию) для классов, которые устанавливают the margin или padding равным $spacer</li>
                <li data-list-item><b>4</b> - (по умолчанию) для классов, которые устанавливают the margin или padding равным $spacer * 1.5</li>
                <li data-list-item><b>5</b> - (по умолчанию) для классов, которые устанавливают the margin или padding равным $spacer * 3</li>
                <li data-list-item><b>auto</b> - для классов, которые устанавливают margin равным авто</li>
            </ul>
        </div>
        <code>
            <textarea disabled data-style="highlight" style="height: 730px">
                /* margin */
                [data-m="1"] {
                  margin: 0.25rem;
                }

                /* margin-right & -left */
                [data-m-x="auto"] {
                  margin-right: auto;
                  margin-left: auto;
                }

                /* margin-top & -bottom */
                [data-m-y="3"] {
                  margin-top: 1rem;
                  margin-bottom: 1rem;
                }

                /* margin-top */
                [data-m-t="auto"] {
                  margin-top: auto;
                }

                /* padding */
                [data-p="2"] {
                  padding: 0.5rem;
                }

                /* padding-right & -left */
                [data-p-x="5"] {
                  padding-right: 3rem;
                  padding-left: 3rem;
                }

                /* padding-top & -bottom */
                [data-p-y="0"] {
                  padding-top: 0;
                  padding-bottom: 0;
                }
            </textarea>
        </code>
    </div>
</section>

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>
