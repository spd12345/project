
<?php
$host="localhost";
$user="root";
$pass="";
$db="project";
$conn=mysqli_connect($host,$user,$pass,$db);
session_start();
if(isset($_GET['id'])){
    $id=$id=mysqli_real_escape_string($conn,$_GET['id']);
        $query="select * from interns where id='$id'";
        $result=mysqli_query($conn,$query);
        
        if(mysqli_num_rows($result)>0)
        
         {
            $set= mysqli_fetch_array($result);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./includes/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./includes/node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="icon" href="./images/logo.png">
    <title>Offer Letter</title>
</head>
<style>
    body{
        height: 100%;
        margin: 5px 5px;
    }
    #top{
        display: flex;
        justify-content: space-between;
    }
        
    

</style>
<body>

<div id="top" >
    <div >
        <img src="./images/logo.png" alt="" style="width: 6rem;">
        <img src="./images/banner.png" alt="" style="width: 17rem;">
    </div>
    <div id="contact" style="width: 40vw; margin-top: -0.5rem;">
           <p>H.No. 1951, W.N.4, Khaperkheda, Saoner, Nagpur, Maharashtra, India</p>
          <p style="margin-top:-1.8vh;">Contact: (+91)08010996763</p>
           <p  style="margin-top:-1.7vh;"><a href="mailto:info@suvidhafoundationedutech.org">info@suvidhafoundationedutech.org</a> 
           <a href="http://www.suvidhafoundationedutech.org/">www.suvidhafoundationedutech.org</a></p>
    </div>
</div>
            <hr style="margin-top: 3vh;"><!---////////////----Line-------/////////////////////////-->
<div id="heading-mid" style="display: flex; justify-content: space-between;">
    <h6>Date: <?php echo $set['sys_date'];?></h5>
    <h6>Ref.No : <?php echo $set['u_id'];?></h5>
</div>
<div><h3 style="display: flex; justify-content: center; text-decoration: underline; font-size: 1rem;margin-top:-0.4rem;" >INTERNSHIP: OFFER LETTER</div>
<h6 style="font-size:1rem;">To,</h6>
<h6 style="font-size:1rem;"><?php echo $set['name'];?>, </h6>

<p style="font-size:0.9rem;">With reference to your interview, we are pleased to inform you that you have been selected as<strong> &ldquo;</strong><strong><?php echo $set['designation'];?></strong></p>
<p style="margin-top: -1.5vh;font-size:0.9rem;"><strong>Intern&rdquo;</strong><strong></strong> in our NGO - &ldquo;Suvidha Mahila Mandal&rdquo;, with the following terms and conditions.</p>


<ul style="text-align: justify; font-size: 0.85rem; margin-top: 1.2rem;">
<li>You will provide the <strong><?php echo $set['designation'];?></strong> Services <strong>and Apart from your domain, you will provide the Fundraising Service</strong> to SUVIDHA FOUNDATION and deliver the effect of the work.</li>

<li>The internship period will be from <strong><?php echo $set['dt_from'];?>, to <?php echo $set['dt_to'];?></strong>.</li>

<li>Your work base station is work from the Home and six days a week.&nbsp;</li>

<li><strong>It is an Unpaid Internship</strong>. The certificate of completion will be given only if you invest 4 hours daily on all working days. You must participate in the daily team meetings through Google Meet. Also, the letter holds no value without a completion certificate from us with a unique identification number, which can be verified online.</li>

<li>During the internship period and thereafter, you will not give out to anyone in writing or by word of mouth or otherwise particulars or details of work process, technical know-how, research carried out, security arrangements and/or matters of confidential or secret nature which you may come across during your service in this organization.</li>

<li>In case of any misconduct which causes financial loss to the NGO or hurts its reputation and goodwill of the organization, the management has the right to terminate any intern. In case of termination, the management will not be issuing certificates to the intern.</li>

<li>It is necessary for an intern to return all the organization belongings (login credentials, media created, and system) at the time of leaving the organization. A clearance and experience certificate will be given after completing the formalities. If any employee leaves the job/Internship without completing the formality, the organization will take necessary action. All the software/courses/data developed by the interns or any employee for the Suvidha Mahila Mandal are intellectual property of the organization &amp; are protected by Indian Copyright Act. All the data generated during the internship period, is the property right of organization and can be used for any purpose. In case of any piracy, strict legal action will be taken by the organization against erring persons. No information or source codes or course curriculum or business secrets or financial position or other details of organization shall be discussed among friends or relatives or our competitors. Such leakage of information is likely to cause financial loss to the organization. Hence, in such a case, the organization will be terminating the employee immediately and if required, further legal action will be taken against that intern.</li>

</ul>
<p>&nbsp;</p>

<img src="./images/sign.jpg" alt="sign" style="width: 12rem;margin-bottom: 5px; margin-top:-1.3rem;">
<div style="display: flex;justify-content: space-between;"><p style="margin-left:1.5rem;">Mrs. Shobha Motghare</p><h5 style="margin-left: 4rem;font-size:1rem;"><?php echo $set['name'];?>   (  </h5><h5  style="font-size:1rem;">)</h5>
</div>

<p style="margin-top: -2.5vh;"> Secretary, Suvidha Mahila Mandal</p>

<div style="display: flex;justify-content: center;">
    <a href="index.php" style="margin-right: 5px;" class="btn btn-danger" > Back</a>
    <a onclick="window.print()" class="btn btn-primary"> Print</a>
</div>
</body>
</html>

<?php
}
}
else{
    header('location: index.php');
}
?>