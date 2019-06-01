<?php
use yii\helpers\Html;
use yii\grid\GridView;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ListInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = '图书管理系统列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="list-info-index">
    <div class="list-info-card-title">
      <i class="glyphicon glyphicon-th-list"></i>
      <span class="card-title-title">图书信息列表</span>
      <?= Html::a('创建书单', ['create'], ['class' => 'btn btn-success title-btn']) ?>
    </div>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'news_id',
            'news_title',
            'news_img',
            'news_content',
            'news_time:datetime',
            'founder',
            'remarks',

            ['class' => 'yii\grid\ActionColumn'],
            
        ],
    ]); ?>


</div>