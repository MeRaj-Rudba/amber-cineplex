<?php
  session_start();

  if(!(isset($_SESSION['userName']))) {
    header("Location: login.php");
  }



?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Josefin+Slab&display=swap" rel="stylesheet">
    <title>Profile |<?php  echo "  " ."  " . $_SESSION['userName'];?> </title>
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


    </main>
    <footer>
      <label class="footer">&copy Amber Cineplex</label>
    </footer>

  </body>
</html>
