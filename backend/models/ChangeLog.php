<?php

namespace modules\changelog\backend\models;

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
            [['version', 'description'], 'required'],
            [['version', 'description'], 'string'],
            [['version'], 'string', 'max' => 255],
            [['description'], FarsiCharactersValidator::className()]
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'شناسه',
            'version' => 'نسخه',
            'description' => 'توضیحات',
            'createdAt' => 'تاریخ بروزرسانی',
            'updatedAt' => 'آخرین بروزرسانی',
        ];
    }

}