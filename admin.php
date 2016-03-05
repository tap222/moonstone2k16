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

        

        <div class="moonstone">Moonstone 2K16</div>

        <a href="#" class="new-logo"></a>
    </div>
    <div class="bs-example wrapper" data-example-id="default-navbar">
        <nav class="navbar navbar-default header">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Events <b class="caret"></b></a>
                            <ul class="dropdown-menu mega-menu">
                                <li class="mega-menu-column">
                                    <ul>
                                        <li class="nav-header">Highlights</li>
                                        <li class="element"><a href="event.php?eventno=1">Celebrity Night</a></li>
                                        <li class="element"><a href="event.php?eventno=2">Fashion Show</a></li>
                                        <li class="element"><a href="event.php?eventno=3">Annual Function</a></li>
                                        
                                    </ul>
                                </li>

                                <li class="mega-menu-column">
                                    <ul>
                                        <li class="nav-header">Techno-Cultural Events </li>
                                        <li class="element"><a href="event.php?eventno=4">Robotics</a></li>
                                        <li class="element"><a href="event.php?eventno=5">Photography</a></li>
                                        <li class="element"><a href="event.php?eventno=6">Gaming Box</a></li>
                                        <li class="element"><a href="event.php?eventno=7">G.K. Quiz</a></li>
                                        <li class="element"><a href="event.php?eventno=8">Eloquence</a></li>
                                        <li class="element"><a href="event.php?eventno=9">Mini Soccer</a></li>
                                        <li class="element"><a href="event.php?eventno=10">Roadies 2.0</a></li>
                                        <li class="element"><a href="event.php?eventno=11">Photo-Booth</a></li>
                                        <li class="element"><a href="event.php?eventno=12">Paint-a-toon</a></li>
                                        <li class="element"><a href="event.php?eventno=13">Face Painting</a></li>
                                        <li class="element"><a href="event.php?eventno=14">Rangoli</a></li>
                                        <li class="element"><a href="event.php?eventno=15">Yuva Sabha</a></li>
                                        <li class="element"><a href="event.php?eventno=16">Just-a-minute</a></li>
                                        <li class="element"><a href="event.php?eventno=17">BattleCry</a></li>
                                       
                                        <li class="element"><a href="event.php?eventno=18">Bob-the-bulider</a></li>
                                        <li class="element"><a href="event.php?eventno=19">Funbola</a></li>
                                        
                                    </ul>
                                </li>

                                <li class="mega-menu-column">
                                    <ul>
                                        <br><br>
                                        <li class="element"><a href="event.php?eventno=20">Paint Ball</a></li>
                                        <li class="element"><a href="event.php?eventno=21">Treasure Hunt</a></li>
                                        <li class="element"><a href="event.php?eventno=22">Chill Room</a></li>
                                        <li class="element"><a href="event.php?eventno=23">Junkyard</a></li>                                    
                                        <li class="element"><a href="event.php?eventno=24">Stunt Mania</a></li>
                                        <li class="element"><a href="event.php?eventno=25">Gali Cricket</a></li>
                                        <li class="element"><a href="event.php?eventno=26">Basket Ball</a></li>
                                        <li class="element"><a href="event.php?eventno=27">Volly Ball</a></li>
                                        <li class="element"><a href="event.php?eventno=28">Cricket</a></li>
                                        
                                        <li class="element"><a href="event.php?eventno=29">Carrom</a></li>
                                        <li class="element"><a href="event.php?eventno=30">Kabbadi</a></li>
                                        <li class="element"><a href="event.php?eventno=31">Table Tennis</a></li>
                                        <li class="element"><a href="event.php?eventno=32">Foot Ball(7 ASIDE)</a></li>
                                        <li class="element"><a href="event.php?eventno=33">Shortput and Discus throw</a></li>
                                        <li class="element"><a href="event.php?eventno=34">Tug-of-War</a></li>
                                                                            </ul>
                                </li>
                                <li class="mega-menu-column">
                                    <ul>
                                    <br><br>
                                        
                                        <li class="element"><a href="event.php?eventno=35">Kho-Kho</a></li>
                                        <li class="element"><a href="event.php?eventno=36">Athlitics(100,200 & 400m)</a></li>
                                    <li class="element"><a href="event.php?eventno=37">Solo Dance </a></li>
                                    <li class="element"><a href="event.php?eventno=38">Duet Dance</a></li>
                                    <li class="element"><a href="event.php?eventno=39">Group Dance</a></li>
                                    <li class="element"><a href="event.php?eventno=40">Street Battle</a></li>
                                         <li class="element"><a href="event.php?eventno=41">B-Plan</a></li>
                                        <li class="element"><a href="event.php?eventno=42">Laser Tag</a></li>
                                    <li class="element"><a href="event.php?eventno=43">Chess</a></li>
                                        <li class="element"><a href="event.php?eventno=44">Cross Country(5000M)</a></li>
                                    <li class="element"><a href="event.php?eventno=45">Symphony Solo(Vocal)</a></li>
                                    <li class="element"><a href="event.php?eventno=46">Symphony Duet(Vocal)</a></li>
                                    <li class="element"><a href="event.php?eventno=47">Symphony Solo(Instrumental)</a></li>
                                    <li class="element"><a href="event.php?eventno=48">Symphony Duet(Instrumental)</a></li>
                                
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="gallery.html" class="dropdown-toggle">Gallery</b></a>
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