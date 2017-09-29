<?php

/* base.html.twig */
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
        $__internal_22b79cf42c873ed679a3331a045f8470a5cfb3205a2dea036f4dc6aabca336d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22b79cf42c873ed679a3331a045f8470a5cfb3205a2dea036f4dc6aabca336d6->enter($__internal_22b79cf42c873ed679a3331a045f8470a5cfb3205a2dea036f4dc6aabca336d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_0a41663eabd8bb6c3dca7385bc9209ec9a81950fc034c49f1bea42d40f656a12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a41663eabd8bb6c3dca7385bc9209ec9a81950fc034c49f1bea42d40f656a12->enter($__internal_0a41663eabd8bb6c3dca7385bc9209ec9a81950fc034c49f1bea42d40f656a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    <body style=\"color: lime;display: flex;justify-content: center;align-items: center;margin-top:6%;text-shadow: 2px 2px 1px #000;font-weight: 500;\">
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
        
        $__internal_22b79cf42c873ed679a3331a045f8470a5cfb3205a2dea036f4dc6aabca336d6->leave($__internal_22b79cf42c873ed679a3331a045f8470a5cfb3205a2dea036f4dc6aabca336d6_prof);

        
        $__internal_0a41663eabd8bb6c3dca7385bc9209ec9a81950fc034c49f1bea42d40f656a12->leave($__internal_0a41663eabd8bb6c3dca7385bc9209ec9a81950fc034c49f1bea42d40f656a12_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4ec5b3b8b7a49476ffdb6b45a8ad9a3155a8f8adc7a7b098d9ec23a291a5de91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ec5b3b8b7a49476ffdb6b45a8ad9a3155a8f8adc7a7b098d9ec23a291a5de91->enter($__internal_4ec5b3b8b7a49476ffdb6b45a8ad9a3155a8f8adc7a7b098d9ec23a291a5de91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_482f53627d3be791c31bfb094a1350b10aed3e52ea409a50174c4db4488fda85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_482f53627d3be791c31bfb094a1350b10aed3e52ea409a50174c4db4488fda85->enter($__internal_482f53627d3be791c31bfb094a1350b10aed3e52ea409a50174c4db4488fda85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue sur Symfony!";
        
        $__internal_482f53627d3be791c31bfb094a1350b10aed3e52ea409a50174c4db4488fda85->leave($__internal_482f53627d3be791c31bfb094a1350b10aed3e52ea409a50174c4db4488fda85_prof);

        
        $__internal_4ec5b3b8b7a49476ffdb6b45a8ad9a3155a8f8adc7a7b098d9ec23a291a5de91->leave($__internal_4ec5b3b8b7a49476ffdb6b45a8ad9a3155a8f8adc7a7b098d9ec23a291a5de91_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fe0c5a2298ad431b2f4f2eea3c138d91f8aa8048975246463dea7c0eab67b855 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe0c5a2298ad431b2f4f2eea3c138d91f8aa8048975246463dea7c0eab67b855->enter($__internal_fe0c5a2298ad431b2f4f2eea3c138d91f8aa8048975246463dea7c0eab67b855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3c28b2d1341d09a20642082fde3dcb5e1e4e4a6f6337dcc8d3ca40a0af102087 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c28b2d1341d09a20642082fde3dcb5e1e4e4a6f6337dcc8d3ca40a0af102087->enter($__internal_3c28b2d1341d09a20642082fde3dcb5e1e4e4a6f6337dcc8d3ca40a0af102087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_3c28b2d1341d09a20642082fde3dcb5e1e4e4a6f6337dcc8d3ca40a0af102087->leave($__internal_3c28b2d1341d09a20642082fde3dcb5e1e4e4a6f6337dcc8d3ca40a0af102087_prof);

        
        $__internal_fe0c5a2298ad431b2f4f2eea3c138d91f8aa8048975246463dea7c0eab67b855->leave($__internal_fe0c5a2298ad431b2f4f2eea3c138d91f8aa8048975246463dea7c0eab67b855_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_6491ae8c6824bb6448f079a13022c32f14ca3ebdce40bb6fa6788632423a4a42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6491ae8c6824bb6448f079a13022c32f14ca3ebdce40bb6fa6788632423a4a42->enter($__internal_6491ae8c6824bb6448f079a13022c32f14ca3ebdce40bb6fa6788632423a4a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bd759f808cea15a128c24a824f06372999d8f54a7b64c342f4aa34978db7a8b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd759f808cea15a128c24a824f06372999d8f54a7b64c342f4aa34978db7a8b2->enter($__internal_bd759f808cea15a128c24a824f06372999d8f54a7b64c342f4aa34978db7a8b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bd759f808cea15a128c24a824f06372999d8f54a7b64c342f4aa34978db7a8b2->leave($__internal_bd759f808cea15a128c24a824f06372999d8f54a7b64c342f4aa34978db7a8b2_prof);

        
        $__internal_6491ae8c6824bb6448f079a13022c32f14ca3ebdce40bb6fa6788632423a4a42->leave($__internal_6491ae8c6824bb6448f079a13022c32f14ca3ebdce40bb6fa6788632423a4a42_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_69f6a8eaeca6cd3fb5f897f216afe5d4e82405f9898b10d6fbb137537419f453 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69f6a8eaeca6cd3fb5f897f216afe5d4e82405f9898b10d6fbb137537419f453->enter($__internal_69f6a8eaeca6cd3fb5f897f216afe5d4e82405f9898b10d6fbb137537419f453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4fc3237f6b6da87bd302fdb5c9e17e46d486b6cc9f9cc913572e080ab8f32972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fc3237f6b6da87bd302fdb5c9e17e46d486b6cc9f9cc913572e080ab8f32972->enter($__internal_4fc3237f6b6da87bd302fdb5c9e17e46d486b6cc9f9cc913572e080ab8f32972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_4fc3237f6b6da87bd302fdb5c9e17e46d486b6cc9f9cc913572e080ab8f32972->leave($__internal_4fc3237f6b6da87bd302fdb5c9e17e46d486b6cc9f9cc913572e080ab8f32972_prof);

        
        $__internal_69f6a8eaeca6cd3fb5f897f216afe5d4e82405f9898b10d6fbb137537419f453->leave($__internal_69f6a8eaeca6cd3fb5f897f216afe5d4e82405f9898b10d6fbb137537419f453_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
    <body style=\"color: lime;display: flex;justify-content: center;align-items: center;margin-top:6%;text-shadow: 2px 2px 1px #000;font-weight: 500;\">
        {% block body %}{% endblock %}

        <!-- appelle le scrypt via la function assets -->
        {% block javascripts %}
            <script src=\"{{ asset('assets/js/main.js') }}\"></script>
            <script src=\"{{ asset('assets/js/bootstrap.min.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/Library/WebServer/Documents/solo/symfony/app/Resources/views/base.html.twig");
    }
}
