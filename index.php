<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>
</head>
<body>

    <form action="server.php" method="GET">
        <label for="phrase">Frase:</label>
        <input type="text" id="phrase" name="phrase" />
        <label for="badWord">Parola da censurare:</label>
        <input type="text" id="badWord" name="badWord" />
        <input type="submit" value="submit" />
        <input type="reset" value="Reset">
    </form>
    
</body>
</html>