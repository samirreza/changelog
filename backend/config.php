<?php
return [
    'title' => 'تاریخچه تغییرات',
    'menu' =>[
        'label' => 'تاریخچه تغییرات',
        'url' => ['/changelog/manage/list'],
        'icon' => 'user',
        'visible' => Yii::$app->user->can('superuser')
    ]
];
