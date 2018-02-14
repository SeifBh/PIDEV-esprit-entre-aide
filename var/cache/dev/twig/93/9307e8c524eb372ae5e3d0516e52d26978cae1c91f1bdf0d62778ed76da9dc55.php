<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_cf7d45a091fd43d41052341793089a8e70ac24030e8a73c06f8ebedb46198c8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4358f326d25a8194902bed448808f08cede64fc7bdc15a903558f875107b2be2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4358f326d25a8194902bed448808f08cede64fc7bdc15a903558f875107b2be2->enter($__internal_4358f326d25a8194902bed448808f08cede64fc7bdc15a903558f875107b2be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4e93092c792aaea661c422346f15f76e7bafebc3962acd8256ca2ed9a1cde426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e93092c792aaea661c422346f15f76e7bafebc3962acd8256ca2ed9a1cde426->enter($__internal_4e93092c792aaea661c422346f15f76e7bafebc3962acd8256ca2ed9a1cde426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4358f326d25a8194902bed448808f08cede64fc7bdc15a903558f875107b2be2->leave($__internal_4358f326d25a8194902bed448808f08cede64fc7bdc15a903558f875107b2be2_prof);

        
        $__internal_4e93092c792aaea661c422346f15f76e7bafebc3962acd8256ca2ed9a1cde426->leave($__internal_4e93092c792aaea661c422346f15f76e7bafebc3962acd8256ca2ed9a1cde426_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a46e65957cc40f431b5205f51671d601166b8247b4f35a3bb73fda848090dde2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a46e65957cc40f431b5205f51671d601166b8247b4f35a3bb73fda848090dde2->enter($__internal_a46e65957cc40f431b5205f51671d601166b8247b4f35a3bb73fda848090dde2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_35defda82c80d78a47a0ced890867879df7d4d354341ddbeeff7059e5ded4362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35defda82c80d78a47a0ced890867879df7d4d354341ddbeeff7059e5ded4362->enter($__internal_35defda82c80d78a47a0ced890867879df7d4d354341ddbeeff7059e5ded4362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_35defda82c80d78a47a0ced890867879df7d4d354341ddbeeff7059e5ded4362->leave($__internal_35defda82c80d78a47a0ced890867879df7d4d354341ddbeeff7059e5ded4362_prof);

        
        $__internal_a46e65957cc40f431b5205f51671d601166b8247b4f35a3bb73fda848090dde2->leave($__internal_a46e65957cc40f431b5205f51671d601166b8247b4f35a3bb73fda848090dde2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b4e180d0ae2fa6cd93d2032b5782183ea73fb31e809ada2452223ed38fcb6686 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4e180d0ae2fa6cd93d2032b5782183ea73fb31e809ada2452223ed38fcb6686->enter($__internal_b4e180d0ae2fa6cd93d2032b5782183ea73fb31e809ada2452223ed38fcb6686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f914803db290b272e3144519136b77ada58620bec041c6ddbda8278893c68521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f914803db290b272e3144519136b77ada58620bec041c6ddbda8278893c68521->enter($__internal_f914803db290b272e3144519136b77ada58620bec041c6ddbda8278893c68521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f914803db290b272e3144519136b77ada58620bec041c6ddbda8278893c68521->leave($__internal_f914803db290b272e3144519136b77ada58620bec041c6ddbda8278893c68521_prof);

        
        $__internal_b4e180d0ae2fa6cd93d2032b5782183ea73fb31e809ada2452223ed38fcb6686->leave($__internal_b4e180d0ae2fa6cd93d2032b5782183ea73fb31e809ada2452223ed38fcb6686_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8f508d9e20504af0ca975420c4df3b9775cb02c265d1eb3af2c7170439da805e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f508d9e20504af0ca975420c4df3b9775cb02c265d1eb3af2c7170439da805e->enter($__internal_8f508d9e20504af0ca975420c4df3b9775cb02c265d1eb3af2c7170439da805e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_40a1ba1c96c17d77d1c8e29f4ec92d9a14da4c9d66ccaf5f5384f36bf4b632aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40a1ba1c96c17d77d1c8e29f4ec92d9a14da4c9d66ccaf5f5384f36bf4b632aa->enter($__internal_40a1ba1c96c17d77d1c8e29f4ec92d9a14da4c9d66ccaf5f5384f36bf4b632aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_40a1ba1c96c17d77d1c8e29f4ec92d9a14da4c9d66ccaf5f5384f36bf4b632aa->leave($__internal_40a1ba1c96c17d77d1c8e29f4ec92d9a14da4c9d66ccaf5f5384f36bf4b632aa_prof);

        
        $__internal_8f508d9e20504af0ca975420c4df3b9775cb02c265d1eb3af2c7170439da805e->leave($__internal_8f508d9e20504af0ca975420c4df3b9775cb02c265d1eb3af2c7170439da805e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\pidemo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
