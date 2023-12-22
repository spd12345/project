<?php
session_start();

$host="localhost";
$user="root";
$pass="";
$db="project";
$conn=mysqli_connect($host,$user,$pass,$db);
////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////======from:- index.php (delete record)====//////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////

if(isset($_POST['delete'])){
    $id=mysqli_real_escape_string($conn,$_POST['delete']);
    $stmt="delete from interns where id='$id' ";
    $run=mysqli_query($conn,$stmt);
    if($run)
    {
     header('location: index.php');  
     exit(0);
    }
    else{
     header('location: index.php');  
     exit(0);  
    }
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////==from:- update.php (update record) redirect index.php=== /////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////



if(isset($_POST['update']))
{
    $id=mysqli_real_escape_string($conn,$_POST['id']);
    $salutation=mysqli_real_escape_string($conn,$_POST['salutation']);
    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $designation=mysqli_real_escape_string($conn,$_POST['designation']);
    $fromdate=mysqli_real_escape_string($conn,$_POST['fromdate']);
    $todate=mysqli_real_escape_string($conn,$_POST['todate']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $sysdate=mysqli_real_escape_string($conn,$_POST['sysdate']);
    $uid=mysqli_real_escape_string($conn,$_POST['uid']);
    $stmt= "update interns set salutation='$salutation', name='$name',  email='$email', designation='$designation', dt_from='$fromdate', 
            dt_to='$todate', sys_date='$sysdate', u_id='$uid' where id='$id' ";

    $run=mysqli_query($conn,$stmt);
   if($run)
   {
    $_SESSION['message']='student updated successfully!!!';
    header('location: index.php');  
    exit(0);
   }
   else{
    $_SESSION['message']='student not updated successfully!!!';
    header('location: index.php');  
    exit(0);  
   }

}

?>