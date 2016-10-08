<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_029994d6d4d8be9116b333070891d13ae392381fa868d4efe95625ea0fdc7569 extends Twig_Template
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
        $__internal_672139354870ed017c477d32c327b804d8bd29492b33be4beb84b31a4d82fab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_672139354870ed017c477d32c327b804d8bd29492b33be4beb84b31a4d82fab5->enter($__internal_672139354870ed017c477d32c327b804d8bd29492b33be4beb84b31a4d82fab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_672139354870ed017c477d32c327b804d8bd29492b33be4beb84b31a4d82fab5->leave($__internal_672139354870ed017c477d32c327b804d8bd29492b33be4beb84b31a4d82fab5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_67b1db1bf41f0d52371995283ab487dc7ad55a11c829c388d93e1a3b5dfb3285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67b1db1bf41f0d52371995283ab487dc7ad55a11c829c388d93e1a3b5dfb3285->enter($__internal_67b1db1bf41f0d52371995283ab487dc7ad55a11c829c388d93e1a3b5dfb3285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_67b1db1bf41f0d52371995283ab487dc7ad55a11c829c388d93e1a3b5dfb3285->leave($__internal_67b1db1bf41f0d52371995283ab487dc7ad55a11c829c388d93e1a3b5dfb3285_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1d2e9747922cf7981db62bf7ce7507f9b108bd85768e76f1b107043e28256ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1d2e9747922cf7981db62bf7ce7507f9b108bd85768e76f1b107043e28256ac->enter($__internal_a1d2e9747922cf7981db62bf7ce7507f9b108bd85768e76f1b107043e28256ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a1d2e9747922cf7981db62bf7ce7507f9b108bd85768e76f1b107043e28256ac->leave($__internal_a1d2e9747922cf7981db62bf7ce7507f9b108bd85768e76f1b107043e28256ac_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e79dccf0c49950f2a7c34d95c0e3a54df42de83b78be82d5b035cd81bb56c48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e79dccf0c49950f2a7c34d95c0e3a54df42de83b78be82d5b035cd81bb56c48->enter($__internal_6e79dccf0c49950f2a7c34d95c0e3a54df42de83b78be82d5b035cd81bb56c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6e79dccf0c49950f2a7c34d95c0e3a54df42de83b78be82d5b035cd81bb56c48->leave($__internal_6e79dccf0c49950f2a7c34d95c0e3a54df42de83b78be82d5b035cd81bb56c48_prof);

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
