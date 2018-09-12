<?php

use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>

<h3>Profile<strong> <? echo Html::encode($user->username) ?></strong></h3>
<hr>
<h3>About: <br><br>  <? echo HTMLPurifier::process($user->about); ?></h3>


