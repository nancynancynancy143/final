<?php 

use yii\helpers\Html;


$this->title = "shoes";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<p>
        <?= Html::a('Create shoes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<table class="table table-bordered">
    <tr>
        
        <th>name</th>
        <th>description</th>
        <th>amount</th>
       
     </tr>
    <?php foreach($model as $model) : ?>
    <tr>
    
    <td>
            <?= Html::a($model->name, ['/shoes/view', 'id'=>$model->id]); ?>
        </td>  
        <td><?= $model->description ?></td>
        <td><?= $model->amount ?></td>
         
        
    </tr>
    <?php endforeach; ?>
</table>
