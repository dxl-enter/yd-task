<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model app\models\ListInfoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="list-info-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'news_id') ?>

    <?= $form->field($model, 'news_title') ?>

    <?= $form->field($model, 'news_img') ?>

    <?= $form->field($model, 'news_content') ?>

    <?= $form->field($model, 'news_time') ?>

    <?php $form->field($model, 'founder') ?>

    <?php $form->field($model, 'remarks') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>