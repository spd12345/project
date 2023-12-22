
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./includes/edit.css">
    <link rel="icon" href="./images/logo.png">
    <link rel="stylesheet" href="./includes/update.css">
    <title>Update Information</title>
</head>
<body>

<!-- Modal -->
<div id="simpleModal" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" style="margin: 0;">Update Form</h5>
            <span class="close-btn" onclick="closeModal()">&times;</span>
        </div>
        <?php
               session_start();
               $host="localhost";
               $user="root";
               $pass="";
               $db="project";
               $conn=mysqli_connect($host,$user,$pass,$db);
               if(isset($_GET['id'])){
                $id=mysqli_real_escape_string($conn,$_GET['id']) ;
                $query="select * from interns where id='$id'";
                $result=mysqli_query($conn,$query);
                
                if(mysqli_num_rows($result)>0)
                
                {
                    $fetch= mysqli_fetch_array($result);
                    
                    ?>

                    <form action="code.php?=" method="POST">
                        <input type="hidden" name="id" value="<?=$fetch['id']; ?>">
         <div class="modal-body">
            <div class="form-group">
                <label for="salutation">Salutation</label>
                <select name="salutation" id="salutation">
                    <option value="Mr.">Mr.</option>
                    <option value="Miss.">Miss.</option>
                    <option value="Mrs.">Mrs.</option>
                </select>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" value="<?=$fetch['name']; ?>">
            </div>
            <div class="form-group">
                <label for="designation">Post</label>
                <input type="text" class="form-control" name="designation" id="designation"  value="<?=$fetch['designation']; ?>">
            </div>
            <div class="form-group">
                <label for="from-date">from Date</label>
                <input type="date" class="form-control" name="fromdate" id="from-date" value="<?=$fetch['dt_from']; ?>">
            </div>
            <div class="form-group">
                <label for="to-date">To Date</label>
                <input type="date" class="form-control" name="todate" id="to-date" value="<?=$fetch['dt_to']; ?>">
            </div>
            <div class="form-group">
                <label for="systemDate">Letter issue date</label>
                <input class="form-control" type="date" name="sysdate" id="systemDate" value="<?=$fetch['sys_date']; ?>">
            </div>
            <div class="form-group">
                <label for="generateId">Id</label>
                <input class="form-control" name="uid"  id="generateId" value="<?=$fetch['u_id']; ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?=$fetch['email']; ?>">
            </div>
            <button type="submit" class="btn btn-primary" style="margin-top: 5px;" name="update" >Update</button>
        </div>
    </form>
                    <?php
                }
                else{
                    echo "<h4> no such data present</h4>";
                }
               }
               else{
                header('location: index.php');
               }
               ?>
    </div>
</div>

<script src="./includes/script.js">
    
</script>

</body>
</html>
