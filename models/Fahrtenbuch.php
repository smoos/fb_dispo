<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fahrtenbuch".
 *
 * @property string $id
 * @property string $fahrer
 * @property string $fahrzeug
 * @property string $start
 * @property string $ende
 */
class Fahrtenbuch extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fahrtenbuch';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fahrer', 'fahrzeug', 'start'], 'required'],
            [['fahrer', 'fahrzeug'], 'integer'],
            [['start', 'ende'], 'safe'],
            [['fahrer', 'fahrzeug', 'start'], 'unique', 'targetAttribute' => ['fahrer', 'fahrzeug', 'start'], 'message' => 'The combination of Fahrer, Fahrzeug and Start has already been taken.']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fahrer' => 'Fahrer',
            'fahrzeug' => 'Fahrzeug',
            'start' => 'Start',
            'ende' => 'Ende',
        ];
    }
}
