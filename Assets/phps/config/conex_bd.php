 <?php  
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "intranet";
        $con = new mysqli($host,$user,$pass,$db) or die("error" . mysqli_errno($con));
        session_start();
 ?>