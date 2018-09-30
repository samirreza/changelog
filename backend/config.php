<?php
return [
    'title' => 'سابقه تغییرات',
    'menu' =>[
        'label' => 'سابقه تغییرات',
        'url' => ['/changelog/manage/list'],
        'icon' => 'user',
        'visible' => Yii::$app->user->can('superuser')
    ]
];