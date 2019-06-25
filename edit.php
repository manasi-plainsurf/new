  <?php

$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "project";
$conn = new mysqli($servername, $username, $password, $dbname);


if(isset($_POST['update'])){
$id=$_GET['id'];
$Projectname = $_POST['Projectname'];
$TeamName = $_POST['TeamName'];
$TeamSize = $_POST['TeamSize'];
$StartDate = $_POST['StartDate'];
$EndDate = $_POST['EndDate'];
$Status = $_POST['Status'];

$query = "UPDATE  info SET id=$id, Projectname='$Projectname',TeamName='$TeamName',TeamSize='$TeamSize',StartDate='$StartDate',EndDate='$EndDate',Status='$Status' WHERE id=$id ";
if (mysqli_query($conn, $query)) {
    header("location:prolist.php");
} 

}

?>




<!DOCTYPE html>
<form action="" method="POST">

<html>
    <body>
    <div class="row">

        <div class="fields-grid col-lg-6">
            <div class="styled-input ">
                <label> Project Name</label>
                <input type="text" name="Projectname"class="form-control" > 

            </div> 


            <div class="styled-input">
                <label>Team Name</label>
                <input type="text" name="TeamName" >

                <span></span>
            </div>
        </div>

        <div class="fields-grid col-lg-6">
            <label>Team Size</label>
            <input type="text" name="TeamSize" > 

        </div> 

        <div class="styled-input">
            <label>Start Date</label>
            <input type="date" name="StartDate" >

            <span></span>
        </div>
        
        <div class="styled-input agile-styled-input-top">
            <label>EndDate</label>
            <input type="date" name="EndDate" > 

        </div> 
        
         <div class="styled-input">
            <label>Status</label>
            <input type="text" name="Status" >

            <span></span>
        </div>

    </div>
    
    <div class="row">

    <div class="styled-input">
        <button class="btn-success btn" type="submit" name="update">Update</button>
    </div>
    </div>
    </body>
</form>

    </html>
