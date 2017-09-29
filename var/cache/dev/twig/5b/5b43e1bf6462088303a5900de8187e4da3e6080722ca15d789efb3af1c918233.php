<?php

/* :twig:menu.html.twig */
class __TwigTemplate_ede2cf8f70e0f713ae30d8f8ef3ebb4d8606cd49a449630fd904d126369c84bb extends Twig_Template
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
        $__internal_98403df0f3b386d5fa35149ecb6ff141bf8d9c94958aaa99cff28ebe8ea3501b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98403df0f3b386d5fa35149ecb6ff141bf8d9c94958aaa99cff28ebe8ea3501b->enter($__internal_98403df0f3b386d5fa35149ecb6ff141bf8d9c94958aaa99cff28ebe8ea3501b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":twig:menu.html.twig"));

        $__internal_3a1a3d7db78b516a5f50d2aed571ba2904572e825182c50ba831961a060106b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a1a3d7db78b516a5f50d2aed571ba2904572e825182c50ba831961a060106b3->enter($__internal_3a1a3d7db78b516a5f50d2aed571ba2904572e825182c50ba831961a060106b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":twig:menu.html.twig"));

        // line 1
        echo "
        <ul>
            <li><a href=\"http://127.0.0.1:8000/index\" title=\"Revenir a l'accueil\">Accueil</a></li>
            <li><a href=\"http://symfony.com/doc/current/templating.html\" title=\"Documentation\">Documentation Symfony</a></li>
            <li><a href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony/symfony-un-framework-php\" title=\"Retrouvez le cours Symfony\">Cours</a></li>
            <li><a href=\"https://github.com/Alexandre-Peyron/symfony-training-course/blob/master/exercises-basic/02-exercise-twig.md\" title=\"Alexandre Peyron\">Cours & Exercice Github d'Alexandre Peyron</a></li>
            <li><a href=\"https://www.simplonlyon.fr/promo3/dboumaza/\" title=\"Retrouvez moi\">Contact</a></li>
        </ul>

";
        
        $__internal_98403df0f3b386d5fa35149ecb6ff141bf8d9c94958aaa99cff28ebe8ea3501b->leave($__internal_98403df0f3b386d5fa35149ecb6ff141bf8d9c94958aaa99cff28ebe8ea3501b_prof);

        
        $__internal_3a1a3d7db78b516a5f50d2aed571ba2904572e825182c50ba831961a060106b3->leave($__internal_3a1a3d7db78b516a5f50d2aed571ba2904572e825182c50ba831961a060106b3_prof);

    }

    public function getTemplateName()
    {
        return ":twig:menu.html.twig";
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
        return new Twig_Source("
        <ul>
            <li><a href=\"http://127.0.0.1:8000/index\" title=\"Revenir a l'accueil\">Accueil</a></li>
            <li><a href=\"http://symfony.com/doc/current/templating.html\" title=\"Documentation\">Documentation Symfony</a></li>
            <li><a href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony/symfony-un-framework-php\" title=\"Retrouvez le cours Symfony\">Cours</a></li>
            <li><a href=\"https://github.com/Alexandre-Peyron/symfony-training-course/blob/master/exercises-basic/02-exercise-twig.md\" title=\"Alexandre Peyron\">Cours & Exercice Github d'Alexandre Peyron</a></li>
            <li><a href=\"https://www.simplonlyon.fr/promo3/dboumaza/\" title=\"Retrouvez moi\">Contact</a></li>
        </ul>

", ":twig:menu.html.twig", "/Library/WebServer/Documents/solo/first-symfony/app/Resources/views/twig/menu.html.twig");
    }
}
