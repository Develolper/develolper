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
                    // <strong> WEB  </strong> DEVELOPMENT
                </p>
            </div>
            <div class="top-buffer"></div>

            <div class="row" >

                <div class="col-md-7">
                    <p class="article">
                        Your business is unique. Your website should be too. Develolper approaches each client individually, custom-tailoring our web services to address your unique demands. We provide technical experience in building web application development solutions that are strong and scalable. We help you solve your different day-to-day business tasks, through a well designed system, which helps you easily overcome the multifaceted challenges of the current digital era.
                        <br />
                        From the initial stages of specifications and prototyping, we ensure seamless services throughout the entire deployment and ongoing support procedure. Rest assured, when you opt for our services, you ensure a productive, scalable and highly secure future with our web application solutions expressly designed for your business needs.
                    </p>
                    <div class="top-buffer"></div>

                    <!-- <div class="grey_font">
                        <h3>Technologies</h3>
                        Front-end technologies: <b>Responsive, Twitter Bootstrap, Parallax, Javascript, jQuery, Ajax, XHTML, HTML5</b>
                        <br /><br />
                        Tools: <b>Adobe Photoshop, Dreamweaver, Axure</b>
                    </div> -->

                </div>
                <div class="col-md-1"></div>
                <div class="col-md-4 text-right">
                    <img src="images/web_development_page_content.png" class="pull-right big_section_icon img-responsive" />
                </div>

                <table  class="table table_technologies" style="margin-top: 30px;">
                    <tbody>
                        <tr>
                            <th scope="row">TECHNOLOGY</th>
                            <td>
                                <ul>
                                    <li>Javascript</li>
                                    <li>PHP</li>
                                    <li>TypeScript</li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li>Java</li>
                                    <li>C</li>
                                    <li>C#</li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">FRONT END</th>
                            <td>
                                <ul>
                                    <li>SASS</li>
                                    <li>Bootstrap(Twitter)</li>
                                    <li>BEM Technology</li>
                                    <li>JSP</li>
                                </ul>
                            </td>

                            <td>
                                <ul>
                                    <li>React.js</li>
                                    <li>Vue.js</li>
                                    <li>Angular.js</li>
                                    <li>jQuery</li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">SERVER TECHNOLOGIES/STACKS</th>
                            <td>
                                <ul>
                                    <li>MongoDb</li>
                                    <li>SQL</li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li>Apache</li>
                                    <li>Nginx</li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">BACK END </th>
                            <td>
                                <p>PHP</p>
                                <ul>
                                    <li>Yii2</li>
                                    <li>Kohana</li>
                                    <li>Symfony2</li>
                                </ul>
                            </td>

                            <td>
                                <p>Javascript</p>
                                <ul>
                                    <li>Node.js</li>
                                    <li>Express(js)</li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">CMS</th>
                            <td>
                                <ul>
                                    <li>Wordpress</li>
                                    <li>Drupal</li>
                                    <li>Joomla</li>
                                </ul>
                            </td>

                        </tr>

                    </tbody>
                </table>


                <div class="blockquote">
                    Before software can be reusable it first has to be usable
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
