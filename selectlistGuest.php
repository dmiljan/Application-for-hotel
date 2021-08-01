<?php
//if(!isset($_SESSION['userAdmin']) OR !isset($_SESSION['userWorker'])){
//    header("Location: login.php");
//}
?>
<!--<style>-->
<!--    .guestList {-->
<!--        width: 100%;-->
<!--        padding: 15px;-->
<!--        margin: 5px 0 22px 0;-->
<!--        /*margin: 5px 0 10px 0;*/-->
<!--        display: inline-block;-->
<!--        border: none;-->
<!--        background: #f1f1f1;-->
<!--        font-size: 17px;-->
<!--        border-radius: 5px;-->
<!--    }-->
<!--    .guestList: focus  {-->
<!--        background-color: #ddd;-->
<!--        outline: none;-->
<!--    }-->
<!--</style>-->

<?php
require "connection/connection.php";
$query = "SELECT * FROM `guest`";
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




