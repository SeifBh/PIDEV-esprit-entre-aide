<?php

/* AnnonceBundle:Default:index.html.twig */
class __TwigTemplate_c6fe72e91162f41d3ac1a2f48914d43819b4d09284e5dab6f69a074dc1483659 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":default:test.html.twig", "AnnonceBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":default:test.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88876aea56521d69588cae04180a4f3beb54039c4a25b324654edae8de99d6bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88876aea56521d69588cae04180a4f3beb54039c4a25b324654edae8de99d6bf->enter($__internal_88876aea56521d69588cae04180a4f3beb54039c4a25b324654edae8de99d6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnnonceBundle:Default:index.html.twig"));

        $__internal_9f92b922ce30ec25273bc6ed0bd62384fba6060f898ea5668b617cfec8a90615 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f92b922ce30ec25273bc6ed0bd62384fba6060f898ea5668b617cfec8a90615->enter($__internal_9f92b922ce30ec25273bc6ed0bd62384fba6060f898ea5668b617cfec8a90615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnnonceBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88876aea56521d69588cae04180a4f3beb54039c4a25b324654edae8de99d6bf->leave($__internal_88876aea56521d69588cae04180a4f3beb54039c4a25b324654edae8de99d6bf_prof);

        
        $__internal_9f92b922ce30ec25273bc6ed0bd62384fba6060f898ea5668b617cfec8a90615->leave($__internal_9f92b922ce30ec25273bc6ed0bd62384fba6060f898ea5668b617cfec8a90615_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_13a2305c982350bed0b9ed084ea3ba2c195f78b7fcdf90d264167b7675b53d21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13a2305c982350bed0b9ed084ea3ba2c195f78b7fcdf90d264167b7675b53d21->enter($__internal_13a2305c982350bed0b9ed084ea3ba2c195f78b7fcdf90d264167b7675b53d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8788936723a1dda2eff719283aeea3785320f3f41619c5eb043b9bd389618a5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8788936723a1dda2eff719283aeea3785320f3f41619c5eb043b9bd389618a5a->enter($__internal_8788936723a1dda2eff719283aeea3785320f3f41619c5eb043b9bd389618a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Evenements";
        
        $__internal_8788936723a1dda2eff719283aeea3785320f3f41619c5eb043b9bd389618a5a->leave($__internal_8788936723a1dda2eff719283aeea3785320f3f41619c5eb043b9bd389618a5a_prof);

        
        $__internal_13a2305c982350bed0b9ed084ea3ba2c195f78b7fcdf90d264167b7675b53d21->leave($__internal_13a2305c982350bed0b9ed084ea3ba2c195f78b7fcdf90d264167b7675b53d21_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_db60ba277a1e90b2e6fee26141051160af48160890b1743e0a10c3da6cd6c2e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db60ba277a1e90b2e6fee26141051160af48160890b1743e0a10c3da6cd6c2e0->enter($__internal_db60ba277a1e90b2e6fee26141051160af48160890b1743e0a10c3da6cd6c2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8271e11d52833b1e3518dd817ae232eabee9b6017d5be8e64eb7fb4c5e1f1294 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8271e11d52833b1e3518dd817ae232eabee9b6017d5be8e64eb7fb4c5e1f1294->enter($__internal_8271e11d52833b1e3518dd817ae232eabee9b6017d5be8e64eb7fb4c5e1f1294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style type=\"text/css\">
        .important { color: #336699; }

    </style>
";
        
        $__internal_8271e11d52833b1e3518dd817ae232eabee9b6017d5be8e64eb7fb4c5e1f1294->leave($__internal_8271e11d52833b1e3518dd817ae232eabee9b6017d5be8e64eb7fb4c5e1f1294_prof);

        
        $__internal_db60ba277a1e90b2e6fee26141051160af48160890b1743e0a10c3da6cd6c2e0->leave($__internal_db60ba277a1e90b2e6fee26141051160af48160890b1743e0a10c3da6cd6c2e0_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_0f9cd6547afda4cd632a8e3c61fcfb249022e57482acb8055f7f46a9d3ece1aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f9cd6547afda4cd632a8e3c61fcfb249022e57482acb8055f7f46a9d3ece1aa->enter($__internal_0f9cd6547afda4cd632a8e3c61fcfb249022e57482acb8055f7f46a9d3ece1aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5a676df34503cce829cb435ff9772d65da568ef56fad246d2ac0884077ac0a1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a676df34503cce829cb435ff9772d65da568ef56fad246d2ac0884077ac0a1d->enter($__internal_5a676df34503cce829cb435ff9772d65da568ef56fad246d2ac0884077ac0a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    <div class=\"big-div\">
        <h1>Bienvenue</h1>
    </div>
    <div>
        <center>
            <a href=";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_annonce_ajouter");
        echo " > Ajouter une annonce </a><br><br>

        </center>
    </div>

    <p class=\"important\">

    </p>
";
        
        $__internal_5a676df34503cce829cb435ff9772d65da568ef56fad246d2ac0884077ac0a1d->leave($__internal_5a676df34503cce829cb435ff9772d65da568ef56fad246d2ac0884077ac0a1d_prof);

        
        $__internal_0f9cd6547afda4cd632a8e3c61fcfb249022e57482acb8055f7f46a9d3ece1aa->leave($__internal_0f9cd6547afda4cd632a8e3c61fcfb249022e57482acb8055f7f46a9d3ece1aa_prof);

    }

    public function getTemplateName()
    {
        return "AnnonceBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 18,  95 => 13,  86 => 12,  69 => 6,  60 => 5,  42 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":default:test.html.twig\" %}


{% block title %}Evenements{% endblock %}
{% block head %}
    {{ parent() }}
    <style type=\"text/css\">
        .important { color: #336699; }

    </style>
{% endblock %}
{% block content %}
    <div class=\"big-div\">
        <h1>Bienvenue</h1>
    </div>
    <div>
        <center>
            <a href={{ path('_annonce_ajouter')}} > Ajouter une annonce </a><br><br>

        </center>
    </div>

    <p class=\"important\">

    </p>
{% endblock %}", "AnnonceBundle:Default:index.html.twig", "C:\\wamp64\\www\\pidev00\\src\\EspritEntreAide\\AnnonceBundle/Resources/views/Default/index.html.twig");
    }
}
