<?php

/* ::base.html.twig */
class __TwigTemplate_47fd51b039e5f4fb7e336b9f260737cefed48cbce97d781ee1d74e5c39c4c062 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_adbf8c2d70447d2800149b07b685a769e00e8b4e6a1f25c99e02f3cfa1645f38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adbf8c2d70447d2800149b07b685a769e00e8b4e6a1f25c99e02f3cfa1645f38->enter($__internal_adbf8c2d70447d2800149b07b685a769e00e8b4e6a1f25c99e02f3cfa1645f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_9c8a6f7579302e86ca1f1dd6f50355a4657d069f927bac4fe26c3714fb26fb8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c8a6f7579302e86ca1f1dd6f50355a4657d069f927bac4fe26c3714fb26fb8e->enter($__internal_9c8a6f7579302e86ca1f1dd6f50355a4657d069f927bac4fe26c3714fb26fb8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body >
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "
        <!-- appelle le scrypt via la function assets -->
        ";
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "    </body>
</html>
";
        
        $__internal_adbf8c2d70447d2800149b07b685a769e00e8b4e6a1f25c99e02f3cfa1645f38->leave($__internal_adbf8c2d70447d2800149b07b685a769e00e8b4e6a1f25c99e02f3cfa1645f38_prof);

        
        $__internal_9c8a6f7579302e86ca1f1dd6f50355a4657d069f927bac4fe26c3714fb26fb8e->leave($__internal_9c8a6f7579302e86ca1f1dd6f50355a4657d069f927bac4fe26c3714fb26fb8e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_675fe1f9859b9cc39237f9ad281094c797f1bd58f8c506a6a07df501472af89e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_675fe1f9859b9cc39237f9ad281094c797f1bd58f8c506a6a07df501472af89e->enter($__internal_675fe1f9859b9cc39237f9ad281094c797f1bd58f8c506a6a07df501472af89e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f77c797c0c8c1521ac7fc3c7ea1ef87cf5bfe8c858fc6f2a2d511bbd52ac1d49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f77c797c0c8c1521ac7fc3c7ea1ef87cf5bfe8c858fc6f2a2d511bbd52ac1d49->enter($__internal_f77c797c0c8c1521ac7fc3c7ea1ef87cf5bfe8c858fc6f2a2d511bbd52ac1d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue sur Symfony!";
        
        $__internal_f77c797c0c8c1521ac7fc3c7ea1ef87cf5bfe8c858fc6f2a2d511bbd52ac1d49->leave($__internal_f77c797c0c8c1521ac7fc3c7ea1ef87cf5bfe8c858fc6f2a2d511bbd52ac1d49_prof);

        
        $__internal_675fe1f9859b9cc39237f9ad281094c797f1bd58f8c506a6a07df501472af89e->leave($__internal_675fe1f9859b9cc39237f9ad281094c797f1bd58f8c506a6a07df501472af89e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d3354cf8bbbffbcc27490660e761b848854ae02e87d966d169a26cbda63e9328 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3354cf8bbbffbcc27490660e761b848854ae02e87d966d169a26cbda63e9328->enter($__internal_d3354cf8bbbffbcc27490660e761b848854ae02e87d966d169a26cbda63e9328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_36e86ca68c0a7fbc75ce901c2d9322387d69b2f383830da79d267f2ce58be508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36e86ca68c0a7fbc75ce901c2d9322387d69b2f383830da79d267f2ce58be508->enter($__internal_36e86ca68c0a7fbc75ce901c2d9322387d69b2f383830da79d267f2ce58be508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <!-- appelle le css via la function assets -->
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/main.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_36e86ca68c0a7fbc75ce901c2d9322387d69b2f383830da79d267f2ce58be508->leave($__internal_36e86ca68c0a7fbc75ce901c2d9322387d69b2f383830da79d267f2ce58be508_prof);

        
        $__internal_d3354cf8bbbffbcc27490660e761b848854ae02e87d966d169a26cbda63e9328->leave($__internal_d3354cf8bbbffbcc27490660e761b848854ae02e87d966d169a26cbda63e9328_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_0bb19296dfb014c13e82b8140ff39332c611cde1bb492ef5ff72521ccd91fa9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bb19296dfb014c13e82b8140ff39332c611cde1bb492ef5ff72521ccd91fa9b->enter($__internal_0bb19296dfb014c13e82b8140ff39332c611cde1bb492ef5ff72521ccd91fa9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8b678df9fd632c7434a26c130a820d5d7450a99e63446709d85dd064318b9953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b678df9fd632c7434a26c130a820d5d7450a99e63446709d85dd064318b9953->enter($__internal_8b678df9fd632c7434a26c130a820d5d7450a99e63446709d85dd064318b9953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8b678df9fd632c7434a26c130a820d5d7450a99e63446709d85dd064318b9953->leave($__internal_8b678df9fd632c7434a26c130a820d5d7450a99e63446709d85dd064318b9953_prof);

        
        $__internal_0bb19296dfb014c13e82b8140ff39332c611cde1bb492ef5ff72521ccd91fa9b->leave($__internal_0bb19296dfb014c13e82b8140ff39332c611cde1bb492ef5ff72521ccd91fa9b_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_762973aabd10da40856ad1bdb034a785d371be3ac05660bd29898d490073d9a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_762973aabd10da40856ad1bdb034a785d371be3ac05660bd29898d490073d9a4->enter($__internal_762973aabd10da40856ad1bdb034a785d371be3ac05660bd29898d490073d9a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8727d75c62096405404e60083ad4fb3554a6e9078ce26858be71713d8631ba4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8727d75c62096405404e60083ad4fb3554a6e9078ce26858be71713d8631ba4f->enter($__internal_8727d75c62096405404e60083ad4fb3554a6e9078ce26858be71713d8631ba4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_8727d75c62096405404e60083ad4fb3554a6e9078ce26858be71713d8631ba4f->leave($__internal_8727d75c62096405404e60083ad4fb3554a6e9078ce26858be71713d8631ba4f_prof);

        
        $__internal_762973aabd10da40856ad1bdb034a785d371be3ac05660bd29898d490073d9a4->leave($__internal_762973aabd10da40856ad1bdb034a785d371be3ac05660bd29898d490073d9a4_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 19,  140 => 18,  131 => 17,  114 => 14,  102 => 9,  98 => 8,  95 => 7,  86 => 6,  68 => 5,  56 => 21,  54 => 17,  50 => 15,  48 => 14,  41 => 11,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Bienvenue sur Symfony!{% endblock %}</title>
        {% block stylesheets %}
            <!-- appelle le css via la function assets -->
            <link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap.min.css') }}\" />
            <link rel=\"stylesheet\" href=\"{{ asset('assets/css/main.css') }}\" />
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body >
        {% block body %}{% endblock %}

        <!-- appelle le scrypt via la function assets -->
        {% block javascripts %}
            <script src=\"{{ asset('assets/js/main.js') }}\"></script>
            <script src=\"{{ asset('assets/js/bootstrap.min.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "::base.html.twig", "/Library/WebServer/Documents/solo/first-symfony/app/Resources/views/base.html.twig");
    }
}
