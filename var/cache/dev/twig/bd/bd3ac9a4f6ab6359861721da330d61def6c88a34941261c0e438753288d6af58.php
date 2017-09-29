<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_5472197a9615cca948475b890f8f9dbf7313921e10924c2903bc9d99a179f2d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_014805e732f2b22f4d9016ebcfbd9788a4a85cdee9e0a6f1b96e1ba091d9ac86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_014805e732f2b22f4d9016ebcfbd9788a4a85cdee9e0a6f1b96e1ba091d9ac86->enter($__internal_014805e732f2b22f4d9016ebcfbd9788a4a85cdee9e0a6f1b96e1ba091d9ac86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_8f4e2bfa4bdb1bb3e9521e18d62d96b3d5908d476e98535757b9e6e2e73e464e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f4e2bfa4bdb1bb3e9521e18d62d96b3d5908d476e98535757b9e6e2e73e464e->enter($__internal_8f4e2bfa4bdb1bb3e9521e18d62d96b3d5908d476e98535757b9e6e2e73e464e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_014805e732f2b22f4d9016ebcfbd9788a4a85cdee9e0a6f1b96e1ba091d9ac86->leave($__internal_014805e732f2b22f4d9016ebcfbd9788a4a85cdee9e0a6f1b96e1ba091d9ac86_prof);

        
        $__internal_8f4e2bfa4bdb1bb3e9521e18d62d96b3d5908d476e98535757b9e6e2e73e464e->leave($__internal_8f4e2bfa4bdb1bb3e9521e18d62d96b3d5908d476e98535757b9e6e2e73e464e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_046cd5664f2b646bd6de93c3b646c5d29dfe74caa10b7d64498d2592ed052744 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_046cd5664f2b646bd6de93c3b646c5d29dfe74caa10b7d64498d2592ed052744->enter($__internal_046cd5664f2b646bd6de93c3b646c5d29dfe74caa10b7d64498d2592ed052744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_958e1a78fe9eb9c81c28aea8f4595d02fd2e20bdda9163a3441033a9fe1f50a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_958e1a78fe9eb9c81c28aea8f4595d02fd2e20bdda9163a3441033a9fe1f50a5->enter($__internal_958e1a78fe9eb9c81c28aea8f4595d02fd2e20bdda9163a3441033a9fe1f50a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_958e1a78fe9eb9c81c28aea8f4595d02fd2e20bdda9163a3441033a9fe1f50a5->leave($__internal_958e1a78fe9eb9c81c28aea8f4595d02fd2e20bdda9163a3441033a9fe1f50a5_prof);

        
        $__internal_046cd5664f2b646bd6de93c3b646c5d29dfe74caa10b7d64498d2592ed052744->leave($__internal_046cd5664f2b646bd6de93c3b646c5d29dfe74caa10b7d64498d2592ed052744_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Library/WebServer/Documents/solo/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
