<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_6dde0ff9142e7dd9278a20750d2a479c6d207c473e073e290d7f59f8cd099dc1 extends Twig_Template
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
        $__internal_24ffcb3d101e43e081cdb2c2cd40b1c743164202143b3d26a43e22362dbf7fcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24ffcb3d101e43e081cdb2c2cd40b1c743164202143b3d26a43e22362dbf7fcb->enter($__internal_24ffcb3d101e43e081cdb2c2cd40b1c743164202143b3d26a43e22362dbf7fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_8a0b3152712729cc225d485bd227bbecabc7f726964528dd3d67d3f93ca2ec91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a0b3152712729cc225d485bd227bbecabc7f726964528dd3d67d3f93ca2ec91->enter($__internal_8a0b3152712729cc225d485bd227bbecabc7f726964528dd3d67d3f93ca2ec91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_24ffcb3d101e43e081cdb2c2cd40b1c743164202143b3d26a43e22362dbf7fcb->leave($__internal_24ffcb3d101e43e081cdb2c2cd40b1c743164202143b3d26a43e22362dbf7fcb_prof);

        
        $__internal_8a0b3152712729cc225d485bd227bbecabc7f726964528dd3d67d3f93ca2ec91->leave($__internal_8a0b3152712729cc225d485bd227bbecabc7f726964528dd3d67d3f93ca2ec91_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
