<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search: <?php echo $_POST['research']; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
        <h1>
            Search and display users
        </h1>
    </header>
    <main class="just">
        <div class="just">
            <?php  require_once("search.php");?>
        </div>
        <nav class="return">
            <a href="display.html" rel="prev" target="_self">Return to display menu</a>
        </nav>
    </main>
    <nav class="return">
        <a href="index.html" rel="prev" target="_self">Return to main menu</a>
    </nav>
</body>
</html>