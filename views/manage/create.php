<?php

use theme\widgets\ActionButtons;

$this->title = 'نسخه جدید';
$this->params['breadcrumbs'][] = ['label' => 'سابقه تغییرات', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="changeLog-manage-create">
    <?= ActionButtons::widget([
        'buttons' => [
            'index' => ['label' => 'سابقه تغییرات'],
        ],
    ]); ?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>