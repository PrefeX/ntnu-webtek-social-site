<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.2/less.min.js"></script>
    <link rel="stylesheet" href="css/style.less">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
</head>

<body>

    <nav class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <img alt="Logo" src="...">
                </a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- /.navbar-header-->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">Profile</a></li>
                    <li><a href="#portfolio">Messages</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>

                <!--<ul class="nav navbar-nav navbar-right">
                    <li>-->
                <form class="navbar-form navbar-right">

                    <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        My user img here
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Report a problem</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Support Forum</a></li>
                    </ul>

                    <div class="input-group">
                        <div class="btn-group">
                            <a class="btn btn-default" data-toggle="modal" data-target="#searchModal" data-container="body" data-tooltip="tooltip" data-placement="bottom" title="Search">
                                <i aria-label="Search" class="glyphicon glyphicon-search"></i>
                            </a>
                            <a class="btn btn-default" type="submit" data-container="body" data-tooltip="tooltip" data-placement="bottom" title="Notifications">
                                <i aria-label="Notifications" class="glyphicon glyphicon-bell"><span class="badge">4</span></i>
                            </a>
                            <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" role="button" aria-label="Help" aria-haspopup="true" aria-expanded="false">
                                <span class="glyphicon glyphicon-question-sign" data-container="body" data-tooltip="tooltip" data-placement="bottom" title="Help"></span>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="#">About</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Terms of Service</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Report a problem</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Support Forum</a></li>
                            </ul>
                        </div>
                    </div>
                </form>
                </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Search Modal -->
    <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="searchModalLabel">Search</h4>
                </div>
                <div class="modal-body">
                    <!--content start-->

                    <!-- content end-->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!--<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="Tooltip on left">Tooltip on left</button>-->
include here:

<?php include("test.html"); ?>

</body>

</html>