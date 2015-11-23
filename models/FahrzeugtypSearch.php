<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Fahrzeugtyp;

/**
 * FahrzeugtypSearch represents the model behind the search form about `app\models\Fahrzeugtyp`.
 */
class FahrzeugtypSearch extends Fahrzeugtyp
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'plaetze', 'klasse', 'zuladung_kg', 'laderaum_ltr'], 'integer'],
            [['bezeichner', 'dimension_cm'], 'safe'],
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
        $query = Fahrzeugtyp::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'plaetze' => $this->plaetze,
            'klasse' => $this->klasse,
            'zuladung_kg' => $this->zuladung_kg,
            'laderaum_ltr' => $this->laderaum_ltr,
        ]);

        $query->andFilterWhere(['like', 'bezeichner', $this->bezeichner])
            ->andFilterWhere(['like', 'dimension_cm', $this->dimension_cm]);

        return $dataProvider;
    }
}
