<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
   
	
	<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
	<title>Salmagroup-i3</title>
    <link href='<?php echo base_url(); ?>assets/images/favicon.ico' type='' rel='shortcut icon'>

    <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Roboto:700' rel='stylesheet'
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    

    <link href="<?php echo base_url(); ?>assets/css/reset.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/grid.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.fancybox-1.3.4.css">

    <style type="text/css">

      a {
        color: #FFF;
      }
      a:hover {
        color: yellow;
        text-decoration: underline;
      }
      .thumbnails {padding: 20px}
      .thumbnails img {
        height: 80px;
        border: 4px solid #555;
        padding: 1px;
        margin: 0 10px 10px 0;
      }

      .thumbnails img:hover {
        border: 4px solid #00ccff;
        cursor:pointer;
      }
      .preview { padding-bottom:20px}
      .preview img {
        border: 4px solid #444;
        padding: 1px;
        width: 800px;
      }
    </style>

    <style type="text/css">
        .msg-btn{
            color:#fff;
            background-color:#666666;
            border-radius: 15px 0px 15px 0px;
        }
        .msg-btn:hover{
            text-decoration: underline;
            color: yellow;
            background-color:#a5290d;
        }
    </style>
    
    <script type="text/javascript">

        //ok , it's working , we are done , if you want to add imgs you have to :

        //1 - add an img tag with id : Img++; ex:  <img id="Img4" src="IMG/1.jpg"/>
        //2 - add an li tag  with id : S++;   ex:  <li id="S4"></li>
        //3 - add an p tag with id : SP++;    ex:  <p id="SP4"></p>
        //4 - change the value of nrImg 

        var nrImg = 4;  //the number of img , I only have 3 
        var IntSeconds = 4;     //the seconds between the imgs

        function Load()
        {
            nrShown = 0;    //the img visible
            Vect = new Array(nrImg + 10);
            Vect[0] = document.getElementById("Img1");
            Vect[0].style.visibility = "visible";

            document.getElementById("S" + 0).style.visibility = "visible";

            for (var i = 1; i < nrImg; i++)
            {
                Vect[i] = document.getElementById("Img" + (i + 1));
                document.getElementById("S" + i).style.visibility = "visible";
            }

            document.getElementById("S" + 0).style.backgroundColor = "rgba(255, 255, 255, 0.90)";
            document.getElementById("SP" + nrShown).style.visibility = "visible";

            mytime = setInterval(Timer, IntSeconds * 1000);
        }
        function Timer()
        {
            nrShown++;
            if (nrShown == nrImg)
                nrShown = 0;
            Effect();
        }
        //next img
        function next()
        {
            nrShown++;
            if (nrShown == nrImg)
                nrShown = 0;
            Effect();

            clearInterval(mytime);
            mytime = setInterval(Timer, IntSeconds * 1000);
        }
        function prev()
        {
            nrShown--;
            if (nrShown == -1)
                nrShown = nrImg -1;
            Effect();

            clearInterval(mytime);
            mytime = setInterval(Timer, IntSeconds * 1000);
        }
        //here changes the img + effect
        function Effect()
        {
            for (var i = 0; i < nrImg; i++)
            {
                Vect[i].style.opacity = "0";   //to add the fade effect
                Vect[i].style.visibility = "hidden";

                document.getElementById("S" + i).style.backgroundColor = "rgba(0, 0, 0, 0.70)";
                document.getElementById("SP" + i).style.visibility = "hidden";
            }
            Vect[nrShown].style.opacity = "1";
            Vect[nrShown].style.visibility = "visible";
            document.getElementById("S" + nrShown).style.backgroundColor = "rgba(255, 255, 255, 0.90)";
            document.getElementById("SP" + nrShown).style.visibility = "visible";
        }

    </script>
    <!--[if lt IE 9]>  
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>
  	<script src="js/html5.js"></script>
    <link rel="stylesheet" href="css/ie.css" media="all">
    <![endif]-->
	<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="//windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a>
		</div>
	<![endif]-->
