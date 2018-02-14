<?php

/* AnnonceBundle::AfficherAnnonce.html.twig */
class __TwigTemplate_19e85d4b11911d22efadcdff8eb3b37d6f7ca9285e6d288ae21ca0cf00d20caf extends Twig_Template
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
        $__internal_b1957bc6e64ccba98ddd72f8c9c8a33c9872c39151cbd15b7de81ee60bd9a070 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1957bc6e64ccba98ddd72f8c9c8a33c9872c39151cbd15b7de81ee60bd9a070->enter($__internal_b1957bc6e64ccba98ddd72f8c9c8a33c9872c39151cbd15b7de81ee60bd9a070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnnonceBundle::AfficherAnnonce.html.twig"));

        $__internal_9260c31a1124445832c6ed48d9cfad08112623bc28f283327611a194c848cd71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9260c31a1124445832c6ed48d9cfad08112623bc28f283327611a194c848cd71->enter($__internal_9260c31a1124445832c6ed48d9cfad08112623bc28f283327611a194c848cd71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnnonceBundle::AfficherAnnonce.html.twig"));

        // line 1
        echo "<h1>Liste des annonces</h1>

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
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evts"]) || array_key_exists("evts", $context) ? $context["evts"] : (function () { throw new Twig_Error_Runtime('Variable "evts" does not exist.', 23, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 24
            echo "        <tr>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "categorieA", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "titreA", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "idUser", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "numTel", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "descA", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "dateA", array())), "html", null, true);
            echo "</td>






        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</table>
";
        
        $__internal_b1957bc6e64ccba98ddd72f8c9c8a33c9872c39151cbd15b7de81ee60bd9a070->leave($__internal_b1957bc6e64ccba98ddd72f8c9c8a33c9872c39151cbd15b7de81ee60bd9a070_prof);

        
        $__internal_9260c31a1124445832c6ed48d9cfad08112623bc28f283327611a194c848cd71->leave($__internal_9260c31a1124445832c6ed48d9cfad08112623bc28f283327611a194c848cd71_prof);

    }

    public function getTemplateName()
    {
        return "AnnonceBundle::AfficherAnnonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 40,  80 => 31,  76 => 30,  72 => 29,  68 => 28,  64 => 27,  60 => 26,  56 => 25,  53 => 24,  49 => 23,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Liste des annonces</h1>

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
    {% for a in evts %}
        <tr>
            <td>{{ a.id}}</td>
            <td>{{ a.categorieA}}</td>
            <td>{{ a.titreA}}</td>
            <td>{{ a.idUser}}</td>
            <td>{{ a.numTel}}</td>
            <td>{{ a.descA}}</td>
            <td>{{ a.dateA|date}}</td>






        </tr>
    {% endfor %}
</table>
", "AnnonceBundle::AfficherAnnonce.html.twig", "C:\\wamp64\\www\\pidev00\\src\\EspritEntreAide\\AnnonceBundle/Resources/views/AfficherAnnonce.html.twig");
    }
}
