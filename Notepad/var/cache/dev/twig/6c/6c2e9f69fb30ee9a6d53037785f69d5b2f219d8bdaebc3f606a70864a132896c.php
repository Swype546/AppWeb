<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_b8dc26baa3d5e19e1eebab3937fcabfb380e8db4f5deb3475451b08f5bbbf6a0 extends Twig_Template
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
        $__internal_1cf8e6462ceba4aaa950254c92010774380802773fc4f9b9f089bfd892748963 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cf8e6462ceba4aaa950254c92010774380802773fc4f9b9f089bfd892748963->enter($__internal_1cf8e6462ceba4aaa950254c92010774380802773fc4f9b9f089bfd892748963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_8847b0269930d21b622eb908e54c85b055ea2b2f2bb8e47019678fd0f6ac7821 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8847b0269930d21b622eb908e54c85b055ea2b2f2bb8e47019678fd0f6ac7821->enter($__internal_8847b0269930d21b622eb908e54c85b055ea2b2f2bb8e47019678fd0f6ac7821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_1cf8e6462ceba4aaa950254c92010774380802773fc4f9b9f089bfd892748963->leave($__internal_1cf8e6462ceba4aaa950254c92010774380802773fc4f9b9f089bfd892748963_prof);

        
        $__internal_8847b0269930d21b622eb908e54c85b055ea2b2f2bb8e47019678fd0f6ac7821->leave($__internal_8847b0269930d21b622eb908e54c85b055ea2b2f2bb8e47019678fd0f6ac7821_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
