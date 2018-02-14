<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_555e8ff27681089862236ebfd49d4f0202c7ae9a72a885bd5e89b695fac94e36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71544d69db63fe337743dd81fa1c6d747b70c5d69f5cdb1096d7cf2bf2a568b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71544d69db63fe337743dd81fa1c6d747b70c5d69f5cdb1096d7cf2bf2a568b0->enter($__internal_71544d69db63fe337743dd81fa1c6d747b70c5d69f5cdb1096d7cf2bf2a568b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_f0833df5a1aefe27bc33c15fa5edde2e409a98f9b74852ea4b23d0d8bd1b97dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0833df5a1aefe27bc33c15fa5edde2e409a98f9b74852ea4b23d0d8bd1b97dc->enter($__internal_f0833df5a1aefe27bc33c15fa5edde2e409a98f9b74852ea4b23d0d8bd1b97dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71544d69db63fe337743dd81fa1c6d747b70c5d69f5cdb1096d7cf2bf2a568b0->leave($__internal_71544d69db63fe337743dd81fa1c6d747b70c5d69f5cdb1096d7cf2bf2a568b0_prof);

        
        $__internal_f0833df5a1aefe27bc33c15fa5edde2e409a98f9b74852ea4b23d0d8bd1b97dc->leave($__internal_f0833df5a1aefe27bc33c15fa5edde2e409a98f9b74852ea4b23d0d8bd1b97dc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_35f575436b73715b4640802bc2fc178e8d4f433da154535dddd116d418c14208 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35f575436b73715b4640802bc2fc178e8d4f433da154535dddd116d418c14208->enter($__internal_35f575436b73715b4640802bc2fc178e8d4f433da154535dddd116d418c14208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9e0a6b0eabae5d3c7b5f79de226068a2f50dc24b6e3a77e8b175671aef74cf85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e0a6b0eabae5d3c7b5f79de226068a2f50dc24b6e3a77e8b175671aef74cf85->enter($__internal_9e0a6b0eabae5d3c7b5f79de226068a2f50dc24b6e3a77e8b175671aef74cf85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_9e0a6b0eabae5d3c7b5f79de226068a2f50dc24b6e3a77e8b175671aef74cf85->leave($__internal_9e0a6b0eabae5d3c7b5f79de226068a2f50dc24b6e3a77e8b175671aef74cf85_prof);

        
        $__internal_35f575436b73715b4640802bc2fc178e8d4f433da154535dddd116d418c14208->leave($__internal_35f575436b73715b4640802bc2fc178e8d4f433da154535dddd116d418c14208_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ddb8337675d7c77aeec7b17ee72d37ff2c8c48610f3e8eddc018233c737b347 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ddb8337675d7c77aeec7b17ee72d37ff2c8c48610f3e8eddc018233c737b347->enter($__internal_0ddb8337675d7c77aeec7b17ee72d37ff2c8c48610f3e8eddc018233c737b347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_324c369b7b0099749d19fb73dbe0c06ae94df0e82f924ed1cb185cea3f12c8d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_324c369b7b0099749d19fb73dbe0c06ae94df0e82f924ed1cb185cea3f12c8d1->enter($__internal_324c369b7b0099749d19fb73dbe0c06ae94df0e82f924ed1cb185cea3f12c8d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_324c369b7b0099749d19fb73dbe0c06ae94df0e82f924ed1cb185cea3f12c8d1->leave($__internal_324c369b7b0099749d19fb73dbe0c06ae94df0e82f924ed1cb185cea3f12c8d1_prof);

        
        $__internal_0ddb8337675d7c77aeec7b17ee72d37ff2c8c48610f3e8eddc018233c737b347->leave($__internal_0ddb8337675d7c77aeec7b17ee72d37ff2c8c48610f3e8eddc018233c737b347_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0410c911de667298a7e81591ef33d054068109083324ae4191776562f88b8ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0410c911de667298a7e81591ef33d054068109083324ae4191776562f88b8ef->enter($__internal_f0410c911de667298a7e81591ef33d054068109083324ae4191776562f88b8ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f97b98b58fb58b9b30b2a92282503ceed449ac9eda3f07e1d3dbe236c54b2e14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f97b98b58fb58b9b30b2a92282503ceed449ac9eda3f07e1d3dbe236c54b2e14->enter($__internal_f97b98b58fb58b9b30b2a92282503ceed449ac9eda3f07e1d3dbe236c54b2e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_f97b98b58fb58b9b30b2a92282503ceed449ac9eda3f07e1d3dbe236c54b2e14->leave($__internal_f97b98b58fb58b9b30b2a92282503ceed449ac9eda3f07e1d3dbe236c54b2e14_prof);

        
        $__internal_f0410c911de667298a7e81591ef33d054068109083324ae4191776562f88b8ef->leave($__internal_f0410c911de667298a7e81591ef33d054068109083324ae4191776562f88b8ef_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\pidemo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
