<?php 

use yii\helpers\Html;


$this->title = "Buyer";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<p>
        <?= Html::a('Create Buyer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<table class="table table-bordered">
    <tr>
        
        <th>Name</th>
        <th>Asl</th>
        <th>Address</th>
       
     </tr>
    <?php foreach($model as $model) : ?>
    <tr>
    
    <td>
            <?= Html::a($model->name, ['/buyer/view', 'id'=>$model->id]); ?>
        </td> 
        <td><?= $model->asl ?></td>
        <td><?= $model->address ?></td>
         
        
    </tr>
    <?php endforeach; ?>
</table>
