<?php
session_start();

?>



<!DOCTYPE html>
<html>
<title>Night-out application</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
<link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
<link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
<link href="css/main.css" rel="stylesheet" media="all">
<style>
body, html {
  height: 100%;
  font-family: "Inconsolata", sans-serif;
}

.bgimg {
  opacity: 0.5;
  filter: alpha(opacity=50);
  background-position: center;
  background-size: cover;
  background-image: url("desktop.jpg");
  height: 98%;
  width:100%;
}

.menu {
  display: none;
}

.table1{
        opacity: 1;
}


.dropbtn {
  
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 160px;
  box-shadow: 0px 8px 10px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}


</style>
<body>

<!-- Links (sit on top) -->


    
    <?php
   
    
            if (isset($_GET['prn'])) {
                $prn = $_GET["prn"];
               # $_SESSION['prn'] = $prn;
            }
            
    include "config.php";
    #$prn = $_SESSION['prn'] ;
  

    $sql="SELECT * from nightoutform where prn ='$prn' ";
    $result=$conn->query($sql);

    if($result->num_rows > 0)
    {
        while($row=$result->fetch_assoc())
        {


            ?>


  

    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <br>
                    <h2 class="title">Night-out application</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="firstname" value="<?php echo $row['firstname'] ?> " readonly="">  

                                            <label class="label--desc">first name</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="lastname" value="<?php echo $row['lastname'] ?>" readonly="">
                                            <label class="label--desc" >last name</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-row m-b-55">
                            <div class="name" >PRN Number</div>
                            <div class="value">
                                <div class="row row-refine">
                                    
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" style="width: 496px";
                                             type="text"
                                          value="<?php echo $row['prn'] ?>"
                                           name="prn" 
                                            readonly="">
                                            <label class="label--desc"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                
                                <div class="form-row">
                            <div class="name" >Address</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text"
                                    value="<?php echo $row['address'] ?> " name="address" readonly="">
                                </div>
                            </div>
                        </div>

                        
                            <div class="form-row m-b-55">
                            <div class="name" >Student number</div>
                            <div class="value">
                                <div class="row row-refine">
                                    
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" style="width: 496px";
                                             type="text"
                                            value="<?php echo $row['number'] ?> " name="number" 
                                            readonly="">
                                            <label class="label--desc"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name" >Parent number</div>
                            <div class="value">
                                <div class="row row-refine">
                                    
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" style="width: 496px";
                                             type="text"
                                            value="<?php echo $row['pnumber'] ?> " name="pnumber" 
                                            readonly="">
                                            <label class="label--desc"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name" >Room Number</div>
                            <div class="value">
                                <div class="row row-refine">
                                    
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" style="width: 496px";
                                             type="text"
                                            value="<?php echo $row['rmno'] ?> " name="rmno" 
                                            readonly="">
                                            <label class="label--desc"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row m-b-55">
                            <div class="name" >Number of Night's</div>
                            <div class="value">
                                <div class="row row-refine">
                                    
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" style="width: 496px";
                                             type="text"
                                          value="<?php echo $row['nights'] ?>" name="nights" 
                                            readonly="">
                                            <label class="label--desc"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                       <div class="form-row m-b-55">
                            <div class="name">Date</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5"  name="datefrom" required="" value="<?php echo $row['datefrom'] ?> " >
                                            <label class="label--desc">From</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5"  name="dateto" required="" value="<?php echo $row['dateto'] ?> ">
                                            <label class="label--desc" >To</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         

                        <div class="form-row">
                            <div class="name" >Reason</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text"
                                    value="<?php echo $row['reason'] ?> " name="reason" readonly="">
                                </div>
                            </div>
                        </div>


                        
                        <div>
                            <button class="btn btn--radius-2 btn--red" style="width: 300px;" type="submit" name="accept" value='submit'>Accept</button>  
                            <button class="btn btn--radius-2 btn--red" style="width: 300px;" type="submit" name="deny" value='submit'>Deny</button>  

                           </form>
                </div>
            </div>
        </div>
    </div>


            <?php
        }
    
    }
    else
    {
        

    }
    ?>

        
</body>
</html>
    



<?php
 require_once('config.php');



if(isset($_POST['accept']))
{
$firstname =$_POST['firstname'];
$lastname =$_POST['lastname'];
$prn=$_POST['prn'];
$address =$_POST['address'];
$number =$_POST['number'];
$pnumber =$_POST['pnumber'];
$rmno =$_POST['rmno'];
$nights =$_POST['nights'];
$datefrom =$_POST['datefrom'];
$dateto =$_POST['dateto'];
$reason =$_POST['reason'];
$status='Accepted';

$sql="INSERT INTO accepted_nightout (`firstname`,`lastname`,`prn`,`address`,`number`,`pnumber`,`rmno`,`nights`,`datefrom`,`dateto`,`reason`,`status`)
  VALUES ('$firstname','$lastname','$prn','$address','$number','$pnumber','$rmno','$nights','$datefrom','$dateto','$reason','$status')";
 
 
  if ($conn->query($sql) === TRUE){

    echo '<script language="javascript">';
        echo 'alert("Your request is accepted.")
         location.href="nightout_request.php"';
        echo '</script>';
    
  }
  else
  {
    echo '<script language="javascript">';
        echo 'alert("error")
         location.href="nightout_request.php"';
        echo '</script>';
   
   
  }
}

$sql1="delete from nightoutform where prn='$prn'";
$query_run = mysqli_query($conn,$sql1);
?>



<?php
 require_once('config.php');



if(isset($_POST['deny']))
{
$firstname =$_POST['firstname'];
$lastname =$_POST['lastname'];
$prn =$_POST['prn'];
$address =$_POST['address'];
$number =$_POST['number'];
$pnumber =$_POST['pnumber'];
$rmno =$_POST['rmno'];
$nights =$_POST['nights'];
$datefrom =$_POST['datefrom'];
$dateto =$_POST['dateto'];
$reason =$_POST['reason'];
$status='Deny';

$sql="INSERT INTO deny_nightout (`firstname`,`lastname`,`prn`,`address`,`number`,`pnumber`,`rmno`,`nights`,`datefrom`,`dateto`,`reason`,`status`)
  VALUES ('$firstname','$lastname','$prn','$address','$number','$pnumber','$rmno','$nights','$datefrom','$dateto','$reason','$status')";
 
  if ($conn->query($sql) === TRUE){

    echo '<script language="javascript">';
        echo 'alert("request is deny.")
         location.href="nightout_request.php"';
        echo '</script>';
    
  }
  else
  {
    echo '<script language="javascript">';
        echo 'alert("error")
         location.href="nightout_request.php"';
        echo '</script>';
   
   
  }
}

$sql1="delete from nightoutform where prn='$prn'";
$query_run = mysqli_query($conn,$sql1);
$conn->close();

?>




