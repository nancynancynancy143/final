<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\buyer;
use app\models\shoes;

/* @var $this yii\web\View */
/* @var $model common\models\company */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="company-form">

    <?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'buyer_id')->dropDownList(ArrayHelper::map(
    	buyer::find()->asArray()->all(), 'id','name')) ?>

    <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shoes_id')->dropDownList(ArrayHelper::map(
    	Shoes::find()->asArray()->all(), 'id','name')) ?>

    
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
<div class="alert alert-warning">
    <?= $form->errorSummary($model);?>
    </div>
    <?php ActiveForm::end(); ?>

</div>
