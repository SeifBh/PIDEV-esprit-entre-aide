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
        $__internal_a269b8e934217085b612cd4c3321c7e9664378bb2e35d4ffb93f5b60c8eb6855 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a269b8e934217085b612cd4c3321c7e9664378bb2e35d4ffb93f5b60c8eb6855->enter($__internal_a269b8e934217085b612cd4c3321c7e9664378bb2e35d4ffb93f5b60c8eb6855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_01078f4016cb99c137c56f539b7f64cdb97a7b6030625cb5b927f3f124b91276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01078f4016cb99c137c56f539b7f64cdb97a7b6030625cb5b927f3f124b91276->enter($__internal_01078f4016cb99c137c56f539b7f64cdb97a7b6030625cb5b927f3f124b91276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

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
        
        $__internal_a269b8e934217085b612cd4c3321c7e9664378bb2e35d4ffb93f5b60c8eb6855->leave($__internal_a269b8e934217085b612cd4c3321c7e9664378bb2e35d4ffb93f5b60c8eb6855_prof);

        
        $__internal_01078f4016cb99c137c56f539b7f64cdb97a7b6030625cb5b927f3f124b91276->leave($__internal_01078f4016cb99c137c56f539b7f64cdb97a7b6030625cb5b927f3f124b91276_prof);

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
", "admin/index.html.twig", "C:\\wamp64\\www\\pidemo\\app\\Resources\\views\\admin\\index.html.twig");
    }
}
