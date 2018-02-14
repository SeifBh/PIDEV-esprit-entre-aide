<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_0c02199a9a733f3ff3e47d2b5a3adb79343f31b4395ff6211c58bfd00f1bee3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39e235365f499321ab340b06f02d02a6feefa1050ace02eac3ecdb438915460b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39e235365f499321ab340b06f02d02a6feefa1050ace02eac3ecdb438915460b->enter($__internal_39e235365f499321ab340b06f02d02a6feefa1050ace02eac3ecdb438915460b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_71d83b4dd1bc16f8d2ac29e946ace2513ae1cc4b326e0599d17d65e81c143729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71d83b4dd1bc16f8d2ac29e946ace2513ae1cc4b326e0599d17d65e81c143729->enter($__internal_71d83b4dd1bc16f8d2ac29e946ace2513ae1cc4b326e0599d17d65e81c143729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_39e235365f499321ab340b06f02d02a6feefa1050ace02eac3ecdb438915460b->leave($__internal_39e235365f499321ab340b06f02d02a6feefa1050ace02eac3ecdb438915460b_prof);

        
        $__internal_71d83b4dd1bc16f8d2ac29e946ace2513ae1cc4b326e0599d17d65e81c143729->leave($__internal_71d83b4dd1bc16f8d2ac29e946ace2513ae1cc4b326e0599d17d65e81c143729_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_73b6771ce54d1624242e581f95478a1a026f41c22e20dd3b3d70826987443555 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73b6771ce54d1624242e581f95478a1a026f41c22e20dd3b3d70826987443555->enter($__internal_73b6771ce54d1624242e581f95478a1a026f41c22e20dd3b3d70826987443555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cf616c8dd2660bf316719f4a58aaa53560ce0fa0423fb18bbaafd012189fdae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf616c8dd2660bf316719f4a58aaa53560ce0fa0423fb18bbaafd012189fdae8->enter($__internal_cf616c8dd2660bf316719f4a58aaa53560ce0fa0423fb18bbaafd012189fdae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_cf616c8dd2660bf316719f4a58aaa53560ce0fa0423fb18bbaafd012189fdae8->leave($__internal_cf616c8dd2660bf316719f4a58aaa53560ce0fa0423fb18bbaafd012189fdae8_prof);

        
        $__internal_73b6771ce54d1624242e581f95478a1a026f41c22e20dd3b3d70826987443555->leave($__internal_73b6771ce54d1624242e581f95478a1a026f41c22e20dd3b3d70826987443555_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_e59831f33eff537ea793d9686ef04676d648eff1462c74e95ae83139481dd4e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e59831f33eff537ea793d9686ef04676d648eff1462c74e95ae83139481dd4e8->enter($__internal_e59831f33eff537ea793d9686ef04676d648eff1462c74e95ae83139481dd4e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_83207a5d7ec4e5a62982daafb8796b45cea520e2fbc85b5981bc491b7ecb548a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83207a5d7ec4e5a62982daafb8796b45cea520e2fbc85b5981bc491b7ecb548a->enter($__internal_83207a5d7ec4e5a62982daafb8796b45cea520e2fbc85b5981bc491b7ecb548a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_83207a5d7ec4e5a62982daafb8796b45cea520e2fbc85b5981bc491b7ecb548a->leave($__internal_83207a5d7ec4e5a62982daafb8796b45cea520e2fbc85b5981bc491b7ecb548a_prof);

        
        $__internal_e59831f33eff537ea793d9686ef04676d648eff1462c74e95ae83139481dd4e8->leave($__internal_e59831f33eff537ea793d9686ef04676d648eff1462c74e95ae83139481dd4e8_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_c43675ea66f473b016dbbf42fc9e1ae861688c4c44ed0f1508fae59ec8fc6eb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c43675ea66f473b016dbbf42fc9e1ae861688c4c44ed0f1508fae59ec8fc6eb9->enter($__internal_c43675ea66f473b016dbbf42fc9e1ae861688c4c44ed0f1508fae59ec8fc6eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bace1c62f5603caf051e1566093ac8317f088cca4353faeddbc0eb95b3739465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bace1c62f5603caf051e1566093ac8317f088cca4353faeddbc0eb95b3739465->enter($__internal_bace1c62f5603caf051e1566093ac8317f088cca4353faeddbc0eb95b3739465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bace1c62f5603caf051e1566093ac8317f088cca4353faeddbc0eb95b3739465->leave($__internal_bace1c62f5603caf051e1566093ac8317f088cca4353faeddbc0eb95b3739465_prof);

        
        $__internal_c43675ea66f473b016dbbf42fc9e1ae861688c4c44ed0f1508fae59ec8fc6eb9->leave($__internal_c43675ea66f473b016dbbf42fc9e1ae861688c4c44ed0f1508fae59ec8fc6eb9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\pidemo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
