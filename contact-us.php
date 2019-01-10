<?php
include "header.php";
?>
        <!--Breadcrubs start-->
        <div class="breadcrubs">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcurbs-inner text-center">
                            <h3 class="breadcrubs-title">
                                Our blog
                            </h3>
                            <ul>
                                <li><a href="index.html">home <span>//</span>  </a></li>
                                <li>Contact us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <!--Breadcrubs end-->
       
       <!--contact us pages start-->
        <div class="contact-us">
            <div class="contact-information text-center ptb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-contact-information">
                                <div class="contact-icon">
                                    <a href="#"><i class="mdi mdi-phone"></i></a>
                                </div>
                                <p>+012 345 678 102</p>
                                <p>+012 345 678 102</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-contact-information">
                                <div class="contact-icon">
                                    <a href="#"><i class="mdi mdi-dribbble"></i></a>
                                </div>
                                <p> urname@email.com</p>
                                <p>urwebsitenaem.com</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-contact-information">
                                <div class="contact-icon">
                                    <a href="#"><i class="mdi mdi-map-marker"></i></a>
                                </div>
                                <p>Address goes here,</p>
                                <p>street,Crossroad123.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <!--Contact bottom section-->
            <div class="contact-bottom-section ptb-100">
                <div class="bg-img"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 contact-form-div">
                            <div class="contact-form">
                                <div class="contact-form-title">
                                    <h2>Get In Touch</h2>
                                </div>
                                <div class="contact-form-box">
                                    <p class="form-messege"></p>
                                    <form id="contact-form" action="https://d29u17ylf1ylz9.cloudfront.net/resta-preview/resta/mail.php" method="post">
                                        <input name="name" type="text" placeholder="Name">
                                        <input name="email" type="text" placeholder="Email">
                                        <textarea name="message" placeholder="Message"></textarea>
                                        <button type="submit">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 map-div">
                            <div id="contact-map" class="map-area">
                                <div id="googleMap" style="width:100%;height:480px;"></div>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
            <!--Contact bottom section end-->
            
        </div>
       <!--contact us pages end-->
       

<?php
include "footer.php";