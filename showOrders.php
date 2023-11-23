<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="Лабораторна робота">
    <title>Таблиця Country</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця Orders</h1>


    <?php

    include "databaseConnect.php";

    try {
        $stmt = $pdo->query("SELECT * FROM orders");
        // Виконання запиту і отримання результатів
        printf("<h3>Список замовлень:</h3>");
        printf("<table>
                    <tr>
                        <td>ID-Замовлення</td>
                        <td>ID-Замовникa</td>
                        <td>ID-Дистриб'юторa</td>
                        <td>ID-Запчастини</td>
                    </tr>");
        
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            printf("<tr>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                    </tr>",
                $row['OrderID'],
                $row['CustomerID'],
                $row['DistributorID'],
                $row['Spare_partsID']
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
