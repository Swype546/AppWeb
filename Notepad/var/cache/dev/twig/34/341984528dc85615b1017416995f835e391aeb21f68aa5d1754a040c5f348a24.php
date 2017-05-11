<?php

/* NotepadBundle:Pages:notelist.html.twig */
class __TwigTemplate_b342f8e1b4aabf1bf74725acf78e4d5cdb994f4110b13222f16c6ea00f719dea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NotepadBundle:pages:layout.html.twig", "NotepadBundle:Pages:notelist.html.twig", 1);
        $this->blocks = array(
            'block_content' => array($this, 'block_block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NotepadBundle:pages:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_920f9c01ca81b1132b83200d31127d7473a84452653482d073676650adaf1c23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_920f9c01ca81b1132b83200d31127d7473a84452653482d073676650adaf1c23->enter($__internal_920f9c01ca81b1132b83200d31127d7473a84452653482d073676650adaf1c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:Pages:notelist.html.twig"));

        $__internal_d8408f1f6d1bb62994e6f5bb660d526b33854b21c76a2711728e4b8a2466978e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8408f1f6d1bb62994e6f5bb660d526b33854b21c76a2711728e4b8a2466978e->enter($__internal_d8408f1f6d1bb62994e6f5bb660d526b33854b21c76a2711728e4b8a2466978e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:Pages:notelist.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_920f9c01ca81b1132b83200d31127d7473a84452653482d073676650adaf1c23->leave($__internal_920f9c01ca81b1132b83200d31127d7473a84452653482d073676650adaf1c23_prof);

        
        $__internal_d8408f1f6d1bb62994e6f5bb660d526b33854b21c76a2711728e4b8a2466978e->leave($__internal_d8408f1f6d1bb62994e6f5bb660d526b33854b21c76a2711728e4b8a2466978e_prof);

    }

    // line 3
    public function block_block_content($context, array $blocks = array())
    {
        $__internal_2d1ae49f9d9ea36fb30c24c5dee93a2c70ace914b46fb3d73c9a500f0bfd4b3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d1ae49f9d9ea36fb30c24c5dee93a2c70ace914b46fb3d73c9a500f0bfd4b3b->enter($__internal_2d1ae49f9d9ea36fb30c24c5dee93a2c70ace914b46fb3d73c9a500f0bfd4b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_content"));

        $__internal_0585c4e571f60ae092b3768886c5a3060bd3eed3af023728c451ca70b5880ebc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0585c4e571f60ae092b3768886c5a3060bd3eed3af023728c451ca70b5880ebc->enter($__internal_0585c4e571f60ae092b3768886c5a3060bd3eed3af023728c451ca70b5880ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_content"));

        // line 4
        echo "\t<!-- Main component for a primary marketing message or call to action -->
\t
\t<table style=\"width:100%\">
\t\t<tr>
\t\t\t<td><h1>Note list</h1></td>
\t\t\t<td>
\t\t\t\t<!--<div class=\"pull-right\"><input type=\"text\" class=\"form-control\" id=\"searchBar\" placeholder=\"search\"></div>-->
\t\t\t\t";
        // line 11
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 12
        echo "\t\t\t\t";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t\t\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t\t\t";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t
\t\t\t</td>
\t\t</tr>
\t</table>
\t
\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notes"]) ? $context["notes"] : $this->getContext($context, "notes")));
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 21
            echo "\t\t<div class=\"panel panel-info\">\t
\t\t\t<div class=\"panel-heading\">
\t\t\t\t";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["note"], "title", array()));
            echo "
\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t<i>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "category", array()), "label", array()));
            echo "</i>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"panel-body\">
\t\t\t\t";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["note"], "content", array()));
            echo "
\t\t\t</div>
\t\t\t<div class=\"panel-footer\">
\t\t\t\t<div class=\"btn btn-clear\">";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["note"], "date", array()), "d-m-Y"), "html", null, true);
            echo "</div>
\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t<a role=\"button\" class=\"btn btn-success\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editnote", array("id" => $this->getAttribute($context["note"], "id", array()))), "html", null, true);
            echo "\">Edit Note</a>
\t\t\t\t\t<a role=\"button\" class=\"btn btn-danger\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deletenote", array("id" => $this->getAttribute($context["note"], "id", array()))), "html", null, true);
            echo "\">Delete Note</a>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div>
\t\t</div>\t
\t\t
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
";
        
        $__internal_0585c4e571f60ae092b3768886c5a3060bd3eed3af023728c451ca70b5880ebc->leave($__internal_0585c4e571f60ae092b3768886c5a3060bd3eed3af023728c451ca70b5880ebc_prof);

        
        $__internal_2d1ae49f9d9ea36fb30c24c5dee93a2c70ace914b46fb3d73c9a500f0bfd4b3b->leave($__internal_2d1ae49f9d9ea36fb30c24c5dee93a2c70ace914b46fb3d73c9a500f0bfd4b3b_prof);

    }

    public function getTemplateName()
    {
        return "NotepadBundle:Pages:notelist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 44,  114 => 36,  110 => 35,  105 => 33,  99 => 30,  91 => 25,  86 => 23,  82 => 21,  78 => 20,  69 => 14,  65 => 13,  60 => 12,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%extends 'NotepadBundle:pages:layout.html.twig'%}

{%block block_content%}
\t<!-- Main component for a primary marketing message or call to action -->
\t
\t<table style=\"width:100%\">
\t\t<tr>
\t\t\t<td><h1>Note list</h1></td>
\t\t\t<td>
\t\t\t\t<!--<div class=\"pull-right\"><input type=\"text\" class=\"form-control\" id=\"searchBar\" placeholder=\"search\"></div>-->
\t\t\t\t{%form_theme form 'bootstrap_3_layout.html.twig'%}
\t\t\t\t{{form_start(form)}}
\t\t\t\t\t{{form_widget(form)}}
\t\t\t\t{{form_end(form)}}
\t\t\t
\t\t\t</td>
\t\t</tr>
\t</table>
\t
\t{%for note in notes%}
\t\t<div class=\"panel panel-info\">\t
\t\t\t<div class=\"panel-heading\">
\t\t\t\t{{note.title|e}}
\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t<i>{{note.category.label|e}}</i>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"panel-body\">
\t\t\t\t{{note.content|e}}
\t\t\t</div>
\t\t\t<div class=\"panel-footer\">
\t\t\t\t<div class=\"btn btn-clear\">{{note.date|date('d-m-Y')}}</div>
\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t<a role=\"button\" class=\"btn btn-success\" href=\"{{path('editnote', {'id':note.id})}}\">Edit Note</a>
\t\t\t\t\t<a role=\"button\" class=\"btn btn-danger\" href=\"{{path('deletenote', {'id':note.id})}}\">Delete Note</a>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div>
\t\t</div>\t
\t\t
\t{% endfor %}

{%endblock%}
", "NotepadBundle:Pages:notelist.html.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\src\\NotepadBundle/Resources/views/Pages/notelist.html.twig");
    }
}
