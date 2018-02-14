<?php

/* ClubBundle:Default:index.html.twig */
class __TwigTemplate_03c6e00308982069da88db6c70a8ba1e4af5b67587e7c9047a2bc2cce8dae615 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":default:test.html.twig", "ClubBundle:Default:index.html.twig", 1);
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
        $__internal_c97757e7020823ff31ab7b92c1419934319df19be254a699b69b4125dd008b3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c97757e7020823ff31ab7b92c1419934319df19be254a699b69b4125dd008b3a->enter($__internal_c97757e7020823ff31ab7b92c1419934319df19be254a699b69b4125dd008b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClubBundle:Default:index.html.twig"));

        $__internal_dfaaf81e828f4bab7fb84f3489b0ffe1417042e199fcf875238d08852ba9795f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfaaf81e828f4bab7fb84f3489b0ffe1417042e199fcf875238d08852ba9795f->enter($__internal_dfaaf81e828f4bab7fb84f3489b0ffe1417042e199fcf875238d08852ba9795f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClubBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c97757e7020823ff31ab7b92c1419934319df19be254a699b69b4125dd008b3a->leave($__internal_c97757e7020823ff31ab7b92c1419934319df19be254a699b69b4125dd008b3a_prof);

        
        $__internal_dfaaf81e828f4bab7fb84f3489b0ffe1417042e199fcf875238d08852ba9795f->leave($__internal_dfaaf81e828f4bab7fb84f3489b0ffe1417042e199fcf875238d08852ba9795f_prof);

    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_23a61284d82ba1fb3c2185933e5ab94eb52498a312af726be380ffa7ebab9f6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23a61284d82ba1fb3c2185933e5ab94eb52498a312af726be380ffa7ebab9f6e->enter($__internal_23a61284d82ba1fb3c2185933e5ab94eb52498a312af726be380ffa7ebab9f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4cc1f439a8122ea13402e1bb6cdb8d51cf35a053e0750798e4b6e5c82a8ed5d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cc1f439a8122ea13402e1bb6cdb8d51cf35a053e0750798e4b6e5c82a8ed5d9->enter($__internal_4cc1f439a8122ea13402e1bb6cdb8d51cf35a053e0750798e4b6e5c82a8ed5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Club";
        
        $__internal_4cc1f439a8122ea13402e1bb6cdb8d51cf35a053e0750798e4b6e5c82a8ed5d9->leave($__internal_4cc1f439a8122ea13402e1bb6cdb8d51cf35a053e0750798e4b6e5c82a8ed5d9_prof);

        
        $__internal_23a61284d82ba1fb3c2185933e5ab94eb52498a312af726be380ffa7ebab9f6e->leave($__internal_23a61284d82ba1fb3c2185933e5ab94eb52498a312af726be380ffa7ebab9f6e_prof);

    }

    public function block_head($context, array $blocks = array())
    {
        $__internal_a3c310ed79c209107b1cc78bae15d8ef383b18631d0023b797dcdd29d75a9c72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3c310ed79c209107b1cc78bae15d8ef383b18631d0023b797dcdd29d75a9c72->enter($__internal_a3c310ed79c209107b1cc78bae15d8ef383b18631d0023b797dcdd29d75a9c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8f333af2fcdfe326d78c870efdcc39c04f3500623d0bc951d712c89a73eaf3f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f333af2fcdfe326d78c870efdcc39c04f3500623d0bc951d712c89a73eaf3f7->enter($__internal_8f333af2fcdfe326d78c870efdcc39c04f3500623d0bc951d712c89a73eaf3f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo " ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style type=\"text/css\">
        .important { color: #336699; }

    </style>";
        
        $__internal_8f333af2fcdfe326d78c870efdcc39c04f3500623d0bc951d712c89a73eaf3f7->leave($__internal_8f333af2fcdfe326d78c870efdcc39c04f3500623d0bc951d712c89a73eaf3f7_prof);

        
        $__internal_a3c310ed79c209107b1cc78bae15d8ef383b18631d0023b797dcdd29d75a9c72->leave($__internal_a3c310ed79c209107b1cc78bae15d8ef383b18631d0023b797dcdd29d75a9c72_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_d0ac6fdfe57e197dd77c434a89c63049b039e4e76b4b3ea385444eb1207272ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0ac6fdfe57e197dd77c434a89c63049b039e4e76b4b3ea385444eb1207272ff->enter($__internal_d0ac6fdfe57e197dd77c434a89c63049b039e4e76b4b3ea385444eb1207272ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8590a29ebff2b40ba0f58e1d90847143cf03ef320aa32bf29c465ed13e760258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8590a29ebff2b40ba0f58e1d90847143cf03ef320aa32bf29c465ed13e760258->enter($__internal_8590a29ebff2b40ba0f58e1d90847143cf03ef320aa32bf29c465ed13e760258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"big-div-club\">
        <h1><b>Interface club</b></h1>
    </div>
    <center>
        <h1>Que voulez-vous faire?</h1><br>
        ";
        // line 11
        if ((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RESPONSABLE_SUPER_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            // line 12
            echo "        <ul>
            <li>
                <a href=\"";
            // line 14
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("club_ajout");
            echo "\">Ajouter un club</a>
            </li>
            <li>
                <a href=\"";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("club_affiche");
            echo "\">Gerer un club</a>
            </li>

            <li style=\"list-style: none\">
                ";
        }
        // line 22
        echo "                ";
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RESPONSABLE_CLUB") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ETUDIANT"))) {
            echo "</li>
            <li>
                <a href=\"";
            // line 24
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("club_recherche");
            echo "\">Rechercher un club</a>
            </li>
            <li style=\"list-style: none\">
                ";
        }
        // line 28
        echo "            </li>
        </ul>
    </center>
    <p class=\"important\"></p>";
        
        $__internal_8590a29ebff2b40ba0f58e1d90847143cf03ef320aa32bf29c465ed13e760258->leave($__internal_8590a29ebff2b40ba0f58e1d90847143cf03ef320aa32bf29c465ed13e760258_prof);

        
        $__internal_d0ac6fdfe57e197dd77c434a89c63049b039e4e76b4b3ea385444eb1207272ff->leave($__internal_d0ac6fdfe57e197dd77c434a89c63049b039e4e76b4b3ea385444eb1207272ff_prof);

    }

    public function getTemplateName()
    {
        return "ClubBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 28,  124 => 24,  118 => 22,  110 => 17,  104 => 14,  100 => 12,  98 => 11,  91 => 6,  82 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":default:test.html.twig\" %} {% block title %}Club{% endblock %} {% block head %} {{ parent() }}
    <style type=\"text/css\">
        .important { color: #336699; }

    </style>{% endblock %} {% block content %}
    <div class=\"big-div-club\">
        <h1><b>Interface club</b></h1>
    </div>
    <center>
        <h1>Que voulez-vous faire?</h1><br>
        {% if (is_granted('ROLE_RESPONSABLE_SUPER_ADMIN'))or(is_granted('ROLE_SUPER_ADMIN'))or(is_granted('ROLE_ADMIN')) %}
        <ul>
            <li>
                <a href=\"{{path('club_ajout')}}\">Ajouter un club</a>
            </li>
            <li>
                <a href=\"{{ path('club_affiche')}}\">Gerer un club</a>
            </li>

            <li style=\"list-style: none\">
                {% endif %}
                {% if(is_granted('ROLE_RESPONSABLE_CLUB'))  or(is_granted('ROLE_ETUDIANT')) %}</li>
            <li>
                <a href=\"{{path('club_recherche')}}\">Rechercher un club</a>
            </li>
            <li style=\"list-style: none\">
                {% endif %}
            </li>
        </ul>
    </center>
    <p class=\"important\"></p>{% endblock %}", "ClubBundle:Default:index.html.twig", "C:\\wamp64\\www\\pidemo\\src\\EspritEntreAide\\ClubBundle/Resources/views/Default/index.html.twig");
    }
}
