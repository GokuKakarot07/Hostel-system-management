<html>
<head>

<link rel="stylesheet" href="css\bootstrap.css">	
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	    <style>
        body {


            font-family: 'Varela Round', sans-serif;
        }
        .modal-login {    
            color: #636363;
            width: 350px;
            margin: 80px auto 0;
        }
        .modal-login .modal-content {
            padding: 20px;
            border-radius: 5px;
            border: none;
        }
        .modal-login .modal-header {
            border-bottom: none;   
            position: relative;
            justify-content: center;
        }
        .modal-login h4 {
            text-align: center;
            font-size: 26px;
            margin: 30px 0 -15px;
        }
        .modal-login .form-control:focus {
            border-color: #70c5c0;
        }
        .modal-login .form-control, .modal-login .btn {
            min-height: 40px;
            border-radius: 3px; 
        }
        .modal-login .close {
            position: absolute;
            top: -5px;
            right: -5px;
        }  
        .modal-login .modal-footer {
            background: #ecf0f1;
            border-color: #dee4e7;
            text-align: center;
            justify-content: center;
            margin: 0 -20px -20px;
            border-radius: 5px;
            font-size: 13px;
        }
        .modal-login .modal-footer a {
            color: #999;
        }    
        .modal-login .avatar {
            position: absolute;
            margin: 0 auto;
            left: 0;
            right: 0;
            top: -70px;
            width: 95px;
            height: 95px;
            border-radius: 50%;
            z-index: 9;
            background: #96FFF7;

            /*background: #c76f60;*/

            padding: 15px;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
        }
        .modal-login .avatar img {
            width: 100%;
        }
        .modal-login .btn {
            color: #fff;
            border-radius: 4px;
            background: #60c7c1;
            text-decoration: none;
            transition: all 0.4s;
            line-height: normal;
            border: none;
        }
        .modal-login .btn:hover, .modal-login .btn:focus {
            background: #45aba6;
            outline: none;
        }
        .trigger-btn {
            display: inline-block;
            margin: 15px auto;
        }
    </style>
  </head>
<body> 
<div class="container-fluid" style="background-color: #0c2340">
    <div class="row">
        
      <div class="col-1"><img src="logohostel.png" width="100" height="100"> </div>
      <div class="col-11 bgcolor="#980f0f"> 
      <h4 align="right" style="color: #980f0f; background-color: #980f0f" class="rounded-pill" > St Aloysius Gents Hostel</h4>
     <!-- <button type="button" class= btn btn-primary btn-lg btn-block" style="background-color: red" align="right">yes</button>-->
      <div class="container-fluid" style="background-color: #980f0f" class="rounded">
    <div class="row">
      <div class="col-7"><h3 style="color: white; background-color: #0c2340; padding-left: 30px" class="rounded-pill"> St Aloysius Gents Hostel</h3></div>
   
      <div class="col-1" >
      <a href="mainpage2.php" class="trigger-btn">
        <button type="button" class="btn btn-outline-light">Home</button></a>
      </div>
      <div class="col-1">
        <div>
        <!-- Button HTML (to Trigger Modal) -->
        <a href="#myModal" class="trigger-btn" data-toggle="modal"> <button type="button" class="btn btn-outline-light">Login</button></a><br>
        </div></div>

      <div class="col-1">
      <a href="about.html" class="trigger-btn">
        <button type="button" class="btn btn-outline-light">About</button></a>
      </div>
      <div class="col-1">
      <a href="contact.html" class="trigger-btn">
        <button type="button" class="btn btn-outline-light">Contact</button></a>

      </div>
      <div class="col-1">
      <a href="blood.php" class="trigger-btn">
        <button type="button" class="btn btn-outline-light">Blood</button></a>

      </div>
      </div>
      </div>
      <br>
      </div>
      

  </div>
</div> 
	

        <div class="text-center">
      
      

        

	<div id="myModal" class="modal fade">
        <div class="modal-dialog modal-login">
          <div class="modal-content">
            <div class="modal-header">
              <div class="avatar">
                <img src="logohostel.png" alt="Avatar">
              </div>        
              <h4 class="modal-title">Student Login</h4>  
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
              <form action="login1.php" method="post">
                
                        
                <div class="form-group">
                  <input type="text" class="form-control" name="username" placeholder="Username" required="required">    
                </div>
                         
                <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Password" required="required">  
                </div>  
                                
                <div class="form-group">
                  <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block login-btn">Login</button>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <a href="loginwarden.php"><button type="button" class="btn btn-primary"> Login As Warden </button></a>
          <a href="loginadmin.php"><button type="button" class="btn btn-primary"> Login As Admin </button> </a>

            </div>

          </div>
          <br>
          <div align="center">
     <!--     <button type="button" class="btn btn-primary"> <a href="loginadmin.php"> Login As Admin </a></button>
          <button type="button" class="btn btn-primary"> <a href="loginwarden.php"> Login As Warden </a></button>-->
      </div>
     
        </div>

      </div> 

        
        
        
          

      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

<script src="js\bootstrap.js"></script>
</script>    
</body>
</html>