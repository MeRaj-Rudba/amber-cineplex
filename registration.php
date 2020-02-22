<?php
  $reqUnameErr="";


?>



















<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Josefin+Slab&display=swap" rel="stylesheet">
    <title>Sign Up</title>
  </head>
  <body>
    <header>
      <div class="container1">
        <img src="images/logo4.png" alt="logo" class="logo">

        <nav>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="schedule.php">Schedule</a></li>
            <li><a href="upcoming.php">Upcoming</a></li>
            <li><a href="booking.php">Booking</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </nav>
      </div>

    </header>
    <main>
      <div align="center" class="shadowBox">
        <form class="regiFrom" action="index.html" method="post">
          <table>
            <tr>
              <td colspan="2">
                <h2>Welcome to</h2>
                <h2><span class="highlighter">Amber Cineplex</span> </h2>
              </td>
            </tr>
            <!--NAME-->
            <tr>
              <td colspan="2">
                <input class="inputFeild" type="text" name="rgName" placeholder="Your Name">
              </td>
            </tr>
            <tr>
                    <td>
                      <div class="error">
                        <label><?php echo $reqUnameErr; ?></label>
                      </div>
                    </td>
            </tr>
          <!--DOB-->
            <tr>
              <td colspan="2">
                <input class="inputFeild" type="date" name="rgDOB" placeholder="Your Birthday">
              </td>
            </tr>
            <tr>
                    <td>
                      <div class="error">
                        <label><?php echo $reqUnameErr; ?></label>
                      </div>
                    </td>
            </tr>

          <!--PASSWORD-->

            <tr>
              <td colspan="2">
                <input  class="inputFeild" type="password" name="rgPass" placeholder="Your Password">
              </td>
            </tr>
            <tr>
                    <td>
                      <div class="error">
                        <label><?php echo $reqUnameErr; ?></label>
                      </div>
                    </td>
            </tr>

          <!--CONFIRM PASSWORD-->
            <tr>
              <td colspan="2">
                <input  class="inputFeild" type="password" name="rgPassConfirm" placeholder="Confirm Password">
              </td>
            </tr>
            <tr>
                    <td>
                      <div class="error">
                        <label><?php echo $reqUnameErr; ?></label>
                      </div>
                    </td>
            </tr>

          <!--EMAIL-->
            <tr>
              <td colspan="2">
                <input class="inputFeild" type="email" name="rgEmail" placeholder="Your Email">
              </td>
            </tr>
            <tr>
                    <td>
                      <div class="error">
                        <label><?php echo $reqUnameErr; ?></label>
                      </div>
                    </td>
            </tr>

          <!--PHONE-->
            <tr>
              <td colspan="2">
                <input  class="inputFeild" type="text" name="rgPhone" placeholder="Your Phone Number">
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
                      <label class="remember">I agree to the tearms and conditions.
                        <input type="checkbox" >
                        <span class="checkmark"></span>
                      </label>
                    </td>
            </tr>
            <tr class="row">
                    <td  align="left">
                      <button type="reset" name="logInButton">SIGN UP</button>
                    </td>
                    <td  align="right">
                      <button type="submit" name="logInButton">RESET</button>
                    </td>
            </tr>
          </table>
        </form>
      </div>
    </main>
    <footer>
      <label class="footer">&copy Amber Cineplex</label>
    </footer>

  </body>
</html>
