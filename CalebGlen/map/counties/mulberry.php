

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mulberry County</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
<table class="table">
    <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">Date</th>
        <th scope="col">Type</th>
        <th scope="col">Book</th>
        <th scope="col">Page</th>
        <th scope="col">Name of Grantor 1</th>
        <th scope="col">Name of Grantor 2</th>
        <th scope="col">Name of Grantor 3</th>
        <th scope="col">Name of Grantee 1</th>
        <th scope="col">Name of Grantee 2</th>
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
        <tbody id="tb">
        <?php

    include 'C:\xampp\htdocs\ClayHistoryMuseum\CalebGlen\BackendEndpoints\connect.php';

    $sql ="Select * from `clay_countylanddata` where TSP='6' and RGE='1'";
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
</tbody>
</table>
    
<div class="d-flex justify-content-center">
    <button class="btn btn-primary" href = "http://localhost/ClayHistoryMuseum/CalebGlen/BackendEndpoints/createData.php"> add data </button>
</div>

<div class="d-flex justify-content-center">
    <img src="Mulberry.png" usemap="#image-map" class="m-5">
</div>

<map name="image-map">
    <area onclick="getData(6, 1, 1)"alt="SEC 1" title="SEC 1" coords="449,230,508,294" shape="rect">
    <area target="" alt="SEC 2" title="SEC 2" href="" coords="380,236,442,293" shape="rect">
    <area target="" alt="SEC 3" title="SEC 3" href="" coords="315,234,376,294" shape="rect">
    <area target="" alt="SEC 4" title="SEC 4" href="" coords="245,232,308,295" shape="rect">
    <area target="" alt="SEC 5" title="SEC 5" href="" coords="181,234,242,295" shape="rect">
    <area target="" alt="SEC 6" title="SEC 6" href="" coords="111,235,176,295" shape="rect">
</map>

<script> 

function getData(tsp, rge, sec) {
    fetch("http://localhost/ClayHistoryMuseum/CalebGlen/BackendEndpoints/county.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded; charset=UTF-8",
        },
        body: `tsp=${tsp}&rge=${rge}&sec=${sec}`
    }).then((response) => response.text())
      .then((res) => (document.getElementById("tb").innerHTML = res))
}

</script>

</body>
</html>