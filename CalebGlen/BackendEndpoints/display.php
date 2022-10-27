<?php

include 'C:\xampp\htdocs\ClayHistoryMuseum\CalebGlen\BackendEndpoints\connect.php'

?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Display Land Info</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body>

  <div class="container-fluid" style="position: relative; left:0px;">
    <a href="createData.php" class="text-light">
      <button class="btn btn-primary my-5"> add data </button>
    </a>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">Date</th>
          <th scope="col">Type</th>
          <th scope="col">Book</th>
          <th scope="col">Page</th>
          <th scope="col">Last_Name_Grantor_1</th>
          <th scope="col">First_Name_Grantor_1</th>
          <th scope="col">Last_Name_Grantor_2</th>
          <th scope="col">First_Name_Grantor_2</th>
          <th scope="col">Last_Name_Grantor_3</th>
          <th scope="col">First_Name_Grantor_3</th>
          <th scope="col">Last_Name_Grantee_1</th>
          <th scope="col">First_Name_Grantee_1</th>
          <th scope="col">Last_Name_Grantee_2</th>
          <th scope="col">First_Name_Grantee_2</th>
          <th scope="col">QTR</th>
          <th scope="col">SEC</th>
          <th scope="col">TSP</th>
          <th scope="col">RGE</th>
          <th scope="col">Info</th>
          <th scope="col">LOT</th>
          <th scope="col">BLK</th>
          <th scope="col">ADDITION</th>
          <th scope="col">CITY</th>



        </tr>
      </thead>
      <tbody>
        <?php

        $sql = "Select * from `clay_countylanddata`";
        $result = mysqli_query($con, $sql);

        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            $date = $row['DATE'];
            $type = $row['TYPE'];
            $book = $row['BK'];
            $page = $row['PAGE'];
            $lastNameGrantor1 = $row['Last_Name_Grantor_1'];
            $firstNameGrantor1 = $row['First_Name_Grantor_1'];
            $lastNameGrantor2 = $row['Last_Name_Grantor_2'];
            $firstNameGrantor2 = $row['First_Name_Grantor_2'];
            $lastNameGrantor3 = $row['Last_Name_Grantor_3'];
            $firstNameGrantor3 = $row['First_Name_Grantor_3'];
            $lastNameGrantee1 = $row['Last_Name_Grantee_1'];
            $firstNameGrantee1 = $row['First_Name_Grantee_1'];
            $lastNameGrantee2 = $row['Last_Name_Grantee_2'];
            $firstNameGrantee2 = $row['First_Name_Grantee_2'];
            $qtr = $row['QTR'];
            $sec = $row['SEC'];
            $tsp = $row['TSP'];
            $rge = $row['RGE'];
            $info = $row['INFO'];
            $lot = $row['LOT'];
            $blk = $row['BLK'];
            $addition = $row['ADDITION'];
            $city = $row['CITY'];
            echo '
            <tr>
            <td>' . $date . '</td>
            <td>' . $type . '</td>     
            <td>' . $book . '</td>       
            <td>' . $page . '</td>
            <td>' . $lastNameGrantor1 . '</td>
            <td>' . $firstNameGrantor1 . '</td>
            <td>' . $lastNameGrantor2 . '</td>
            <td>' . $firstNameGrantor2 . '</td>
            <td>' . $lastNameGrantor3 . '</td>
            <td>' . $firstNameGrantor3 . '</td>
            <td>' . $lastNameGrantee1 . '</td>
            <td>' . $firstNameGrantee1 . '</td>
            <td>' . $lastNameGrantee2 . '</td>
            <td>' . $firstNameGrantee2 . '</td>
            <td>' . $qtr . '</td>
            <td>' . $sec . '</td>
            <td>' . $tsp . '</td>
            <td>' . $rge . '</td>
            <td>' . $info . '</td>
            <td>' . $lot . '</td>
            <td>' . $blk . '</td>
            <td>' . $addition . '</td>
            <td>' . $city . '</td>
            </tr>';
          }
        }

        ?>

        <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      
    </tr> -->
      </tbody>
    </table>
  </div>




  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>