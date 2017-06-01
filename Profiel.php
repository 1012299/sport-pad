<!DOCTYPE html>
<head>
    <title>Sportpad</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>



</head>
<body>
<div class="top">

    <div id="boxshadow">
        <div class="dropdown">
            <button class="dropbtn">Heino Voetbal</button>
            <div class="dropdown-content">
                <a href="#">zakkelijk</a>
                <a href="Profiel.php">Profiel</a>
                <a class="info" href="#">info</a>
            </div>
        </div>
    </div>

  </div>
 <div class="nxt">Sport-Pad &nbsp;></div> 
 <div class="nxt2">Profiel</div>
 





  <ul id="slide-out" class="side-nav fixed">
    <li><div class="userView">
      <div class="background">
        
      </div>
      <a href="#!user"><img class="circle pulse" src="Images/logovb.png" style="height: 110px; width: 100px; margin-left: -5%;"></a><div class="Username" style="float: right; margin-top: -100px; margin-left: 40px;"><b>Heino</b><br>Voetbal vereniging</div>
      <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li>
    <li><a class="waves-effect  " href="Profiel.php">Profiel<i class="material-icons">chat_bubble_outline
</i></a></li>
    <li><a class="waves-effect " href="Berichten.php">Berichten<i class="material-icons">perm_identity
</i></a></li>
    <li><div class="divider"></div></li>
    <li><a class="waves-effect pulse" href="home.php">Terug<i class="material-icons">replay</i></a></li>
  </ul>
  <a href="#" data-activates="slide-out" class="button-collapse"></a>





		<div class="Box">
	

			<img class="circle" src="Images/logovb.png" style="height: 140px; width: 130px; margin-left: 60%; margin-top: 2%;">

			<a href="" class="waves-effect waves-light btn" style="margin-left: 76.5%; margin-top: -18%;">Upload</a>








 			<div class="row">
    			<form class="col s12">
      			<div class="row ">
       				 <div class="input-field col s6">
          				<input placeholder="Heino" id="first_name" type="text" class="validate">
          				<label for="first_name" class="pulse">Naam vereniging : </label>
        			</div>
        
      			</div>
      		<div class="row">
       	 <div class="input-field col s12">
          <input placeholder="Voetbal" id="disabled" type="text" class="validate">
          <label for="disabled">Catogorie : </label>
        </div>
      </div>
      


        <div class="row">
        <div class="input-field col s12">
          <input placeholder="HeinoVoetbal.nl" id="email" type="email" class="validate">
          <label for="email">Site : </label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="9382LZ" id="tags" type="password">
          <label for="password">Postcode : </label>
        </div>
		</div>
      <div class="row">
        <div class="col s12">
                  <label for="textarea1">Informatie : </label>

          <textarea id="textarea1" class="materialize-textarea"></textarea>
          </div>
        </div>
      </div>
    	</form>
  	</div>









      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="./js/materialize.min.js"></script>
      <script> // Initialize collapse button'


      $(function(){
      	$(".button-collapse").sideNav();
      })
        </script>

      </body>
