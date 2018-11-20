<!DOCTYPE html>
<html>
<head>

<title>EGY Healthcare System</title>

<style>
a:link {
    text-decoration: none;
}

a:visited {
    text-decoration: none;
}

a:hover {
    text-decoration: none;
}

a:active {
    text-decoration: none;
}

#logo { position: absolute; top: 0px; left: 200px; width: 200px }
#position_home { position: absolute; top: 57px; left: 680px; width: 200px ;font-size:25px}
#position_about { position: absolute; top: 57px; left:880px; width: 200px ;font-size:25px}
#position_sign { position: absolute; top: 57px; left: 1080px; width: 200px ;font-size:25px}

body, html {
    height: 100%;
    margin: 0;
}


.bg {

    background-image: url("wallpaper.jpg");

    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.button_symp {
            
			border-radius: 8px;
            background-color: #008CBA;
			width: 300px;
			height:200px;
			font-size: 25px;
			color: white;
			
			position: absolute; top: 400px; left: 200px;

}

.button_dep {
            
			border-radius: 8px;
            background-color: #008CBA;
			width: 300px;
			height:200px;
			font-size: 25px;
			color: white;
			
			position: absolute; top: 400px; left: 615px;

}

.button_dr {
            
			border-radius: 8px;
            background-color: #008CBA;
			width: 300px;
			height:200px;
			font-size: 25px;
			color: white;
			
			position: absolute; top: 400px; left: 1020px;

}
input[type=text] {
    width: 100%;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
}



</style>

</head>
<body>

<div style="background-color:white;color:brown;padding:20px;height:120px">

  <div id="logo">
  <img src="logo.jpg" alt="logo">
  </div>
  
  <a id="position_home" href="https://www.w3schools.com/html/" target="_self">Home</a> 
  
  <a id="position_about" href="https://www.w3schools.com/html/" target="_self">About us</a> 
  
  <a id="position_sign" href="https://www.w3schools.com/html/" target="_self">Sign up/Login</a>
   
 </div>
   
   <div class="bg">
  
   <p>Input with icon:</p>

<form>
  <input type="text" name="search" placeholder="Search..">
</form>
   
   </div>
 
 

</body>
</html>