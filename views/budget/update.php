<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Budget */

$this->title = 'Update Budget: ' . $model->budget_id;
$this->params['breadcrumbs'][] = ['label' => 'Budgets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->budget_id, 'url' => ['view', 'id' => $model->budget_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="budget-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
