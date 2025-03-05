<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = trim($_POST['name']) ?? '';
    $email = trim($_POST['name']) ?? '';

    $CSVFile = 'data.csv';
    $dataRow = [$name, $email];
    if(($file = fopen($CSVFile, 'a'))){
        fputcsv($file, $dataRow);
        fclose($file);
        $message = 'Данные успешно сохранены.';
        echo $message;
    }
}