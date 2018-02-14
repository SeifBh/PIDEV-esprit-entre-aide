<?php

/* :default:test.html.twig */
class __TwigTemplate_9ee65b30abb1ff2057cfddbb16e868a3f391c13bcab5b53c211edb4e07d1c242 extends Twig_Template
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
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee2c0047e54fec678c6f194de555f3727d63e2e590991b6838be617031f87ce1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee2c0047e54fec678c6f194de555f3727d63e2e590991b6838be617031f87ce1->enter($__internal_ee2c0047e54fec678c6f194de555f3727d63e2e590991b6838be617031f87ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:test.html.twig"));

        $__internal_a66e0443a19755f29368aabf55f9ed75c08b9f2b5e533096445d17016713a4d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a66e0443a19755f29368aabf55f9ed75c08b9f2b5e533096445d17016713a4d6->enter($__internal_a66e0443a19755f29368aabf55f9ed75c08b9f2b5e533096445d17016713a4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:test.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 121
        echo "</head>
<body>

<div class=\"section-header\">
    ";
        // line 125
        $this->displayBlock('header', $context, $blocks);
        // line 149
        echo "</div>
<div id=\"content\">";
        // line 150
        $this->displayBlock('content', $context, $blocks);
        echo "</div>

</body>
<div class=\"section-footer\">
    ";
        // line 154
        $this->displayBlock('footer', $context, $blocks);
        // line 159
        echo "</div>
</html>";
        
        $__internal_ee2c0047e54fec678c6f194de555f3727d63e2e590991b6838be617031f87ce1->leave($__internal_ee2c0047e54fec678c6f194de555f3727d63e2e590991b6838be617031f87ce1_prof);

        
        $__internal_a66e0443a19755f29368aabf55f9ed75c08b9f2b5e533096445d17016713a4d6->leave($__internal_a66e0443a19755f29368aabf55f9ed75c08b9f2b5e533096445d17016713a4d6_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_c4595471f136c4771e626b626f0e9c704706e869a190fb6bbdabf27b5006beba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4595471f136c4771e626b626f0e9c704706e869a190fb6bbdabf27b5006beba->enter($__internal_c4595471f136c4771e626b626f0e9c704706e869a190fb6bbdabf27b5006beba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7e57291d99ba0de9860bb3c2081fbe4639ffeb14922c35c7dbbaa74f196e6cd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e57291d99ba0de9860bb3c2081fbe4639ffeb14922c35c7dbbaa74f196e6cd4->enter($__internal_7e57291d99ba0de9860bb3c2081fbe4639ffeb14922c35c7dbbaa74f196e6cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "
    ";
        // line 6
        $this->displayBlock('meta', $context, $blocks);
        // line 9
        echo "
            <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo " </title>

    ";
        // line 12
        $this->displayBlock('style', $context, $blocks);
        // line 96
        echo "
    ";
        // line 97
        $this->displayBlock('script', $context, $blocks);
        // line 119
        echo "
    ";
        
        $__internal_7e57291d99ba0de9860bb3c2081fbe4639ffeb14922c35c7dbbaa74f196e6cd4->leave($__internal_7e57291d99ba0de9860bb3c2081fbe4639ffeb14922c35c7dbbaa74f196e6cd4_prof);

        
        $__internal_c4595471f136c4771e626b626f0e9c704706e869a190fb6bbdabf27b5006beba->leave($__internal_c4595471f136c4771e626b626f0e9c704706e869a190fb6bbdabf27b5006beba_prof);

    }

    // line 6
    public function block_meta($context, array $blocks = array())
    {
        $__internal_cfc537a52ae50bf1ba779f868fdd71054224409bfa818c9806c11ac3b4d09c81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfc537a52ae50bf1ba779f868fdd71054224409bfa818c9806c11ac3b4d09c81->enter($__internal_cfc537a52ae50bf1ba779f868fdd71054224409bfa818c9806c11ac3b4d09c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        $__internal_07366df01830d107919c59f030e0fef79a8423aa3f1d0c3717d83e56aed0e81a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07366df01830d107919c59f030e0fef79a8423aa3f1d0c3717d83e56aed0e81a->enter($__internal_07366df01830d107919c59f030e0fef79a8423aa3f1d0c3717d83e56aed0e81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 7
        echo "    <meta charset=\"utf-8\" />
    ";
        
        $__internal_07366df01830d107919c59f030e0fef79a8423aa3f1d0c3717d83e56aed0e81a->leave($__internal_07366df01830d107919c59f030e0fef79a8423aa3f1d0c3717d83e56aed0e81a_prof);

        
        $__internal_cfc537a52ae50bf1ba779f868fdd71054224409bfa818c9806c11ac3b4d09c81->leave($__internal_cfc537a52ae50bf1ba779f868fdd71054224409bfa818c9806c11ac3b4d09c81_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b5799a96a40eb6788a5ed9d2dd7bb967413295d811a053ebbe59497f7404ee6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b5799a96a40eb6788a5ed9d2dd7bb967413295d811a053ebbe59497f7404ee6->enter($__internal_5b5799a96a40eb6788a5ed9d2dd7bb967413295d811a053ebbe59497f7404ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7f7937b3c402026adf31c31637032a504e40d11697ac7f3462277961e8028d43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f7937b3c402026adf31c31637032a504e40d11697ac7f3462277961e8028d43->enter($__internal_7f7937b3c402026adf31c31637032a504e40d11697ac7f3462277961e8028d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Espace Etudiant 12";
        
        $__internal_7f7937b3c402026adf31c31637032a504e40d11697ac7f3462277961e8028d43->leave($__internal_7f7937b3c402026adf31c31637032a504e40d11697ac7f3462277961e8028d43_prof);

        
        $__internal_5b5799a96a40eb6788a5ed9d2dd7bb967413295d811a053ebbe59497f7404ee6->leave($__internal_5b5799a96a40eb6788a5ed9d2dd7bb967413295d811a053ebbe59497f7404ee6_prof);

    }

    // line 12
    public function block_style($context, array $blocks = array())
    {
        $__internal_327cfe5b19792e6ad19a14a68533e4f317b3df78d8781c3e4f0d992a75deb22e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_327cfe5b19792e6ad19a14a68533e4f317b3df78d8781c3e4f0d992a75deb22e->enter($__internal_327cfe5b19792e6ad19a14a68533e4f317b3df78d8781c3e4f0d992a75deb22e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_60c5479e9d60aa9786557adc1dfe64815bf458124ccb8935e323eef06e5e3f9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60c5479e9d60aa9786557adc1dfe64815bf458124ccb8935e323eef06e5e3f9f->enter($__internal_60c5479e9d60aa9786557adc1dfe64815bf458124ccb8935e323eef06e5e3f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 13
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/nav.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/lightbox.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/flexslider.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
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
        
        $__internal_60c5479e9d60aa9786557adc1dfe64815bf458124ccb8935e323eef06e5e3f9f->leave($__internal_60c5479e9d60aa9786557adc1dfe64815bf458124ccb8935e323eef06e5e3f9f_prof);

        
        $__internal_327cfe5b19792e6ad19a14a68533e4f317b3df78d8781c3e4f0d992a75deb22e->leave($__internal_327cfe5b19792e6ad19a14a68533e4f317b3df78d8781c3e4f0d992a75deb22e_prof);

    }

    // line 97
    public function block_script($context, array $blocks = array())
    {
        $__internal_926ffe6ffc66d1c0852958cee56f36af9800b76d7992fd24a0262ab531cff69b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_926ffe6ffc66d1c0852958cee56f36af9800b76d7992fd24a0262ab531cff69b->enter($__internal_926ffe6ffc66d1c0852958cee56f36af9800b76d7992fd24a0262ab531cff69b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_3c6595a32d147aa036d33a06a24492c7f973c9da52819f6cf582d1d802383e5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c6595a32d147aa036d33a06a24492c7f973c9da52819f6cf582d1d802383e5e->enter($__internal_3c6595a32d147aa036d33a06a24492c7f973c9da52819f6cf582d1d802383e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 98
        echo "            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/uisearch.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/SmoothScroll.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/numscroller-1.0.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/nav.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/move-top.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/lightbox-plus-jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/easing.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/classie.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>

            <script>
            </script>





    ";
        
        $__internal_3c6595a32d147aa036d33a06a24492c7f973c9da52819f6cf582d1d802383e5e->leave($__internal_3c6595a32d147aa036d33a06a24492c7f973c9da52819f6cf582d1d802383e5e_prof);

        
        $__internal_926ffe6ffc66d1c0852958cee56f36af9800b76d7992fd24a0262ab531cff69b->leave($__internal_926ffe6ffc66d1c0852958cee56f36af9800b76d7992fd24a0262ab531cff69b_prof);

    }

    // line 125
    public function block_header($context, array $blocks = array())
    {
        $__internal_a3149fcf91955427dc4888b98e87e3d7200eb356bb46c851c33d0585a0974110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3149fcf91955427dc4888b98e87e3d7200eb356bb46c851c33d0585a0974110->enter($__internal_a3149fcf91955427dc4888b98e87e3d7200eb356bb46c851c33d0585a0974110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_6de2518bf7eb3a5ebbe01663eb1f237be67ec029400049fb172495182b402b93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6de2518bf7eb3a5ebbe01663eb1f237be67ec029400049fb172495182b402b93->enter($__internal_6de2518bf7eb3a5ebbe01663eb1f237be67ec029400049fb172495182b402b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 126
        echo "            <nav class=\"navbar navbar-default\">
                    <div class=\"container-fluid\">
                            <div class=\"col-md-2\">
                                    <img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/abcd.png"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-md-8 middlebarmenu\">
                                    <ul class=\"snip1189\">
                                            <li class=\"current\"><a href=\"";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app");
        echo "\">Home</a></li>
                                            <li><a href=\"";
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonce_homepage");
        echo "\">Annonces</a></li>
                                            <li><a href=\"";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evenement_homepage");
        echo "\">Events</a></li>
                                            <li><a href=\"";
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("club_homepage");
        echo "\">Club</a></li>
                                            <li><a href=\"";
        // line 137
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("store_homepage");
        echo "\">Docs</a></li>
                                            <li><a href=\"";
        // line 138
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("spotted_homepage");
        echo "\">Spotted</a></li>

                                    </ul>
                            </div>
                            <div class=\"col-md-2\">C</div>
                    </div>
            </nav>



    ";
        
        $__internal_6de2518bf7eb3a5ebbe01663eb1f237be67ec029400049fb172495182b402b93->leave($__internal_6de2518bf7eb3a5ebbe01663eb1f237be67ec029400049fb172495182b402b93_prof);

        
        $__internal_a3149fcf91955427dc4888b98e87e3d7200eb356bb46c851c33d0585a0974110->leave($__internal_a3149fcf91955427dc4888b98e87e3d7200eb356bb46c851c33d0585a0974110_prof);

    }

    // line 150
    public function block_content($context, array $blocks = array())
    {
        $__internal_1192c318146f0fb0ba45b0d6822c81e9b5b6b6f8809110c9cbc34a5a5ce04be0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1192c318146f0fb0ba45b0d6822c81e9b5b6b6f8809110c9cbc34a5a5ce04be0->enter($__internal_1192c318146f0fb0ba45b0d6822c81e9b5b6b6f8809110c9cbc34a5a5ce04be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_eae6cd7ffc59b73a0dc5f7e0b5dc322ca3d6db61a61ed043481e1f8169e48e74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eae6cd7ffc59b73a0dc5f7e0b5dc322ca3d6db61a61ed043481e1f8169e48e74->enter($__internal_eae6cd7ffc59b73a0dc5f7e0b5dc322ca3d6db61a61ed043481e1f8169e48e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_eae6cd7ffc59b73a0dc5f7e0b5dc322ca3d6db61a61ed043481e1f8169e48e74->leave($__internal_eae6cd7ffc59b73a0dc5f7e0b5dc322ca3d6db61a61ed043481e1f8169e48e74_prof);

        
        $__internal_1192c318146f0fb0ba45b0d6822c81e9b5b6b6f8809110c9cbc34a5a5ce04be0->leave($__internal_1192c318146f0fb0ba45b0d6822c81e9b5b6b6f8809110c9cbc34a5a5ce04be0_prof);

    }

    // line 154
    public function block_footer($context, array $blocks = array())
    {
        $__internal_15a3d4b6c7e51c0e4c310751d3d2c2dacf33af679fbac59a3cff89661b4227cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15a3d4b6c7e51c0e4c310751d3d2c2dacf33af679fbac59a3cff89661b4227cc->enter($__internal_15a3d4b6c7e51c0e4c310751d3d2c2dacf33af679fbac59a3cff89661b4227cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_a69373098d02fea9c37a284e8375a5d48786715c4c1249849631877893e30c48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a69373098d02fea9c37a284e8375a5d48786715c4c1249849631877893e30c48->enter($__internal_a69373098d02fea9c37a284e8375a5d48786715c4c1249849631877893e30c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 155
        echo "        <div class=\"copyright-agile\">
            <p>© 2018 All rights reserved | Design by <a href=\"#\">Davinci Coders</a></p>
        </div>
    ";
        
        $__internal_a69373098d02fea9c37a284e8375a5d48786715c4c1249849631877893e30c48->leave($__internal_a69373098d02fea9c37a284e8375a5d48786715c4c1249849631877893e30c48_prof);

        
        $__internal_15a3d4b6c7e51c0e4c310751d3d2c2dacf33af679fbac59a3cff89661b4227cc->leave($__internal_15a3d4b6c7e51c0e4c310751d3d2c2dacf33af679fbac59a3cff89661b4227cc_prof);

    }

    public function getTemplateName()
    {
        return ":default:test.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  427 => 155,  418 => 154,  401 => 150,  380 => 138,  376 => 137,  372 => 136,  368 => 135,  364 => 134,  360 => 133,  353 => 129,  348 => 126,  339 => 125,  319 => 109,  315 => 108,  311 => 107,  307 => 106,  303 => 105,  299 => 104,  295 => 103,  291 => 102,  287 => 101,  283 => 100,  279 => 99,  276 => 98,  267 => 97,  179 => 18,  175 => 17,  171 => 16,  167 => 15,  163 => 14,  158 => 13,  149 => 12,  131 => 10,  120 => 7,  111 => 6,  100 => 119,  98 => 97,  95 => 96,  93 => 12,  88 => 10,  85 => 9,  83 => 6,  80 => 5,  71 => 4,  60 => 159,  58 => 154,  51 => 150,  48 => 149,  46 => 125,  40 => 121,  38 => 4,  33 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    {% block head %}

    {% block meta %}
    <meta charset=\"utf-8\" />
    {% endblock %}

            <title>{% block title %}Espace Etudiant 12{% endblock %} </title>

    {% block style %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/nav.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/lightbox.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/flexslider.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\">
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
    {% endblock %}

    {% block script %}
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/uisearch.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/SmoothScroll.min.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/numscroller-1.0.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/nav.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/move-top.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/lightbox-plus-jquery.min.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/jquery-2.1.4.min.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/jquery.flexslider.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/easing.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/classie.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/bootstrap.js') }}\"></script>

            <script>
            </script>





    {% endblock %}

    {% endblock %}
</head>
<body>

<div class=\"section-header\">
    {% block header %}
            <nav class=\"navbar navbar-default\">
                    <div class=\"container-fluid\">
                            <div class=\"col-md-2\">
                                    <img src=\"{{ asset(\"images/abcd.png\") }}\">
                            </div>
                            <div class=\"col-md-8 middlebarmenu\">
                                    <ul class=\"snip1189\">
                                            <li class=\"current\"><a href=\"{{ path('app') }}\">Home</a></li>
                                            <li><a href=\"{{ path('annonce_homepage') }}\">Annonces</a></li>
                                            <li><a href=\"{{ path('evenement_homepage') }}\">Events</a></li>
                                            <li><a href=\"{{ path('club_homepage') }}\">Club</a></li>
                                            <li><a href=\"{{ path('store_homepage') }}\">Docs</a></li>
                                            <li><a href=\"{{ path('spotted_homepage') }}\">Spotted</a></li>

                                    </ul>
                            </div>
                            <div class=\"col-md-2\">C</div>
                    </div>
            </nav>



    {% endblock %}
</div>
<div id=\"content\">{% block content %}{% endblock %}</div>

</body>
<div class=\"section-footer\">
    {% block footer %}
        <div class=\"copyright-agile\">
            <p>© 2018 All rights reserved | Design by <a href=\"#\">Davinci Coders</a></p>
        </div>
    {% endblock %}
</div>
</html>", ":default:test.html.twig", "C:\\wamp64\\www\\pidemo\\app/Resources\\views/default/test.html.twig");
    }
}
