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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles/table.css">
    <title>Document</title>
</head>
<body>
<?php
require "connection/connection.php";

$query = <<<SQL
    SELECT guest.id AS guest_id, rezervation.id AS rezervation_id, accommodation.id AS accommodation_id, user.id AS user_id,
        guest.firstname AS guest_fistname, guest.lastname AS guest_lastname, rezervation.age, rezervation.jmbg, rezervation.date_arrival, 
        rezervation.date_departure, accommodation.name, user.firstname AS user_firstname, user.lastname AS user_lastname FROM `rezervation` 
    JOIN guest ON rezervation.guest_id=guest.id 
    JOIN user ON rezervation.user_id=user.id 
    JOIN accommodation ON rezervation.accommodation_id=accommodation.id
SQL;

if(isset($_REQUEST['userId'])){
    $user_id = $_REQUEST['userId'];
   $query.=" WHERE rezervation.user_id = $user_id;";
}
if(isset($_REQUEST['guestId'])){
    $guest_id = $_REQUEST['guestId'];
    $query.=" WHERE rezervation.guest_id = $guest_id;";
}
$result = mysqli_query($connection, $query);
$counter = 0; //prva kolona #
if(isset($_SESSION['userAdmin']) OR isset($_SESSION['userWorker'])) {
?>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Pretraži po imenu i prezimenu gosta..">
<?php
}
?>
<table class="table table-hover" id="myTable">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Gost</th>
        <th scope="col">Godine</th>
        <th scope="col">Jmbg</th>
        <th scope="col">Datum dolaska</th>
        <th scope="col">Datum odlaska</th>
        <th scope="col">Naziv smještaja</th>
        <th scope="col">Rezervaciju izvrsio</th>
        <?php
        if(isset($_SESSION['userAdmin']) OR isset($_SESSION['userWorker'])) {
        ?>
        <th scope="col">Akcije</th>
        <?php
        }
        ?>
    </tr>
    </thead>
    <tbody>
    <?php while($row = mysqli_fetch_assoc($result)){
        $counter++;
        ?>
        <tr>
            <th scope="row"><?= $counter ?></th>
            <td><?= $row['guest_fistname']." ".$row['guest_lastname'] ?></td>
            <td><?= $row['age'] ?></td>
            <td><?= $row['jmbg'] ?></td>
            <td><?= $row['date_arrival'] ?></td>
            <td><?= $row['date_departure'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['user_firstname']." ".$row['user_lastname'] ?></td>
            <?php
            if(isset($_SESSION['userAdmin']) OR isset($_SESSION['userWorker'])) {//gost ne moze izbrisati rezervaciju
                ?>
                <td>
                    <a href="<?= 'deleteRow.php?id=' . $row['guest_id'] . '&name=rezervation' ?>" class="btn" style="background: #9e2e2b;">
                        <i class="fa fa-trash"></i>
                    </a>
                </td>
                <?php
            }
            ?>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>
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