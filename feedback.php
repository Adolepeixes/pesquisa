<?php
$hostname = "localhost";
$database = "id16536966_id16512541_banco";
$username = "id16536966_id16512541_adole";
$password = "Se6EhxHIEqZ!SNhV";
$conn = mysqli_connect($hostname, $username, $password, $database) or
trigger_error(mysql_error(),E_USER_ERROR);

if(isset($_POST['nome']) && isset($_POST['feedback'])){
    header("Location: feedback.html");
    $query= "INSERT INTO feedback(nome,data,feedback) 
         values('$nome','$data','$feedback')";
}
$nome = $_POST['nome'];
$data = date('y/m/d');           
$feedback = $_POST['feedback'];
$result = mysqli_query($conn,$query) or die("SQL Error: " . mysql_error());
?>
