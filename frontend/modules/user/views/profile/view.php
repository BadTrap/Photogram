<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>

<h3>Profile<strong> <? echo Html::encode($user->username) ?></strong></h3>
<hr>
<h3>About: <br><br>  <? echo HTMLPurifier::process($user->about); ?></h3>

<a href=" <? echo Url::to(['/user/profile/subscribe', 'id' => $user->getId()]); ?>" class="btn btn-info">Subscribe</a>
<a href=" <? echo Url::to(['/user/profile/unsubscribe', 'id' => $user->getId()]); ?>" class="btn btn-info">Unsubscribe</a>
