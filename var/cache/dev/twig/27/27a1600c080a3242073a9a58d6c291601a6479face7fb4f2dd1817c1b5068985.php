<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_04b7e365edc6d0270359b108e26ab84aed7e2c8714c81d85055c1b56c5fbfa66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e51ef1a1d67aa11331e230d67a6ee71edbcfe4d20e77effde7752fac3305bab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e51ef1a1d67aa11331e230d67a6ee71edbcfe4d20e77effde7752fac3305bab->enter($__internal_0e51ef1a1d67aa11331e230d67a6ee71edbcfe4d20e77effde7752fac3305bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_c2d282761603b4d9073e8589107a8f23aa72e418ca3a2825d6c3e954af45586a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2d282761603b4d9073e8589107a8f23aa72e418ca3a2825d6c3e954af45586a->enter($__internal_c2d282761603b4d9073e8589107a8f23aa72e418ca3a2825d6c3e954af45586a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e51ef1a1d67aa11331e230d67a6ee71edbcfe4d20e77effde7752fac3305bab->leave($__internal_0e51ef1a1d67aa11331e230d67a6ee71edbcfe4d20e77effde7752fac3305bab_prof);

        
        $__internal_c2d282761603b4d9073e8589107a8f23aa72e418ca3a2825d6c3e954af45586a->leave($__internal_c2d282761603b4d9073e8589107a8f23aa72e418ca3a2825d6c3e954af45586a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2027601473c0eaa73db3dd47c68d7dae27d1200e0f740e6049c46327addac6a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2027601473c0eaa73db3dd47c68d7dae27d1200e0f740e6049c46327addac6a9->enter($__internal_2027601473c0eaa73db3dd47c68d7dae27d1200e0f740e6049c46327addac6a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_34903e16354569aaee23e8739e95f41bd0d003958154e1e195e65c0ac7658c12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34903e16354569aaee23e8739e95f41bd0d003958154e1e195e65c0ac7658c12->enter($__internal_34903e16354569aaee23e8739e95f41bd0d003958154e1e195e65c0ac7658c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_34903e16354569aaee23e8739e95f41bd0d003958154e1e195e65c0ac7658c12->leave($__internal_34903e16354569aaee23e8739e95f41bd0d003958154e1e195e65c0ac7658c12_prof);

        
        $__internal_2027601473c0eaa73db3dd47c68d7dae27d1200e0f740e6049c46327addac6a9->leave($__internal_2027601473c0eaa73db3dd47c68d7dae27d1200e0f740e6049c46327addac6a9_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc0b7a036b9d1df99ad0e72397b6e62b2133be80aae6e1d8d6ad9121a4b15175 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc0b7a036b9d1df99ad0e72397b6e62b2133be80aae6e1d8d6ad9121a4b15175->enter($__internal_cc0b7a036b9d1df99ad0e72397b6e62b2133be80aae6e1d8d6ad9121a4b15175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ebe1427592933dc6cfec7f1c86a1cce7204b9907620530880da51b28ccc8deb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebe1427592933dc6cfec7f1c86a1cce7204b9907620530880da51b28ccc8deb2->enter($__internal_ebe1427592933dc6cfec7f1c86a1cce7204b9907620530880da51b28ccc8deb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_ebe1427592933dc6cfec7f1c86a1cce7204b9907620530880da51b28ccc8deb2->leave($__internal_ebe1427592933dc6cfec7f1c86a1cce7204b9907620530880da51b28ccc8deb2_prof);

        
        $__internal_cc0b7a036b9d1df99ad0e72397b6e62b2133be80aae6e1d8d6ad9121a4b15175->leave($__internal_cc0b7a036b9d1df99ad0e72397b6e62b2133be80aae6e1d8d6ad9121a4b15175_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/Library/WebServer/Documents/solo/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
