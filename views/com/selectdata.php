<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\ComSearch;
/* @var $this yii\web\View */
// @var $searchModel app\models\ComSearch ;
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Select Data From Com Table';
$this->params['breadcrumbs'][] = $this->title;
//print_r($com);
?>
<div class="com-index">

    <h1><?= Html::encode($this->title) ?></h1>
<?php // echo $this->render('_search', ['model' => $com]);  ?>
</div>
<table class="table table-responsive table-hover table-bordered">
    <thead>
        <tr class="success">
            <th>ที่</th>
            <th>ยี่ห้อ</th>
            <th>รหัสครุภัณฑ์</th>
            <th>ราคา</th>
        </tr>
    </thead>
    <tbody>
<?php
foreach ($com as $key => $value) {
    //echo $value['brand'].'<br>'; // เข้าถึงข้อมูลในรูปแบบ array
    //echo '. ''   ''<br>'; // เข้าถึงข้อมูลในรูปแบบ object
    echo '<tr>
    <td>' . ($key + 1) . '</td>
    <td>' . $value->brand . '</td>
    <td>' . $value->asset_code . '</td>
  <td>' . $value->price . '</td>        
    </tr>';
}
?>


    </tbody>
</table>
