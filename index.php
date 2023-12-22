<?php 
    session_start();
    if(!$_SESSION['project'])
    {
        header('location: login.php');  
    }
    if($_POST){
      session_abort();
      $host="localhost";
      $user="root";
      $pass="";
      $db="project";
     $salutation=$_POST['salutation'];
     $name=$_POST['name'];
     $designation=$_POST['designation'];
     $fromdate=$_POST['fromdate'];
     $todate=$_POST['todate'];
     $email=$_POST['email'];
     $sysdate=$_POST['sysdate'];
     $uid=$_POST['uid'];
     $conn=mysqli_connect($host,$user,$pass,$db);
     $stmt= "insert into interns( id, salutation, name, email, dt_from, dt_to, sys_date, u_id, designation) 
                   values ('null', '$salutation', '$name', '$email', '$fromdate', '$todate', '$sysdate', '$uid', '$designation')";
    if(mysqli_query($conn,$stmt))
    {
      echo "<script>alert('updated successfully');</script>";
    }
    else{
      echo "<script>alert('updated successfully ');</script>";   
      }
      
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./includes/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./includes/node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="icon" href="./images/logo.png">
  <link rel="stylesheet" href="./includes/style.css">
    <title>Admin | Dashboard</title>
</head>
<body>
    <div id="head">
        <nav>Admin | Dashboard</nav>
        <div><a href="logout.php"><i class="fa fa-power-off" ></i></a></div>
    </div>
   
    <div id="gen-button">
    <h5 id="systemDate" name="sysdate"></h5>
   <!-- Button trigger modal -->
   <i onclick="func()"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >
   Generate Offerletter
  </button></i> 
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle" >Offerletter Generation Form</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
                <form method="post">
                    <div class="form-group">
                        <label for="salutation">Salutation</label>
                        <select name="salutation" id="salutation">
                            <option value="Mr.">Mr.</option>
                            <option value="Miss.">Miss.</option>
                            <option value="Mrs.">Mrs.</option>
                          </select>
                    </div>
                    <div class="form-group">
                      <label for="name" >Name</label>
                      <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="forpost">For Post</label>
                        <input type="text" class="form-control" name="designation" id="designation" placeholder="Enter Designation">
                      </div>
                      <div class="form-group">
                        <label for="from-date">from Date</label>
                        <input type="date" class="form-control" name="fromdate" id="from-date">
                      </div>
                      <div class="form-group">
                        <label for="to-date">To Date</label>
                        <input type="date" class="form-control" name="todate" id="to-date">
                      </div>
                      <div class="form-group">
                        <label for="to-date">Letter issue date</label>
                        <input class="form-control" type="date" name="sysdate" id="systemDate" ></input>
                      </div>
                      <div class="form-group">
                        <label for="u-ud">Id</label>
                        <input class="form-control" name="uid"  id="generateId" readonly><nav id="generateId"></nav></input>
                      </div>
                      <div class="form-group">
                        <label for="InputEmail">Email address</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                   <button type="submit" class="btn btn-primary" style="margin-top: 5px;">Submit</button>
                  </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
        </div>
      </div>
    </div>
  </div>
 </div>

 <div id="table">
 <table class="table"> 
    <tr>
      <th>Sl.No</th>
      <th>Name</th>
      <th>Designation</th>
      <th>Id</th>
      <th>From</th>
      <th>To</th>
      <th>Date of Issue</th>
      <th>Generate</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  <tbody>
    <tr>
      <?php
      
      $host="localhost";
      $user="root";
      $pass="";
      $db="project";
      $conn=mysqli_connect($host,$user,$pass,$db);
      $query="select * from interns";
      $result= mysqli_query($conn,$query);
      if(mysqli_num_rows($result)>0){
       while($row = mysqli_fetch_assoc($result))
       {
      ?>
          <td><?php echo $row['id'];?></td>
          <td><?php echo $row['name'];?></td>
          <td><?php echo $row['designation'];?></td>
          <td><?php echo $row['u_id'];?></td>
          <td><?php echo $row['dt_from'];?></td>
          <td><?php echo $row['dt_to'];?></td>
          <td><?php echo $row['sys_date'];?></td>
          <? $val=$row['id'];?>
          <td><a href="offer_letter.php?id=<?=$row['id'];?>" class="btn btn-success">Generate</a></td>
          <td><a href="update.php?id=<?=$row['id'];?>" class="btn btn-primary">Edit</a></td>
          <td>
            <form action="opp.php" method="POST">
          <button type="submit" class="btn btn-danger" name="delete" value="<?=$row['id'];?>" >Delete</button>
          </form></td>
         

     </tr>      
          <?php
        }}
        else{
          echo "<h4> no such data present</h4>";
        }
      ?>
      
      
   
  </tbody>
 
 </table>
 </div>

</body>
<script src="./includes/script.js"></script>
</html>