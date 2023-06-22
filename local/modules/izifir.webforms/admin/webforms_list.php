<?php
/**
 * @global $APPLICATION CMain
 */

use Bitrix\Main\Localization\Loc;
use Izifir\Webforms\Models\FormTable;
use Bitrix\Main\Loader;
use Bitrix\Main\Application;

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_admin_before.php');

Loader::includeModule('izifir.webforms');

$tableID = 'izifir_webforms_list';
$sort = new CAdminUiSorting($tableID, 'CREATED_AT', 'desc');
$session = Application::getInstance()->getSession();

$adminList = new CAdminUiList($tableID, $sort);

$headers = [
    [
        "id" => "ID",
        "content" => 'ID',
        "sort" => "ID",
        "default" => true,
    ],
    [
        "id" => "NAME",
        "content" => Loc::getMessage('IZI.MOD.W_FORMS.LIST.COLUMN_NAME_CONTENT'),
        "sort" => "NAME",
        "default" => true,
    ],
];

$adminList->AddHeaders($headers);

$iterator = FormTable::query()
    ->setFilter([])
    ->setSelect(['*'])
    ->exec();

$result = new CAdminUiResult($iterator, $tableID);

$adminList->SetNavigationParams($result);

while ($form = $iterator->fetch()) {
    $row = $adminList->AddRow(
        $form['ID'],
        $form
    );

    $row->AddViewField("NAME", '<a href="izifir_webforms_edit.php?id=' . $form['ID'] . '&lang=' . LANG . '">' . $form['NAME'] . '</a>');

    $actions = [];
    $actions[] = [
        'ICON' => 'edit',
        'DEFAULT' => true,
        'TEXT' => Loc::getMessage('IZI.MOD.W_FORMS.LIST.ACTION_EDIT'),
        'ACTION' => $adminList->ActionRedirect('izifir_webforms_edit.php?id=' . $form['ID'] . '&lang=' . LANG )
    ];

    $row->AddActions($actions);
}

$adminList->AddFooter([
    ['title' => 'SELECTED', 'value' => $result->SelectedRowsCount()],
    ['counter' => true, 'title' => 'counter', 'value' => '0']
]);

$context = [
    [
        'ICON' => 'btn_new',
        'TEXT' => Loc::getMessage('IZI.MOD.W_FORMS.LIST.ADD_NEW_BUTTON'),
        'LINK' => 'izifir_webforms_edit.php?lang=' . LANG . '&id=new',
        'TITLE' => Loc::getMessage('IZI.MOD.W_FORMS.LIST.ADD_NEW_BUTTON'),
    ]
];

$adminList->AddAdminContextMenu($context);

$APPLICATION->SetTitle(Loc::getMessage('IZI.MOD.W_FORMS.LIST.PAGE_TITLE'));
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_admin_after.php');

if ($session->get('SUCCESS_WF_SAVE')) {
    CAdminMessage::ShowMessage(['MESSAGE' => $session->get('SUCCESS_WF_SAVE'), 'TYPE' => 'OK']);
    $session->set('SUCCESS_WF_SAVE', null);
}

$adminList->DisplayList();

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/epilog_admin.php');
