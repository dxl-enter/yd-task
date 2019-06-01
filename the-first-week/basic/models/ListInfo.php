<?php
    namespace app\models;
    use Yii;

    /**
     * 
     */
    class ListInfo extends \yii\db\ActiveRecord{
        /**
         * 
         */
        public static function tableName(){
            return 'news';
        }

        public function rules(){
            return [
                // 去掉'news_id'
                [['news_title','news_img','news_content','news_time','founder'],'required'],
                [['news_title','news_img','founder','remarks'],'string', 'max' => 500]
            ];
        }

        public function attributeLabels(){
            return [
                'news_id' => '序号',
                'news_title' => '标题',
                'news_img' => '图片',
                'news_content' => '内容',
                'news_time' => '时间',
                'founder' => '创建人',
                'remarks' => '备注',
            ];
        }
    }
?>