<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property integer $id
 * @property string $cust_number
 * @property string $cust_name
 * @property string $cust_email
 * @property string $cust_type
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cust_number', 'cust_name', 'cust_email'], 'required'],
            [['cust_number', 'cust_name', 'cust_email', 'cust_type'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cust_number' => 'Cust Number',
            'cust_name' => 'Cust Name',
            'cust_email' => 'Cust Email',
            'cust_type' => 'Cust Type',
        ];
    }

    /**
     * @inheritdoc
     * @return IncentivesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new IncentivesQuery(get_called_class());
    }
}