</head>

   <body onload="Load()">
    <div id="slider">
        <div id="imgs">
            <!-- here you have to add the img tag -->
            <img id="Img4" src="<?php echo base_url(); ?>assets/images/c.jpg"/>
            <img id="Img3" src="<?php echo base_url(); ?>assets/images/a.jpg"/>
            <img id="Img2" src="<?php echo base_url(); ?>assets/images/DSC_5131.jpg">
            <img id="Img1" src="<?php echo base_url(); ?>assets/images/6Y2A3962.jpg"/>
            
        </div>
        <!--Here is going to be the left right buttons, the info and the imgs shown-->
        <div id="Snav">
            <!-- here is the circles , showes the current img -->
            <div id="SnavUp">
                <div id="Scircles">
                    <ul>
                        <!-- here you have to add the li tag-->
                        <li id="S0"></li>
                        <li id="S1"></li>
                        <li id="S2"></li>
                        <li id="S3"></li>
                        <li id="S4"></li>
                    </ul>
                </div>
            </div>
            <!-- the left and right button -->
            
            <!-- the info -->
            <div id="SnavBottom">
                <!-- here you have to add the p tag-->
                <p id="SP0"></p>
                <p id="SP1"></p>
                <p id="SP2"></p>
                <p id="SP3"></p>
                <p id="SP4"></p>
            </div>
        </div>
    </div>
    <div id="splashGrid"></div>
    
    <div id="glob">
        <div class="spinner"></div>
        <!-- Splash -->
         <div id="glob">
        <div class="spinner"></div>
        <!-- Splash -->
        <div id="splashInfo">
        	
                <ul>
                    <li class="active">
                    	<p class="splash-text-1">WELCOME TO SALMA GROUP</p>
                        
                        <div class="shad-button"><a href="#!/page_about" class="splash-button">Read More</a></div>
                        <div class="clear"></div>
                    </li>
                    
                </ul>
            </div>
            
            </div>

<script src="<?php echo base_url(); ?>assets/js/jquery-1.7.2.min.js" asyan></script>    
<script src="<?php echo base_url(); ?>assets/js/scripts.js" asyan></script>
            <!-- end Splash -->
        <!-- HEADER -->
           <header>
        	<div class="head-line">
             <div class="container_12">
                <div class="grid_12">
                    <h1><a href="#!/page_home" style="margin-left:-15px;"></a></h1>
                    
                    <!-- MENU -->
                    <nav class="menu">
                        <ul id="menu">
                            <li><a href="#!/page_home"><span>Home</span><span>Home</span></a><strong></strong></li>
                            <li class="with_ul"><a href="#!/page_about"><span>About us</span><span>About us</span></a><strong></strong><span></span>
                                
                            </li>
                            <li><a href="#!/page_services"><span>Gallery</span><span>Gallery</span></a><strong></strong></li>
                            <li class="with_ul margmenu"><a href="#"><span>Mills</span><span>Mills</span></a><strong></strong><span></span>
                              	<ul class="submenu_1">
                                	<?php
                                        $query = $this->db->get('blogs');
                                        foreach ($query->result() as $blog) {
                                    ?>

                                        <li><a href="#!/page_blog_<?=$blog->id?>"><?=$blog->title?></a></li>

                                    <?php
                                        }
                                    ?>
                                    
                   				</ul>
                            </li>
                            <li class="with_ul"><a href="#"><span>Activities</span><span>Activities</span></a><strong></strong><span></span>
                            	<ul class="submenu_3">
                                	<li class=""><a href="#!/page_blog_3NEWS">News & Events</a></li>
                                    <li><a href="#!/page_blog">RECENT</a></li>                                
                                    <li class=""><a href="#!/page_blog_3A">FUTURE PLAN</a></li>
                                    <li class=""><a href="#!/page_blog_3job">Job Vacancy</a></li>
                                    
                   				</ul>
                            
                            </li>
                            <li class=""><a href="#!/page_mail"><span>Contacts</span><span>Contacts</span></a><strong></strong></li>
                    	</ul>
               	    </nav>
                    <!-- END MENU -->                    
                </div>
            </div>
           </div>
        </header>
        <!-- END HEADER -->