<!DOCTYPE html> 
<html>
    <head>
        <title>Admin Page</title>
        <link rel="stylesheet" href="css/bootstrap.css"></link>
    <link rel="stylesheet" href="css/bootstrap-theme.css"></link>
    <link rel="stylesheet" href="css/sidebar.css"></link>
    
    <!--Importing the required javascripts -->
    <script type="text/javascript" src="js/angular.js"></script>
    <script type="text/javascript" src="js/angular-route.js"></script>
    <script type="text/javascript" src="js/jquery-2.2.0.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/userRouter.js"></script>
    <script type="text/javascript" src="js/ui-bootstrap-tpls.min.js"></script>
    <script type="text/javascript" src="js/ui-bootstrap-tpls-1.1.0.js"></script>
    
    </head>
    <body>
        
         <div class="container">  
     <br><br>
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title"> Login</div>
                        
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                        <form id="loginform" class="form-horizontal" role="form" method="post">
                                <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">                                        
                                </div>
                                
                                <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                </div>
                                    

                                <div class="checkbox">
                                    <label><input id="login-remember" type="checkbox" name="remember" value="1"> Remember me</label>
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
                            
                        if(@isset($_POST['username'])&& @isset($_POST['password'])){
                            $name = (string)$_POST['username'];
                            $pass = (string)$_POST['password'];
                            $query1 = "SELECT * from login"
                        }

                        ?>
                        </form>     
                    </div>                     
                </div>  
            </div>
</div>

    </body>
</html>