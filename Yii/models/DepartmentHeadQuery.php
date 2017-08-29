<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[DepartmentHead]].
 *
 * @see DepartmentHead
 */
class DepartmentHeadQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return DepartmentHead[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return DepartmentHead|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
