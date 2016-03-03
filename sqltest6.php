<?php
$con=mysqli_connect("localhost","root","","mydbpdo");
// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM MyGuests
WHERE FirstName='Mary'");

while($row = mysqli_fetch_array($result))
{
    echo $row['firstname'] . "   " . $row['lastname'];
    echo "<br>";
}
