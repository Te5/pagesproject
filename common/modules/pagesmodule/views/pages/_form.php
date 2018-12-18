<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\User;
/* @var $this yii\web\View */
/* @var $model common\modules\pagesmodule\models\Pages */
/* @var $form yii\widgets\ActiveForm */
use yii\helpers\ArrayHelper;
?>

<div class="pages-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => true, 'placeholder' => Yii::$app->user->identity->username]) ?>

<!--     <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?> -->

  <?= $form->field($model, 'category')->dropDownList(
    ArrayHelper::map($categories::find()->all(), 'cat_name', 'cat_name'), ['prompt' => 'Select Category']
  ) ?>  <!-- Ищет все категории  -->
    

    <?= $form->field($model, 'headline')->textInput(['maxlength' => true]) ?>

<!--     <?= $form->field($model, 'creation_date')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'updated_on')->textInput(['maxlength' => true]) ?> -->

<!--     <?= $form->field($model, 'rating')->textInput() ?>

<?= $form->field($model, 'status')->textInput() ?> -->

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true])->hint('Add some hashtags if you like. That allows other users to find your text more easily') ?>

    <div class="form-group">
        <?= Html::submitButton('Create', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
