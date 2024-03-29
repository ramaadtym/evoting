<?php
include "../config.php";
include "../otentik.php";
 session_start();

  $sesi_user = $_SESSION["sesi_user"];
  $sesi_pass = $_SESSION["sesi_pass"];

  if (! otentikasi($sesi_user, $sesi_pass))
  {
    $msg = "Anda Belum Login!";
    $alamat = "../home.php";
    header("Location: $alamat?msg=$msg");
    exit();
  }  


 	 $id_mysql = mysql_connect($NAMA_SERVER,
                            $NAMA_USER,
                            $PASSWORD);
  if (! $id_mysql)
    die("Database server MySQL tak dapat dikoneksi");

  if (! mysql_select_db("voting", $id_mysql))
    die("Database tidak bisa dipilih");
	
  $status = mysql_query("SELECT * FROM register");
  $hasil = mysql_fetch_array($status);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>Survey Quick Count IKA FHUNPAD</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <!-- 
    Visual Admin Template
    http://www.templatemo.com/preview/templatemo_455_visual_admin
    -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>  
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <h1>SQC IKA FHUNPAD</h1>
        </header>
        <div class="profile-photo-container">
          <img src="images/logo.png" alt="Profile Photo" width="200px" height="200px" style="margin-left:15%; margin-bottom:5%" class="img-responsive">  
         
        </div>      
       
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
        </div>
        <nav class="templatemo-left-nav">          
          <ul>
            <li><a href="#" class="active"><i class="fa fa-home fa-fw"></i>Beranda</a></li>
             <li><a href="data-visualization.html"><i class="fa fa-check"></i>Surat Suara</a></li>
            <li><a href="data-visualization.html"><i class="fa fa-bar-chart fa-fw"></i>Perolehan Suara</a></li>
           <li><a href="logout.php"><i class="fa fa-eject fa-fw"></i>Logout</a></li>
          </ul>  
        </nav>
      </div>
      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
        
              <ul class="text-uppercase">
                <li>Selamat Datang, <?php echo"$hasil[1]"; ?></li>
              </ul>  
            </nav> 
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-flex-row flex-content-row">
            <div class="templatemo-content-widget white-bg col-2">
              <h2 class="templatemo-inline-block">Akun Anda sudah diverifikasi!</h2><hr>
              <p>Silakan klik menu <strong>Surat Suara</strong> untuk mulai memilih </p>              
            </div>
            
            
          </div>
         
        
          <footer class="text-right">
            <p>Copyright &copy; 2015 IKA FH UNPAD 
            | Designed by <a href="http://www.twitter.com/jastikonline" target="_parent">Jastik</a></p>
          </footer>         
        </div>
      </div>
    </div>
    
  <!-- JS -->
    <script src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script src="js/jquery-migrate-1.2.1.min.js"></script> <!--  jQuery Migrate Plugin -->
    <script src="https://www.google.com/jsapi"></script> <!-- Google Chart -->
    <script>
      /* Google Chart 
      -------------------------------------------------------------------*/
      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart); 
      
      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

          // Create the data table.
          var data = new google.visualization.DataTable();
          data.addColumn('string', 'Topping');
          data.addColumn('number', 'Slices');
          data.addRows([
            ['Mushrooms', 3],
            ['Onions', 1],
            ['Olives', 1],
            ['Zucchini', 1],
            ['Pepperoni', 2]
          ]);

          // Set chart options
          var options = {'title':'How Much Pizza I Ate Last Night'};

          // Instantiate and draw our chart, passing in some options.
          var pieChart = new google.visualization.PieChart(document.getElementById('pie_chart_div'));
          pieChart.draw(data, options);

          var barChart = new google.visualization.BarChart(document.getElementById('bar_chart_div'));
          barChart.draw(data, options);
      }

      $(document).ready(function(){
        if($.browser.mozilla) {
          //refresh page on browser resize
          // http://www.sitepoint.com/jquery-refresh-page-browser-resize/
          $(window).bind('resize', function(e)
          {
            if (window.RT) clearTimeout(window.RT);
            window.RT = setTimeout(function()
            {
              this.location.reload(false); /* false to get page from cache */
            }, 200);
          });      
        } else {
          $(window).resize(function(){
            drawChart();
          });  
        }   
      });
      
    </script>
    <script type="text/javascript" src="js/templatemo-script.js"></script> 

  </body>
</html>