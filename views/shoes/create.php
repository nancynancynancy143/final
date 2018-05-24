<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\shoes */

$this->title = 'Create shoes';
$this->params['breadcrumbs'][] = ['label' => 'shoes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shoes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>