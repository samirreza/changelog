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

    public function behaviors()
    {
        return [
            'core\behaviors\TimestampBehavior',
        ];
    }

    public function rules()
    {
        return [
            [['version', 'description', 'date'], 'required'],
            [['version', 'description'], 'string'],
            [['version'], 'string', 'max' => 255],
            [['description'], FarsiCharactersValidator::className()],
            [['date'], JalaliDateToTimestamp::className()]
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'شناسه',
            'version' => 'نسخه',
            'date' => 'تاریخ بروزرسانی',
            'description' => 'توضیحات',
            'createdAt' => 'تاریخ درج',
            'updatedAt' => 'آخرین بروزرسانی',
        ];
    }
}