<?php

    require_once "../config/connect.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../css/style.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <title>Drivers</title>
</head>
<body style="display: none;">

<header class="header">

        <nav class="header__nav">

            <a href="cars.php" class="header__nav-link">Cars</a>   
            <a href="models.php" class="header__nav-link">Models</a>
            <a href="marks.php" class="header__nav-link">Marks</a>

        </nav>

</header>

    <table class="main__table">
    
        <tr>
            <th><a href="" class="main__table-link">DriverID</a></th>
            <th><a href="" class="main__table-link">Name</a></th>
            <th><a href="" class="main__table-link">City</a></th>
            <th><a href="" class="main__table-link">Address</a></th>
            <th><a href="" class="main__table-link">Date</a></th>
        </tr>

        <?php
            $drivers = mysqli_query($connect, "SELECT * FROM `Drivers` "); // Got Object with values (keys,values)

            $drivers = mysqli_fetch_all($drivers); // replace Object to array

            // print_r($marks); // test..
            foreach($drivers as $driver) {
                ?>

                    <tr>
                        <td><?=$driver[0]?></td>
                        <td><?=$driver[1]?></td>
                        <td><?=$driver[2]?></td>
                        <td><?=$driver[3]?></td>
                        <td><?=$driver[4]?></td>
                    </tr>

                <?php
            }
        ?>
    </table>

    <form class="form form__add form__position-drivers" action="../phpHandler/create.php" method="POST" data-form="delete">

        <div class="form__links">
            <a class="form__links-item" href="#" data-filter="delete">Delete</a>
            <a class="form__links-item" href="#" data-filter="update">Update</a>
        </div>
            
            <label class="form__label" for="driverId">DriverID</label>
            <input class="form__input" type="text" name="driverId" id="driverId" placeholder="DriverID">

            <label class="form__label" for="name">Name</label>
            <input class="form__input" type="text" name="driverName" id="name" placeholder="Name">

            <label class="form__label" for="city">City</label>
            <input class="form__input" type="text" name="city" id="city" placeholder="City">

            <label class="form__label" for="address">Address</label>
            <input class="form__input" type="text" name="address" id="address" placeholder="Address">

            <label class="form__label" for="date">Date</label>
            <input class="form__input" type="text" name="date" id="date" placeholder="Date">

            <button type="submit" class="form__btn header__nav-link">Add driver</button>
    </form>

    <form class="form form__delete form__position-drivers" action="../phpHandler/delete.php" method="POST" style="display: none;" data-form="add">

<div class="form__links">
    <a class="form__links-item" href="#" data-filter="add">Add</a>
    <a class="form__links-item" href="#" data-filter="update">Update</a>
</div>
            
            <label class="form__label" for="driverId">DriverID</label>
            <input class="form__input" type="text" name="driverId" id="driverId" placeholder="DriverID">

            <button type="submit" class="form__btn header__nav-link">Delete driver</button>
    </form>

    <form class="form form__update form__position-drivers" action="../phpHandler/update.php" method="POST" style="display: none;" data-form="update">

        <div class="form__links">
            <a class="form__links-item" href="#" data-filter="add">Add</a>
            <a class="form__links-item" href="#" data-filter="delete">Delete</a>
        </div>
            
            <label class="form__label" for="driverId">DriverID</label>
            <input class="form__input" type="text" name="driverId" id="driverId" placeholder="DriverID">

            <label class="form__label" for="name">Name</label>
            <input class="form__input" type="text" name="driverName" id="name" placeholder="Name">

            <label class="form__label" for="city">City</label>
            <input class="form__input" type="text" name="city" id="city" placeholder="City">

            <label class="form__label" for="address">Address</label>
            <input class="form__input" type="text" name="address" id="address" placeholder="Address">

            <label class="form__label" for="date">Date</label>
            <input class="form__input" type="text" name="date" id="date" placeholder="Date">

            <button type="submit" class="form__btn header__nav-link">Update driver</button>
    </form>
    

    <script src="../js/app.js"></script>
   
</body>
</html>