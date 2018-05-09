<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP Basics by <?php echo $display_name ='Paul'; ?></title>
    <link href="css/style.css" rel="stylesheet" />
  </head>
  <body>
    <div id="wrap">
      <section class="sidebar text-center">
        <div class="avatar">
          <img src="img/logo.png" alt="Alt for Image">
        </div>
        <h1><?php echo $display_name; ?> </h1>
        <p>Contact:</br>
          <a href="mailto">EMAIL</a></p>
          <hr />
          <ul class="social">
            <li><a href=""><span class="icon twitter"></span></a></li>
          </ul>
          <hr />
          <p>Today: D, d M Y</p>
        </section>
        <section class="main">
          <h1>My first PHP Image </h1>

          <h2> Unit Conversion</h2>

          <hr />

          <h3>Daily Exercise</h3>
        </section>
</div>
<section class="footer text-center">
  &copy; <?php
  echo date('Y');
  echo " " .$display_name. ". ";
  //outputs e.g. 'Last modified: March 28 2018.'
  echo "last Modified: " . date ("F d Y H:i:s.", getlastmod());
  ?>
</section>
  </body>
</html>
