<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_643bf0b869f9a3f296df382e21c294bf0d7c7638dc62428871fdb24af5d1a2ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_3a105761e6d36d0459c0e7b9dab409bcff7bd306b6e7f44e9e146e8c7f7a9b28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a105761e6d36d0459c0e7b9dab409bcff7bd306b6e7f44e9e146e8c7f7a9b28->enter($__internal_3a105761e6d36d0459c0e7b9dab409bcff7bd306b6e7f44e9e146e8c7f7a9b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_676b8dbfb7597f48e457c3fba907dd6e18054dcabf37a83171cbab8b05f0bea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_676b8dbfb7597f48e457c3fba907dd6e18054dcabf37a83171cbab8b05f0bea0->enter($__internal_676b8dbfb7597f48e457c3fba907dd6e18054dcabf37a83171cbab8b05f0bea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a105761e6d36d0459c0e7b9dab409bcff7bd306b6e7f44e9e146e8c7f7a9b28->leave($__internal_3a105761e6d36d0459c0e7b9dab409bcff7bd306b6e7f44e9e146e8c7f7a9b28_prof);

        
        $__internal_676b8dbfb7597f48e457c3fba907dd6e18054dcabf37a83171cbab8b05f0bea0->leave($__internal_676b8dbfb7597f48e457c3fba907dd6e18054dcabf37a83171cbab8b05f0bea0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fd8278cc2183ef2c03a0c473451a1d605f073137e57a0c728dbcf86d3dc0acd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd8278cc2183ef2c03a0c473451a1d605f073137e57a0c728dbcf86d3dc0acd7->enter($__internal_fd8278cc2183ef2c03a0c473451a1d605f073137e57a0c728dbcf86d3dc0acd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6c3e28b48ba750c0f31ad2c1dc840f3daf79edcdcd8b9a35de2d4336ae28e17d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c3e28b48ba750c0f31ad2c1dc840f3daf79edcdcd8b9a35de2d4336ae28e17d->enter($__internal_6c3e28b48ba750c0f31ad2c1dc840f3daf79edcdcd8b9a35de2d4336ae28e17d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_6c3e28b48ba750c0f31ad2c1dc840f3daf79edcdcd8b9a35de2d4336ae28e17d->leave($__internal_6c3e28b48ba750c0f31ad2c1dc840f3daf79edcdcd8b9a35de2d4336ae28e17d_prof);

        
        $__internal_fd8278cc2183ef2c03a0c473451a1d605f073137e57a0c728dbcf86d3dc0acd7->leave($__internal_fd8278cc2183ef2c03a0c473451a1d605f073137e57a0c728dbcf86d3dc0acd7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7b0992c0ee8c981b76eed956abb365182e9905cdde3330ef290c567867ff4d18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b0992c0ee8c981b76eed956abb365182e9905cdde3330ef290c567867ff4d18->enter($__internal_7b0992c0ee8c981b76eed956abb365182e9905cdde3330ef290c567867ff4d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_065594cef6bfdc0edd164021da95f1514ed5b0e667fa13506fe11bd144669709 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_065594cef6bfdc0edd164021da95f1514ed5b0e667fa13506fe11bd144669709->enter($__internal_065594cef6bfdc0edd164021da95f1514ed5b0e667fa13506fe11bd144669709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_065594cef6bfdc0edd164021da95f1514ed5b0e667fa13506fe11bd144669709->leave($__internal_065594cef6bfdc0edd164021da95f1514ed5b0e667fa13506fe11bd144669709_prof);

        
        $__internal_7b0992c0ee8c981b76eed956abb365182e9905cdde3330ef290c567867ff4d18->leave($__internal_7b0992c0ee8c981b76eed956abb365182e9905cdde3330ef290c567867ff4d18_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_33e66de9778b4d05138cdccfc20781111c99b380c07bc689b31ed6751ee8d84e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33e66de9778b4d05138cdccfc20781111c99b380c07bc689b31ed6751ee8d84e->enter($__internal_33e66de9778b4d05138cdccfc20781111c99b380c07bc689b31ed6751ee8d84e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4b13e0781a0797e2f114abd681bdb4c6478ab99f627b35ebb8de7e2be263125d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b13e0781a0797e2f114abd681bdb4c6478ab99f627b35ebb8de7e2be263125d->enter($__internal_4b13e0781a0797e2f114abd681bdb4c6478ab99f627b35ebb8de7e2be263125d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_4b13e0781a0797e2f114abd681bdb4c6478ab99f627b35ebb8de7e2be263125d->leave($__internal_4b13e0781a0797e2f114abd681bdb4c6478ab99f627b35ebb8de7e2be263125d_prof);

        
        $__internal_33e66de9778b4d05138cdccfc20781111c99b380c07bc689b31ed6751ee8d84e->leave($__internal_33e66de9778b4d05138cdccfc20781111c99b380c07bc689b31ed6751ee8d84e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "D:\\xamppNew\\htdocs\\mtl_project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
