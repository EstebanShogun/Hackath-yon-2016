<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_26c6ff1c643606bc8a64539661a3b4e46224ccc4de68a0cd587d5eb5551d9872 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_71b013a863ecdca3c5e00a901c6c9d2c00223ed470b272e5b8ad955600ed3e66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71b013a863ecdca3c5e00a901c6c9d2c00223ed470b272e5b8ad955600ed3e66->enter($__internal_71b013a863ecdca3c5e00a901c6c9d2c00223ed470b272e5b8ad955600ed3e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71b013a863ecdca3c5e00a901c6c9d2c00223ed470b272e5b8ad955600ed3e66->leave($__internal_71b013a863ecdca3c5e00a901c6c9d2c00223ed470b272e5b8ad955600ed3e66_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1ce1a9c47d95a4dc77c47da75c586075399424d653ec1a45278b09bbe273b7aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ce1a9c47d95a4dc77c47da75c586075399424d653ec1a45278b09bbe273b7aa->enter($__internal_1ce1a9c47d95a4dc77c47da75c586075399424d653ec1a45278b09bbe273b7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_1ce1a9c47d95a4dc77c47da75c586075399424d653ec1a45278b09bbe273b7aa->leave($__internal_1ce1a9c47d95a4dc77c47da75c586075399424d653ec1a45278b09bbe273b7aa_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0122611a7a69be51c113ce93b118057e16644bfac137d8485e976a740c42bb45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0122611a7a69be51c113ce93b118057e16644bfac137d8485e976a740c42bb45->enter($__internal_0122611a7a69be51c113ce93b118057e16644bfac137d8485e976a740c42bb45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_0122611a7a69be51c113ce93b118057e16644bfac137d8485e976a740c42bb45->leave($__internal_0122611a7a69be51c113ce93b118057e16644bfac137d8485e976a740c42bb45_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_577c6123b268af4551b6132938bcff684387b494d7419c05b102b119032aa333 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_577c6123b268af4551b6132938bcff684387b494d7419c05b102b119032aa333->enter($__internal_577c6123b268af4551b6132938bcff684387b494d7419c05b102b119032aa333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_577c6123b268af4551b6132938bcff684387b494d7419c05b102b119032aa333->leave($__internal_577c6123b268af4551b6132938bcff684387b494d7419c05b102b119032aa333_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
";
    }
}
