<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_5335ec8b26f1135b6bef20173fb8b73a9cb65aa2c214e6c1148dc36b40858f03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18929c81571cb6ab6d20783911409e4bd56664ae39ac17c462022f8ee503b195 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18929c81571cb6ab6d20783911409e4bd56664ae39ac17c462022f8ee503b195->enter($__internal_18929c81571cb6ab6d20783911409e4bd56664ae39ac17c462022f8ee503b195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_79f8563448e0a54eefa201ee1835589b06479e4c9723560eeef267868b104645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79f8563448e0a54eefa201ee1835589b06479e4c9723560eeef267868b104645->enter($__internal_79f8563448e0a54eefa201ee1835589b06479e4c9723560eeef267868b104645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18929c81571cb6ab6d20783911409e4bd56664ae39ac17c462022f8ee503b195->leave($__internal_18929c81571cb6ab6d20783911409e4bd56664ae39ac17c462022f8ee503b195_prof);

        
        $__internal_79f8563448e0a54eefa201ee1835589b06479e4c9723560eeef267868b104645->leave($__internal_79f8563448e0a54eefa201ee1835589b06479e4c9723560eeef267868b104645_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a0ae03f5eb9dca4ea273208eff5f7e12099f09b0a21bbccc5706ea9a53209298 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0ae03f5eb9dca4ea273208eff5f7e12099f09b0a21bbccc5706ea9a53209298->enter($__internal_a0ae03f5eb9dca4ea273208eff5f7e12099f09b0a21bbccc5706ea9a53209298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d89e4a2788d8bc8669f28176b166b56810eadbddf009038303c36af6a8cb3136 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d89e4a2788d8bc8669f28176b166b56810eadbddf009038303c36af6a8cb3136->enter($__internal_d89e4a2788d8bc8669f28176b166b56810eadbddf009038303c36af6a8cb3136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_d89e4a2788d8bc8669f28176b166b56810eadbddf009038303c36af6a8cb3136->leave($__internal_d89e4a2788d8bc8669f28176b166b56810eadbddf009038303c36af6a8cb3136_prof);

        
        $__internal_a0ae03f5eb9dca4ea273208eff5f7e12099f09b0a21bbccc5706ea9a53209298->leave($__internal_a0ae03f5eb9dca4ea273208eff5f7e12099f09b0a21bbccc5706ea9a53209298_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\pidemo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
