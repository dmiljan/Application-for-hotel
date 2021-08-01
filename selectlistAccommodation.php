<?php
if(isset($_REQUEST['dateArrival']) and isset($_REQUEST['dateDeparture'])){
    $dateArrival = $_REQUEST['dateArrival'];
    $dateDeparture = $_REQUEST['dateDeparture'];

    require "connection/connection.php";

    $innerQuery = <<<SQL
    SELECT rezervation.accommodation_id 
    FROM rezervation 
    WHERE (
       (rezervation.date_arrival > '$dateArrival' AND rezervation.date_arrival < '$dateDeparture')
        OR (rezervation.date_departure > '$dateArrival' AND rezervation.date_departure < '$dateDeparture')
        OR ('$dateArrival' > rezervation.date_arrival AND '$dateArrival' < rezervation.date_departure)
        OR ('$dateDeparture' > rezervation.date_arrival AND '$dateDeparture' < rezervation.date_departure)
    ) 
SQL;

    $isSearchValid = $dateArrival < $dateDeparture;
    $whereCondition = $isSearchValid
        ? "accommodation.id NOT IN ($innerQuery) OR rezervation.id IS NULL"
        : "1=0";

    $query = <<<SQL
        SELECT accommodation.id, accommodation.name   
        FROM `accommodation` 
        LEFT JOIN `rezervation` ON accommodation.id=rezervation.accommodation_id 
        WHERE $whereCondition
        GROUP BY accommodation.id, accommodation.name
SQL;

    $result = mysqli_query($connection, $query);
    ?>
    <select style=" background: #f1f1f1;" name="accommodationList" class="chosen" onselect="<?php  ?>">
        <option value="0">Izaberi smještaj</option>
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
<?php
}?>



