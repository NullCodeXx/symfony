<?php

/* :twig:header.html.twig */
class __TwigTemplate_a6c30ff81900eeb855e5be5534ff088836fc28a68ca36abc7849a5a94eff526f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de3a531edd334823f212b3b22de9a1a1270b5b1588ded6f2a349756cafcce772 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de3a531edd334823f212b3b22de9a1a1270b5b1588ded6f2a349756cafcce772->enter($__internal_de3a531edd334823f212b3b22de9a1a1270b5b1588ded6f2a349756cafcce772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":twig:header.html.twig"));

        $__internal_e951bc4262fdb6e3ae1e5e46060fb2f61a7574f4eb7f7870ead46136647f8e88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e951bc4262fdb6e3ae1e5e46060fb2f61a7574f4eb7f7870ead46136647f8e88->enter($__internal_e951bc4262fdb6e3ae1e5e46060fb2f61a7574f4eb7f7870ead46136647f8e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":twig:header.html.twig"));

        // line 1
        echo "<header>Iniation a Symfony</header>";
        
        $__internal_de3a531edd334823f212b3b22de9a1a1270b5b1588ded6f2a349756cafcce772->leave($__internal_de3a531edd334823f212b3b22de9a1a1270b5b1588ded6f2a349756cafcce772_prof);

        
        $__internal_e951bc4262fdb6e3ae1e5e46060fb2f61a7574f4eb7f7870ead46136647f8e88->leave($__internal_e951bc4262fdb6e3ae1e5e46060fb2f61a7574f4eb7f7870ead46136647f8e88_prof);

    }

    public function getTemplateName()
    {
        return ":twig:header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header>Iniation a Symfony</header>", ":twig:header.html.twig", "/Library/WebServer/Documents/solo/first-symfony/app/Resources/views/twig/header.html.twig");
    }
}
