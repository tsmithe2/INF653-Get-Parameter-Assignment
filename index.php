<?php
    echo "<!DOCTYPE html>
    <html lang = 'en'>
    <head>
        <meta charset = 'UTF-8'>
        <meta name = 'viewport' content = 'width-device-width, initial-scale=1.0'>
        <link rel = 'stylesheet' href = 'css/main.css'>
        <title>Get parameter assignment</title>
    </head>
    <body>";

    if (isset($_GET["fname"]) && isset($_GET["lname"]) && isset($_GET["age"]))
    {
        $first_name = $_GET["fname"];
        $last_name = $_GET["lname"];
        $age = $_GET["age"];
        $days = number_format((int)$age * 365);

        if (!empty($first_name) && !empty($last_name) && !empty($age))
        {
            echo "<div class = 'output'><h1>Hello, my name is " . htmlspecialchars($first_name) . " " . htmlspecialchars($last_name) . "</h1>.<br>";
            echo "<h2>I am " . htmlspecialchars($age) . " years old and ";
            if ($age >= 18)
            {
                echo "I am old enough to vote in the United States.</h2>";
            }
            else
            {
                echo "I am not old enough to vote in the United States.</h2>";
            }
            echo "<h3>That means I am at least " . htmlspecialchars($days) . " days old.</h3><br>";
            echo "<b>Today is " . date("m/d/Y") . "</b></div>";
        }
        else
        {
            echo "Be sure to enter and submit values for First name, Last name, and Age.<br>";
            echo "Also, please don't set age to zero as I am certain that you're older than that!";
        }
    }
    else
    {
        echo "The parameters are not set.";
    }

    echo "</body></html>";

?>