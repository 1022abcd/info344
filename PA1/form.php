<?php
    
    echo "CHECKING FORM.PHP";
    include 'databaseAccess.php'; 
    listOfSearchingPlayers($_GET('playerName'));
	// $player_name = '';

    // if(isset($GET['$playerName'])){
    //     $player_name = $GET['$playerName'];
    //     $data = listOfSearchingPlayers($player_name);
    //     // if (strlen($player_name) > 0){
    //     //     $data = listOfSearchingPlayers($player_name);
    //     //     $allPlayers = array();
    //     //     foreach($data as $player){
    //     //         // $playerData = array();
    //     //         // $playerData["Name"] = $player->getName();
    //     //         // $allPlayers[] = $playerData;
    //     //         //include 'nbaPlayer.php';
    //     //         $allPlayers[] = $player->getInfo();
    //     //     }
    
    //     //     //print out the json encoded data to that we can capture it on the front end 
    //     //     echo json_encode($allPlayers);
    //     //   }else{
    
    //     //     $allPlayers = array("player's name is blank");
    //     //     echo json_encode($allPlayers);
    //     // }
    // }
?>