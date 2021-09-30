<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update info of <?php echo $_POST['user'];?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>
            Update info: <?php echo $_POST['user'];?>
        </h1>
    </header>
    <main>
    <form action="updated.php" method="post">
            
            <label for="name">Your name</label>

            <input type="hidden" name="id" value="<?php echo (int)$_POST['id']; ?>">

            <input class="formtext" type="text" name="name" value="<?php echo $_POST['user'];?>" required>

            <label for="oldpass">Old password</label>
            <input class="formtext" type="password" name="oldpass" placeholder="**********" required>

            <label for="passwd">New password</label>
            <input class="formtext" type="password" name="passwd" placeholder="**********" required>

            <label for="passwdcon">Confirm new password</label>
            <input class="formtext" type="password" name="passwdcon" placeholder="**********" required>

            <input type="submit" value="Send">
        </form>
    </main>
    <nav class="return">
        <a href="index.html" rel="prev" target="_self">Return to main menu</a>
    </nav>
</body>
</html>