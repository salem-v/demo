<?php

namespace Izifir\Webforms\Models;

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\ORM\Data\DataManager;
use Bitrix\Main\ORM\Fields;
use Bitrix\Main\SystemException;
use Bitrix\Main\Type\DateTime;
use Bitrix\Main\ORM\Data\AddResult;
use Bitrix\Main\ORM\Data\UpdateResult;
use Exception;

/**
 * @property int $ID
 * @property string $NAME
 * @property string $TITLE
 * @property string $DESCRIPTION
 * @property string $DESCRIPTION_TYPE
 * @property string $SUCCESS_MESSAGE
 * @property string $SUCCESS_MESSAGE_TYPE
 * @property string $BUTTON_TEXT
 * @property bool $USE_CAPTCHA
 * @property DateTime $CREATED_AT
 * @property DateTime $UPDATED_AT
 */
class FormTable extends DataManager
{
    public static function getTableName(): string
    {
        return 'izi_webforms_forms';
    }

    /**
     * @throws SystemException
     */
    public static function getMap(): array
    {
        return [
            'ID' => new Fields\IntegerField('ID', [
                'primary' => true,
                'autocomplete' => true
            ]),
            'NAME' => new Fields\StringField('NAME', [
                'required' => true,
                'title' => Loc::getMessage('IZI.MOD.W_FORMS.LIB.MODELS.FORM.NAME_TITLE')
            ]),
            'TITLE' => new Fields\StringField('TITLE', [
                'nullable' => true,
                'title' => Loc::getMessage('IZI.MOD.W_FORMS.LIB.MODELS.FORM.TITLE_TITLE')
            ]),
            'DESCRIPTION' => new Fields\TextField('DESCRIPTION', [
                'nillable' => true,
                'title' => Loc::getMessage('IZI.MOD.W_FORMS.LIB.MODELS.FORM.TITLE_DESCRIPTION')
            ]),
            'DESCRIPTION_TYPE' => new Fields\StringField('DESCRIPTION_TYPE', [
                'nullable' => true,
                'title' => Loc::getMessage('IZI.MOD.W_FORMS.LIB.MODELS.FORM.TITLE_DESCRIPTION_TYPE')
            ]),
            'SUCCESS_MESSAGE' => new Fields\TextField('SUCCESS_MESSAGE', [
                'nullable' => true,
                'title' => Loc::getMessage('IZI.MOD.W_FORMS.LIB.MODELS.FORM.TITLE_SUCCESS_MESSAGE')
            ]),
            'SUCCESS_MESSAGE_TYPE' => new Fields\StringField('SUCCESS_MESSAGE_TYPE', [
                'nullable' => true,
                'title' => Loc::getMessage('IZI.MOD.W_FORMS.LIB.MODELS.FORM.TITLE_SUCCESS_MESSAGE_TYPE')
            ]),
            'BUTTON_TEXT' => new Fields\StringField('BUTTON_TEXT', [
                'nullable' => true,
                'title' => Loc::getMessage('IZI.MOD.W_FORMS.LIB.MODELS.FORM.TITLE_BUTTON_TEXT')
            ]),
            'USE_CAPTCHA' => new Fields\BooleanField('USE_CAPTCHA', [
                'default' => false,
                'title' => Loc::getMessage('IZI.MOD.W_FORMS.LIB.MODELS.FORM.TITLE_USE_CAPTCHA')
            ]),
            'CREATED_AT' => new Fields\DatetimeField('CREATED_AT', [
                'default' => new DateTime(),
                'title' => Loc::getMessage('IZI.MOD.W_FORMS.LIB.MODELS.FORM.TITLE_CREATED_AT')
            ]),
            'UPDATED_AT' => new Fields\DatetimeField('UPDATED_AT', [
                'default' => new DateTime(),
                'title' => Loc::getMessage('IZI.MOD.W_FORMS.LIB.MODELS.FORM.TITLE_UPDATED_AT')
            ]),
        ];
    }

    /**
     * @param $data
     * @return AddResult
     * @throws Exception
     */
    public static function add($data): AddResult
    {
        if (!$data['CREATED_AT']) {
            $data['CREATED_AT'] = new DateTime();
        }

        if (!$data['UPDATED_AT']) {
            $data['UPDATED_AT'] = new DateTime();
        }

        return parent::add($data);
    }

    /**
     * @param $primary
     * @param array $data
     * @return UpdateResult
     * @throws Exception
     */
    public static function update($primary, array $data): UpdateResult
    {
        if (!$data['UPDATED_AT']) {
            $data['UPDATED_AT'] = new DateTime();
        }

        return parent::update($primary, $data);
    }
}
