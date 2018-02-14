<?php

/* StoreBundle:Default:editStore.html.twig */
class __TwigTemplate_c65b45218bd21fa4bc7bebb82bdbc1ba4267e5c77bb50703c7f76d06dd69f260 extends Twig_Template
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
        $__internal_f5c8aa25e52e8cb3327ad955421db03d354f4e6358a3f01084e705e6e37ca4cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5c8aa25e52e8cb3327ad955421db03d354f4e6358a3f01084e705e6e37ca4cc->enter($__internal_f5c8aa25e52e8cb3327ad955421db03d354f4e6358a3f01084e705e6e37ca4cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreBundle:Default:editStore.html.twig"));

        $__internal_4d81a5c32b9ccf6287f1d38e536da3756c0d5aa11f3b5eee12d56c80ea2ffca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d81a5c32b9ccf6287f1d38e536da3756c0d5aa11f3b5eee12d56c80ea2ffca1->enter($__internal_4d81a5c32b9ccf6287f1d38e536da3756c0d5aa11f3b5eee12d56c80ea2ffca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreBundle:Default:editStore.html.twig"));

        // line 1
        echo "<html>
<body>

";
        // line 4
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'form_start');
        echo "
";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), 'widget');
        echo "
";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_end');
        echo "
</body>
</html>";
        
        $__internal_f5c8aa25e52e8cb3327ad955421db03d354f4e6358a3f01084e705e6e37ca4cc->leave($__internal_f5c8aa25e52e8cb3327ad955421db03d354f4e6358a3f01084e705e6e37ca4cc_prof);

        
        $__internal_4d81a5c32b9ccf6287f1d38e536da3756c0d5aa11f3b5eee12d56c80ea2ffca1->leave($__internal_4d81a5c32b9ccf6287f1d38e536da3756c0d5aa11f3b5eee12d56c80ea2ffca1_prof);

    }

    public function getTemplateName()
    {
        return "StoreBundle:Default:editStore.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  34 => 5,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<body>

{{ form_start(form) }}
{{ form_widget(form) }}
{{ form_end(form) }}
</body>
</html>", "StoreBundle:Default:editStore.html.twig", "C:\\wamp64\\www\\pidev00\\src\\EspritEntreAide\\StoreBundle/Resources/views/Default/editStore.html.twig");
    }
}
