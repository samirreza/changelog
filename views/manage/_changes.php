<div class="block">
    <div class="block_content">
        <h2 class="title">
            <b><span> نسخه : <?= $model->version ?></span></b>
        </h2>
        <div class="byline">
            <span>تاریخ بروزرسانی : <?= Yii::$app->formatter->asDate($model->date) ?></span>
        </div>
        <p class="excerpt"><?= $model->description ?></p>
    </div>
</div>
