<?php
require ('dbcon.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <!-- css file -->
        <link rel="stylesheet" href="css/style.css">
        <title>Data page</title>
</head>
<body>
<?php
                        $name   = $_POST['name'];
                        $phone = $_POST['phone'];
                        $email  = $_POST['email'];
                        $comandCode = $_POST['comand'];
    if ($conn->connect_error) {
        die('connection faild :' .$conn->connect_error);
    }else {
        $sql = "INSERT INTO clients (name, number, email, comand) VALUES ($name,$phone,$email,$comandCode)";
        mysqli_query($conn , $sql);
        echo "registration success ... !";
    }

?>
<div class="container table-con">
<table class="table table-striped table-hover">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>phone</th>
        <th>email</th>
        <th>comand</th>
    </tr>
    <tr>
        <td><?php echo "0"; ?></td>
        <td><?php echo $name; ?></td>
        <td><?php echo $phone; ?></td>
        <td><?php echo $email; ?></td>
        <td><?php echo $comandCode; ?></td>
        
    </tr>
    
</table>
</div>
</body>
</html>