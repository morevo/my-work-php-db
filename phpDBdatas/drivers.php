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
            <th>DriverID</th>
            <th>Name</th>
            <th>City</th>
            <th>Address</th>
            <th>Date</th>
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

    <form class="form form__position-drivers" action="../phpHandler/create.php" method="POST">
            
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

            <button type="submit" class="form__btn header__nav-link">Add new car</button>
    </form>

    <script src="../js/app.js"></script>
   
</body>
</html>