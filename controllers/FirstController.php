<?php

namespace app\controllers;

class FirstController extends \yii\web\Controller {

    public function actionIndex() {
        $title = 'Toturial Generate Controller';
        $topic = 'Report';
        $array = [
                ['fname' => 'สมชาย', 'lname' => 'ใจดี', 'email' => 'som@hotmail.com'],
                ['fname' => 'สมชาย', 'lname' => 'ใจดี', 'email' => 'som@hotmail.com'],
                ['fname' => 'สมชาย', 'lname' => 'ใจดี', 'email' => 'som@hotmail.com'],
                ['fname' => 'สมชาย', 'lname' => 'ใจดี', 'email' => 'som@hotmail.com'],
                ['fname' => 'สมชาย', 'lname' => 'ใจดี', 'email' => 'som@hotmail.com'],
                ['fname' => 'สมหญิง', 'lname' => 'ใจงาม', 'email' => 'ying@hotmail.com']
        ];
        return $this->render('index', ['title' => $title, 'report' => $topic, 'arr' => $array]);
    }

}
