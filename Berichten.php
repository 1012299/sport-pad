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

<a class='dropdown-button btn' href='#' data-activates='dropdown1'>Drop Me!</a>
  <img class="logo" src="Images/logo.png" style="height: 180px; margin-left: 5%; margin-top: -6%;">
  <ul id='dropdown1' class='dropdown-content'>
    <li><a href="#!">one</a></li>
    <li><a href="#!">two</a></li>
    <li class="divider"></li>
    <li><a href="#!">three</a></li>
    <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
    <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
  </ul>

  </div>
 <div class="nxt">Sport-Pad &nbsp;></div> 
 <div class="nxt2">Berichten</div>
 





  <ul id="slide-out" class="side-nav fixed">
    <li><div class="userView">
      <div class="background">
        
      </div>
      <a href="#!user"><img class="circle" src="Images/logovb.png" style="height: 110px; width: 100px; margin-left: -5%;"></a><div class="Username" style="float: right; margin-top: -100px; margin-left: 40px;"><b>Heino</b><br>Voetbal vereniging</div>
      <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li>
    <li><a class="waves-effect" href="Profiel.php">Profiel<i class="material-icons">chat_bubble_outline
</i></a></li>
    <li><a class="waves-effect" href="Berichten.php">Berichten<i class="material-icons">perm_identity
</i></a></li>
    <li><div class="divider"></div></li>
    <li><a class="waves-effect" href="Home.php">Terug<i class="material-icons">replay</i></a></li>
  </ul>
  <a href="#" data-activates="slide-out" class="button-collapse"></a>





		<div class="Box">
	


			


 <div class="col s12 m7">
    <div class="card horizontal">
      <div class="card-image">
        <img src="Images/msg1.png">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p>Hallo, ik vroeg mij af of jullie gebruik maken van kunstof gras?</p>
        </div>
        <div class="card-action">
          <a href="#">beantwoord</a>
        </div>
      </div>
    </div>
  </div>
            <div class="col s12 m7">
    <div class="card horizontal">
      <div class="card-image">
        <img src="Images/msg2.png">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p>Beste Heino<br>
            Zou ik bij jullie eens een dagje meekunnen lopen?
            Ik wil graag weten hoe jullie te werk gaan qua training.<br>
            Hoor graag van u!

</p>
        </div>
        <div class="card-action">
          <a href="#">beantwoord</a>
        </div>
      </div>
    </div>
  </div>


<img src="Images/Msg3.png" style="height: 320px; width: 950px; margin-top: -180px;">



      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="./js/materialize.min.js"></script>
      <script> // Initialize collapse button'


      $(function(){
      	$(".button-collapse").sideNav();
      })
        </script>

      </body>
