<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Auftrag;

/**
 * AuftragSearch represents the model behind the search form about `app\models\Auftrag`.
 */
class AuftragSearch extends Auftrag
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'gruppe_auftrag', 'anfahrtszeit_min', 'start_ort', 'ziel_ort', 'ladung', 'fahrzeugtyp', 'nachfrage_fahrer', 'rueckmeldung_fahrer', 'angelegt_fahrer', 'stuetzpunkt', 'last_update_fahrer'], 'integer'],
            [['auftraggeber_name', 'auftraggeber_abteilung', 'auftraggeber_telefon', 'start', 'ziel', 'start_name', 'start_telefon', 'ziel_name', 'ziel_telefon', 'nachfrage', 'rueckmeldung', 'angelegt', 'last_update'], 'safe'],
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
        $query = Auftrag::find();

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
            'gruppe_auftrag' => $this->gruppe_auftrag,
            'anfahrtszeit_min' => $this->anfahrtszeit_min,
            'start' => $this->start,
            'ziel' => $this->ziel,
            'start_ort' => $this->start_ort,
            'ziel_ort' => $this->ziel_ort,
            'ladung' => $this->ladung,
            'fahrzeugtyp' => $this->fahrzeugtyp,
            'nachfrage_fahrer' => $this->nachfrage_fahrer,
            'nachfrage' => $this->nachfrage,
            'rueckmeldung_fahrer' => $this->rueckmeldung_fahrer,
            'rueckmeldung' => $this->rueckmeldung,
            'angelegt' => $this->angelegt,
            'angelegt_fahrer' => $this->angelegt_fahrer,
            'stuetzpunkt' => $this->stuetzpunkt,
            'last_update' => $this->last_update,
            'last_update_fahrer' => $this->last_update_fahrer,
        ]);

        $query->andFilterWhere(['like', 'auftraggeber_name', $this->auftraggeber_name])
            ->andFilterWhere(['like', 'auftraggeber_abteilung', $this->auftraggeber_abteilung])
            ->andFilterWhere(['like', 'auftraggeber_telefon', $this->auftraggeber_telefon])
            ->andFilterWhere(['like', 'start_name', $this->start_name])
            ->andFilterWhere(['like', 'start_telefon', $this->start_telefon])
            ->andFilterWhere(['like', 'ziel_name', $this->ziel_name])
            ->andFilterWhere(['like', 'ziel_telefon', $this->ziel_telefon]);

        return $dataProvider;
    }
}
