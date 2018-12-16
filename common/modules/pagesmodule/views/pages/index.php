<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\modules\pagesmodule\models\PagesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'List of static pages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pages-index">

    <h1 align="center"><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p align="center">
        <?= Html::a('Create a page', ['create'], ['class' => 'btn btn-success']) ?>
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
