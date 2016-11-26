<!DOCTYPE html>
<html>
<head>
    <title>Pick'n Win</title>
	<meta charset="utf-8" />
    <link rel="stylesheet" href="assets/jquery.mobile-1.4.5.min.css" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/w3.css" rel="stylesheet" />
    <link href="assets/font-awesome-4.5.0/css/font-awesome.css" rel="stylesheet" />
    
    <script src="assets/jquery.mobile-1.4.5.min.js"></script>
    <script src="assets/projs/gamejs.js"></script>
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        .header-text{ font-family: Brush Script MT, cursive;}
        .cl{text-shadow: 2px 2px 5px white;}
        .co{text-shadow: 2px 2px 5px orange;}
        .cy{text-shadow: 2px 2px 5px yelightyellow;}
        .cb{text-shadow: 2px 2px 5px black;}
        .cp{text-shadow: 2px 2px 5px green;}
    </style>
    <script src="js/game.js" > </script>
    <script>
  //  $(document).ready(function(){
//        $("button").click(function(){
//            $("#div1").load("message.txt #p1", function(responseTxt, statusTxt, xhr){
//                if(statusTxt == "success")
//                    alert("External content loaded successfully!");
//                if(statusTxt == "error")
//                    alert("Error: " + xhr.status + ": " + xhr.statusText);
//            });
//        });
//    });
    </script>
