<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Автосалон</title>
</head>
<body>
    <h1>Форма для выбора машины и клиента</h1>
    <form action="form.php" method="POST">
        <label for="car_brand">Марка автомобиля:</label>
        <select id="car_brand" name="car_brand">
            <option value="BMW">BMW</option>
            <option value="Mercedes">Mercedes</option>
            <option value="Audi">Audi</option>
            <option value="Tesla">Tesla</option>
        </select><br><br>

        <label for="car_model">Модель автомобиля:</label>
        <input type="text" id="car_model" name="car_model" required><br><br>

        <label for="car_price">Цена:</label>
        <input type="number" id="car_price" name="car_price" required><br><br>

        <label for="client_name">Имя клиента:</label>
        <input type="text" id="client_name" name="client_name" required><br><br>

        <label for="client_phone">Телефон клиента:</label>
        <input type="text" id="client_phone" name="client_phone" required><br><br>

        <input type="submit" value="Отправить">
    </form>
</body>
</html>

