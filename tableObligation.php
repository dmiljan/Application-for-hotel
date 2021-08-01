<?php
//if(!isset($_SESSION['userAdmin']) OR !isset($_SESSION['userWorker'])){
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
require "connection/connection.php";
$query = "SELECT * FROM `obligation`";

if(isset($_REQUEST['userId'])){
    $user_id = $_REQUEST['userId'];
    $query = "SELECT * FROM `obligation` JOIN `user_has_obligation` ON obligation.id = user_has_obligation.obligation_id WHERE user_has_obligation.user_id =$user_id";
}

$result = mysqli_query($connection, $query);
$counter = 0;

?>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Pretraži po nazivu..">
<table class="table table-hover" id="myTable">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Naziv</th>
        <th scope="col">Akcije</th>
        <th scope="col"></th>
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
                <td><a href="<?= 'deleteRow.php?id='.$row['id'].'&name=obligation'?>" class="btn" style="background: #9e2e2b;" ><i class="fa fa-trash"></i> </a></td>
                <td><a href="<?='indexAdmin.php?name=viewObligation&obligationId='.$row['id']?>" class="btn">Detaljno</a></td>
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