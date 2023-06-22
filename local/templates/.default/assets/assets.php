<?php
/**
 *
 */

use Bitrix\Main\UI\Extension;

Extension::load(['izifir.site']);


\Bitrix\Main\Page\Asset::getInstance()->addString('<script>document.addEventListener("DOMContentLoaded", function() { new BX.Izifir.Site(); });</script>');
