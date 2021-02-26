<?php
use yii\grid\GridView;
use yii\data\ActiveDataProvider;
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'PHP-Test';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully login.</p>

         <p><a class="btn btn-lg btn-success" href="index.php?r=item">Items informations(CRUD)</a></p>
    </div>

<h1>List customers (Users)</h1>
<div class="col-lg-10">
<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Username</th>
      <th>Data</th>
      <th>View Details</th>
    </tr>
  </thead>
  <tbody>
<?php 
    foreach ($users as $row) { ?>
    <tr>
      <th scope="row"> <?= $row['id'] ?></th>
      <td> <?= $row['username'] ?> </td>
      <td>user data</td>
      <td><?= Html::a('View' , '?r=site/userdetails&id='.$row['id']) ?></td>
    </tr>
<?php }?>
  </tbody>
</table>
</div>


    </div>
</div>
