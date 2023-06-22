<?php

namespace Izifir\Webforms\Events;

class Install
{
    public static function buildGlobalMenuHAndler(&$globalMenu, &$moduleManu): void
    {
        if (!array_key_exists('global_menu_izifir', $globalMenu)) {
            $globalMenu['global_menu_izifir'] = [
                'menu_id' => 'izifir',
                'text' => 'IZIFIR',
                'title' => 'IZIFIR',
                'url' => 'izifir_about.php?lang=' . LANGUAGE_ID,
                'sort' => 400,
                'items_id' => 'global_menu_izifir',
                'items' => []
            ];
        }
    }
}