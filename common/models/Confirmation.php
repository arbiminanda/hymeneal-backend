<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "confirmation".
 *
 * @property string $timestamp
 * @property string $name
 * @property string $greetings
 * @property string $presences
 * @property string $amount
 */
class Confirmation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'confirmation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['timestamp'], 'safe'],
            [['name', 'greetings', 'presences', 'amount'], 'required'],
            [['name', 'greetings', 'presences', 'amount'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'timestamp' => 'Timestamp',
            'name' => 'Name',
            'greetings' => 'Greetings',
            'presences' => 'Presences',
            'amount' => 'Amount',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\ConfirmationQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ConfirmationQuery(get_called_class());
    }
}
