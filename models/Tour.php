<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tour".
 *
 * @property integer $id
 * @property integer $fahrtenbuch
 * @property integer $auftrag_ausfuehrung
 * @property string $start
 * @property string $ende
 */
class Tour extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tour';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fahrtenbuch', 'auftrag_ausfuehrung', 'start'], 'required'],
            [['fahrtenbuch', 'auftrag_ausfuehrung'], 'integer'],
            [['start', 'ende'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fahrtenbuch' => 'Fahrtenbuch',
            'auftrag_ausfuehrung' => 'Auftrag Ausfuehrung',
            'start' => 'Start',
            'ende' => 'Ende',
        ];
    }
}
