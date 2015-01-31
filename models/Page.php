<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pages".
 *
 * @property integer $id
 * @property string $annotation
 * @property string $title
 * @property string $text
 * @property integer $is_active
 */
class Page extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text'], 'string'],
            [['is_active'], 'integer'],
            [['annotation'], 'string', 'max' => 255],
            [['title'], 'string', 'max' => 63]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'annotation' => 'Описание',
            'title' => 'Заголовок',
            'text' => 'Текст',
            'is_active' => 'Активность',
        ];
    }
}
