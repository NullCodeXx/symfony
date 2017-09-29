<?php

/* :default:string.html.twig */
class __TwigTemplate_2651acc9174148de9fe745dbc2d61194eee59c0269eff84428c9f8b6cf5a0b7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":default:string.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bbcdd53aa134383fc3460969fecf14cc5ad4c0c1008d7f48f9dcd3edcea2fb94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbcdd53aa134383fc3460969fecf14cc5ad4c0c1008d7f48f9dcd3edcea2fb94->enter($__internal_bbcdd53aa134383fc3460969fecf14cc5ad4c0c1008d7f48f9dcd3edcea2fb94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:string.html.twig"));

        $__internal_dab0a34f5a3f8ee82661a556a1c6225aa098595ee10870cc517a3fa2d12da180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dab0a34f5a3f8ee82661a556a1c6225aa098595ee10870cc517a3fa2d12da180->enter($__internal_dab0a34f5a3f8ee82661a556a1c6225aa098595ee10870cc517a3fa2d12da180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:string.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbcdd53aa134383fc3460969fecf14cc5ad4c0c1008d7f48f9dcd3edcea2fb94->leave($__internal_bbcdd53aa134383fc3460969fecf14cc5ad4c0c1008d7f48f9dcd3edcea2fb94_prof);

        
        $__internal_dab0a34f5a3f8ee82661a556a1c6225aa098595ee10870cc517a3fa2d12da180->leave($__internal_dab0a34f5a3f8ee82661a556a1c6225aa098595ee10870cc517a3fa2d12da180_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3dd0511c0b36b116370618cd779b8c79258061d5404ee0752edce2ef411f7900 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dd0511c0b36b116370618cd779b8c79258061d5404ee0752edce2ef411f7900->enter($__internal_3dd0511c0b36b116370618cd779b8c79258061d5404ee0752edce2ef411f7900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5d94e7b1bcf346ec5318481afc62e692f2d089ab7a26ba5de365d0b66082606f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d94e7b1bcf346ec5318481afc62e692f2d089ab7a26ba5de365d0b66082606f->enter($__internal_5d94e7b1bcf346ec5318481afc62e692f2d089ab7a26ba5de365d0b66082606f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, ($context["str"] ?? $this->getContext($context, "str")), "html", null, true);
        echo "
";
        
        $__internal_5d94e7b1bcf346ec5318481afc62e692f2d089ab7a26ba5de365d0b66082606f->leave($__internal_5d94e7b1bcf346ec5318481afc62e692f2d089ab7a26ba5de365d0b66082606f_prof);

        
        $__internal_3dd0511c0b36b116370618cd779b8c79258061d5404ee0752edce2ef411f7900->leave($__internal_3dd0511c0b36b116370618cd779b8c79258061d5404ee0752edce2ef411f7900_prof);

    }

    public function getTemplateName()
    {
        return ":default:string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body %}
    {{ str }}
{% endblock %}

", ":default:string.html.twig", "/Library/WebServer/Documents/solo/first-symfony/app/Resources/views/default/string.html.twig");
    }
}
