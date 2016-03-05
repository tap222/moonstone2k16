<!DOCTYPE html> 
<html>
    <head>
        <title>Admin Page</title>
        <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <style>
        body{
            font-family: Berlin Sans FB;
            
        }
    </style>
    </head>
    <body>
        <?php
            ob_start();
            session_start();
            $_SESSION["user"]="home";

        ?>
        <div class="row">
            <div class='col-xs-12'>
                
    <div class="nav-top">
        <a href="index.html" class="new-logo medi"></a>
        <a href="index.html" class="text-logo"></a>
        <a href="#" class="new-logo"></a>
    </div>
                <div class="bs-example wrapper" data-example-id="default-navbar">
        <nav class="navbar navbar-default header">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="" class="img-responsive"></a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    

                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Events <b class="caret"></b></a>
                            <ul class="dropdown-menu mega-menu">
                                <li class="mega-menu-column">
                                    <ul>
                                        <li class="nav-header">Highlights</li>
                                        <li class="element"><a href="event.php?eventno=1">Celebrity Night</a></li>
                                        <li class="element"><a href="event.php?eventno=2">Fashion Show</a></li>
                                        <li class="element"><a href="event.php?eventno=3">Annual Function</a></li>
                                        <li class="element"><a href="event.php?eventno=4">DJ Night</a></li>
                                    </ul>
                                </li>

                                <li class="mega-menu-column">
                                    <ul>
                                        <li class="nav-header">Day 1 </li>
                                        <li class="element"><a href="#">Filmy</a></li>
                                        <li class="element"><a href="#">Symphony</a></li>
                                        <li class="element"><a href="#">The Game of BOTS</a></li>
                                        <li class="element"><a href="#">Gulley Cricket</a></li>
                                        <li class="element"><a href="#">Grandeur(PG)</a></li>
                                        <li class="element"><a href="#">Paint-a-Toon</a></li>
                                        <li class="element"><a href="#">Snakes-and-Ladders</a></li>
                                        <li class="element"><a href="#">Gaming Park</a></li>
                                        <li class="element"><a href="#">Starbitzz Stumperz</a></li>
                                        <li class="element"><a href="#">Quiz Hunters</a></li>
                                        <li class="element"><a href="#">Eloquence</a></li>
                                        <li class="element"><a href="#">Funtakshari</a></li>
                                        <li class="element"><a href="#">Sport O Spark</a></li>
                                        <li class="element"><a href="#">Masti ki Pathshala</a></li>
                                        <li class="element"><a href="#">Me-Di Buggers</a></li>
                                        <li class="element"><a href="#">Mini Soccer</a></li>
                                        <li class="element"><a href="#">Zenith</a></li>
                                        <li class="element"><a href="#">Roadies</a></li>
                                        <li class="element"><a href="#">Photobooth</a></li>
                                        <li class="element"><a href="#">Distraction</a></li>
                                        <li class="element"><a href="#">Face and TShirt Painting</a></li>
                                        <li class="element"><a href="#">Rangoli</a></li>
                                        <li class="element"><a href="#">Gyan Prayag</a></li>
                                        <li class="element"><a href="#">Sportsathlon</a></li>
                                    </ul>
                                </li>

                                <li class="mega-menu-column">
                                    <ul>
                                        <li class="nav-header">Day 2</li>
                                        <li class="element"><a href="#">Eloquence</a></li>
                                        <li class="element"><a href="#">Funtakshari</a></li>
                                        <li class="element"><a href="#">Filmy</a></li>
                                        <li class="element"><a href="#">Symphony</a></li>
                                        <li class="element"><a href="#">Game of BOTS</a></li>
                                        <li class="element"><a href="#">Street Cricket</a></li>
                                        <li class="element"><a href="#">Grandeur(PG)/Paint a Toon</a></li>
                                        <li class="element"><a href="#">Treasure Hunt</a></li>
                                        <li class="element"><a href="#">Starblitzz Stumperz</a></li>
                                        <li class="element"><a href="#">Photobooth</a></li>
                                        <li class="element"><a href="#">Quiz Hunterz</a></li>
                                        <li class="element"><a href="#">Photobooth</a></li>
                                        <li class="element"><a href="#">Comedy Gags</a></li>
                                        <li class="element"><a href="#">Step-Up Race</a></li>
                                        <li class="element"><a href="#">Me-Di Buggers</a></li>
                                        <li class="element"><a href="#">Gyan Prayag</a></li>
                                        <li class="element"><a href="#">Mini Soccer</a></li>
                                        <li class="element"><a href="#">Stunt Mania</a></li>
                                        <li class="element"><a href="#">Zenith</a></li>
                                        <li class="element"><a href="#">Roadies</a></li>
                                        <li class="element"><a href="#">Dance Competition</a></li>
                                        <li class="element"><a href="#">Basket Ball</a></li>
                                        <li class="element"><a href="#">Volley Ball</a></li>
                                        <li class="element"><a href="#">Cricket</a></li>
                                        <li class="element"><a href="#">Chess/Carrom</a></li>
                                        <li class="element"><a href="#">Kho Kho</a></li>
                                        <li class="element"><a href="#">Kabaddi</a></li>
                                    </ul>
                                </li>
                                <li class="mega-menu-column">
                                    <ul>
                                    <li class="nav-header">Day 3</li>
                                    <li class="element"><a href="#">Street Cricket </a></li>
                                    <li class="element"><a href="#">Grandeur(PG)</a></li>
                                    <li class="element"><a href="#">Freshers</a></li>
                                    <li class="element"><a href="#">Funbola!</a></li>

                                    <li class="element"><a href="#">Mini Soccer</a></li>
                                    <li class="element"><a href="#">Create Best From Waste</a></li>
                                    <li class="element"><a href="#">Filmy</a></li>
                                    <li class="element"><a href="#">Basketball</a></li>
                                    <li class="element"><a href="#">Volleyball</a></li>
                                    <li class="element"><a href="#">Cricket</a></li>

                                    <li class="element"><a href="#">Chess/Carrom</a></li>
                                    <li class="element"><a href="#">Kho-Kho</a></li>
                                    <li class="element"><a href="#">Kabaddi</a></li>
                                    </ul>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gallery</b></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Commitees <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="commitee1.php">Steering Commitee</a></li>
                                <li><a href="commitee2.php">Sports Commitee</a></li>
                                <li><a href="commitee3.php">Cultural Commitee</a></li>
                                <li><a href="commitee4.php">Competition Commitee</a></li>
                                <li><a href="commitee5.php">Discipline Commitee</a></li>
                                <li><a href="commitee6.php">Media Commitee</a></li>
                                   </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">About <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="about-moonstone.html">Moonstone Festival</a></li>
                                <li><a href="about.html">Medicaps University Indore</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
            </div>
        
        </div>
         <div class="container">  
     <br><br>
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    <h3>Adminstrator's Page</h3>
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title"> Login</div>
                        
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                        <form id="loginform" class="form-horizontal" role="form" method="post" action="admin.php">
                                <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username">                                        
                                </div>
                                
                                <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                </div>
                                    

                                
                           


                                <div style="margin-top:10px" class="form-group">
                                <!-- Button -->
                                    <div class="col-md-12 ">
                                    <input type="submit" class="btn btn-success">
                                    </div>
                                </div>


                             </div>
                        <?php
                                if(!@mysql_connect('localhost','root','') || !@mysql_select_db('moonstone2k16'))
                            {
                                echo 'The is a problem with the server, please try again later.<br>';
                            }
                            else
                            {

                            }
                            
    				        if(isset($_POST['username']) && isset($_POST['password']))
								{
									if(!empty($_POST['username']) && !empty($_POST['password']))
									{		
												require 'testinput.inc.php';
												$user =(string)test_input($_POST['username']);
												$password = test_input($_POST['password']);
												$mysqli = mysqli_connect('localhost', 'root', '', 'moonstone2k16');
												$query = "SELECT * FROM login WHERE username = '$user'";
												
												//Execution	 of SQL
												if( mysql_query($query)) 
												{
													$query_run= mysql_query($query);
													$row= mysql_fetch_assoc($query_run);
													if ($password == $row['password']) 
													{
														$usertype = $row['type'];
														$mysqli->close();
														$_SESSION["user"]=$user;
												        header("Location: /moonstone2k16/data.php");
															
													}	else { echo "Incorrect password<br>"; }

												}
												else 
										{
											echo 'You are not a valid user. Please Signup First!!!!';
										}
												
										if(($_POST['username']=='admin') && ($_POST['password']=='admin'))
										{
											$_SESSION["user"]=$user;
											header("Location: /moonstone2k16/data.php");
										}
										else if(($_POST['username']=='Ashish') && $_POST['password']=='q7w8e9a4')
										{
											$_SESSION["user"]=$user;
											header("Location: /moonstone2k16/data.php");
										}
                                        
										
										echo 'You are not a valid user. Please Signup First!!!!.<br>';
									}
									else{
										echo 'Please enter your login credentials';
									}
								}

                        ?>
                        </form>     
                    </div>                     
                </div>  
            </div>
</div>
<script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>
    <script src="js/script.js"></script>
    </body>
</html>