<?php
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
?>

<h1>first/index</h1>


<h2>
    <?php
    echo $title;
    echo '<br>';
    echo $report;
    ?>
</h2>
<table class="table table-hover table-responsive ">
    <thead >
        <tr class="info">
            <th>No</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // print_r($arr);
//        foreach ($arr as $value) {
//            echo'<tr class = "success"> <td>' . $value['fname'] . '</td> <td>'
//                    . $value['lname'] . '</td> <td>' 
//                    . $value['email'] . '</td> </tr>';
//        }
        // print_r($arr);
        foreach ($arr as $key => $value) {
            echo'<tr class = "success"> '
            . '<td>' . ($key + 1) . '</td> '
            . '<td>' . $value['fname'] . '</td>'
            . ' <td>' . $value['lname'] . '</td> '
            . '<td>' . $value['email'] . '</td> '
            . '</tr>';
        }
        ?>
    </tbody>
</table>
