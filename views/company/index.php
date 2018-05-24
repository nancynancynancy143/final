<?php 

use yii\helpers\Html;


$this->title = "company";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<p>
        <?= Html::a('Create company', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<table class="table table-bordered">
    <tr>
        
        <th>Name</th>
        <th>Location</th>
        <th>Buyer Id</th>
        <th>Shoes Id</th>
       
     </tr>
    <?php foreach($model as $model) : ?>
    <tr>
    
    <td>
            <?= Html::a($model->name, ['/company/view', 'id'=>$model->id]); ?>
        </td>  
        <td><?= $model->location ?></td>
        <td><?= $model->buyer_id ?></td>
        <td><?= $model->shoes_id ?></td>
         
        
    </tr>
    <?php endforeach; ?>
</table>
