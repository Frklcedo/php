<?php

require_once "server/config.php";

$stmt = $conn->prepare("SELECT * FROM tb_user");

$stmt->execute();

$table = $stmt->fetchAll(PDO::FETCH_ASSOC);

$sh = htmlspecialchars($_POST['research']);
$sh = strtolower($sh);
$ids = array();
foreach($table as $user){
    if(str_contains(strtolower($user['deslogin']),$sh)){
        foreach($user as $key=>$value){
            $statement = "<p>";
            $statement .= $key . ": " . $value;
            $statement .= "</p>";
            echo $statement;
        }
        ?>
        <div class="form-user">
            <form  class="form-user" action="updateItem.php" method="POST">
                <input type="hidden" name="user" value="<?php echo $user['deslogin']; ?>">
                <input type="hidden" name="id" value="<?php echo (int)$user['iduser']; ?>">
                <input type="submit" value="Change info">
            </form>
            <form  class="form-user" action="deleted.php" method="POST">
                <input type="hidden" name="id" value="<?php echo (int)$user['iduser']; ?>">
                <input type="submit" value="Delete acc">
            </form>
        </div>
        <?php
        echo "<hr>";
    }
}