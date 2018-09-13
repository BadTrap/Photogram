<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'Photogram';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully visit Photogram site</p>

    </div>

    <div class="body-content">
        <h2>Users:</h2>
        <div class="row">
            <div class="col-lg-12">

                <? foreach ($users as $user): ?>
                <a href="<? echo Url::to(['user/profile/view', 'nickname' => $user->getNickname()]); ?>">
                <? echo "<hr><p style='font-size: 20px'>".$user->username."</p><hr>"; ?>
                </a>
                <? endforeach; ?>
            </div>
        </div>

    </div>

</div>
