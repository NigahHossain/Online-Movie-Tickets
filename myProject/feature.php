<?php
require_once('DBconnection.php');;
session_start();
  
    $username = $_SESSION['u'];

    
	$sql = " SELECT * FROM signup WHERE username= '$username' ";

    $result = mysqli_query($conn,$sql);

    $row = $result->fetch_assoc()
?>
<style>

nav ul {
  list-style: none;
  background-color: #444;
  text-align: center;
  padding: 0;
  margin: 0;
}

nav li {
    width: 20%;
    height: 50px;
    line-height: 50px;
    font-size: 140%;
    display: inline-block;
    margin-right: -4px;
  }



nav a {
  text-decoration: none;
  color: #fff;
  display: block;
  padding-left: 5px;
  transition: .5s background-color;
}

nav a:hover {
  background-color: #005f5f;
}

nav a.active {
  background-color: #aaa;
  color: #444;
  cursor: default;
}

/* Sub Menus */
nav li li {
  font-size: .8em;
}

nav li ul {
    position: absolute;
    display: none;
    width: inherit;
}

nav li:hover ul {
   display: block;
}

nav li ul li {
   display: block;
 }



	body{
		background-image: url('images/1.jpg');
		background-repeat:no-repeat;
		background-size: cover;
		
	}
	</style>
	

</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/1.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form class="login100-form validate-form flex-sb flex-w" action="f2.php" method="post">
					<span class="login100-form-title p-b-53">
						Sign In IMDB With
					</span>


					
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Movie You want to FEATURE
						</span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "Movie">
					    
					   
					   
						<input class="input100" type="text"  name="id" >
						<span class="focus-input100"></span>
						
					</div>
					

					<div class="container-login100-form-btn m-t-17">
					    
						
						<button class="login100-form-btn"  type="submit" formaction="f2.php" >
						
						Confirm
						 
						
						
						
								
						</button>
					    
						
					</div>
					
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>
	
