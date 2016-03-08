<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ladung".
 *
 * @property integer $id
 * @property integer $auftrag
 * @property string $art
 * @property string $bezeichner
 * @property integer $anzahl
 */
class Ladung extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ladung';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['auftrag', 'art', 'bezeichner'], 'required'],
            [['auftrag', 'anzahl'], 'integer'],
            [['art'], 'string'],
            [['bezeichner'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'auftrag' => 'Auftrag',
            'art' => 'Art',
            'bezeichner' => 'Bezeichner',
            'anzahl' => 'Anzahl',
        ];
    }
}
