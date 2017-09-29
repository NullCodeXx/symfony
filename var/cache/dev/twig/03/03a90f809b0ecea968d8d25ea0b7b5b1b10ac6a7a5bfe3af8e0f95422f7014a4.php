<?php

/* :twig:layout.html.twig */
class __TwigTemplate_5794fc99c38940a07c9132441b227e196e5044dd463b9d89347381b6161af6c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":twig:layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30d1b3f39fe75930f9ed7e299c7c45dc5d095e64a57c53070c54f6368e74ffc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30d1b3f39fe75930f9ed7e299c7c45dc5d095e64a57c53070c54f6368e74ffc3->enter($__internal_30d1b3f39fe75930f9ed7e299c7c45dc5d095e64a57c53070c54f6368e74ffc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":twig:layout.html.twig"));

        $__internal_91ec40625a1280d6c42c4d70bd33b83e03d10f22b34e2658e124aae6466a3d04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91ec40625a1280d6c42c4d70bd33b83e03d10f22b34e2658e124aae6466a3d04->enter($__internal_91ec40625a1280d6c42c4d70bd33b83e03d10f22b34e2658e124aae6466a3d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":twig:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30d1b3f39fe75930f9ed7e299c7c45dc5d095e64a57c53070c54f6368e74ffc3->leave($__internal_30d1b3f39fe75930f9ed7e299c7c45dc5d095e64a57c53070c54f6368e74ffc3_prof);

        
        $__internal_91ec40625a1280d6c42c4d70bd33b83e03d10f22b34e2658e124aae6466a3d04->leave($__internal_91ec40625a1280d6c42c4d70bd33b83e03d10f22b34e2658e124aae6466a3d04_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae8fb6046426268f1b412e9f2e77b9ef40a30b9caefd10a4745aa4f118481337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae8fb6046426268f1b412e9f2e77b9ef40a30b9caefd10a4745aa4f118481337->enter($__internal_ae8fb6046426268f1b412e9f2e77b9ef40a30b9caefd10a4745aa4f118481337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8980bb2695f3a76b05a6168aaf6bd7da46c4fcbe9708f4099b371edb02f66897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8980bb2695f3a76b05a6168aaf6bd7da46c4fcbe9708f4099b371edb02f66897->enter($__internal_8980bb2695f3a76b05a6168aaf6bd7da46c4fcbe9708f4099b371edb02f66897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <section class=\"container-fluid header\">
        ";
        // line 5
        $this->loadTemplate(":twig:header.html.twig", ":twig:layout.html.twig", 5)->display($context);
        // line 6
        echo "    </section>
    <section class=\"container center\">
        <section class=\"menu\">
            ";
        // line 9
        $this->loadTemplate(":twig:menu.html.twig", ":twig:layout.html.twig", 9)->display($context);
        // line 10
        echo "        </section>
        <section class=\"content\">
            ";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        // line 15
        echo "        </section>
    </section>

    <section class=\"container-fluid footer\">
        ";
        // line 19
        $this->loadTemplate(":twig:footer.html.twig", ":twig:layout.html.twig", 19)->display($context);
        // line 20
        echo "    </section>
";
        
        $__internal_8980bb2695f3a76b05a6168aaf6bd7da46c4fcbe9708f4099b371edb02f66897->leave($__internal_8980bb2695f3a76b05a6168aaf6bd7da46c4fcbe9708f4099b371edb02f66897_prof);

        
        $__internal_ae8fb6046426268f1b412e9f2e77b9ef40a30b9caefd10a4745aa4f118481337->leave($__internal_ae8fb6046426268f1b412e9f2e77b9ef40a30b9caefd10a4745aa4f118481337_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_feb1e2ffb35894b75167804cb016788a41bde437c69dc9e51f9e706cfe3f5a78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feb1e2ffb35894b75167804cb016788a41bde437c69dc9e51f9e706cfe3f5a78->enter($__internal_feb1e2ffb35894b75167804cb016788a41bde437c69dc9e51f9e706cfe3f5a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2c055ee7c63d495f5f2f8eb246675cd9b670c91b947b5f28f9e08823becb75c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c055ee7c63d495f5f2f8eb246675cd9b670c91b947b5f28f9e08823becb75c7->enter($__internal_2c055ee7c63d495f5f2f8eb246675cd9b670c91b947b5f28f9e08823becb75c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad animi architecto asperiores atque aut autem consectetur consequatur deserunt dolorem ducimus error fugit illo, impedit libero magnam magni obcaecati officia omnis praesentium quam quas qui quibusdam quidem quis saepe sapiente sequi soluta suscipit veniam vero. Ad aliquam aliquid amet aperiam aspernatur assumenda atque corporis dicta dolor doloribus eius eos esse expedita facere facilis fugit, inventore laudantium nisi officia omnis perferendis quas quidem quod reprehenderit rerum sapiente suscipit totam, unde vitae voluptatem. Accusantium alias beatae consectetur consequuntur cupiditate, delectus, deserunt dolor dolorum ex, expedita fuga fugit hic impedit magnam maiores numquam obcaecati odit pariatur praesentium ratione sapiente sint unde vero vitae voluptates! Aliquid commodi dicta esse labore molestias! Aliquam asperiores beatae culpa deleniti dolorem dolores eaque eveniet expedita, fugiat ipsa ipsam labore laboriosam, minima modi molestiae necessitatibus numquam obcaecati perspiciatis possimus provident quae quibusdam quis quo quos repellat, similique sint suscipit voluptates voluptatibus voluptatum? Amet, animi aperiam deleniti, doloremque dolorum eaque earum illo ipsam labore maxime modi natus nulla numquam obcaecati quaerat quasi quibusdam, ut! Culpa fugiat impedit maiores recusandae tempore. Dicta nihil quos repudiandae sequi, temporibus unde! A alias deserunt et fuga iste iure iusto numquam, praesentium, quasi quis quos tempore!</p>
            ";
        
        $__internal_2c055ee7c63d495f5f2f8eb246675cd9b670c91b947b5f28f9e08823becb75c7->leave($__internal_2c055ee7c63d495f5f2f8eb246675cd9b670c91b947b5f28f9e08823becb75c7_prof);

        
        $__internal_feb1e2ffb35894b75167804cb016788a41bde437c69dc9e51f9e706cfe3f5a78->leave($__internal_feb1e2ffb35894b75167804cb016788a41bde437c69dc9e51f9e706cfe3f5a78_prof);

    }

    public function getTemplateName()
    {
        return ":twig:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 13,  87 => 12,  76 => 20,  74 => 19,  68 => 15,  66 => 12,  62 => 10,  60 => 9,  55 => 6,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{%  block body %}
    <section class=\"container-fluid header\">
        {% include ':twig:header.html.twig' %}
    </section>
    <section class=\"container center\">
        <section class=\"menu\">
            {% include ':twig:menu.html.twig' %}
        </section>
        <section class=\"content\">
            {% block content %}
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad animi architecto asperiores atque aut autem consectetur consequatur deserunt dolorem ducimus error fugit illo, impedit libero magnam magni obcaecati officia omnis praesentium quam quas qui quibusdam quidem quis saepe sapiente sequi soluta suscipit veniam vero. Ad aliquam aliquid amet aperiam aspernatur assumenda atque corporis dicta dolor doloribus eius eos esse expedita facere facilis fugit, inventore laudantium nisi officia omnis perferendis quas quidem quod reprehenderit rerum sapiente suscipit totam, unde vitae voluptatem. Accusantium alias beatae consectetur consequuntur cupiditate, delectus, deserunt dolor dolorum ex, expedita fuga fugit hic impedit magnam maiores numquam obcaecati odit pariatur praesentium ratione sapiente sint unde vero vitae voluptates! Aliquid commodi dicta esse labore molestias! Aliquam asperiores beatae culpa deleniti dolorem dolores eaque eveniet expedita, fugiat ipsa ipsam labore laboriosam, minima modi molestiae necessitatibus numquam obcaecati perspiciatis possimus provident quae quibusdam quis quo quos repellat, similique sint suscipit voluptates voluptatibus voluptatum? Amet, animi aperiam deleniti, doloremque dolorum eaque earum illo ipsam labore maxime modi natus nulla numquam obcaecati quaerat quasi quibusdam, ut! Culpa fugiat impedit maiores recusandae tempore. Dicta nihil quos repudiandae sequi, temporibus unde! A alias deserunt et fuga iste iure iusto numquam, praesentium, quasi quis quos tempore!</p>
            {% endblock %}
        </section>
    </section>

    <section class=\"container-fluid footer\">
        {% include ':twig:footer.html.twig' %}
    </section>
{% endblock %}", ":twig:layout.html.twig", "/Library/WebServer/Documents/solo/first-symfony/app/Resources/views/twig/layout.html.twig");
    }
}
