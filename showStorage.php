<html>
<head>
    <meta charset="utf-8">
    <title>Таблиця Country</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця Storage</h1>


    <?php

    include "databaseConnect.php";

    try {
        $stmt = $pdo->query("SELECT * FROM Storage_");
        // Виконання запиту і отримання результатів
        printf("<h3>Склад:</h3>");
        printf("<table><tr><td>Місце зберігання</td><td>Ід запчастини</td><td>Кількість</td></tr>");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            printf("<tr><td>%s</td><td>%s</td><td>%s</td</tr>", 
            $row['PlaceInStorage'], $row['Spare_partsID'], $row['Quantity']);
        };
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
