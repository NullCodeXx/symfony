<?php

/* article/new.html.twig */
class __TwigTemplate_c0ad71e24b54ae091b9e75fc16f8c10cf22cc20914377c7ad9e4949a9c77b95b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_026df927f247bc18b6527542af540079bab8087530b3409fdd4def9ae1605036 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_026df927f247bc18b6527542af540079bab8087530b3409fdd4def9ae1605036->enter($__internal_026df927f247bc18b6527542af540079bab8087530b3409fdd4def9ae1605036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/new.html.twig"));

        $__internal_98dd667a8b93c557443b5461a5194ced631178f7564ca94aacd79baba759e91a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98dd667a8b93c557443b5461a5194ced631178f7564ca94aacd79baba759e91a->enter($__internal_98dd667a8b93c557443b5461a5194ced631178f7564ca94aacd79baba759e91a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_026df927f247bc18b6527542af540079bab8087530b3409fdd4def9ae1605036->leave($__internal_026df927f247bc18b6527542af540079bab8087530b3409fdd4def9ae1605036_prof);

        
        $__internal_98dd667a8b93c557443b5461a5194ced631178f7564ca94aacd79baba759e91a->leave($__internal_98dd667a8b93c557443b5461a5194ced631178f7564ca94aacd79baba759e91a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3f92476174f080bf3e7f735449bed798075c5bd52f164b2470916b80fa20db0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3f92476174f080bf3e7f735449bed798075c5bd52f164b2470916b80fa20db0->enter($__internal_b3f92476174f080bf3e7f735449bed798075c5bd52f164b2470916b80fa20db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_763a3b1592684783faebca33abb53576d4e28ff4b2eb3b55e4d6d797fee194e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_763a3b1592684783faebca33abb53576d4e28ff4b2eb3b55e4d6d797fee194e7->enter($__internal_763a3b1592684783faebca33abb53576d4e28ff4b2eb3b55e4d6d797fee194e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Article creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new-entity_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_763a3b1592684783faebca33abb53576d4e28ff4b2eb3b55e4d6d797fee194e7->leave($__internal_763a3b1592684783faebca33abb53576d4e28ff4b2eb3b55e4d6d797fee194e7_prof);

        
        $__internal_b3f92476174f080bf3e7f735449bed798075c5bd52f164b2470916b80fa20db0->leave($__internal_b3f92476174f080bf3e7f735449bed798075c5bd52f164b2470916b80fa20db0_prof);

    }

    public function getTemplateName()
    {
        return "article/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Article creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('new-entity_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "article/new.html.twig", "/Library/WebServer/Documents/solo/symfony/app/Resources/views/article/new.html.twig");
    }
}
