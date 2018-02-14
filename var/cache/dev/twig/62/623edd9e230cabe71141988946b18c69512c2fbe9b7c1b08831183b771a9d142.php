<?php

/* @Club/Default/modifclub.html.twig */
class __TwigTemplate_2a56687e15bd21fe3df8c2e175c174c831dd47779cffe6d8dc232b2a3998a826 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":default:test.html.twig", "@Club/Default/modifclub.html.twig", 1);
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
        $__internal_28626b02686a9fb8071940b8226109b5a4da8215963a6d7d5c505093609e3fc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28626b02686a9fb8071940b8226109b5a4da8215963a6d7d5c505093609e3fc4->enter($__internal_28626b02686a9fb8071940b8226109b5a4da8215963a6d7d5c505093609e3fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Club/Default/modifclub.html.twig"));

        $__internal_6faddd8e7c7db6b9c2ddbb57b1abccd873cd45a0e0e9ca02cb62e1e9b6e7bbd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6faddd8e7c7db6b9c2ddbb57b1abccd873cd45a0e0e9ca02cb62e1e9b6e7bbd5->enter($__internal_6faddd8e7c7db6b9c2ddbb57b1abccd873cd45a0e0e9ca02cb62e1e9b6e7bbd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Club/Default/modifclub.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28626b02686a9fb8071940b8226109b5a4da8215963a6d7d5c505093609e3fc4->leave($__internal_28626b02686a9fb8071940b8226109b5a4da8215963a6d7d5c505093609e3fc4_prof);

        
        $__internal_6faddd8e7c7db6b9c2ddbb57b1abccd873cd45a0e0e9ca02cb62e1e9b6e7bbd5->leave($__internal_6faddd8e7c7db6b9c2ddbb57b1abccd873cd45a0e0e9ca02cb62e1e9b6e7bbd5_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_920f0deb346ef92b377e03c3310f9b1116e1be49f157f5b2a98116165f46385e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_920f0deb346ef92b377e03c3310f9b1116e1be49f157f5b2a98116165f46385e->enter($__internal_920f0deb346ef92b377e03c3310f9b1116e1be49f157f5b2a98116165f46385e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e8e841f3de9b4505a52e2c7ceeb4d66f422f8925eeddee3976687d8391d296cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8e841f3de9b4505a52e2c7ceeb4d66f422f8925eeddee3976687d8391d296cb->enter($__internal_e8e841f3de9b4505a52e2c7ceeb4d66f422f8925eeddee3976687d8391d296cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Club";
        
        $__internal_e8e841f3de9b4505a52e2c7ceeb4d66f422f8925eeddee3976687d8391d296cb->leave($__internal_e8e841f3de9b4505a52e2c7ceeb4d66f422f8925eeddee3976687d8391d296cb_prof);

        
        $__internal_920f0deb346ef92b377e03c3310f9b1116e1be49f157f5b2a98116165f46385e->leave($__internal_920f0deb346ef92b377e03c3310f9b1116e1be49f157f5b2a98116165f46385e_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_21702813273216bbe98fd46dfdd075c6ba18ed6da686bd540a39291aa4497b58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21702813273216bbe98fd46dfdd075c6ba18ed6da686bd540a39291aa4497b58->enter($__internal_21702813273216bbe98fd46dfdd075c6ba18ed6da686bd540a39291aa4497b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0d210ea951094e6da226f1a9c754dcb527bcb6945eb2a43e10eb176378c6d3e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d210ea951094e6da226f1a9c754dcb527bcb6945eb2a43e10eb176378c6d3e8->enter($__internal_0d210ea951094e6da226f1a9c754dcb527bcb6945eb2a43e10eb176378c6d3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style type=\"text/css\">
        .important { color: #336699; }

    </style>
";
        
        $__internal_0d210ea951094e6da226f1a9c754dcb527bcb6945eb2a43e10eb176378c6d3e8->leave($__internal_0d210ea951094e6da226f1a9c754dcb527bcb6945eb2a43e10eb176378c6d3e8_prof);

        
        $__internal_21702813273216bbe98fd46dfdd075c6ba18ed6da686bd540a39291aa4497b58->leave($__internal_21702813273216bbe98fd46dfdd075c6ba18ed6da686bd540a39291aa4497b58_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_29b05eb0b52585c872a18061e611106b579feaf2f8c1431aa0573bc698de06d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29b05eb0b52585c872a18061e611106b579feaf2f8c1431aa0573bc698de06d5->enter($__internal_29b05eb0b52585c872a18061e611106b579feaf2f8c1431aa0573bc698de06d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0e3a0c17f020acbe4ba3ef76b33b3c3992b54572a46d2947e2d37ec5117cc62b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e3a0c17f020acbe4ba3ef76b33b3c3992b54572a46d2947e2d37ec5117cc62b->enter($__internal_0e3a0c17f020acbe4ba3ef76b33b3c3992b54572a46d2947e2d37ec5117cc62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    <div class=\"big-div-club\">
        <h1>Ajouter un club</h1>
    </div>
    <center>
        <fieldset>
            ";
        // line 18
        if (((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RESPONSABLE_SUPER_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RESPONSABLE_CLUB")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"))) {
            // line 19
            echo "
                <table>
                    <tr>
                        ";
            // line 22
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), 'form_start');
            echo "
                    <tr>
                        <td>Nom de club:</td>
                        <td>";
            // line 25
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->getSourceContext()); })()), "nomC", array()), 'widget');
            echo " </td>
                    </tr>

                    <tr>
                        <td>Mail de club:</td>
                        <td>";
            // line 30
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), "mailC", array()), 'widget');
            echo " </td>
                    </tr>

                    <tr>
                        <td>Responsable de club :</td>
                        <td>";
            // line 35
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->getSourceContext()); })()), "idUser", array()), 'widget');
            echo " </td>
                    </tr>

                    <tr>
                        <td>Description  de club :</td>
                        <td>";
            // line 40
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), "descC", array()), 'widget');
            echo " </td>
                    </tr>

                    <tr>
                        <td>Date de Creation de club :</td>
                        <td>";
            // line 45
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 45, $this->getSourceContext()); })()), "dateCreation", array()), 'widget');
            echo " </td>
                    </tr>

                    <tr>
                        <td>Photo de club :</td>
                        <td>";
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), "image", array()), 'widget');
            echo " </td>
                    </tr>




                    <tr>
                        <td>Valider votre Modification :</td>
                        <td>";
            // line 58
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->getSourceContext()); })()), "Ajouter", array()), 'widget');
            echo " </td>
                    </tr>


                    ";
            // line 62
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'form_end');
            echo "
                    </tr>
                </table>
            ";
        }
        // line 66
        echo "        </fieldset>

    </center>

    <p class=\"important\">

    </p>
