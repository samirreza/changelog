<?php
return [
    'title' => 'سابقه تغییرات',
    'menu' => [
        'label' => 'سابقه تغییرات',
        'icon' => 'copyright',
        'items' => [
            [
                'label' => 'نسخه جدید',
                'url' => ['/changelog/manage/create'],
                'visible' =>  Yii::$app->user->canAccessAny(['superuser'])
            ],
            [
                'label' => 'سابقه تغییرات',
                'url' => ['/changelog/manage/index'],
                'visible' =>  Yii::$app->user->canAccessAny(['superuser'])
            ]
        ]
    ]
];