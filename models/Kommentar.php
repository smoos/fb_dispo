<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kommentar".
 *
 * @property integer $id
 * @property string $text
 * @property integer $fahrer
 * @property string $angelegt
 * @property integer $status
 * @property string $ziel
 * @property integer $ziel_id
 */
class Kommentar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kommentar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text', 'fahrer', 'angelegt', 'ziel', 'ziel_id'], 'required'],
            [['fahrer', 'status', 'ziel_id'], 'integer'],
            [['angelegt'], 'safe'],
            [['ziel'], 'string'],
            [['text'], 'string', 'max' => 1024]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
            'fahrer' => 'Fahrer',
            'angelegt' => 'Angelegt',
            'status' => 'Status',
            'ziel' => 'Ziel',
            'ziel_id' => 'Ziel ID',
        ];
    }
}
