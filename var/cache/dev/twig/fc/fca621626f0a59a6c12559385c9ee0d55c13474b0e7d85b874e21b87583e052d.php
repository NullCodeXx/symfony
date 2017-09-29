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
        $__internal_222fbaf31536257f8be6d55155dee6540e7d80a7e01a68e6d8286fcad67b76c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_222fbaf31536257f8be6d55155dee6540e7d80a7e01a68e6d8286fcad67b76c7->enter($__internal_222fbaf31536257f8be6d55155dee6540e7d80a7e01a68e6d8286fcad67b76c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":twig:articles.html.twig"));

        $__internal_84033f0a8d0e2d7aaa71af3056e06843d0b57368b83dd77d95e51458ea53b0af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84033f0a8d0e2d7aaa71af3056e06843d0b57368b83dd77d95e51458ea53b0af->enter($__internal_84033f0a8d0e2d7aaa71af3056e06843d0b57368b83dd77d95e51458ea53b0af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":twig:articles.html.twig"));

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
        
        $__internal_222fbaf31536257f8be6d55155dee6540e7d80a7e01a68e6d8286fcad67b76c7->leave($__internal_222fbaf31536257f8be6d55155dee6540e7d80a7e01a68e6d8286fcad67b76c7_prof);

        
        $__internal_84033f0a8d0e2d7aaa71af3056e06843d0b57368b83dd77d95e51458ea53b0af->leave($__internal_84033f0a8d0e2d7aaa71af3056e06843d0b57368b83dd77d95e51458ea53b0af_prof);

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
{% endfor %}", ":twig:articles.html.twig", "/Library/WebServer/Documents/solo/first-symfony/app/Resources/views/twig/articles.html.twig");
    }
}
