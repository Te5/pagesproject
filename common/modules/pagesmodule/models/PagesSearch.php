<?php

namespace common\modules\pagesmodule\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\modules\pagesmodule\models\Pages;

/**
 * PagesSearch represents the model behind the search form of `common\modules\pagesmodule\models\Pages`.
 */
class PagesSearch extends Pages
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'status'], 'integer'],
            [['author', 'slug', 'category', 'headline', 'creation_date', 'updated_on', 'content', 'meta_description', 'meta_keywords'], 'safe'],
            [['rating'], 'number'],
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
        $query = Pages::find();

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
            'creation_date' => $this->creation_date,
            'updated_on' => $this->updated_on,
            'rating' => $this->rating,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'author', $this->author])
            ->andFilterWhere(['like', 'slug', $this->slug])
            ->andFilterWhere(['like', 'category', $this->category])
            ->andFilterWhere(['like', 'headline', $this->headline])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'meta_description', $this->meta_description])
            ->andFilterWhere(['like', 'meta_keywords', $this->meta_keywords]);

        return $dataProvider;
    }
}
