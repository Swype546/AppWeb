<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_4c29485ebf054618e595db3b3c05fc3314e583816b6bc6219d3d3abeae93511c extends Twig_Template
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
        $__internal_d5e320d224c58a647e7779dac1ed1d2d2a2f36af0b7b69f19bc9513df8a47a50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5e320d224c58a647e7779dac1ed1d2d2a2f36af0b7b69f19bc9513df8a47a50->enter($__internal_d5e320d224c58a647e7779dac1ed1d2d2a2f36af0b7b69f19bc9513df8a47a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_390fd54258b66e6a927161af7d69bfd8399a6e3d3e6ee2b24204e22d9257d5b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_390fd54258b66e6a927161af7d69bfd8399a6e3d3e6ee2b24204e22d9257d5b8->enter($__internal_390fd54258b66e6a927161af7d69bfd8399a6e3d3e6ee2b24204e22d9257d5b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_d5e320d224c58a647e7779dac1ed1d2d2a2f36af0b7b69f19bc9513df8a47a50->leave($__internal_d5e320d224c58a647e7779dac1ed1d2d2a2f36af0b7b69f19bc9513df8a47a50_prof);

        
        $__internal_390fd54258b66e6a927161af7d69bfd8399a6e3d3e6ee2b24204e22d9257d5b8->leave($__internal_390fd54258b66e6a927161af7d69bfd8399a6e3d3e6ee2b24204e22d9257d5b8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
