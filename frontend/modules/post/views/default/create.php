<?php

 use yii\widgets\ActiveForm;
 use yii\helpers\Html;

 ?>
<div class="post-default-index">
    <h1>Create Post:</h1>

    <?php $form = ActiveForm::begin(); ?>
        <?php echo $form->field($model, 'picture')->fileInput(); ?>
        <?php echo $form->field($model, 'description'); ?>
     <?php echo Html::submitButton('Create Post') ?>
    <?php $form = ActiveForm::end(); ?>

</div>
