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
        $__internal_0706dbf4d1dd2622ac0c602dd8cbb2e92b4c65719751222c0bdbf1504a4aaf9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0706dbf4d1dd2622ac0c602dd8cbb2e92b4c65719751222c0bdbf1504a4aaf9d->enter($__internal_0706dbf4d1dd2622ac0c602dd8cbb2e92b4c65719751222c0bdbf1504a4aaf9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_520a8301d453fd76dd7e93d9130f89c123212d56f31b3cd05a6aef297cad14f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_520a8301d453fd76dd7e93d9130f89c123212d56f31b3cd05a6aef297cad14f7->enter($__internal_520a8301d453fd76dd7e93d9130f89c123212d56f31b3cd05a6aef297cad14f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0706dbf4d1dd2622ac0c602dd8cbb2e92b4c65719751222c0bdbf1504a4aaf9d->leave($__internal_0706dbf4d1dd2622ac0c602dd8cbb2e92b4c65719751222c0bdbf1504a4aaf9d_prof);

        
        $__internal_520a8301d453fd76dd7e93d9130f89c123212d56f31b3cd05a6aef297cad14f7->leave($__internal_520a8301d453fd76dd7e93d9130f89c123212d56f31b3cd05a6aef297cad14f7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ed500bf77a1c30284430671c0aa1ca92050a81e66e776053031be447e001400e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed500bf77a1c30284430671c0aa1ca92050a81e66e776053031be447e001400e->enter($__internal_ed500bf77a1c30284430671c0aa1ca92050a81e66e776053031be447e001400e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2c005301bc33797549fadb7f4752d040f5acf59ceb36a38e4d1e13932d8f91cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c005301bc33797549fadb7f4752d040f5acf59ceb36a38e4d1e13932d8f91cc->enter($__internal_2c005301bc33797549fadb7f4752d040f5acf59ceb36a38e4d1e13932d8f91cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_2c005301bc33797549fadb7f4752d040f5acf59ceb36a38e4d1e13932d8f91cc->leave($__internal_2c005301bc33797549fadb7f4752d040f5acf59ceb36a38e4d1e13932d8f91cc_prof);

        
        $__internal_ed500bf77a1c30284430671c0aa1ca92050a81e66e776053031be447e001400e->leave($__internal_ed500bf77a1c30284430671c0aa1ca92050a81e66e776053031be447e001400e_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/Library/WebServer/Documents/solo/first-symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
