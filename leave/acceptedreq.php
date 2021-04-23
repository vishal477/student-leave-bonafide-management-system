<!--We can see accepted requests here -->

<?php
session_start();
if(!isset($_SESSION['key']))
{
    echo "<script type='text/javascript'>
        alert('Need Login First')
    </script>";
    echo "<script type='text/javascript'>
        location.href='bonafide_request.php'
    </script>";
}
 ?>


            
<!DOCTYPE html>
<html lang="en">

<head>
    <style type="text/css">
        table{
            border-collapse: collapse;
            width:100%;
            font-family: monospace;
            color: indigo;
            font-size: 20px;
            text-align: left;
            background-color: white;
            
        }
        h1{
            text-align: center;
        }
        a{
           
        }   
        
        .clr{
            color: blue;
            background-color:pink;
            font-size: 20px;
        }
        body{
            background-color: white;
            
        }
    </style>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Leave Application</title>
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <link href="css/main.css" rel="stylesheet" media="all">
</head>
<body> 
    <div>
    <h1 style="color: black">Bonafide Requests</h1>
    
<a href="studentlogout.php" style="color: black">LOGOUT</a>
</div>
    <form method="POST" action="viewbonafide.php">
    <table border="2px">
        <tr>
           
            <td class="clr">Firstname</td>
            <td class="clr">Lastname</td>
            <td class="clr">Branch</td>
            <td class="clr">Class</td>
            <td class="clr">Roll No</td>
            <td class="clr">Prn No</td>
            <td  class="clr">View</td>
            </tr>
        
        
    <?php

   
    include "config.php";
    $sql="SELECT * from bonafideform where status='Approved'";


    $result=$conn->query($sql);

    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {

                    

            ?>


            <tr>
            
            <td><?php echo $row["firstname"]; ?></td>
            <td><?php echo $row["lastname"]; ?></td>
            <td><?php echo $row["branch"]; ?></td>
            <td><?php echo $row["class"]; ?></td>
            <td><?php echo $row["rollno"]; ?></td>
            <td><?php echo $row["prn"]; ?></td>
            <td><a style="margin-left: 0px" href="viewbonafide.php?prn=<?php echo $row['prn'];  ?>" >view</a></td>

            
            
            
    </tr>
            

    
 



   <?php
}
}
?>

</table>
<?php




?>

</form>

  


</body>
</html>