";
        
        $__internal_0e3a0c17f020acbe4ba3ef76b33b3c3992b54572a46d2947e2d37ec5117cc62b->leave($__internal_0e3a0c17f020acbe4ba3ef76b33b3c3992b54572a46d2947e2d37ec5117cc62b_prof);

        
        $__internal_29b05eb0b52585c872a18061e611106b579feaf2f8c1431aa0573bc698de06d5->leave($__internal_29b05eb0b52585c872a18061e611106b579feaf2f8c1431aa0573bc698de06d5_prof);

    }

    public function getTemplateName()
    {
        return "@Club/Default/modifclub.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 66,  173 => 62,  166 => 58,  155 => 50,  147 => 45,  139 => 40,  131 => 35,  123 => 30,  115 => 25,  109 => 22,  104 => 19,  102 => 18,  95 => 13,  86 => 12,  69 => 6,  60 => 5,  42 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":default:test.html.twig\" %}


{% block title %}Club{% endblock %}
{% block head %}
    {{ parent() }}
    <style type=\"text/css\">
        .important { color: #336699; }

    </style>
{% endblock %}
{% block content %}
    <div class=\"big-div-club\">
        <h1>Ajouter un club</h1>
    </div>
    <center>
        <fieldset>
            {% if is_granted('ROLE_RESPONSABLE_SUPER_ADMIN') or is_granted('ROLE_ADMIN')or is_granted('ROLE_RESPONSABLE_CLUB') or is_granted('ROLE_SUPER_ADMIN') %}

                <table>
                    <tr>
                        {{ form_start(form) }}
                    <tr>
                        <td>Nom de club:</td>
                        <td>{{ form_widget(form.nomC) }} </td>
                    </tr>

                    <tr>
                        <td>Mail de club:</td>
                        <td>{{ form_widget(form.mailC) }} </td>
                    </tr>

                    <tr>
                        <td>Responsable de club :</td>
                        <td>{{ form_widget(form.idUser) }} </td>
                    </tr>

                    <tr>
                        <td>Description  de club :</td>
                        <td>{{ form_widget(form.descC) }} </td>
                    </tr>

                    <tr>
                        <td>Date de Creation de club :</td>
                        <td>{{ form_widget(form.dateCreation) }} </td>
                    </tr>

                    <tr>
                        <td>Photo de club :</td>
                        <td>{{ form_widget(form.image) }} </td>
                    </tr>




                    <tr>
                        <td>Valider votre Modification :</td>
                        <td>{{ form_widget(form.Ajouter) }} </td>
                    </tr>


                    {{ form_end(form) }}
                    </tr>
                </table>
            {% endif %}
        </fieldset>

    </center>

    <p class=\"important\">

    </p>
{% endblock %}





", "@Club/Default/modifclub.html.twig", "C:\\wamp64\\www\\pidemo\\src\\EspritEntreAide\\ClubBundle\\Resources\\views\\Default\\modifclub.html.twig");
    }
}
