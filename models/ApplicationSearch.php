<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Application;

/**
 * ApplicationSearch represents the model behind the search form of `app\models\Application`.
 */
class ApplicationSearch extends Application
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'app_id', 'created_at', 'updated_at', 'region_id', 'count', 'app_status', 'client_price', 'expert_price', 'created_date', 'executor_id'], 'integer'],
            [['item_name', 'app_desc', 'current_residence', 'front_img', 'top_img', 'sign_img', 'technique', 'size', 'mass_media_source', 'author'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $user_id = isset(\Yii::$app->user->identity->id) ? \Yii::$app->user->identity->id : 0;
        $query = Application::find()->where(['user_id' => $user_id]);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'user_id' => $this->user_id,
            'app_id' => $this->app_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'region_id' => $this->region_id,
            'count' => $this->count,
            'app_status' => $this->app_status,
            'client_price' => $this->client_price,
            'expert_price' => $this->expert_price,
            'created_date' => $this->created_date,
            'executor_id' => $this->executor_id,
        ]);

        $query->andFilterWhere(['like', 'item_name', $this->item_name])
            ->andFilterWhere(['like', 'app_desc', $this->app_desc])
            ->andFilterWhere(['like', 'current_residence', $this->current_residence])
            ->andFilterWhere(['like', 'front_img', $this->front_img])
            ->andFilterWhere(['like', 'top_img', $this->top_img])
            ->andFilterWhere(['like', 'sign_img', $this->sign_img])
            ->andFilterWhere(['like', 'technique', $this->technique])
            ->andFilterWhere(['like', 'size', $this->size])
            ->andFilterWhere(['like', 'mass_media_source', $this->mass_media_source])
            ->andFilterWhere(['like', 'author', $this->author]);

        return $dataProvider;
    }
}
