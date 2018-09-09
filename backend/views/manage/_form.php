<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use core\widgets\editor\Editor;
use themes\admin360\widgets\Panel;
use themes\admin360\widgets\Button;

$backLink = $model->isNewRecord ? ['index'] : ['view', 'id' => $model->id];
?>
<div class="changeLog-form">
    <?php $form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data']
    ]); ?>
    <div class="row">
        <div class="col-md-8">
            <?php Panel::begin([
                'title' => 'سابقه تغییرات'
            ]) ?>
            <?=
            $form->field($model, 'version')
                ->textInput(
                    [
                        'maxlength' => 255,
                        'class' => 'form-control input-large'
                    ]
                )
            ?>
            <?=
            $form->field($model, 'description')
                ->widget(
                    Editor::className(),
                    ['preset' => 'advanced']
                )
            ?>
            <?php Panel::end() ?>
        </div>
        <div class="col-md-4">
            <?php Panel::begin() ?>
            <?=
            Html::submitButton(
                '<i class="fa fa-save"></i> ذخیره',
                [
                    'class' => 'btn btn-lg btn-success'
                ]
            )
            ?>
            <?= Button::widget([
                'label' => 'انصراف',
                'options' => ['class' => 'btn-lg'],
                'type' => 'warning',
                'icon' => 'undo',
                'url' => $backLink,
            ])
            ?>
            <?php Panel::end() ?>

        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>




