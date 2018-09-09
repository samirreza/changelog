<?php

use themes\admin360\widgets\ActionButtons;

$this->title = 'ویرایش نسخه';
$this->params['breadcrumbs'][] = ['label' => 'سابقه تغییرات', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->version, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'ویرایش';
?>
<div class="changeLog-update">
    <?= ActionButtons::widget([
        'modelID' => $model->id,
        'buttons' => [
            'create' => ['label' => 'نسخه جدید'],
            'index' => ['label' => 'سابقه تغییرات'],
        ],
    ]); ?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>