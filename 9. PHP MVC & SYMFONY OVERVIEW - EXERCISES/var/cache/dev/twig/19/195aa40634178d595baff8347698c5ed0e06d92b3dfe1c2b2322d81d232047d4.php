<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_aab2f395327c558da5fea2ffb05983ddfcad5c8506dcdcc44b041e83442407e1 extends Twig_Template
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
        $__internal_31af07cda20321fb2cd736bda6e8620308cc643a01d357819cf19a1827ecbd4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31af07cda20321fb2cd736bda6e8620308cc643a01d357819cf19a1827ecbd4f->enter($__internal_31af07cda20321fb2cd736bda6e8620308cc643a01d357819cf19a1827ecbd4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31af07cda20321fb2cd736bda6e8620308cc643a01d357819cf19a1827ecbd4f->leave($__internal_31af07cda20321fb2cd736bda6e8620308cc643a01d357819cf19a1827ecbd4f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b4c43f26b04cc391012b5c9b4e1315c4fdecdea3857d60005f4d25ad5189cb1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4c43f26b04cc391012b5c9b4e1315c4fdecdea3857d60005f4d25ad5189cb1c->enter($__internal_b4c43f26b04cc391012b5c9b4e1315c4fdecdea3857d60005f4d25ad5189cb1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b4c43f26b04cc391012b5c9b4e1315c4fdecdea3857d60005f4d25ad5189cb1c->leave($__internal_b4c43f26b04cc391012b5c9b4e1315c4fdecdea3857d60005f4d25ad5189cb1c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_359c71720879e3701889425a48edacdc0252bbcecf16d35717573b6f185703ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_359c71720879e3701889425a48edacdc0252bbcecf16d35717573b6f185703ca->enter($__internal_359c71720879e3701889425a48edacdc0252bbcecf16d35717573b6f185703ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_359c71720879e3701889425a48edacdc0252bbcecf16d35717573b6f185703ca->leave($__internal_359c71720879e3701889425a48edacdc0252bbcecf16d35717573b6f185703ca_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_925916371fba3970aa3d7773057b2d4421a38eba6df29acb5e6f06d30ce4fac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_925916371fba3970aa3d7773057b2d4421a38eba6df29acb5e6f06d30ce4fac1->enter($__internal_925916371fba3970aa3d7773057b2d4421a38eba6df29acb5e6f06d30ce4fac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_925916371fba3970aa3d7773057b2d4421a38eba6df29acb5e6f06d30ce4fac1->leave($__internal_925916371fba3970aa3d7773057b2d4421a38eba6df29acb5e6f06d30ce4fac1_prof);

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
