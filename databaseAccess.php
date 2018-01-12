/*
 * The Prepared Statements Method
 * Best Practice
 */
 <?php
$username = 'info344user';
$password = '<password>'

try {
    $conn = new PDO('mysql:host=acho2dbinstance.cmlvjggv28ym.us-west-2.rds.amazonaws.com;dbname=acho2dbinstance', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
     
    $stmt = $conn->prepare('SELECT * FROM myTable WHERE id = :id');
    $stmt->execute();
 
    while($row = $stmt->fetch()) {
        print_r($row);
    }
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>