<?php

    require_once "../config/connect.php";

?>

<?php

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

    /* Cars */
    mysqli_query($connect, "UPDATE `cars` SET `CarID` = '$carId', `DriverID` = '$carDriverId', `MarkID` = '$carMarkId', `ModelID` = '$carModelId', `Year` = '$year', `Color` = '$color', `SerialN` = '$serialN' WHERE `cars`.`CarID` = $carId AND `cars`.`DriverID` = $carDriverId AND `cars`.`MarkID` = $carMarkId AND `cars`.`ModelID` = $carModelId");

    /* Marks */
    mysqli_query($connect, "UPDATE `marks` SET `MarkID` = '$markId', `Name` = '$markName' WHERE `marks`.`MarkID` = $markId");

    /* Drivers */
    mysqli_query($connect, "UPDATE `drivers` SET `DriverID` = '$driverId', `Name` = '$nameDrivers', `City` = '$city', `Address` = ' $address', `Date` = '$date' WHERE `drivers`.`DriverID` = $driverId");

    /* Models */
    mysqli_query($connect, "UPDATE `models` SET `ModelID` = '$modelId', `Name` = '$modelName' WHERE `models`.`ModelID` = $modelId");
?>