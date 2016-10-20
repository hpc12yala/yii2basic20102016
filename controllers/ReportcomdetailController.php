<?php

namespace app\controllers;

class ReportcomdetailController extends \yii\web\Controller {

    public function actionIndex($id) {
//        echo $id;
//        die();
        $conn = \Yii::$app->db;
        //$sql='select * from com';
        $sql = 'SELECT *
from com, com_type
WHERE com.com_type_id=com_type.com_type_id AND com.com_type_id=:id';
        
        $cmd = $conn->createCommand($sql);
        $cmd->bindValue(':id',$id);// Condition
        $data = $cmd->queryAll();
//        print_r($data);
//        die();
        return $this->render('index', ['data' => $data]);
    }

}
