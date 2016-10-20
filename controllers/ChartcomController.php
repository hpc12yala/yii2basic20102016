<?php

namespace app\controllers;

class ChartcomController extends \yii\web\Controller {

    public function actionIndex() {
//        $conn = \Yii::$app->db;
//        $sql = 'select t.com_type_name,count(c.com_id) as cdata from com c left join com_type t on t.com_type_id=c.com_type_id group by c.com_type_id';
//        $cmd = $conn->createCommand($sql);
//        $data = $cmd->queryAll();
////        print_r($data);
////        die();
//        return $this->render('index', ['data' => $data]);
        
              //สร้างการเชื่อมต่อ
        $conn = \Yii::$app->db;

        //คำสั่ง sql
        $sql = 'select t.com_type_name,count(c.com_id)as cdata from com c
        left join com_type t on t.com_type_id=c.com_type_id
        group by c.com_type_id';

        // สร้าง query
        $cmd = $conn->createCommand($sql);

        // run query
        $data = $cmd->queryAll();
        
        foreach ($data as $item) {
            $chart[]=['name'=>$item['com_type_name'],'data'=>[intval($item['cdata'])]];
        }

//        print_r($chart);
//       
//       die();


        return $this->render('index',['chart'=>$chart]);
    
    }

    public function actionReportpdf() {
        $content = $this->renderPartial('reportpdf');
        $pdf = new Pdf([
        // set to use core fonts only 
        'mode' => Pdf::MODE_UTF8, 
        // A4 paper format 
        'format' => Pdf::FORMAT_A4, // portrait orientation 
        'orientation' => Pdf::ORIENT_PORTRAIT, // stream to browser inline 
        'destination' => Pdf::DEST_BROWSER, // your html content input 
        'content' => $content, 'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css', // any css to be embedded if required 
        'cssInline' => 'body{font-family: "Garuda";font-size: 12pt;}', // set mPDF properties on the fly 
        'options' => ['title' => 'บันทึกข้อความ'], // call mPDF methods on the fly 
        'methods' => [ //'SetHeader' => ['Krajee Report Header'], //
        'SetFooter' => ['{PAGENO}'], ] ]); // return the pdf output as per the destination setting 
        return $pdf->render(); 
        
    }
    }
    