<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Fahrer;

/**
 * FahrerSearch represents the model behind the search form about `app\models\Fahrer`.
 */
class FahrerSearch extends Fahrer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'tag', 'klasse', 'stuetzpunkt', 'buero', 'admin'], 'integer'],
            [['vorname', 'nachname', 'nickname', 'telefonnummer', 'passwort'], 'safe'],
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
        $query = Fahrer::find();

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
            'tag' => $this->tag,
            'klasse' => $this->klasse,
            'stuetzpunkt' => $this->stuetzpunkt,
            'buero' => $this->buero,
            'admin' => $this->admin,
        ]);

        $query->andFilterWhere(['like', 'vorname', $this->vorname])
            ->andFilterWhere(['like', 'nachname', $this->nachname])
            ->andFilterWhere(['like', 'nickname', $this->nickname])
            ->andFilterWhere(['like', 'telefonnummer', $this->telefonnummer])
            ->andFilterWhere(['like', 'passwort', $this->passwort]);

        return $dataProvider;
    }
}
