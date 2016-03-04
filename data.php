<!DOCTYPE html>
<head>
    <title>Database</title>
     <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
    <?php
					session_start();
					if($_SESSION["user"]=="home"){
						header("Location: /moonstone2k16/admin.php");
					}
    ?>
    
    <div class="nav-top">
        <a href="index.html" class="new-logo medi"></a>
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
                    <form class="navbar-form navbar-right" role="search" action="admin.php" method="post">
                        <select name="logout" style="display:none">
                            <option selected>Logout</option>
                        </select>
                        <button style="background: crimson; border-color:crimson; height:40px; border-radius:5px;" type="submit"><strong>Logout</strong></button>
                        <?php
                            if(isset($_POST['logout']))
                            {
                                session_start();
                                unset($_SESSION['user']);
                            }
                            
                        ?>

                    </form>

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
                                        <li class="element"><a href="#">DJ Night</a></li>
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
                                <li><a href="#">Moonstone 2K16</a></li>
                                <li><a href="#">Medicaps University</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="row">
        <div class="col-xs-12 text-center">
            <div class="row">
                <h1>Registration Database</h1>
                <div class="col-xs-12">
                                    </div>
                <br><br>
                
                <form class="form-group" method="get" action="data.php">
                    <div class="col-xs-6 col-xs-offset-3">
                        <select class ="form-control" name="eventname">
                            <option>All Events</option>
                            <option>Event 1</option>
                            <option>Event 2</option>
                            <option>Event 3</option>
                        </select>
                    </div>
                    <div class="col-xs-1"><input type="submit" value="Search" class="btn btn-success"></div>
                </form>
                
                
                
            </div><br>
            <div class='row'>
                <div class="panel panel-default">
                      <div class="panel-heading"><h4><?php
                            if(isset($_GET['eventname']))
								{
									if(!empty($_GET['eventname']))
									{
                                        $event = $_GET['eventname'];
                                        echo '<strong>'.$event.'</strong>';
                                    }
                                }

								
                          
                          ?></h4></div>
                      <div class="panel-body">
                        <table class="table table-striped">
                            <tr style="font-weight: bold;">
                                <td>S. No.</td>
                                <td>Name</td>
                                <td>Gender</td>
                                <td>Email Id.</td>
                                <td>Phone No.</td>
                                <td>College Name</td>
                                <td>Branch</td>
                                <td>Year</td>
                            </tr>
                            
                                <?php
                                if(!@mysql_connect('localhost','root','') || !@mysql_select_db('moonstone2k16'))
                                    {
                                        echo 'The is a problem with the server, please try again later.<br>';
                                    }
                                    else
                                    {

                                    }
                                    if(isset($_GET['eventname'])){
                                    if($_GET['eventname'] == 'All Events'){
                                        $query = "SELECT * FROM registration";
                                        if($query_run = mysql_query($query))
                                            {
                                                while($query_row = mysql_fetch_assoc($query_run))
                                                {    
                                                    $sn = $query_row['Sno.'];
                                                    $name = $query_row['Name'];
                                                    $gender = $query_row['gender'];
                                                    $email = $query_row['email'];
                                                    $phone = $query_row['phone_no.'];
                                                    $clg = $query_row['college_name'];
                                                    $branch = $query_row['branch'];
                                                    $year = $query_row['year'];
                                                    echo '<tr><td>'.$sn.'</td><td>'.$name.'</td><td>'.$gender.'</td><td>'.$email.'</td><td>'.$phone.'</td><td>'.$clg.'</td><td>'.$branch.'</td><td>'.$year.'</td></tr>';


                                    }
                                        }
                                    }
                                        
                                        else{
                                        $query = "SELECT * FROM registration WHERE event_name = '$event'";
                                        if($query_run = mysql_query($query))
                                            {
                                                while($query_row = mysql_fetch_assoc($query_run))
                                                {    
                                                    $sn = $query_row['Sno.'];
                                                    $name = $query_row['Name'];
                                                    $gender = $query_row['gender'];
                                                    $email = $query_row['email'];
                                                    $phone = $query_row['phone_no.'];
                                                    $clg = $query_row['college_name'];
                                                    $branch = $query_row['branch'];
                                                    $year = $query_row['year'];
                                                    echo '<tr><td>'.$sn.'</td><td>'.$name.'</td><td>'.$gender.'</td><td>'.$email.'</td><td>'.$phone.'</td><td>'.$clg.'</td><td>'.$branch.'</td><td>'.$year.'</td></tr>';

                                                }
                                            }
                                            }
                                        }
                                ?>
                            
                        </table>
                      </div>
                </div>
            </div>
        </div>
    </div>  
<script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>
    <script src="js/script.js"></script>
</body>       
       