<?php
    namespace app\controllers;
    use Yii;
    use app\models\ListInfo;
    use app\models\ListInfoSearch;
    use yii\web\Controller;
    use yii\web\NotFoundHttpException;
    use yii\filters\VerbFilter;

    class ListInfoController extends Controller{
        public function behaviors()
        {
            return [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ];
        }
        /**
         * Displays homepage.
         *
         * @return string
         */
        public function actionIndex()
        {
            $searchModel = new ListInfoSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
            return $this->render('index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
        }

        /**
         * find news list by id
         * dxler
         * 2019.05.29
         */
        public function actionView($id){
            return $this->render('view',[
                'model' => $this->findModel($id),
            ]);
        }
        /**
         * create news item
         * dxler
         * 2019.05.29
         */
        public function actionCreate(){
            $model = new ListInfo();
            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->news_id]);
            }
            return $this->render('create', [
                'model' => $model,
            ]);
        }
        /**
         * update news item
         * dxler
         * 2019.05.29
         */
        public function actionUpdate($id)
        {
            $model = $this->findModel($id);
            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->news_id]);
            }
            return $this->render('update', [
                'model' => $model,
            ]);
        }
        /**
         * delete news item
         * dxler
         * 2019.05.29
         */
        public function actionDelete($id){
            $this->findModel($id)->delete();
            return $this->redirect(['index']);
        }
        /**
         * findModel
         * dxler
         * 2019.05.29
         */
        public function findModel($id){
            if(($model = ListInfo::findOne($id)) !== null){
                return $model;
            }

            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
?>