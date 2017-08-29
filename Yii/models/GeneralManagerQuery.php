<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[GeneralManager]].
 *
 * @see GeneralManager
 */
class GeneralManagerQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return GeneralManager[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return GeneralManager|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
