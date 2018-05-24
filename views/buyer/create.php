<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\buyer */

$this->title = 'Create buyer';
$this->params['breadcrumbs'][] = ['label' => 'buyer', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="buyer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>