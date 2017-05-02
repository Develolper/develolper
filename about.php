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
                        <a class="nav-link" id="blackLink" href="#whatWeProvide">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="blackLink" href="#contact">Contact us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Page Content -->
    <div class="container">
        <div class="row-centered">

            <div class="top-buffer"></div>

            <div class="col align-self-center" id="about">
                <h3 class="text-center">
                    ABOUT <strong>US</strong>
                </h3>
            </div>


            <div class="top-buffer"></div>

            <p>
                Develolper is a a software design and development start-up company that provides end-to-end development service for web and mobile development to Startups, Small Medium Businesses, Enterprises and Agencies. Our highly experienced in house team of experts is dedicated to build excellent products for any industry. We follow transparent processes which helps us achieve high quality & result driven solutions for our Clients. We work on a wide range of technologies ranging from open source to proprietary and custom built solutions.
                <br /><br />
                With years of experience we have perfected the process, system & technologies that enable us to create high-quality, scalable web and mobile solutions. Our goal is to always have our end products reflect our deep engineering skills and elegant progressive design aesthetic. We fundamentally believe in developing long term strategic partnerships with our clients by exceeding expectations and a great level of transparency. We combine talent and technology to produce results, therefore challenge us!

            </p>

            <div class="col-md-5"></div>
            <div class="col align-self-center">
                <div class="big_slogan_dvider"></div>
            </div>
        </div>
    </div> <!-- container -->



    <?
    require_once $_SERVER['DOCUMENT_ROOT'] . '/contact.php';

    require_once $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
    ?>

</body>
</html>
