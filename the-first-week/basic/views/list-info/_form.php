<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model app\models\ListInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="list-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'news_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'news_content')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'news_img')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'news_time')->textInput() ?>

    <?= $form->field($model, 'founder')->textInput() ?>

    <?= $form->field($model, 'remarks')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>