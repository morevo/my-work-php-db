<?php

    require_once "../config/connect.php";

?>

<?php

//Cars
$carId = $_POST["carId"];
$carDriverId = $_POST["carDriverId"];
$carMarkId = $_POST["carMarkId"];
$carModelId = $_POST["carModelId"];

//Drivers
$driverId = $_POST["driverId"];

//Models
$modelId = $_POST["modelId"];

//Marks
$markId = $_POST["markId"];

//Cars
mysqli_query($connect, "DELETE FROM `cars` WHERE `cars`.`CarID` = $carId AND `cars`.`DriverID` = $carDriverId AND `cars`.`MarkID` = $carMarkId AND `cars`.`ModelID` = $carModelId");

//Drivers
mysqli_query($connect, "DELETE FROM `drivers` WHERE `drivers`.`DriverID` = $driverId");

//Models
mysqli_query($connect, "DELETE FROM `models` WHERE `models`.`ModelID` = $modelId");

//Marks
mysqli_query($connect, "DELETE FROM `marks` WHERE `marks`.`MarkID` = $markId");


?>