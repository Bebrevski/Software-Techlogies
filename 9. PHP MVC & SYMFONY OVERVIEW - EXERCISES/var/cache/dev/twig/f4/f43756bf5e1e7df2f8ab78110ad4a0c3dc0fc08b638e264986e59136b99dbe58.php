<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d39e84d79f83f63970122540e6a4bd5f9db1355d8c9099c01af23b3b6302d7e2 extends Twig_Template
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
        $__internal_0374e06ec8a35d9e1a00af7eff7c24a445c75fce1504250240f0d5888f5be075 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0374e06ec8a35d9e1a00af7eff7c24a445c75fce1504250240f0d5888f5be075->enter($__internal_0374e06ec8a35d9e1a00af7eff7c24a445c75fce1504250240f0d5888f5be075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0374e06ec8a35d9e1a00af7eff7c24a445c75fce1504250240f0d5888f5be075->leave($__internal_0374e06ec8a35d9e1a00af7eff7c24a445c75fce1504250240f0d5888f5be075_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_03c0ae72016bda8015918f048a65ecb2c74caa93d3e425cf52bc953af4a6b2ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03c0ae72016bda8015918f048a65ecb2c74caa93d3e425cf52bc953af4a6b2ac->enter($__internal_03c0ae72016bda8015918f048a65ecb2c74caa93d3e425cf52bc953af4a6b2ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_03c0ae72016bda8015918f048a65ecb2c74caa93d3e425cf52bc953af4a6b2ac->leave($__internal_03c0ae72016bda8015918f048a65ecb2c74caa93d3e425cf52bc953af4a6b2ac_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3d91d934ad740a35b4e869c3e399f6ba3cc4242e33a6828e7471333cae602084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d91d934ad740a35b4e869c3e399f6ba3cc4242e33a6828e7471333cae602084->enter($__internal_3d91d934ad740a35b4e869c3e399f6ba3cc4242e33a6828e7471333cae602084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3d91d934ad740a35b4e869c3e399f6ba3cc4242e33a6828e7471333cae602084->leave($__internal_3d91d934ad740a35b4e869c3e399f6ba3cc4242e33a6828e7471333cae602084_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f61ccc7e8f8b4963078dc3a4dae295d3c30b967034d7068d7f537722af3bd207 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f61ccc7e8f8b4963078dc3a4dae295d3c30b967034d7068d7f537722af3bd207->enter($__internal_f61ccc7e8f8b4963078dc3a4dae295d3c30b967034d7068d7f537722af3bd207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f61ccc7e8f8b4963078dc3a4dae295d3c30b967034d7068d7f537722af3bd207->leave($__internal_f61ccc7e8f8b4963078dc3a4dae295d3c30b967034d7068d7f537722af3bd207_prof);

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
