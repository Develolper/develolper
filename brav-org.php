<?
require_once $_SERVER['DOCUMENT_ROOT'] . '/head.php';
?>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-toggleable-md non-video">
        <div class="container">

            <button class="navbar-toggler navbar-toggler-right float-right" type="button" data-toggle="collapse" data-target="#navbar9">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a href="http://develolper.com">
                <img class="logo" src="images/commentLogo.png" />
            </a>
            <div class="navbar-collapse collapse" id="navbar9">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" id="blackLink" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="portfolio-bg-brav">
        <div class="portfolio-header">
            <img src="\images\what_we_done\brav-logo.png" class="portfolio-logo">
            <p class="text-center ">
                Chat platform used to discuss conflicts with any and all involved and the third party Neutral aka the Brāv One.
            </p>
        </div>


    </div>

    <div class="container">
        <div class="row-centered">

            <div class="top-buffer"></div>
            <div class="col align-self-center" id="services">
                <h3 class="text-center">
                    <strong>Task</strong>
                </h3>
            </div>
            <div class="text-center">
                To create Web application for multi user audio, video and chat communication, where users can also share files, notes and online calendar.
            </div>

            <div class="top-buffer"></div>

            <div class="col align-self-center" id="services">
                <h3 class="text-center">
                    <strong>Solution</strong>
                </h3>
            </div>
            <div class="text-center">
                Main platform such as audio,video and chat communication was done with the help of web sockets. We implemented web project, called web rtc, which is open source. This project allows audio and video streaming.
            </div>

            <div class="top-buffer"></div>
            <img src="\images\what_we_done\brav-glasses.png" class="portfolio-content-images" alt="Chat platform for Brav. Develolper" >
            <div class="top-buffer"></div>
            <img src="\images\what_we_done\brav.png" class="img-fluid portfolio-content-images" alt="Chat platform for Brav. Develolper">
        </div>



    </div> <!-- container -->


</body>

<?
require_once $_SERVER['DOCUMENT_ROOT'] . '/contact.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
?>
