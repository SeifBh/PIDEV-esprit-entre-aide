<?php

/* @Store/Default/ajoutStore.html.twig */
class __TwigTemplate_0f13b998ea47e285203d29a3af0b4880f518f8b7d04ba63c8aac5b025b038305 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":default:test.html.twig", "@Store/Default/ajoutStore.html.twig", 1);
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
        $__internal_9c973e182c75baebcb251c9ca32aae285e4f15540f7315f926c1ff656cc5c94a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c973e182c75baebcb251c9ca32aae285e4f15540f7315f926c1ff656cc5c94a->enter($__internal_9c973e182c75baebcb251c9ca32aae285e4f15540f7315f926c1ff656cc5c94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Store/Default/ajoutStore.html.twig"));

        $__internal_e215ac7d4ac2c3ce3d50842d92e20396455ed8ceaabd8ffad0c2bd7b3551a6d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e215ac7d4ac2c3ce3d50842d92e20396455ed8ceaabd8ffad0c2bd7b3551a6d6->enter($__internal_e215ac7d4ac2c3ce3d50842d92e20396455ed8ceaabd8ffad0c2bd7b3551a6d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Store/Default/ajoutStore.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c973e182c75baebcb251c9ca32aae285e4f15540f7315f926c1ff656cc5c94a->leave($__internal_9c973e182c75baebcb251c9ca32aae285e4f15540f7315f926c1ff656cc5c94a_prof);

        
        $__internal_e215ac7d4ac2c3ce3d50842d92e20396455ed8ceaabd8ffad0c2bd7b3551a6d6->leave($__internal_e215ac7d4ac2c3ce3d50842d92e20396455ed8ceaabd8ffad0c2bd7b3551a6d6_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_76e0ba525def6e2dc4e8335e2f65ed1fc68a44ac13818e61a342a6924bf1e516 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76e0ba525def6e2dc4e8335e2f65ed1fc68a44ac13818e61a342a6924bf1e516->enter($__internal_76e0ba525def6e2dc4e8335e2f65ed1fc68a44ac13818e61a342a6924bf1e516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_01ff557de8ceec8b2937ad112583e6602e42ff490f39631313291e724ed1f526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01ff557de8ceec8b2937ad112583e6602e42ff490f39631313291e724ed1f526->enter($__internal_01ff557de8ceec8b2937ad112583e6602e42ff490f39631313291e724ed1f526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des demandes";
        
        $__internal_01ff557de8ceec8b2937ad112583e6602e42ff490f39631313291e724ed1f526->leave($__internal_01ff557de8ceec8b2937ad112583e6602e42ff490f39631313291e724ed1f526_prof);

        
        $__internal_76e0ba525def6e2dc4e8335e2f65ed1fc68a44ac13818e61a342a6924bf1e516->leave($__internal_76e0ba525def6e2dc4e8335e2f65ed1fc68a44ac13818e61a342a6924bf1e516_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_4a8851d20b98eac8466b76194076d1b8630b92e7faa35a437dbe6ccffae8a7fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a8851d20b98eac8466b76194076d1b8630b92e7faa35a437dbe6ccffae8a7fd->enter($__internal_4a8851d20b98eac8466b76194076d1b8630b92e7faa35a437dbe6ccffae8a7fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2b7d4e9b092e8284ee928747f85ca8177dbe2cc0b5c18c30bd3cadc748339694 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b7d4e9b092e8284ee928747f85ca8177dbe2cc0b5c18c30bd3cadc748339694->enter($__internal_2b7d4e9b092e8284ee928747f85ca8177dbe2cc0b5c18c30bd3cadc748339694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style type=\"text/css\">
        .important { color: #336699; }

    </style>
";
        
        $__internal_2b7d4e9b092e8284ee928747f85ca8177dbe2cc0b5c18c30bd3cadc748339694->leave($__internal_2b7d4e9b092e8284ee928747f85ca8177dbe2cc0b5c18c30bd3cadc748339694_prof);

        
        $__internal_4a8851d20b98eac8466b76194076d1b8630b92e7faa35a437dbe6ccffae8a7fd->leave($__internal_4a8851d20b98eac8466b76194076d1b8630b92e7faa35a437dbe6ccffae8a7fd_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_454be211b5187bbae6eabf6f0475f3c6146ce9bfd2f8f90ab69a71d7eb132b70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_454be211b5187bbae6eabf6f0475f3c6146ce9bfd2f8f90ab69a71d7eb132b70->enter($__internal_454be211b5187bbae6eabf6f0475f3c6146ce9bfd2f8f90ab69a71d7eb132b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_cbd1a0fc3596dae2492076c54ecc2f2beb0229302155fae4ff8b446872e34b69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbd1a0fc3596dae2492076c54ecc2f2beb0229302155fae4ff8b446872e34b69->enter($__internal_cbd1a0fc3596dae2492076c54ecc2f2beb0229302155fae4ff8b446872e34b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    <table class=\"table\">
<h1>Ajout d'un nouveau store</h1>
    ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), 'form_start');
        echo "
    <tr>

";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), 'form_end');
        echo "
    <table class=\"table\">
";
        
        $__internal_cbd1a0fc3596dae2492076c54ecc2f2beb0229302155fae4ff8b446872e34b69->leave($__internal_cbd1a0fc3596dae2492076c54ecc2f2beb0229302155fae4ff8b446872e34b69_prof);

        
        $__internal_454be211b5187bbae6eabf6f0475f3c6146ce9bfd2f8f90ab69a71d7eb132b70->leave($__internal_454be211b5187bbae6eabf6f0475f3c6146ce9bfd2f8f90ab69a71d7eb132b70_prof);

    }

    public function getTemplateName()
    {
        return "@Store/Default/ajoutStore.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 18,  99 => 15,  95 => 13,  86 => 12,  69 => 6,  60 => 5,  42 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":default:test.html.twig\" %}


{% block title %}Liste des demandes{% endblock %}
{% block head %}
    {{ parent() }}
    <style type=\"text/css\">
        .important { color: #336699; }

    </style>
{% endblock %}
{% block content %}
    <table class=\"table\">
<h1>Ajout d'un nouveau store</h1>
    {{ form_start(form) }}
    <tr>

{{ form_end(form) }}
    <table class=\"table\">
{% endblock %}", "@Store/Default/ajoutStore.html.twig", "C:\\wamp64\\www\\pidev00\\src\\EspritEntreAide\\StoreBundle\\Resources\\views\\Default\\ajoutStore.html.twig");
    }
}
