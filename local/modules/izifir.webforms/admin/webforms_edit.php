<?php
/**
 * @var $id string
 * @global $APPLICATION CMain
 */

use Bitrix\Main\Loader;
use Bitrix\Main\Localization\Loc;
use Izifir\Webforms\Models\FormTable;
use Bitrix\Main\Context;
use Bitrix\Main\Application;
use Bitrix\Main\LoaderException;
use Izifir\Webforms\Models\FieldTable;
use Bitrix\Main\Web\Json;

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_admin_before.php');

// region Load modules
try {
    Loader::includeModule('izifir.webforms');
} catch (LoaderException $e) {
    $APPLICATION->ThrowException($e->getMessage());
}
// endregion Load modules

// region TabControl initialize
$tabs = [
    [
        'DIV' => 'main',
        'TAB' => Loc::getMessage('IZI.MOD.W_FORMS.EDIT.MAIN_TAB_NAME'),
        'ICON' => '',
        'TITLE' => Loc::getMessage('IZI.MOD.W_FORMS.EDIT.MAIN_TAB_TITLE')
    ],
    [
        'DIV' => 'fields',
        'TAB' => Loc::getMessage('IZI.MOD.W_FORMS.EDIT.MAIN_TAB_FIELDS'),
        'ICON' => '',
        'TITLE' => Loc::getMessage('IZI.MOD.W_FORMS.EDIT.MAIN_TAB_TITLE')
    ]
];
$tabControl = new CAdminTabControl('izifir_webform_edit', $tabs);
// endregion Tabs

// region Initialize variables
$form = [];
$errorMessage = '';
$request = Context::getCurrent()->getRequest();
$session = Application::getInstance()->getSession();
// endregion Initialize variables

// region Extract data
if ((int)$id > 0) {
    $form = FormTable::query()
        ->setFilter(['ID' => $id])
        ->setSelect(['*'])
        ->exec()
        ->fetch();

    $fields = FieldTable::query()
        ->setFilter(['FORM_ID' => $form['ID']])
        ->setSelect(['*'])
        ->exec()
        ->fetch();

}
$fieldTypes = FieldTable::getTypes();
// endregion Extract data

// region Execute data
if ($request->isPost() && ($request->getPost('save') || $request->getPost('apply')) && check_bitrix_sessid()) {
    foreach (FormTable::getMap() as $name => $field) {
        $type = $field->getDataType();

        if ($type === 'boolean') {
            $form[$name] = $request->getPost($name) === 'Y';
        } else {
            $form[$name] = $request->getPost($name);
        }
    }

    if (!empty($form)) {
        if ($id === 'new') {
            $saveResult = FormTable::add($form);
        } else {
            $saveResult = FormTable::update($id, $form);
        }

        if ($saveResult->isSuccess()) {
            if ($id === 'new') {
                $id = $saveResult->getId();
            }
            $session->set('SUCCESS_WF_SAVE', Loc::getMessage('IZI.MOD.W_FORMS.EDIT.SUCCESS_MESSAGE'));
            if ($request->getPost('save')) {
                LocalRedirect('/bitrix/admin/izifir_webforms_list.php?lang=' . LANG);
            } elseif ($request->getPost('apply')) {
                LocalRedirect('/bitrix/admin/izifir_webforms_edit.php?lang=' . LANG . '&id=' . $id);
            }
        } else {
            $errorMessage = implode('<br>', $saveResult->getErrorMessages());
        }
    }
}
// endregion Execute data

// region Context menu
$contextMenu = [
    [
        'TEXT' => Loc::getMessage('IZI.MOD.W_FORMS.EDIT.BACK_LINK'),
        'LINK' => 'izifir_webforms_list.php?lang=' . LANG,
        'ICON' => 'btn_list'
    ]
];
$context = new CAdminContextMenu($contextMenu);
// endregion Context menu

// region Page title
if ($id === 'new') {
    $APPLICATION->SetTitle(Loc::getMessage('IZI.MOD.W_FORMS.EDIT.PAGE_TITLE_NEW'));
} else {
    $APPLICATION->SetTitle(Loc::getMessage('IZI.MOD.W_FORMS.EDIT.PAGE_TITLE_FORM', ['#ID#' => $id]));
}
// endregion Page title

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_admin_after.php');
?>

