<?php
$host = 'localhost';
$user = 'root';
$pass = 'root';
$db = 'lab5';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Обробка відправленої форми
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $amount = $_POST['amount'];
    $price = $_POST['price'];
    $category = $_POST['category'];

    // SQL-запит для вставки нового продукту з вказаними значеннями
    $sql = "INSERT INTO product (product_id, product_name, Amount, price, category) VALUES ($product_id, '$product_name', $amount, $price, $category)";

    if ($conn->query($sql) === TRUE) {
        echo "Продукт успішно додано!";
    } else {
        echo "Помилка додавання продукту: " . $conn->error;
    }
}

$conn->close();
?>
