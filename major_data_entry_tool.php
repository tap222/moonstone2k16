<?php
					session_start();
					if($_SESSION["user"]=="home"){
						header("Location: /moonstone2k16/admin.php");
					}
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Moonstone 2K16</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link rel="shortcut icon" type="image/png" href="favicon.png"/>
    <link href="css/custom.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script|Josefin+Sans:400,600' rel='stylesheet' type='text/css'>
</head>
    <style>
        body{
            font-family: Berlin Sans FB;
            
        }
    </style>

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
    <!--header table end-->

    <!--banner table start-->
    <div style="padding-bottom:300px;">
        <div class="row">
            <div class="col-xs-offset-2 col-xs-8">
                <h2 class="text-center">Event Data</h2><h4><a href="event_data.php">Check Event Details DataBase</a></h4><h4><a href="data.php">Back to Registration Database</a></h4>
                <form action="major_data_entry_tool.php" method="post">
                <label>Name of Event</label>
                <select class="form-control" name="event">
                		<option>Melange</option>
                		<option>Spandan</option>
                		<option>DJ Night</option>
                		<option>Celeb Night</option>
                		<option>Eloquence</option>
                		<option>Street Play</option>
                                <option>Robotics</option>
                            	<option>Robotics(main) </option>
                                <option>Robotics : Robo Arena (Robo Colesium) </option>
                                <option>Robotics : Robo Race (Obstruction)</option>
                            	<option>Robotics : Line Follower </option>
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
                        <option>Solo dance</option>
			<option>Duet dance</option>
			<option>Group dance</option>
			<option>Street battle</option>
			<option>Medicaps Got Talent</option>

                </select>
                <label>No. of Days it will be held</label>
                <select class="form-control" name="days">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>
                <label>Date of Event</label>
                <input type="date" class="form-control" name="date" placeholder="Add Date/Dates">
                <label>Time of Event</label>
                <input type="time" class="form-control" name="time"><br>
                <label>Venue of Event:</label>
                <input type="text" class="form-control" name="venue" placeholder="venue"><br>
                <label>Description of Event (Upto 2000 words allowed)</label><br>
                <textarea rows="10" cols="130" class="form-control" name="description"></textarea><br><br>
                <label>Name of Faculty Coordinator</label>
                <input type="text" placeholder="Name of faculty Co-ordinator" name="faculty" class="form-control"><br>
                <label>Organizing Commitee Members Details</label>
                <input type="text" class="form-control" placeholder="Name of Student 1" name="student1"><br>
                <input type="text" class="form-control" placeholder="Contact Number of Student 1" name="contact1"><br>
                <input type="text" class="form-control" placeholder="Name of Student 2" name="student2"><br>
                <input type="text" class="form-control" placeholder="Contact Number of Student 2" name="contact2"><br>
                <label>Registration Fees (if any)</label>
                <input type="text" class="form-control" placeholder="Registration Fees" name="fee"><br>
                <label>Prizes(if any else type null)</label>
                <input type="text" class="form-control" placeholder="Prizes" name="prize"><br>
                <button class="btn btn-success" type="submit">Submit</button> 
                    
                <?php
                    if(!@mysql_connect('localhost','moonston_user','user_password') || !@mysql_select_db('moonston_moonstone2k16'))
                        {
                            echo 'The is a problem with the server, please try again later.<br>';
                        }
                        else
                        {
                            
                            }
    
                
                    if(@isset($_POST['event'])&& @isset($_POST['days']) && @isset($_POST['date']) && @isset($_POST['time']) && @isset($_POST['venue']) && @isset($_POST['description']) && @isset($_POST['faculty']) && @isset($_POST['student1']) && @isset($_POST['contact1']) && @isset($_POST['student2']) && @isset($_POST['contact2']) && @isset($_POST['prize']))
                    {
                        $event = (string)$_POST['event'];
                        $days = (string)$_POST['days'];
                        $date = (string)$_POST['date'];
                        $time = (string)$_POST['time'];
                        $venue = (string)$_POST['venue'];
                        $description = (string)$_POST['description'];
                        $faculty = (string)$_POST['faculty'];
                        $student1 = (string)$_POST['student1'];
                        $contact1 = (string)$_POST['contact1'];
                        $student2 = (string)$_POST['student2'];
                        $contact2 = (string)$_POST['contact2'];
                        $fee = (string)$_POST['fee'];
                        $prize = (string)$_POST['prize'];
                        
                        if(!empty($event) && !empty($days) && !empty($date)&& !empty($time)&& !empty($venue)&& !empty($description)&& !empty($faculty) && !empty($student1) && !empty($contact1) && !empty($student2) && !empty($contact2) && !empty($fee) && !empty($prize)){
                            $query1 = "INSERT into event_data VALUES ('', '$event' , '$days' , '$date', '$time', '$venue' , '$description' , '$faculty', '$student1', '$contact1', '$student2', '$contact2', '$fee','$prize')";
                            if(@mysql_query($query1)){
                                echo 'Data Submitted';
                            }
                            else
                            {
                                echo 'Submission Failed';
                            }
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
    </div>
    <!--banner table end-->

    <!--footer table start-->
    <footer>
        <!--top footer start-->
        <div class="top_footer footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <h1>Contact</h1>
                        <p>
                            <STRONG>Medi-Caps University Indore</STRONG>
                        </p>
                        <p>A.B. Road, Pigdamber, Rau </p>
                        <p>Indore - 453331</p>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <h1>Sponsors</h1>
                        <!--<ul>
                            <li><a href="#"><i class="fa fa-long-arrow-right"></i> News Detail 1</a></li>
                            <li><a href="#"><i class="fa fa-long-arrow-right"></i> News Detail 1</a></li>
                            <li><a href="#"><i class="fa fa-long-arrow-right"></i> News Detail 1</a></li>
                        </ul>-->
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <h1 class="rgt_align">Stay Up to Date</h1>
                        <div class="footer_social">
                            <ul class="nav navbar-nav navbar-social">
                                <li><a class="push" target="_blank" href="https://www.facebook.com/moonstone2k16/?fref=ts"><i class="fa fa-facebook fa-2x"></i></a></li>
                                <li><a class="push" target="_blank" href="https://www.instagram.com/moonstone2k16/"><i class="fa fa-instagram fa-2x"></i></a></li>
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
                            <li><a href="admin.php">Admin's Login</a></li>
                            <li>|</li>
                            <li><a href="#">Event Disclaimer</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--lower footer end-->
    </footer>
    <!--footer table end-->

    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>
    <script src="js/script.js"></script>
</body>

</html>