<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h3>Welcome, you should be admin to see this</h3>


        <p><a class="btn btn-lg btn-success" href="../pagesmodule/pages/create">Create a static page</a></p>
        <p><a class="btn btn-lg btn-success" href="../pagesmodule/pages/index">View static pages</a></p> 
    </div>
    <div class="btn btn-sm btn-success"> <?= \yii\helpers\Html::a( 'Back', Yii::$app->request->referrer); ?> </div>  
    <div class="body-content">

        <div class="row">
    
</div>
