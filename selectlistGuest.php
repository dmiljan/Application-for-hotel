<?php
//if(!isset($_SESSION['userAdmin']) OR !isset($_SESSION['userWorker'])){
//    header("Location: login.php");
//}
?>
<?php
require "connection/connection.php";

$query = <<<SQL
    SELECT * 
    FROM guest
SQL;

$result = mysqli_query($connection, $query);
?>

<select style="font-size: 20px" name="guestList" class="chosen">
    <option value="0">Izaberi gosta</option>
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




