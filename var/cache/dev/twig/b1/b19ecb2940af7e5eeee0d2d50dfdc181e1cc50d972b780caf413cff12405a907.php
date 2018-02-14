<?php

/* @Club/Default/recherche.html.twig */
class __TwigTemplate_45600a2951f985e5804cb7334f4b30aaf18a4eb7bc16843251856b145f7b2aa5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate(":default:test.html.twig", "@Club/Default/recherche.html.twig", 2);
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
        $__internal_ac2c9c50b57c0ee688237ce6a53a73cd66a1e6094a9a62ce06f3eccacdcd700f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac2c9c50b57c0ee688237ce6a53a73cd66a1e6094a9a62ce06f3eccacdcd700f->enter($__internal_ac2c9c50b57c0ee688237ce6a53a73cd66a1e6094a9a62ce06f3eccacdcd700f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Club/Default/recherche.html.twig"));

        $__internal_b0f968f0795006f89b33e1afd2d25211cf8a728580ecd1be79496b650910c84c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0f968f0795006f89b33e1afd2d25211cf8a728580ecd1be79496b650910c84c->enter($__internal_b0f968f0795006f89b33e1afd2d25211cf8a728580ecd1be79496b650910c84c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Club/Default/recherche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac2c9c50b57c0ee688237ce6a53a73cd66a1e6094a9a62ce06f3eccacdcd700f->leave($__internal_ac2c9c50b57c0ee688237ce6a53a73cd66a1e6094a9a62ce06f3eccacdcd700f_prof);

        
        $__internal_b0f968f0795006f89b33e1afd2d25211cf8a728580ecd1be79496b650910c84c->leave($__internal_b0f968f0795006f89b33e1afd2d25211cf8a728580ecd1be79496b650910c84c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cfd5ebdb44a457355aa8feb37fc4e9fc5997b8e279177621c29fc5a27b9fc319 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfd5ebdb44a457355aa8feb37fc4e9fc5997b8e279177621c29fc5a27b9fc319->enter($__internal_cfd5ebdb44a457355aa8feb37fc4e9fc5997b8e279177621c29fc5a27b9fc319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a95fa83a0ce0f611f8596cf94506e514df701c5d0d6ea8f22db8d184bd98d256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a95fa83a0ce0f611f8596cf94506e514df701c5d0d6ea8f22db8d184bd98d256->enter($__internal_a95fa83a0ce0f611f8596cf94506e514df701c5d0d6ea8f22db8d184bd98d256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Club";
        
        $__internal_a95fa83a0ce0f611f8596cf94506e514df701c5d0d6ea8f22db8d184bd98d256->leave($__internal_a95fa83a0ce0f611f8596cf94506e514df701c5d0d6ea8f22db8d184bd98d256_prof);

        
        $__internal_cfd5ebdb44a457355aa8feb37fc4e9fc5997b8e279177621c29fc5a27b9fc319->leave($__internal_cfd5ebdb44a457355aa8feb37fc4e9fc5997b8e279177621c29fc5a27b9fc319_prof);

    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        $__internal_7b5e837668aa54c7995453e933734586a0861ee66a8b59feca705d9f29b17b25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b5e837668aa54c7995453e933734586a0861ee66a8b59feca705d9f29b17b25->enter($__internal_7b5e837668aa54c7995453e933734586a0861ee66a8b59feca705d9f29b17b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f2452f71493906e3c3e0d4b81acf6c53b78f3f6e9cd9d2fc63a0a75e09b6bdfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2452f71493906e3c3e0d4b81acf6c53b78f3f6e9cd9d2fc63a0a75e09b6bdfb->enter($__internal_f2452f71493906e3c3e0d4b81acf6c53b78f3f6e9cd9d2fc63a0a75e09b6bdfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 7
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style type=\"text/css\">
        .important { color: #336699; }

    </style>
";
        
        $__internal_f2452f71493906e3c3e0d4b81acf6c53b78f3f6e9cd9d2fc63a0a75e09b6bdfb->leave($__internal_f2452f71493906e3c3e0d4b81acf6c53b78f3f6e9cd9d2fc63a0a75e09b6bdfb_prof);

        
        $__internal_7b5e837668aa54c7995453e933734586a0861ee66a8b59feca705d9f29b17b25->leave($__internal_7b5e837668aa54c7995453e933734586a0861ee66a8b59feca705d9f29b17b25_prof);

    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        $__internal_b46b0ad39e088347bab4c098ff2ac32efb30a5ccb39651b4307ad5d5b18ef5eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b46b0ad39e088347bab4c098ff2ac32efb30a5ccb39651b4307ad5d5b18ef5eb->enter($__internal_b46b0ad39e088347bab4c098ff2ac32efb30a5ccb39651b4307ad5d5b18ef5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_fda22f86e5f8f43007e9b7a720eea23595b71603fdabceccebc8414484fdc6dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fda22f86e5f8f43007e9b7a720eea23595b71603fdabceccebc8414484fdc6dd->enter($__internal_fda22f86e5f8f43007e9b7a720eea23595b71603fdabceccebc8414484fdc6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 14
        echo "    <div class=\"big-div-club\">
        <h1>Interface club</h1>
    </div>
    <center>

        <h1>Recherche club par nom</h1>
        ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), 'form');
        echo "
        <h1>Liste des Club</h1>
    </center>
    <center>
        <table table width=\"60%\" height=\"20%\" border=\"2\" align=\"center\">
            <tr>
                <th>ID club</th>
                <th>nom club</th>
                <th>mail club</th>
                <th>date creation</th>
                <th>Responsable club</th>
                <th>description club</th>
                <th>photo club</th>
            </tr>

            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new Twig_Error_Runtime('Variable "club" does not exist.', 35, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 36
            echo "
                <tr>
                    <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nomC", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "mailC", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "dateCreation", array())), "html", null, true);
            echo "</td>
                    <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "idUser", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "descC", array()), "html", null, true);
            echo "</td>
                    <td> <img src= \" ";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "image", array()))), "html", null, true);
            echo "\"  width=\"15%\"!imp  height=\"15%\" ></td>
                    ";
            // line 45
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ETUDIANT") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ENSEIGNANT"))) {
                // line 46
                echo "                        <td> <input type=\"button\" value=\"Abonne-toi!!\"></td>
                    ";
            }
            // line 48
            echo "



                    ";
            // line 52
            if ((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RESPONSABLE_SUPER_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
                // line 56
                echo "
                        <td><a href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("club_supprime", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id", array()))), "html", null, true);
                echo "\">Supprimer</a></td>
                        <td><a href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_club_modifier", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id", array()))), "html", null, true);
                echo "\">Modifier</a></td>
                    ";
            }
            // line 60
            echo "
                    ";
            // line 61
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RESPONSABLE_CLUB")) {
                // line 63
                echo "                        <td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_club_modifier", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id", array()))), "html", null, true);
                echo "\">Modifier</a></td>
                    ";
            }
            // line 65
            echo "






                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "        </table>
    </center>






    <p class=\"important\">

    </p>
