<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "incentives".
 *
 * @property integer $id
 * @property string $inctvs_claim
 * @property string $inctvs_price
 * @property string $inctvs_expiration
 */
class Incentives extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'incentives';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['inctvs_claim', 'inctvs_price', 'inctvs_expiration'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'inctvs_claim' => 'Inctvs Claim',
            'inctvs_price' => 'Inctvs Price',
            'inctvs_expiration' => 'Inctvs Expiration',
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
