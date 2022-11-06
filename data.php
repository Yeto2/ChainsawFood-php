<?php
require ('dbCon.php');
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
    <form class="back" action="landing.php">
            <button class="btn btn-primary"><--</button>
</form>
<div class="container table-con">
<table class="table table-striped table-hover">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>phone</th>
        <th>email</th>
        <th>comand</th>
    </tr>
    
        <?php
            $sql = "SELECT * FROM client ;";
            $result = mysqli_query($conn , $sql);
            $resultCheck = mysqli_num_rows($result);
            if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>". $row['id'] ."</td>";
                    echo "<td>". $row['name'] ."</td>";
                    echo "<td>". $row['number'] ."</td>";
                    echo "<td>". $row['email'] ."</td>";
                    echo "<td>". $row['comand'] ."</td>";
                    echo "<tr>";
                    
                }
            }
        ?>
    
</table>
</div>
</body>
</html>