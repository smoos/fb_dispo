<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fahrzeugtyp".
 *
 * @property integer $id
 * @property string $bezeichner
 * @property integer $plaetze
 * @property integer $klasse
 * @property integer $zuladung_kg
 * @property integer $laderaum_ltr
 * @property string $dimension_cm
 */
class Fahrzeugtyp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fahrzeugtyp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['plaetze', 'klasse', 'zuladung_kg', 'laderaum_ltr'], 'integer'],
            [['bezeichner'], 'string', 'max' => 20],
            [['dimension_cm'], 'string', 'max' => 50],
            [['bezeichner'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'bezeichner' => 'Bezeichner',
            'plaetze' => 'Plaetze',
            'klasse' => 'Klasse',
            'zuladung_kg' => 'Zuladung Kg',
            'laderaum_ltr' => 'Laderaum Ltr',
            'dimension_cm' => 'Dimension Cm',
        ];
    }

    public function getKlasse()
    {
	return $this->hasOne(Klasse::className(), ['id' => 'klasse']);
    }
}
