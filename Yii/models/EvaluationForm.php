<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "evaluation_form".
 *
 * @property integer $id
 * @property string $evltnfrm_number
 * @property string $evltnfrm_name
 */
class EvaluationForm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'evaluation_form';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['evltnfrm_number', 'evltnfrm_name'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'evltnfrm_number' => 'Evltnfrm Number',
            'evltnfrm_name' => 'Evltnfrm Name',
        ];
    }

    /**
     * @inheritdoc
     * @return EvaluationFormQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EvaluationFormQuery(get_called_class());
    }
}
