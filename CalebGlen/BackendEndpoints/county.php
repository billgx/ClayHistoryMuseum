<?php
  
  $tsp = $_POST['tsp'];
  $rge = $_POST['rge'];
  $sec = $_POST['sec'];

include 'C:\xampp\htdocs\ClayHistoryMuseum\CalebGlen\BackendEndpoints\connect.php';

$sql ="Select * from `clay_countylanddata` where TSP='$tsp' and RGE='$rge' and SEC='$sec'";
$result = mysqli_query($con, $sql);

if($result) {
    while($row=mysqli_fetch_assoc($result)) {
        $id=$row['id'];
        $date=$row['Date'];
        $type=$row['Type'];
        $book=$row['BK'];
        $page=$row['Page'];
        $lastNameGrantor1=$row['Last_Name_Grantor_1'];
        $firstNameGrantor1=$row['First_Name_Grantor_1'];
        $lastNameGrantor2=$row['Last_Name_Grantor_2'];
        $firstNameGrantor2=$row['First_Name_Grantor_2'];
        $lastNameGrantor3=$row['Last_Name_Grantor_3'];
        $firstNameGrantor3=$row['First_Name_Grantor_3'];
        $lastNameGrantee1=$row['Last_Name_Grantee_1'];
        $firstNameGrantee1=$row['First_Name_Grantee_1'];
        $lastNameGrantee2=$row['Last_Name_Grantee_2'];
        $firstNameGrantee2=$row['First_Name_Grantee_2'];
        $qtr=$row['QTR'];
        $sec=$row['SEC'];
        $tsp=$row['TSP'];
        $rge=$row['RGE'];
        $info=$row['Info'];
        $lot=$row['LOT'];
        $blk=$row['BLK'];
        $addition=$row['ADDITION'];
        $city=$row['CITY'];
        echo '
    <tr>
    <th scope="row">'.$id.'</th>
    <td>'.$date.'</td>
    <td>'.$type.'</td>     
    <td>'.$book.'</td>       
    <td>'.$page.'</td>
    <td>'.$firstNameGrantor1 . " " . $lastNameGrantor1 .'</td>
    <td>'.$firstNameGrantor2 . " " . $lastNameGrantor2 .'</td>
    <td>'.$firstNameGrantor3 . " " . $lastNameGrantor3 .'</td>
    <td>'.$firstNameGrantor1 . " " . $lastNameGrantor1 .'</td>
    <td>'.$firstNameGrantor2 . " " . $lastNameGrantor2 .'</td>
    <td>'.$qtr.'</td>
    <td>'.$sec.'</td>
    <td>'.$tsp.'</td>
    <td>'.$rge.'</td>
    <td>'.$info.'</td>
    <td>'.$lot.'</td>
    <td>'.$blk.'</td>
    <td>'.$addition.'</td>
    <td>'.$city.'</td>
    </tr>';
  }
    } 

    ?>