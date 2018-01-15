<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NBA PA1</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <style>
        nav {
            margin-bottom: 50px;
        }
    </style>
    
</head>
<body>
    
    <div class="container">
        <nav id="navigation" class="z-depth-5">
            <div class="nav-wrapper">
            <a href="#" class="brand-logo">NBA Player List</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="sass.html">Home</a></li>
                <li><a href="badges.html">Contacts</a></li>
                <li><a href="collapsible.html">About</a></li>
            </ul>
            </div>
        </nav>
        <form action="nba.com.php" method ='GET'>
            <div class="input-field">
                <input placeholder="Name of your NBA player" type="text" id="playerName" name="playerName">
                <label class="active" for="name">Player</label>
                <input class="btn waves-effect" type="submit" value="Submit">
            </div>
            
        </form>
        
        <?php
            include 'databaseAccess.php';
        ?>
    </div>

    
    
</body>
</html>