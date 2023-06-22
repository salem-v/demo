<?php
/**
 * @global $APPLICATION CMain
 */

use Bitrix\Main\UI\Extension;

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Анимации');

Extension::load(['izifir.animate']);
?>

<style>
    [data-animation="main"] {
        width: 500px;
        margin: 0 auto;
        padding: .75em;
        border: 1px solid;
    }

    [data-cube="main"] {
        width: 50px;
        height: 50px;
        background-color: #34536A;
        cursor: pointer;
    }
</style>

<div data-animation="main">
    <div data-cube="main"></div>
</div>


<script>
  document.addEventListener('DOMContentLoaded', function () {
    const mainCube = document.querySelector('[data-cube="main"]');
    const firstAnimation = new BX.Izifir.Animate({
      duration: 500,
      step: function (progress) {
        const step = progress * 300;
        mainCube.style.transform = 'translateX(' + step +'%)';
      },
      complete: function () {
        alert('cube animation end');
      }
    });
    mainCube.addEventListener('click', function () {
      firstAnimation.run();
    });
  });
</script>

<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>
