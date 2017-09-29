<?php

/* :default:number.html.twig */
class __TwigTemplate_e390bbff2455f871521653c90dae030b7cec52d21039f58d3c8b1118a623b09f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62500140715c2b28c19ac426846b2701f7b0eac236b163c57ca09f5b13649f4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62500140715c2b28c19ac426846b2701f7b0eac236b163c57ca09f5b13649f4d->enter($__internal_62500140715c2b28c19ac426846b2701f7b0eac236b163c57ca09f5b13649f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:number.html.twig"));

        $__internal_5f02bc7b44f9e0cea96ba2156ac0e7ca668c6e069462e20a5595b2a5653ec059 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f02bc7b44f9e0cea96ba2156ac0e7ca668c6e069462e20a5595b2a5653ec059->enter($__internal_5f02bc7b44f9e0cea96ba2156ac0e7ca668c6e069462e20a5595b2a5653ec059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:number.html.twig"));

        // line 1
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_62500140715c2b28c19ac426846b2701f7b0eac236b163c57ca09f5b13649f4d->leave($__internal_62500140715c2b28c19ac426846b2701f7b0eac236b163c57ca09f5b13649f4d_prof);

        
        $__internal_5f02bc7b44f9e0cea96ba2156ac0e7ca668c6e069462e20a5595b2a5653ec059->leave($__internal_5f02bc7b44f9e0cea96ba2156ac0e7ca668c6e069462e20a5595b2a5653ec059_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_e2ecf61ca68feccaf183f932bf18debf4d5240c613928082407a9a73825bca26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2ecf61ca68feccaf183f932bf18debf4d5240c613928082407a9a73825bca26->enter($__internal_e2ecf61ca68feccaf183f932bf18debf4d5240c613928082407a9a73825bca26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_98433fb8b7fa74da3a2762b30493b79fb2c1081403fa155ee959bbe35d777b3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98433fb8b7fa74da3a2762b30493b79fb2c1081403fa155ee959bbe35d777b3f->enter($__internal_98433fb8b7fa74da3a2762b30493b79fb2c1081403fa155ee959bbe35d777b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 2
        echo "    ";
        echo twig_escape_filter($this->env, ($context["number"] ?? $this->getContext($context, "number")), "html", null, true);
        echo "
";
        
        $__internal_98433fb8b7fa74da3a2762b30493b79fb2c1081403fa155ee959bbe35d777b3f->leave($__internal_98433fb8b7fa74da3a2762b30493b79fb2c1081403fa155ee959bbe35d777b3f_prof);

        
        $__internal_e2ecf61ca68feccaf183f932bf18debf4d5240c613928082407a9a73825bca26->leave($__internal_e2ecf61ca68feccaf183f932bf18debf4d5240c613928082407a9a73825bca26_prof);

    }

    public function getTemplateName()
    {
        return ":default:number.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block content %}
    {{ number }}
{% endblock %}
", ":default:number.html.twig", "/Library/WebServer/Documents/solo/first-symfony/app/Resources/views/default/number.html.twig");
    }
}
