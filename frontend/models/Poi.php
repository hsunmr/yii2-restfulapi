<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "poi".
 *
 * @property int $id
 * @property string $title
 * @property string $category
 * @property int $created_at
 * @property int $updated_at
 */
class Poi extends \yii\db\ActiveRecord
{
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'poi';
    }
    
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'category'], 'required'],
            [['created_at', 'updated_at'], 'integer'],
            [['title', 'category'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'category' => 'Category',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
    
}
