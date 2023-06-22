<?php
/**
 * @global $APPLICATION CMain
 */

use Bitrix\Main\UI\Extension;

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Аккордеон');

try {
    Extension::load('izifir.accordion');
} catch (\Bitrix\Main\LoaderException $e) {
}
?>

<div data-container>
    <div data-row>
        <div data-col>
            <h1>Аккордеон</h1>
        </div>
    </div>
</div>

<div data-container>
    <div data-row>
        <div data-col>
            <div data-accordion>
                <div data-accordion-item>
                    <div data-accordion-header>
                        <div data-accordion-title>Заголовок 1</div>
                    </div>
                    <div data-accordion-body>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit lacus posuere, natoque turpis
                            consequat praesent vitae quisque ut purus, dis imperdiet at habitant mi sociis mollis
                            enim. Sodales pretium ut pellentesque mattis maecenas viverra, pharetra aliquet nulla
                            porttitor enim bibendum sed, tellus curabitur fusce nunc penatibus. Platea senectus
                            placerat in nostra tincidunt vestibulum fames interdum, luctus montes curae justo lectus
                            etiam bibendum class, velit erat faucibus dis primis magna feugiat. Platea suspendisse
                            eu maecenas inceptos donec varius nam condimentum class porttitor tristique egestas, sed
                            cras arcu ornare pharetra pulvinar justo tortor phasellus eleifend. Posuere dignissim
                            suscipit metus et mollis ligula fermentum phasellus augue, natoque integer parturient
                            faucibus fames proin nunc lectus habitant, ornare erat himenaeos cum laoreet mus lacinia
                            feugiat. Posuere eleifend eros commodo platea mi ad varius inceptos hendrerit, cras
                            tellus a libero fermentum eget vitae accumsan.</p>
                    </div>
                </div>
                <div data-accordion-item>
                    <div data-accordion-header>
                        <div data-accordion-title>Заголовок 2</div>
                    </div>
                    <div data-accordion-body>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit consequat risus, magna ultrices
                            montes senectus augue ut praesent faucibus pretium, malesuada tempor pharetra nascetur
                            mattis lacus est libero. Aptent cubilia venenatis urna porttitor gravida nulla, viverra
                            inceptos egestas hendrerit posuere. Integer praesent cursus donec cubilia facilisi urna
                            sollicitudin phasellus pretium vivamus, sem ligula eget metus potenti nisl tempor
                            pulvinar. Suscipit ante quisque sociis cum nam ultrices rutrum ac felis tristique, orci
                            facilisis ligula placerat sociosqu aliquam id interdum. Vivamus enim consequat orci
                            sapien elementum per etiam tempor, pretium mi vitae tempus facilisi fringilla donec
                            laoreet cras, litora mattis et potenti venenatis netus odio. Nisi fusce eu congue
                            tincidunt per morbi pretium rutrum praesent, ad sociosqu justo sodales nibh nulla
                            suspendisse aliquam quisque felis, tristique convallis montes faucibus ac inceptos
                            accumsan dis. Nec neque per ornare porttitor commodo sapien etiam bibendum, felis metus
                            enim posuere tempus pretium faucibus, condimentum quisque hendrerit justo aliquet quam
                            augue.</p>
                    </div>
                </div>
                <div data-accordion-item>
                    <div data-accordion-header>
                        <div data-accordion-title>Заголовок 3</div>
                    </div>
                    <div data-accordion-body>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit laoreet senectus sociosqu dapibus
                            sagittis sodales quisque, malesuada conubia aenean purus ad molestie torquent vehicula
                            ridiculus elementum vel augue montes. Sociosqu vulputate mauris luctus eleifend auctor
                            tincidunt varius aptent eros mollis laoreet magnis placerat, tristique parturient magna urna
                            class metus sociis fermentum lacinia mus fusce. Pulvinar semper feugiat elementum eleifend
                            sed ultricies facilisi ligula purus, sodales mi blandit felis augue aliquam phasellus
                            taciti, morbi ridiculus quam pretium hendrerit donec in ut. Rutrum dignissim laoreet dis vel
                            tortor nulla, platea ut urna nisl cum lacinia, fringilla mi pretium ultricies eu. Lobortis
                            dictum interdum habitant vel senectus facilisi vehicula, fames pretium leo ut magna platea
                            nunc vitae, purus bibendum proin malesuada sociosqu at. Fusce vivamus nibh enim ridiculus
                            tristique sollicitudin cursus odio lacinia quam nam magnis taciti penatibus lacus risus
                            ultricies, luctus mauris habitant pulvinar tempor tincidunt sagittis dis cum himenaeos
                            hendrerit convallis dui ac eu. Taciti neque proin luctus rhoncus vehicula lobortis etiam
                            nascetur magnis malesuada, imperdiet vestibulum quisque facilisi feugiat sem fermentum
                            nostra ante molestie, in sociosqu hendrerit tempus nibh arcu eu aenean nunc.</p>
                    </div>
                </div>
                <div data-accordion-item>
                    <div data-accordion-header>
                        <div data-accordion-title>Заголовок 4</div>
                    </div>
                    <div data-accordion-body>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit ullamcorper porttitor, eleifend
                            posuere auctor at rutrum mi ultrices habitant inceptos, aenean torquent scelerisque egestas
                            curabitur facilisis velit tempus. Dapibus congue ornare nisl ultrices lobortis dictumst
                            habitant, quam et quisque bibendum dui facilisi conubia dis, cras ultricies sem elementum
                            mollis turpis. Lobortis augue elementum rhoncus venenatis purus quisque ligula, eros nec
                            placerat rutrum vivamus risus imperdiet et, in congue dictumst ullamcorper cras porttitor.
                            Ante arcu sodales nisi imperdiet vestibulum vulputate habitasse ligula, primis diam bibendum
                            praesent torquent convallis accumsan urna tempor, vivamus etiam donec odio litora nulla
                            cras.</p>
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
                    <pre class="html5" style="font-family:monospace;"><ol><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">div</span> data-accordion&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">    <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">div</span> data-accordion-item&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">        <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">div</span> data-accordion-header&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">            <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">div</span> data-accordion-title&gt;</span>Заголовок 1<span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">div</span>&gt;</span></div></li><li style="font-weight: bold; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">        <span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">div</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">        <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">div</span> data-accordion-body&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">            <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">p</span>&gt;</span>Text...<span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">p</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">        <span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">div</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">    <span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">div</span>&gt;</span></div></li><li style="font-weight: bold; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">    <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">div</span> data-accordion-item&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">        <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">div</span> data-accordion-header&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">            <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">div</span> data-accordion-title&gt;</span>Заголовок 2<span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">div</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">        <span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">div</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">        <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">div</span> data-accordion-body&gt;</span></div></li><li style="font-weight: bold; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">            <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">p</span>&gt;</span>Text...<span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">p</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">        <span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">div</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">    <span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">div</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">    <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">div</span> data-accordion-item&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">        <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">div</span> data-accordion-header&gt;</span></div></li><li style="font-weight: bold; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">            <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">div</span> data-accordion-title&gt;</span>Заголовок 3<span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">div</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">        <span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">div</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">        <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">div</span> data-accordion-body&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">            <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">p</span>&gt;</span>Text...<span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">p</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">        <span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">div</span>&gt;</span></div></li><li style="font-weight: bold; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">    <span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">div</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">    <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">div</span> data-accordion-item&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">        <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">div</span> data-accordion-header&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">            <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">div</span> data-accordion-title&gt;</span>Заголовок 4<span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">div</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">        <span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">div</span>&gt;</span></div></li><li style="font-weight: bold; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">        <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">div</span> data-accordion-body&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">            <span style="color: #009900;">&lt;<span style="color: #000000; font-weight: bold;">p</span>&gt;</span>Text...<span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">p</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">        <span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">div</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">    <span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">div</span>&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #009900;">&lt;<span style="color: #66cc66;">/</span><span style="color: #000000; font-weight: bold;">div</span>&gt;</span></div></li></ol></pre>
                </div>
            </div>
        </div>

        <div data-row style="margin-bottom: 1.5em">
            <div data-col>
                <h3 style="margin-bottom: .5em">Инициализация:</h3>

                <div data-code>
                    <pre class="javascript" style="font-family:monospace;"><ol><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">BX.<span style="color: #660066;">Izifir</span>.<span style="color: #660066;">Accordion</span>.<span style="color: #660066;">init</span><span style="color: #009900;">&#40;</span>selector<span style="color: #339933;">,</span> options<span style="color: #009900;">&#41;</span><span style="color: #339933;">;</span></div></li></ol></pre>
                </div>
                <br>
                <div data-code-description>
                    <p><b>selector</b> - селектор основного элемента аккордеона, может быть строкой <code>"[data-accordion]"</code>, массивом строк <code>["[data-accordion]", "[data-accordion-new]"]</code> либо коллекцией NodeList.</p>
                    <p><b>options</b> - объект с параметрами</p>
                </div>
            </div>
        </div>

        <div data-row style="margin-bottom: 1.5em">
            <div data-col>
                <h3 style="margin-bottom: .5em">Инициализация:</h3>

                <table data-table>
                    <thead>
                        <tr>
                            <th>Параметр</th>
                            <th>По умолчанию</th>
                            <th>Описание</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>itemSelector</td>
                            <td>[data-accordion-item]</td>
                            <td>Селектор элемента аккордеона</td>
                        </tr>
                        <tr>
                            <td>itemHeaderSelector</td>
                            <td>[data-accordion-header]</td>
                            <td>Селектор заголовка элемента аккордеона. По этому элементу обрабатывается клик для открытия/закрытия блока.</td>
                        </tr>
                        <tr>
                            <td>itemBodySelector</td>
                            <td>[data-accordion-body]</td>
                            <td>Селектор содержимого элемента аккордеона.</td>
                        </tr>
                        <tr>
                            <td>itemBodySelector</td>
                            <td>[data-accordion-wrapper]</td>
                            <td>Селектор элемента в который оборачивается содержимое элемента аккордеона.</td>
                        </tr>
                        <tr>
                            <td>duration</td>
                            <td>300</td>
                            <td>Скорость анимации (в мс) открытия/закрытия содержимого элемента аккордеона.</td>
                        </tr>
                    </tbody>
                </table>
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

    [data-table] {
        border: 1px solid #eee;
        border-collapse: collapse;
    }

    [data-table] th,
    [data-table] td {
        border: 1px solid #eee;
        padding: .5em;
    }

    [data-table] th {
        font-weight: 700;
    }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    window.Accordion = BX.Izifir.Accordion.init(['[data-accordion]'], {
      duration: 300
    });
  });
</script>

<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>
