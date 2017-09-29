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
        $__internal_be8222cc5362605360383ce68446fb24f26cea599a70b57c25617e9df5fef458 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be8222cc5362605360383ce68446fb24f26cea599a70b57c25617e9df5fef458->enter($__internal_be8222cc5362605360383ce68446fb24f26cea599a70b57c25617e9df5fef458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f3d37b294c6a2d440611f4acbbb4e603b2badeeef2874743f9d23df02d46f22c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3d37b294c6a2d440611f4acbbb4e603b2badeeef2874743f9d23df02d46f22c->enter($__internal_f3d37b294c6a2d440611f4acbbb4e603b2badeeef2874743f9d23df02d46f22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be8222cc5362605360383ce68446fb24f26cea599a70b57c25617e9df5fef458->leave($__internal_be8222cc5362605360383ce68446fb24f26cea599a70b57c25617e9df5fef458_prof);

        
        $__internal_f3d37b294c6a2d440611f4acbbb4e603b2badeeef2874743f9d23df02d46f22c->leave($__internal_f3d37b294c6a2d440611f4acbbb4e603b2badeeef2874743f9d23df02d46f22c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aa745d7b6cc7758bef88e064e5aa46d41c5e050b340b411329dbdfa41670dd80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa745d7b6cc7758bef88e064e5aa46d41c5e050b340b411329dbdfa41670dd80->enter($__internal_aa745d7b6cc7758bef88e064e5aa46d41c5e050b340b411329dbdfa41670dd80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3f25bbc56ae149581e593e2e155cd716595a4d28bd353e82c707b92fcb535750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f25bbc56ae149581e593e2e155cd716595a4d28bd353e82c707b92fcb535750->enter($__internal_3f25bbc56ae149581e593e2e155cd716595a4d28bd353e82c707b92fcb535750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3f25bbc56ae149581e593e2e155cd716595a4d28bd353e82c707b92fcb535750->leave($__internal_3f25bbc56ae149581e593e2e155cd716595a4d28bd353e82c707b92fcb535750_prof);

        
        $__internal_aa745d7b6cc7758bef88e064e5aa46d41c5e050b340b411329dbdfa41670dd80->leave($__internal_aa745d7b6cc7758bef88e064e5aa46d41c5e050b340b411329dbdfa41670dd80_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ec788617fd02ff1c7f8805de2608c6081e65fcf6180256df7d7462e6092b1521 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec788617fd02ff1c7f8805de2608c6081e65fcf6180256df7d7462e6092b1521->enter($__internal_ec788617fd02ff1c7f8805de2608c6081e65fcf6180256df7d7462e6092b1521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2b73351394f118f53b1f084359118e8f18733fcb7dac51a2bac9161747003776 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b73351394f118f53b1f084359118e8f18733fcb7dac51a2bac9161747003776->enter($__internal_2b73351394f118f53b1f084359118e8f18733fcb7dac51a2bac9161747003776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_2b73351394f118f53b1f084359118e8f18733fcb7dac51a2bac9161747003776->leave($__internal_2b73351394f118f53b1f084359118e8f18733fcb7dac51a2bac9161747003776_prof);

        
        $__internal_ec788617fd02ff1c7f8805de2608c6081e65fcf6180256df7d7462e6092b1521->leave($__internal_ec788617fd02ff1c7f8805de2608c6081e65fcf6180256df7d7462e6092b1521_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0f350ec574c76054e323d218c554a4d18cfb0dde25361400e235e5f943bae01e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f350ec574c76054e323d218c554a4d18cfb0dde25361400e235e5f943bae01e->enter($__internal_0f350ec574c76054e323d218c554a4d18cfb0dde25361400e235e5f943bae01e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a0af9cb612947d53f4b4674edb9cdf0a5aca54989237e8f53c33a3bf4428897d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0af9cb612947d53f4b4674edb9cdf0a5aca54989237e8f53c33a3bf4428897d->enter($__internal_a0af9cb612947d53f4b4674edb9cdf0a5aca54989237e8f53c33a3bf4428897d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_a0af9cb612947d53f4b4674edb9cdf0a5aca54989237e8f53c33a3bf4428897d->leave($__internal_a0af9cb612947d53f4b4674edb9cdf0a5aca54989237e8f53c33a3bf4428897d_prof);

        
        $__internal_0f350ec574c76054e323d218c554a4d18cfb0dde25361400e235e5f943bae01e->leave($__internal_0f350ec574c76054e323d218c554a4d18cfb0dde25361400e235e5f943bae01e_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Library/WebServer/Documents/solo/first-symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
