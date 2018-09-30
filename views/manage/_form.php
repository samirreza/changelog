<?php

use yii\helpers\Html;
use theme\widgets\Panel;
use theme\widgets\Button;
use yii\widgets\ActiveForm;
use core\widgets\editor\Editor;
use theme\widgets\jalalidatepicker\JalaliDatePicker;

Yii::$app->assetManager->bundles['yii\bootstrap\BootstrapAsset'] = false;

?>

<div class="changeLog-form">
    <?php Panel::begin([
        'title' => 'سابقه تغییرات',
        'showCloseButton' => true
    ]) ?>
        <?php $form = ActiveForm::begin([
            'options' => [
                'enctype' => 'multipart/form-data',
                'class' => 'sliding-form'
            ]
        ]) ?>
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <?= $form->field($model, 'version')->textInput([
                            'maxlength' => 255,
                            'class' => 'form-control input-large',
                            'style' => 'direction:ltr'
                        ]) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $form->field($model, 'date')->widget(
                            jalalidatepicker::class,
                            [
                                'class' => 'form-control'
                            ]
                        ) ?>
                    </div>
                </div>
                <?= $form->field($model, 'description')->widget(
                    Editor::class,
                    ['preset' => 'advanced']
                ) ?>
            </div>
            <div class="col-md-4">
                <?= Html::submitButton('<i class="fa fa-save"></i> ذخیره', [
                    'class' => 'btn btn-lg btn-success'
                ]) ?>
                <?= Button::widget([
                    'label' => 'انصراف',
                    'options' => ['class' => 'btn-lg close-sliding-form-button'],
                    'type' => 'warning',
                    'icon' => 'undo',
                    'url' => ['index']
                ]) ?>
            </div>
        </div>
        <?php ActiveForm::end() ?>
    <?php Panel::end() ?>
</div>




