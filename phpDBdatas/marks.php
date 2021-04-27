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
   <title>Marks</title>
</head>
<body style="display: none;">

<header class="header">

        <nav class="header__nav">

            <a href="cars.php" class="header__nav-link">Cars</a>   
            <a href="models.php" class="header__nav-link">Models</a>
            <a href="drivers.php" class="header__nav-link">Drivers</a>

        </nav>

</header>

    <table class="main__table">
    
        <tr>
            <th>MarkID</th>
            <th>Name</th>
        </tr>

        <?php
            $marks = mysqli_query($connect, "SELECT * FROM `Marks` "); // Got Object with values (keys,values)

            $marks = mysqli_fetch_all($marks); // replace Object to array

            // print_r($marks); // test..
            foreach($marks as $mark) {
                ?>

                    <tr>
                        <td><?=$mark[0]?></td>
                        <td><?=$mark[1]?></td>
                    </tr>

                <?php
            }
        ?>
    </table>

    <form class="form form__position-marks" action="../phpHandler/create.php" method="POST">
            
            <label class="form__label" for="markId">MarkID</label>
            <input class="form__input" type="text" name="markId" id="markId" placeholder="MarkId">

            <label class="form__label" for="name">Name</label>
            <input class="form__input" type="text" name="markName" id="name" placeholder="Name">

            <button type="submit" class="form__btn header__nav-link">Add new mark</button>
    </form>

    <script src="../js/app.js"></script>

</body>
</html>