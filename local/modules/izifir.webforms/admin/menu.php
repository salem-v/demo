<?php

use Bitrix\Main\Localization\Loc;

$menu = [
    "parent_menu" => "global_menu_izifir",
    "section" => "webforms",
    "sort" => 100,
    "text" => Loc::getMessage('IZI.MOD.W_FORMS.ADMIN.MENU_WEBFORMS_TEXT'),
    "url" => "/bitrix/admin/izifir_webforms_list.php?lang=".LANG,
    "more_url" => [
        "/bitrix/admin/izifir_webforms_edit.php"
    ]
];

return $menu;