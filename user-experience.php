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

            <div class="col align-self-center">
                <p class="text-center large_headline" >
                    // <strong>USER EXPERIENCE</strong> STRATEGY
                </p>
            </div>

            <div class="top-buffer"></div>
            <div class="row" >

                <div class="col-md-7">
                    <p class="article">
                        The user experience (UX) is the interaction between the customer and every aspect of the given IT system, including interface, physical interaction, emotional interaction, graphics, and design.
                        User Experience Design is the process of enhancing customer satisfaction and loyalty by improving the usability, ease of use, and pleasure provided in the interaction between the customer and the product.
                        <br />
                        A lean UX is a set of principles used to guide you to better, more desirable solutions for users. Designs lean UX, follow the practice of early customer validation, collaborative design, solving user problems, measuring KPI’s, applying appropriate tools, and nimble design.
                    </p>
                    <div class="top-buffer"></div>


                    <div class="grey_font">
                        <h3>Technologies</h3>
                        Front-end technologies: <b>Responsive, Twitter Bootstrap, React.js, Vue.js, Angular.js, Parallax, Javascript, jQuery, Ajax, XHTML, HTML5, SASS, JSP, BEM Technology</b>
                        <br /><br />
                        Tools: <b>Adobe Photoshop, Adobe Illustrator, Adobe Muse</b>
                    </div>

                </div>
                <div class="col-md-1"></div>
                <div class="col-md-4 text-right">
                    <img src="images/ui_ux_design.jpg" class="pull-right big_section_icon img-responsive" />
                </div>

                <div class="blockquote">
                    68% of users leave a site because of poor User-centric design.
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
