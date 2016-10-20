<?php
$this->params['breadcrumbs'][] = ['label' => 'ประเภทคอม', 'url' => ['/reportcomtype/index']];
 
//print_r($data)
?>
<table class="table table-responsive table-hover table-bordered">
    <thead>
        <tr class="success">
            <th>ที่</th>
            <th>ยี่ห้อ</th>
            <th>ชนิดคอมฯ</th>
            <th>รหัสครุภัณฑ์</th>
            <th>ราคา</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($data as $key => $value) {
            //echo $value['brand'].'<br>'; // เข้าถึงข้อมูลในรูปแบบ array
            //echo '. ''   ''<br>'; // เข้าถึงข้อมูลในรูปแบบ object
//            echo '<tr>
//    <td>' . ($key + 1) . '</td>
//    <td>' . $value['brand'] . '</td>
//    <td>' . $value['asset_code'] . '</td>
//  <td>' . $value['price'] . '</td>        
//    </tr>';

//  join 2 table   com and com type
            echo '<tr>
    <td>' . ($key + 1) . '</td>
    <td>' . $value['brand'] . '</td>
        <td>' . $value['com_type_name'] . '</td>
    <td>' . $value['asset_code'] . '</td>
  <td>' . $value['price'] . '</td>        
    </tr>';
        }
        ?>


    </tbody>
</table>