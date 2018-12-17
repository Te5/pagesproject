<?php

namespace common\modules\pagesmodule\models;

use Yii;

/**
 * This is the model class for table "categories".
 *
 * @property int $id
 * @property int $parent_id
 * @property string $slug
 * @property string $cat_name
 * @property int $status
 */
class Categories extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parent_id', 'slug', 'cat_name', 'status'], 'required'],
            [['parent_id', 'status'], 'integer'],
            [['slug', 'cat_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Parent ID',
            'slug' => 'Slug',
            'cat_name' => 'Cat Name',
            'status' => 'Status',
        ];
    }
}
