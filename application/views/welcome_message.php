<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="assets/ico/favicon.png">

        <title>Micah's Portfolio</title>

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="assets/js/html5shiv.js"></script>
          <script src="assets/js/respond.min.js"></script>
        <![endif]-->

        <!-- Custom styles for this template -->
        <link href="assets/css/carousel.css" rel="stylesheet">
    </head>
    <!-- NAVBAR
    ================================================== -->
    <body>
        <div class="navbar-wrapper">
            <div class="container">

                <div class="navbar navbar-inverse navbar-static-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">Micah's Portfolio</a>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <?php foreach ($projects as $project): ?>

                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php echo $project->title; ?> <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                    <li> <a href="<?php echo $project->demo_url; ?>">
                                           Live Demo
                                        </a></li>
                                        <li><a href="<?php echo $project->source_url; ?>">Source</a></li>        
                                        </ul>
                                    
                                    </li>

                                <?php endforeach; ?>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Projects API <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo site_url('api/projects'); ?>">XML</a></li>
                                         <li><a href="<?php echo site_url('api/projects?format=json'); ?>">JSON</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <!-- Carousel
        ================================================== -->
        <div id="myCarousel" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <?php
                $i = 0;
                foreach ($projects as $project):
                  if ($i == 0) {
                      $active = "active";
                  } else {
                      $active = "";
                  }
                  $i++;
                    echo <<<EOT
  <div class="item $active">
                 <!--   <img src="$project->carousel_image_url"  alt="$project->title"> -->
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>$project->title</h1>
                            <p>$project->description</p>
                            <p>
                                <a class="btn btn-large btn-primary" href="$project->demo_url">Live Demo</a>
                                <a class="btn btn-large btn-primary" href="$project->source_url">Source</a>
                            </p>
                        </div>
                    </div>
                </div>
EOT;
                endforeach;
                ?>



            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
        </div><!-- /.carousel -->



        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <?php
                foreach ($projects as $project):
                    echo <<<EOT
                <div class="col-lg-4">
                    <img class="img-circle" src="$project->marketing_image_url"  alt="$project->title">
                    <h2>$project->title</h2>


                    <p>$project->description</p>

                   
                    <p>
                    <a class="btn btn-default" href="$project->demo_url">Live Demo &raquo;</a>
<a class="btn btn-default" href="$project->source_url">Source &raquo;</a>                        
</p>
                </div><!-- /.col-lg-4 -->
EOT;
                endforeach;
                ?>

            </div><!-- /.row -->


            <!-- START THE FEATURETTES -->


            <?php
            foreach ($projects as $project):
                echo <<<EOT
                <hr class="featurette-divider">
            
            
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">$project->title: <span class="text-muted">$project->tagline</span></h2>
                    <p class="lead">$project->description<br/>
                         
                    <a class="btn btn-default" href="$project->demo_url">Live Demo &raquo;</a>
<a class="btn btn-default" href="$project->source_url">Source &raquo;</a>                        
</p>
                </div>
                <div class="col-md-5">
                        <img class="featurette-image img-responsive" src="$project->featurette_image_url"  alt="$project->title">
                    </div>
            </div>
EOT;
            endforeach;
            ?>

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->


            <!-- FOOTER -->
            <footer>
                <p class="pull-right"><a href="#">Back to top</a></p>
                <p>&copy; 2013 <a href="http://micahdbolen.wordpress.com">Micah Delane Bolen</a> &middot; This site was built with CodeIgniter and Bootstrap (<a href="http://github.com/micahbolen/portfolio">Source</a>) &middot; <a href="<?php echo site_url('api/projects'); ?>">Projects API</a></p>
            </footer>

        </div><!-- /.container -->


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/holder.js"></script>
        <script type="text/javascript">
            $(function(){
                // Bind a click event to the 'ajax' object id
                $("#ajax").bind("click", function( evt ){
                    // Javascript needs totake over. So stop the browser from redirecting the page
                    evt.preventDefault();
                    // AJAX request to get the data
                    $.ajax({
                        // URL from the link that was clicked on
                        url: $(this).attr("href"),
                        // Success function. the 'data' parameter is an array of objects that can be looped over
                        success: function(data, textStatus, jqXHR){
                            alert('Successful AJAX request!');
                        }, 
                        // Failed to load request. This could be caused by any number of problems like server issues, bad links, etc. 
                        error: function(jqXHR, textStatus, errorThrown){
                            alert('Oh no! A problem with the AJAX request!');
                        }
                    });
                });
            });
        </script>
    </body>
</html>