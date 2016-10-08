<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d06bfaec052c8cea02e41a476021d9b94b67f1f4a9d62055bba6e5df0e418ae5 extends Twig_Template
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
        $__internal_3ebf9a2a3d0a1f01874ab00ce90971869b47de6e477e149053ff42338dec7de6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ebf9a2a3d0a1f01874ab00ce90971869b47de6e477e149053ff42338dec7de6->enter($__internal_3ebf9a2a3d0a1f01874ab00ce90971869b47de6e477e149053ff42338dec7de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ebf9a2a3d0a1f01874ab00ce90971869b47de6e477e149053ff42338dec7de6->leave($__internal_3ebf9a2a3d0a1f01874ab00ce90971869b47de6e477e149053ff42338dec7de6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_37bd06f3746652b28e7a66c2389a8eda986c90753521682f0a40f6c13fa8346e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37bd06f3746652b28e7a66c2389a8eda986c90753521682f0a40f6c13fa8346e->enter($__internal_37bd06f3746652b28e7a66c2389a8eda986c90753521682f0a40f6c13fa8346e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_37bd06f3746652b28e7a66c2389a8eda986c90753521682f0a40f6c13fa8346e->leave($__internal_37bd06f3746652b28e7a66c2389a8eda986c90753521682f0a40f6c13fa8346e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_efc616b434da87ccd21d11455579443a96f1a0654a08a94a614ab54e0f551257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efc616b434da87ccd21d11455579443a96f1a0654a08a94a614ab54e0f551257->enter($__internal_efc616b434da87ccd21d11455579443a96f1a0654a08a94a614ab54e0f551257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_efc616b434da87ccd21d11455579443a96f1a0654a08a94a614ab54e0f551257->leave($__internal_efc616b434da87ccd21d11455579443a96f1a0654a08a94a614ab54e0f551257_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d46bda19ae8b5bed352ff310630b8aa5298f3c1b694ba9681cd9cbf6bf5e816c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d46bda19ae8b5bed352ff310630b8aa5298f3c1b694ba9681cd9cbf6bf5e816c->enter($__internal_d46bda19ae8b5bed352ff310630b8aa5298f3c1b694ba9681cd9cbf6bf5e816c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d46bda19ae8b5bed352ff310630b8aa5298f3c1b694ba9681cd9cbf6bf5e816c->leave($__internal_d46bda19ae8b5bed352ff310630b8aa5298f3c1b694ba9681cd9cbf6bf5e816c_prof);

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
