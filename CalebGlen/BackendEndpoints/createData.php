<?php
include 'C:\xampp\htdocs\ClayHistoryMuseum\CalebGlen\BackendEndpoints\connect.php';

if (isset($_POST['submit'])) {
  $date = $_POST['date'];
  $type = $_POST['type'];
  $bk = $_POST['book'];
  $page = $_POST['page'];
  $lastNameGrantor1 = $_POST['lastNameGrantor1'];
  $firstNameGrantor1 = $_POST['firstNameGrantor1'];
  $lastNameGrantor2 = $_POST['lastNameGrantor2'];
  $firstNameGrantor2 = $_POST['firstNameGrantor2'];
  $lastNameGrantor3 = $_POST['lastNameGrantor3'];
  $firstNameGrantor3 = $_POST['firstNameGrantor3'];
  $lastNameGrantee1 = $_POST['lastNameGrantee1'];
  $firstNameGrantee1 = $_POST['firstNameGrantee1'];
  $lastNameGrantee1 = $_POST['lastNameGrantee1'];
  $firstNameGrantee2 = $_POST['firstNameGrantee2'];
  $lastNameGrantee2 = $_POST['lastNameGrantee2'];
  $qtr = $_POST['qtr'];
  $sec = $_POST['sec'];
  $tsp = $_POST['tsp'];
  $rge = $_POST['range'];
  $info = $_POST['info'];
  $lot = $_POST['lot'];
  $blk = $_POST['blk'];
  $addition = $_POST['addition'];
  $city = $_POST['city'];

  $sql = "insert into clay_countylanddata (Date, Type, BK, Page, Last_Name_Grantor_1, First_Name_Grantor_1, Last_Name_Grantor_2, First_Name_Grantor_2, 
    Last_Name_Grantor_3,First_Name_Grantor_3,Last_Name_Grantee_1, 
    First_Name_Grantee_1, Last_Name_Grantee_2, First_Name_Grantee_2, QTR, SEC, TSP, RGE, Info, LOT, BLK, ADDITION, CITY)
    values('$date', '$type','$bk','$page','$lastNameGrantor1','$firstNameGrantor1','$lastNameGrantor2','$firstNameGrantor2',
    '$lastNameGrantor3','$firstNameGrantor3','$lastNameGrantee1','$firstNameGrantee1','$lastNameGrantee2','$firstNameGrantee2','$qtr',
    '$sec','$tsp','$rge','$info','$lot','$blk','$addition','$city')";

  $result = mysqli_query($con, $sql);

  if ($result) {
    echo "Data inserted successfully";
  } else {
    die(mysqli_error($con));
  }
}

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title>CRUD Start</title>
</head>

