<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditioning php in html</title>
    <style>
        div{
            display:inline-block;
        }
        .num{
            width:30px
        }
        .op{
            width:40px
        }
    </style>
</head>
<body>
    <h1>PHP in HTML</h1>
    <form action="index.php" method="POST">
        <div>
            <input class="num" type="text" name="n1" >   
        </div>
        <div>
            <select class="op" name="selecao">
                <option value="1">+</option>
                <option value="2">-</option>
            </select>  
        </div>
        <div>
            <input class="num"  type="text" name="n2" >
    </div>
    <p><input type="submit" value="Send"></p>
    </form>
    
    <?php if ($_POST['selecao'] == 1): echo (int)$_POST['n1'] + (int)$_POST['n2'];?>
    <?php else: echo (int)$_POST['n1'] - (int)$_POST['n2'];?>
    <?php endif; ?>

</body>
</html>
