<?php

/* AnnonceBundle::ModifierAnnonce.html.twig */
class __TwigTemplate_e414754a219ab9e602dc7ce0be5ecc56736b46c88a6e35c06c0cf5f7f5375acd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":default:test.html.twig", "AnnonceBundle::ModifierAnnonce.html.twig", 1);
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
        $__internal_42feca39543435a3d0eb4eb747403b4f2f62e3c635bec9823003d54b3ab8e5e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42feca39543435a3d0eb4eb747403b4f2f62e3c635bec9823003d54b3ab8e5e3->enter($__internal_42feca39543435a3d0eb4eb747403b4f2f62e3c635bec9823003d54b3ab8e5e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnnonceBundle::ModifierAnnonce.html.twig"));

        $__internal_4acd60e4fc1934d9a7d9284f3d005fdcdb993b58176b3cf1e114ceb55010d257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4acd60e4fc1934d9a7d9284f3d005fdcdb993b58176b3cf1e114ceb55010d257->enter($__internal_4acd60e4fc1934d9a7d9284f3d005fdcdb993b58176b3cf1e114ceb55010d257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnnonceBundle::ModifierAnnonce.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42feca39543435a3d0eb4eb747403b4f2f62e3c635bec9823003d54b3ab8e5e3->leave($__internal_42feca39543435a3d0eb4eb747403b4f2f62e3c635bec9823003d54b3ab8e5e3_prof);

        
        $__internal_4acd60e4fc1934d9a7d9284f3d005fdcdb993b58176b3cf1e114ceb55010d257->leave($__internal_4acd60e4fc1934d9a7d9284f3d005fdcdb993b58176b3cf1e114ceb55010d257_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_03e1af8e5d68f256c29e00b6c9cf3534e6c6f40d33837d88edcda69893d0d413 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03e1af8e5d68f256c29e00b6c9cf3534e6c6f40d33837d88edcda69893d0d413->enter($__internal_03e1af8e5d68f256c29e00b6c9cf3534e6c6f40d33837d88edcda69893d0d413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_689cd2a11f9bdf1d04d6b573007137dff747d795e702a9a85edd799e3c43f2a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_689cd2a11f9bdf1d04d6b573007137dff747d795e702a9a85edd799e3c43f2a7->enter($__internal_689cd2a11f9bdf1d04d6b573007137dff747d795e702a9a85edd799e3c43f2a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Club";
        
        $__internal_689cd2a11f9bdf1d04d6b573007137dff747d795e702a9a85edd799e3c43f2a7->leave($__internal_689cd2a11f9bdf1d04d6b573007137dff747d795e702a9a85edd799e3c43f2a7_prof);

        
        $__internal_03e1af8e5d68f256c29e00b6c9cf3534e6c6f40d33837d88edcda69893d0d413->leave($__internal_03e1af8e5d68f256c29e00b6c9cf3534e6c6f40d33837d88edcda69893d0d413_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_0c7c7f46ff4defd37f9d42a677f868d4a913f3da18c508fe41ab618db192e42d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c7c7f46ff4defd37f9d42a677f868d4a913f3da18c508fe41ab618db192e42d->enter($__internal_0c7c7f46ff4defd37f9d42a677f868d4a913f3da18c508fe41ab618db192e42d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f638fb37f317c594c9cc0ddc235a85640586cb02f6d82914bb564d5da6434a0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f638fb37f317c594c9cc0ddc235a85640586cb02f6d82914bb564d5da6434a0d->enter($__internal_f638fb37f317c594c9cc0ddc235a85640586cb02f6d82914bb564d5da6434a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style type=\"text/css\">
        .important { color: #336699; }

    </style>
";
        
        $__internal_f638fb37f317c594c9cc0ddc235a85640586cb02f6d82914bb564d5da6434a0d->leave($__internal_f638fb37f317c594c9cc0ddc235a85640586cb02f6d82914bb564d5da6434a0d_prof);

        
        $__internal_0c7c7f46ff4defd37f9d42a677f868d4a913f3da18c508fe41ab618db192e42d->leave($__internal_0c7c7f46ff4defd37f9d42a677f868d4a913f3da18c508fe41ab618db192e42d_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_4a628a9c07c6535adf2e2b264f1ed384a230b36a290eb57c1a47d2eab8618951 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a628a9c07c6535adf2e2b264f1ed384a230b36a290eb57c1a47d2eab8618951->enter($__internal_4a628a9c07c6535adf2e2b264f1ed384a230b36a290eb57c1a47d2eab8618951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8d4023f500e2bbf210f02d738418f5037a5fbb97c79c6c593c8769c4a839638e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d4023f500e2bbf210f02d738418f5037a5fbb97c79c6c593c8769c4a839638e->enter($__internal_8d4023f500e2bbf210f02d738418f5037a5fbb97c79c6c593c8769c4a839638e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    <div class=\"big-div-club\">
        <h1>modifier un annonce</h1>
    </div>
    <center>
        <fieldset>

                <table>
                    <tr>
                        ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), 'form_start');
        echo "

                    <tr>
                        <td>categorie:</td>
                        <td>";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->getSourceContext()); })()), "categorieA", array()), 'widget');
        echo " </td>
                    </tr>

                    <tr>
                        <td>titre :</td>
                        <td>";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), "titreA", array()), 'widget');
        echo " </td>
                    </tr>

                    <tr>
                        <td>user :</td>
                    </tr>

                    <tr>
                        <td>numero tel :</td>
                        <td>";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), "numTel", array()), 'widget');
        echo " </td>
                    </tr>

                    <tr>
                        <td>description :</td>
                        <td>";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->getSourceContext()); })()), "descA", array()), 'widget');
        echo " </td>
                    </tr>




                    <tr>
                        <td>Valider votre Modification :</td>
                        <td>";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 52, $this->getSourceContext()); })()), "ajouter", array()), 'widget');
        echo " </td>
                    </tr>


                    ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 56, $this->getSourceContext()); })()), 'form_end');
        echo "
                    </tr>
                </table>

        </fieldset>

    </center>

    <p class=\"important\">

    </p>
";
        
        $__internal_8d4023f500e2bbf210f02d738418f5037a5fbb97c79c6c593c8769c4a839638e->leave($__internal_8d4023f500e2bbf210f02d738418f5037a5fbb97c79c6c593c8769c4a839638e_prof);

        
        $__internal_4a628a9c07c6535adf2e2b264f1ed384a230b36a290eb57c1a47d2eab8618951->leave($__internal_4a628a9c07c6535adf2e2b264f1ed384a230b36a290eb57c1a47d2eab8618951_prof);

    }

    public function getTemplateName()
    {
        return "AnnonceBundle::ModifierAnnonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 56,  151 => 52,  140 => 44,  132 => 39,  120 => 30,  112 => 25,  105 => 21,  95 => 13,  86 => 12,  69 => 6,  60 => 5,  42 => 4,  11 => 1,);
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
        <h1>modifier un annonce</h1>
    </div>
    <center>
        <fieldset>

                <table>
                    <tr>
                        {{ form_start(form) }}

                    <tr>
                        <td>categorie:</td>
                        <td>{{ form_widget(form.categorieA) }} </td>
                    </tr>

                    <tr>
                        <td>titre :</td>
                        <td>{{ form_widget(form.titreA) }} </td>
                    </tr>

                    <tr>
                        <td>user :</td>
                    </tr>

                    <tr>
                        <td>numero tel :</td>
                        <td>{{ form_widget(form.numTel) }} </td>
                    </tr>

                    <tr>
                        <td>description :</td>
                        <td>{{ form_widget(form.descA) }} </td>
                    </tr>




                    <tr>
                        <td>Valider votre Modification :</td>
                        <td>{{ form_widget(form.ajouter) }} </td>
                    </tr>


                    {{ form_end(form) }}
                    </tr>
                </table>

        </fieldset>

    </center>

    <p class=\"important\">

    </p>
{% endblock %}





", "AnnonceBundle::ModifierAnnonce.html.twig", "C:\\wamp64\\www\\pidev00\\src\\EspritEntreAide\\AnnonceBundle/Resources/views/ModifierAnnonce.html.twig");
    }
}
