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
   <title>Models</title>
</head>
<body style="display: none;">
<header class="header">

        <nav class="header__nav">

            <a href="cars.php" class="header__nav-link">Cars</a>   
            <a href="marks.php" class="header__nav-link">Marks</a>
            <a href="drivers.php" class="header__nav-link">Drivers</a>

        </nav>

</header>
    

    <table class="main__table">
    
        <tr>
            <th>ModelID</th>
            <th>Name</th>
        </tr>

        <?php
            $models = mysqli_query($connect, "SELECT * FROM `Models` "); // Got Object with values (keys,values)

            $models = mysqli_fetch_all($models); // replace Object to array

            // print_r($marks); // test..
            foreach($models as $model) {
                ?>

                    <tr>
                        <td><?=$model[0]?></td>
                        <td><?=$model[1]?></td>
                    </tr>

                <?php
            }
        ?>
    </table>

    <form class="form form__position-models" action="../phpHandler/create.php" method="POST">
            
            <label class="form__label" for="modelId">ModelID</label>
            <input class="form__input" type="text" name="modelId" id="modelId" placeholder="ModelID">

            <label class="form__label" for="name">Name</label>
            <input class="form__input" type="text" name="modelsName" id="name" placeholder="Name">

            <button type="submit" class="form__btn header__nav-link">Add new model</button>
    </form>

    <script src="../js/app.js"></script>

</body>
</html>