<?php
 $data = mysqli_connect("localhost","root","","");

 if(!$data){
    die("connect_error".mysqli_connect_error());
 }
   
 if(isset($_POST["submitvalue"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $what = $_POST["whtapp"];
    $date = $_POST["date"];

 $qry = "INSERT INTO miracle(name,email,mobile,whatsapp,date) value('$name','$email','$mobile','$what','$date')";
 $cont = mysqli_query($data,$qry);
 if($cont){
   // redirct("..//index.php");
   header("location..//index.php");
 }
 else{
    //header("..//index.php");
    header("location:slimming.php");
 }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>MIRACLE SKIN</title>
  <link rel="stylesheet" href="skin.css">
  <link rel="icon" href="MIRACLE/company_logo.jpg">
  <link rel="stylesheet" href="..//fontawesome/css/all.css">
  <link rel="stylesheet" href="..//fontawesome/css/fontawesome.min.css">
</head>
<body>
   <div class="polytechnic">
        <section>
              <div class="top_content">
                   <!-- <div class="registrat">
                        <div class="paavai_img">
                             <div class="logoo logo">
                                   <img class="img" src="MIRACLE/company_logo-removebg-preview.png" alt="paavai">
                             </div>
                             <abbr title="PAAVAI POLYTECHNIC"><h1 class="title"><span id="mihp">MIRACLE</span> AESTHETIC</h1></abbr>
                        </div>
                   </div> -->
                   <header>
                    <div class="left-img">
                          <abbr title="MIRACLE">
                         <img src="MIRACLE/company_logo-removebg-preview.png" alt="" height="70"></abbr>
                    </div>
                    <div class="right-minu">
                           <div class="minu_list">
                                <ul>
                                      <li><a href="..//index.php">home</a></li>
                                      <li><a href="slimming.php">slimming solution</a></li>
                                      <li><a href="skin.php">skin solution</a></li>
                                      <li><a href="hair.php">hair solution</a></li>
                                      <li><a href="login.php">login</a></li>
                                </ul>
                           </div>
                           <div class="icon_hide">
                                <i class="fa fa-bars"></i>
                          </div>
                    </div>
              </header>
                   <!--top_content finish-->
                   <div class="student_login">
                       <div class="banner">
                           <h1 class="text">MIRACLE SKIN SOLUTIONS</h1>
                           <p class="sub_title spsu">the best <span>solution miracle</span> skin  treatment</p>
                           <!-- <p class="sub_title">tow year experience  employee 's</p>
                           <p class="sub_title">24 HOURSE AVAILABLE / AC</p> -->
                       </div>
                       <div class="login_form">
                         <form action="" method="post" class="padg">
                              <h1 class="text">Register</h1>
                              <label for="" class="mrg-left mrg-bottom">name</label>
                              <input  type="text" name="name" id="" required placeholder="Enter Your Name....">
                              <label class="mrg-left mrg-bottom" for="">email</label>
                              <input  type="email" required name="email" id="" placeholder="Email....">
                              <label class="mrg-left mrg-bottom" for="">Phone Number</label>
                              <input type="text" required name="mobile" id="" placeholder="Enter Your Mobile....">
                              <label class="mrg-left mrg-bottom" for="" >Whatsapp number</label>
                              <input type="text" required name="whtapp" id="" placeholder="Whatsapp Number....">
                              <label class="mrg-left mrg-bottom" for="" >current date</label>
                              <input type="text" required name="date" id="" placeholder="day/month/year">                             
                              <button class="btn" name="submitvalue" type="submit">submit</button>
                        </form>
                       </div>
                   </div>
                   <!--student logi content finish-->
                   <!--our catogarice of specelity-->
                   <div class="speceal" id="center">
                        <h1 style="padding:30px 0;" class="text span pdd">MIRACLE CATEGORIZED</h1>
                    <div class="camb_banner">
                          <div class="poly_camb const"><img class="img1 psu" src="MIRACLE/skin/skin_1.jpg" alt="miracle"></div>
                          <div class="poly_camb"><img class="img1 psu" src="MIRACLE/skin/skin_2.jpg" alt="miracle"></div>
                          <div class="poly_camb"><img class="img1 psu" src="MIRACLE/skin/skin_3.jpeg" alt="miracle"></div>
                    </div>
                    <!--secont contituon-->
                    <!-- <div class="camb_banner" id="center"> 
                         <div class="poly_camb"><img class="img1 psu" src="MIRACLE/skin/skin_4.jpg" alt="miracle"></div>
                         <div class="poly_camb"><img class="img1 psu" src="MIRACLE/skin/skin_5.jpg" alt="miracle"></div>
                         <div class="poly_camb"><img class="img1 psu" src="MIRACLE/skin/skin.jpg" alt="miracle"></div>
                   </div> -->
               </div>
               <div class="students_manege">
                    <div class="our_content">
                         <h1 class="text span">MIRACLE SKIN HEALTH TREATMENT</h1>
                         <p class="sub_title" id="subt">As A Child, Your Skin Frequently Renews Itself. However,
                               As Your Teenage Years Begin, The Frequency Of Renewal Goes Down. Generally, Teenage Skin
                              Is Tougher And More Resilient Than That Of Children. However, At Teenage,
                               It Is Still Elastic And Is Able To Regenerate Quickly.
                               The Facial Skin Of Teenagers Reserves Plenty Of Collagen (The Most Abundant Protein In Your Body). But As 
                                You Enter Adulthood, The Production Of Collagen Decreases. This Makes Your Skin Prone To Sagging, Fine Lines, And Wrinkles.</p>
                    </div>
                    <div class="student_img_banner">
                          <div class="poly_student">
                              <img class="img1 bot_bot" src="MIRACLE/skin/skin_footer.jpg" alt="paavai">
                          </div>
                    </div>
               </div>
               <!--footer section start-->
               <div class="share_link padg">
                    <div class="open_college">
                          <p>Copyright @2023 |Miracle Aesthetic</p>
                    </div>
                    <div class="footer_icon">
                         <a href="https://www.facebook.com/profile.php?id=100088884892601"> <i class="fab fa-facebook padg"></i></a>
                         <a href="https://www.instagram.com/miracleaestheticstudio/"><i class="fab fa-instagram padg"></i></a>
                        <a href="https://twitter.com/miracleaestheti"> <i class="fab fa-twitter padg"></i></a>
                         <a href="https://www.linkedin.com/company/89942774/admin/"><i class="fab fa-linkedin padg"></i></a>
                      </div>
               </div>
          </div>
        </section>
   </div>
  <script src="js/jquery-3.6.0.min.js"></script>
   <script>
     $(document).ready(function(){
          $(".icon_hide").click(function(){
             $("header .minu_list").toggle("slow");
          });
     });
</script>  
</body>
</html>