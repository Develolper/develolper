<?php

echo $_SERVER['DOCUMENT_ROOT'] . '/swiftmailer/lib/swift_required.php';

require_once $_SERVER['DOCUMENT_ROOT'] . '/swiftmailer/lib/swift_required.php';
if (isset($_POST)) {
    $name = htmlspecialchars($_POST['name']);
    $mail = htmlspecialchars($_POST['mail']);
    $message = htmlspecialchars($_POST['message']);
    $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465,'ssl')
      ->setUsername('develolper.info@gmail.com')
      ->setPassword('develolper_info');

    $mailer = Swift_Mailer::newInstance($transport);
    $message = Swift_Message::newInstance()

      ->setSubject(htmlspecialchars($_POST['subject']))

      ->setFrom(array('develolper.info@gmail.com' => 'Develolper'))

      ->setTo(array('sabir.gojayev007@gmail.com', 'gasanello@gmail.com'))
      ->setBody('New order by: '.$name.'<br /> Contact e-mail: '.$mail.'<br /> Message: '.$message);
    $result = $mailer->send($message);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="icon" href="images/favicon/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="images/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="images/favicon/manifest.json">
    <link rel="mask-icon" href="images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <meta property="og:image" content="http://develolper.com/images/commentLogo.png" />
    <meta property="og:description" content="Our highly experienced in house team of experts is dedicated to build excellent products for any industry. We follow transparent processes which helps us achieve high quality & result driven solutions for our Clients. We work on a wide range of technologies ranging from open source to proprietary and custom built solutions. We are committed to building solutions that realize your digital ideas." />
    <meta property="og:url"content="http://develolper.com/" />

    <meta property="og:title" content="Develolper" />

    <title>Develolper</title>





    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/style.css" />



    <!-- Animate On Scroll Library -->
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">


    <!-- reCAPTCHA  -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

</head>


