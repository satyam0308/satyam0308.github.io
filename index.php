<?php
$con=mysqli_connect('localhost','root');
if(!$con)
   echo "connection failed";
  mysqli_select_db($con,'blogging');
  $q="select * from blogs";
  $result=mysqli_query($con,$q);
  $num=mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Blogging Website</title>
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Laila" rel="stylesheet">
  </head>
  <body>
    <div class="full-container">
        <div class="menu">

        </div>
        <div class="front-banner">
             <div class="front-banner-elements"  id="linux-lovers">
                <h2>Blogs for linux lovers</h2>
             </div>
             <div class="front-banner-elements" id="read-more">
                <h4><a href="">Read More...</a></h4>
             </div>
       </div>
       <div class="content-container">
          <div class="" id="recent-blogs">
            <h4>Recent Blogs</h4>
          </div>
          <?php for ($i=1;$i<=$num;$i++)
                 { $row=mysqli_fetch_array($result);
            ?>
            <div class="blog-box">
              <h2 id="heading2"><?php echo ucwords($row['heading']) ?></h2>
              <p><?php echo $row['content'] ?></p>
            </div>
          <?php } ?>
       </div>

    </div>
    <div class="footer">
      <p>this is footer</p>
    </div>

  </body>
</html>
