<?php
//if(!isset($_SESSION['userAdmin']) OR !isset($_SESSION['userWorker'])){
//    header("Location: login.php");
//}
?>

<?php
require "connection/connection.php";
$query = "SELECT * FROM `obligation`";
$result = mysqli_query($connection, $query);
?>

<select name="obligationList" class="chosen">
    <option value="0">Izaberi obavezu</option>
    <?php  while($row = mysqli_fetch_assoc($result)) {
        ?>
        <option value="<?= $row['id']; ?>">
            <?php
            echo $row['name'];
            ?>
        </option>
        <?php
    }
    ?>
</select>