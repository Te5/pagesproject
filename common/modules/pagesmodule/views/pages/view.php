<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\modules\pagesmodule\models\Pages */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->headline;
\yii\web\YiiAsset::register($this);
?>
<div class="pages-view">

    <h1><?= Html::encode($model->headline) ?></h1>
    <p><?=Html::encode($model->content) ?></p>
    <p> Created on: <?=Html::encode($model->creation_date) ?></p>
    <p>By: <?=Html::encode($model->author) ?></p>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [    
            'id',
            'author',
            'slug',
            'category',
            'headline',
            'creation_date',
            'updated_on',
            'rating',
            'status',
            'keywords',
        ],
    ]) ?>    
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>



</div>
