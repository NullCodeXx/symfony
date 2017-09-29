<?php

/* twig/form.html.twig */
class __TwigTemplate_7a77af31b4be07ee446f099a60867fc2a5a722438d67bdd41f1f988d3aef08db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eac828557729f98c06b0c59eb165b54863cae4d4b70b929bf52dcb675f481fc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eac828557729f98c06b0c59eb165b54863cae4d4b70b929bf52dcb675f481fc5->enter($__internal_eac828557729f98c06b0c59eb165b54863cae4d4b70b929bf52dcb675f481fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "twig/form.html.twig"));

        $__internal_3b2678bd1b89e670b33bb824d867b82d130f449ffc61cf4fbbcffd3bbbc23ca4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b2678bd1b89e670b33bb824d867b82d130f449ffc61cf4fbbcffd3bbbc23ca4->enter($__internal_3b2678bd1b89e670b33bb824d867b82d130f449ffc61cf4fbbcffd3bbbc23ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "twig/form.html.twig"));

        // line 1
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_eac828557729f98c06b0c59eb165b54863cae4d4b70b929bf52dcb675f481fc5->leave($__internal_eac828557729f98c06b0c59eb165b54863cae4d4b70b929bf52dcb675f481fc5_prof);

        
        $__internal_3b2678bd1b89e670b33bb824d867b82d130f449ffc61cf4fbbcffd3bbbc23ca4->leave($__internal_3b2678bd1b89e670b33bb824d867b82d130f449ffc61cf4fbbcffd3bbbc23ca4_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_894125c51192e6c778f22cdc8fb3149ea23cc93b7af5afc3c2468fbbb4473ce8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_894125c51192e6c778f22cdc8fb3149ea23cc93b7af5afc3c2468fbbb4473ce8->enter($__internal_894125c51192e6c778f22cdc8fb3149ea23cc93b7af5afc3c2468fbbb4473ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9a139906afa284ad9d48be713226b3e63e6053cf3adf52922c86e48e8535e644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a139906afa284ad9d48be713226b3e63e6053cf3adf52922c86e48e8535e644->enter($__internal_9a139906afa284ad9d48be713226b3e63e6053cf3adf52922c86e48e8535e644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 2
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <input type=\"submit\" value=\"Ajouter\" />
    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_9a139906afa284ad9d48be713226b3e63e6053cf3adf52922c86e48e8535e644->leave($__internal_9a139906afa284ad9d48be713226b3e63e6053cf3adf52922c86e48e8535e644_prof);

        
        $__internal_894125c51192e6c778f22cdc8fb3149ea23cc93b7af5afc3c2468fbbb4473ce8->leave($__internal_894125c51192e6c778f22cdc8fb3149ea23cc93b7af5afc3c2468fbbb4473ce8_prof);

    }

    public function getTemplateName()
    {
        return "twig/form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  54 => 5,  49 => 3,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block content %}
    {{ form_start(form) }}
    {{ form_widget(form) }}
    <input type=\"submit\" value=\"Ajouter\" />
    {{ form_end(form) }}
{% endblock %}", "twig/form.html.twig", "/Library/WebServer/Documents/solo/first-symfony/app/Resources/views/twig/form.html.twig");
    }
}
