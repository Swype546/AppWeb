<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_11ebcee873e77cf1a82c05c481743450d25729f7497f829dc4b3176696aba47b extends Twig_Template
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
        $__internal_254d8cdd1535a32d867ae7ed26bcf259de5de29978538b0847eb588fd41c1941 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_254d8cdd1535a32d867ae7ed26bcf259de5de29978538b0847eb588fd41c1941->enter($__internal_254d8cdd1535a32d867ae7ed26bcf259de5de29978538b0847eb588fd41c1941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_55018c4a7bf48683630427be62a20ae1aeb3f0a0a61d612de44f56e761492afe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55018c4a7bf48683630427be62a20ae1aeb3f0a0a61d612de44f56e761492afe->enter($__internal_55018c4a7bf48683630427be62a20ae1aeb3f0a0a61d612de44f56e761492afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_254d8cdd1535a32d867ae7ed26bcf259de5de29978538b0847eb588fd41c1941->leave($__internal_254d8cdd1535a32d867ae7ed26bcf259de5de29978538b0847eb588fd41c1941_prof);

        
        $__internal_55018c4a7bf48683630427be62a20ae1aeb3f0a0a61d612de44f56e761492afe->leave($__internal_55018c4a7bf48683630427be62a20ae1aeb3f0a0a61d612de44f56e761492afe_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fea43f14155fc3c521ae53925086d85bbd0ff821a9d7b7c81c4f37af3b09bfea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fea43f14155fc3c521ae53925086d85bbd0ff821a9d7b7c81c4f37af3b09bfea->enter($__internal_fea43f14155fc3c521ae53925086d85bbd0ff821a9d7b7c81c4f37af3b09bfea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e3305b4ddf4cd8d5fefa72f3cfe27e5504651f38bd49d62c743a0b3c9b547781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3305b4ddf4cd8d5fefa72f3cfe27e5504651f38bd49d62c743a0b3c9b547781->enter($__internal_e3305b4ddf4cd8d5fefa72f3cfe27e5504651f38bd49d62c743a0b3c9b547781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_e3305b4ddf4cd8d5fefa72f3cfe27e5504651f38bd49d62c743a0b3c9b547781->leave($__internal_e3305b4ddf4cd8d5fefa72f3cfe27e5504651f38bd49d62c743a0b3c9b547781_prof);

        
        $__internal_fea43f14155fc3c521ae53925086d85bbd0ff821a9d7b7c81c4f37af3b09bfea->leave($__internal_fea43f14155fc3c521ae53925086d85bbd0ff821a9d7b7c81c4f37af3b09bfea_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_12bdbd5866372aa2ebffe69aae9e9b7757eeb06f340889b6cb918cc3d7fcbd90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12bdbd5866372aa2ebffe69aae9e9b7757eeb06f340889b6cb918cc3d7fcbd90->enter($__internal_12bdbd5866372aa2ebffe69aae9e9b7757eeb06f340889b6cb918cc3d7fcbd90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_34f5a2f0e08b38032b0af7551f72e46ffa98618826d621d87b1a54247707a5f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34f5a2f0e08b38032b0af7551f72e46ffa98618826d621d87b1a54247707a5f0->enter($__internal_34f5a2f0e08b38032b0af7551f72e46ffa98618826d621d87b1a54247707a5f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_34f5a2f0e08b38032b0af7551f72e46ffa98618826d621d87b1a54247707a5f0->leave($__internal_34f5a2f0e08b38032b0af7551f72e46ffa98618826d621d87b1a54247707a5f0_prof);

        
        $__internal_12bdbd5866372aa2ebffe69aae9e9b7757eeb06f340889b6cb918cc3d7fcbd90->leave($__internal_12bdbd5866372aa2ebffe69aae9e9b7757eeb06f340889b6cb918cc3d7fcbd90_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f4232d9b5691a1f61954514d475acfd658c672561642b2d50df196243f76895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f4232d9b5691a1f61954514d475acfd658c672561642b2d50df196243f76895->enter($__internal_3f4232d9b5691a1f61954514d475acfd658c672561642b2d50df196243f76895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a0a92b6cb0a33d2700e04bbf780e7918b4c3be44c827ae041b08030b7e49603d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0a92b6cb0a33d2700e04bbf780e7918b4c3be44c827ae041b08030b7e49603d->enter($__internal_a0a92b6cb0a33d2700e04bbf780e7918b4c3be44c827ae041b08030b7e49603d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_a0a92b6cb0a33d2700e04bbf780e7918b4c3be44c827ae041b08030b7e49603d->leave($__internal_a0a92b6cb0a33d2700e04bbf780e7918b4c3be44c827ae041b08030b7e49603d_prof);

        
        $__internal_3f4232d9b5691a1f61954514d475acfd658c672561642b2d50df196243f76895->leave($__internal_3f4232d9b5691a1f61954514d475acfd658c672561642b2d50df196243f76895_prof);

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
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
