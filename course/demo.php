<!-- <?php
 $data = mysqli_connect("localhost","root","","");

 if(!$data){
    die("connect_error".mysqli_connect_error());
 }

 $qry = "SELECT id,name,email,mobile,whatsapp,date FROM miracle";

?> -->


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>MIRACLE</title>
   <link rel="stylesheet" href="demo.css">
   <style>
      table{
         width:65%;
         margin:2% auto;
         text-align:center;
         border-collapse:collapse;
      }
      th,td{
         border-bottom:1px solid #000;
         padding:10px 5px;
         font-size:19px;
      }
      table tr:hover{
         color:#fff;
          background:#ffa600;
      }
   </style>
</head>
<body>
   <div class="container">
       <header>
          <div class="logo">
            <img src="MIRACLE/company_logo-removebg-preview.png" height="90" alt="MIRACLE">
          </div>
          <ul>
            <button id="log_out" name="ss" type="button"><li><a href="sess.php">log out</a></li></button>
          </ul>
       </header>
   </div>
</body>
</html>

<!-- <?php
 $con = mysqli_query($data,$qry);
  
 $row = mysqli_num_rows($con);
 //print_r($row);

 if($row > 0){

   echo "<table >";
   echo "<thead>";
   echo "<tr>";
   echo "<th>ID</th>";
   echo "<th>NAME</th>";
   echo "<th>EMAIL</th>";
   echo "<th>MOBILE</th>";
   echo "<th>WHATSAPP NUMBER</th>";
   echo "<th>DATE</th>";
   echo "</tr>";
   echo "</thead>";
   
   while($rr = mysqli_fetch_assoc($con)){
      //$id = $rr["id"];
     echo "<tr>";
      echo "<td>".$rr["id"]."</td>";
      echo "<td>".$rr["name"]."</td>";
      echo "<td>".$rr["email"]."</td>";
      echo "<td>".$rr["mobile"]."</td>";
      echo "<td>".$rr["whatsapp"]."</td>";
      echo "<td>".$rr["date"]."</td>";
      echo "</tr>";
   }
   echo "</table>";
 }
?> -->