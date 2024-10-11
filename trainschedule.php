<?php
include 'connect.php';
session_start();
if ($_SESSION['log'] == '') {
  header("location:sindex.php");
}
include 'header.php';
?>

<div>
</div>

<style>
  table#database_table {
    font-size: 16px;
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    border-spacing: 0;
  }

  #database_table td,
  #database_table th {
    border: 1px solid #ddd;
    text-align: left;
    padding: 8px;
  }

  #database_table tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  #database_table th {
    padding-top: 11px;
    padding-bottom: 11px;
    background-color: black;
    color: white;
  }
</style>

<head>
  <title>Doctor Schedule</title>
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
</head>

<body>
  <h2><center><b><img src="https://img.icons8.com/officel/70/000000/overtime.png"/>&nbsp&nbspDoctor Schedule&nbsp&nbsp<img src="https://img.icons8.com/officel/70/000000/overtime.png"/></center></b></h2>

  <div class="container">
    <br />
    <table id="database_table" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>Doctor</th>
          <th>Monday</th>
          <th>Tuesday</th>
          <th>Wednesday</th>
          <th>Thursday</th>
          <th>Friday</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql_doctors = "SELECT * FROM `doctor_schedule`";
        $result = $connect->query($sql_doctors);
        while ($row = $result->fetch_assoc()) {
          echo '<tr>
                  <td>' . $row["doctor_name"] . '</td>
                  <td>' . $row["monday_open"] . ' - ' . $row["monday_close"] . '</td>
                  <td>' . $row["tuesday_open"] . ' - ' . $row["tuesday_close"] . '</td>
                  <td>' . $row["wednesday_open"] . ' - ' . $row["wednesday_close"] . '</td>
                  <td>' . $row["thursday_open"] . ' - ' . $row["thursday_close"] . '</td>
                  <td>' . $row["friday_open"] . ' - ' . $row["friday_close"] . '</td>
                </tr>';
        }
        ?>
      </tbody>
    </table>
  </div>

  <script>
    $(document).ready(function() {
      $('#database_table').DataTable({
        "order": [
          [1, "asc"]
        ]
      });
    });
  </script>
  <?php include 'footer.php'; ?>
</body>
