<?php
require_once('DBconnection.php');

if (isset($_POST['id'])) {
	$u = $_POST['id'];
	
	$sql = "SELECT name FROM movie WHERE id = '$u'";
	
    $result = mysqli_query($conn,$sql);

    		while($row = $result->fetch_assoc()){ 
		 
        //echo"<tr>"; echo"<td>";  echo$row["name"]; echo"</td>"; echo"</tr>" ;
		}
}

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
	
	<style> 
input[type=text] {
  width: 230px;
 
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 20px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 20px 20px; 
  background-repeat: no-repeat;
  padding: 15px 25px 15px 50px;
  -webkit-transition: width .40s ease-in-out;
  transition: width .40s ease-in-out;
}

input[type=text]:focus {
  width: 30%;
}
</style>

<style>
p {
  color: white;
  text-indent: 50px;
  text-transform: uppercase;
}
</style>
	
<title>Hompage</title>
</head>
<body>
 <h1 style="text-align:center">IMDB</h1>
 <nav>
 <ul>
    <li><a href = "homepage.php">Homepage</a> </li>
	<li><a href = "#">GENRE</a> 
		<ul> 
			<li><a href = "#">Horror</a> </li>
			<li><a href = "#">Drama</a> </li>
			<li><a href = "#">Sci-Fi</a> </li>
			<li><a href = "action.php">Action</a> </li>
			<li><a href = "#">Crime</a> </li>
			<li><a href = "#">Romantic</a> </li>
			<li><a href = "#">Animation</a> </li>
			<li><a href = "#">Thriller</a> </li>
			
			
		</ul>
	</li>
	<li><a href = "edit.php">Edit User Info</a></li>
	<li><a href = "newreleased.php">New_Released</a> </li>
	<li><a href = "#">Admin</a> 
	    <ul> 
			<li><a href = "#">Add_Column</a> </li>
			</ul> </li>
	
</ul>
                 <p style="font-size:120%;">SEARCH MOVIES</p>

<form action="homepage.php" method="post">
  <input type="text" name="search" placeholder="Search..">
</form>
          <div class="search-btn"><i class="icon_search"></i> </div>
		  
			
		</div>




</nav>
                    <div class="p-t-31 p-b-9">
						<span class="txt1">
							FEATURED
						</span>
					</div>
					

	<style>
	body{
		background-image: url('images/1.jpg');
		background-repeat:no-repeat;
		background-size: cover;
		
	}

table {
	
	
	

width: 10%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: center;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(n) {background-color: #f2f2f2}

table.center {
  margin-left:auto; 
  margin-right:auto;
}

</style>






</head>


</body>
<?php
require_once('DBconnection.php');

if (isset($_POST['id'])) {
	$u = $_POST['id'];
	
	$sql = "SELECT name FROM movie WHERE id = '$u'";
	
    $result = mysqli_query($conn,$sql);

    		while($row = $result->fetch_assoc()){ 
		 
        echo"<tr>"; echo"<td>";  echo$row["name"]; echo"</td>"; echo"</tr>" ;
		}
}

?>


