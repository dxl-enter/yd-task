<?php
    use yii\helpers\Html;
    /* @var $this yii\web\View */
    /* @var $model app\models\ListInfo */
    $this->title = '添加图书';
    $this->params['breadcrumbs'][] = ['label' => 'List Infos', 'url' => ['index']];
    $this->params['breadcrumbs'][] = $this->title;
?>
<div class="list-info-create">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>