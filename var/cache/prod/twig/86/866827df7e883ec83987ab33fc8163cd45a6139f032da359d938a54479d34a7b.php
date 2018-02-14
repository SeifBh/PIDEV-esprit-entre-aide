<?php

/* :default:index.html.twig */
class __TwigTemplate_ef4e089d94a08e62aec78cc6a12b654519a4331005123986e7ddc3a07a79fbeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'meta' => array($this, 'block_meta'),
            'title' => array($this, 'block_title'),
            'style' => array($this, 'block_style'),
            'script' => array($this, 'block_script'),
            'header' => array($this, 'block_header'),
            'section1' => array($this, 'block_section1'),
            'section2' => array($this, 'block_section2'),
            'section3' => array($this, 'block_section3'),
            'section5' => array($this, 'block_section5'),
            'section6' => array($this, 'block_section6'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<style>
    /**********************************
Responsive navbar-brand image CSS
- Remove navbar-brand padding for firefox bug workaround
- add 100% height and width auto ... similar to how bootstrap img-responsive class works
***********************************/
    .navbar {
        min-height: 30px !important;

    }
    a.navbar-brand {
        color: white !important;
    }

    nav.navbar.navbar-default.navnav {
        background-color: #4c4c4c;
        min-height:  20px !important;
        font-size:  12px !important;
        color:  white !important;
    }
    nav.navbar.navbar-default.navnav li a {
        background-color: #4c4c4c;
        min-height:  20px !important;
        font-size:  12px !important;
        color:  white !important;
    }
    nav.navbar.navbar-default.navnav li a:hover{

        color:  grey !important;
    }

    .navnav {

        color:  white !important;
    }

    .navbar > li > a {
        color: #000000;
        font-size: 12px !important;
        font-weight: 600;
        text-transform: capitalize;
    }
    .navbar .container-fluid .navbar-brand {
        margin: 0 !important;

    }

    .navbar-brand {
        padding: 0px;
    }
    .navbar-brand>img {
        height: 100%;
        padding: 15px;
        width: auto;
    }







    /*************************
    EXAMPLES 2-7 BELOW
    **************************/

    /* EXAMPLE 2 (larger logo) - simply adjust top bottom padding to make logo larger */

    .example2 .navbar-brand>img {
        padding: 7px 15px;
    }


    /* EXAMPLE 3

    line height is 20px by default so add 30px top and bottom to equal the new .navbar-brand 80px height  */

    .example3 .navbar-brand {
        height: 80px;
    }

    .example3 .nav >li >a {
        padding-top: 30px;
        padding-bottom: 30px;
    }
    .example3 .navbar-toggle {
        padding: 10px;
        margin: 25px 15px 25px 0;
    }


    /* EXAMPLE 4 - Small Narrow Logo*/
    .example4 .navbar-brand>img {
        padding: 7px 14px;
    }


    /* EXAMPLE 5 - Logo with Text*/
    .example5 .navbar-brand {
        display: flex;
        align-items: center;
    }
    .example5 .navbar-brand>img {
        padding: 7px 14px;
    }


    /* EXAMPLE 6 - Background Logo*/
    .example6 .navbar-brand{
        background: url(https://res.cloudinary.com/candidbusiness/image/upload/v1455406304/dispute-bills-chicago.png) center / contain no-repeat;
        width: 200px;
    }





    /* EXAMPLE 8 - Center on mobile*/
    @media only screen and (max-width : 768px){
        .example-8 .navbar-brand {
            padding: 0px;
            transform: translateX(-50%);
            left: 50%;
            position: absolute;
        }
        .example-8 .navbar-brand>img {
            height: 100%;
            width: auto;
            padding: 7px 14px;
        }
    }


    /* EXAMPLE 8 - Center Background */
    .example-8 .navbar-brand {
        background: url(https://res.cloudinary.com/candidbusiness/image/upload/v1455406304/dispute-bills-chicago.png) center / contain no-repeat;
        width: 200px;
        transform: translateX(-50%);
        left: 50%;
        position: absolute;
    }





    /* EXAMPLE 9 - Center with Flexbox and Text*/
    .brand-centered {
        display: flex;
        justify-content: center;
        position: absolute;
        width: 100%;
        left: 0;
        top: 0;
    }
    .brand-centered .navbar-brand {
        display: flex;
        align-items: center;
    }
    .navbar-toggle {
        z-index: 1;
    }




    /* CSS Transform Align Navbar Brand Text ... This could also be achieved with table / table-cells */
    .navbar-alignit .navbar-header {
        -webkit-transform-style: preserve-3d;
        -moz-transform-style: preserve-3d;
        transform-style: preserve-3d;
        height: 50px;
    }
    .navbar-alignit .navbar-brand {
        top: 50%;
        display: block;
        position: relative;
        height: auto;
        transform: translate(0,-50%);
        margin-right: 15px;
        margin-left: 15px;
    }





    .navbar-nav>li>.dropdown-menu {
        z-index: 9999;
    }

    .headertop {
        background-color: #383838;
        color: white;
        vertical-align: middle;
        height: 39px;
        padding-top: 10px;
        padding-left: 10px;
    }
    .headertop ul li {
        display: inline-flex;
    }
    .loginperso{
        background-color: rgb(115, 16, 9);
        padding: 4px !important;
    }
    .loginperso:hover a{
        color: rgb(115, 16, 9) !important;
        background-color: #fff !important;4

    }

    .loginperso:hover{
        color: rgb(115, 16, 9) !important;
        background-color: #fff !important;4
    padding: 4px !important;
    }

    .loginperso a{
        color: white !important;

    }
    .singup:hover a{
        color: #0077b5 !important;

    }

    .singup:hover{
        color: #0077b5 !important;
        background-color: #fff;
        padding: 4px !important;
    }

    .singup{
        margin-top:2px !important;
        background-color: #0077b5;
        padding: 4px !important;
    }
    .singup a{
        color: white !important;
    }


    input#fos_user_registration_form_email::placeholder {
        color:  red;
        color:  grey;
        font-weight:  400;
        position: initial;
        /* left: -29px; */
        padding: -9px !important;
        margin:  0px !important;
    }
    input::placeholder{
        padding:12px !important;
    }

    ::placeholder{
        padding: 8px !important;

    }
    a.readmore {
        float:  right;
        border:  1px solid;
        margin-top: 7px !important;
        padding: 11px !important;

    }

    a.readmore:hover {
        color:black !important;
        background-color:white;
        border:1px solid white !important;
    }

    * {box-sizing: border-box;}
    body {font-family: Verdana, sans-serif;}
    .mySlides {display: none;}
    img {vertical-align: middle;}

    .col-md-6.sre {
        /* height:  85%; */
    }.col-md-6.sre1 {
         height: 313px;
         background-color:  red;
         margin-bottom: 26px !important;
         padding-bottom: 25px !important;
     }

    .col-md-6.bottomgridimg {
        padding:  0px;
    }

    .col-md-6.bottomgridtext.seifperso2 {
        height:  338px;
    }.col-md-6.bottomgridtext.seifperso2 {}
    /* Slideshow container */
    .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
    }

    /* Caption text */
    .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }

    .active {
        background-color: #717171;
    }

    /* Fading animation */
    .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
    }

    @-webkit-keyframes fade {
        from {opacity: .4}
        to {opacity: 1}
    }

    @keyframes fade {
        from {opacity: .4}
        to {opacity: 1}
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
        .text {font-size: 11px}
    }
    /* Adding CSS manually is only necessary in JSFiddle,
    where CSS can't be inserted into the <head> */
    .typed-cursor{
        opacity: 1;
        animation: typedjsBlink 0.7s infinite;
        -webkit-animation: typedjsBlink 0.7s infinite;
        animation: typedjsBlink 0.7s infinite;
    }
    @keyframes typedjsBlink{
        50% { opacity: 0.0; }
    }
    @-webkit-keyframes typedjsBlink{
        0% { opacity: 1; }
        50% { opacity: 0.0; }
        100% { opacity: 1; }
    }
    .typed-fade-out{
        opacity: 0;
        transition: opacity .25s;
        -webkit-animation: 0;
        animation: 0;
    }
