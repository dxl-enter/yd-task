<?php
    namespace app\models;

    use Yii;
    use yii\base\Model;
    use yii\data\ActiveDataProvider;
    use app\models\ListInfo;

    class ListInfoSearch extends ListInfo{
        public function rules(){
            return [
                [['news_id'],'integer'],
                [['news_title','news_img','news_content','news_time','founder','remarks'],'safe'],
            ];
        }
        public function scenarios(){
            return Model::scenarios();
        }
        public function search($params){
            $query = ListInfo::find();

            $dataProvider = new ActiveDataProvider([
                'query' => $query,
            ]);

            $this->load($params);

            if(!$this->validate()){
                return $dataProvider;
            }

            $query->andFilterWhere([
                'news_id' => $this->news_id,
            ]);

            $query->andFilterWhere(['like', 'news_title', $this->news_title])
            ->andFilterWhere(['like', 'news_content', $this->news_content])
            ->andFilterWhere(['like', 'news_time', $this->news_time])
            ->andFilterWhere(['like', 'founder', $this->founder])
            ->andFilterWhere(['like', 'remarks', $this->remarks]);

            return $dataProvider;
        }
    }
?>