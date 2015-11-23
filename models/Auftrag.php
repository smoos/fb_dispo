<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "auftrag".
 *
 * @property integer $id
 * @property integer $gruppe_auftrag
 * @property string $auftraggeber_name
 * @property string $auftraggeber_abteilung
 * @property string $auftraggeber_telefon
 * @property integer $anfahrtszeit_min
 * @property string $start
 * @property string $ziel
 * @property integer $start_ort
 * @property string $start_name
 * @property string $start_telefon
 * @property integer $ziel_ort
 * @property string $ziel_name
 * @property string $ziel_telefon
 * @property integer $ladung
 * @property integer $fahrzeugtyp
 * @property integer $nachfrage_fahrer
 * @property string $nachfrage
 * @property integer $rueckmeldung_fahrer
 * @property string $rueckmeldung
 * @property string $angelegt
 * @property integer $angelegt_fahrer
 * @property integer $stuetzpunkt
 * @property string $last_update
 * @property integer $last_update_fahrer
 */
class Auftrag extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'auftrag';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gruppe_auftrag', 'anfahrtszeit_min', 'start_ort', 'ziel_ort', 'ladung', 'fahrzeugtyp', 'nachfrage_fahrer', 'rueckmeldung_fahrer', 'angelegt_fahrer', 'stuetzpunkt', 'last_update_fahrer'], 'integer'],
            [['auftraggeber_name', 'auftraggeber_abteilung', 'auftraggeber_telefon', 'ziel', 'start_ort', 'start_name', 'ziel_ort', 'ziel_name', 'fahrzeugtyp', 'angelegt', 'angelegt_fahrer', 'stuetzpunkt', 'last_update_fahrer'], 'required'],
            [['start', 'ziel', 'nachfrage', 'rueckmeldung', 'angelegt', 'last_update'], 'safe'],
            [['auftraggeber_name', 'auftraggeber_telefon', 'start_name', 'start_telefon', 'ziel_name', 'ziel_telefon'], 'string', 'max' => 50],
            [['auftraggeber_abteilung'], 'string', 'max' => 40]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'gruppe_auftrag' => 'Gruppeauftrag',
            'auftraggeber_name' => 'Auftraggeber Name',
            'auftraggeber_abteilung' => 'Auftraggeber Abteilung',
            'auftraggeber_telefon' => 'Auftraggeber Telefon',
            'anfahrtszeit_min' => 'Anfahrtszeit Min',
            'start' => 'Start',
            'ziel' => 'Ziel',
            'start_ort' => 'Start Ort',
            'start_name' => 'Start Name',
            'start_telefon' => 'Start Telefon',
            'ziel_ort' => 'Ziel Ort',
            'ziel_name' => 'Ziel Name',
            'ziel_telefon' => 'Ziel Telefon',
            'ladung' => 'Ladung',
            'fahrzeugtyp' => 'Fahrzeugtyp',
            'nachfrage_fahrer' => 'Nachfrage Fahrer',
            'nachfrage' => 'Nachfrage',
            'rueckmeldung_fahrer' => 'Rueckmeldung Fahrer',
            'rueckmeldung' => 'Rueckmeldung',
            'angelegt' => 'Angelegt',
            'angelegt_fahrer' => 'Angelegt Fahrer',
            'stuetzpunkt' => 'Stuetzpunkt',
            'last_update' => 'Last Update',
            'last_update_fahrer' => 'Last Update Fahrer',
        ];
    }
}
