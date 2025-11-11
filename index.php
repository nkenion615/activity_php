<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exploring WordPress Customization</title>
</head>
<body>
    <h1>Exploring WordPress Customization</h1>

    <p>Name: Najee Kenion</p>
    <p>Date: 11/11/2025</p>

    <?php
        // Define variables
        $theme = "Astra";
        $plugins = 12;
        $customizable = true;

        // Define a user function using two variables
        function siteDetails($themeName, $pluginCount) {
            return "The WordPress site is using the " . $themeName . " theme with " . $pluginCount . " plugins installed.";
        }

        // Call function and display in heading 2
        echo "<h2>" . siteDetails($theme, $plugins) . "</h2>";

        // Compare JavaScript and PHP
        echo "<p>JavaScript runs in the browser on the client side, while PHP runs on the server before the page is sent to the browser.</p>";
    ?>
</body>
</html>
