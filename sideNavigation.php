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
    <div style="margin-left: 15px">
        <i style="color: white;">Administrator:</i><br>
        <div style="color:white; display: inline-block "><?php echo $firstname." ".$lastname; ?></div><br>
        <i class='fas fa-circle' style="color: greenyellow; font-size: 12px"></i>
        <p style="display: inline-block; color: white">Online</p>
    </div>

    <a href="indexAdmin.php"><i class="fa fa-home"></i> Početna</a>
    <hr>
    <a href="<?='indexAdmin.php?name=hotelInfo'?>">Hotel</a>
    <a href="<?='indexAdmin.php?name=updateHotelInfo'?>">Informacije o hotelu</a>

    <a href="<?='indexAdmin.php?name=registration'?>">Registracija</a>

    <button class="dropdown-btn">Rezervacija
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="<?='indexAdmin.php?name=addRezervation'?>"  >Dodaj rezervaciju</a>
        <a href="<?='indexAdmin.php?name=tableRezervation'?>">Izlistaj rezervacije</a>
        <a href="<?='indexAdmin.php?name=tableRezervation&userId='.$user_id ?>">Izvrsene rezervacije</a>
    </div>

    <button class="dropdown-btn">Smještaj
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="<?='indexAdmin.php?name=addAccommodation'?>">Dodaj smještaj</a>
        <a href="<?='tableAccommodation.php'?>">Izlistaj smještaje</a>
    </div>

    <button class="dropdown-btn">Obaveza
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="<?='indexAdmin.php?name=addObligation'?>"">Dodaj obavezu</a>
        <a href="<?='indexAdmin.php?name=assignObligation'?>">Dodijeli obavezu</a>
        <a href="<?='indexAdmin.php?name=tableObligation'?>">Izlistaj obaveze</a>
    </div>

    <a href="<?='indexAdmin.php?name=galleryImage'?>">Galerija</a>

    <a href="<?='indexAdmin.php?name=tableGuestUser&userTypeId=3'?>">Gosti</a>
    <a href="<?='indexAdmin.php?name=tableGuestUser&userTypeId=2'?>">Radnici</a>
    <a href="<?='indexAdmin.php?name=tableGuestUser&userTypeId=1'?>">Administratori</a>
<!--    <a href="#">Genrisi PDF</a>-->
    <hr>
    <a href="logout.php"> <i class="fas fa-sign-out-alt"></i> Odjavi se</a>
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
        <div style="margin-left: 15px">
            <i style="color: white;">Radnik:</i><br>
            <div style="color:white; display: inline-block "><?php echo $firstname." ".$lastname; ?></div><br>
            <i class='fas fa-circle' style="color: greenyellow; font-size: 12px"></i>
            <p style="display: inline-block; color: white">Online</p>
        </div>

        <a href="indexAdmin.php"><i class="fa fa-home"></i> Početna</a>
        <hr>
        <a href="<?='indexAdmin.php?name=hotelInfo'?>">Hotel</a>
        <a href="<?='indexAdmin.php?name=tableObligation&userId='.$user_id ?>">Moje obaveze</a>
        <a href="<?='indexAdmin.php?name=tableRezervation&userId='.$user_id ?>">Izvrsene rezervacije</a>
        <button class="dropdown-btn">Rezervacija
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="<?='indexAdmin.php?name=addRezervation'?>"  >Dodaj rezervaciju</a>
            <a href="<?='indexAdmin.php?name=tableRezervation'?>">Izlistaj rezervacije</a>
        </div>

        <button class="dropdown-btn">Smještaj
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="<?='tableAccommodation.php'?>">Izlistaj smještaje</a>
        </div>

        <button class="dropdown-btn">Obaveza
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="<?='indexAdmin.php?name=addObligation'?>"">Dodaj obavezu</a>
            <a href="<?='indexAdmin.php?name=assignObligation'?>">Dodijeli obavezu</a>
            <a href="<?='indexAdmin.php?name=tableObligation'?>">Izlistaj obaveze</a>
        </div>

        <a href="<?='indexAdmin.php?name=galleryImage'?>">Galerija</a>

        <hr>
        <a href="logout.php"> <i class="fas fa-sign-out-alt"></i> Odjavi se</a>
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
        <div style="margin-left: 15px">
            <i style="color: white;">Gost:</i><br>
            <div style="color:white; display: inline-block "><?php echo $firstname." ".$lastname; ?></div><br>
            <i class='fas fa-circle' style="color: greenyellow; font-size: 12px"></i>
            <p style="display: inline-block; color: white">Online</p>
        </div>

        <a href="indexAdmin.php"><i class="fa fa-home"></i> Početna</a>
        <hr>
        <a href="<?='indexAdmin.php?name=hotelInfo'?>">Hotel</a>
        <a href="<?='indexAdmin.php?name=tableRezervation&guestId='.$guest_id ?>">Moje rezervacije</a>
        <button class="dropdown-btn">Rezervacija
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="<?='indexAdmin.php?name=addRezervation'?>"  >Dodaj rezervaciju</a>
        </div>

        <button class="dropdown-btn">Smještaj
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="<?='tableAccommodation.php'?>">Izlistaj smještaje</a>
        </div>

        <a href="<?='indexAdmin.php?name=galleryImage'?>">Galerija</a>

        <hr>
        <a href="logout.php"> <i class="fas fa-sign-out-alt"></i> Odjavi se</a>
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