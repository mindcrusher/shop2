<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "property_groups".
 *
 * @property integer $id
 * @property string $name
 *
 * @property PropertyList[] $propertyLists
 */
class PropertyGroup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'property_groups';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPropertyLists()
    {
        return $this->hasMany(PropertyList::className(), ['group_id' => 'id']);
    }
}
