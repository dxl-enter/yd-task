<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
/* @var $this yii\web\View */
/* @var $model app\models\ListInfo */
$this->title = $model->news_title;
$this->params['breadcrumbs'][] = ['label' => 'List Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="list-info-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->news_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->news_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '你确认要删除这个信息吗?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'news_id',
            'news_title',
            'news_img',
            'news_content',
            'news_time',
            'founder',
            'remarks',
        ],
    ]) ?>

</div>