</style>
<head>
    ";
        // line 385
        $this->displayBlock('head', $context, $blocks);
        // line 504
        echo "</head>
";
        // line 505
        if (((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ENSEIGNANT") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ETUDIANT")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RESPONSABLE_CLUB")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RESPONSABLE_SUPER_ADMIN"))) {
            // line 506
            echo "
    <nav class=\"navbar navbar-default navnav\">
        <div class=\"container-fluid00\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar9\">
                    <span class=\"sr-only\">Vous étes connecté en tant que </span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
            </div>

            <div class=\"brand-centered\">
                <a class=\"navbar-brand\" href=\"#\">

                    Vous étes connecté en tant que &nbsp;
                    <span style=\"color:red !important;\">
                        ";
            // line 523
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RESPONSABLE_CLUB")) {
                // line 524
                echo "                            Responsable Club
                        ";
            } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ENSEIGNANT")) {
                // line 526
                echo "                            Enseignant
                        ";
            } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RESPONSABLE_CLUB")) {
                // line 528
                echo "                            Responsable Club
                        ";
            } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RESPONSABLE_STORE")) {
                // line 530
                echo "                            Responsable Store
                        ";
            } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ETUDIANT")) {
                // line 532
                echo "                            Etudiant
                        ";
            } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RESPONSABLE_SUPER_ADMIN")) {
                // line 534
                echo "                            Super Admin
                        ";
            } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 536
                echo "                            Admin
                        ";
            } else {
                // line 538
                echo "                            User
                        ";
            }
            // line 540
            echo "                    </span>
                </a>
            </div>

            <div id=\"navbar9\" class=\"navbar-collapse collapse\">
                <ul class=\"nav navbar-nav navbar-left\">
                    <li class=\"active\"><a href=\"#\">Home</a></li>
                    ";
            // line 547
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RESPONSABLE_CLUB")) {
                echo " <li><a href=\"#\">Gérer Clubs</a></li>
                    ";
            } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ENSEIGNANT")) {
                // line 548
                echo " <li><a href=\"#\">Gérer Documents</a></li>
                    ";
            } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RESPONSABLE_STORE")) {
                // line 549
                echo "<li><a href=\"#\"> Gérer demandes</a></li>
                    ";
            } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RESPONSABLE_CLUB")) {
                // line 550
                echo "<li><a href=\"#\"> Gérer évenements</a></li>
                    ";
            } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RESPONSABLE_SUPER_ADMIN")) {
                // line 551
                echo "<li><a href=\"#\"> Tableau de bord</a></li>
                    ";
            } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ETUDIANT")) {
                // line 552
                echo "<li><a href=\"#\"> Gérer Annonces</a></li>
                    ";
            } else {
                // line 554
                echo "                        User
                    ";
            }
            // line 556
            echo "                </ul>
                <ul class=\"nav navbar-nav navbar-right\">
                    <li class=\"active\"><a href=\"#\">Home</a></li>
                    <li><a href=\"#\">About</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
        <!--/.container-fluid -->
    </nav>

