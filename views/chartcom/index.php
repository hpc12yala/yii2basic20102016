<?php

use miloschuman\highcharts\Highcharts;

echo Highcharts::widget([
'options' => [
    'title' => ['text' => 'Fruit Consumption'],
        'xAxis' => [
            'categories' => ['Apples', 'Bananas', 'Oranges']],
            'yAxis' => [
                'title' => ['text' => 'Fruit eaten']],
                 'series' => $chart]]);




//use miloschuman\highcharts\Highcharts;

//foreach ($data as $item) {
//    $chart[] = ['name' => $item['com_type_name'], 'data' => [intval($item['cdata'])]];
//} 
echo Highcharts::widget([
        'options' => ['chart' => ['type' => 'column'], 
        'title' => ['text' => 'ทดสอบ'], 
        'xAxis' => ['categories' => ['ทั้งหมด'],], 
        'yAxis' => ['title' => ['text' => 'ครั้ง']], 
        'series' => $chart,]]);

echo Highcharts::widget([
    'options' => [
        'chart' => [
            'type' => 'column'
        ],
        'title' => ['text' => 'จำนวนคอมพิวเตอร์'],
        'xAxis' => [
            'categories' => ['ทั้งหมด'],
        ],
        'yAxis' => [
            'title' => ['text' => 'เครื่อง']],
        'series' => $chart
    ]
]);
?>