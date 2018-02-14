<?php

/* admin/index.html.twig */
class __TwigTemplate_d7036b1e999952d1babfa5f0f2e8ab0994837c71d0518c5acb738f6b361829ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a7cab9807f97c7f3a3fc4fc1d1ba57ba14a7c101fa1e9fc2ea4569c71dada28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a7cab9807f97c7f3a3fc4fc1d1ba57ba14a7c101fa1e9fc2ea4569c71dada28->enter($__internal_2a7cab9807f97c7f3a3fc4fc1d1ba57ba14a7c101fa1e9fc2ea4569c71dada28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_ad63eef0a5c91050e9d50e52dd95e0568566784da11549df0d562bdb1c97b522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad63eef0a5c91050e9d50e52dd95e0568566784da11549df0d562bdb1c97b522->enter($__internal_ad63eef0a5c91050e9d50e52dd95e0568566784da11549df0d562bdb1c97b522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  ";
        // line 4
        $this->loadTemplate("admin/partial/header.html.twig", "admin/index.html.twig", 4)->display($context);
        // line 5
        echo "</head>

<body class=\"no-skin\">
";
        // line 8
        $this->loadTemplate("admin/partial/body.html.twig", "admin/index.html.twig", 8)->display($context);
        // line 9
        echo "

";
        // line 11
        $this->loadTemplate("admin/partial/script.html.twig", "admin/index.html.twig", 11)->display($context);
        // line 12
        echo "</body>
</html>
";
        
        $__internal_2a7cab9807f97c7f3a3fc4fc1d1ba57ba14a7c101fa1e9fc2ea4569c71dada28->leave($__internal_2a7cab9807f97c7f3a3fc4fc1d1ba57ba14a7c101fa1e9fc2ea4569c71dada28_prof);

        
        $__internal_ad63eef0a5c91050e9d50e52dd95e0568566784da11549df0d562bdb1c97b522->leave($__internal_ad63eef0a5c91050e9d50e52dd95e0568566784da11549df0d562bdb1c97b522_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 12,  43 => 11,  39 => 9,  37 => 8,  32 => 5,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  {% include \"admin/partial/header.html.twig\" %}
</head>

<body class=\"no-skin\">
{% include \"admin/partial/body.html.twig\" %}


{% include \"admin/partial/script.html.twig\" %}
</body>
</html>
", "admin/index.html.twig", "C:\\wamp64\\www\\pidev00\\app\\Resources\\views\\admin\\index.html.twig");
    }
}
