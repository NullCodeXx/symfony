<?php

/* :twig:articles.html.twig */
class __TwigTemplate_a53a519685da6a973879fffdd20057a4bf03fa662bc3c2f69ea63a1dd6dab7c6 extends Twig_Template
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
        $__internal_a5eca964b62523877cecea289e855b28665cdeae6d54ed4b51a6067069411884 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5eca964b62523877cecea289e855b28665cdeae6d54ed4b51a6067069411884->enter($__internal_a5eca964b62523877cecea289e855b28665cdeae6d54ed4b51a6067069411884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":twig:articles.html.twig"));

        $__internal_d28977a2d773711778590e0d16f404d9013188eb10250b0d590b593c7e0a324a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d28977a2d773711778590e0d16f404d9013188eb10250b0d590b593c7e0a324a->enter($__internal_d28977a2d773711778590e0d16f404d9013188eb10250b0d590b593c7e0a324a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":twig:articles.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "
    ";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "content", array()), "html", null, true);
            echo "
    ";
            // line 4
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "createdAt", array()), "d-m-Y"), "html", null, true);
            echo "
    ";
            // line 5
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "updatedAt", array()), "d-m-Y"), "html", null, true);
            echo "
    ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "isEnabled", array()), "html", null, true);
            echo "
    ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "nbLike", array()), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_a5eca964b62523877cecea289e855b28665cdeae6d54ed4b51a6067069411884->leave($__internal_a5eca964b62523877cecea289e855b28665cdeae6d54ed4b51a6067069411884_prof);

        
        $__internal_d28977a2d773711778590e0d16f404d9013188eb10250b0d590b593c7e0a324a->leave($__internal_d28977a2d773711778590e0d16f404d9013188eb10250b0d590b593c7e0a324a_prof);

    }

    public function getTemplateName()
    {
        return ":twig:articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 7,  46 => 6,  42 => 5,  38 => 4,  34 => 3,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for article in articles %}
    {{ article.title }}
    {{ article.content }}
    {{ article.createdAt|date('d-m-Y') }}
    {{ article.updatedAt|date('d-m-Y') }}
    {{ article.isEnabled }}
    {{ article.nbLike }}
{% endfor %}", ":twig:articles.html.twig", "/Library/WebServer/Documents/solo/symfony/app/Resources/views/twig/articles.html.twig");
    }
}