<?php
// region Result message
if ($session->get('SUCCESS_WF_SAVE')) {
    CAdminMessage::ShowMessage(['MESSAGE' => $session->get('SUCCESS_WF_SAVE'), 'TYPE' => 'OK']);
    $session->set('SUCCESS_WF_SAVE', null);
} elseif ($errorMessage) {
    CAdminMessage::ShowMessage(['MESSAGE' => $errorMessage, 'TYPE' => 'ERROR']);
}
// endregion Result message

// region Display form
$context->Show();
?>
    <form method="post" action="<?= $APPLICATION->GetCurPage() ?>?lang=<?= LANG ?>&id=<?= $id ?>"
          enctype="multipart/form-data"
          class="izi-webform-edit">
        <?= bitrix_sessid_post() ?>

        <?php $tabControl->Begin(); ?>

        <?php // region Main settings ?>
        <?php $tabControl->BeginNextTab(); ?>

        <?php foreach (FormTable::getMap() as $name => $field) : ?>
            <?php
            if (in_array($name, ['ID', 'CREATED_AT', 'UPDATED_AT', 'SUCCESS_MESSAGE_TYPE', 'DESCRIPTION_TYPE'])) {
                continue;
            }
            $type = $field->getDataType();
            ?>
            <tr>
                <td style="width: 40%">
                    <?php if ($field->getParameter('required')) : ?>
                        <b><?= $field->getTitle() ?>:</b>
                    <?php else : ?>
                        <?= $field->getTitle() ?>:
                    <?php endif ?>
                </td>
                <td style="width: 60%">
                    <?php if ($type === 'text') : ?>
                        <?php
                        CFileMan::AddHTMLEditorFrame(
                            $name,
                            $form[$name],
                            "{$name}_TYPE",
                            'html',
                            [
                                'height' => 200,
                                'width' => '100%'
                            ],
                            "N",
                            0,
                            "",
                            "",
                            SITE_ID
                        );
                        ?>
                    <?php elseif ($type === 'boolean') : ?>
                        <input type="checkbox" name="<?= $name ?>" value="Y"
                            <?= $form[$name] ? ' checked' : '' ?>>
                    <?php else : ?>
                        <input type="text" name="<?= $name ?>" value="<?= $form[$name] ?>"
                               size="40">
                    <?php endif ?>
                </td>
            </tr>
        <?php endforeach; ?>
        <?php // endregion Main settings ?>

        <?php // region Fields settings ?>
        <?php $tabControl->BeginNextTab(); ?>
        <tr>
            <td colspan="2">
                <div id="izi-wf-fields">
                    <div class="izi-wf-fields">
                        <div class="izi-wf-fields__row" v-for="field in fields"></div>
                        <div class="izi-wf-fields__row">
                            <div class="izi-wf-fields__block">
                                <input type="text">
                                <select>
                                    <option v-for="type in types">{{type}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        <?php // endregion Fields settings ?>

        <?php // region Form footer  ?>
        <?php
        $tabControl->Buttons([
            "disabled" => false,
            "back_url" => "izifir_webforms_list.php?lang=" . LANG,
        ]);
        ?>

        <input type="hidden" name="lang" value="<?= LANG ?>">
        <input type="hidden" name="id" value="<?= $id ?>">
        <?php // endregion Form footer  ?>

        <?php $tabControl->End(); ?>
    </form>

<?php // endregion Display form ?>

<script src="https://unpkg.com/vue@3.2.45/dist/vue.global.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
      const FieldsApp = Vue.createApp({
        name: 'IzifirWebformsFields',
        data: function() {
          return {
            fields: [],
            types: <?= Json::encode($fieldTypes) ?>
          }
        },
        mounted: function () {
          console.log(this.types);
        }
      });
      FieldsApp.mount('#izi-wf-fields');
    })
</script>

<?php require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/epilog_admin.php');
