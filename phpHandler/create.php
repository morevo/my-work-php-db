<?php

    require_once "../config/connect.php"

?>

<?php    

    //Cars

    $carsId = $_POST["carId"];
    $carDriverId = $_POST["carDriverId"];
    $carMarkId = $_POST["carMarkId"];
    $carModelId = $_POST["carModelId"];
    $year = $_POST["year"];
    $color = $_POST["color"];
    $serialN = $_POST["serialN"];

    mysqli_query($connect, "INSERT INTO `cars` (`CarID`, `DriverID`, `MarkID`, `ModelID`, `Year`, `Color`, `SerialN`) VALUES ('$carsId', '$carDriverId', '$carMarkId', '$carModelId', '$year', '$color', '$serialN')");

    //Marks
    
    $markId = $_POST["markId"];
    $markName = $_POST["markName"];

    mysqli_query($connect, "INSERT INTO `marks` (`MarkID`, `Name`) VALUES ('$markId', '$markName')");

    //Drivers
    
    $driverId = $_POST["driverId"];
    $nameDrivers = $_POST["driverName"];
    $city = $_POST["city"];
    $address = $_POST["address"];
    $date = $_POST["date"];

    mysqli_query($connect, "INSERT INTO `drivers` (`DriverID`, `Name`, `City`, `Address`, `Date`) VALUES ('$driverId', '$nameDrivers', '$city', ' $address', '$date')");

    //Models

    $modelId = $_POST["modelId"];
    $modelName = $_POST["modelsName"];

    mysqli_query($connect, "INSERT INTO `models` (`ModelID`, `Name`) VALUES ('$modelId', '$modelName')");

        

        print_r($_POST);
?>