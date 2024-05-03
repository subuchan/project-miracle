<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIRACLE</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="miracle">
          <h2><i style="color: #fff;">MIRACLE ;)</i> <span style="color: #fff;"></span></h2>
    </div>
    <div class="container">
        <form action="" method="post">
            <h3>LOGIN</h3>
            <label for="">enter your email</label>
            <input type="email" required placeholder="Email OR Phone Number">
            <label for="">enter your password</label>
            <input type="password" required placeholder="Password">
            <input type="submit" value="Submit" >
        </form>
    </div>
    <script src="js/jquery-3.6.0.min.js"></script>
      <script>
        $(function(){
            $('input').keyup(function(){
                $(".miracle").fadeIn("slow").slideUp("slow").end();
                // var cls = $(this).val();
                // $("span").text(cls);
            })
        })
      </script>
</body>
</html>