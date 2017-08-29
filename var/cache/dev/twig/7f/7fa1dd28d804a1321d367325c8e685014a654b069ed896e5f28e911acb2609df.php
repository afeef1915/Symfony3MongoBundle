<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_10d2b8c79e5a3bc1e37d72db864f81a208f3c22c782733c83ba46185b7bd7031 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04997a1c87c379c02b0f7332e0bf2d94648aff059ba13f3b8f9d3d27bbe9ec9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04997a1c87c379c02b0f7332e0bf2d94648aff059ba13f3b8f9d3d27bbe9ec9a->enter($__internal_04997a1c87c379c02b0f7332e0bf2d94648aff059ba13f3b8f9d3d27bbe9ec9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7ba8550d312acf19dfce1d5148755152ab4fd9d36bfa7c8864686d2284c7b6d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ba8550d312acf19dfce1d5148755152ab4fd9d36bfa7c8864686d2284c7b6d5->enter($__internal_7ba8550d312acf19dfce1d5148755152ab4fd9d36bfa7c8864686d2284c7b6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04997a1c87c379c02b0f7332e0bf2d94648aff059ba13f3b8f9d3d27bbe9ec9a->leave($__internal_04997a1c87c379c02b0f7332e0bf2d94648aff059ba13f3b8f9d3d27bbe9ec9a_prof);

        
        $__internal_7ba8550d312acf19dfce1d5148755152ab4fd9d36bfa7c8864686d2284c7b6d5->leave($__internal_7ba8550d312acf19dfce1d5148755152ab4fd9d36bfa7c8864686d2284c7b6d5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1738ee67af3af62cfd921cf7c088c781effd5b45a1583b15b0c74bdefd2a3a69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1738ee67af3af62cfd921cf7c088c781effd5b45a1583b15b0c74bdefd2a3a69->enter($__internal_1738ee67af3af62cfd921cf7c088c781effd5b45a1583b15b0c74bdefd2a3a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5ea806b27b176616d27a65a608d52ccde395b6e1e28f4f7ad59297b78394ab4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ea806b27b176616d27a65a608d52ccde395b6e1e28f4f7ad59297b78394ab4d->enter($__internal_5ea806b27b176616d27a65a608d52ccde395b6e1e28f4f7ad59297b78394ab4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5ea806b27b176616d27a65a608d52ccde395b6e1e28f4f7ad59297b78394ab4d->leave($__internal_5ea806b27b176616d27a65a608d52ccde395b6e1e28f4f7ad59297b78394ab4d_prof);

        
        $__internal_1738ee67af3af62cfd921cf7c088c781effd5b45a1583b15b0c74bdefd2a3a69->leave($__internal_1738ee67af3af62cfd921cf7c088c781effd5b45a1583b15b0c74bdefd2a3a69_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_439cc6fc8a98409f96b1d18c1b034cdb07f0941f86d7b2bc9a3db12652f021ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_439cc6fc8a98409f96b1d18c1b034cdb07f0941f86d7b2bc9a3db12652f021ff->enter($__internal_439cc6fc8a98409f96b1d18c1b034cdb07f0941f86d7b2bc9a3db12652f021ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_50a865d5e1542f09edc5deeceb46e7a9da9b9cd7a40f9690af225e553860d6de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50a865d5e1542f09edc5deeceb46e7a9da9b9cd7a40f9690af225e553860d6de->enter($__internal_50a865d5e1542f09edc5deeceb46e7a9da9b9cd7a40f9690af225e553860d6de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_50a865d5e1542f09edc5deeceb46e7a9da9b9cd7a40f9690af225e553860d6de->leave($__internal_50a865d5e1542f09edc5deeceb46e7a9da9b9cd7a40f9690af225e553860d6de_prof);

        
        $__internal_439cc6fc8a98409f96b1d18c1b034cdb07f0941f86d7b2bc9a3db12652f021ff->leave($__internal_439cc6fc8a98409f96b1d18c1b034cdb07f0941f86d7b2bc9a3db12652f021ff_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_054be98904750c48f88453c698845d43711c1cb30d9841796415094aa296bd95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_054be98904750c48f88453c698845d43711c1cb30d9841796415094aa296bd95->enter($__internal_054be98904750c48f88453c698845d43711c1cb30d9841796415094aa296bd95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3b8978f3281d4dcab4a13c111c3f32f9213609a8f8526eb12c6ef71036a9af67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b8978f3281d4dcab4a13c111c3f32f9213609a8f8526eb12c6ef71036a9af67->enter($__internal_3b8978f3281d4dcab4a13c111c3f32f9213609a8f8526eb12c6ef71036a9af67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3b8978f3281d4dcab4a13c111c3f32f9213609a8f8526eb12c6ef71036a9af67->leave($__internal_3b8978f3281d4dcab4a13c111c3f32f9213609a8f8526eb12c6ef71036a9af67_prof);

        
        $__internal_054be98904750c48f88453c698845d43711c1cb30d9841796415094aa296bd95->leave($__internal_054be98904750c48f88453c698845d43711c1cb30d9841796415094aa296bd95_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\xamppNew\\htdocs\\mtl_project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
