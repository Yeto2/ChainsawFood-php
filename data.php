<div>
<?php
            // if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //         if (isset($_POST['name']) && isset($_POST['number']) && isset($_POST['email']) && isset($_POST['comand'])) {
                        
                        $name   = $_POST['name'];
                        $phone = $_POST['phone'];
                        $email  = $_POST['email'];
                        $comandCode = $_POST['comand'];


                        echo $name;
                        echo "<br>";
                        echo $phone;
                        echo "<br>";
                        echo $email;
                        echo "<br>";
                        echo $comandCode;
                
?>


</div>