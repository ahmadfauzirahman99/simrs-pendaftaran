<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\FolioVerifikatorLabXt;

/**
 * FolioVerifikatorLabXtSearch represents the model behind the search form of `app\models\FolioVerifikatorLabXt`.
 */
class FolioVerifikatorLabXtSearch extends FolioVerifikatorLabXt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fol_id', 'created_user_id'], 'integer'],
            [['date_post'], 'safe'],
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
        $query = FolioVerifikatorLabXt::find();

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
            'fol_id' => $this->fol_id,
            'date_post' => $this->date_post,
            'created_user_id' => $this->created_user_id,
        ]);

        return $dataProvider;
    }
}
