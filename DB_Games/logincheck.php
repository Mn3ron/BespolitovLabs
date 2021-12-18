<?php
function check(){
    if (!$_SESSION['Logincheck'])  {header("Location: login.php");}


}

?>