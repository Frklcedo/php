<link rel="stylesheet" href="style.css">
Hi, 
<?php

echo htmlspecialchars($_GET['name']);

?>.
You are <?php

echo (int)$_GET['age'];

?> years old.

<p><a class="button" href="index.html" rel="prev" target="_self">Return</a></p>