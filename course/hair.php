<!-- <?php
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
    header("location.php");
 }
}
?> -->



<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>MIRACLE HIR</title>
  <link rel="stylesheet" href="hir.css">
  <link rel="icon" href="MIRACLE/company_logo.jpg">
  <meta name="keywords" content="">
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
                             <abbr title="PAAVAI POLYTECHNIC"><h1 class="title">MIRACLE AESTHETIC</h1></abbr>
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
                         <h1 class="text">MIRACLE Hair SOLUTIONS</h1>
                         <p class="sub_title">the best <span>solution miracle</span> Hair  treatment</p>
                         <!-- <p class="sub_title">tow year experience  employee 's</p>
                         <p class="sub_title">24 HOURSE AVAILABLE / AC</p> -->
                       </div>
                       <div class="login_form">
                         <form action="" method="post" class="padg">
                              <h1 class="text">REGISTER</h1>
                              <label for="" class="mrg-left mrg-bottom">name</label>
                              <input  type="text" name="name" id="" placeholder="Enter Your Name....">
                              <label class="mrg-left mrg-bottom" for="">email</label>
                              <input  type="email" name="email" id="" placeholder="Email....">
                              <label class="mrg-left mrg-bottom" for="">Phone Number</label>
                              <input type="text" name="mobile" id="" placeholder="Enter Your Mobile....">
                              <label class="mrg-left mrg-bottom" for="" >Whatsapp number</label>
                              <input type="text" name="whtapp" id="" placeholder="Whatsapp Number....">
                              <label class="mrg-left mrg-bottom" for="" >current date</label>
                              <input type="text" name="date" id="" placeholder="day/month/year">                             
                              <button class="btn" name="submitvalue" type="submit">submit</button>
                        </form>
                       </div>
                   </div>
              </div>
                   <!--student logi content finish-->
                   <!--our catogarice of specelity-->
                   <div class="speceal">
                        <h1 class="text span">MIRACLE HIR LOSS SOLUTIONS</h1>
                    <div class="camb_banner">
                          <div class="poly_camb"><img class="img1" src="MIRACLE/hir/hir_1.jpg" alt="paavai"></div>
                          <div class="poly_camb"><img class="img1" src="MIRACLE/hir/hir_2.png" alt="paavai"></div>
                          <div class="poly_camb"><img class="img1" src="MIRACLE/hir/hair-restoration-surgery-1-1.jpg" alt="paavai"></div>
                    </div>
                    <!--secont contituon-->
                    <!-- <div class="camb_banner">
                         <div class="poly_camb"><img class="img1" src="MIRACLE/hir/istockphoto-1319557621-612x612.jpg" alt="paavai"></div>
                         <div class="poly_camb"><img class="img1" src="MIRACLE/hir/regenerative-hair.jpg" alt="paavai"></div>
                         <div class="poly_camb"><img class="img1" src="MIRACLE/hir/What-Is-Hair-Loss-1.jpg" alt="paavai"></div>
                   </div> -->
               </div>
               <div class="students_manege">
                    <div class="our_content">
                         <h1 class="text span">MIRACLE HIR HEALTH TREATMENT</h1>
                         <p class="sub_title">Hair Loss Is A Serious Condition That Affects A Person’s Looks And Self-Confidence. At Aesthetics Medispa, Pune We Work Not Only On The Hair Loss Aspect But Also On Restoring Hair Growth For Our Patients. We Provide
                               Holistic Solutions For Hair Growth Which Are Zero To Minimally Invasive Depending On Our Patients’ Needs</p>
                    </div>
                    <div class="student_img_banner">
                          <div class="poly_student">
                              <img class="img1 footer_root" src="MIRACLE/hir/hair.jpg" height="300" alt="paavai">
                          </div>
                    </div>
               </div>
               <!--footer section start-->
               <div class="share_link padg">
                    <div class="open_college">
                          <p>Copyright 2023 | Miracle Aesthetic</p>
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