<?php
    include("navbar.php")
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glihttr's</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
    <style>
        body {
            font-family: "Arial", sans-serif;
            background-color: ghostwhite;
            margin: 0;
            padding: 0;
        }

        .header {
            display: flex;
            align-items: center;
            padding: 15px 20px;
            justify-content: space-between;
        }

        .black-text {
            color: black;
        }

        .content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 20px;
        }
        .content div {
            max-width: 45%; /* Adjust the width as needed */
        }

        .content img {
            width: 530px;
            height: auto;
            margin-right: 20px;
        }

        .content p {
            font-size: 25px;
            font-family: 'Charter BT', sans-serif;
            text-align: justify;
            margin-right: 15px;
        }
    </style>
</head>
<body>
    
    <div class="header">
        <div class="content">
            <img src="cat.png" alt="Cat Image">
            <div>
                <p><b>ABOUT US</b></p>
                <p class="black-text">
                    Welcome to our baking haven, where the joy of creating mouthwatering treats knows no bounds. Our passionate team of bakers and dessert enthusiasts is dedicated to making the art of baking accessible and enjoyable for all. We curate a delightful collection of recipes that are as easy to follow as they are delicious, and we believe in transparency and trust in every step of your baking journey.
                </p>
            </div>
            <div>
                <p><b>OUR MISSION</b></p>
                <p class="black-text">
                    To make baking accessible, enjoyable, and delicious for everyone. We want to share easy-to-follow recipes, helpful tips, and creative ideas to inspire both beginners and experienced bakers. Through a user-friendly platform, we aim to create a supportive community where people can explore the joy of baking, discover new flavors, and enhance their skills. Ultimately, the goal is to make the process of baking simple, rewarding, and a source of delight in every kitchen.
                </p>
            </div>
        </div>
    </div>
</body>
</html>