<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c89dc6eaec2ee00e55be03a05eee004db65da5fe3bff9033a493dbd1487a9c75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_088774483962e7361d96edb21b6671dfea64dd97bb0e0b5993460595269246f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_088774483962e7361d96edb21b6671dfea64dd97bb0e0b5993460595269246f3->enter($__internal_088774483962e7361d96edb21b6671dfea64dd97bb0e0b5993460595269246f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_088774483962e7361d96edb21b6671dfea64dd97bb0e0b5993460595269246f3->leave($__internal_088774483962e7361d96edb21b6671dfea64dd97bb0e0b5993460595269246f3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4a1f22f7c17146f1b98326ce3a860d9832f2ebeacc4aa516ec87c59bd9cb1f63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a1f22f7c17146f1b98326ce3a860d9832f2ebeacc4aa516ec87c59bd9cb1f63->enter($__internal_4a1f22f7c17146f1b98326ce3a860d9832f2ebeacc4aa516ec87c59bd9cb1f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4a1f22f7c17146f1b98326ce3a860d9832f2ebeacc4aa516ec87c59bd9cb1f63->leave($__internal_4a1f22f7c17146f1b98326ce3a860d9832f2ebeacc4aa516ec87c59bd9cb1f63_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_853c03d257b5ae76f708f82bf7069ae95a0d059b84648aafa17a4e7ddc1dfa56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_853c03d257b5ae76f708f82bf7069ae95a0d059b84648aafa17a4e7ddc1dfa56->enter($__internal_853c03d257b5ae76f708f82bf7069ae95a0d059b84648aafa17a4e7ddc1dfa56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_853c03d257b5ae76f708f82bf7069ae95a0d059b84648aafa17a4e7ddc1dfa56->leave($__internal_853c03d257b5ae76f708f82bf7069ae95a0d059b84648aafa17a4e7ddc1dfa56_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6784c81b2c61ed8385a05d8019580b1e1dcb1edd3446719b166088919de8e0ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6784c81b2c61ed8385a05d8019580b1e1dcb1edd3446719b166088919de8e0ce->enter($__internal_6784c81b2c61ed8385a05d8019580b1e1dcb1edd3446719b166088919de8e0ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6784c81b2c61ed8385a05d8019580b1e1dcb1edd3446719b166088919de8e0ce->leave($__internal_6784c81b2c61ed8385a05d8019580b1e1dcb1edd3446719b166088919de8e0ce_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
