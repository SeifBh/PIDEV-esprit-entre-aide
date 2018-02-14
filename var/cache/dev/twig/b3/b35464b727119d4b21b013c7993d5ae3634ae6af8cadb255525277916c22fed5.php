<?php

/* AnnonceBundle::ChercherAnnonce.html.twig */
class __TwigTemplate_5df58ed4cc912f4eaedc7041c5f24e706b4a3977a9a38ffa737e99a059609db3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate(":default:test.html.twig", "AnnonceBundle::ChercherAnnonce.html.twig", 4);
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
        $__internal_d82169e2f0ff21a059d92851d6eff53f12058e7bb58fecafa3558531f2af0149 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d82169e2f0ff21a059d92851d6eff53f12058e7bb58fecafa3558531f2af0149->enter($__internal_d82169e2f0ff21a059d92851d6eff53f12058e7bb58fecafa3558531f2af0149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnnonceBundle::ChercherAnnonce.html.twig"));

        $__internal_efb7cb747647efee48525456a83c257c2d0af773a46e7ab7157f619f3f6bc14f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efb7cb747647efee48525456a83c257c2d0af773a46e7ab7157f619f3f6bc14f->enter($__internal_efb7cb747647efee48525456a83c257c2d0af773a46e7ab7157f619f3f6bc14f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnnonceBundle::ChercherAnnonce.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d82169e2f0ff21a059d92851d6eff53f12058e7bb58fecafa3558531f2af0149->leave($__internal_d82169e2f0ff21a059d92851d6eff53f12058e7bb58fecafa3558531f2af0149_prof);

        
        $__internal_efb7cb747647efee48525456a83c257c2d0af773a46e7ab7157f619f3f6bc14f->leave($__internal_efb7cb747647efee48525456a83c257c2d0af773a46e7ab7157f619f3f6bc14f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_740f0eba24025c5ea02c55540bcab22d68d99759fa378701fa68ca2c39b0c48c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_740f0eba24025c5ea02c55540bcab22d68d99759fa378701fa68ca2c39b0c48c->enter($__internal_740f0eba24025c5ea02c55540bcab22d68d99759fa378701fa68ca2c39b0c48c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ef87754f1faca4465275ca02bd0e9de7f7c29a9515214b8e181e3a0aeb9ed55c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef87754f1faca4465275ca02bd0e9de7f7c29a9515214b8e181e3a0aeb9ed55c->enter($__internal_ef87754f1faca4465275ca02bd0e9de7f7c29a9515214b8e181e3a0aeb9ed55c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Annonce";
        
        $__internal_ef87754f1faca4465275ca02bd0e9de7f7c29a9515214b8e181e3a0aeb9ed55c->leave($__internal_ef87754f1faca4465275ca02bd0e9de7f7c29a9515214b8e181e3a0aeb9ed55c_prof);

        
        $__internal_740f0eba24025c5ea02c55540bcab22d68d99759fa378701fa68ca2c39b0c48c->leave($__internal_740f0eba24025c5ea02c55540bcab22d68d99759fa378701fa68ca2c39b0c48c_prof);

    }

    // line 8
    public function block_head($context, array $blocks = array())
    {
        $__internal_55ad377335db70bc1de4e1b780d69a4c0b11ae877777ea8adc511715c878c1d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55ad377335db70bc1de4e1b780d69a4c0b11ae877777ea8adc511715c878c1d0->enter($__internal_55ad377335db70bc1de4e1b780d69a4c0b11ae877777ea8adc511715c878c1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8ca85d3b2bbe5ee39848e3896a932955199cc5349be506266d084d2b42a136cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ca85d3b2bbe5ee39848e3896a932955199cc5349be506266d084d2b42a136cf->enter($__internal_8ca85d3b2bbe5ee39848e3896a932955199cc5349be506266d084d2b42a136cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style type=\"text/css\">
        .important { color: #336699; }

    </style>
";
        
        $__internal_8ca85d3b2bbe5ee39848e3896a932955199cc5349be506266d084d2b42a136cf->leave($__internal_8ca85d3b2bbe5ee39848e3896a932955199cc5349be506266d084d2b42a136cf_prof);

        
        $__internal_55ad377335db70bc1de4e1b780d69a4c0b11ae877777ea8adc511715c878c1d0->leave($__internal_55ad377335db70bc1de4e1b780d69a4c0b11ae877777ea8adc511715c878c1d0_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_5e0108c392ab2bd373b1241ff5829e40039c13cb1988af29e13f9b0829adbef5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e0108c392ab2bd373b1241ff5829e40039c13cb1988af29e13f9b0829adbef5->enter($__internal_5e0108c392ab2bd373b1241ff5829e40039c13cb1988af29e13f9b0829adbef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ec4d5b36b408fa85ec3a1ba96a5d55235b1468decf47742cd0661e189dd01d66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec4d5b36b408fa85ec3a1ba96a5d55235b1468decf47742cd0661e189dd01d66->enter($__internal_ec4d5b36b408fa85ec3a1ba96a5d55235b1468decf47742cd0661e189dd01d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "    <div class=\"big-div-club\">
        <div class=\"col-md-8 middlebarmenu\">
            <ul class=\"snip1189\">
                <li><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_annonce_ajouter");
        echo "\">Ajouter une annonce</a></li>
            </ul>
        </div>
    </div><br>
    <!--<p class=\"important\"></p>-->
    <div class=\"reherche annonce\">
        <h3><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_annonce_chercher");
        echo "\">Recherche des annonces</a></h3>
        ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->getSourceContext()); })()), 'form');
        echo "
        <h1>Liste des annonces</h1>

        <table border=\"1\">
            <tr>
                <th>id</th>
                <th>categorie</th>
                <th>titre</th>
                <th>user</th>
                <th>numero de telephone</th>
                <th>Description</th>
                <th>date de creation</th>

            </tr>

            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new Twig_Error_Runtime('Variable "annonce" does not exist.', 41, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 42
            echo "                <tr>
                    <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "id", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "categorieA", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "titreA", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "idUser", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "numTel", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "descA", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "dateA", array())), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_annonce_supprimer", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a></td>
                    <td><a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_annonce_modifier", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "id", array()))), "html", null, true);
            echo "\">Modifier</a></td>


                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "        </table>
        <span style=\"alignment: right\"></span>
    </div>

";
        
        $__internal_ec4d5b36b408fa85ec3a1ba96a5d55235b1468decf47742cd0661e189dd01d66->leave($__internal_ec4d5b36b408fa85ec3a1ba96a5d55235b1468decf47742cd0661e189dd01d66_prof);

        
        $__internal_5e0108c392ab2bd373b1241ff5829e40039c13cb1988af29e13f9b0829adbef5->leave($__internal_5e0108c392ab2bd373b1241ff5829e40039c13cb1988af29e13f9b0829adbef5_prof);

    }

    public function getTemplateName()
    {
        return "AnnonceBundle::ChercherAnnonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 56,  170 => 51,  166 => 50,  162 => 49,  158 => 48,  154 => 47,  150 => 46,  146 => 45,  142 => 44,  138 => 43,  135 => 42,  131 => 41,  113 => 26,  109 => 25,  100 => 19,  95 => 16,  86 => 15,  69 => 9,  60 => 8,  42 => 7,  11 => 4,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("


{% extends \":default:test.html.twig\" %}


{% block title %}Annonce{% endblock %}
{% block head %}
    {{ parent() }}
    <style type=\"text/css\">
        .important { color: #336699; }

    </style>
{% endblock %}
{% block content %}
    <div class=\"big-div-club\">
        <div class=\"col-md-8 middlebarmenu\">
            <ul class=\"snip1189\">
                <li><a href=\"{{ path('_annonce_ajouter') }}\">Ajouter une annonce</a></li>
            </ul>
        </div>
    </div><br>
    <!--<p class=\"important\"></p>-->
    <div class=\"reherche annonce\">
        <h3><a href=\"{{ path('_annonce_chercher') }}\">Recherche des annonces</a></h3>
        {{ form (form) }}
        <h1>Liste des annonces</h1>

        <table border=\"1\">
            <tr>
                <th>id</th>
                <th>categorie</th>
                <th>titre</th>
                <th>user</th>
                <th>numero de telephone</th>
                <th>Description</th>
                <th>date de creation</th>

            </tr>

            {% for a in annonce %}
                <tr>
                    <td>{{ a.id}}</td>
                    <td>{{ a.categorieA}}</td>
                    <td>{{ a.titreA}}</td>
                    <td>{{ a.idUser}}</td>
                    <td>{{ a.numTel}}</td>
                    <td>{{ a.descA}}</td>
                    <td>{{ a.dateA|date}}</td>
                    <td><a href=\"{{ path('_annonce_supprimer',{'id':a.id}) }}\">Supprimer</a></td>
                    <td><a href=\"{{ path('_annonce_modifier',{'id':a.id}) }}\">Modifier</a></td>


                </tr>
            {% endfor %}
        </table>
        <span style=\"alignment: right\"></span>
    </div>

{% endblock %}", "AnnonceBundle::ChercherAnnonce.html.twig", "C:\\wamp64\\www\\pidev00\\src\\EspritEntreAide\\AnnonceBundle/Resources/views/ChercherAnnonce.html.twig");
    }
}
