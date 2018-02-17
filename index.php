<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="assets/img/favicon1.ico">
<title>FishNet | Where Expert and Researchers Connect</title>
<meta name="description" content="Find any fish profiles / details">
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href="assets/css/main.css" rel="stylesheet">
</head>
<script src="assets/js/jquery.3.2.1.min.js"></script>
<script>
    function searchForSpecie(){
        var result = document.getElementById('searchName').value;
        $.ajax({
            type: "POST",
            url: "getSpecie.php",
            data: {name : result},
            success: function (response) {
                response =JSON.parse(response);
                console.log(response);
                var len = response.length;
                for( var i = 0; i<len; i++){
                    var id          = response[i]['id'];
                    var name        = response[i]['name'];
                    var importance  = response[i]['importance'];
                    var comment     = response[i]['comment'];
                    var dang        = response[i]['dangerous'];
                    var genus       = response[i]['genus'];
                    var imageId     = response[i]['images'];
                    var species     = response[i]['species'];
                    var aqua        = response[i]['UsedforAquaculture'];
                    //console.log(name,importance);
                }
            },
            error: function () {
            }
        });
    }
</script>
<body>
	<!--main-->
<section class="main">
  <div class="overlay"></div>
  <div class="container">
      <nav class="navbar">
        <div class="container-fluid">
          <div class="navbar-header logo">
            <h1><a class="navbar-brand" href="index.php">FishNet</a></h1>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
          <!-- <div> -->
            <ul class="nav navbar-nav  navbar-right">
                <?php
                    require_once "includes/database.php";
                    session_start();
                    if(!isset($_SESSION['id'])):
                ?>
                          <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> <strong>Sign Up</strong> </a></li>
                          <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span><strong> Login</strong></a></li>
                    <?php else: ?>
                        <li>
                            <a href="dashboard.php"><span class="glyphicon glyphicon-user"></span>
                                <strong><?=ucwords($_SESSION['username'])?></strong> </a>
                        </li>
                        <li>
                            <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>
                                <strong>Logout</strong> </a>
                        </li>

                    <?php endif; ?>
            </ul>
          </div>
        </div>
      </nav>
      <div class="row">
        <div class="col-md-12">

          <!--welcome-message-->
          <header class="welcome-message text-center">
            <h1><span class="rotate">We Are Here to Help, Search For Your Preferred Fish</span></h1>
          </header>
          <!--welcome-message end-->

          <!--sub-form-->
          <div class="sub-form text-center">
            <div class="row" ng-app>
              <div class="col-md-5 center-block col-sm-8 col-xs-11">
                <form>
                  <div class="input-group">
                    <input type="text" ng-model="name" id="searchName" class="form-control" placeholder="Name">
                    <span class="input-group-btn">
                    <button type="submit" class="btn btn-default" value="Search" name="search" onclick="searchForSpecie()">
                        Search
                        <i class="fa fa-search">

                        </i>
                    </button>
                    </span> </div>
                </form>
                <p id="angular-component" class="alert">I am looking for {{name}}</p>
              </div>
            </div>
          </div>
          <!--sub-form end-->
                </div>
              </div>
            </div>
          </section>
          <!--main end-->

          <!--Fishes collection-->

          <section class="features section-spacing">
            <div class="container">
              <h2 class="text-center">EXPLORE OUR FISHES COLLECTION</h2>
              <div class="row">
                <div class="col-md-6">
                  <div class="wow fadeInUp product-features row">
                    <div class="col-md-2 col-sm-2 col-xs-2 text-center"></div>
                    <div class="col-md-10 col-sm-10 col-xs-10">
                      <!--fish 3-->
                      <h4>Blue Whale</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, beatae, esse, aspernatur, alias odio numquam incidunt perspiciatis aliquid voluptate sapiente.</p>
                      <!--fish 3 end-->
                    </div>
                  </div>
                  <div class="wow fadeInUp product-features row">
                    <div class="col-md-2 col-sm-2 col-xs-2 text-center"></div>
                    <div class="col-md-10 col-sm-10 col-xs-10">
                      <!--fish 4-->
                      <h4>Tilapia</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, beatae, esse, aspernatur, alias odio numquam incidunt perspiciatis aliquid voluptate sapiente.</p>
                      <!--fish 4 end-->
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="wow fadeInUp product-features row">
                    <div class="col-md-2 col-sm-2 col-xs-2 text-center"></div>
                    <div class="col-md-10 col-sm-10 col-xs-10">
                      <!--fish 3-->
                      <h4>Crockel</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, beatae, esse, aspernatur, alias odio numquam incidunt perspiciatis aliquid voluptate sapiente.</p>
                      <!--fish 3 end-->
                    </div>
                  </div>
                  <div class="wow fadeInUp product-features row">
                    <div class="col-md-2 col-sm-2 col-xs-2 text-center"></div>
                    <div class="col-md-10 col-sm-10 col-xs-10">
                      <!--fish 4-->
                      <h4>Shark</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, beatae, esse, aspernatur, alias odio numquam incidunt perspiciatis aliquid voluptate sapiente.</p>
                      <!--fish 4 end-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!--Fishes collection end-->
          <footer class="site-footer section-spacing">
            <div class="container">
              <div class="row">
                <div class="col-md-12 text-center">
                  <small class="wow fadeInUp">© 2018 All rights reserved. Made with <i class="fa fa-heart pulse"></i> by <a href="#">Team FishNet</a></small> </div>
              </div>
            </div>
          </footer>
          <!--site-footer end-->

          <!--PRELOAD-->
          <div id="preloader">
            <div id="status"></div>
          </div>
          <!--end PRELOAD-->

          <script src="assets/js/jquery-1.11.1.min.js"></script>
          <script src="assets/js/jquery.backstretch.min.js"></script>
          <script src="assets/js/wow.min.js"></script>
          <script src="assets/js/jquery.simple-text-rotator.min.js"></script>
          <script src="assets/js/main.js"></script>
          <script src="assets/js/bootstrap.min.js"></script>
          <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.min.js"></script>
          </body>
          </html>