<?php
include 'connect.php';
session_start();
if ($_SESSION['log'] == '') {
    header("location:sindex.php");
}
include 'header.php';

$doctor = $_POST['doctor'];
$class = $_POST['class'];
$type = $_POST['type'];
$no = $_POST['number'];
$cardNo = '0000'; // Assuming the card number is '0000'
$expMonth = '0000'; // Assuming the expiration month is '0000'
$expYear = '0000'; // Assuming the expiration year is '0000'
$cvv = '000'; // Assuming the CVV code is '000'
$pin = '0000'; // Assuming the PIN is '0000'
$amt = 0; // Assuming the amount is 0
$route = ''; // Assuming the route is an empty string

$_SESSION['doctor'] = $doctor;
$_SESSION['Class'] = $class;
$_SESSION['Type'] = $type;
$_SESSION['NoOfpass'] = $no;

// Enable error reporting
error_reporting(0);

// SQL query for inserting data
$query = "INSERT INTO transactions (email, doctor, dest, Name, Class, Type, NoOfpass, card_no, expmonth, expyear, cvv, pin, Amt, Route) VALUES ('".$_SESSION['email']."', '".$_SESSION['doctor']."', '".$_SESSION['dest']."', '".$_SESSION['name']."', '$class', '$type', '$no', '$cardNo', '$expMonth', '$expYear', '$cvv', '$pin', '$amt', '$route')";

// Execute the query
if (mysqli_query($connect, $query)) {
    echo "Data inserted successfully";
} else {
    echo "Error: Data insertion failed";
}

?>

<br><br><br><br>
<center>
    <td>
        <form action="bookdone.php">
            <button style="background-color: black; padding: 25px 70px; type="submit"; align=center;">
                <span style=color:white;><h3>Confirm</h3></span>
            </button>
        </form>
    </td>
    <br><br>

<?php include 'footer.php'; ?>
