<?php

/* article/edit.html.twig */
class __TwigTemplate_c2f14c43d474587001bdd82e465998813585eb2f31ea836b62afd8af62fe9c9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/edit.html.twig", 1);
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
        $__internal_cea3605259f970f91c57334ace908b4a7241edbadc666fdecce136622fd914cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cea3605259f970f91c57334ace908b4a7241edbadc666fdecce136622fd914cd->enter($__internal_cea3605259f970f91c57334ace908b4a7241edbadc666fdecce136622fd914cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/edit.html.twig"));

        $__internal_e3da943cc91fc6e34f76d44e948f1f0350c54e7533ef166eb16369b33633e772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3da943cc91fc6e34f76d44e948f1f0350c54e7533ef166eb16369b33633e772->enter($__internal_e3da943cc91fc6e34f76d44e948f1f0350c54e7533ef166eb16369b33633e772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cea3605259f970f91c57334ace908b4a7241edbadc666fdecce136622fd914cd->leave($__internal_cea3605259f970f91c57334ace908b4a7241edbadc666fdecce136622fd914cd_prof);

        
        $__internal_e3da943cc91fc6e34f76d44e948f1f0350c54e7533ef166eb16369b33633e772->leave($__internal_e3da943cc91fc6e34f76d44e948f1f0350c54e7533ef166eb16369b33633e772_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a39a8aed0495fdeff761a7c28a494f0637240e9df69ead9cf6142e9092ce32cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a39a8aed0495fdeff761a7c28a494f0637240e9df69ead9cf6142e9092ce32cd->enter($__internal_a39a8aed0495fdeff761a7c28a494f0637240e9df69ead9cf6142e9092ce32cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eb5e85c698406c7adf86d6d37a1423fbe489df2494de182e7956e33219b08e54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb5e85c698406c7adf86d6d37a1423fbe489df2494de182e7956e33219b08e54->enter($__internal_eb5e85c698406c7adf86d6d37a1423fbe489df2494de182e7956e33219b08e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Article edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new-entity_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_eb5e85c698406c7adf86d6d37a1423fbe489df2494de182e7956e33219b08e54->leave($__internal_eb5e85c698406c7adf86d6d37a1423fbe489df2494de182e7956e33219b08e54_prof);

        
        $__internal_a39a8aed0495fdeff761a7c28a494f0637240e9df69ead9cf6142e9092ce32cd->leave($__internal_a39a8aed0495fdeff761a7c28a494f0637240e9df69ead9cf6142e9092ce32cd_prof);

    }

    public function getTemplateName()
    {
        return "article/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Article edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('new-entity_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "article/edit.html.twig", "/Library/WebServer/Documents/solo/symfony/app/Resources/views/article/edit.html.twig");
    }
}
