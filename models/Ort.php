<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ort".
 *
 * @property integer $id
 * @property string $kurz
 * @property string $name
 * @property string $zusatz
 * @property string $zweitname
 * @property string $hinweis
 * @property string $strasse
 * @property string $plz
 * @property string $stadt
 * @property string $stadtteil
 * @property string $stadtplannr
 * @property string $stadtplanko
 * @property string $parkplatzbeschreibung
 * @property string $lageplan_dateiname
 */
class Ort extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ort';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kurz', 'name', 'zusatz', 'zweitname', 'hinweis', 'strasse', 'plz', 'stadt', 'stadtteil', 'stadtplannr', 'stadtplanko', 'parkplatzbeschreibung', 'lageplan_dateiname'], 'required'],
            [['kurz', 'name', 'zusatz', 'zweitname', 'hinweis', 'strasse', 'plz', 'stadt', 'stadtteil', 'stadtplannr', 'stadtplanko', 'parkplatzbeschreibung', 'lageplan_dateiname'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kurz' => 'Kurz',
            'name' => 'Name',
            'zusatz' => 'Zusatz',
            'zweitname' => 'Zweitname',
            'hinweis' => 'Hinweis',
            'strasse' => 'Strasse',
            'plz' => 'Plz',
            'stadt' => 'Stadt',
            'stadtteil' => 'Stadtteil',
            'stadtplannr' => 'Stadtplannr',
            'stadtplanko' => 'Stadtplanko',
            'parkplatzbeschreibung' => 'Parkplatzbeschreibung',
            'lageplan_dateiname' => 'Lageplan Dateiname',
        ];
    }
}
