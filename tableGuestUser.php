<?php
//if(!isset($_SESSION['userAdmin'])){
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

    <!--    Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="styles/table.css">

    <title>Document</title>
</head>
<body>

<?php
$userTypeId = $_GET['userTypeId'];

$counter = 0;
require "connection/connection.php";
require 'header.php';
if($userTypeId == 1){
    $queryUserAdmin = "SELECT * FROM `user` WHERE user_type_id=1";
    $result = mysqli_query($connection, $queryUserAdmin);
}else if($userTypeId == 2){
    $queryUserWorker = "SELECT * FROM `user` WHERE user_type_id=2";
    $result = mysqli_query($connection, $queryUserWorker);
} else{
    $queryGuest = "SELECT * FROM `guest`";
    $result = mysqli_query($connection, $queryGuest);
}

?>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
<table class="table table-hover" id="myTable">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Ime i prezime</th>
        <th scope="col">E-mail</th>
        <th scope="col">Šifra</th>
        <?php
        if($userTypeId == 2){
            ?>
            <th scope="col">Naziv radnog mjesta</th>
            <th scope="col">Datum zaposlenja</th>
        <?php
        }?>
        <th scope="col">Akcije</th>
    </tr>
    </thead>
    <tbody>
    <?php while($row = mysqli_fetch_assoc($result)){
        $counter++;
        $id = $row['id'];
        ?>
        <tr>
            <th scope="row"><?= $counter ?></th>
            <td><?= $row['firstname']." ".$row['lastname'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['password'] ?></td>
            <?php
            if($userTypeId == 2){
                ?>
                <td><?= $row['name_workplace'] ?></td>
                <td><?= $row['date_employment'] ?></td>
                <?php
            }
            $name = "user";
            if($userTypeId == 3){
                $name = "guest";
            }
            ?>
            <td><a href="<?= 'deleteRow.php?id='.$row['id'].'&name='.$name.'&userTypeId='.$userTypeId?>" class="btn"><i class="fa fa-trash"></i> </a></td>
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