<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Welcome! Colombo Municipal Council</title>
<link rel="stylesheet" href="css/styles.css" type="text/css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=348829578908718&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<nav class="nav">
    <div class="nav-mobile">
        <ul class="left">
            <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
            <li><a href="login.php"><i class="fa fa-user"></i>Login</a></li>
            <li><a href="register.php"><i class="fa fa-plus-square"></i>Register</a></li>
        </ul>
    </div>
</nav>

<div class="row">
  <div class="leftcolumn">

      <?php
      include 'connection.php';
      $query=$db->query("SELECT * FROM blog  ORDER by Blog_ID DESC");
      while ($query_run=$query->fetch_assoc()) {

          ?>
          <div class="card">
              <h2 class="topic"><?php echo $query_run['Blog_Title'];?></h2>
              <h3 class="topictt"><?php echo $query_run['Title_desc'];?>,</h3>
              <h6>Date Created : <?php echo $query_run['Date'];?></h6>
              <img src="reportimages/blog/<?php echo $query_run['img_url'];?>" width="100%" height="auto"/>

              <p><?php echo $query_run['Main_Desc'];?></p>
          </div>
          <?php
      }
      ?>

  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2 class="sidetopic">About Green Task Force (GTF)</h2>
      <div ><img id="aboutgtf" src="images/gtf.jpg"></div>
      <p>Green Task Force is a group of volunteers that help to keep the country cleaner and maintain a green environment. Join us, go green, save the Planet.</p>
    </div>
    <div class="card">
      <h2 class="sidetopic">Follow us on Facebook</h2>
      <div class="fb-page" data-href="https://www.facebook.com/NSBM.GTF/" data-tabs="timeline" data-width="263" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/NSBM.GTF/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/NSBM.GTF/">NSBM Green Task Force</a></blockquote></div>
    </div>
  </div>
</div>

<div class="footer">
  <h3>Copyright © 2019 - All Rights Reserved</h3>
</div>

</body>
</html>
