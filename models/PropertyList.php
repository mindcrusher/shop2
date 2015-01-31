<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "property_list".
 *
 * @property integer $id
 * @property integer $group_id
 * @property string $value
 *
 * @property PropertyGroups $group
 */
class PropertyList extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'property_list';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['group_id'], 'integer'],
            [['value'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'group_id' => 'Группа',
            'value' => 'Значение',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroup()
    {
        return $this->hasOne(PropertyGroups::className(), ['id' => 'group_id']);
    }
}
