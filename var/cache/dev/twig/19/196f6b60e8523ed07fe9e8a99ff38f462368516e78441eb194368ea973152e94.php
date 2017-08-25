<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_422e7b9ff239b97dfb3279d2058b9bea05bdd1a771efe3efd2a006884df8519e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb7d5535715087c7225e72d62109cd6dec014fb4a2f94a98ec031d4992ea314b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb7d5535715087c7225e72d62109cd6dec014fb4a2f94a98ec031d4992ea314b->enter($__internal_eb7d5535715087c7225e72d62109cd6dec014fb4a2f94a98ec031d4992ea314b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_8255d952d557a9836a71f08df8b9d83da83e889a986af5d86dae689c9d7fc6ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8255d952d557a9836a71f08df8b9d83da83e889a986af5d86dae689c9d7fc6ea->enter($__internal_8255d952d557a9836a71f08df8b9d83da83e889a986af5d86dae689c9d7fc6ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb7d5535715087c7225e72d62109cd6dec014fb4a2f94a98ec031d4992ea314b->leave($__internal_eb7d5535715087c7225e72d62109cd6dec014fb4a2f94a98ec031d4992ea314b_prof);

        
        $__internal_8255d952d557a9836a71f08df8b9d83da83e889a986af5d86dae689c9d7fc6ea->leave($__internal_8255d952d557a9836a71f08df8b9d83da83e889a986af5d86dae689c9d7fc6ea_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_acb4b1ea5d94702175cc26aebe789855ec3ece7d4d47d0b216456b59c624d82f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acb4b1ea5d94702175cc26aebe789855ec3ece7d4d47d0b216456b59c624d82f->enter($__internal_acb4b1ea5d94702175cc26aebe789855ec3ece7d4d47d0b216456b59c624d82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_60c53c322892edc51f763eb062c7a6045954dac58fafe4e6b70a9f17f11f017a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60c53c322892edc51f763eb062c7a6045954dac58fafe4e6b70a9f17f11f017a->enter($__internal_60c53c322892edc51f763eb062c7a6045954dac58fafe4e6b70a9f17f11f017a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_60c53c322892edc51f763eb062c7a6045954dac58fafe4e6b70a9f17f11f017a->leave($__internal_60c53c322892edc51f763eb062c7a6045954dac58fafe4e6b70a9f17f11f017a_prof);

        
        $__internal_acb4b1ea5d94702175cc26aebe789855ec3ece7d4d47d0b216456b59c624d82f->leave($__internal_acb4b1ea5d94702175cc26aebe789855ec3ece7d4d47d0b216456b59c624d82f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "D:\\xamppNew\\htdocs\\mtl_project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
