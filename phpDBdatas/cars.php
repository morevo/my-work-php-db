<?php

   require_once "../config/connect.php";  // Make slowly transparent sheets after tap on button, and show another sheet slowly. (Success)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> <!-- Connect jquery from CDN -->
    <title>Cars</title>
</head>
<body style="display: none;">

    <header class="header">

        <nav class="header__nav">

            <a href="models.php" class="header__nav-link">Models</a>
            <a href="marks.php" class="header__nav-link">Marks</a>
            <a href="drivers.php" class="header__nav-link">Drivers</a>

        </nav>

    </header>
    
    <table class="main__table">
        <tr>
            <th>CarID</th>
            <th>DriverID</th>
            <th>MarkID</th>
            <th>ModelID</th>
            <th>Year</th>
            <th>Color</th>
            <th>SerialN</th>
        </tr>

        <?php
            $cars = mysqli_query($connect, "SELECT * FROM `Cars` "); // Got Object with values (keys,values)

            $cars = mysqli_fetch_all($cars); // replace Object to array

            $driverId = mysqli_query($connect, "SELECT `DriverID` FROM `Drivers`");
            $driverId = mysqli_fetch_all($driverId);

            $markId = mysqli_query($connect, "SELECT `MarkID` FROM `Marks`");
            $markId = mysqli_fetch_all($markId);

            $modelId = mysqli_query($connect, "SELECT `ModelID` FROM `Models`");
            $modelId = mysqli_fetch_all($modelId);


            // print_r($marks); // test..
            foreach($cars as $car) {
                ?>

                    <tr>
                        <td><?=$car[0]?></td>
                        <td><?=$car[1]?></td>
                        <td><?=$car[2]?></td>
                        <td><?=$car[3]?></td>
                        <td><?=$car[4]?></td>
                        <td><?=$car[5]?></td>
                        <td><?=$car[6]?></td>
                    </tr>

                <?php
            }
        ?>
    </table>
    

    <form class="form" action="../phpHandler/create.php" method="POST">
            
            <label class="form__label" for="carId">CarID</label>
            <input class="form__input" type="text" name="carId" id="carId" placeholder="CarID">
            
            <label class="form__label" for="driverId">DriverID</label>
            <select class="form__input" type="text" name="carDriverId" id="driverId" placeholder="DriverID">
                            <?php
                                foreach($driverId as $driverItem) {
                                    ?>
                                    <option value="<?=$driverItem[0]?>"><?=$driverItem[0]?></option>
                                <?php
                                }
                            ?>
            </select>

            <label class="form__label" for="markId">MarkID</label>
            <select class="form__input" type="text" name="carMarkId" id="markId" placeholder="MarkID">
                            <?php
                                foreach($markId as $markItem) {
                                    ?>
                                    <option value="<?=$markItem[0]?>"><?=$markItem[0]?></option>
                                <?php
                                }
                            ?>
            </select>

            <label class="form__label" for="modelId">ModelID</label>
            <select class="form__input" type="text" name="carModelId" id="modelId" placeholder="ModelID">
                            <?php
                                foreach($modelId as $modelItem) {
                                    ?>
                                    <option value="<?=$modelItem[0]?>"><?=$modelItem[0]?></option>
                                <?php
                                }
                            ?>
            </select>

            <label class="form__label" for="year">Year</label>
            <input class="form__input" type="text" name="year" id="year" placeholder="Year">

            <label class="form__label" for="color">Color</label>
            <input class="form__input" type="text" name="color" id="color" placeholder="Color">

            <label class="form__label" for="serialN">serialN</label>
            <input class="form__input" type="text" name="serialN" id="serialN" placeholder="serialN">

            <button type="submit" class="form__btn header__nav-link">Add new car</button>
    </form>

    <script src="../js/app.js"></script>

</body>
</html>