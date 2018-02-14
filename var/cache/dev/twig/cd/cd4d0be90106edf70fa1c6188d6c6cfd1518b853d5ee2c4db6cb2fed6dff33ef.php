<?php

/* @Spotted/CRUD/ajout.html.twig */
class __TwigTemplate_e4f6a12bda06a99a94061b99893f1e059487e42f78dee03ccc1fd2adb4d5a6fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":default:test.html.twig", "@Spotted/CRUD/ajout.html.twig", 1);
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
        $__internal_2795e1247347c35a3c4f7c50c6114dbcda86bcd563103ee78651c00c82e168b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2795e1247347c35a3c4f7c50c6114dbcda86bcd563103ee78651c00c82e168b3->enter($__internal_2795e1247347c35a3c4f7c50c6114dbcda86bcd563103ee78651c00c82e168b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Spotted/CRUD/ajout.html.twig"));

        $__internal_f8f751c51f6bde6aea7a7d05f03714a0c4736cc0be0525f276a83b042a5abf79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8f751c51f6bde6aea7a7d05f03714a0c4736cc0be0525f276a83b042a5abf79->enter($__internal_f8f751c51f6bde6aea7a7d05f03714a0c4736cc0be0525f276a83b042a5abf79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Spotted/CRUD/ajout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2795e1247347c35a3c4f7c50c6114dbcda86bcd563103ee78651c00c82e168b3->leave($__internal_2795e1247347c35a3c4f7c50c6114dbcda86bcd563103ee78651c00c82e168b3_prof);

        
        $__internal_f8f751c51f6bde6aea7a7d05f03714a0c4736cc0be0525f276a83b042a5abf79->leave($__internal_f8f751c51f6bde6aea7a7d05f03714a0c4736cc0be0525f276a83b042a5abf79_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_655172b34a3d7abd056117f445ca9ff815c1153847abd3da76f7c8d3165cbca0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_655172b34a3d7abd056117f445ca9ff815c1153847abd3da76f7c8d3165cbca0->enter($__internal_655172b34a3d7abd056117f445ca9ff815c1153847abd3da76f7c8d3165cbca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_faf2444ae92df5506b882659286a06626a3f57bc8a795530d46308435bb7c3a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faf2444ae92df5506b882659286a06626a3f57bc8a795530d46308435bb7c3a2->enter($__internal_faf2444ae92df5506b882659286a06626a3f57bc8a795530d46308435bb7c3a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Evenements";
        
        $__internal_faf2444ae92df5506b882659286a06626a3f57bc8a795530d46308435bb7c3a2->leave($__internal_faf2444ae92df5506b882659286a06626a3f57bc8a795530d46308435bb7c3a2_prof);

        
        $__internal_655172b34a3d7abd056117f445ca9ff815c1153847abd3da76f7c8d3165cbca0->leave($__internal_655172b34a3d7abd056117f445ca9ff815c1153847abd3da76f7c8d3165cbca0_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_00da1b9d4aa4248873152a53297338954ab2fb6d79167cd0cc03887a574b0f2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00da1b9d4aa4248873152a53297338954ab2fb6d79167cd0cc03887a574b0f2b->enter($__internal_00da1b9d4aa4248873152a53297338954ab2fb6d79167cd0cc03887a574b0f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_be7c727cb30fe7631beb7fb7afa75d3a19c8b4f38f202d50e5e2e0530ee5c1dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be7c727cb30fe7631beb7fb7afa75d3a19c8b4f38f202d50e5e2e0530ee5c1dc->enter($__internal_be7c727cb30fe7631beb7fb7afa75d3a19c8b4f38f202d50e5e2e0530ee5c1dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style type=\"text/css\">
        .important { color: #336699; }

    </style>
";
        
        $__internal_be7c727cb30fe7631beb7fb7afa75d3a19c8b4f38f202d50e5e2e0530ee5c1dc->leave($__internal_be7c727cb30fe7631beb7fb7afa75d3a19c8b4f38f202d50e5e2e0530ee5c1dc_prof);

        
        $__internal_00da1b9d4aa4248873152a53297338954ab2fb6d79167cd0cc03887a574b0f2b->leave($__internal_00da1b9d4aa4248873152a53297338954ab2fb6d79167cd0cc03887a574b0f2b_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_57f71a64191e97082e302c9da193f09e4e22037a516ff81e09715db7b0255460 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57f71a64191e97082e302c9da193f09e4e22037a516ff81e09715db7b0255460->enter($__internal_57f71a64191e97082e302c9da193f09e4e22037a516ff81e09715db7b0255460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8ff25b1f6e296aa63f182da4395fc985e41b7056151f4863ffd4a90bfd2f12ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ff25b1f6e296aa63f182da4395fc985e41b7056151f4863ffd4a90bfd2f12ec->enter($__internal_8ff25b1f6e296aa63f182da4395fc985e41b7056151f4863ffd4a90bfd2f12ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    <div class=\"big-div\">
        <h1>Ajout Spotted</h1>
    </div>
     <br>
   <center>

       ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'form_start');
        echo "
       ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), "image", array()), 'row');
        echo "
       ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), 'form_end');
        echo "

    </center>
    <p class=\"important\">

    </p>
";
        
        $__internal_8ff25b1f6e296aa63f182da4395fc985e41b7056151f4863ffd4a90bfd2f12ec->leave($__internal_8ff25b1f6e296aa63f182da4395fc985e41b7056151f4863ffd4a90bfd2f12ec_prof);

        
        $__internal_57f71a64191e97082e302c9da193f09e4e22037a516ff81e09715db7b0255460->leave($__internal_57f71a64191e97082e302c9da193f09e4e22037a516ff81e09715db7b0255460_prof);

    }

    public function getTemplateName()
    {
        return "@Spotted/CRUD/ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 21,  107 => 20,  103 => 19,  95 => 13,  86 => 12,  69 => 6,  60 => 5,  42 => 4,  11 => 1,);
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
        <h1>Ajout Spotted</h1>
    </div>
     <br>
   <center>

       {{ form_start(form) }}
       {{ form_row(form.image) }}
       {{ form_end(form) }}

    </center>
    <p class=\"important\">

    </p>
{% endblock %}

", "@Spotted/CRUD/ajout.html.twig", "C:\\wamp64\\www\\pidev00\\src\\EspritEntreAide\\SpottedBundle\\Resources\\views\\CRUD\\ajout.html.twig");
    }
}
