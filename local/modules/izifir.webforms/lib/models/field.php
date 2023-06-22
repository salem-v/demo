<?php

namespace Izifir\Webforms\Models;

use Bitrix\Main\ORM\Data\DataManager;
use Bitrix\Main\ORM\Fields;

class FieldTable extends DataManager
{
    private static array $_types = [
        'text' => 'text',
        'email' => 'email',
    ];

    public static function getTableName(): string
    {
        return 'izi_webforms_fields';
    }

    public static function getMap(): array
    {
        return [
            'ID' => new Fields\IntegerField('ID', [
                'primary' => true,
                'autocomplete' => true
            ]),
            'FORM_ID' => new Fields\IntegerField('FORM_ID', [
                'required' => true,
            ]),
            'TYPE' => new Fields\StringField('TYPE', [
                'required' => true
            ]),
            'NAME' => new Fields\StringField('NAME', [
                'required' => true
            ])
        ];
    }

    public static function getTypes():array
    {
        return self::$_types;
    }
}
