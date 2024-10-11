<h1 align="left">Appointment Details</h1>
<br>
<style>
    $black: #343434;

    .ticket {
        font-family: Montserrat, sans-serif;
    }

    .ticketdesign {
        background: linear-gradient(to bottom, #FFC107 0%, #FFC107 19%, #d9d9d9 19%, #d9d9d9 100%);
        height: 29em;
        float: left;
        object-position: center;
        padding: 1em;
        margin-top: 100px;
    }

    .ticketstructure {
        align-content: center;
        border-top-left-radius: 8px;
        border-bottom-left-radius: 8px;
        border-top-right-radius: 8px;
        border-bottom-right-radius: 8px;
        width: 44em;
    }

    h1 {
        font-size: 40px;
        margin-top: 0;
        font-family: Montserrat, sans-serif;
    }

    h2,
    h3 {
        font-size: 20px;
        margin-top: 0;
        font-family: Montserrat, sans-serif;
        color: black;
    }

    span {
        color: black;
    }

    #options {
        align-content: center;
        align-items: center;
        text-align: center;
    }

    .printable {
        padding-left: 10px;
        text-align: left;
    }
</style>

<?php
include 'connect.php';
$pid = $_GET['pid'];

$sel = "SELECT * FROM `transactions` WHERE `T_No.` = '$pid'";
$rs = $connect->query($sel);
while ($row = $rs->fetch_assoc()) {
?>

    <div class="ticket " id="printable">

        <div class="ticketdesign ticketstructure">
            <h1 align="left"><b>DocSpot</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Booking ID: <?php echo $row['T_No.'] ?> </h1></span>
            <div class="title"><br>

                <h2 align="left"><span>DATE & TIME OF BOOKING : &nbsp <?php echo $row['Date'] ?></span></h2>
                <h2 align="left"><span>INSURANCE : &nbsp <?php echo $row['Class'] ?></span></h2>
                <h2 align="left"><span>ILLNESS : &nbsp <?php echo $row['Type'] ?></span></h2>
                <h2 align="left"><span>NO. OF PATIENTS :&nbsp <?php echo $row['NoOfpass'] ?> </span></h2>

                <h2 align="center"><span>"Your health is our priority, and we look forward to assisting you during your appointment."</span> </h2>
            </div>

        </div>
    </div>

<?php
}
?>