";
        }
        // line 568
        echo "
<div class=\"section-header\">
    ";
        // line 570
        $this->displayBlock('header', $context, $blocks);
        // line 611
        echo "</div>
<body>

<div class=\"section1\">
    ";
        // line 615
        $this->displayBlock('section1', $context, $blocks);
        // line 730
        echo "</div>




<div class=\"section2\">
    ";
        // line 736
        $this->displayBlock('section2', $context, $blocks);
        // line 838
        echo "</div>




<div class=\"section3\">
    ";
        // line 844
        $this->displayBlock('section3', $context, $blocks);
        // line 952
        echo "</div>








<div class=\"section5\">
    ";
        // line 962
        $this->displayBlock('section5', $context, $blocks);
        // line 1035
        echo "</div>


<div class=\"section6\">
    ";
        // line 1039
        $this->displayBlock('section6', $context, $blocks);
        // line 1087
        echo "</div>






</body>


<div class=\"section-footer\">
    ";
        // line 1098
        $this->displayBlock('footer', $context, $blocks);
        // line 1103
        echo "</div>

</html>

";
    }

    // line 385
    public function block_head($context, array $blocks = array())
    {
        // line 386
        echo "
    ";
        // line 387
        $this->displayBlock('meta', $context, $blocks);
        // line 390
        echo "
        <title>";
        // line 391
        $this->displayBlock('title', $context, $blocks);
        echo " </title>

    ";
        // line 393
        $this->displayBlock('style', $context, $blocks);
        // line 479
        echo "
    ";
        // line 480
        $this->displayBlock('script', $context, $blocks);
        // line 502
        echo "
    ";
    }

    // line 387
    public function block_meta($context, array $blocks = array())
    {
        // line 388
        echo "    <meta charset=\"utf-8\" />
    ";
    }

    // line 391
    public function block_title($context, array $blocks = array())
    {
        echo "Espace Etudiant ";
    }

    // line 393
    public function block_style($context, array $blocks = array())
    {
        // line 394
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/nav.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/lightbox.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/flexslider.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">


        <style>
            .middlebarmenu {
                vertical-align: middle;
                padding-top: 43px;
                /* display: table-column-group; */
            }

            @import url(https://fonts.googleapis.com/css?family=Raleway:400,500);
            .snip1189 {
                font-family: 'Raleway', Arial, sans-serif;
                text-align: center;
                text-transform: uppercase;
                font-weight: 500;
                letter-spacing: 1px;
            }
            .snip1189 * {
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-transition: all 0.35s ease;
                transition: all 0.35s ease;
            }
            .snip1189 li {
                display: inline-block;
                list-style: outside none none;
                margin: 0 1em;
                padding: 0;
            }
            .snip1189 a {
                padding: 0.5em 0.8em;
                margin: 0.2em 0;
                display: block;
                color: rgb(115, 16, 9);
                position: relative;
                text-decoration: none;
            }
            .snip1189 a:before,
            .snip1189 a:after {
                height: 14px;
                width: 14px;
                position: absolute;
                content: '';
                -webkit-transition: all 0.35s ease;
                transition: all 0.35s ease;
                opacity: 0;
            }
            .snip1189 a:before {
                left: 0;
                top: 0;
                border-left: 3px solid #c0392b;
                border-top: 3px solid #c0392b;
                -webkit-transform: translate(100%, 50%);
                transform: translate(100%, 50%);
            }
            .snip1189 a:after {
                right: 0;
                bottom: 0;
                border-right: 3px solid #c0392b;
                border-bottom: 3px solid #c0392b;
                -webkit-transform: translate(-100%, -50%);
                transform: translate(-100%, -50%);
            }
            .snip1189 a:hover,
            .snip1189 .current a {
                color: brown;
            }
            .snip1189 a:hover:before,
            .snip1189 .current a:before,
            .snip1189 a:hover:after,
            .snip1189 .current a:after {
                -webkit-transform: translate(0%, 0%);
                transform: translate(0%, 0%);
                opacity: 1;
            }
            /* Demo purposes only */

        </style>
    ";
    }

    // line 480
    public function block_script($context, array $blocks = array())
    {
        // line 481
        echo "        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 482
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/uisearch.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 483
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/SmoothScroll.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 484
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/numscroller-1.0.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 485
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/nav.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 486
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/move-top.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 487
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/lightbox-plus-jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 488
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 489
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 490
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/easing.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 491
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/classie.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 492
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>

        <script>
        </script>





    ";
    }

    // line 570
    public function block_header($context, array $blocks = array())
    {
        // line 571
        echo "        <nav class=\"navbar navbar-default\">
            <div class=\"container-fluid\">
                <div class=\"col-md-2\">
                    <img src=\"";
        // line 574
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/abcd.png"), "html", null, true);
        echo "\">
                </div>
                <div class=\"col-md-8 middlebarmenu\">
                    <ul class=\"snip1189\">
                        <li class=\"current\"><a href=\"#\">Home</a></li>
                        <li><a href=\"";
        // line 579
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonce_homepage");
        echo "\">Annonces</a></li>
                        <li><a href=\"";
        // line 580
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evenement_homepage");
        echo "\">Events</a></li>
                        <li><a href=\"";
        // line 581
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("club_homepage");
        echo "\">Club</a></li>
                        <li><a href=\"";
        // line 582
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("store_homepage");
        echo "\">Docs</a></li>
                        <li><a href=\"";
        // line 583
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("spotted_homepage");
        echo "\">Spotted</a></li>

                    </ul>
                </div>
                <div class=\"col-md-2\">

                    <ul class=\"snip1189\" style=\"padding-top: 12px !important;\">
                        ";
        // line 590
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 591
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "username", array()), "html", null, true);
            echo "
                            <li class=\"loginperso\"><a href=\"";
            // line 592
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Logout</a></li>
                        ";
        }
        // line 594
        echo "

                        ";
        // line 596
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY") == false)) {
            // line 597
            echo "
                            <li class=\"loginperso\"><a href=\"";
            // line 598
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Login</a></li>
                            <li class=\"singup\"><a href=\"";
            // line 599
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">Register</a></li>
                        ";
        }
        // line 601
        echo "                    </ul>


                </div>
            </div>
        </nav>



    ";
    }

    // line 615
    public function block_section1($context, array $blocks = array())
    {
        // line 616
        echo "

        <div class=\"w3l-banner\">
            <div class=\"banner-dott\">
                <div class=\"header\">
                    <!-- //Header -->
                    <div class=\"container\">
                        <div class=\"flexslider-info\">
                            <section class=\"slider\">
                                <div class=\"flexslider\">
                                    <div class=\"flex-viewport\" style=\"overflow: hidden; position: relative;\">
                                        <ul class=\"slides\" style=\"width: 1000%; transition-duration: 0s; transform: translate3d(-1140px, 0px, 0px);\">
                                            <li class=\"clone\" style=\"width: 1140px; float: left; display: block;\">
                                                <div class=\"w3l-info\">
                                                    <div id=\"typed-strings\">
                                                        <p>Typed.js is a <strong>JavaScript</strong> library.</p>
                                                        <p>It <em>types</em> out sentences.</p>
                                                    </div>
                                                    <span id=\"typed\"></span>
                                                    <h3>Because you care...</h3>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-book\"></i>
                                                            <p>SAVING THE PLANET By educating people</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-pencil\"></i>
                                                            <p>Education is to unlock the freedom</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-graduation-cap\"></i>
                                                            <p>The aim of education is not knowledge</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"clearfix\"></div>
                                                </div>
                                            </li>
                                            <li class=\"flex-active-slide\" style=\"width: 1140px; float: left; display: block;\">
                                                <div class=\"w3l-info\">
                                                    <h2>Because you care...</h2>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-graduation-cap\"></i>

                                                            <p>Dernières offres de Collocation</p>

                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-pencil\"></i>

                                                            <p>Derniers Objets perdus</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-book\"></i>

                                                            <p>Derniers évènements</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"clearfix\"></div>
                                                </div>
                                            </li>
                                            <li class=\"\" style=\"width: 1140px; float: left; display: block;\">
                                                <div class=\"w3l-info\">
                                                    <h3>Education is important to our life</h3>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-pencil\"></i>
                                                            <p>Education is not pail but lighting of fire.</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-graduation-cap\"></i>
                                                            <p>Education is the key to success in life</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-book\"></i>
                                                            <p>Education is not preparation,is life</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"clearfix\"></div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>

                                    <ul class=\"flex-direction-nav\">
                                        <li>
                                            <a class=\"flex-prev\" href=\"#\">Previous</a>
                                        </li>
                                        <li>
                                            <a class=\"flex-next\" href=\"#\">Next</a>
                                        </li>
                                    </ul>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    ";
    }

    // line 736
    public function block_section2($context, array $blocks = array())
    {
        // line 737
        echo "        <div class=\"about\" id=\"about\">
            <div class=\"container\">
                <div class=\"about-head text-center \">
                    <h3>Les plus d'Esprit Entr'aide</h3>
                </div>
                <div class=\"about-top-grids\">
                    <div class=\"col-md-3 grid\">
                        <i class=\"fa fa-users\" aria-hidden=\"true\"></i>
                        <h3>Réunir les étudiants d'Esprit dans une seule plateforme</h3>
                    </div>
                    <div class=\"col-md-3 grid\">
                        <i class=\"fa fa-slideshare \" aria-hidden=\"true\"></i>
                        <h3>Une plateforme de partage et d'entraide destinée aux étudiants</h3>
                    </div>
                    <div class=\"col-md-3 grid\">
                        <i class=\"fa fa-exchange\" aria-hidden=\"true\"></i>
                        <h3>Faciliter l'interaction entre l'étudiant et son environnement</h3>
                    </div>
                    <div class=\"col-md-3 grid\">
                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                        <h3>Un coin spotted</h3>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>>
                <div class=\"about-bottom-grid1\">
                    <div class=\"col-md-6 bottomgridtext seifperso2\">
                        <h3>Annonces</h3>
                        <p> Vous cherchez un objet que vous avez perdu ou le propriétaire d'un objet que vos avez trouvé? Vous avez besoin d'un covoiturage ou d'une colocation? Ou peut-être cherchez vous un stage ? Quoi qui vous intrigue, et quelque soit ce que vous cherchez, ne cherchez pas trop, vous êtes à la bonne adresse, dans votre espace de partage de vos annonces</p>

                        <div class=\"readmore-w3\">
                            <a class=\"readmore\" href=\"";
        // line 767
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonce_homepage");
        echo "\">Read More<i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i></a>
                        </div>
                    </div>
                    <div class=\"col-md-6 bottomgridimg\">
                        <img src=\"";
        // line 771
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/about1.jpg"), "html", null, true);
        echo "\"alt=\"\">
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"about-bottom-grid2\">
                    <div class=\"col-md-6 bottomgridimg\">
                        <img src=\"";
        // line 777
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/about2.jpg"), "html", null, true);
        echo "\"alt=\"\">
                    </div>
                    <div class=\"col-md-6 bottomgridtext bottomleft seifperso2\">

                        <h3>Evénements et Challenges</h3>
                        <p>Etre étudiant c’est aussi partager des moments conviviaux et festifs au sein de la communauté Espritienne. Chaque semaine, une pléiade d’événements (musicaux, écologiques etc) est organisée par les étudiants et leurs enseignants pour enrichir l’atmosphère de l’école et continuer de rayonner tant sur l’aspect académique que sur l’aspect culturel.</p>

                        <div class=\"readmore-w3\">
                            <a class=\"readmore\" href=\"";
        // line 785
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evenement_homepage");
        echo "\">Read More<i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i></a>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>


                <div class=\"about-bottom-grid3\">
                    <div class=\"col-md-6 bottomgridtext seifperso2\">
                        <h3>Spotted</h3>
                        <p>Spotted est ta machine à rencontrer des gens/remonter le temps! C'est un moyen simple et amusant de se connecter avec les gens que tu as rencontrés à esprit. Rencontre de nouvelles personnes sur le campus. Avec Spotted, tu peux écrire aux gens que tu croises dans ton quotidien ou leur laisser un post anonyme pour les retrouver</p>.


                        <div class=\"readmore-w3\">
                            <a class=\"readmore\"  href=\"";
        // line 799
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("spotted_homepage");
        echo "\">Read More<i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i></a>
                        </div>
                    </div>
                    <div class=\"col-md-6 bottomgridimg\">
                        <img src=\"";
        // line 803
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/about1.jpg"), "html", null, true);
        echo "\"alt=\"\">
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"about-bottom-grid2\">
                    <div class=\"col-md-6 bottomgridimg\">
                        <img src=\"";
        // line 809
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/about2.jpg"), "html", null, true);
        echo "\"alt=\"\">
                    </div>
                    <div class=\"col-md-6 bottomgridtext bottomleft seifperso2\">
                        <h3>Lancez vos impressions à distance !</h3>
                        <p>Notre service <b>Impression</b> vous permet de lancer vos impressions depuis n’importe quel appareil connecté (Ordinateur, Tablette, Mobile...). Il vous suffit ensuite de passer en boutique pour récupérer vos documents !</p>

                        <div class=\"readmore-w3\">
                            <a class=\"readmore\"  href=\"";
        // line 816
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("store_homepage");
        echo "\" >Read More<i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i></a>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"about-bottom-grid2\">
                    <div class=\"col-md-6 bottomgridtext seifperso2\">
                        <h3>Clubs ESPRIT</h3>
                        <p>Au sein d’Esprit, les associations et clubs remplissent plusieurs rôles étant donné la diversité des motivations qui animent ceux qui en sont à l’origine. Conscients de l’importance de la vie associative, les étudiants jouent un rôle important dans l’élaboration et la transmission des messages aux destinataires.</p>

                        <div class=\"readmore-w3\">
                            <a class=\"readmore\"  href=\"";
        // line 827
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("club_homepage");
        echo "\" >Read More<i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i></a>
                        </div>
                    </div>
                    <div class=\"col-md-6 bottomgridimg\">
                        <img src=\"";
        // line 831
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/about1.jpg"), "html", null, true);
        echo "\"alt=\"\">
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
    ";
    }

    // line 844
    public function block_section3($context, array $blocks = array())
    {
        // line 845
        echo "        <div class=\"services\" id=\"services\">
            <div class=\"banner-dott1\">
                <div class=\"container\">
                    <div class=\"about-head text-center \">
                        <h3>Les annonces</h3>
                    </div>

                    <div class=\"service-top-grids\">
                        <div class=\"col-md-3\">
                            <div class=\"service1\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-building\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Collocations</h4>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"service2\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Objets perdus</h4>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"service3\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-car\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Covoiturage</h4>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"service4\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-briefcase\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Offres de stage</h4>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"service-bottom-grids\">
                        <div class=\"col-md-3\">
                            <div class=\"service1\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-comments\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Forum</h4>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"service2\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Lorem ipsum dolor sit amet</h4>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"service3\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-flask\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Lorem ipsum dolor sit amet</h4>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"service4\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-graduation-cap\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Lorem ipsum dolor sit amet</h4>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>

                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
    ";
    }

    // line 962
    public function block_section5($context, array $blocks = array())
    {
        // line 963
        echo "        <div class=\"gallery\" id=\"gallery\">
            <div class=\"container\">
                <div class=\"about-head text-center \">
                    <h3>La galerie des évènements</h3>
                </div>
                <div class=\"gallery-info\">
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p1.jpg') }} class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 971
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p2.jpg') }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                            <img src=\"";
        // line 976
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p2.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p3.jpg') }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                            <img src=\"";
        // line 981
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p3.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p4.jpg') }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                            <img src=\"";
        // line 986
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p4.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p5.jpg') }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                            <img src=\"";
        // line 991
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p5.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p6.jpg') }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                            <img src=\"";
        // line 996
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p6.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p7.jpg') }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                            <img src=\"";
        // line 1001
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p7.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p8.jpg') }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                            <img src=\"";
        // line 1006
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p8.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p9.jpg') }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                            <img src=\"";
        // line 1011
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p9.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p10.jpg') }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                            <img src=\"";
        // line 1016
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p10.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p11.jpg') }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                            <img src=\"";
        // line 1021
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p11.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p12.jpg') }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                            <img src=\"";
        // line 1026
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p12.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"clearfix\"> </div>
                </div>
                <script src=\"js/lightbox-plus-jquery.min.js\"></script>
            </div>
        </div>
    ";
    }

    // line 1039
    public function block_section6($context, array $blocks = array())
    {
        // line 1040
        echo "        <div class=\"count-agileits\" id=\"stats\">
            <div id=\"particles-js\"></div>
            <div class=\"about-head text-center \">
                <h3>Nos statistiques</h3>
            </div>
            <div class=\"count-grids\">
                <div class=\"count-bgcolor-w3ls\">
                    <div class=\"col-md-3 count-grid\">
                        <div class=\"count hvr-bounce-to-bottom\">
                            <div class=\"numscroller numscroller-big-bottom roller-title-number-1 scrollzip isShown\" data-slno=\"1\" data-min=\"0\" data-max=\"1052\" data-delay=\".5\" data-increment=\"5\">52</div>
                            <span></span>
                            <h5>Objets perdus</h5>
                        </div>
                    </div>
                    <div class=\"col-md-3 count-grid\">
                        <div class=\"count hvr-bounce-to-bottom\">
                            <div class=\"numscroller numscroller-big-bottom roller-title-number-2 scrollzip isShown\" data-slno=\"2\" data-min=\"0\" data-max=\"2372\" data-delay=\".5\" data-increment=\"5\">28</div>
                            <span></span>
                            <h5>Offres de stages</h5>
                        </div>
                    </div>
                    <div class=\"col-md-3 count-grid\">
                        <div class=\"count hvr-bounce-to-bottom\">
                            <div class=\"numscroller numscroller-big-bottom roller-title-number-3 scrollzip isShown\" data-slno=\"3\" data-min=\"0\" data-max=\"3272\" data-delay=\".5\" data-increment=\"5\">7</div>
                            <span></span>
                            <h5>Evènements à venir cette semaine</h5>
                        </div>
                    </div>
                    <div class=\"col-md-3 count-grid\">
                        <div class=\"count hvr-bounce-to-bottom\">
                            <div class=\"numscroller numscroller-big-bottom roller-title-number-4 scrollzip isShown\" data-slno=\"4\" data-min=\"0\" data-max=\"1509\" data-delay=\".5\" data-increment=\"5\">15</div>
                            <span></span>
                            <h5>Offres de covoiturage</h5>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
            <div class=\"statsimg\">
                <div class=\"quote\">
                    <span></span>
                    <h3>Réussir ensemble, le signe du succès</h3>
                    <span></span>
                </div>
            </div>
        </div>
    ";
    }

    // line 1098
    public function block_footer($context, array $blocks = array())
    {
        // line 1099
        echo "        <div class=\"copyright-agile\">
            <p>© 2018 All rights reserved | Design by <a href=\"#\">Davinci Coders</a></p>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1443 => 1099,  1440 => 1098,  1390 => 1040,  1387 => 1039,  1374 => 1026,  1366 => 1021,  1358 => 1016,  1350 => 1011,  1342 => 1006,  1334 => 1001,  1326 => 996,  1318 => 991,  1310 => 986,  1302 => 981,  1294 => 976,  1286 => 971,  1276 => 963,  1273 => 962,  1163 => 845,  1160 => 844,  1149 => 831,  1142 => 827,  1128 => 816,  1118 => 809,  1109 => 803,  1102 => 799,  1085 => 785,  1074 => 777,  1065 => 771,  1058 => 767,  1026 => 737,  1023 => 736,  906 => 616,  903 => 615,  890 => 601,  885 => 599,  881 => 598,  878 => 597,  876 => 596,  872 => 594,  867 => 592,  862 => 591,  860 => 590,  850 => 583,  846 => 582,  842 => 581,  838 => 580,  834 => 579,  826 => 574,  821 => 571,  818 => 570,  804 => 492,  800 => 491,  796 => 490,  792 => 489,  788 => 488,  784 => 487,  780 => 486,  776 => 485,  772 => 484,  768 => 483,  764 => 482,  761 => 481,  758 => 480,  674 => 399,  670 => 398,  666 => 397,  662 => 396,  658 => 395,  653 => 394,  650 => 393,  644 => 391,  639 => 388,  636 => 387,  631 => 502,  629 => 480,  626 => 479,  624 => 393,  619 => 391,  616 => 390,  614 => 387,  611 => 386,  608 => 385,  600 => 1103,  598 => 1098,  585 => 1087,  583 => 1039,  577 => 1035,  575 => 962,  563 => 952,  561 => 844,  553 => 838,  551 => 736,  543 => 730,  541 => 615,  535 => 611,  533 => 570,  529 => 568,  515 => 556,  511 => 554,  507 => 552,  503 => 551,  499 => 550,  495 => 549,  491 => 548,  486 => 547,  477 => 540,  473 => 538,  469 => 536,  465 => 534,  461 => 532,  457 => 530,  453 => 528,  449 => 526,  445 => 524,  443 => 523,  424 => 506,  422 => 505,  419 => 504,  417 => 385,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:index.html.twig", "C:\\wamp64\\www\\pidev00\\app/Resources\\views/default/index.html.twig");
    }
}
