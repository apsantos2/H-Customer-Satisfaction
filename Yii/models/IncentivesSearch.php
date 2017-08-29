<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Incentives;

/**
 * IncentivesSearch represents the model behind the search form about `app\models\Incentives`.
 */
class IncentivesSearch extends Incentives
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['inctvs_claim', 'inctvs_price', 'inctvs_expiration'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Incentives::find();

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
        ]);

        $query->andFilterWhere(['like', 'inctvs_claim', $this->inctvs_claim])
            ->andFilterWhere(['like', 'inctvs_price', $this->inctvs_price])
            ->andFilterWhere(['like', 'inctvs_expiration', $this->inctvs_expiration]);

        return $dataProvider;
    }
}
