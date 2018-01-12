<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NBA PA1</title>
</head>
<body>

    <form action="databaseAccess.php" target="_blank" method ='GET'>
        <h1>Search Your Player </h1>
        <input type = 'text' name="searchPlayer">
        <input type "submit" value="Submit">
    </form>
    <?php
        include 'databaseAccess.php';

        

    ?>
</body>
</html>