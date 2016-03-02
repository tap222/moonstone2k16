<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" contennt="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Moonstone 2K16</title>

    <!-- Bootstrap core CSS -->
    
    <!-- Add custom CSS here -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css"></link>
    <link rel="stylesheet" href="css/bootstrap-theme.css"></link>
    
    <!--Importing the required javascripts -->
    <script type="text/javascript" src="js/jquery-2.2.0.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    
</head>
<body>
    <!--header table start-->
    <div class="bs-example wrapper" data-example-id="default-navbar">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="" class="img-responsive"></a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav-temp-class nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Events <b class="caret"></b></a>
                            <ul class="dropdown-menu mega-menu">
                                <li class="mega-menu-column">
                                    <ul>
                                        <li class="nav-header">Highlights </li>
                                    </ul>
                                </li>

                                <li class="mega-menu-column">
                                    <ul>
                                        <li class="nav-header">Event 1</li>
                                        <li class="element"><a href="#">Rules</a></li>
                                        <li class="element"><a href="#">Venue</a></li>
                                        <li class="element"><a href="#">Details</a></li>
                                        <li class="element"><a href="#">Register!</a></li>
                                    </ul>
                                </li>

                                <li class="mega-menu-column">
                                    <ul>
                                        <li class="nav-header">Event 2</li>
                                        <li class="element"><a href="#">Rules</a></li>
                                        <li class="element"><a href="#">Venue</a></li>
                                        <li class="element"><a href="#">Details</a></li>
                                        <li class="element"><a href="#">Register!</a></li>
                                    </ul>
                                </li>
                                <li class="mega-menu-column">
                                    <ul>
                                        <li class="nav-header">Event 3</li>
                                        <li class="element"><a href="#">Rules</a></li>
                                        <li class="element"><a href="#">Venue</a></li>
                                        <li class="element"><a href="#">Details</a></li>
                                        <li class="element"><a href="#">Register!</a></li>
                                    </ul>
                                </li>
                                <li class="mega-menu-column">
                                    <ul>
                                        <li class="nav-header">Event 4</li>
                                        <li class="element"><a href="#">Rules</a></li>
                                        <li class="element"><a href="#">Venue</a></li>
                                        <li class="element"><a href="#">Details</a></li>
                                        <li class="element"><a href="#">Register!</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Category 2 <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Sub Menu Link-1</a></li>
                                <li><a href="#">Sub Menu Link-2</a></li>
                                <li><a href="#">Sub Menu Link-3</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Category 3 <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Sub Menu Link-1</a></li>
                                <li><a href="#">Sub Menu Link-2</a></li>
                                <li><a href="#">Sub Menu Link-3</a></li>
                                <li><a href="#">Sub Menu Link-4</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Category 4 <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Sub Menu Link-1</a></li>
                                <li><a href="#">Sub Menu Link-2</a></li>
                            </ul>
                        </li>
                        <li>
                            <form role="search" "form-group">
                                <i class="fa fa-search"></i>
                                    <input class="form-control" placeholder="Search this site..." type="text">
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!--header table end-->
    <div class="register-form-wrapper">
        <div class="register-form-wrapper-overlay">
        </div>
        <div class="container">
            <form action="register.php" method="post" accept-charset="utf-8" class="form-group">
                <label>Name<span class='required'>*</span></label>
                <input type="text" name="name_of_person" value="" placeholder="" class="">
                <label>Email<span class='required'>*</span></label>
                <input type="text" name="email_of_person" value="" placeholder="" class="">
                <label>Phone<span class='required'>*</span></label>
                <input type="text" name="phone_of_person" value="" placeholder="" class="">
                <label>College<span class='required'>*</span></label>
                <input type="text" name="college_of_person" value="" placeholder="" class="">
                <label>Branch</label>
                <input type="text" name="branch_of_person" value="" placeholder="" class="">
                <label>Year</label>
                <input type="text" name="year_of_person" value="" placeholder="" class="">
                <label>Event<span class='required'>*</span></label>
                <select type="text" name="event_intrested" value="" placeholder="" class="">
                    <option selected>Select</option>
                    <option>Event 1</option>
                    <option>Event 2</option>
                    <option>Event 3</option>
                    <option>Event 4</option>
                </select>
                
               <input type="submit" class="btn bt-success" value="Submit">
                
                 <?php


                    if(@isset($_POST['name_of_person'])&& @isset($_POST['email_of_person']) && @isset($_POST['phone_of_person']) && @isset($_POST['college_of_person']) && @isset($_POST['branch_of_person']) && @isset($_POST['year_of_person']) && @isset($_POST['event_intrested']))
                    {
                        $name = (string)$_POST['name_of_person'];
                        $email = (string)$_POST['email_of_person'];
                        $phone = (string)$_POST['phone_of_person'];
                        $college = (string)$_POST['college_of_person'];
                        $branch = (string)$_POST['branch_of_person'];
                        $year = (string)$_POST['year_of_person'];
                        $eventin = (string)$_POST['event_intrested'];
                        if(!empty($name) && !empty($email) && !empty($phone)&& !empty($college)&& !empty($branch)&& !empty($year)&& !empty($eventin)){
                            echo $name. "<br>" . $email;
                        }
                        else
                        {
                            echo 'Fill form';
                        }
                    }

                ?>
            </form>
        </div>
    </div>
   
    <footer>
        <!--top footer start-->
        <div class="top_footer footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <h1>Contact</h1>
                        <p>
                            <STRONG>Medi-Caps University</STRONG>
                        </p>
                        <p>A.B. Road, Pigdamber, Rau </p>
                        <p>Indore - 453331</p>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <h1>News</h1>
                        <ul>
                            <li><a href="#"><i class="fa fa-long-arrow-right"></i> News Detail 1</a></li>
                            <li><a href="#"><i class="fa fa-long-arrow-right"></i> News Detail 1</a></li>
                            <li><a href="#"><i class="fa fa-long-arrow-right"></i> News Detail 1</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <h1 class="rgt_align">Stay Up to Date</h1>
                        <div class="footer_social">
                            <ul class="nav navbar-nav navbar-social">
                                <li><a class="push" target="_blank" href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
                                <li><a class="push" target="_blank" href="#"><i class="fa fa-instagram fa-2x"></i></a></li>
                                <li><a class="push" target="_blank" href="#"><i class="fa fa-pinterest-p fa-2x"></i></a></li>
                                <li><a class="push" target="_blank" href="#"><i class="fa fa-youtube fa-2x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--top footer end-->

        <!--lower footer start-->
        <div class="lower_footer footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <p class="copyright_txt">Copyright &copy; Link</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <ul>
                            <li><a href="#">Terms and Conditions</a></li>
                            <li>|</li>
                            <li><a href="#">Event Disclaimer</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--lower footer end-->
    </footer>
    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>
</body>
</html>
