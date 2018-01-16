<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NBA PA1</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

    <!-- <script src="typeahead.min.js"></script> --> 

    <style>
        nav {
            margin-bottom: 50px;
        }
        form {
            margin-bottom: 50px;
        }
        #logo {
            padding-left: 30px;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <nav id="navigation" class="z-depth-5">
            <div class="nav-wrapper">
            <a href="#" id="logo" class="brand-logo">NBA Player List</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="#">Home</a></li>
                <li><a href="#">Contacts</a></li>
                <li><a href="collapsible.html">About</a></li>
            </ul>
            </div>
        </nav>
        <form action="nba.com.php" method ='GET'>
            <div class="input-field">
                <input placeholder="Name of your NBA player" type="text" id="playerName" name="playerName" autocomplete="off">
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
<script>
    $(document).ready(function(){
        $('#playerName').typeahead({
            source: function(query, result){
                $.ajax({
                    url:"fetch.php",
                    method:"POST",
                    data:{query:query},
                    dataType:"json",
                    success:function(data){
                        result($.map(data, function(item){
                            return item;
                        }));
                    }
                })
            }
        });
    });
</script>