<?php
//if(!isset($_SESSION['userAdmin']) OR !isset($_SESSION['userWorker'])){
//    header("Location: login.php");
//}
?>

<?php
require "connection/connection.php";
$query = "SELECT * FROM `user` WHERE user_type_id = '2'";
$result = mysqli_query($connection, $query);
?>

<select name="userWorkerList" class="chosen">
    <option value="0">Izaberi radnika</option>
    <?php  while($row = mysqli_fetch_assoc($result)) {
        ?>
        <option value="<?= $row['id']; ?>">
            <?php
            echo $row['firstname']." ".$row['lastname'];
            ?>
        </option>
        <?php
    }
    ?>
</select>