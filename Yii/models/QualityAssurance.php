<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "quality_assurance".
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 */
class QualityAssurance extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'quality_assurance';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            [['username', 'password'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
        ];
    }

    /**
     * @inheritdoc
     * @return QualityAssuranceQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new QualityAssuranceQuery(get_called_class());
    }
}
