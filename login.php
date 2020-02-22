<?php
  session_start();
  $reqUname = $reqPwd = "";
  $reqUnameErr = $reqPwdErr = "";

  $userNameDB = "Rudba";
  $passDB = "1234";

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST['u_name'])){
      $reqUnameErr = "Username cannot be empty!";
    }
    else{
      $reqUname = $_POST['u_name'];
    }

    if(empty($_POST['pwd'])){
      $reqPwdErr = "Password cannot be empty";
    }
    else{
      $reqPwd = $_POST['pwd'];
    }

    if($reqUname != $userNameDB){
      $reqUnameErr = "Invaild Username";
    }
    else{
      if($reqPwd != $passDB){
        $reqPwdErr = "Invalid Password";
      }
      else{
        $_SESSION['userName'] = $reqUname;
        header("Location: profile.php");
      }
    }


  }

?>







 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="style.css">
     <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Josefin+Slab&display=swap" rel="stylesheet">
     <title>Log In</title>
   </head>
   <body>
     <div class="whole">

       <div class="login">
          <div class="topHalf">

          </div>
          <div class="botHalf">
            <form class="loginForm" action="login.php" method="post">
              <div align="center" class="loginContainer">
                <table >

                  <tr class="row">
                    <td colspan="2" align="center">
                      <h2 class="logInTitle">Log In</h2>
                    </td>
                  </tr>
                  <tr class="row">
                    <td colspan="2" align="left">
                      <input class="inputFeild" type="text" name="u_name" value="<?php echo $reqUname; ?>" placeholder="Username"><br>

                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="error">
                        <label><?php echo $reqUnameErr; ?></label>
                      </div>
                    </td>
                  </tr>
                  <tr class="row">
                    <td colspan="2" align="left">
                      <input class="inputFeild" type="password" name="pwd" value=""placeholder="Password">

                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="error" >
                        <label ><?php echo $reqPwdErr; ?></label>
                      </div>
                    </td>
                  </tr>
                  <tr class="row">
                    <td colspan="2" align="left">
                      <label class="remember">Remember Me
                        <input type="checkbox" >
                        <span class="checkmark"></span>
                      </label>
                    </td>
                  </tr>
                  <tr class="row">
                    <td colspan="2" align="left">
                      <button type="submit" name="logInButton">LOG IN</button>
                    </td>
                  </tr>
                  <tr class="row">
                    <td  align="left">
                      <label class="signUpText"for="">Don't have an account?</label>
                    </td>
                    <td  align="left">
                      <button type="submit" formaction="registration.php" name="signUpBtn">SIGN UP</button>
                    </td>
                  </tr>
                </table>
              </div>
            </form>
          </div>
       </div>
     </div>

   </body>
 </html>
