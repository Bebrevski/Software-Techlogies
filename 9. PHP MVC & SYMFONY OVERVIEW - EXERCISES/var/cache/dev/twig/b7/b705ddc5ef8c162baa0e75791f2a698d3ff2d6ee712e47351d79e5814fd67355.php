<?php

/* base.html.twig */
class __TwigTemplate_8a5dce830c536b036db20d179d7f416667cc011310aa6eccf008408d26f8404e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_943c3c4eac56ece22c283a15cde83142ec17b456286d5763caf45466a02c87ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_943c3c4eac56ece22c283a15cde83142ec17b456286d5763caf45466a02c87ca->enter($__internal_943c3c4eac56ece22c283a15cde83142ec17b456286d5763caf45466a02c87ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 19
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 39
        echo "
<div class=\"container body-container\">
    ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "</div>


";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "
</body>
</html>
";
        
        $__internal_943c3c4eac56ece22c283a15cde83142ec17b456286d5763caf45466a02c87ca->leave($__internal_943c3c4eac56ece22c283a15cde83142ec17b456286d5763caf45466a02c87ca_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_95c3ef9cb57ec6ef5d972c5ab2ce986683c9ceb438a71bacd289a0431739e8f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95c3ef9cb57ec6ef5d972c5ab2ce986683c9ceb438a71bacd289a0431739e8f2->enter($__internal_95c3ef9cb57ec6ef5d972c5ab2ce986683c9ceb438a71bacd289a0431739e8f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Calculator";
        
        $__internal_95c3ef9cb57ec6ef5d972c5ab2ce986683c9ceb438a71bacd289a0431739e8f2->leave($__internal_95c3ef9cb57ec6ef5d972c5ab2ce986683c9ceb438a71bacd289a0431739e8f2_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3c6cc7630c0f7e5406a8b7bee1dc2fe0d41ab6b472ef20bd0d660ca3296f2087 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c6cc7630c0f7e5406a8b7bee1dc2fe0d41ab6b472ef20bd0d660ca3296f2087->enter($__internal_3c6cc7630c0f7e5406a8b7bee1dc2fe0d41ab6b472ef20bd0d660ca3296f2087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_3c6cc7630c0f7e5406a8b7bee1dc2fe0d41ab6b472ef20bd0d660ca3296f2087->leave($__internal_3c6cc7630c0f7e5406a8b7bee1dc2fe0d41ab6b472ef20bd0d660ca3296f2087_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_2f462b1ab31547108ac037987c920998a97e78a2969976329b3876f3fbae746a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f462b1ab31547108ac037987c920998a97e78a2969976329b3876f3fbae746a->enter($__internal_2f462b1ab31547108ac037987c920998a97e78a2969976329b3876f3fbae746a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_2f462b1ab31547108ac037987c920998a97e78a2969976329b3876f3fbae746a->leave($__internal_2f462b1ab31547108ac037987c920998a97e78a2969976329b3876f3fbae746a_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_7213e0a618e0b0754f8082115438b16d54acd6e6de18cdc4e37c317ffb701bd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7213e0a618e0b0754f8082115438b16d54acd6e6de18cdc4e37c317ffb701bd4->enter($__internal_7213e0a618e0b0754f8082115438b16d54acd6e6de18cdc4e37c317ffb701bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
";
        
        $__internal_7213e0a618e0b0754f8082115438b16d54acd6e6de18cdc4e37c317ffb701bd4->leave($__internal_7213e0a618e0b0754f8082115438b16d54acd6e6de18cdc4e37c317ffb701bd4_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8b725d145b26f22ee56d62ca4818cb2074a07814f1a3d89f068affa912612f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8b725d145b26f22ee56d62ca4818cb2074a07814f1a3d89f068affa912612f4->enter($__internal_a8b725d145b26f22ee56d62ca4818cb2074a07814f1a3d89f068affa912612f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 44
        $this->displayBlock('main', $context, $blocks);
        // line 45
        echo "            </div>
        </div>
    ";
        
        $__internal_a8b725d145b26f22ee56d62ca4818cb2074a07814f1a3d89f068affa912612f4->leave($__internal_a8b725d145b26f22ee56d62ca4818cb2074a07814f1a3d89f068affa912612f4_prof);

    }

    // line 44
    public function block_main($context, array $blocks = array())
    {
        $__internal_5d6dbd1f66d2cb358d12fd1868b040a2a20397051ecb239b6dfddab7c0f21d4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d6dbd1f66d2cb358d12fd1868b040a2a20397051ecb239b6dfddab7c0f21d4c->enter($__internal_5d6dbd1f66d2cb358d12fd1868b040a2a20397051ecb239b6dfddab7c0f21d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_5d6dbd1f66d2cb358d12fd1868b040a2a20397051ecb239b6dfddab7c0f21d4c->leave($__internal_5d6dbd1f66d2cb358d12fd1868b040a2a20397051ecb239b6dfddab7c0f21d4c_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fb84ee87a24bb90f0ece0c3044dc2a55337c27977218cc74ce7483a41c0e38d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb84ee87a24bb90f0ece0c3044dc2a55337c27977218cc74ce7483a41c0e38d5->enter($__internal_fb84ee87a24bb90f0ece0c3044dc2a55337c27977218cc74ce7483a41c0e38d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_fb84ee87a24bb90f0ece0c3044dc2a55337c27977218cc74ce7483a41c0e38d5->leave($__internal_fb84ee87a24bb90f0ece0c3044dc2a55337c27977218cc74ce7483a41c0e38d5_prof);

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
        return array (  205 => 55,  201 => 54,  197 => 53,  192 => 52,  186 => 51,  175 => 44,  166 => 45,  164 => 44,  160 => 42,  154 => 41,  134 => 26,  128 => 22,  122 => 21,  111 => 19,  102 => 14,  97 => 13,  91 => 12,  79 => 11,  69 => 57,  67 => 51,  62 => 48,  60 => 41,  56 => 39,  54 => 21,  49 => 19,  42 => 16,  40 => 12,  36 => 11,  29 => 6,);
    }

    public function getSource()
    {
        return "{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>{% block title %}Calculator{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">

{% block header %}
    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"{{ path('index') }}\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
{% endblock %}

<div class=\"container body-container\">
    {% block body %}
        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                {% block main %}{% endblock %}
            </div>
        </div>
    {% endblock %}
</div>


{% block javascripts %}
    <script src=\"{{ asset('js/jquery-2.2.4.min.js') }}\"></script>
    <script src=\"{{ asset('js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>
{% endblock %}

</body>
</html>
";
    }
}
