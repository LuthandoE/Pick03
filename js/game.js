  $(function () {
            
           (function(){
               $(".gy").addClass("w3-text-light-grey");
               $("#cl").hide();
            })();
            //Checking if balls 1/2/3 is empty 
            function selectNum(userc1, userc2, userc3, num) {
                if ($(userc1).text().trim() == "") {
                    $(userc1).text(num);
                    
                } else if ($(userc2).text().trim() == "") {
                    $(userc2).text(num);
                    
                } else if ($(userc3).text().trim() == "") {
                    $(userc3).text(num);
                } else {
              
                    $("#gm1").
                        html("<p class='w3-text-red'>Click edit if you want to make changes!</p>").
                        addClass("w3-white w3-round w3-text-red");
                    if ($("#w1").text().trim() == "") {
                        $("#edit").removeAttr("disabled");
                        $("#edit").removeClass("w3-light-grey").
                        addClass("w3-red");
                    } else {
                        $("#gm1").html("<p class='w3-text-red'>Error: You can't make changes at this stage!</p>");
                    }
                }
            }
       
            //Showing users selection and generated numbers - Level one
            function radGenOne(userno1,userno2,userno3,
                 wnum1, wnum2, wnum3,dvresult) {
                $(wnum1).text("" + Math.floor((Math.random() * 5) + 1));
                $(wnum2).text("" + Math.floor((Math.random() * 5) + 1));
                $(wnum3).text("" + Math.floor((Math.random() * 5) + 1));
                    
            }
            //Showing users selection and generated numbers - Level two
            function radGenTwo(userno1,userno2,userno3,
                 wnum1, wnum2, wnum3,dvresult) {
                $(wnum1).text("" + Math.floor((Math.random() * 7) + 1));
                $(wnum2).text("" + Math.floor((Math.random() * 7) + 1));
                $(wnum3).text("" + Math.floor((Math.random() * 7) + 1));
            }
            //Showing users selection and generated numbers - Level three
            function radGenThree(userno1,userno2,userno3,
                 wnum1, wnum2, wnum3,dvresult) {
                $(wnum1).text("" + Math.floor((Math.random() * 10) + 1));
                $(wnum2).text("" + Math.floor((Math.random() * 10) + 1));
                $(wnum3).text("" + Math.floor((Math.random() * 10) + 1));
            }
            //function compareNum(usernum1){
//                if($(usernum1).text().trim()== "4"){
//                    $("#gm1").html("<p class='w3-text-red'>Error: You can't make changes at this stage!</p>");
//                } else {
//                    $("#gm1").html("<p class='w3-text-red'>aybo ey: You can't make changes at this stage!</p>");
//                }
//            }
                
            
            // Make a selection for - Level One
            
            /*  If ball 1 is clicked function selectNum will check if 
               orange ball 1/2/3 is empty and place 1 on an empty ball.*/
               
            $("#u11").click(function () {
                selectNum("#a1", "#a2", "#a3", "1");
            })
            $("#u2").click(function () {
                selectNum("#a1", "#a2", "#a3", "2");
            })
            $("#u3").click(function () {
                selectNum("#a1", "#a2", "#a3", "3");
            })
            $("#u4").click(function () {
                selectNum("#a1", "#a2", "#a3", "4");
            })
            $("#u5").click(function () {
                selectNum("#a1", "#a2", "#a3", "5");
            })
            // Make a selection for -  Level Two
            $("#u6").click(function () {
                selectNum("#a1", "#a2", "#a3", "6");
            })
            $("#u7").click(function () {
                selectNum("#a1", "#a2", "#a3", "7");
            })
            $("#u8").click(function () {
                selectNum("#a1", "#a2", "#a3", "8");
            })
            $("#u9").click(function () {
                selectNum("#a1", "#a2", "#a3", "9");
            })
            $("#u10").click(function () {
                selectNum("#a1", "#a2", "#a3", "10");
            })
            // Make a selection for -  Level Three
            $("#rplay").click(function () {
                $("#a1").text("");
                $("#a2").text("");
                $("#a3").text("");

                $("#w1").text("");
                $("#w2").text("");
                $("#w3").text("");
                $("#play").removeAttr("disabled");
                $("#play").removeClass("w3-light-grey").addClass("w3-blue");
                $("#rplay").attr("disabled", true).addClass("w3-light-grey");
                $("#gm1").text("");
                $("#cl").removeAttr("disabled");
            });
            
            $("#edit").click(function () {
                $("#a1").text("");
                $("#a2").text("");
                $("#a3").text("");
                $("#gm1").text("");
         
            });
            $("#cl").click(function(){
                $("#L1").removeAttr("disabled").removeClass("w3-light-grey");    
                $("#L2").removeAttr("disabled").removeClass("w3-light-grey");
                $("#L3").removeAttr("disabled").removeClass("w3-light-grey");
                
                
                $("#u11").attr("disabled",true);
                $("#u11").addClass("w3-light-grey");
                $("#cg1").addClass("w3-text-light-grey");
                
                $("#u2").attr("disabled",true);
                $("#u2").addClass("w3-light-grey");
                $("#cg2").addClass("w3-text-light-grey");
                
                $("#u3").attr("disabled",true);
                $("#u3").addClass("w3-light-grey");
                $("#cg3").addClass("w3-text-light-grey");
                
                $("#u4").attr("disabled",true);
                $("#u4").addClass("w3-light-grey");
                $("#cg4").addClass("w3-text-light-grey");
                
                $("#u5").attr("disabled",true);
                $("#u5").addClass("w3-light-grey");
                $("#cg5").addClass("w3-text-light-grey");
                
                $("#u6").attr("disabled",true);
                $("#u6").addClass("w3-light-grey");
                $("#cg6").addClass("w3-text-light-grey");
                
                $("#u7").attr("disabled",true);
                $("#u7").addClass("w3-light-grey");
                $("#cg7").addClass("w3-text-light-grey");
                
                $("#u8").attr("disabled",true);
                $("#u8").addClass("w3-light-grey");
                $("#cg8").addClass("w3-text-light-grey");
                
                $("#u9").attr("disabled",true);
                $("#u9").addClass("w3-light-grey");
                $("#cg9").addClass("w3-text-light-grey");
                
                $("#u10").attr("disabled",true);
                $("#u10").addClass("w3-light-grey");
                $("#cg10").addClass("w3-text-light-grey");
                
                $("#a1").text("");
                $("#a2").text("");
                $("#a3").text("");
                $("#play").attr("disabled",true);
                $("#play").addClass("w3-light-grey");
            });
            $("#L1").click(function(){
                $("#u11").removeAttr("disabled");
                $("#u11").removeClass("w3-light-grey").addClass("w3-amber");
                $("#cg1").removeClass("w3-text-light-grey");
                
                $("#u2").removeAttr("disabled");
                $("#u2").removeClass("w3-light-grey").addClass("w3-amber");
                $("#cg2").removeClass("w3-text-light-grey");
                
                $("#u3").removeAttr("disabled");
                $("#u3").removeClass("w3-light-grey").addClass("w3-amber");
                $("#cg3").removeClass("w3-text-light-grey");
                
                $("#u4").removeAttr("disabled");
                $("#u4").removeClass("w3-light-grey").addClass("w3-amber");
                $("#cg4").removeClass("w3-text-light-grey");
                
                $("#u5").removeAttr("disabled");
                $("#u5").removeClass("w3-light-grey").addClass("w3-amber");
                $("#cg5").removeClass("w3-text-light-grey");
                
                $("#u6").attr("disabled",true);
                $("#u6").addClass("w3-light-grey");
                $("#cg6").addClass("w3-text-light-grey");
                
                $("#u7").attr("disabled",true);
                $("#u7").addClass("w3-light-grey");
                $("#cg7").addClass("w3-text-light-grey");
                
                $("#u8").attr("disabled",true);
                $("#u8").addClass("w3-light-grey");
                $("#cg8").addClass("w3-text-light-grey");
                
                $("#u9").attr("disabled",true);
                $("#u9").addClass("w3-light-grey");
                $("#cg9").addClass("w3-text-light-grey");
                
                $("#u10").attr("disabled",true);
                $("#u10").addClass("w3-light-grey");
                $("#cg10").addClass("w3-text-light-grey");
                
                $("#L1").attr("disabled",true).addClass("w3-light-grey");
                $("#L2").attr("disabled",true).addClass("w3-light-grey");
                $("#L3").attr("disabled",true).addClass("w3-light-grey");
                $("#cl").fadeIn(3000);
               
                $("#play").removeAttr("disabled");
                $("#play").removeClass("w3-light-grey");
                 $("#play").addClass("w3-blue");
                 
                $("#play").click(function () {
                if ($("#a1").text().trim() == "" || $("#a2").text().trim() == ""
                    || $("#a3").text().trim() == "") {
                    $("#gm1").html("<p class='w3-text-red'>Error: \
                           Please select your lucky 3 numbers </p>");
                } else {

                    radGenOne("#a1","#a2","#a3","#w1", "#w2", "#w3","#gm1");
                    compareNum("#a1");
                    $("#play").attr("disabled", true).
                     addClass("w3-light-grey");
                    $("#edit").attr("disabled", true).
                    addClass("w3-light-grey");
                    $("#rplay").removeAttr("disabled");
                    $("#rplay").removeClass("w3-light-grey").addClass("w3-blue");
                    $("#gm1").text("");
                    $("#cl").attr("disabled",true);
                }
            });
            }); 
            $("#L2").click(function(){
                $("#u11").removeAttr("disabled");
                $("#u11").removeClass("w3-light-grey").addClass("w3-amber");
               // $(".gy").removeClass("w3-text-light-grey");
                $("#cg1").removeClass("w3-text-light-grey");
                
                $("#u2").removeAttr("disabled");
                $("#u2").removeClass("w3-light-grey").addClass("w3-amber");
                $("#cg2").removeClass("w3-text-light-grey");
                
                $("#u3").removeAttr("disabled");
                $("#u3").removeClass("w3-light-grey").addClass("w3-amber");
                $("#cg3").removeClass("w3-text-light-grey");
                
                $("#u4").removeAttr("disabled");
                $("#u4").removeClass("w3-light-grey").addClass("w3-amber");
                $("#cg4").removeClass("w3-text-light-grey");
                
                $("#u5").removeAttr("disabled");
                $("#u5").removeClass("w3-light-grey").addClass("w3-amber");
                $("#cg5").removeClass("w3-text-light-grey");
                
                $("#u6").removeAttr("disabled");
                $("#u6").removeClass("w3-light-grey").addClass("w3-amber");
                $("#cg6").removeClass("w3-text-light-grey");
                
                $("#u7").removeAttr("disabled");
                $("#u7").removeClass("w3-light-grey").addClass("w3-amber");
                $("#cg7").removeClass("w3-text-light-grey");
                
                $("#u8").attr("disabled",true);
                $("#u8").addClass("w3-light-grey");
                $("#cg8").addClass("w3-text-light-grey");
                
                $("#u9").attr("disabled",true);
                $("#u9").addClass("w3-light-grey");
                $("#cg9").addClass("w3-text-light-grey");
                
                $("#u10").attr("disabled",true);
                $("#u10").addClass("w3-light-grey");
                $("#cg10").addClass("w3-text-light-grey");
                
               
                $("#play").removeAttr("disabled");
                $("#play").removeClass("w3-light-grey");
                $("#play").addClass("w3-blue");
                
                $("#L1").attr("disabled",true).addClass("w3-light-grey");
                $("#L2").attr("disabled",true).addClass("w3-light-grey");
                $("#L3").attr("disabled",true).addClass("w3-light-grey");
                $("#cl").fadeIn(3000);
                
                $("#play").click(function () {
                if ($("#a1").text().trim() == "" || $("#a2").text().trim() == ""
                    || $("#a3").text().trim() == "") {
                    $("#gm1").html("<p class='w3-text-red'>Error: \
                           Please select your lucky 3 numbers </p>");
                } else {

                    radGenTwo("#a1","#a2","#a3","#w1", "#w2", "#w3","#gm1");
                    
                    $("#play").attr("disabled", true).
                     addClass("w3-light-grey");
                    $("#edit").attr("disabled", true).
                    addClass("w3-light-grey");
                    $("#rplay").removeAttr("disabled");
                    $("#rplay").removeClass("w3-light-grey").addClass("w3-blue");
                    $("#gm1").text("");
                    $("#cl").attr("disabled",true);

                }
            });
            });  
            $("#L3").click(function(){
                $("#u11").removeAttr("disabled");
                $("#u11").removeClass("w3-light-grey").addClass("w3-amber");
                $("#cg1").removeClass("w3-text-light-grey");
                
                
                $("#u2").removeAttr("disabled");
                $("#u2").removeClass("w3-light-grey").addClass("w3-amber");
                $("#cg2").removeClass("w3-text-light-grey");
                
                $("#u3").removeAttr("disabled");
                $("#u3").removeClass("w3-light-grey").addClass("w3-amber");
                $("#cg3").removeClass("w3-text-light-grey");
                
                $("#u4").removeAttr("disabled");
                $("#u4").removeClass("w3-light-grey").addClass("w3-amber");
                $("#cg4").removeClass("w3-text-light-grey");
                
                $("#u5").removeAttr("disabled");
                $("#u5").removeClass("w3-light-grey").addClass("w3-amber");
                $("#cg5").removeClass("w3-text-light-grey");
                
                $("#u6").removeAttr("disabled");
                $("#u6").removeClass("w3-light-grey").addClass("w3-amber");
                $("#cg6").removeClass("w3-text-light-grey");
                
                $("#u7").removeAttr("disabled");
                $("#u7").removeClass("w3-light-grey").addClass("w3-amber");
                $("#cg7").removeClass("w3-text-light-grey");
                
                $("#u8").removeAttr("disabled");
                $("#u8").removeClass("w3-light-grey").addClass("w3-amber");
                $("#cg8").removeClass("w3-text-light-grey");
                
                $("#u9").removeAttr("disabled");
                $("#u9").removeClass("w3-light-grey").addClass("w3-amber");
                $("#cg9").removeClass("w3-text-light-grey");
                
                $("#u10").removeAttr("disabled");
                $("#u10").removeClass("w3-light-grey").addClass("w3-amber");
                $("#cg10").removeClass("w3-text-light-grey");
                
                $("#L1").attr("disabled",true).addClass("w3-light-grey");
                $("#L2").attr("disabled",true).addClass("w3-light-grey");
                $("#L3").attr("disabled",true).addClass("w3-light-grey");
               
                $("#play").removeAttr("disabled");
                $("#play").removeClass("w3-light-grey");
                $("#play").addClass("w3-blue");
                $("#cl").fadeIn(3000);
                
                $("#play").click(function () {
                if ($("#a1").text().trim() == "" || $("#a2").text().trim() == ""
                    || $("#a3").text().trim() == "") {
                    $("#gm1").html("<p class='w3-text-red'>Error: \
                           Please select your lucky 3 numbers </p>");
                } else {

                    radGenThree("#a1","#a2","#a3","#w1", "#w2", "#w3","#gm1");
                    
                    $("#play").attr("disabled", true).
                     addClass("w3-light-grey");
                    $("#edit").attr("disabled", true).
                    addClass("w3-light-grey");
                    $("#rplay").removeAttr("disabled");
                    $("#rplay").removeClass("w3-light-grey").addClass("w3-blue");
                    $("#gm1").text("");
                    $("#cl").attr("disabled",true);
                }
            });
            });
                
        });