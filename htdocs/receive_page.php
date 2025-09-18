        <?php

        if(isset($_REQUEST['username'])){
            if(!empty($_REQUEST['username']) and $_REQUEST['password'] != ""){
                echo ($_REQUEST["username"]."<br>");
                echo ($_REQUEST["password"]."<br>");
            }
        }
        
        ?>