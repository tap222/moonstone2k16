<?php
					session_start();
					if($_SESSION["user"]=="home"){
						header("Location: /moonstone2k16/admin.php");
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
           </nav>
    </div>
    <div class="row">
        <div class="col-xs-12 text-center">
            <div class="row">
                <h1>Event Details Database</h1><h2><a href="major_data_entry_tool.php">Back to form</a></h2><h2><a href="data.php">Back to Registration Database</a></h2>
                <form class="col-xs-2 col-xs-offset-10" role="search" action="admin.php" method="post">
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
 
                <div class="col-xs-12">
                                    </div>
                
                
                
            </div><br>
            <div class='row'>
                <div class="panel panel-default">
                                            <div class="panel-body">
                        <table class="table table-striped">
                            <tr style="font-weight: bold;">
                                <td>S. No.</td>
                                <td>Event Name</td>
                                <td>Days</td>
                                <td>Date</td>
                                <td>time</td>
                                <td>Venue</td>
                                <td>description</td>
                                <td>Facluty Co-ordinator</td>
                                <td>OC Student 1</td>
                                <td>Student 1 Contact</td>
                                <td>OC Student 2</td>
                                <td>Student 2 Contact</td>
                                <td>Reg. Fee</td>
                                <td>Prizes</td>
                            </tr>
                            
                                <?php
                                if(!@mysql_connect('localhost','moonston_user','user_password') || !@mysql_select_db('moonston_moonstone2k16'))

                                    {
                                        echo 'The is a problem with the server, please try again later.<br>';
                                    }
                                    else
                                    {

                                    }
                                    
                                        $query = "SELECT * FROM event_data";
                                        if($query_run = mysql_query($query))
                                            {
                                                while($query_row = mysql_fetch_assoc($query_run))
                                                {    
                                                    $sn = $query_row['Sno'];
                                                    $name = $query_row['Event_name'];
                                                    $gender = $query_row['days'];
                                                    $email = $query_row['date'];
                                                    $phone = $query_row['time'];
                                                    $clg = $query_row['venue'];
                                                    $branch = $query_row['descript'];
                                                    $year = $query_row['faculty'];
                                                    $year2 = $query_row['student_1'];
                                                    $year3 = $query_row['contact_1'];
                                                    $year4 = $query_row['student_2'];
                                                    $year5 = $query_row['contact_2'];
                                                    $year6 = $query_row['fee'];
                                                    $year7 = $query_row['prize'];
                                                    
                                                    
                                                    echo '<tr><td>'.$sn.'</td><td>'.$name.'</td><td>'.$gender.'</td><td>'.$email.'</td><td>'.$phone.'</td><td>'.$clg.'</td><td>'.$branch.'</td><td>'.$year.'</td><td>'.$year2.'</td><td>'.$year3.'</td><td>'.$year4.'</td><td>'.$year5.'</td><td>'.$year6.'</td><td>'.$year7.'</td></tr>';

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
       