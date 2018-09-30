<?php

namespace modules\changelog\models;

use extensions\i18n\validators\JalaliDateToTimestamp;
use extensions\i18n\validators\FarsiCharactersValidator;

class ChangeLog extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'change_log';
    }

    public function rules()
    {
        return [
            [['version', 'description', 'date'], 'required'],
            [['version', 'description'], 'string'],
            [['version'], 'string', 'max' => 255],
            ['description', FarsiCharactersValidator::class],
            ['date', JalaliDateToTimestamp::class]
        ];
    }

    public function attributeLabels()
    {
        return [
            'version' => 'نسخه',
            'date' => 'تاریخ بروزرسانی',
            'description' => 'توضیحات'
        ];
    }
}
