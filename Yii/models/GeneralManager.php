<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "general_manager".
 *
 * @property integer $id
 * @property string $gnrlmnger_number
 * @property string $gnrlmnger_name
 */
class GeneralManager extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'general_manager';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gnrlmnger_number', 'gnrlmnger_name'], 'required'],
            [['gnrlmnger_number', 'gnrlmnger_name'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'gnrlmnger_number' => 'Gnrlmnger Number',
            'gnrlmnger_name' => 'Gnrlmnger Name',
        ];
    }

    /**
     * @inheritdoc
     * @return GeneralManagerQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new GeneralManagerQuery(get_called_class());
    }
}
