<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_779347b7c39b4c226556775de8f1fb5db340d55ea91caac5f58acfe52fd463b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_73cbb668b024367c11122d5360a6c038c3231e4634cf478e21f1fa699c33b774 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73cbb668b024367c11122d5360a6c038c3231e4634cf478e21f1fa699c33b774->enter($__internal_73cbb668b024367c11122d5360a6c038c3231e4634cf478e21f1fa699c33b774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_a801db5db6e37e3f492873735728bde51edf80a57fd12e142f4356c699ff1383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a801db5db6e37e3f492873735728bde51edf80a57fd12e142f4356c699ff1383->enter($__internal_a801db5db6e37e3f492873735728bde51edf80a57fd12e142f4356c699ff1383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_73cbb668b024367c11122d5360a6c038c3231e4634cf478e21f1fa699c33b774->leave($__internal_73cbb668b024367c11122d5360a6c038c3231e4634cf478e21f1fa699c33b774_prof);

        
        $__internal_a801db5db6e37e3f492873735728bde51edf80a57fd12e142f4356c699ff1383->leave($__internal_a801db5db6e37e3f492873735728bde51edf80a57fd12e142f4356c699ff1383_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
