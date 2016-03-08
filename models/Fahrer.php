<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fahrer".
 *
 * @property integer $id
 * @property integer $tag
 * @property string $vorname
 * @property string $nachname
 * @property string $nickname
 * @property integer $klasse
 * @property string $telefonnummer
 * @property integer $stuetzpunkt
 * @property string $buero
 * @property string $admin
 * @property string $passwort
 */
class Fahrer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fahrer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tag', 'klasse', 'stuetzpunkt'], 'integer'],
            [['vorname', 'nachname', 'nickname', 'telefonnummer', 'passwort'], 'string', 'max' => 50],
            [['buero', 'admin'], 'string', 'max' => 1],
            [['telefonnummer'], 'unique'],
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
            'tag' => 'Tag',
            'vorname' => 'Vorname',
            'nachname' => 'Nachname',
            'nickname' => 'Nickname',
            'klasse' => 'Klasse',
            'telefonnummer' => 'Telefonnummer',
            'stuetzpunkt' => 'Stuetzpunkt',
            'buero' => 'Buero',
            'admin' => 'Admin',
            'passwort' => 'Passwort',
        ];
    }
}
