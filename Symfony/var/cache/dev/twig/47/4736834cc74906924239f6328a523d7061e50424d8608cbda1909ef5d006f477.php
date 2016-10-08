<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_df9a596b61d0fc6bd57211524828bcc7d381665860a4df586ad206925007cdf6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3bc8fb4ae490b94975cd3f44385f8d0e146f7362aef26beec0e1061dd4875ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3bc8fb4ae490b94975cd3f44385f8d0e146f7362aef26beec0e1061dd4875ac->enter($__internal_b3bc8fb4ae490b94975cd3f44385f8d0e146f7362aef26beec0e1061dd4875ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3bc8fb4ae490b94975cd3f44385f8d0e146f7362aef26beec0e1061dd4875ac->leave($__internal_b3bc8fb4ae490b94975cd3f44385f8d0e146f7362aef26beec0e1061dd4875ac_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d6a2182d463c199b2d2621da48e47d181047b9095ea8d7daeedf83968736a35b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6a2182d463c199b2d2621da48e47d181047b9095ea8d7daeedf83968736a35b->enter($__internal_d6a2182d463c199b2d2621da48e47d181047b9095ea8d7daeedf83968736a35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d6a2182d463c199b2d2621da48e47d181047b9095ea8d7daeedf83968736a35b->leave($__internal_d6a2182d463c199b2d2621da48e47d181047b9095ea8d7daeedf83968736a35b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5ab8eb2a26ab3c43aba34767fa03379e194995d9e9c4f2d6d6e384a17ca258c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5ab8eb2a26ab3c43aba34767fa03379e194995d9e9c4f2d6d6e384a17ca258c->enter($__internal_f5ab8eb2a26ab3c43aba34767fa03379e194995d9e9c4f2d6d6e384a17ca258c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f5ab8eb2a26ab3c43aba34767fa03379e194995d9e9c4f2d6d6e384a17ca258c->leave($__internal_f5ab8eb2a26ab3c43aba34767fa03379e194995d9e9c4f2d6d6e384a17ca258c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_55fb1bd11acef9831b96fa7aef15f7e514aab373103684c60fc960e6097fb7a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55fb1bd11acef9831b96fa7aef15f7e514aab373103684c60fc960e6097fb7a6->enter($__internal_55fb1bd11acef9831b96fa7aef15f7e514aab373103684c60fc960e6097fb7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_55fb1bd11acef9831b96fa7aef15f7e514aab373103684c60fc960e6097fb7a6->leave($__internal_55fb1bd11acef9831b96fa7aef15f7e514aab373103684c60fc960e6097fb7a6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
