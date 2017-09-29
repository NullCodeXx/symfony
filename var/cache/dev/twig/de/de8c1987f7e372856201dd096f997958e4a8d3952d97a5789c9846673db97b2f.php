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
        $__internal_0f21726f5a4ddd4b2ae44b6262a892f10704c4421ee012b80082588745313014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f21726f5a4ddd4b2ae44b6262a892f10704c4421ee012b80082588745313014->enter($__internal_0f21726f5a4ddd4b2ae44b6262a892f10704c4421ee012b80082588745313014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_994294e48dabe45bf7f85b63bb8aa51c1cf22655c329308febc30d0b8ecaeef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_994294e48dabe45bf7f85b63bb8aa51c1cf22655c329308febc30d0b8ecaeef4->enter($__internal_994294e48dabe45bf7f85b63bb8aa51c1cf22655c329308febc30d0b8ecaeef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f21726f5a4ddd4b2ae44b6262a892f10704c4421ee012b80082588745313014->leave($__internal_0f21726f5a4ddd4b2ae44b6262a892f10704c4421ee012b80082588745313014_prof);

        
        $__internal_994294e48dabe45bf7f85b63bb8aa51c1cf22655c329308febc30d0b8ecaeef4->leave($__internal_994294e48dabe45bf7f85b63bb8aa51c1cf22655c329308febc30d0b8ecaeef4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1d9ebeab84dcd9f52973d2268264b8077d28d1d7a5af3ca73e3bb4d7c1788507 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d9ebeab84dcd9f52973d2268264b8077d28d1d7a5af3ca73e3bb4d7c1788507->enter($__internal_1d9ebeab84dcd9f52973d2268264b8077d28d1d7a5af3ca73e3bb4d7c1788507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_eed8e79f15f75f4073d2951ab2cef3106b127adefbb68ca580a9e6ecd319f52c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eed8e79f15f75f4073d2951ab2cef3106b127adefbb68ca580a9e6ecd319f52c->enter($__internal_eed8e79f15f75f4073d2951ab2cef3106b127adefbb68ca580a9e6ecd319f52c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_eed8e79f15f75f4073d2951ab2cef3106b127adefbb68ca580a9e6ecd319f52c->leave($__internal_eed8e79f15f75f4073d2951ab2cef3106b127adefbb68ca580a9e6ecd319f52c_prof);

        
        $__internal_1d9ebeab84dcd9f52973d2268264b8077d28d1d7a5af3ca73e3bb4d7c1788507->leave($__internal_1d9ebeab84dcd9f52973d2268264b8077d28d1d7a5af3ca73e3bb4d7c1788507_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_74f2d3497e5013eac1f1e4be7ba9248bf68154b0d5c434cd29fcd2eafa10e853 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74f2d3497e5013eac1f1e4be7ba9248bf68154b0d5c434cd29fcd2eafa10e853->enter($__internal_74f2d3497e5013eac1f1e4be7ba9248bf68154b0d5c434cd29fcd2eafa10e853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3a48cc07bceec69f38f498cb18e73cca5a805d4a6513aed9b7fc3373b708242d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a48cc07bceec69f38f498cb18e73cca5a805d4a6513aed9b7fc3373b708242d->enter($__internal_3a48cc07bceec69f38f498cb18e73cca5a805d4a6513aed9b7fc3373b708242d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3a48cc07bceec69f38f498cb18e73cca5a805d4a6513aed9b7fc3373b708242d->leave($__internal_3a48cc07bceec69f38f498cb18e73cca5a805d4a6513aed9b7fc3373b708242d_prof);

        
        $__internal_74f2d3497e5013eac1f1e4be7ba9248bf68154b0d5c434cd29fcd2eafa10e853->leave($__internal_74f2d3497e5013eac1f1e4be7ba9248bf68154b0d5c434cd29fcd2eafa10e853_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3a83ae6ff73af084d24c0be34708dbc4faeaf5d7cbf840f83e690ec63fa3a57e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a83ae6ff73af084d24c0be34708dbc4faeaf5d7cbf840f83e690ec63fa3a57e->enter($__internal_3a83ae6ff73af084d24c0be34708dbc4faeaf5d7cbf840f83e690ec63fa3a57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_778e0c96a3ebcecacceb524b6f7d80fb4e4ff712753bebc7047e3566ce6915c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_778e0c96a3ebcecacceb524b6f7d80fb4e4ff712753bebc7047e3566ce6915c6->enter($__internal_778e0c96a3ebcecacceb524b6f7d80fb4e4ff712753bebc7047e3566ce6915c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_778e0c96a3ebcecacceb524b6f7d80fb4e4ff712753bebc7047e3566ce6915c6->leave($__internal_778e0c96a3ebcecacceb524b6f7d80fb4e4ff712753bebc7047e3566ce6915c6_prof);

        
        $__internal_3a83ae6ff73af084d24c0be34708dbc4faeaf5d7cbf840f83e690ec63fa3a57e->leave($__internal_3a83ae6ff73af084d24c0be34708dbc4faeaf5d7cbf840f83e690ec63fa3a57e_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Library/WebServer/Documents/solo/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
