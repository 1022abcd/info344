<?php
//fetch.
$connect = mysqli_connect("acho2dbinstance.cmlvjggv28ym.us-west-2.rds.amazonaws.com", "info344user", "<password>", "CSV_DB");
$request = mysqli_real_escape_string($connect, $_POST["query"]);
$query = "
 SELECT * FROM NBAPlayerList WHERE Name LIKE '%".$request."%'
";
;

$result = mysqli_query($connect, $query);

$data = array();

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row["Name"];
    }
    echo json_encode($data);
}

?>