<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Item */

$this->title = "user id :". $user->id ;
?>

<div class="item-view">

    <h1><?= Html::encode($this->title) ?></h1>


<div class="col-md-4">
    <?= DetailView::widget([
        'model' => $user,
        'attributes' => [
            'id',
            'username',
            'password',
        ],
    ]) ?>
</div>

</div>