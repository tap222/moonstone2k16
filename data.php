<?php
					session_start();
					if($_SESSION["user"]=="home"){
						header("Location:admin.php");
					}
    ?>
<!DOCTYPE html>
<head>
    <title>Database</title>
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
                                	<li class="element"><a href="event.php?eventno=49">Art Exihibition</a></li>
                                		<li class="element"><a href="event.php?eventno=50">Medicaps Got Talent</a></li>
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
        </nav>
    </div>
    <div class="row">
        <div class="col-xs-12 text-center">
            <div class="row">
                <h1>Registration Database</h1>
                <h4><a href="major_data_entry_tool.php">To Enter the Event Description, Click Here!</a></h4>
                <div class="col-xs-12">
                                    </div>
                <br><br>
                
                <form class="form-group" method="get" action="data.php">
                    <div class="col-xs-6 col-xs-offset-3">
                        <select class ="form-control" name="eventname">
                            <option>All Events</option>
                           <option>Robotics</option>
                            
                                <option>Photography</option>

                                <option>Gaming Box</option>

                                <option>G.K. Quiz</option>

                                <option>Eloquence</option>

                                <option>Art Exhibition</option>

                                <option>Funtakshri</option>

                                <option>Mini Soccer</option>

                                <option>Roadies</option>

                                <option>Photo-Booth</option>

                                <option>Paint-a-toon</option>

                                <option>Face Painting</option>

                                <option>Rangoli</option>

                                <option>Yuva Sabha</option>

                                <option>Just-a-minute</option>

                                <option>BattleCry : Lan Gaming</option>

                                <option>B-Plan</option>

                                <option>Laser Tag</option>

                                <option>Paint Ball</option>

                                <option>Treasure Hunt</option>

                                <option>Chill Room</option>

                                <option>Junkyard</option>

                                <option>Bob-the-builder</option>

                                <option>Funbola</option>

                                <option>Stunt Mania</option>

                                <option>Gali Cricket</option>


                            <option>Basket Ball</option>

                        <option>Volley Ball</option>

                        <option>Cricket</option>

                        <option>Chess</option>

                        <option>Cross Country(5000M)</option>

                        <option>Carrom</option>

                        <option>Kabbadi</option>

                        <option>Kho-Kho</option>

                        <option>Athlitics(100,200&400m)</option>

                        <option>Table Tennis</option>

                        <option>Foot Ball (7ASIDE)</option>

                        <option>SHORTPUT & DISCUS THROW</option>

                        <option>Tug-Of-War</option>
                        <option>Symphony (Vocal Solo)</option>
                        <option>Symphony (Vocal Duet)</option>
                        <option>Symphony (Instrumental Solo)</option>
                        <option>Symphony (Instrumental Duet)</option>
                        <option>Symphony (Band)</option>
                        <option>Solo Dance</option>
                        <option>Group Dance</option>
                        <option>Duet Dance</option>
                        <option>Street Battle</option>

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
                            
                            
                                <?php
                                 if(!@mysql_connect('localhost','moonston_user','user_password') || !@mysql_select_db('moonston_moonstone2k16'))
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
                                            echo '<tr style="font-weight: bold;">
                                <td>S. No.</td>
                                <td>Name</td>
                                <td>Gender</td>
                                <td>Event Name</td>
                                <td>Email Id.</td>
                                <td>Phone No.</td>
                                <td>College Name</td>
                                <td>Branch</td>
                                <td>Year</td>
                            </tr>';
                                                while($query_row = mysql_fetch_assoc($query_run))
                                                {    
                                                    $sn = $query_row['Sno.'];
                                                    $name = $query_row['Name'];
                                                    $gender = $query_row['gender'];
                                                    $email = $query_row['email'];
                                                    $event = $query_row['event_name'];
                                                    $phone = $query_row['phone_no.'];
                                                    $clg = $query_row['college_name'];
                                                    $branch = $query_row['branch'];
                                                    $year = $query_row['year'];
                                                    
                                                    echo '<tr><td>'.$sn.'</td><td>'.$name.'</td><td>'.$gender.'</td><td>'.$event.'</td><td>'.$email.'</td><td>'.$phone.'</td><td>'.$clg.'</td><td>'.$branch.'</td><td>'.$year.'</td></tr>';


                                    }
                                        }
                                    }
                                        
                                        else{
                                        $query = "SELECT * FROM registration WHERE event_name = '$event'";
                                        if($query_run = mysql_query($query))
                                            {
                                             echo '<tr style="font-weight: bold;">
                                <td>S. No.</td>
                                <td>Name</td>
                                <td>Gender</td>
                                <td>Email Id.</td>
                                <td>Phone No.</td>
                                <td>College Name</td>
                                <td>Branch</td>
                                <td>Year</td>
                            </tr>';
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
       