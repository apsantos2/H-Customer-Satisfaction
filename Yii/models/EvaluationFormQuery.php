<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[EvaluationForm]].
 *
 * @see EvaluationForm
 */
class EvaluationFormQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return EvaluationForm[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return EvaluationForm|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
