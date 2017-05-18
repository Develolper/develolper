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

            <div class="col align-self-center" >
                <p class="text-center large_headline">
                    // <strong> BRANDING  </strong>
                </p>
            </div>
            <div class="top-buffer"></div>

            <div class="row" >

                <div class="col-md-7">
                    <p class="article">
                        We breathe life into your company story, developing branding that advances your message and forms a distinct image. While each phase moves your brand somewhere new and exciting, we continuously infuse direction from what we’ve learned about where the brand has come from, where you’d like the brand to go, and how the new brand image will impact consumer behavior.
                        <br />
                        At Develolper, we’ll help you take the first step or conquer the latest hurdle.
                    </p>
                    <div class="top-buffer"></div>

                </div>
                <div class="col-md-1"></div>
                <div class="col-md-4 text-right">
                    <img src="images/branding_page_content.png" class="pull-right big_section_icon img-responsive" />
                </div>

                <div class="blockquote">
                    Focus on building the best possible business. If you are great, people will notice and opportunities will appear
                </div>
            </div>
        </div>

    </div> <!-- container -->

    <?
    require_once $_SERVER['DOCUMENT_ROOT'] . '/contact.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
    ?>

</body>
</html>
