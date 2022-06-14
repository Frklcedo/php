<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concluded</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>
            Account added
        </h1>
    </header>
    <main>
        <div>
            <?php require_once("server/insert.php");?>
        </div>
        <nav class="return">
            <a href="insert.html" rel="prev" target="_self">Insert new account</a>
        </nav>
    </main>
    <nav class="return">
        <a href="index.html" rel="prev" target="_self">Return to main menu</a>
    </nav>
</body>
</html>