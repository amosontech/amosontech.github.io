<?php
    use codingtube\app\middleware\App;
    use codingtube\app\middleware\Database;
    if($file = "app/autoloader.php"):
        require $file;
        $app = new App();
        $db = new Database();
        $db->conn();
    endif;
?>