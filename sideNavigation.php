<!--razdvajanje sidebar-a za admina, radnike i goste-->

<!--Sidebar za administratore-->

<?php
session_start();
if(isset($_SESSION['userAdmin'])){
    $user_id = $_SESSION['userAdmin']['id'];
?>

<div class="sidenav">
    <?php
    $firstname=$_SESSION['userAdmin']['firstname'];
    $lastname=$_SESSION['userAdmin']['lastname'];
    ?>
<!--    <div class="user-panel" style="margin-left: 15px">-->
    <div class="user-panel">
        <i style="color: white; font-size: 18px"> <i class="far fa-user" style="width: 40px"></i>Administrator:</i><br>
        <i class='fas fa-circle' style="color: greenyellow; font-size: 12px;"></i>
        <div style="color:white; display: inline-block; padding: 5px ">  <?php echo $firstname." ".$lastname; ?></div>
    </div>

    <a href="indexAdmin.php?name=hotelInfo"  style="text-decoration: none"><i class="fa fa-home"></i> Početna</a>
    <hr>

    <a href="<?='indexAdmin.php?name=updateHotelInfo'?>" style="text-decoration: none"><i class="fas fa-hotel"></i> Hotel </a>
    <a href="<?='indexAdmin.php?name=registration'?>" style="text-decoration: none"><i class="far fa-registered"></i> Registracija</a>

    <button class="dropdown-btn"><i class="far fa-check-circle"></i> Rezervacija
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="<?='indexAdmin.php?name=addRezervation'?>"style="text-decoration: none" >Dodaj rezervaciju</a>
        <a href="<?='indexAdmin.php?name=tableRezervation'?>"style="text-decoration: none">Izlistaj rezervacije</a>
        <a href="<?='indexAdmin.php?name=tableRezervation&userId='.$user_id ?>"style="text-decoration: none">Izvrsene rezervacije</a>
    </div>

    <button class="dropdown-btn"> <i class="far fa-building"></i> Smještaj
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="<?='indexAdmin.php?name=addAccommodation'?>" style="text-decoration: none">Dodaj smještaj</a>
        <a href="<?='tableAccommodation.php'?>" style="text-decoration: none">Izlistaj smještaje</a>
    </div>

    <button class="dropdown-btn"> <i class="fas fa-list-ul"></i> Obaveza
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="<?='indexAdmin.php?name=addObligation'?>" style="text-decoration: none">Dodaj obavezu</a>
        <a href="<?='indexAdmin.php?name=assignObligation'?>" style="text-decoration: none">Dodijeli obavezu</a>
        <a href="<?='indexAdmin.php?name=tableObligation'?>" style="text-decoration: none">Izlistaj obaveze</a>
    </div>

    <a href="<?='indexAdmin.php?name=galleryImage'?>"style="text-decoration: none"><i class="far fa-images" ></i> Galerija</a>

    <a href="<?='indexAdmin.php?name=tableGuestUser&userTypeId=3'?>" style="text-decoration: none"> <i class="fas fa-swimmer"></i> Gosti</a>
    <a href="<?='indexAdmin.php?name=tableGuestUser&userTypeId=2'?>" style="text-decoration: none"> <i style="font-size: 25px;" class="fas fa-male"></i> Radnici</a>
    <a href="<?='indexAdmin.php?name=tableGuestUser&userTypeId=1'?>" style="text-decoration: none"> <i class="fas fa-user-cog"></i> Administratori</a>
<!--    <a href="#">Genrisi PDF</a>-->
    <hr>
    <a href="logout.php" style="text-decoration: none"> <i class="fas fa-sign-out-alt"></i> Odjavi se</a>
</div>
<?php
}
?>

