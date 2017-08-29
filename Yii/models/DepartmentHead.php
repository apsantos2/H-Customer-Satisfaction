<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "department_head".
 *
 * @property integer $id
 * @property string $depthead_number
 * @property string $depthead_position
 */
class DepartmentHead extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'department_head';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'depthead_position'], 'required'],
            [['id'], 'integer'],
            [['depthead_number', 'depthead_position'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'depthead_number' => 'Depthead Number',
            'depthead_position' => 'Depthead Position',
        ];
    }

    /**
     * @inheritdoc
     * @return DepartmentHeadQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DepartmentHeadQuery(get_called_class());
    }
}
