<?php
    include "header.php";
    include "navigation.php";
?>

<?php
if(isset($_GET["page"])){
    switch($_GET["page"]){
        case "homepage":
            include ("homepage.php");
            break;
        case "places":
            include ("places.php");
            break;
        case "aboutus":
            include ("aboutus.php");
            break;
        case "registration":
            include ("registration.php");
            break;
        case "login":
            include ("login_page.php");
            break;
    }
} else{
    include ("homepage.php");
}
?>
<br><br>

<?php
    include "footer.php";
?>