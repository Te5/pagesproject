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
 * @property int $status 0 - shown, default. 1 - hidden. 3 - for authorized users only. 4 - admin only.
 * @property string $content
 * @property string $keywords
 *
 * @property Categories $category0
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
            [['author', 'category', 'headline', 'content'], 'required'],
            [['creation_date', 'updated_on'], 'safe'],
            [['rating'], 'number'],
            [['status'], 'integer'],
            [['content'], 'string'],
            [['author', 'slug', 'headline'], 'string', 'max' => 64],
            [['category', 'keywords'], 'string', 'max' => 255],
            [['category'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::className(), 'targetAttribute' => ['category' => 'cat_name']],
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
            'keywords' => 'Keywords',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory0()
    {
        return $this->hasOne(Categories::className(), ['cat_name' => 'category']);
    }
    // возвращает массив всех хэштегов для дальнейшего использования
    public function getKeywordsArray($id) 
    {
        $keywordintext = explode(', ', $this->findOne(['id' => $id])->keywords);
        return $keywordintext;
    }
}
