<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $model app\models\ListInfo */
$this->title = 'Update List Info: ' . $model->news_title;
$this->params['breadcrumbs'][] = ['label' => 'List Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->news_title, 'url' => ['view', 'id' => $model->news_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="list-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>