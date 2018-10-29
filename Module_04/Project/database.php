<?php
//Allow Headers
header('Access-Control-Allow-Origin:*');

//$servername = "localhost:3306";
$servername = mobilewebappvirtualmachine.centralus.cloudapp.azure.com:8888";
$username = "exampleuser";
$password = "Examplepassword1!";
$dbname= "adventureworks";

//Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection
if ($conn->connect_error)
echo "Error:Unexpected connection error. Please retry the operation.";
else
{
$result = $conn->query("SELECT*FROM adventureworks");

if (($result != 0) && ($result->num_rows > 0))
{
$row = $result->fetch_assoc();
$A = $row['employee'];
$B = $row['employeeaddress'];
$C = $row['employeepayhistory'];
$D = $row['location'];

echo $A;
echo $B;
echo $C;
echo $D;

}
$conn->close();
}
?>
