<?php
require ('dbCon.php');
?>
<form method="POST" action="">
    <div class="modal-body">
        <div class="form-con">
        <div class="mb-3">
                    <label for="Name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="Name" name="name">
                </div>
                <div class="mb-3">
                    <label for="Phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="Phone" name="phone">
                </div>
                <div class="mb-3">
                    <label for="Email" class="form-label">Email address</label>
                    <input type="emai" class="form-control" id="Email" name="email">
                </div>
                <div class="mb-3">
                    <label for="Comand" class="form-label">Comand Code</label>
                    <input type="text" class="form-control" id="Comand" name="comand">
                </div>

        </div>
    </div>
    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary">Save comand</button>
    </div>
    
    </form>

<?php
        // send data to database
                    if(isset($_POST['submit'])){
                        $name   = $_POST['name'];
                        $phone = $_POST['phone'];
                        $email  = $_POST['email'];
                        $comand = $_POST['comand'];
                        $query = "INSERT INTO client(name, number, email, comand)value('$name', '$phone', '$email', '$comand')";
                        mysqli_query($conn , $query);
                        header("location: data.php");
                    }

                ?>