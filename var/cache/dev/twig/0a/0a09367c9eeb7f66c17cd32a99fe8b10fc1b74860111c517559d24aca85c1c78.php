<?php

/* @Club/Default/afficheclub.html.twig */
class __TwigTemplate_3b346148d31c3402da99ae9632b66e0d2d2f3830146b1eeae36c27d68a1c0b66 extends Twig_Template
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
        $__internal_353b6ab559714dee305b534d4d34c4486d5a37b9699d8838f69875610b2864ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_353b6ab559714dee305b534d4d34c4486d5a37b9699d8838f69875610b2864ff->enter($__internal_353b6ab559714dee305b534d4d34c4486d5a37b9699d8838f69875610b2864ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Club/Default/afficheclub.html.twig"));

        $__internal_8d759f1c4b72da18ee1a0220a3b82e5a588ad657eeb885dd233eaee98edf61dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d759f1c4b72da18ee1a0220a3b82e5a588ad657eeb885dd233eaee98edf61dc->enter($__internal_8d759f1c4b72da18ee1a0220a3b82e5a588ad657eeb885dd233eaee98edf61dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Club/Default/afficheclub.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    ";
        // line 4
        $this->loadTemplate("admin/partial/header.html.twig", "@Club/Default/afficheclub.html.twig", 4)->display($context);
        // line 5
        echo "</head>

<body class=\"no-skin\">
";
        // line 8
        $this->loadTemplate("admin/partial/body_list_club.html.twig", "@Club/Default/afficheclub.html.twig", 8)->display($context);
        // line 9
        $this->loadTemplate("admin/partial/script.html.twig", "@Club/Default/afficheclub.html.twig", 9)->display($context);
        // line 10
        echo "</body>
</html>
";
        
        $__internal_353b6ab559714dee305b534d4d34c4486d5a37b9699d8838f69875610b2864ff->leave($__internal_353b6ab559714dee305b534d4d34c4486d5a37b9699d8838f69875610b2864ff_prof);

        
        $__internal_8d759f1c4b72da18ee1a0220a3b82e5a588ad657eeb885dd233eaee98edf61dc->leave($__internal_8d759f1c4b72da18ee1a0220a3b82e5a588ad657eeb885dd233eaee98edf61dc_prof);

    }

    public function getTemplateName()
    {
        return "@Club/Default/afficheclub.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 10,  39 => 9,  37 => 8,  32 => 5,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    {% include \"admin/partial/header.html.twig\" %}
</head>

<body class=\"no-skin\">
{% include \"admin/partial/body_list_club.html.twig\" %}
{% include \"admin/partial/script.html.twig\" %}
</body>
</html>
", "@Club/Default/afficheclub.html.twig", "C:\\wamp64\\www\\pidemo\\src\\EspritEntreAide\\ClubBundle\\Resources\\views\\Default\\afficheclub.html.twig");
    }
}
