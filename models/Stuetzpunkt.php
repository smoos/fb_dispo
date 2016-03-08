<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "stuetzpunkt".
 *
 * @property integer $id
 * @property string $bezeichner
 */
class Stuetzpunkt extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'stuetzpunkt';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bezeichner'], 'string', 'max' => 50]
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
        ];
    }
}
