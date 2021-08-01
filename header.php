<?php
if(isset($_COOKIE['notification'])){
    $notification = $_COOKIE['notification'];
    ?>
    <div class="notification">
        <?php
            echo $notification;
        ?>
    </div>
<?php
    setcookie("notification", "", time()-3600*24, "/");
}
?>
<style>
    .notification{
        /*border-radius: 5px;*/
        border: 1px solid #b13614;
        /*background-color: rgba(242, 74, 24, 0.71);*/
        background: #9e2e2b;
        color: white;
        letter-spacing: 1px;
        text-align: center;
        font-family: Arial;
        height: 30px;
        line-height: 30px;
        font-size: 18px;
    }
</style>
