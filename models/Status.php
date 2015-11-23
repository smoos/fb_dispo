<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "status".
 *
 * @property integer $id
 * @property string $bezeichner
 * @property string $ziel
 */
class Status extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bezeichner', 'ziel'], 'required'],
            [['ziel'], 'string'],
            [['bezeichner'], 'string', 'max' => 45]
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
            'ziel' => 'Ziel',
        ];
    }
}