";
        
        $__internal_fda22f86e5f8f43007e9b7a720eea23595b71603fdabceccebc8414484fdc6dd->leave($__internal_fda22f86e5f8f43007e9b7a720eea23595b71603fdabceccebc8414484fdc6dd_prof);

        
        $__internal_b46b0ad39e088347bab4c098ff2ac32efb30a5ccb39651b4307ad5d5b18ef5eb->leave($__internal_b46b0ad39e088347bab4c098ff2ac32efb30a5ccb39651b4307ad5d5b18ef5eb_prof);

    }

    public function getTemplateName()
    {
        return "@Club/Default/recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 74,  194 => 65,  188 => 63,  186 => 61,  183 => 60,  178 => 58,  174 => 57,  171 => 56,  169 => 52,  163 => 48,  159 => 46,  157 => 45,  153 => 44,  149 => 43,  145 => 42,  141 => 41,  137 => 40,  133 => 39,  129 => 38,  125 => 36,  121 => 35,  103 => 20,  95 => 14,  86 => 13,  69 => 7,  60 => 6,  42 => 5,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \":default:test.html.twig\" %}


{% block title %}Club{% endblock %}
{% block head %}
    {{ parent() }}
    <style type=\"text/css\">
        .important { color: #336699; }

    </style>
{% endblock %}
{% block content %}
    <div class=\"big-div-club\">
        <h1>Interface club</h1>
    </div>
    <center>

        <h1>Recherche club par nom</h1>
        {{ form (form) }}
        <h1>Liste des Club</h1>
    </center>
    <center>
        <table table width=\"60%\" height=\"20%\" border=\"2\" align=\"center\">
            <tr>
                <th>ID club</th>
                <th>nom club</th>
                <th>mail club</th>
                <th>date creation</th>
                <th>Responsable club</th>
                <th>description club</th>
                <th>photo club</th>
            </tr>

            {% for c in club %}

                <tr>
                    <td>{{ c.id }}</td>
                    <td>{{ c.nomC}}</td>
                    <td>{{ c.mailC}}</td>
                    <td>{{ c.dateCreation |date}}</td>
                    <td>{{ c.idUser}}</td>
                    <td>{{ c.descC}}</td>
                    <td> <img src= \" {{ asset ('uploads/images/' ~ c.image) }}\"  width=\"15%\"!imp  height=\"15%\" ></td>
                    {% if(is_granted('ROLE_ETUDIANT')) or (is_granted('ROLE_ENSEIGNANT') ) %}
                        <td> <input type=\"button\" value=\"Abonne-toi!!\"></td>
                    {% endif %}




                    {% if (is_granted('ROLE_RESPONSABLE_SUPER_ADMIN'))
                    or(is_granted('ROLE_SUPER_ADMIN'))
                    or(is_granted('ROLE_ADMIN'))
                    %}

                        <td><a href=\"{{ path('club_supprime',{'id':c.id}) }}\">Supprimer</a></td>
                        <td><a href=\"{{ path('_club_modifier',{'id':c.id}) }}\">Modifier</a></td>
                    {% endif %}

                    {% if(is_granted('ROLE_RESPONSABLE_CLUB'))
                    %}
                        <td><a href=\"{{ path('_club_modifier',{'id':c.id}) }}\">Modifier</a></td>
                    {% endif %}







                </tr>
            {% endfor %}
        </table>
    </center>






    <p class=\"important\">

    </p>
{% endblock %}

", "@Club/Default/recherche.html.twig", "C:\\wamp64\\www\\pidemo\\src\\EspritEntreAide\\ClubBundle\\Resources\\views\\Default\\recherche.html.twig");
    }
}
