<?php

/* :default:blog.html.twig */
class __TwigTemplate_80e145f216d16b23ff3952be1fd9ad0f0c2edcdd5fdb5161518d2cb49f37c4ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":twig:layout.html.twig", ":default:blog.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":twig:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed38d887f21e513784881401b38f4f7bfecefb43aa11f747b101070f040dc357 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed38d887f21e513784881401b38f4f7bfecefb43aa11f747b101070f040dc357->enter($__internal_ed38d887f21e513784881401b38f4f7bfecefb43aa11f747b101070f040dc357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:blog.html.twig"));

        $__internal_523ce118e948bd330289b295bea22f5c0800ea4db0fcb97e22157aa33333d730 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_523ce118e948bd330289b295bea22f5c0800ea4db0fcb97e22157aa33333d730->enter($__internal_523ce118e948bd330289b295bea22f5c0800ea4db0fcb97e22157aa33333d730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:blog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed38d887f21e513784881401b38f4f7bfecefb43aa11f747b101070f040dc357->leave($__internal_ed38d887f21e513784881401b38f4f7bfecefb43aa11f747b101070f040dc357_prof);

        
        $__internal_523ce118e948bd330289b295bea22f5c0800ea4db0fcb97e22157aa33333d730->leave($__internal_523ce118e948bd330289b295bea22f5c0800ea4db0fcb97e22157aa33333d730_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_39e6c1b7c5547172052bb7c9fee8398b8c88aa136da84bec6ad42261488b6234 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39e6c1b7c5547172052bb7c9fee8398b8c88aa136da84bec6ad42261488b6234->enter($__internal_39e6c1b7c5547172052bb7c9fee8398b8c88aa136da84bec6ad42261488b6234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ed4de4267de4329d21fd4c172c68334cdf792baa80af825ad6e3eb5e594d74ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed4de4267de4329d21fd4c172c68334cdf792baa80af825ad6e3eb5e594d74ea->enter($__internal_ed4de4267de4329d21fd4c172c68334cdf792baa80af825ad6e3eb5e594d74ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    \"Voici l'article ";
        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        echo ", de l'année ";
        echo twig_escape_filter($this->env, ($context["year"] ?? $this->getContext($context, "year")), "html", null, true);
        echo ", en langue ";
        echo twig_escape_filter($this->env, ($context["_local"] ?? $this->getContext($context, "_local")), "html", null, true);
        echo "\".
";
        
        $__internal_ed4de4267de4329d21fd4c172c68334cdf792baa80af825ad6e3eb5e594d74ea->leave($__internal_ed4de4267de4329d21fd4c172c68334cdf792baa80af825ad6e3eb5e594d74ea_prof);

        
        $__internal_39e6c1b7c5547172052bb7c9fee8398b8c88aa136da84bec6ad42261488b6234->leave($__internal_39e6c1b7c5547172052bb7c9fee8398b8c88aa136da84bec6ad42261488b6234_prof);

    }

    public function getTemplateName()
    {
        return ":default:blog.html.twig";
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
        return new Twig_Source("{% extends \":twig:layout.html.twig\" %}

{% block body %}
    \"Voici l'article {{ title }}, de l'année {{ year }}, en langue {{ _local }}\".
{% endblock %}", ":default:blog.html.twig", "/Library/WebServer/Documents/solo/first-symfony/app/Resources/views/default/blog.html.twig");
    }
}
