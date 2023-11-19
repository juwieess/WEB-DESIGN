<?php
include("connect.php");
include("navbar.php");

$category = ['Cakes', 'Cookies'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="font/css/all.min.css">
    <title>Recipe Page</title>
    <style>
        .card {
            border: 1px solid #ccc;
            display: inline-block;
            margin: 10px;
            width: 250px;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.4);
        }
        .card img {
            max-width: 100%;
            height: auto;
            object-fit: cover;
        }
        img {
            border: 1px solid #ccc;
            width: 447px;
            max-width: 100%;
            height: 230px;
            object-fit: cover;
        }
        .caption {
            padding: 10px;
        }
        footer {
            text-align: center;
            background-color: lightpink;
            color: #fff;
            padding: 10px 0;
        }
    </style>
</head>
<body>
    <?php
    foreach ($category as $category) {
        $sql = "SELECT * FROM upload WHERE category = '$category'";
        $result = $conn->query($sql);

        echo "<h2>$category</h2>";

        echo '<main>';
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <div class="card">
            <p class="recipeName"><?php echo $row["recipeName"]; ?>
            <div class="image">
                <img src="<?php echo $row["recipeImage"]; ?>" alt="">
            </div>
            <div class="caption">
                <p class="rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </p>
                <p class="recipeIng"><?php echo $row["recipeIng"]; ?></p>
                <p class="recipeSteps"><b><?php echo $row["recipeSteps"]; ?></b></p>
            </div>
        </div>
    <?php
        }
        echo '</main>';
    }
    ?>
    <footer>
        <p>&copy; GLIHTTR'S 2023. ALL RIGHTS RESERVED</p>
    </footer>
</body>
</html>