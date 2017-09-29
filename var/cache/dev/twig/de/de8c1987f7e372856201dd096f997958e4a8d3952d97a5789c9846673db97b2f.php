<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_010742bacd7922f8c0ef3868b50c1fd85132c12a1b910d45f0522f422e756bf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_9731fbeebc2265d047aa840aea8c1ab190361e7e198bbfaadbbd518c1e85f801 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9731fbeebc2265d047aa840aea8c1ab190361e7e198bbfaadbbd518c1e85f801->enter($__internal_9731fbeebc2265d047aa840aea8c1ab190361e7e198bbfaadbbd518c1e85f801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3d034bed1891b2e4812d6903c86db0d7268b8001c3c479b129dedcfbad5d5540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d034bed1891b2e4812d6903c86db0d7268b8001c3c479b129dedcfbad5d5540->enter($__internal_3d034bed1891b2e4812d6903c86db0d7268b8001c3c479b129dedcfbad5d5540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9731fbeebc2265d047aa840aea8c1ab190361e7e198bbfaadbbd518c1e85f801->leave($__internal_9731fbeebc2265d047aa840aea8c1ab190361e7e198bbfaadbbd518c1e85f801_prof);

        
        $__internal_3d034bed1891b2e4812d6903c86db0d7268b8001c3c479b129dedcfbad5d5540->leave($__internal_3d034bed1891b2e4812d6903c86db0d7268b8001c3c479b129dedcfbad5d5540_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d05023966390d0d9e3d418e8d6ab644b75e37209d36f5b9bae618536ec78b120 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d05023966390d0d9e3d418e8d6ab644b75e37209d36f5b9bae618536ec78b120->enter($__internal_d05023966390d0d9e3d418e8d6ab644b75e37209d36f5b9bae618536ec78b120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8308e99fc5efd13c4fd31473e50562693f9b069cc65ea8dabeab0dec38b249b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8308e99fc5efd13c4fd31473e50562693f9b069cc65ea8dabeab0dec38b249b1->enter($__internal_8308e99fc5efd13c4fd31473e50562693f9b069cc65ea8dabeab0dec38b249b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8308e99fc5efd13c4fd31473e50562693f9b069cc65ea8dabeab0dec38b249b1->leave($__internal_8308e99fc5efd13c4fd31473e50562693f9b069cc65ea8dabeab0dec38b249b1_prof);

        
        $__internal_d05023966390d0d9e3d418e8d6ab644b75e37209d36f5b9bae618536ec78b120->leave($__internal_d05023966390d0d9e3d418e8d6ab644b75e37209d36f5b9bae618536ec78b120_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_26b3a344b5b742d4ccbc2fbb31323b8976d669ddd306e72bd3fa69d6b8b70a16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26b3a344b5b742d4ccbc2fbb31323b8976d669ddd306e72bd3fa69d6b8b70a16->enter($__internal_26b3a344b5b742d4ccbc2fbb31323b8976d669ddd306e72bd3fa69d6b8b70a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4946bb6652a7643c73714aa9dad421ec06a5abd084c168c684b1c4200a0e3666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4946bb6652a7643c73714aa9dad421ec06a5abd084c168c684b1c4200a0e3666->enter($__internal_4946bb6652a7643c73714aa9dad421ec06a5abd084c168c684b1c4200a0e3666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4946bb6652a7643c73714aa9dad421ec06a5abd084c168c684b1c4200a0e3666->leave($__internal_4946bb6652a7643c73714aa9dad421ec06a5abd084c168c684b1c4200a0e3666_prof);

        
        $__internal_26b3a344b5b742d4ccbc2fbb31323b8976d669ddd306e72bd3fa69d6b8b70a16->leave($__internal_26b3a344b5b742d4ccbc2fbb31323b8976d669ddd306e72bd3fa69d6b8b70a16_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7c2c9c6e2db9f999f186cce7c05df73591741ed1211554d5e946b068dab5ca6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c2c9c6e2db9f999f186cce7c05df73591741ed1211554d5e946b068dab5ca6d->enter($__internal_7c2c9c6e2db9f999f186cce7c05df73591741ed1211554d5e946b068dab5ca6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_50893df3fb0b4c74f3e9c6a8604f219dc88480c964c8314619a92594b56b3e74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50893df3fb0b4c74f3e9c6a8604f219dc88480c964c8314619a92594b56b3e74->enter($__internal_50893df3fb0b4c74f3e9c6a8604f219dc88480c964c8314619a92594b56b3e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_50893df3fb0b4c74f3e9c6a8604f219dc88480c964c8314619a92594b56b3e74->leave($__internal_50893df3fb0b4c74f3e9c6a8604f219dc88480c964c8314619a92594b56b3e74_prof);

        
        $__internal_7c2c9c6e2db9f999f186cce7c05df73591741ed1211554d5e946b068dab5ca6d->leave($__internal_7c2c9c6e2db9f999f186cce7c05df73591741ed1211554d5e946b068dab5ca6d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Library/WebServer/Documents/solo/first-symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
