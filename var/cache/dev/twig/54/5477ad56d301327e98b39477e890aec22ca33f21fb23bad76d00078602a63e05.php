<?php

/* article/show.html.twig */
class __TwigTemplate_fcabf89b96b955a86981a4f343eca7023d1afd8fc32e1658dd9f2c4b8c2cf2fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/show.html.twig", 1);
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
        $__internal_b7ec4c4a43547428d6cabe8754b8ef248ff2bb1c2f83580ddac35f84248fd457 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7ec4c4a43547428d6cabe8754b8ef248ff2bb1c2f83580ddac35f84248fd457->enter($__internal_b7ec4c4a43547428d6cabe8754b8ef248ff2bb1c2f83580ddac35f84248fd457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $__internal_4cb9a6b3000381095b4002f87972be2227f24f411e56f8ff29e11d49ea8e7450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cb9a6b3000381095b4002f87972be2227f24f411e56f8ff29e11d49ea8e7450->enter($__internal_4cb9a6b3000381095b4002f87972be2227f24f411e56f8ff29e11d49ea8e7450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7ec4c4a43547428d6cabe8754b8ef248ff2bb1c2f83580ddac35f84248fd457->leave($__internal_b7ec4c4a43547428d6cabe8754b8ef248ff2bb1c2f83580ddac35f84248fd457_prof);

        
        $__internal_4cb9a6b3000381095b4002f87972be2227f24f411e56f8ff29e11d49ea8e7450->leave($__internal_4cb9a6b3000381095b4002f87972be2227f24f411e56f8ff29e11d49ea8e7450_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b435c8de97985ed8bff88a961f704975518faf8ddd7629d52b4acc9688b0160c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b435c8de97985ed8bff88a961f704975518faf8ddd7629d52b4acc9688b0160c->enter($__internal_b435c8de97985ed8bff88a961f704975518faf8ddd7629d52b4acc9688b0160c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_19df345d549dafe29accb288a5ebfb7843a5d8f245a3ddd678f894c9c17d4141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19df345d549dafe29accb288a5ebfb7843a5d8f245a3ddd678f894c9c17d4141->enter($__internal_19df345d549dafe29accb288a5ebfb7843a5d8f245a3ddd678f894c9c17d4141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Article</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "content", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Createdat</th>
                <td>";
        // line 22
        if ($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "createdAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Updatedat</th>
                <td>";
        // line 26
        if ($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "updatedAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "updatedAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Isenabled</th>
                <td>";
        // line 30
        if ($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "isEnabled", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Nblike</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "nbLike", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new-entity_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new-entity_edit", array("id" => $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_19df345d549dafe29accb288a5ebfb7843a5d8f245a3ddd678f894c9c17d4141->leave($__internal_19df345d549dafe29accb288a5ebfb7843a5d8f245a3ddd678f894c9c17d4141_prof);

        
        $__internal_b435c8de97985ed8bff88a961f704975518faf8ddd7629d52b4acc9688b0160c->leave($__internal_b435c8de97985ed8bff88a961f704975518faf8ddd7629d52b4acc9688b0160c_prof);

    }

    public function getTemplateName()
    {
        return "article/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 49,  129 => 47,  123 => 44,  117 => 41,  107 => 34,  96 => 30,  87 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Article</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ article.id }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ article.title }}</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>{{ article.content }}</td>
            </tr>
            <tr>
                <th>Createdat</th>
                <td>{% if article.createdAt %}{{ article.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Updatedat</th>
                <td>{% if article.updatedAt %}{{ article.updatedAt|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Isenabled</th>
                <td>{% if article.isEnabled %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Nblike</th>
                <td>{{ article.nbLike }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('new-entity_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('new-entity_edit', { 'id': article.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "article/show.html.twig", "/Library/WebServer/Documents/solo/symfony/app/Resources/views/article/show.html.twig");
    }
}
