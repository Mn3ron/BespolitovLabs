<?php
function check(){
    if (!$_SESSION['Logincheck'])  {echo '<meta http-equiv="refresh" content="0.1;URL=login.php">';}
}

?>