<body>

  <a href="display.php" class="text-light" style="position: relative; top: 25px;">
    <button class="btn btn-primary"> return to display </button>
  </a>

  <a href="http://localhost/app/map/map.html" class="text-light" style="position: relative; top: 25px;">
    <button class="btn btn-primary"> go to map </button>
  </a>


  <div class="container" style="position: relative; top: 50px;">
    <form method="post">
      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="inputDate">Date: </label>
            <input class="form-control" id="inputDate" name="date" placeholder="Enter Date">
          </div>
          <div class="form-group">
            <label for="inputType">Type: </label>
            <input class="form-control" id="inputType" name="type" placeholder="Type of Land Deed">
          </div>
          <div class="form-group">
            <label for="inputLastNameGrantor1">Last Name Grantor 1: </label>
            <input class="form-control" id="inputLastNameGrantor1" name="lastNameGrantor1" placeholder="Last Name of Grantor 1">
          </div>
          <div class="form-group">
            <label for="inputLastNameGrantor2">Last Name Grantor 2: </label>
            <input class="form-control" id="inputLastNameGrantor2" name="lastNameGrantor2" placeholder="Last Name of Grantor 2">
          </div>
          <div class="form-group">
            <label for="inputLastNameGrantor3">Last Name Grantor 3: </label>
            <input class="form-control" id="inputLastNameGrantor3" name="lastNameGrantor3" placeholder="Last Name of Grantor 3">
          </div>
          <div class="form-group">
            <label for="inputLastNameGrantee1">Last Name Grantee 1: </label>
            <input class="form-control" id="inputLastNameGrantee1" name="lastNameGrantee1" placeholder="Last Name of Grantee 1">
          </div>
          <div class="form-group">
            <label for="inputLastNameGrantee2">Last Name Grantee 2: </label>
            <input class="form-control" id="inputLastNameGrantee2" name="lastNameGrantee2" placeholder="Last Name of Grantee 2">
          </div>
          <div class="form-group">
            <label for="inputQTR">QTR: </label>
            <input class="form-control" id="inputQTR" name="qtr" placeholder="QTR">
          </div>
          <div class="form-group">
            <label for="inputTSP">Town Ship: </label>
            <input class="form-control" id="inputTSP" name="tsp" placeholder="Town Ship">
          </div>
          <div class="form-group">
            <label for="inputInfo">Info: </label>
            <input class="form-control" id="inputInfo" name="info" placeholder="Info">
          </div>
          <div class="form-group">
            <label for="inputBLK">Block: </label>
            <input class="form-control" id="inputBLK" name="blk" placeholder="Block">
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="inputBK">Book: </label>
            <input class="form-control" id="inputBK" name="book" placeholder="Book #">
          </div>
          <div class="form-group">
            <label for="inputPage">Page: </label>
            <input class="form-control" id="inputPage" name="page" placeholder="Page #">
          </div>
          <div class="form-group">
            <label for="inputFirstNameGrantor1">First Name Grantor 1: </label>
            <input class="form-control" id="inputFirstNameGrantor1" name="firstNameGrantor1" placeholder="First Name of Grantor 1">
          </div>
          <div class="form-group">
            <label for="inputFirstNameGrantor2">First Name Grantor 2: </label>
            <input class="form-control" id="inputFirstNameGrantor2" name="firstNameGrantor2" placeholder="First Name of Grantor 2">
          </div>
          <div class="form-group">
            <label for="inputFirstNameGrantor3">First Name Grantor 3: </label>
            <input class="form-control" id="inputFirstNameGrantor3" name="firstNameGrantor3" placeholder="First Name of Grantor 3">
          </div>
          <div class="form-group">
            <label for="inputFirstNameGrantee1">First Name Grantee 1: </label>
            <input class="form-control" id="inputFirstNameGrantee1" name="firstNameGrantee1" placeholder="First Name of Grantee 1">
          </div>
          <div class="form-group">
            <label for="inputFirstNameGrantee2">First Name Grantee 2: </label>
            <input class="form-control" id="inputFirstNameGrantee2" name="firstNameGrantee2" placeholder="First Name of Grantee 2">
          </div>
          <div class="form-group">
            <label for="inputSEC">SEC: </label>
            <input class="form-control" id="inputSEC" name="sec" placeholder="SEC">
          </div>
          <div class="form-group">
            <label for="inputRange">Range: </label>
            <input class="form-control" id="inputRange" name="range" placeholder="Range">
          </div>
          <div class="form-group">
            <label for="inputLot">Lot: </label>
            <input class="form-control" id="inputLot" name="lot" placeholder="Lot">
          </div>
          <div class="form-group">
            <label for="inputAddition">Addition: </label>
            <input class="form-control" id="inputAddition" name="addition" placeholder="Addition">
          </div>
          <div class="form-group">
            <label for="inputCity">City: </label>
            <input class="form-control" id="inputCity" name="city" placeholder="City">
          </div>
        </div>
      </div>
      <button type="submit" name="submit" class="btn btn-primary" style="margin: 20px; position: relative; left: 500px;">Submit</button>
    </form>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>