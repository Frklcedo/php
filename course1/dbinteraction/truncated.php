<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Truncate all users</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>
            Truncate
        </h1>
    </header>
    <main>
        <div>
            <?php require_once("server/truncate.php");?>
        </div>
        <p>
            All users have been deleted
        </p>
    </main>
    <nav class="return">
        <a href="index.html" rel="prev" target="_self">Return to main menu</a>
    </nav>
</body>
</html>