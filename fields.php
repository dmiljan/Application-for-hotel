<?php
if($_REQUEST['user_id'] == 2) {
    ?>
    <div style="display: flex">
        <input style="width: 50%; margin-right: 10px;" type="text" name="nameWorkspace" placeholder="Naziv radnog mjesta">
        <div style="width: 50%">
            <input  style=" background: #f1f1f1; margin-bottom: 0;" type="date" name="dateEmployment" >
            <label style="font-size: 12px; margin-top: 0px">Datum zaposlenja</label>
        </div>
    </div>
    <?php
}
?>