<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-toggleable-md fixed-top  ">
        <div class="container">

            <button class="navbar-toggler navbar-toggler-right float-right" type="button" data-toggle="collapse" data-target="#navbar9">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a href="http://develolper.com">
                <img class="logo" src="images/whiteLogo.png" />
            </a>
            <div class="navbar-collapse collapse" id="navbar9">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" id="whiteLink" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="whiteLink" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="whiteLink" href="#team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="whiteLink" href="#contact">Contact us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Video Header -->
    <div class="pattern"></div>

    <div class="one">

        <div class="vertical-center">
            <div class="container">
                <div class="headline">

                    <!-- <div class="element"></div> -->

                    We don't just build web applications <br />
                    We <span class="element">digital ideas</span>
                </div>

            </div> <!-- end of container -->
        </div>

        <video class="video-background" no-controls autoplay loop src="" poster="video/1/Dancing-Bulbs.jpg"></video>

        <div class="arrow animated bounce">
            <img width="40" height="40" alt="" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iNTEycHgiIGhlaWdodD0iNTEycHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1MTIgNTEyIiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxwYXRoIGZpbGw9IiNGRkZGRkYiIGQ9Ik0yOTMuNzUxLDQ1NS44NjhjLTIwLjE4MSwyMC4xNzktNTMuMTY1LDE5LjkxMy03My42NzMtMC41OTVsMCwwYy0yMC41MDgtMjAuNTA4LTIwLjc3My01My40OTMtMC41OTQtNzMuNjcyDQoJbDE4OS45OTktMTkwYzIwLjE3OC0yMC4xNzgsNTMuMTY0LTE5LjkxMyw3My42NzIsMC41OTVsMCwwYzIwLjUwOCwyMC41MDksMjAuNzcyLDUzLjQ5MiwwLjU5NSw3My42NzFMMjkzLjc1MSw0NTUuODY4eiIvPg0KPHBhdGggZmlsbD0iI0ZGRkZGRiIgZD0iTTIyMC4yNDksNDU1Ljg2OGMyMC4xOCwyMC4xNzksNTMuMTY0LDE5LjkxMyw3My42NzItMC41OTVsMCwwYzIwLjUwOS0yMC41MDgsMjAuNzc0LTUzLjQ5MywwLjU5Ni03My42NzINCglsLTE5MC0xOTBjLTIwLjE3OC0yMC4xNzgtNTMuMTY0LTE5LjkxMy03My42NzEsMC41OTVsMCwwYy0yMC41MDgsMjAuNTA5LTIwLjc3Miw1My40OTItMC41OTUsNzMuNjcxTDIyMC4yNDksNDU1Ljg2OHoiLz4NCjwvc3ZnPg0K" />
        </div>
        <!-- animated arrow -->

    </div>

    <!-- <div class="two">
        <video class="video-background" no-controls autoplay src="video/code_black.mp4" poster="http://thumb.multicastmedia.com/thumbs/aid/w/h/t1351705158/1571585.jpg"></video> CONTENT OVER VIDEO
    </div> -->


    <!-- Page Content -->
    <div class="container">
        <div class="row-centered">

            <!-- Small Divider line -->
            <!-- <div class="col-md-5"></div>
            <div class="col align-self-center">
                <div class="big_slogan_dvider"></div>
            </div>
            <div class="col-md-5"></div> -->
            <div class="top-buffer"></div>

            <div class="col align-self-center" id="services">
                <h3 class="text-center">
                    // <strong>SERVICES</strong>
                </h3>
            </div>

            <div class="top-buffer"></div>

            <div class="col align-self-center text-center">
                <div class="row">
                    <div class="col-md-3">
                        <div class="usp_boxes" data-aos="zoom-out">
                            <img src="images/creative.png" />
                            <h5>User Experience Strategy</h5>
                            <h6>Aesthetic Designs</h6>
                            <h6>Seamless Design Process</h6>
                            <h6>Mobile friendly</h6>

                            <a href="./services.html#userexperience">
                                <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                Learn More
                            </a>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="usp_boxes" data-aos="zoom-out">
                            <img src="images/web_development.png" />
                            <h5>Web Development</h5>
                            <h6>Web Application Development</h6>
                            <h6>Mobile Website Development</h6>
                            <h6>Responsive design</h6>

                            <a href="./services.html#webdevelopment">
                                <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                Learn More
                            </a>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="usp_boxes" data-aos="zoom-out">
                            <img src="images/production.png" />
                            <h5>CMS Development</h5>
                            <h6>WordPress </h6>
                            <h6>Joomla </h6>
                            <h6>Custom CMS</h6>

                            <a href="./services.html#cmsdevelopment">
                                <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                Learn More
                            </a>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="usp_boxes" data-aos="zoom-out">
                            <img src="images/e-commerce.jpg" />
                            <h5>E-Commerce</h5>
                            <h6>Designs</h6>
                            <h6>Online Store</h6>
                            <h6>Product Catalog Design</h6>

                            <a href="services.html#ecommerce">
                                <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>


                <div class="top-buffer"></div>

                <div class="text-center" id="buttonContainer">
                    <a href="./about.html">
                        <div class="actionButton">
                            Learn more
                        </div>
                    </a>
                </div>

            </div>
            <div class="col-md-5"></div>
            <div class="col align-self-center">
                <div class="big_slogan_dvider"></div>
            </div>
        </div>
    </div> <!-- container -->


    <!-- <div class="parallax">

    </div> -->

    <!-- <div class="top-buffer"></div> -->




    <div class="col align-self-center" id="portfolio">
        <h3 class="text-center">
            // <strong> PORTFOLIO </strong>
        </h3>
    </div>

    <div class="top-buffer"></div>
    <div class="what_we_done">


    <!-- <div class="col align-self-center text-center " > -->
        <div class="row no-gutter">
        <!-- <div class="row"  > -->
            <div class="col-md-6">
                <div class="what_we_done_unit">
                    <img src="images/what_we_done/brav.png" />
                    <div class="overlayBrandName">
                        <div class="portfolio_unit_description">
                            <p style="text-align: center;">Brāv</p>
                            <hr />
                            <b>Task Description:</b>
                            Web application for multi user audio, video and chat communication, where users can also share files, notes and online calendar.
                            <br />
                            <br />
                            <b>Solutions:</b>
                            Main platform such as audio,video and chat communication was done with the help of web sockets.
                            We implemented web project, called web rtc, which is open source. This project allows audio and video streaming.

                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-6" >
                <div class="what_we_done_unit">
                    <img src="images/what_we_done/linqfish.png" />
                    <div class="overlayBrandName">
                        <div class="portfolio_unit_description">
                            <p style="text-align: center;">LinQfish</p>
                            <hr />
                            <b>Task Description:</b>
                            To create a website for LinQfish deal platform which should be useful for getting information about special offers and deals for students as well as partner companies who could easily attract and retain new customers.
                            <br />
                            <br />
                            <b>Solution</b>
                            We have created an interactive and catchy website which differs from usual deal websites. Furthermore, each person can get information not only about the deals and offers, but also can create profile and share information with other people..
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row no-gutter">
            <div class="col-md-6" >
                <div class="what_we_done_unit">
                    <img src="images/what_we_done/sahhat.png" />
                    <div class="overlayBrandName">
                        <div class="portfolio_unit_description">
                            <p style="text-align: center;">Sahhat Clinic</p>
                            <hr />
                            <!-- Description of Hello World -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" >
                <div class="what_we_done_unit" >
                    <img src="images/what_we_done/shah.png" />
                    <div class="overlayBrandName">
                        <div class="portfolio_unit_description">
                            <p style="text-align: center;">Shah.az</p>
                            <hr />
                            Creating graphic interface for restaurant with Azerbaijani national kitchen, where design will carry you to Safavids dynasty era
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <div class="top-buffer"></div>


    <div class="col align-self-center" id="team">
        <h3 class="text-center">
            // OUR <strong> TEAM </strong>
        </h3>
    </div>



    <div class="top-buffer"></div>

    <div style="background-color: #F7F7F7">
        <div class="container" >
            <div class="row justify-content-around" >
                <div class="col-md-3"  data-aos="zoom-out">
                    <div class="team_member">
                        <div class="team_member_picture">
                            <img src="images/hasan.jpg" />

                            <div class="overlay">
                                <div class="job_description">Full stack developer</div>
                            </div>
                        </div>
                        <p class="name">
                            Hasan Hasanli
                        </p>
                    </div>
                </div>

                <div class="col-md-3"  data-aos="zoom-out">
                    <div class="team_member">
                        <div class="team_member_picture">
                            <img src="images/qurban.jpg" />

                            <div class="overlay">
                                <div class="job_description">Full stack developer</div>
                            </div>
                        </div>
                        <p class="name">
                            Gurban Gurbanov
                        </p>

                    </div>
                </div>


                <div class="col-md-3"  data-aos="zoom-out">
                    <div class="team_member">
                        <div class="team_member_picture">
                            <img src="images/abbas.jpg" />

                            <div class="overlay">
                                <div class="job_description">Backend & Android developer</div>
                            </div>
                        </div>
                        <p class="name">
                            Abbas Akhundov
                        </p>

                    </div>
                </div>

                <div class="col-md-3"  data-aos="zoom-out">
                    <div class="team_member">
                        <div class="team_member_picture">
                            <img src="images/sattar.jpg" />

                            <div class="overlay">
                                <div class="job_description">Backend developer</div>
                            </div>
                        </div>

                        <p class="name">
                            Sattar Rahimbeyli
                        </p>
                    </div>
                </div>

            </div> <!-- row justify-content-around -->


            <div class="row justify-content-around" >

                <div class="col-md-3"  data-aos="zoom-out">
                    <div class="team_member">
                        <div class="team_member_picture">
                            <img src="images/elchin.jpg" />

                            <div class="overlay">
                                <div class="job_description">Backend developer</div>
                            </div>
                        </div>
                        <p class="name">
                            Elchin Valiyev
                        </p>
                    </div>
                </div>


                <div class="col-md-3"  data-aos="zoom-out">
                    <div class="team_member">
                        <div class="team_member_picture">
                            <img src="images/turqut.jpg" />

                            <div class="overlay">
                                <div class="job_description">Graphic & Web design</div>
                            </div>
                        </div>
                        <p class="name">
                            Turgut Abasli
                        </p>

                    </div>
                </div>

                <div class="col-md-3"  data-aos="zoom-out">
                    <div class="team_member">
                        <div class="team_member_picture">
                            <img src="images/sabir.png" />

                            <div class="overlay">
                                <div class="job_description">Backend developer</div>
                            </div>
                        </div>
                        <p class="name">
                            Sabir Gojayev
                        </p>
                    </div>
                </div>

            </div> <!-- row justify-content-ar -->
        </div> <!-- container -->
    </div> <!-- grey bg -->

    <div class="container" >
        <div class="top-buffer"></div>

        <div class="row justify-content-center">
            <div class="col align-self-center" id="contact">
                <h3 class="text-center" >
                    // <strong> CONTACT </strong> US
                </h3>
            </div>
        </div>

        <div class="top-buffer"></div>


        <div class="row" >

            <div class="col-md-6 inner contact" data-aos="zoom-out">
                <!-- Form Area -->
                <div class="contact-form">
                    <!-- Form -->
                    <form id="contact-us" method="post">
                        <div class="col-xs-6 wow animated slideInLeft" data-wow-delay=".5s">
                            <!-- Name -->
                            <input type="text" name="name" id="name" required="required" class="form" placeholder="Name" />
                            <!-- Email -->
                            <input type="email" name="mail" id="mail" required="required" class="form" placeholder="Email" />
                            <!-- Subject -->
                            <input type="text" name="subject" id="subject" required="required" class="form" placeholder="Subject" />
                        </div><!-- End Left Inputs -->
                        <!-- Right Inputs -->
                        <div class="col-xs-6 wow animated slideInRight" data-wow-delay=".5s">
                            <!-- Message -->
                            <textarea name="message" id="message" class="form textarea"  placeholder="Message"></textarea>
                        </div><!-- End Right Inputs -->

                        <!-- Bottom Submit -->
                        <div class="relative fullwidth col-xs-12">
                            <!-- Send Button -->
                            <button type="submit" id="submit" name="submit" class="form-btn semibold">Send Message</button>
                        </div><!-- End Bottom Submit -->
                        <!-- Clear -->
                        <div class="clear"></div>

                        <!-- reCAPTCHA  -->
                        <button class="g-recaptcha" data-sitekey="6Le7DBwUAAAAAHSA36RdDzTw0EPQBPPQg8HadeDy" data-callback="YourOnSubmitFn">
                            Submit
                            <!-- https://www.google.com/recaptcha/admin#site/337382587?setup -->
                        </button>
                    </form>

                    <!-- Your Mail Message -->
                    <div class="mail-message-area">
                        <!-- Message -->
                        <div class="alert gray-bg mail-message not-visible-message">
                            <strong>Thank You !</strong> Your email has been delivered.
                        </div>
                    </div>
                </div><!-- End Contact Form Area -->
            </div><!-- End Inner -->

            <div class="col-md-6 contact-right text-center my-auto" data-aos="zoom-out">

                <div class="right-content">

                    <p><strong>Email:</strong> info@develolper.com</p>
                    <p><strong>Phone:</strong> +4917627031140</p>



                    <ul class="social-icons">
                        <li><a href="https://www.facebook.com/develolper" target="_blank" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.github.com/develolper" target="_blank" class="social-icon"> <i class="fa fa-github"></i></a></li>
                        <li><a href="https://www.linkedin.com/develolper" target="_blank" class="social-icon"> <i class="fa fa-linkedin"></i></a></li>
                        <li><a href="https://plus.google.com/develolper" target="_blank" class="social-icon"> <i class="fa fa-google-plus"></i></a></li>
                        <!-- <li><a href="" class="social-icon"> <i class="fa fa-twitter"></i></a></li> -->
                        <!-- <li><a href="" class="social-icon"> <i class="fa fa-rss"></i></a></li> -->
                        <!-- <li><a href="" class="social-icon"> <i class="fa fa-youtube"></i></a></li> -->
                    </ul>
                </div>
            </div>

        </div>

    </div>


    <footer>
        <div class="text-center">

            <!-- <p><strong>Email:</strong> info@develolper.com</p>
            <p><strong>Phone:</strong> +4917627031140</p> -->
            <p>Develolper | All rights reserved. </p>

        </div>

    </footer>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->

    <script
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
      src="https://code.jquery.com/jquery-3.1.1.min.js"
      crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <script src="js/typed.js"></script>

    <script src="js/app.js"></script>



    <!-- header scrolling -->
    <script type="text/javascript">
    $(document).scroll(function(e){
        var scrollTop = $(document).scrollTop();
        var screenHeight = $( window ).height();

        if(scrollTop > screenHeight){

            $(".arrow").attr("style","display: none");

            $(".logo").attr("src","images/commentLogo.png");

            $('.navbar').addClass('blur');

            $(".nav-link").attr("id", "blackLink");

        } else {
            $(".arrow").attr("style","display: block");
            $(".logo").attr("src","images/whiteLogo.png");
            $('.navbar').removeClass('blur');
            $(".nav-link").attr("id","whiteLink");
        }
    });
    </script>



    <!-- Animate On Scroll Library -->
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>


    <script>
        AOS.init({duration: 1200});
    </script>

</body>
</html>
