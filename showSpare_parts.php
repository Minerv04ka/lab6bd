<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Таблиця Spare_parts</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця Spare_parts</h1>


    <?php

    include "databaseConnect.php";

    try {
        $stmt = $pdo->query("SELECT * FROM spare_parts");
        // Виконання запиту і отримання результатів
        printf("<h3>Список продуктів:</h3>");
        printf("<table><tr><td>ID</td><td>Назва</td><td>Ціна</td></tr>");

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>",
                $row['Spare_partsID'], $row['Spare_partsName'], $row['Spare_partsPrice']
            );
        }
        
        printf("</table>");
    } catch (PDOException $e) {
        die("Помилка запиту: " . $e->getMessage());
    }

    ?>

    <br><br><br>

    <ul>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
