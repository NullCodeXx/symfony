<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ff745af4c9785908df5f50f3220a611a7a8150c8acb4b2d4fa58002236a15742 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_577121d294c4b65cbe8e05dfdcf679501edbd38e59ab4e3bcc1d4afd3482bcd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_577121d294c4b65cbe8e05dfdcf679501edbd38e59ab4e3bcc1d4afd3482bcd2->enter($__internal_577121d294c4b65cbe8e05dfdcf679501edbd38e59ab4e3bcc1d4afd3482bcd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_217a481617111064eddbfbd60ac1d4a0b05c1bfaa1547d24f901060062678d2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_217a481617111064eddbfbd60ac1d4a0b05c1bfaa1547d24f901060062678d2a->enter($__internal_217a481617111064eddbfbd60ac1d4a0b05c1bfaa1547d24f901060062678d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_577121d294c4b65cbe8e05dfdcf679501edbd38e59ab4e3bcc1d4afd3482bcd2->leave($__internal_577121d294c4b65cbe8e05dfdcf679501edbd38e59ab4e3bcc1d4afd3482bcd2_prof);

        
        $__internal_217a481617111064eddbfbd60ac1d4a0b05c1bfaa1547d24f901060062678d2a->leave($__internal_217a481617111064eddbfbd60ac1d4a0b05c1bfaa1547d24f901060062678d2a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2bd6a4ac874c209f472f1124a08061953d112a36fda7167e68712f29c16325ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bd6a4ac874c209f472f1124a08061953d112a36fda7167e68712f29c16325ef->enter($__internal_2bd6a4ac874c209f472f1124a08061953d112a36fda7167e68712f29c16325ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ad07d51a4d61a19a7f1fcbb288701cdf21820d1597372dadad62840364465905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad07d51a4d61a19a7f1fcbb288701cdf21820d1597372dadad62840364465905->enter($__internal_ad07d51a4d61a19a7f1fcbb288701cdf21820d1597372dadad62840364465905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ad07d51a4d61a19a7f1fcbb288701cdf21820d1597372dadad62840364465905->leave($__internal_ad07d51a4d61a19a7f1fcbb288701cdf21820d1597372dadad62840364465905_prof);

        
        $__internal_2bd6a4ac874c209f472f1124a08061953d112a36fda7167e68712f29c16325ef->leave($__internal_2bd6a4ac874c209f472f1124a08061953d112a36fda7167e68712f29c16325ef_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_de817023e3dec0c736b91789dee4d09bc788f28918f698bc42cd8e8cc88618ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de817023e3dec0c736b91789dee4d09bc788f28918f698bc42cd8e8cc88618ae->enter($__internal_de817023e3dec0c736b91789dee4d09bc788f28918f698bc42cd8e8cc88618ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_321cc99bc4e30f7c863bc15fc3e17c8d701961ceddff92f38ebefa1e22365687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_321cc99bc4e30f7c863bc15fc3e17c8d701961ceddff92f38ebefa1e22365687->enter($__internal_321cc99bc4e30f7c863bc15fc3e17c8d701961ceddff92f38ebefa1e22365687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_321cc99bc4e30f7c863bc15fc3e17c8d701961ceddff92f38ebefa1e22365687->leave($__internal_321cc99bc4e30f7c863bc15fc3e17c8d701961ceddff92f38ebefa1e22365687_prof);

        
        $__internal_de817023e3dec0c736b91789dee4d09bc788f28918f698bc42cd8e8cc88618ae->leave($__internal_de817023e3dec0c736b91789dee4d09bc788f28918f698bc42cd8e8cc88618ae_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e27ca7e513677c09dab6a0f4f94786aeb3af858a34fe865054c5e25bb8cbb519 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e27ca7e513677c09dab6a0f4f94786aeb3af858a34fe865054c5e25bb8cbb519->enter($__internal_e27ca7e513677c09dab6a0f4f94786aeb3af858a34fe865054c5e25bb8cbb519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c793af5cfef035754ec37ed158baba52ec3344a27301d1efa049670e2795e41c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c793af5cfef035754ec37ed158baba52ec3344a27301d1efa049670e2795e41c->enter($__internal_c793af5cfef035754ec37ed158baba52ec3344a27301d1efa049670e2795e41c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_c793af5cfef035754ec37ed158baba52ec3344a27301d1efa049670e2795e41c->leave($__internal_c793af5cfef035754ec37ed158baba52ec3344a27301d1efa049670e2795e41c_prof);

        
        $__internal_e27ca7e513677c09dab6a0f4f94786aeb3af858a34fe865054c5e25bb8cbb519->leave($__internal_e27ca7e513677c09dab6a0f4f94786aeb3af858a34fe865054c5e25bb8cbb519_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Library/WebServer/Documents/solo/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
