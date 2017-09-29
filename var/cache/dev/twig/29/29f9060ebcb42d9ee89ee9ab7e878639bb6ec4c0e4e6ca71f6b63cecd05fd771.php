<?php

/* default/display.html.twig */
class __TwigTemplate_790a907d2e0c95c7f910a06d789df94dff02e47587729411f295ae0fd341dc94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":twig:layout.html.twig", "default/display.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":twig:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_178423db8b4a34c152959da2cbe85ff3c5380476bd0a7f345f1d7505f1d075f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_178423db8b4a34c152959da2cbe85ff3c5380476bd0a7f345f1d7505f1d075f3->enter($__internal_178423db8b4a34c152959da2cbe85ff3c5380476bd0a7f345f1d7505f1d075f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/display.html.twig"));

        $__internal_ccf59af0e6b2e2c9d8c0160033dcedfe7ec01b87277ea1c89e5593c2d8980398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccf59af0e6b2e2c9d8c0160033dcedfe7ec01b87277ea1c89e5593c2d8980398->enter($__internal_ccf59af0e6b2e2c9d8c0160033dcedfe7ec01b87277ea1c89e5593c2d8980398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/display.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_178423db8b4a34c152959da2cbe85ff3c5380476bd0a7f345f1d7505f1d075f3->leave($__internal_178423db8b4a34c152959da2cbe85ff3c5380476bd0a7f345f1d7505f1d075f3_prof);

        
        $__internal_ccf59af0e6b2e2c9d8c0160033dcedfe7ec01b87277ea1c89e5593c2d8980398->leave($__internal_ccf59af0e6b2e2c9d8c0160033dcedfe7ec01b87277ea1c89e5593c2d8980398_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_e9546ce99b6530b9c9d6d48ee32d6da0451ac94886706c91982ed72083d82aa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9546ce99b6530b9c9d6d48ee32d6da0451ac94886706c91982ed72083d82aa8->enter($__internal_e9546ce99b6530b9c9d6d48ee32d6da0451ac94886706c91982ed72083d82aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e33c5909cf6c927840ca63971950c72cc328b76a49d539692ac538ea464b3942 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e33c5909cf6c927840ca63971950c72cc328b76a49d539692ac538ea464b3942->enter($__internal_e33c5909cf6c927840ca63971950c72cc328b76a49d539692ac538ea464b3942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
    ";
        // line 4
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "
    ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "content", array()), "html", null, true);
        echo "
    ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "createdAt", array()), "d-m-Y"), "html", null, true);
        echo "
    ";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "updatedAt", array()), "d-m-Y"), "html", null, true);
        echo "
    ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "isEnabled", array()), "html", null, true);
        echo "
    ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "nbLike", array()), "html", null, true);
        echo "

";
        
        $__internal_e33c5909cf6c927840ca63971950c72cc328b76a49d539692ac538ea464b3942->leave($__internal_e33c5909cf6c927840ca63971950c72cc328b76a49d539692ac538ea464b3942_prof);

        
        $__internal_e9546ce99b6530b9c9d6d48ee32d6da0451ac94886706c91982ed72083d82aa8->leave($__internal_e9546ce99b6530b9c9d6d48ee32d6da0451ac94886706c91982ed72083d82aa8_prof);

    }

    public function getTemplateName()
    {
        return "default/display.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 12,  80 => 11,  76 => 10,  72 => 9,  68 => 8,  64 => 7,  60 => 6,  56 => 5,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":twig:layout.html.twig\" %}
{% block content %}

    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
    {{ article.title }}
    {{ article.content }}
    {{ article.createdAt|date('d-m-Y') }}
    {{ article.updatedAt|date('d-m-Y') }}
    {{ article.isEnabled }}
    {{ article.nbLike }}

{% endblock %}

", "default/display.html.twig", "/Library/WebServer/Documents/solo/first-symfony/app/Resources/views/default/display.html.twig");
    }
}
