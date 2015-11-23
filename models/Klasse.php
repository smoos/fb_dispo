<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "klasse".
 *
 * @property integer $id
 * @property string $bezeichner
 */
class Klasse extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'klasse';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bezeichner'], 'string', 'max' => 20],
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
        ];
    }
}
