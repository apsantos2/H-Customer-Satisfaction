<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[QualityAssurance]].
 *
 * @see QualityAssurance
 */
class QualityAssuranceQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return QualityAssurance[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return QualityAssurance|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
