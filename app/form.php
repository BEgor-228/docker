<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $car_brand = $_POST['car_brand'];
    $car_model = $_POST['car_model'];
    $car_price = $_POST['car_price'];
    $client_name = $_POST['client_name'];
    $client_phone = $_POST['client_phone'];

    // Валидация имени клиента
    if (!preg_match('/^[a-zA-Zа-яА-Я]+$/u', $client_name)) {
        die("<p>Ошибка: Имя клиента должно состоять из одного слова и не содержать цифр.</p>");
    }

    // Валидация телефона клиента
    if (!preg_match('/^\d{11}$/', $client_phone)) {
        die("<p>Ошибка: Телефон клиента должен состоять из 11 цифр и не содержать букв.</p>");
    }

    // Открываем файл для записи, если файл не существует, он будет создан
    $file = fopen("sales.csv", "a");

    if ($file) {
        // Записываем данные в файл CSV
        $data = array($car_brand, $car_model, $car_price, $client_name, $client_phone);
        fputcsv($file, $data);
        fclose($file);
        echo "<p>Данные успешно сохранены!</p>";
    } else {
        echo "<p>Ошибка при открытии файла для записи.</p>";
    }
} else {
    echo "<p>Нет данных для обработки.</p>";
}
?>
