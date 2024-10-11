<?php
include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:sindex.php");
}
include 'header.php';
?>


<style >
  .container{
        border-spacing: 10px;

      font-family: Montserrat, sans-serif;
     font-size: 18px !important;
      border: 2px solid grey;
        margin-top: 50px;
        margin-bottom: 200px;
       padding-top: 50px;
      padding-right: 120px;
      padding-bottom: 50px;
      padding-left: 150px;
      align-content: center;

    }
</style>

<html>
<head>
<link rel='stylesheet' href='index.css'>
<br><br>
  <h1   text-transform: capitalize;><center><b><img src="https://img.icons8.com/clouds/90/000000/add-bookmark.png"/> Welcome  <?php  echo " ". $_SESSION['name'] ."" ?> To Doctor Appointment Booking Portal <img src="https://img.icons8.com/clouds/90/000000/add-bookmark.png"/></center></b></h1>

<div class="container">

  <td><a href='book.php'><button style="background-color: black ; border-color:black "  >&nbsp&nbspBook Doctor Appointment </button></a></td>
 </tr> 
<br> <br> 

</table>
</tr>
</div>
<?php include 'footer.php';
?> 

</html>