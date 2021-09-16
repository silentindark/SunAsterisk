<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>View Article</h1>
    <?php 
    include "connect.php";

    $query = "SELECT * FROM article";
    $result = mysql_query($query);

    while ($row = mysqli_fetch_assoc_array($result)){
    ?>
    <p>Title: <?php $row['arttcle_title'];  ?></p>
    <p>Content: <?php $row['arttcle_content'];  ?></p>
    <p>Date Created: <?php $row['arttcle_created'];  ?></p>
    
    <?php
    }

    ?>
</body>
</html>