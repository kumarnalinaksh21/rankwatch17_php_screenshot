<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Problem Statement 3 | rankwatch17_php_screenshot</title>
    <meta name="description" content="Score: 15
Using any technology accept a domain name or URL and take a screenshot for what is
displayed on browser. Please ensure you are saving a JPG or PNG image only.">
    <meta name="keywords" content="Second round, RankWatch">
    <link href='https://fonts.googleapis.com/css?family=Lobster|Open+Sans:400,400italic,300italic,300|Raleway:300,400,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
     </head>


<body>
    <div class="content">
      <div class="container wow fadeInUp delay-03s">
        <div class="row">
          <div class="logo text-center">
            <img src="img/logo.png" alt="logo" width="150">
            <h2>Problem Statement 3 | rankwatch17_php_screenshot</h2>
            <p>"Score: 15<br></br>
Using any technology accept a domain name or URL and take a screenshot for what is
displayed on browser. <br></br>
Please ensure you are saving a JPG or PNG image only."<br></br> </p>
          </div>
          <div> <h1  align="center">
                Time Left Until Deadline !!!!!  Oct 16, 2017 -> 14:00
                </h1>
          </div>
          <div id="countdown" data-wow-delay=".3s" data-date="Oct 16, 2017 14:00:00">
          </div> 
    <h2 class="subs-title text-center">Enter the website's URL</h2>          
         
          <div class="subcription-info text-center">
            <form class="subscribe_form" action="Screenshot.php" method="post">
              <input placeholder="Enter your website's URL..." name = "url" type="text">
              <input type="submit">
            </form>
            <p class="sub-p">Pease check below for screenshots: Right click + Save as to download !! </p>
          </div>
          <?php

    //website url is as follows
    $siteURL = $_POST['url'];


    
        //we will now call the Google PageSpeed Insights API
        $googlePagespeedData = file_get_contents("https://www.googleapis.com/pagespeedonline/v2/runPagespeed?url=$siteURL&screenshot=true");

        //now we will decode the  json data
        $googlePagespeedData = json_decode($googlePagespeedData, true);

        //let us process the screenshot data
        $screenshot = $googlePagespeedData['screenshot']['data'];
        $screenshot = str_replace(array('_','-'),array('/','+'),$screenshot);

        //screenshot image is displayed
        
        echo "<img src=\"data:image/jpeg;base64,".$screenshot."\" />";
   
    // save to file

?>
        </div>
      </div>
      
      
      
    </div>
   
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/custom.js"></script>
  </body>


</html>-