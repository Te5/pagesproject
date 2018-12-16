<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\modules\publications\models\SearchPublications */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Publications';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="publications-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Publications', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'author',
            'slug',
            'category',
            'headline',
            //'creation_date',
            //'updated_on',
            //'rating',
            //'status',
            //'content:ntext',
            //'meta_description',
            //'meta_keywords',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
