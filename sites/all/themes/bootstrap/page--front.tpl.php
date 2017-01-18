<head>
    <link rel="stylesheet" href="sites/all/themes/bootstrap/app.css">
    <!--fonts-->
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <!--font-awesome-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body id="home">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">AESA Community of Practice</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#communities">Communities</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Browse<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Content</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
<!--                    <li><a href="../navbar/">Default</a></li>
                    <li><a href="../navbar-static-top/">Static top</a></li>
                    <li class="active"><a href="./">Fixed top <span class="sr-only">(current)</span></a></li>-->
                </ul>
            </div>
        </div>
    </nav>
    <hr>
    <div class="container" id="searchform">
        <div class="row row-centered">
                <div class="col-lg-8 col-centered">
                    <h4>Search The AESA Community</h4>
                  <?php
                  $block = module_invoke('search', 'block_view', 'search');
                  print render($block);
                  ?>
            </div>
        </div>
        <hr>
    </div>
    <br>
    
    <div class="container">
        <h4 id="containerheader">The AESA community of practice</h4>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-4">
                <a href="" class="btn btn-info btn-lg buttons"><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i> Find Answers</a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-4">
                <a href="" class="btn btn-success btn-lg buttons"><i class="fa fa-lightbulb-o fa-lg" aria-hidden="true"></i> Share Ideas</a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-4">
                <a href="" class="btn btn-primary btn-lg buttons"><i class="fa fa-users fa-lg" aria-hidden="true"></i> Join Groups</a>
            </div>
        </div>
         <hr>
    </div>
   
    <div id="communities" class="container">
        <h4 id="containerheader">Featured Communities</h4>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-4">
                <a href="" class="btn btn-info btn-lg buttons" title="Climate Impact Research Capacity and Leadership Enhancement"><i class="fa fa-users fa-lg" aria-hidden="true"></i> CIRCLE</a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-4">
                <a href="" class="btn btn-info btn-lg buttons" title="Developing Excellence in Leadership, Training and Science in Africa"><i class="fa fa-users fa-lg" aria-hidden="true"></i> DELTAS</a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-4">
                <a href="" class="btn btn-info btn-lg buttons" title="Grand Challenges Africa"><i class="fa fa-users fa-lg" aria-hidden="true"></i> Grand Challenges Africa</a>
            </div>
        </div>
    </div>
</body>