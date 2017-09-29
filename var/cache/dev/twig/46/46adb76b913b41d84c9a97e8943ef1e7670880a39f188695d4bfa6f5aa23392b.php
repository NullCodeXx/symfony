<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_126f9d29f853e2cae2b1b3eae1a15db7b503b27c39443e9259a0801a9aea4fb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bad0f7a5e98e958273448a2e0517d457e09f678938e536424146cba5d71afc81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bad0f7a5e98e958273448a2e0517d457e09f678938e536424146cba5d71afc81->enter($__internal_bad0f7a5e98e958273448a2e0517d457e09f678938e536424146cba5d71afc81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_3adb8776bdada3cf80480f12191e765653e9883a9965d27a782fe3adb91e97ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3adb8776bdada3cf80480f12191e765653e9883a9965d27a782fe3adb91e97ed->enter($__internal_3adb8776bdada3cf80480f12191e765653e9883a9965d27a782fe3adb91e97ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bad0f7a5e98e958273448a2e0517d457e09f678938e536424146cba5d71afc81->leave($__internal_bad0f7a5e98e958273448a2e0517d457e09f678938e536424146cba5d71afc81_prof);

        
        $__internal_3adb8776bdada3cf80480f12191e765653e9883a9965d27a782fe3adb91e97ed->leave($__internal_3adb8776bdada3cf80480f12191e765653e9883a9965d27a782fe3adb91e97ed_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8e0247a04803574736937c61b410cb09641859daee062bd0ddcfcfc62ed09333 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e0247a04803574736937c61b410cb09641859daee062bd0ddcfcfc62ed09333->enter($__internal_8e0247a04803574736937c61b410cb09641859daee062bd0ddcfcfc62ed09333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_091599ac62ec5a3c6db2834435f7435935ab5a2314e6079cc4d91a887115cae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_091599ac62ec5a3c6db2834435f7435935ab5a2314e6079cc4d91a887115cae7->enter($__internal_091599ac62ec5a3c6db2834435f7435935ab5a2314e6079cc4d91a887115cae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_091599ac62ec5a3c6db2834435f7435935ab5a2314e6079cc4d91a887115cae7->leave($__internal_091599ac62ec5a3c6db2834435f7435935ab5a2314e6079cc4d91a887115cae7_prof);

        
        $__internal_8e0247a04803574736937c61b410cb09641859daee062bd0ddcfcfc62ed09333->leave($__internal_8e0247a04803574736937c61b410cb09641859daee062bd0ddcfcfc62ed09333_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f9a5b216bd6e37065dea0540f05536176542935dfe526326edb5bdaa70a30f8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9a5b216bd6e37065dea0540f05536176542935dfe526326edb5bdaa70a30f8a->enter($__internal_f9a5b216bd6e37065dea0540f05536176542935dfe526326edb5bdaa70a30f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f28372971fabfb2a94c936133964a6a2770710431fbbb3832774f18d09632493 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f28372971fabfb2a94c936133964a6a2770710431fbbb3832774f18d09632493->enter($__internal_f28372971fabfb2a94c936133964a6a2770710431fbbb3832774f18d09632493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f28372971fabfb2a94c936133964a6a2770710431fbbb3832774f18d09632493->leave($__internal_f28372971fabfb2a94c936133964a6a2770710431fbbb3832774f18d09632493_prof);

        
        $__internal_f9a5b216bd6e37065dea0540f05536176542935dfe526326edb5bdaa70a30f8a->leave($__internal_f9a5b216bd6e37065dea0540f05536176542935dfe526326edb5bdaa70a30f8a_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_68ff9999ccc7e558a6b3f2b04cd78e987cd32135773603563c53c19fbb59c4c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68ff9999ccc7e558a6b3f2b04cd78e987cd32135773603563c53c19fbb59c4c7->enter($__internal_68ff9999ccc7e558a6b3f2b04cd78e987cd32135773603563c53c19fbb59c4c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2b92b5762a7253cac4483c4f0942ee2568430b2d33a0c25d750de73879176d2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b92b5762a7253cac4483c4f0942ee2568430b2d33a0c25d750de73879176d2f->enter($__internal_2b92b5762a7253cac4483c4f0942ee2568430b2d33a0c25d750de73879176d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_2b92b5762a7253cac4483c4f0942ee2568430b2d33a0c25d750de73879176d2f->leave($__internal_2b92b5762a7253cac4483c4f0942ee2568430b2d33a0c25d750de73879176d2f_prof);

        
        $__internal_68ff9999ccc7e558a6b3f2b04cd78e987cd32135773603563c53c19fbb59c4c7->leave($__internal_68ff9999ccc7e558a6b3f2b04cd78e987cd32135773603563c53c19fbb59c4c7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Library/WebServer/Documents/solo/first-symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
