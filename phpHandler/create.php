<?php

    require_once "../config/connect.php";

?>

<?php    

    /* Add */

    //Cars
    $carId = $_POST["carId"];
    $carDriverId = $_POST["carDriverId"];
    $carMarkId = $_POST["carMarkId"];
    $carModelId = $_POST["carModelId"];
    $year = $_POST["year"];
    $color = $_POST["color"];
    $serialN = $_POST["serialN"];

    //Marks
    $markId = $_POST["markId"];
    $markName = $_POST["markName"];

    //Drivers
    $driverId = $_POST["driverId"];
    $nameDrivers = $_POST["driverName"];
    $city = $_POST["city"];
    $address = $_POST["address"];
    $date = $_POST["date"];

    //Models
    $modelId = $_POST["modelId"];
    $modelName = $_POST["modelsName"];

    //Cars
    mysqli_query($connect, "INSERT INTO `cars` (`CarID`, `DriverID`, `MarkID`, `ModelID`, `Year`, `Color`, `SerialN`) VALUES ('$carId', '$carDriverId', '$carMarkId', '$carModelId', '$year', '$color', '$serialN')");

    //Marks
    mysqli_query($connect, "INSERT INTO `marks` (`MarkID`, `Name`) VALUES ('$markId', '$markName')");

    //Drivers
    mysqli_query($connect, "INSERT INTO `drivers` (`DriverID`, `Name`, `City`, `Address`, `Date`) VALUES ('$driverId', '$nameDrivers', '$city', ' $address', '$date')");

    //Models
    mysqli_query($connect, "INSERT INTO `models` (`ModelID`, `Name`) VALUES ('$modelId', '$modelName')");


    exit;
?>