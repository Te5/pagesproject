<?php

namespace common\modules\pagesmodule\models;

use Yii;

/**
 * This is the model class for table "pages".
 *
 * @property string $id
 * @property string $author
 * @property string $slug
 * @property string $category
 * @property string $headline
 * @property string $creation_date
 * @property string $updated_on
 * @property double $rating
 * @property int $status
 * @property string $content
 * @property string $meta_description
 * @property string $meta_keywords
 */
class Pages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['author', 'slug', 'category', 'headline', 'creation_date', 'updated_on', 'content', 'meta_description', 'meta_keywords'], 'required'],
            [['creation_date', 'updated_on'], 'safe'],
            [['rating'], 'number'],
            [['status'], 'integer'],
            [['content'], 'string'],
            [['author', 'slug', 'category', 'headline'], 'string', 'max' => 64],
            [['meta_description', 'meta_keywords'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'author' => 'Author',
            'slug' => 'Slug',
            'category' => 'Category',
            'headline' => 'Headline',
            'creation_date' => 'Creation Date',
            'updated_on' => 'Updated On',
            'rating' => 'Rating',
            'status' => 'Status',
            'content' => 'Content',
            'meta_description' => 'Meta Description',
            'meta_keywords' => 'Meta Keywords',
        ];
    }
}
