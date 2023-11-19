<?php
    include("navbar.php")
?>

<!DOCTYPE html>
<html>
<head>
    <title>Services</title>
    <style>
        body {
            font-family: verdana;
            background-color: lightpink;
            color: #3d3d3d;
            margin: 0;
            padding: 0;
            font-size: 15px;
        }

        section {
            background-color: ghostwhite;
            margin: 10px 100px;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        h2 {
            font-size: 20px;
        }

        p {
            font-size: 15px;
        }

        ul {
            list-style-type: disc;
            margin-left: 20px;
        }

        .contact-info {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .contact-form,
        .contact-details {
            flex-basis: calc(50% - 50px);
            margin: 10px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 2px solid #ccc;
            border-radius: 5px;
            background-color: ghostwhite;
        }

        input[type="submit"] {
            background-color: pink;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #F8C8DC;
        }
    </style>
</head>
<body>
    <br>
    <br>
    <br>
    <section id="contact">
        <h2>Contact Information</h2>
        <div class="contact-info">
            <div class="contact-form">
                <form>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>

                    <input type="submit" value="Submit">
                </form>
            </div>
            <div class="contact-details">
                <img src="catto.png" width="380" height="auto">
                <p>We would love to hear your feedback about our website!</p>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; GLIHTTR'S 2023. ALL RIGHTS RESERVED</p>
    </footer>
</body>
</html>