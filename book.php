<?php
include 'connect.php';
session_start();
if ($_SESSION['log'] == '') {
    header("location:sindex.php");
}
include 'header.php';

// Generate a random booking ID
$bookingID = uniqid();

// Store the booking ID in the session
$_SESSION['tno'] = $bookingID;
?>

<style>
.container {
    border-spacing: 10px;
    font-family: Montserrat, sans-serif;
    font-size: 18px !important;
    border: 2px solid grey;
    margin-top: 30px;
    margin-bottom: 50px;
    padding-top: 50px;
    padding-right: 50px;
    padding-bottom: 50px;
    padding-left: 150px;
    align-content: center;
}

.button {
    padding: 15px 32px;
    color: white;
    background-color: black;
}

#number {
    overflow: hidden;
    width: 600px;
}

input[type=number] {
    width: 250px;
}

.proceed-button-container {
    text-align: left;
}
</style>

</head>

<body>
    <h1>
        <center><b>Book Doctor's Appointment</center></b>
    </h1>
    <form method='post' action='book_action.php' align='center'>

        <div class="container">
            <section id="form" class="formborder">
                <div class="container2">
                    <form>

                        <div class="form-row row justify-content-start" name="source">
                            &nbsp

                            <div class="form-group col-md-5" name="source">
                                <label for="inputState">DOCTORS LIST:</label>
                                <select id="inputState" class="form-control" name="doctor">
                                    <option>Dr. John - Mitte</option>
                                    <option>Dr. Jane - Schoneberg</option>
                                    <option>Dr. Smith - Charlottenburg</option>
                                    <option>Dr. Emily - Kreuzberg</option>
                                </select>
                            </div>

                            <div class="form-group col-md-5" name="class">
                                <label for="inputPassword4">INSURANCE TYPE :</label>
                                <select id="inputState" class="form-control" name="class">
                                    <option>TK</option>
                                    <option>DAK</option>
                                    <option>Private</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row row justify-content-start" name="type">
                            <div class="form-group col-md-5">
                                <label for="inputState">ILLNESS :</label>
                                <select id="inputState" class="form-control" name="type">
                                    <option>Allergies
                                    <option>Common cold and flu</option>
                                    <option>Respiratory infections</option>
                                    <option>Digestive disorders</option>
                                    <option>Skin conditions</option>
                                    <option>Chronic pain</option>
                                    <option>Mental health</option>
                                    <option>Women's health</option>
                                    <option>Men's health</option>
                                    <option>Pediatric care</option>
                                    <option>Cardiovascular conditions</option>
                                    <option>Neurological conditions</option>
                                    <option>Endocrine disorders</option>
                                    <option>Eye and vision problems</option>
                                    <option>Dental and oral health</option>
                                    <option>Orthopedic issues</option>
                                    <option>Urinary tract problems</option>
                                    <option>Infectious diseases</option>
                                    <option>Cancer and oncology
                                    <option>Other </option>
                                    <option>Return</option>
                                </select>
                            </div>

                            <div class="form-group col-md-5">
                                <label for="inputState"><h8>NO OF Patients:</h8></label>
                                <input type="number" name="number" required min="1" max="5">
                            </div>
                        </div>

                        <div class="form-row row justify-content-start proceed-button-container">
                            <button type="submit" class="button" name="login_submit">Proceed</button>
                        </div>

                    </form>
                </div>

            </section>
        </div>

        <?php include 'footer.php'; ?>

</body>

</html>