</head>
<body class="w3-light-grey " 
 style="background-image:url(background-imager/Elegant_Background-6.jpg)">
    
    <!---- Nav -->
    <?php include_once ("NavBar.php") ?>
    
    <div class="w3-card-12"><hr /></div>
    <!-- Container -->
    <div class="container-fluid" style="overflow-y: auto; height:470px">
        <div class="w3-row-padding w3-light-grey w3-padding-top w3-margin-top w3-round-medium " >
            <!--Quater-->
            <div class="w3-quarter">
            <div class="w3-card-2 w3-white w3-round w3-border-top" >
                <header class=" w3-padding-4 w3-purple w3-center w3-round">
                <h4 class="header-text w3-xlarge">How To Play</h4> </header>
                <p class="w3-padding">
                    To play the game you simple select 
                    3 lucky numbers that you think 
                    will win out of 10 numbers. 
                </p>
                <hr />
            </div> 
            <div class="w3-card-2 w3-white w3-round-large">
               <p class="w3-padding">
                   You can play as many times as you
                   want. The order of numbers 
                   you've selected does not have to be the same
                   as the winning numbers.<br /> 
                   <a href="#" data-toggle="modal" data-target="#help" class="w3-text-blue">See more...</a>
               </p>
            </div>
            </div>
            <!--Half-->
            <div class="w3-half w3-center">
                
                <div class="w3-card-2 w3-white w3-round-large">
                    <p class="w3-left w3-margin-left"><strong>Start Now :</strong></p><br />
                    <hr />
                    <div>
                        <div class="" id="gm1"> </div>
                        <button disabled="" id="u11" class="w3-btn w3-btn-floating w3-light-grey">
                            <span id="cg1" class="gy"> 1</span>
                        </button>
                        <button disabled=""   id="u2" class="w3-btn w3-btn-floating w3-light-grey">
                            <span id="cg2" class="gy"> 2</span>
                        </button>
                        <button disabled=""  id="u3" class="w3-btn w3-btn-floating w3-light-grey">
                            <span id="cg3" class="gy"> 3</span>
                        </button>
                        <button disabled="" id="u4" class="w3-btn w3-btn-floating w3-light-grey">
                            <span id="cg4" class="gy"> 4</span>
                        </button>
                        <button disabled="" id="u5" class="w3-btn w3-btn-floating w3-light-grey">
                            <span id="cg5" class="gy"> 5</span>
                        </button>
                        <button disabled="" id="u6" class="w3-btn w3-btn-floating w3-light-grey">
                            <span id="cg6" class="gy"> 6</span>
                        </button>
                        <button disabled="" id="u7" class="w3-btn w3-btn-floating w3-light-grey">
                            <span id="cg7" class="gy"> 7</span>
                        </button>
                        <button disabled="" id="u8" class="w3-btn w3-btn-floating w3-light-grey">
                            <span id="cg8" class="gy"> 8</span>
                        </button>
                        <button disabled="" id="u9" class="w3-btn w3-btn-floating w3-light-grey">
                            <span id="cg9" class="gy"> 9</span>
                        </button>
                        <button disabled="" id="u10" class="w3-btn w3-btn-floating w3-light-grey">
                            <span id="cg10" class="gy"> 10</span>
                        </button>
                       
                    </div>
                    <hr />
                        <div class="w3-center w3-margin-left">
                           <p> Choose Level Of The Game | 
                            <button id="cl"  class="w3-white w3-border-0"><span class="w3-text-blue">Change Level</span> </button></p>                        
                            <button  id="L1" class="w3-btn w3-btn-floating w3-large  w3-black">
                                L1
                            </button>
                            <button  id="L2" class="w3-btn w3-btn-floating w3-large  w3-black">
                                L2
                            </button>
                            <button  id="L3" class="w3-btn w3-btn-floating w3-large  w3-black">
                                L3
                            </button>
                        </div>                    
                  
                    <hr />
                    <div>
                  
                         <!--Orange Balls Large Dev-->
                        <div class="w3-left w3-margin-left">
                            <a  class="w3-btn w3-btn-floating w3-deep-orange">
                                <span id="a1"></span>
                            </a>
                            <a  class="w3-btn w3-btn-floating w3-deep-orange">
                                <span id="a2"></span>
                            </a>
                            <a  class="w3-btn w3-btn-floating w3-deep-orange">
                                <span id="a3"></span>
                            </a>
                        </div>
                     
                         <!--Green Balls Large Dev-->
                        <div class="w3-right w3-margin-right">
                            <a  class="w3-btn w3-btn-floating w3-green">
                                <span id="w1"></span>
                            </a>
                            <a  class="w3-btn w3-btn-floating w3-green">
                                <span id="w2"></span>
                            </a>
                            <a class="w3-btn w3-btn-floating w3-green">
                                <span id="w3"></span>
                            </a>
                        </div>
                    </div><br />
                    <hr />
                    <div>
                        <button class="w3-btn w3-light-grey" id="rplay" disabled="">Replay</button>
                        <button disabled="" class="w3-btn w3-light-grey" id="play">Play</button>
                        <button class="w3-btn w3-light-grey" disabled="" id="edit">Edit</button>
                        <hr />
                    </div>
                </div>
            </div>
            <!--Quater-->
            <div class="w3-quarter">
                <div class="w3-white w3-card-2">
                    <header class=" w3-padding-4 w3-purple w3-center w3-round">
                        <h4 class="header-text w3-xlarge w3-text-yellow">Win Win Win !!!</h4>
                    </header>
                    <p class="w3-padding">
                        Win $1000 to $50 000 
                        with Pick'n Win just by simple guessing
                        your 3 lucky numbers. 
                    </p>
                    <hr />
                    <p class="w3-padding">Play with only $5 
                    Dollars and stand a chance to win thousands
                    of dollars in few minutes.</p>
                </div>
                <div class="w3-card-2 w3-white w3-round-large">
                   <p class="w3-padding">
                     <button disabled="" class="btn btn-link w3-purple w3-round fa fa-money"> Claim your prize</button> 
                    <a class="btn btn-link w3-purple w3-round 
                         fa fa-cc-mastercard" href="#" data-toggle="modal" data-target="#winModal" > Pay here</a></p>
                </div>
            </div>
        </div> 
        <hr />   
    </div>
   <?php include_once("ModalWin.htm"); ?>
   <?php include_once ("ContactUs.php") ?>
   <?php include_once("Help.htm") ?>
</body>
</html>
