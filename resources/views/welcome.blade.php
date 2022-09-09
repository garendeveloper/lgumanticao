<!DOCTYPE html>
<html lang="en">
<head>
<title>LGU Manticao - MALGECCO System</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

@include('scripts/header')
<style>
  
  body {
            animation: fadeInAnimation ease 10s;
            animation-iteration-count: 1;
            animation-fill-mode: forwards;
        }
        @keyframes fadeInAnimation {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
</style>
</head>
<body class = "animated fadeIn" >

<!--Header-part-->
<div id="header" >
  <h1><a href="dashboard.html">LGU MANTICAO – MALGECCO BANK RECONCILIATION SYSTEM</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-messaages-->
<div class="btn-group rightzero animated fadeInUp" style = "animation: fadeIn 10s"> <a class="top_message tip-left" title="Manage Files"><i class="icon-file"></i></a> <a class="top_message tip-bottom" title="Manage Users"><i class="icon-user"></i></a> <a class="top_message tip-bottom" title="Manage Comments"><i class="icon-comment"></i><span class="label label-important">5</span></a> <a class="top_message tip-bottom" title="Manage Orders"><i class="icon-shopping-cart"></i></a> </div>
<!--close-top-Header-messaages--> 

<!--top-Header-menu-->
@include('layouts/topheader')
<!--close-top-Header-menu-->

@include('layouts/sidebar')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
  <div class="container-fluid">
   	@include('layouts/quickitems')
   
    <div class="row-fluid">
      <div class="widget-box">
        <div class="widget-title"><span class="icon"><i class="icon-tasks"></i></span>
          <h5>Departments and Heads </h5>
          <div class="buttons"></div>
        </div>
        <div class="widget-content">
          <div class="row-fluid">
            <!-- <div class="span8">
              <img src="admintemplate/img/logo.png" alt="">
            </div> -->
            <div class="span12">
              <ul class="stat-boxes2">
                <span class = "span12">
               
                    <div class="center" style = "text-align: center; font-size: 40px; height: 90px; font-family: Algerian"><strong>Hon. Stephen S. Tan</strong> Municipal Mayor </div>
                 
                </span>
              </ul>
            </div>
            <div class="span12">
              <ul >
                <span class = "span3">
                  <li >
                    <div class="right"><strong>Jugen S. Pagala</strong> Municipal Accountant </div>
                  </li>
                </span>
                <span class = "span3">
                  <li>
                    <div class="right"> <strong>Maryfer D. Ferrer</strong> Municipal Budget Officer </div>
                  </li>
                </span>
                <span class = "span3">
                  <li>
                    <div class="right"> <strong>Deborah D. Marata</strong> Municipal Treasury Officer </div>
                  </li>
                </span>
                <span class = "span3">
                  <li>
                    <div class="right"> <strong>Lloyd B. Baconguis</strong> Municipal Engineer </div>
                  </li>
                </span>
                
              </ul>
            </div>
            <div class="span12">
              <ul >
                <span class = "span3">
                  <li >
                    <div class="right"><strong>Jugen S. Pagala</strong> Municipal Accountant </div>
                  </li>
                </span>
                <span class = "span3">
                  <li>
                    <div class="right"> <strong>Maryfer D. Ferrer</strong> Municipal Budget Officer </div>
                  </li>
                </span>
                <span class = "span3">
                  <li>
                    <div class="right"> <strong>Deborah D. Marata</strong> Municipal Treasury Officer </div>
                  </li>
                </span>
                <span class = "span3">
                  <li>
                    <div class="right"> <strong>Lloyd B. Baconguis</strong> Municipal Engineer </div>
                  </li>
                </span>
                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
  </div>
</div>
</div>
</div>
<div class="row-fluid">
@include('scripts/footerinfo')
</div>

@include('scripts/footer')
</body>
</html>
