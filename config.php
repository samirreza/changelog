<?php

return [
    'title' => 'تاریخچه تغییرات',
    'menu' => [
        'label' => 'تاریخچه تغییرات',
        'url' => ['/changelog/manage/list'],
        'icon' => 'calendar',
        'visible' => Yii::$app->user->can('superuser')
    ]
];
