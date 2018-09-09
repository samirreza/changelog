<h3>
    <span>نسخه :</span>
    <label class="label label-primary" style="padding-top: 0%;padding-bottom: 0;">
        <?php echo $model->version; ?>
    </label>
</h3>
<p>
    <i class="fa fa-clock-o"></i> <span>تاریخ بروزرسانی : </span>
     <?php echo Yii::$app->formatter->asDate($model->createdAt); ?>
</p>
<hr>
<p><?php echo $model->description; ?></p>
<hr>


