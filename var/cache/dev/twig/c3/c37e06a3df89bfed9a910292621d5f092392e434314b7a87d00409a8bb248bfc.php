<?php

/* @Store/Default/index.html.twig */
class __TwigTemplate_59e010423cd5a79e63fb7accbd2990fb318b58e623abac4fb6137669a921bbe1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate(":default:test.html.twig", "@Store/Default/index.html.twig", 2);
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
        $__internal_0ddd5ab387373621d1ee91c3b74661400dc9392ed7740ac76bd40373381f4919 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ddd5ab387373621d1ee91c3b74661400dc9392ed7740ac76bd40373381f4919->enter($__internal_0ddd5ab387373621d1ee91c3b74661400dc9392ed7740ac76bd40373381f4919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Store/Default/index.html.twig"));

        $__internal_9d98e9a0b5ff7971159ef1508deb530a055a5ae63aa988bc188edbc1aa7f1eab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d98e9a0b5ff7971159ef1508deb530a055a5ae63aa988bc188edbc1aa7f1eab->enter($__internal_9d98e9a0b5ff7971159ef1508deb530a055a5ae63aa988bc188edbc1aa7f1eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Store/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ddd5ab387373621d1ee91c3b74661400dc9392ed7740ac76bd40373381f4919->leave($__internal_0ddd5ab387373621d1ee91c3b74661400dc9392ed7740ac76bd40373381f4919_prof);

        
        $__internal_9d98e9a0b5ff7971159ef1508deb530a055a5ae63aa988bc188edbc1aa7f1eab->leave($__internal_9d98e9a0b5ff7971159ef1508deb530a055a5ae63aa988bc188edbc1aa7f1eab_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4cdb3a94509aa7da901ce24ee77d3ffa29f2ca9702c1e828b3c9170938d52793 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cdb3a94509aa7da901ce24ee77d3ffa29f2ca9702c1e828b3c9170938d52793->enter($__internal_4cdb3a94509aa7da901ce24ee77d3ffa29f2ca9702c1e828b3c9170938d52793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5392ee6f34d08fabda443e9210f286cd6cee04169df5bc956f7fdf7110c47eba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5392ee6f34d08fabda443e9210f286cd6cee04169df5bc956f7fdf7110c47eba->enter($__internal_5392ee6f34d08fabda443e9210f286cd6cee04169df5bc956f7fdf7110c47eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Docs";
        
        $__internal_5392ee6f34d08fabda443e9210f286cd6cee04169df5bc956f7fdf7110c47eba->leave($__internal_5392ee6f34d08fabda443e9210f286cd6cee04169df5bc956f7fdf7110c47eba_prof);

        
        $__internal_4cdb3a94509aa7da901ce24ee77d3ffa29f2ca9702c1e828b3c9170938d52793->leave($__internal_4cdb3a94509aa7da901ce24ee77d3ffa29f2ca9702c1e828b3c9170938d52793_prof);

    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        $__internal_e9501f312f8969f9fe28b1ce23136e5607ef574b4cdc49a9d6143399bd80f66a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9501f312f8969f9fe28b1ce23136e5607ef574b4cdc49a9d6143399bd80f66a->enter($__internal_e9501f312f8969f9fe28b1ce23136e5607ef574b4cdc49a9d6143399bd80f66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_718cf0438e8fd9c71e4e099be645de80f9ba61e11d7793c57992865275d43e71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_718cf0438e8fd9c71e4e099be645de80f9ba61e11d7793c57992865275d43e71->enter($__internal_718cf0438e8fd9c71e4e099be645de80f9ba61e11d7793c57992865275d43e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 7
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style type=\"text/css\">
        .important { color: #336699; }

    </style>
";
        
        $__internal_718cf0438e8fd9c71e4e099be645de80f9ba61e11d7793c57992865275d43e71->leave($__internal_718cf0438e8fd9c71e4e099be645de80f9ba61e11d7793c57992865275d43e71_prof);

        
        $__internal_e9501f312f8969f9fe28b1ce23136e5607ef574b4cdc49a9d6143399bd80f66a->leave($__internal_e9501f312f8969f9fe28b1ce23136e5607ef574b4cdc49a9d6143399bd80f66a_prof);

    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        $__internal_0327f6667c77dff774147a3804d650cf7a7c93ac3670fa69615fdc5b50dcf982 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0327f6667c77dff774147a3804d650cf7a7c93ac3670fa69615fdc5b50dcf982->enter($__internal_0327f6667c77dff774147a3804d650cf7a7c93ac3670fa69615fdc5b50dcf982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_82c545619bdc3cdcc740e0a5351912efd25360c04b7c71dc1cef5a7543a69a4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82c545619bdc3cdcc740e0a5351912efd25360c04b7c71dc1cef5a7543a69a4c->enter($__internal_82c545619bdc3cdcc740e0a5351912efd25360c04b7c71dc1cef5a7543a69a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 14
        echo "    <table class=\"table\">
        <tr>
            <th>id</th>
            <th>nom</th>
            <th>editer</th>
            <th>supprimer</th>
        </tr>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) || array_key_exists("stores", $context) ? $context["stores"] : (function () { throw new Twig_Error_Runtime('Variable "stores" does not exist.', 21, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 22
            echo "            <tr>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["store"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["store"], "nomStore", array()), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("store_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["store"], "id", array()))), "html", null, true);
            echo "\">editer</a></td>
                <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("store_remove", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["store"], "id", array()))), "html", null, true);
            echo "\">supprimer</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </table>
";
        
        $__internal_82c545619bdc3cdcc740e0a5351912efd25360c04b7c71dc1cef5a7543a69a4c->leave($__internal_82c545619bdc3cdcc740e0a5351912efd25360c04b7c71dc1cef5a7543a69a4c_prof);

        
        $__internal_0327f6667c77dff774147a3804d650cf7a7c93ac3670fa69615fdc5b50dcf982->leave($__internal_0327f6667c77dff774147a3804d650cf7a7c93ac3670fa69615fdc5b50dcf982_prof);

    }

    public function getTemplateName()
    {
        return "@Store/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 29,  123 => 26,  119 => 25,  115 => 24,  111 => 23,  108 => 22,  104 => 21,  95 => 14,  86 => 13,  69 => 7,  60 => 6,  42 => 5,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \":default:test.html.twig\" %}


{% block title %}Docs{% endblock %}
{% block head %}
    {{ parent() }}
    <style type=\"text/css\">
        .important { color: #336699; }

    </style>
{% endblock %}
{% block content %}
    <table class=\"table\">
        <tr>
            <th>id</th>
            <th>nom</th>
            <th>editer</th>
            <th>supprimer</th>
        </tr>
        {% for store in stores %}
            <tr>
                <td>{{ store.id }}</td>
                <td>{{ store.nomStore }}</td>
                <td><a href=\"{{ path('store_edit',{'id':store.id}) }}\">editer</a></td>
                <td><a href=\"{{ path('store_remove',{'id':store.id}) }}\">supprimer</a></td>
            </tr>
        {% endfor %}
    </table>
{% endblock %}
", "@Store/Default/index.html.twig", "C:\\wamp64\\www\\pidev00\\src\\EspritEntreAide\\StoreBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
