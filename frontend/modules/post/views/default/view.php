<?php

use yii\helpers\Html;

?>

<div class="post-default-index">

    <div class="row">
        <hr>
        <div class="col-md-12">
            <?php if ($post->user): ?>
                <?php echo $post->user->username; ?>
            <?php endif; ?>
        </div>

        <hr>


            <div class="col-lg-3">
                <img height="480" width="640"src="<?php echo $post->getImage(); ?>" />
            </div>

            <hr>
            <div class="col-lg-12">
                <?php echo Html::encode($post->description); ?>
            </div>
        </div>

    </div>

    <hr>
