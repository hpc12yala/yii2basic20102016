<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
?>
<h1>reportcomtypel/index</h1>

<table class="table table-responsive table-hover table-bordered">
    <thead>
        <tr class="success">
            <th>ที่</th>
            <th>รหัสชนิดคอมฯ</th>
            <th>ชื่อชนิดคอมฯ</th>
           
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($data as $key => $value) {
            //echo $value['brand'].'<br>'; // เข้าถึงข้อมูลในรูปแบบ array
            //echo '. ''   ''<br>'; // เข้าถึงข้อมูลในรูปแบบ object
            echo '<tr>
    <td>' . ($key + 1) . '</td>
    <td>' . $value['com_type_id'] . '</td>
    <td>' .Html::a('<span class="glyphicon glyphicon-th-large"></span> '.$value['com_type_name'], ['/reportcomdetail','id'=>$value['com_type_id']]). '</td>
    </tr>';
        }
        ?>


    </tbody>
</table>