<!--Sidebar za radnike-->
<?php
if(isset($_SESSION['userWorker'])){
    $user_id = $_SESSION['userWorker']['id'];
    ?>
    <div class="sidenav">
        <?php
        $firstname=$_SESSION['userWorker']['firstname'];
        $lastname=$_SESSION['userWorker']['lastname'];
        ?>
        <div class="user-panel">
            <i style="color: white; font-size: 18px"> <i class="far fa-user" style="width: 40px"></i>Radnik:</i><br>
            <i class='fas fa-circle' style="color: greenyellow; font-size: 12px;"></i>
            <div style="color:white; display: inline-block; padding: 5px ">  <?php echo $firstname." ".$lastname; ?></div>
        </div>

        <a href="indexAdmin.php?name=hotelInfo"  style="text-decoration: none"><i class="fa fa-home"></i> Početna</a>
        <hr>
        <a href="<?='indexAdmin.php?name=registration'?>" style="text-decoration: none"><i class="far fa-registered"></i> Registracija</a>
        <a href="<?='indexAdmin.php?name=tableObligation&userId='.$user_id ?>"  style="text-decoration: none"> <i class="fas fa-user-check"></i>Moje obaveze</a>

        <button class="dropdown-btn"><i class="far fa-check-circle"></i> Rezervacija
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="<?='indexAdmin.php?name=addRezervation'?>" style="text-decoration: none"> Dodaj rezervaciju</a>
            <a href="<?='indexAdmin.php?name=tableRezervation'?>" style="text-decoration: none">Izlistaj rezervacije</a>
            <a href="<?='indexAdmin.php?name=tableRezervation&userId='.$user_id ?>"  style="text-decoration: none">Izvršene rezervacije</a>
        </div>

        <button class="dropdown-btn"> <i class="far fa-building"></i> Smještaj
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="<?='tableAccommodation.php'?>"  style="text-decoration: none">Izlistaj smještaje</a>
        </div>

        <button class="dropdown-btn"><i class="fas fa-list-ul"></i> Obaveza
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="<?='indexAdmin.php?name=addObligation'?>" style="text-decoration: none">Dodaj obavezu</a>
            <a href="<?='indexAdmin.php?name=assignObligation'?>"  style="text-decoration: none">Dodijeli obavezu</a>
            <a href="<?='indexAdmin.php?name=tableObligation'?>" style="text-decoration: none">Izlistaj obaveze</a>
        </div>

        <a href="<?='indexAdmin.php?name=galleryImage'?>"  style="text-decoration: none"><i class="far fa-images" ></i> Galerija</a>

        <hr>
        <a href="logout.php"  style="text-decoration: none"> <i class="fas fa-sign-out-alt"></i> Odjavi se</a>
<!--        <a href="logout.php">Logout</a>-->
    </div>
    <?php
}
?>

<!--Sidebar za goste-->
<?php
if(isset($_SESSION['userGuest'])){
    $guest_id = $_SESSION['userGuest']['id'];
    ?>
    <div class="sidenav">
        <?php
        $firstname=$_SESSION['userGuest']['firstname'];
        $lastname=$_SESSION['userGuest']['lastname'];
        ?>

        <div class="user-panel">
            <i style="color: white; font-size: 18px"> <i class="far fa-user" style="width: 40px"></i>Gost:</i><br>
            <i class='fas fa-circle' style="color: greenyellow; font-size: 12px;"></i>
            <div style="color:white; display: inline-block; padding: 5px ">  <?php echo $firstname." ".$lastname; ?></div>
        </div>

        <a href="indexAdmin.php?name=hotelInfo"  style="text-decoration: none"><i class="fa fa-home"></i> Početna</a>
        <hr>
        <a href="<?='indexAdmin.php?name=tableRezervation&guestId='.$guest_id ?>"  style="text-decoration: none"><i class="fas fa-user-check"></i> Moje rezervacije</a>

        <button class="dropdown-btn"> <i class="far fa-building"></i> Smještaj
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="<?='tableAccommodation.php'?>"  style="text-decoration: none">Izlistaj smještaje</a>
        </div>

        <a href="<?='indexAdmin.php?name=galleryImage'?>"  style="text-decoration: none"><i class="far fa-images" ></i> Galerija</a>

        <hr>
        <a href="logout.php"  style="text-decoration: none"> <i class="fas fa-sign-out-alt"></i> Odjavi se</a>
    </div>
    <?php
}
?>
<script>
    var dropdown = document.getElementsByClassName("dropdown-btn");

    var i;
    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }
</script>