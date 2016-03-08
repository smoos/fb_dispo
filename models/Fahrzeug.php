<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fahrzeug".
 *
 * @property integer $id
 * @property integer $typ
 * @property integer $tag
 * @property string $kennzeichen
 * @property string $schluessel
 * @property integer $stuetzpunkt
 * @property integer $km_abholung
 * @property integer $km_dekt_start
 * @property integer $km_dekt_ende
 * @property integer $km_abgabe
 */
class Fahrzeug extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fahrzeug';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['typ', 'tag', 'stuetzpunkt', 'km_abholung', 'km_dekt_start', 'km_dekt_ende', 'km_abgabe'], 'integer'],
            [['kennzeichen'], 'string', 'max' => 10],
            [['schluessel'], 'string', 'max' => 6],
            [['kennzeichen'], 'unique'],
            [['schluessel'], 'unique'],
            [['tag'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'typ' => 'Typ',
            'tag' => 'Tag',
            'kennzeichen' => 'Kennzeichen',
            'schluessel' => 'Schluessel',
            'stuetzpunkt' => 'Stuetzpunkt',
            'km_abholung' => 'Km Abholung',
            'km_dekt_start' => 'Km Dekt Start',
            'km_dekt_ende' => 'Km Dekt Ende',
            'km_abgabe' => 'Km Abgabe',
        ];
    }
}
