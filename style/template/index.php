<!DOCTYPE html>
<html>
<head>
  <title><?php echo $settings["title"]?></title>
  <link rel="stylesheet" href="style/css/bootstrap.min.css" media="screen">
  <link rel="stylesheet" href="style/css/bootstrap.css" media="screen">
  <link rel="stylesheet" href="style/css/myCssClass.css" media="screen">
</head>
<body>
  <div class ="container-fluid">
    <h1 class="text-center"><?php echo $settings["title"]?></h1>
    <h3 class="text-center"><?php echo $settings["subtitle"]?></h3>
    <div class="row">
      <div class="col-sm-3 col-md-2 hidden-xs">
        <!-- Insert your left vertical google ad Code below this comment-->
  </div>
    <div class="col-sm-6 col-md-8 text-center">
      <div class="top-banner">
        <!-- Insert your top horizontal google ad Code below this comment (Recommended size 728x90)-->
    </div>
      <h3><?php echo $settings["description_1"]?></h3>
      <h3><?php echo $settings["description_2"]?></h3>
      <div><p>Your possible rewards <?php echo $rewards["reward_list_html"]; ?></p></div>
      <div>
        <p>Earning bitcoins is simple:</p>
      </div>
      <?php echo $view['main']['result_html']; ?>
      <?php echo $view['main']['ref_link']; ?>
      <!-- Insert your second horizontal google ad Code below this comment (Recommended size 320x100)-->
      <form method="Post">
        <div >
          <div><label>Insert your email address:</label>
            <input name="username" id="username" class="form-control text-center" type="text" placeholder="Enter your email address"></div>
          </div><br>
          <div>
            <div class="form-group"><label>Solve the captcha:</label>

              <center class="captcha"><script type="text/javascript" src="http://api.solvemedia.com/papi/challenge.script?k=<?php echo $settings['solvemedia_challenge_key']?>"></script></center></div>
              </div>
            <div>
              <div>
                <button class="btn btn-default" type="submit">Give me my reward !</button>
              </div>
            </div>
          </form>
          <br>
          <!-- Insert your rectangle google ad Code below this comment (Recommended size 300x250)-->
          <div id="description">
            <strong><p>Insert your text here</p></strong>
          </div>
      </div>
      <div class="col-sm-3 col-md-2 hidden-xs zeta">
        <!-- Insert your right vertical google ad Code below this comment-->
    </div>
  </div>
  <footer><strong><p class="text-center">Copyright &#169; 2015 <?php echo $settings["title"]?> <a href=<?php echo $settings["contact_mail"]?>>Contact us</a></p></strong></footer>
</div>
</body>
</html>
