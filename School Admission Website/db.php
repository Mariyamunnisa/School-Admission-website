<?php


$name = $_POST['name'];
$email =$_POST['email'];
$class = $_POST['class'];

if(isset($_POST['login']))
{
    $con=mysqli_connect("localhost","root","","bookings");
if($con)
{
    echo " Date Connection Was Done";

}
else{
    echo "connection failed".mysqli_connect_error();
}

$query = "use bookings;";
$result = mysqli_query($con,$query);
if($result)
{
    echo "yes"."<br>";
}
else{
    echo "no";
}

/*$usertable = "CREATE TABLE BOOKING_SEATS(names varchar(25),email varchar(30),class int);";

$result1 = mysqli_query($con,$usertable);

if($result1){
    echo "table created";

}
else{
    echo "table not created";
}
*/
$insert_details = "INSERT INTO BOOKING_SEATS (names,email,class)values('$name','$email','$class');";

$result2 = mysqli_query($con,$insert_details);

if($result2){
    echo "inserted";
}
else{
    echo "not inserted";
}





}
?>

<script>

    alert("booking was confirmed");

</script>


