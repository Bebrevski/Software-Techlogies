<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f96c31146078f1ee566f2faf85aa2c1fc78066b141f67ab78efcc1599b13cdb4 extends Twig_Template
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
        $__internal_6073c2784296b8a69ce0d42a43dc111a351cd7a029482a6c51bdafec67cb6375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6073c2784296b8a69ce0d42a43dc111a351cd7a029482a6c51bdafec67cb6375->enter($__internal_6073c2784296b8a69ce0d42a43dc111a351cd7a029482a6c51bdafec67cb6375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6073c2784296b8a69ce0d42a43dc111a351cd7a029482a6c51bdafec67cb6375->leave($__internal_6073c2784296b8a69ce0d42a43dc111a351cd7a029482a6c51bdafec67cb6375_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_80c6ec716e9f134fdb7049efa9971a7cea76cdc4c2916e893b08fc662dbb5f39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80c6ec716e9f134fdb7049efa9971a7cea76cdc4c2916e893b08fc662dbb5f39->enter($__internal_80c6ec716e9f134fdb7049efa9971a7cea76cdc4c2916e893b08fc662dbb5f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_80c6ec716e9f134fdb7049efa9971a7cea76cdc4c2916e893b08fc662dbb5f39->leave($__internal_80c6ec716e9f134fdb7049efa9971a7cea76cdc4c2916e893b08fc662dbb5f39_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b656f5ac2b62b0225ab2a0dc796f6b9bec7c046f5c64b1e6fcdf80c6a291a6f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b656f5ac2b62b0225ab2a0dc796f6b9bec7c046f5c64b1e6fcdf80c6a291a6f3->enter($__internal_b656f5ac2b62b0225ab2a0dc796f6b9bec7c046f5c64b1e6fcdf80c6a291a6f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b656f5ac2b62b0225ab2a0dc796f6b9bec7c046f5c64b1e6fcdf80c6a291a6f3->leave($__internal_b656f5ac2b62b0225ab2a0dc796f6b9bec7c046f5c64b1e6fcdf80c6a291a6f3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7427af94003622e31419be253eb6a2b85b2b18c2be76b055350a3224bd3302e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7427af94003622e31419be253eb6a2b85b2b18c2be76b055350a3224bd3302e->enter($__internal_e7427af94003622e31419be253eb6a2b85b2b18c2be76b055350a3224bd3302e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e7427af94003622e31419be253eb6a2b85b2b18c2be76b055350a3224bd3302e->leave($__internal_e7427af94003622e31419be253eb6a2b85b2b18c2be76b055350a3224bd3302e_prof);

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
