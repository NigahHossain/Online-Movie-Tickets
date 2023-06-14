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
 <h1 style="text-align:center">WELCOME TO ADMIN PANEL OF IMDB</h1>
 <nav>
 <ul>
    <li><a href = "privilege.php">User privilege</a> </li>
	
	<li><a href = "newcolumn.php">New column</a> </li>
	<li><a href = "#">Feature movie</a> </li>
	    
	
</ul>
</nav>
</body>
	
