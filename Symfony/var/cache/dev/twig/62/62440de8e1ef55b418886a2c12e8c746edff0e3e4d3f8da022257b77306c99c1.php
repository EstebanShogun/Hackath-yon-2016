<?php

/* base.html.twig */
class __TwigTemplate_f89f26ee862f7d248212620cb4ca8fbf5e10381d43b73b13cc32692188309f4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38897623d0113435570813a2bc2e029f31d5231dd80fe60e081bb3d24cc6beba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38897623d0113435570813a2bc2e029f31d5231dd80fe60e081bb3d24cc6beba->enter($__internal_38897623d0113435570813a2bc2e029f31d5231dd80fe60e081bb3d24cc6beba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_38897623d0113435570813a2bc2e029f31d5231dd80fe60e081bb3d24cc6beba->leave($__internal_38897623d0113435570813a2bc2e029f31d5231dd80fe60e081bb3d24cc6beba_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_08eff8ac3b19785a5307ebcb8c4a67db3e7057d40c90a33af5f2fa132b73067b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08eff8ac3b19785a5307ebcb8c4a67db3e7057d40c90a33af5f2fa132b73067b->enter($__internal_08eff8ac3b19785a5307ebcb8c4a67db3e7057d40c90a33af5f2fa132b73067b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_08eff8ac3b19785a5307ebcb8c4a67db3e7057d40c90a33af5f2fa132b73067b->leave($__internal_08eff8ac3b19785a5307ebcb8c4a67db3e7057d40c90a33af5f2fa132b73067b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aac7295b58b8258a8f4a2a9e699b71eb81185967490079d5c552b2ca1a642000 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aac7295b58b8258a8f4a2a9e699b71eb81185967490079d5c552b2ca1a642000->enter($__internal_aac7295b58b8258a8f4a2a9e699b71eb81185967490079d5c552b2ca1a642000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_aac7295b58b8258a8f4a2a9e699b71eb81185967490079d5c552b2ca1a642000->leave($__internal_aac7295b58b8258a8f4a2a9e699b71eb81185967490079d5c552b2ca1a642000_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9a10476194fc7052b41334fb737190b2f9634b5659b75625b2de362b40c151b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9a10476194fc7052b41334fb737190b2f9634b5659b75625b2de362b40c151b->enter($__internal_d9a10476194fc7052b41334fb737190b2f9634b5659b75625b2de362b40c151b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d9a10476194fc7052b41334fb737190b2f9634b5659b75625b2de362b40c151b->leave($__internal_d9a10476194fc7052b41334fb737190b2f9634b5659b75625b2de362b40c151b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fa004e6fcd07bb60c066b2807d2e52f78b3166868ffd43fdef68e2057e6a951f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa004e6fcd07bb60c066b2807d2e52f78b3166868ffd43fdef68e2057e6a951f->enter($__internal_fa004e6fcd07bb60c066b2807d2e52f78b3166868ffd43fdef68e2057e6a951f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fa004e6fcd07bb60c066b2807d2e52f78b3166868ffd43fdef68e2057e6a951f->leave($__internal_fa004e6fcd07bb60c066b2807d2e52f78b3166868ffd43fdef68e2057e6a951f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
";
    }
}
