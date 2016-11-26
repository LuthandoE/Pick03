    <?php
    $message = "";
    if(isset($_POST['btn_send'])){
        $to = "luthandodlamini94@gmail.com";
        $name = $_POST['name'];
        $email = $_POST['email'];
        $body = $_POST['body'];
        $headers = "From: $email" . "\r\n" .
           "CC: $name";
    
         mail($to,$name,$body,$headers); 
         $message = "Message has been sent successfully";  
    }
    
     ?>
    <!--Contact Us Modal -->
    <div class="modal fade w3-margin" id="myModal" role="dialog">
        <div class="modal-dialog w3-card-12 w3-round-medium">
            <div class="modal-content">
                <div class="modal-header w3-black w3-card-2 w3-round-medium">
                    <button type="button" class="close w3-text-white" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title w3-black w3-center "> <span class="fa fa-phone-square"></span> Contact Details</h3>
                </div>
                <div class="modal-body">
                    <div class="w3-padding-8">

                        <form class="w3-form" method="post">
                        
                            <div>
                                <p> &nbsp;<span class="w3-xxlarge header-text w3-left  "><b>Follow Us:</b></span>
                                    <a class="w3-btn-floating w3-teal" href="https://www.facebook.com/sihle.l.dlamini">
                                        <span class="fa fa-facebook w3-xlarge w3-text-white"></span>
                                    </a> <a href="https://twitter.com/LuthandoDlamini " class="w3-btn-floating w3-teal">
                                        <span class="fa fa-twitter  w3-text-white"></span>
                                    </a> <a class="w3-btn-floating w3-teal" href="https://plus.google.com/u/0/app/basic/103739394219354837528?tab=XX">
                                        <span class="fa fa-google-plus  w3-text-white"></span>
                                    </a> 
                                    <a class="w3-btn-floating w3-teal" href="http://www.linkedin.com/in/luthando-dlamini-27392b98?trk=nav_responsive_tab_profile">
                                        <span class="fa fa-linkedin w3-xlarge w3-text-white"></span>
                                    </a> 
                                </p>
                            </div>
                            <p class="w3-purple w3-center w3-padding w3-round-medium">Give us feedback </p>

                            <input class="w3-input w3-animate-input" name="name" type="text" placeholder="Name" required="" />
                            <br />
                            <input class="w3-input" name="email" type="text" placeholder="Email" required="" />
                            <br />
                            <textarea class="w3-input" name="body" placeholder="Message" required=""></textarea>
                            <br />
                            
                            <button type="submit" name="btn_send" id="Send" class="w3-btn w3-round-large">Send</button>
                            <div class="w3-text-green" id="div1"><?php //echo $message; ?> </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>