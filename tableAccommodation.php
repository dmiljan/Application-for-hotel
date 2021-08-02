<?php
//if(!isset($_SESSION['userAdmin']) OR !isset($_SESSION['userWorker']) OR !isset($_SESSION['userGuest'])){
//    header("Location: login.php");
//}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/indexAdmin.css"><!--  css od indexAdmin zbog komplikacija opisanih ispod-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous"> <!--  za ikonicu smece-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script> <!-- stavljeno radi ikonice kruga za online u sideNavigation.php, ovo je moralo u ovom fajlu zbog drugacijeg prikazivanja ovog fajla u odnosu na ostale-->
    <link rel="stylesheet" href="styles/table.css">
    <title>Document</title>
</head>
<body>

<?php
require "connection/connection.php";
include 'sideNavigation.php';

$query = "SELECT * FROM `accommodation`";

if(isset($_REQUEST['typeAccList']) and isset($_REQUEST['dateArrival']) and isset($_REQUEST['dateDeparture'])
    and isset($_REQUEST['priceFrom']) and isset($_REQUEST['priceTo'])){

    $dateArrival = $_REQUEST['dateArrival'];
    $dateDeparture = $_REQUEST['dateDeparture'];

    $innerQuery = <<<SQL
    SELECT rezervation.accommodation_id 
    FROM rezervation 
    WHERE ((
       (rezervation.date_arrival > '$dateArrival' AND rezervation.date_arrival < '$dateDeparture')
        OR (rezervation.date_departure > '$dateArrival' AND rezervation.date_departure < '$dateDeparture')
        OR ('$dateArrival' > rezervation.date_arrival AND '$dateArrival' < rezervation.date_departure)
        OR ('$dateDeparture' > rezervation.date_arrival AND '$dateDeparture' < rezervation.date_departure)
    ) 
SQL;

    $isSearchValid = $dateArrival < $dateDeparture;
    $whereCondition = $isSearchValid
        ? "accommodation.id NOT IN ($innerQuery) OR rezervation.id IS NULL)"
        : "1=0";

    $query = <<<SQL
        SELECT accommodation.id, accommodation.name, accommodation.capacity, accommodation.accommodation_type_id
        FROM `accommodation` 
        LEFT JOIN `rezervation` ON accommodation.id=rezervation.accommodation_id 
        LEFT JOIN `price` ON accommodation.price_id=price.id
        WHERE $whereCondition
SQL;
    $typeAcc=$_REQUEST['typeAccList'];
    $query .=" AND accommodation_type_id = $typeAcc ";

    $priceFrom = $_REQUEST['priceFrom'];
    $priceTo = $_REQUEST['priceTo'];
    $query.=" AND ($priceFrom <= price.price AND price.price <= $priceTo)";

    $query .= " GROUP BY accommodation.id, accommodation.name";
}

$result = mysqli_query($connection, $query);
$counter = 0;

?>
<div class="main">
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Pretraži po nazivu..">
    <?php include "searchForm.php"?>
    <table class="table table-hover" id="myTable">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Naziv</th>
            <th scope="col">Kapacitet</th>
            <th scope="col">Tip</th>
            <?php
            if(isset($_SESSION['userAdmin']) OR isset($_SESSION['userWorker'])) {
                ?>
                <th scope="col">Akcije</th>
                <?php
            }
            ?>
            <th scope="col"> </th>
        </tr>
        </thead>
        <tbody>
        <?php while($row = mysqli_fetch_assoc($result)){
            $counter++;
            $id = $row['id'];
            ?>
            <tr>
                <th scope="row"><?= $counter ?></th>
                <td><?= $row['name'] ?></td>
                <td><?= $row['capacity'] ?></td>
                <?php
                if($row['accommodation_type_id'] == 1){
                    ?>
                    <td>Soba</td>
                    <?php
                }else{
                    ?>
                    <td>Apartman</td>
                    <?php
                }
                if(isset($_SESSION['userAdmin'])){
                ?>
                     <td>
                         <a href="<?= 'deleteRow.php?id='.$row['id'].'&name=accommodation'?>" class="btn" style="background: #9e2e2b;">
                             <i class="fa fa-trash"></i>
                         </a>
                     </td>
                <?php
                }
                ?>
                <td>
                    <a href="<?='indexAdmin.php?name=viewAccommodation&accommodationId='.$row['id']?>" class="btn">Detaljno</a>
                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>
</body>
<script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");

        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>
</html>