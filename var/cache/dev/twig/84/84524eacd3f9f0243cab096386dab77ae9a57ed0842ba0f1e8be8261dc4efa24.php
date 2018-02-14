<?php

/* AnnonceBundle::AjouterAnnonce.html.twig */
class __TwigTemplate_1742a5fd407f5a1e630a5ce09740cf9f28706fd0431527a0b62d8edb0431b3bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":default:test.html.twig", "AnnonceBundle::AjouterAnnonce.html.twig", 1);
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
        $__internal_f91f1f6dc947e380cbfb7a3bdceb11ba721427c45944e2bd81e3e850397df56e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f91f1f6dc947e380cbfb7a3bdceb11ba721427c45944e2bd81e3e850397df56e->enter($__internal_f91f1f6dc947e380cbfb7a3bdceb11ba721427c45944e2bd81e3e850397df56e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnnonceBundle::AjouterAnnonce.html.twig"));

        $__internal_17a68794ca1e31986665234a1ee2e6ed090c7d0c7e861a90133fd25f52f81ada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17a68794ca1e31986665234a1ee2e6ed090c7d0c7e861a90133fd25f52f81ada->enter($__internal_17a68794ca1e31986665234a1ee2e6ed090c7d0c7e861a90133fd25f52f81ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnnonceBundle::AjouterAnnonce.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f91f1f6dc947e380cbfb7a3bdceb11ba721427c45944e2bd81e3e850397df56e->leave($__internal_f91f1f6dc947e380cbfb7a3bdceb11ba721427c45944e2bd81e3e850397df56e_prof);

        
        $__internal_17a68794ca1e31986665234a1ee2e6ed090c7d0c7e861a90133fd25f52f81ada->leave($__internal_17a68794ca1e31986665234a1ee2e6ed090c7d0c7e861a90133fd25f52f81ada_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9e462ab440b3e83658158f5b15c346d7c15e03473556593285554549a5e9411 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9e462ab440b3e83658158f5b15c346d7c15e03473556593285554549a5e9411->enter($__internal_e9e462ab440b3e83658158f5b15c346d7c15e03473556593285554549a5e9411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6e124fd161694790ec43ef228cdfd75945c17ce808aded462efa8b938363d094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e124fd161694790ec43ef228cdfd75945c17ce808aded462efa8b938363d094->enter($__internal_6e124fd161694790ec43ef228cdfd75945c17ce808aded462efa8b938363d094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Annonce";
        
        $__internal_6e124fd161694790ec43ef228cdfd75945c17ce808aded462efa8b938363d094->leave($__internal_6e124fd161694790ec43ef228cdfd75945c17ce808aded462efa8b938363d094_prof);

        
        $__internal_e9e462ab440b3e83658158f5b15c346d7c15e03473556593285554549a5e9411->leave($__internal_e9e462ab440b3e83658158f5b15c346d7c15e03473556593285554549a5e9411_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_7fa6e4d442fe82114377bc65d2d4bb6c544b9f304d6d2eca6f5aa4fe906a6849 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fa6e4d442fe82114377bc65d2d4bb6c544b9f304d6d2eca6f5aa4fe906a6849->enter($__internal_7fa6e4d442fe82114377bc65d2d4bb6c544b9f304d6d2eca6f5aa4fe906a6849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1e9208fa3ebf513024a3650bd7620d8f512e3aed8d4a15e4dca9640f3fd4abc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e9208fa3ebf513024a3650bd7620d8f512e3aed8d4a15e4dca9640f3fd4abc9->enter($__internal_1e9208fa3ebf513024a3650bd7620d8f512e3aed8d4a15e4dca9640f3fd4abc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style type=\"text/css\">
        .important { color: #336699; }

    </style>
";
        
        $__internal_1e9208fa3ebf513024a3650bd7620d8f512e3aed8d4a15e4dca9640f3fd4abc9->leave($__internal_1e9208fa3ebf513024a3650bd7620d8f512e3aed8d4a15e4dca9640f3fd4abc9_prof);

        
        $__internal_7fa6e4d442fe82114377bc65d2d4bb6c544b9f304d6d2eca6f5aa4fe906a6849->leave($__internal_7fa6e4d442fe82114377bc65d2d4bb6c544b9f304d6d2eca6f5aa4fe906a6849_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_81042138876a4ffe4ccd859927dc15d362982c3e83b1a45c288e6730e6880885 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81042138876a4ffe4ccd859927dc15d362982c3e83b1a45c288e6730e6880885->enter($__internal_81042138876a4ffe4ccd859927dc15d362982c3e83b1a45c288e6730e6880885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_edf0d7544b753563b127463f467ae6f99b90722d15f4646b353d71b2c5e37345 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edf0d7544b753563b127463f467ae6f99b90722d15f4646b353d71b2c5e37345->enter($__internal_edf0d7544b753563b127463f467ae6f99b90722d15f4646b353d71b2c5e37345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    <div class=\"big-div-club\">
        <div class=\"col-md-8 middlebarmenu\">
            <ul class=\"snip1189\">
                <li><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonce_homepage");
        echo "\">revenir a la liste des annonces</a></li>
            </ul>
        </div>
    </div><br>
    <!--<p class=\"important\"></p>-->
    <div class=\"ajouter annonce\">
        <fieldset>
            <h1>Ajouter Annonce</h1>
            ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->getSourceContext()); })()), 'form_start');
        echo "

            ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->getSourceContext()); })()), 'form_end');
        echo "
        </fieldset>
        <span style=\"alignment: right\"></span>
    </div>

";
        
        $__internal_edf0d7544b753563b127463f467ae6f99b90722d15f4646b353d71b2c5e37345->leave($__internal_edf0d7544b753563b127463f467ae6f99b90722d15f4646b353d71b2c5e37345_prof);

        
        $__internal_81042138876a4ffe4ccd859927dc15d362982c3e83b1a45c288e6730e6880885->leave($__internal_81042138876a4ffe4ccd859927dc15d362982c3e83b1a45c288e6730e6880885_prof);

    }

    public function getTemplateName()
    {
        return "AnnonceBundle::AjouterAnnonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 26,  111 => 24,  100 => 16,  95 => 13,  86 => 12,  69 => 6,  60 => 5,  42 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":default:test.html.twig\" %}


{% block title %}Annonce{% endblock %}
{% block head %}
    {{ parent() }}
    <style type=\"text/css\">
        .important { color: #336699; }

    </style>
{% endblock %}
{% block content %}
    <div class=\"big-div-club\">
        <div class=\"col-md-8 middlebarmenu\">
            <ul class=\"snip1189\">
                <li><a href=\"{{ path('annonce_homepage') }}\">revenir a la liste des annonces</a></li>
            </ul>
        </div>
    </div><br>
    <!--<p class=\"important\"></p>-->
    <div class=\"ajouter annonce\">
        <fieldset>
            <h1>Ajouter Annonce</h1>
            {{ form_start(form) }}

            {{ form_end(form) }}
        </fieldset>
        <span style=\"alignment: right\"></span>
    </div>

{% endblock %}", "AnnonceBundle::AjouterAnnonce.html.twig", "C:\\wamp64\\www\\pidev00\\src\\EspritEntreAide\\AnnonceBundle/Resources/views/AjouterAnnonce.html.twig");
    }
}
