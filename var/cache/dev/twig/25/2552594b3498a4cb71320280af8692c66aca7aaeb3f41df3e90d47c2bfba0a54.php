<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_5822d96dc649f46e30dff249a3a71de6a19ae062cb782a290b55e829dac1467e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62e5ad2571e5f417383fb01aeba326114ffec3ea0c659b2e0afb11ec8feee38e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62e5ad2571e5f417383fb01aeba326114ffec3ea0c659b2e0afb11ec8feee38e->enter($__internal_62e5ad2571e5f417383fb01aeba326114ffec3ea0c659b2e0afb11ec8feee38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_76be9e7eb15252878f182a24095af6b3e78f37c167584d5ad415ed50bd76a31f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76be9e7eb15252878f182a24095af6b3e78f37c167584d5ad415ed50bd76a31f->enter($__internal_76be9e7eb15252878f182a24095af6b3e78f37c167584d5ad415ed50bd76a31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_62e5ad2571e5f417383fb01aeba326114ffec3ea0c659b2e0afb11ec8feee38e->leave($__internal_62e5ad2571e5f417383fb01aeba326114ffec3ea0c659b2e0afb11ec8feee38e_prof);

        
        $__internal_76be9e7eb15252878f182a24095af6b3e78f37c167584d5ad415ed50bd76a31f->leave($__internal_76be9e7eb15252878f182a24095af6b3e78f37c167584d5ad415ed50bd76a31f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_914a8317c703401b89c72ea4c1bceaf6324f9ebec777e6182e79759f9ebf1245 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_914a8317c703401b89c72ea4c1bceaf6324f9ebec777e6182e79759f9ebf1245->enter($__internal_914a8317c703401b89c72ea4c1bceaf6324f9ebec777e6182e79759f9ebf1245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bac706608c8c0d8c7612eace19583cb1ef9dc093ea0951f1823d13193d4a5187 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bac706608c8c0d8c7612eace19583cb1ef9dc093ea0951f1823d13193d4a5187->enter($__internal_bac706608c8c0d8c7612eace19583cb1ef9dc093ea0951f1823d13193d4a5187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_bac706608c8c0d8c7612eace19583cb1ef9dc093ea0951f1823d13193d4a5187->leave($__internal_bac706608c8c0d8c7612eace19583cb1ef9dc093ea0951f1823d13193d4a5187_prof);

        
        $__internal_914a8317c703401b89c72ea4c1bceaf6324f9ebec777e6182e79759f9ebf1245->leave($__internal_914a8317c703401b89c72ea4c1bceaf6324f9ebec777e6182e79759f9ebf1245_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_9ca9ce6a226ba45fbf9a34e78e58cdfdb4df6b734499eaeca6ef495e5cd6ec1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ca9ce6a226ba45fbf9a34e78e58cdfdb4df6b734499eaeca6ef495e5cd6ec1c->enter($__internal_9ca9ce6a226ba45fbf9a34e78e58cdfdb4df6b734499eaeca6ef495e5cd6ec1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c4a3bd7db4c221bff7037591bffdc396f72849af79060a6c1955e540acd64d6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4a3bd7db4c221bff7037591bffdc396f72849af79060a6c1955e540acd64d6e->enter($__internal_c4a3bd7db4c221bff7037591bffdc396f72849af79060a6c1955e540acd64d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_c4a3bd7db4c221bff7037591bffdc396f72849af79060a6c1955e540acd64d6e->leave($__internal_c4a3bd7db4c221bff7037591bffdc396f72849af79060a6c1955e540acd64d6e_prof);

        
        $__internal_9ca9ce6a226ba45fbf9a34e78e58cdfdb4df6b734499eaeca6ef495e5cd6ec1c->leave($__internal_9ca9ce6a226ba45fbf9a34e78e58cdfdb4df6b734499eaeca6ef495e5cd6ec1c_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_99d23766072262e6ced3a2feb3ce10bcf61b1ea8cf8fc429203fafebd30fb64a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99d23766072262e6ced3a2feb3ce10bcf61b1ea8cf8fc429203fafebd30fb64a->enter($__internal_99d23766072262e6ced3a2feb3ce10bcf61b1ea8cf8fc429203fafebd30fb64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1d6900680b55872234e05e2538d335c101f496346df184cc6db4d05074d56205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d6900680b55872234e05e2538d335c101f496346df184cc6db4d05074d56205->enter($__internal_1d6900680b55872234e05e2538d335c101f496346df184cc6db4d05074d56205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1d6900680b55872234e05e2538d335c101f496346df184cc6db4d05074d56205->leave($__internal_1d6900680b55872234e05e2538d335c101f496346df184cc6db4d05074d56205_prof);

        
        $__internal_99d23766072262e6ced3a2feb3ce10bcf61b1ea8cf8fc429203fafebd30fb64a->leave($__internal_99d23766072262e6ced3a2feb3ce10bcf61b1ea8cf8fc429203fafebd30fb64a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Library/WebServer/Documents/solo/first-symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
