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
        $__internal_22f0707ced3ff2ebb2aa88a9f29ac6ac6b3ea96b1a27c465ef64363d3cd67643 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22f0707ced3ff2ebb2aa88a9f29ac6ac6b3ea96b1a27c465ef64363d3cd67643->enter($__internal_22f0707ced3ff2ebb2aa88a9f29ac6ac6b3ea96b1a27c465ef64363d3cd67643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_5063c00e723ab4cd8262dbc58ff40799405a185094f675fe0c522b3a0a75a5b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5063c00e723ab4cd8262dbc58ff40799405a185094f675fe0c522b3a0a75a5b4->enter($__internal_5063c00e723ab4cd8262dbc58ff40799405a185094f675fe0c522b3a0a75a5b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22f0707ced3ff2ebb2aa88a9f29ac6ac6b3ea96b1a27c465ef64363d3cd67643->leave($__internal_22f0707ced3ff2ebb2aa88a9f29ac6ac6b3ea96b1a27c465ef64363d3cd67643_prof);

        
        $__internal_5063c00e723ab4cd8262dbc58ff40799405a185094f675fe0c522b3a0a75a5b4->leave($__internal_5063c00e723ab4cd8262dbc58ff40799405a185094f675fe0c522b3a0a75a5b4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_12d79eebcaabddfc1a9bce81ecb97053c13c7f116e8c1045fb48d6e807f484a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12d79eebcaabddfc1a9bce81ecb97053c13c7f116e8c1045fb48d6e807f484a7->enter($__internal_12d79eebcaabddfc1a9bce81ecb97053c13c7f116e8c1045fb48d6e807f484a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2f5a3e48d57bed8db4e0271bd9a19ff25ed1a88556326d45cffd895f6bfe2acd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f5a3e48d57bed8db4e0271bd9a19ff25ed1a88556326d45cffd895f6bfe2acd->enter($__internal_2f5a3e48d57bed8db4e0271bd9a19ff25ed1a88556326d45cffd895f6bfe2acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_2f5a3e48d57bed8db4e0271bd9a19ff25ed1a88556326d45cffd895f6bfe2acd->leave($__internal_2f5a3e48d57bed8db4e0271bd9a19ff25ed1a88556326d45cffd895f6bfe2acd_prof);

        
        $__internal_12d79eebcaabddfc1a9bce81ecb97053c13c7f116e8c1045fb48d6e807f484a7->leave($__internal_12d79eebcaabddfc1a9bce81ecb97053c13c7f116e8c1045fb48d6e807f484a7_prof);

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
