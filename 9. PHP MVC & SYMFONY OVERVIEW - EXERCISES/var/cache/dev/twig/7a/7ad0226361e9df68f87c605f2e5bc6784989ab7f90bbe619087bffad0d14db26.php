<?php

/* form/fields.html.twig */
class __TwigTemplate_ea3a3d3b4aecf41bff27e126b2fbdf0ca58d2b0c0d65e8698162b384be172128 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'date_time_picker_widget' => array($this, 'block_date_time_picker_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e090b4a57053667a002f3ffccf5fe6227e6000d76bf7e54680cd9834bbb46281 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e090b4a57053667a002f3ffccf5fe6227e6000d76bf7e54680cd9834bbb46281->enter($__internal_e090b4a57053667a002f3ffccf5fe6227e6000d76bf7e54680cd9834bbb46281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        // line 9
        echo "
";
        // line 10
        $this->displayBlock('date_time_picker_widget', $context, $blocks);
        
        $__internal_e090b4a57053667a002f3ffccf5fe6227e6000d76bf7e54680cd9834bbb46281->leave($__internal_e090b4a57053667a002f3ffccf5fe6227e6000d76bf7e54680cd9834bbb46281_prof);

    }

    public function block_date_time_picker_widget($context, array $blocks = array())
    {
        $__internal_89ee58cc202cd6f1e61995fec21d6e5f77a297719e0b33d72aae9a83daa937f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89ee58cc202cd6f1e61995fec21d6e5f77a297719e0b33d72aae9a83daa937f2->enter($__internal_89ee58cc202cd6f1e61995fec21d6e5f77a297719e0b33d72aae9a83daa937f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_time_picker_widget"));

        // line 11
        echo "    ";
        ob_start();
        // line 12
        echo "        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            ";
        // line 13
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
            ";
        // line 15
        echo "                ";
        // line 16
        echo "            ";
        // line 17
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_89ee58cc202cd6f1e61995fec21d6e5f77a297719e0b33d72aae9a83daa937f2->leave($__internal_89ee58cc202cd6f1e61995fec21d6e5f77a297719e0b33d72aae9a83daa937f2_prof);

    }

    public function getTemplateName()
    {
        return "form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  50 => 16,  48 => 15,  44 => 13,  41 => 12,  38 => 11,  26 => 10,  23 => 9,);
    }

    public function getSource()
    {
        return "{#
   Each field type is rendered by a template fragment, which is determined
   by the name of your form type class (DateTimePickerType -> date_time_picker)
   and the suffix \"_widget\". This can be controlled by overriding getBlockPrefix()
   in DateTimePickerType.

   See http://symfony.com/doc/current/cookbook/form/create_custom_field_type.html#creating-a-template-for-the-field
#}

{% block date_time_picker_widget %}
    {% spaceless %}
        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            {{ block('datetime_widget') }}
            {#<span class=\"input-group-addon\">#}
                {#<span class=\"fa fa-calendar\" aria-hidden=\"true\"></span>#}
            {#</span>#}
        </div>
    {% endspaceless %}
{% endblock %}
";
    }
}
