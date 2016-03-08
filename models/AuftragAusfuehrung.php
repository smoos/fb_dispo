<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "auftrag_ausfuehrung".
 *
 * @property string $id
 * @property string $auftrag
 * @property string $start
 * @property string $ende
 * @property string $last_update
 */
class AuftragAusfuehrung extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'auftrag_ausfuehrung';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['auftrag', 'start'], 'required'],
            [['start', 'ende', 'last_update'], 'safe'],
            [['auftrag'], 'string', 'max' => 45],
            [['auftrag', 'start'], 'unique', 'targetAttribute' => ['auftrag', 'start'], 'message' => 'The combination of Auftrag and Start has already been taken.']
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
            'start' => 'Start',
            'ende' => 'Ende',
            'last_update' => 'Last Update',
        ];
    }
}
