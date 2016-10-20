<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Budget */

$this->title = 'แก้ไขงบประมาณ: ' . $model->budget_id;
$this->params['breadcrumbs'][] = ['label' => 'งบประมาณ', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->budget_id, 'url' => ['view', 'id' => $model->budget_id]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="budget-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
