<?php

namespace app\controllers;

class ReportcomserviceController extends \yii\web\Controller {

    public function actionIndex() {

        $conn = \Yii::$app->db;
        $sql = 'select c.brand,s.* from com_service s left join com c on c.com_id=s.com_id';
        $cmd = $conn->createCommand($sql);
        $data = $cmd->queryAll();
//        print_r($data);
//        die();
        return $this->render('index', ['data' => $data]);
    }

}
