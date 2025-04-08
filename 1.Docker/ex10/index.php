<!-- index.php -->
<!DOCTYPE html>
<html>
<head>
    <title>PHP Test</title>
</head>
<body>
    <h1>Hello from PHP!</h1>
    <p>This is a simple PHP application running in a Docker container.</p>
    <?php
    echo "<p>PHP version: " . phpversion() . "</p>";
    ?>
</body>
</html>