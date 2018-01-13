<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NBA PA1</title>
</head>
<body>

    <form action="databaseAccess.php" method ='GET'>
        <p>Search Your Player: <input type='text' name="playerName"><input type="submit" value="Submit"></p>
    </form>
    <?php
        //include 'databaseAccess.php';
        include 'nbaPlayer.php';
        
        //print_r(array_values(returnList()));
        //print_r(array_values($list));
        $playerArray = Player::getAllplayers();
        print_r(array_values($playerArray));
        // for($i = 0; $i < count($playerArray); $i++){
        //     echo $playerArray[$i]->GetInfo();
        // }
    ?>
</body>
</html>