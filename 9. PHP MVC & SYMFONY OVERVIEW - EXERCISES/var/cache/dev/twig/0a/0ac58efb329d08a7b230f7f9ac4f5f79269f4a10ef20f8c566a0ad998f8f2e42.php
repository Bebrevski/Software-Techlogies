<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4096a95b09010fc5de9baad0112c8a326ea9dcfaf5008cde2fc34d17f370c7ef extends Twig_Template
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
        $__internal_7bbd064896e18cd6b070b8f584fb963674d583aace198ab2a7ac523a25c9ae70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bbd064896e18cd6b070b8f584fb963674d583aace198ab2a7ac523a25c9ae70->enter($__internal_7bbd064896e18cd6b070b8f584fb963674d583aace198ab2a7ac523a25c9ae70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bbd064896e18cd6b070b8f584fb963674d583aace198ab2a7ac523a25c9ae70->leave($__internal_7bbd064896e18cd6b070b8f584fb963674d583aace198ab2a7ac523a25c9ae70_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_84fbd5b66fd37ee5e2fee7eb229599ab87c5def8a19e1590756d7ed0fee3533b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84fbd5b66fd37ee5e2fee7eb229599ab87c5def8a19e1590756d7ed0fee3533b->enter($__internal_84fbd5b66fd37ee5e2fee7eb229599ab87c5def8a19e1590756d7ed0fee3533b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_84fbd5b66fd37ee5e2fee7eb229599ab87c5def8a19e1590756d7ed0fee3533b->leave($__internal_84fbd5b66fd37ee5e2fee7eb229599ab87c5def8a19e1590756d7ed0fee3533b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bec04f0cd6f89274e005ec4f99d1fd21e3743ccdbc2055b29342149c237bccc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bec04f0cd6f89274e005ec4f99d1fd21e3743ccdbc2055b29342149c237bccc4->enter($__internal_bec04f0cd6f89274e005ec4f99d1fd21e3743ccdbc2055b29342149c237bccc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bec04f0cd6f89274e005ec4f99d1fd21e3743ccdbc2055b29342149c237bccc4->leave($__internal_bec04f0cd6f89274e005ec4f99d1fd21e3743ccdbc2055b29342149c237bccc4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4af6104079eb6d36d5914fe29388b6ab18c622f9b660928d67f51134195ef40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4af6104079eb6d36d5914fe29388b6ab18c622f9b660928d67f51134195ef40->enter($__internal_c4af6104079eb6d36d5914fe29388b6ab18c622f9b660928d67f51134195ef40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c4af6104079eb6d36d5914fe29388b6ab18c622f9b660928d67f51134195ef40->leave($__internal_c4af6104079eb6d36d5914fe29388b6ab18c622f9b660928d67f51134195ef40_prof);

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
