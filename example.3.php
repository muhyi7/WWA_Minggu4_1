<?php include("class_lib.php"); ?>
<?php
    $stefan = new person();
    $jimmy = new person();

    $stefan->set_name("Stefan Mischook");
    $jimmy->set_name("Nick Waddles");

    // Menggunakan metode get_name untuk mengakses properti name
    echo "Stefan's full name: " . $stefan->get_name();
?>