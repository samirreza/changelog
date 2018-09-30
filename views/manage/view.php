<?php

use theme\widgets\Panel;
use yii\widgets\DetailView;

?>

<div class="changeLog-view">
    <div class="row">
        <?php Panel::begin([
            'title' => 'تغییرات سیستم',
            'showCloseButton' => true
        ]) ?>
        <div class="col-md-6">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'version',
                    'date:date'
                ]
            ]) ?>
        </div>
        <div class="col-md-6">
            <div class="well">
                <?= $model->description ?>
            </div>
        </div>
        <?php Panel::end() ?>
    </div>
</div>
