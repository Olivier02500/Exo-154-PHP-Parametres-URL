<?php

if (isset($_GET["iteration"])){
    $value = $_GET["iteration"];
    for ($i = 0; $i < $value; $i++){
        echo '<p>'. "Hello World !" . '</p>';
    }
}
echo "<p><a href='./index.php'>Back</a></p>";