<form>

    <input type="text" name="name">
    <input type="date" name="birthday">
    <input type="submit" value="Send"> 

</form>

<?php 

echo "<hr>";

if(isset($_GET))
{
    foreach($_GET as $key => $value)
    {
        echo $key . ": " . $value . "<br>";
    }
}


?>