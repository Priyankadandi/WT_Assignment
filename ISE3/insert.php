<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
<?php
 $conn = mysqli_connect("localhost", "root", "", "DB",3307);
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. ". mysqli_connect_error());
        }

$full_name =  $_REQUEST['full_name'];
$mobno = $_REQUEST['mobno'];
$address = $_REQUEST['addr'];
$purpose = $_REQUEST['purpose'];
$vehno = $_REQUEST['vehno'];

$sql_query="INSERT INTO users VALUES('$full_name','$mobno','$address','$purpose','$vehno')";
if(mysqli_query($conn,$sql_query)){
	echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
}
else{
echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
mysqli_close($conn);
?>
    </center>
</body>
 
</html>