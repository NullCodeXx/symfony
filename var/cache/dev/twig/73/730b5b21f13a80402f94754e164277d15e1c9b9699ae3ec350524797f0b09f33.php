<?php

/* article/index.html.twig */
class __TwigTemplate_aec53a1b46cbffa1ef11f76e4f941f81dceaffb32f5a798562ddef459776b750 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d7263eab894aa6be7179e579c78c557ecb77dd9f5cee106ea9af9a483434190 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d7263eab894aa6be7179e579c78c557ecb77dd9f5cee106ea9af9a483434190->enter($__internal_0d7263eab894aa6be7179e579c78c557ecb77dd9f5cee106ea9af9a483434190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $__internal_a596ddbb9d3ae05d62914a90e549cbaf921e3d2d6e28122f6ea84443a6e3cbe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a596ddbb9d3ae05d62914a90e549cbaf921e3d2d6e28122f6ea84443a6e3cbe0->enter($__internal_a596ddbb9d3ae05d62914a90e549cbaf921e3d2d6e28122f6ea84443a6e3cbe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d7263eab894aa6be7179e579c78c557ecb77dd9f5cee106ea9af9a483434190->leave($__internal_0d7263eab894aa6be7179e579c78c557ecb77dd9f5cee106ea9af9a483434190_prof);

        
        $__internal_a596ddbb9d3ae05d62914a90e549cbaf921e3d2d6e28122f6ea84443a6e3cbe0->leave($__internal_a596ddbb9d3ae05d62914a90e549cbaf921e3d2d6e28122f6ea84443a6e3cbe0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_239293664ee7d2f4d541455b5451d6680ab1d45913722251166a5ebf747eb8a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_239293664ee7d2f4d541455b5451d6680ab1d45913722251166a5ebf747eb8a2->enter($__internal_239293664ee7d2f4d541455b5451d6680ab1d45913722251166a5ebf747eb8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c8098416ca9aecca7f669b2e2674716dcadba476e6017438fed029aea94e14af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8098416ca9aecca7f669b2e2674716dcadba476e6017438fed029aea94e14af->enter($__internal_c8098416ca9aecca7f669b2e2674716dcadba476e6017438fed029aea94e14af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Articles list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Content</th>
                <th>Createdat</th>
                <th>Updatedat</th>
                <th>Isenabled</th>
                <th>Nblike</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new-entity_show", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "content", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($context["article"], "createdAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["article"], "updatedAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "updatedAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 27
            if ($this->getAttribute($context["article"], "isEnabled", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "nbLike", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new-entity_show", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new-entity_edit", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new-entity_new");
        echo "\">Create a new article</a>
        </li>
    </ul>
";
        
        $__internal_c8098416ca9aecca7f669b2e2674716dcadba476e6017438fed029aea94e14af->leave($__internal_c8098416ca9aecca7f669b2e2674716dcadba476e6017438fed029aea94e14af_prof);

        
        $__internal_239293664ee7d2f4d541455b5451d6680ab1d45913722251166a5ebf747eb8a2->leave($__internal_239293664ee7d2f4d541455b5451d6680ab1d45913722251166a5ebf747eb8a2_prof);

    }

    public function getTemplateName()
    {
        return "article/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 46,  133 => 41,  121 => 35,  115 => 32,  108 => 28,  100 => 27,  94 => 26,  88 => 25,  84 => 24,  80 => 23,  74 => 22,  71 => 21,  67 => 20,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Articles list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Content</th>
                <th>Createdat</th>
                <th>Updatedat</th>
                <th>Isenabled</th>
                <th>Nblike</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for article in articles %}
            <tr>
                <td><a href=\"{{ path('new-entity_show', { 'id': article.id }) }}\">{{ article.id }}</a></td>
                <td>{{ article.title }}</td>
                <td>{{ article.content }}</td>
                <td>{% if article.createdAt %}{{ article.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if article.updatedAt %}{{ article.updatedAt|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if article.isEnabled %}Yes{% else %}No{% endif %}</td>
                <td>{{ article.nbLike }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('new-entity_show', { 'id': article.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('new-entity_edit', { 'id': article.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('new-entity_new') }}\">Create a new article</a>
        </li>
    </ul>
{% endblock %}
", "article/index.html.twig", "/Library/WebServer/Documents/solo/symfony/app/Resources/views/article/index.html.twig");
    }
}
