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
        $__internal_801b1569ef45a5766307f5f19a06eebb45a63099cb8d54191342e22954baf4ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_801b1569ef45a5766307f5f19a06eebb45a63099cb8d54191342e22954baf4ac->enter($__internal_801b1569ef45a5766307f5f19a06eebb45a63099cb8d54191342e22954baf4ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8c0ae6fc35fcd74ec74d4c2e15e40cf5b5e4718cbbbc98cd04a33b67079bf608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c0ae6fc35fcd74ec74d4c2e15e40cf5b5e4718cbbbc98cd04a33b67079bf608->enter($__internal_8c0ae6fc35fcd74ec74d4c2e15e40cf5b5e4718cbbbc98cd04a33b67079bf608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_801b1569ef45a5766307f5f19a06eebb45a63099cb8d54191342e22954baf4ac->leave($__internal_801b1569ef45a5766307f5f19a06eebb45a63099cb8d54191342e22954baf4ac_prof);

        
        $__internal_8c0ae6fc35fcd74ec74d4c2e15e40cf5b5e4718cbbbc98cd04a33b67079bf608->leave($__internal_8c0ae6fc35fcd74ec74d4c2e15e40cf5b5e4718cbbbc98cd04a33b67079bf608_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_11bce9c16f7b1d1ba0432d621cfc6177d59da4a862911447a1996bf591c96b84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11bce9c16f7b1d1ba0432d621cfc6177d59da4a862911447a1996bf591c96b84->enter($__internal_11bce9c16f7b1d1ba0432d621cfc6177d59da4a862911447a1996bf591c96b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_96c54601722213cb61db2b2b4f182070dddf214f375f93dbf25100db6bc5c7e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96c54601722213cb61db2b2b4f182070dddf214f375f93dbf25100db6bc5c7e4->enter($__internal_96c54601722213cb61db2b2b4f182070dddf214f375f93dbf25100db6bc5c7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_96c54601722213cb61db2b2b4f182070dddf214f375f93dbf25100db6bc5c7e4->leave($__internal_96c54601722213cb61db2b2b4f182070dddf214f375f93dbf25100db6bc5c7e4_prof);

        
        $__internal_11bce9c16f7b1d1ba0432d621cfc6177d59da4a862911447a1996bf591c96b84->leave($__internal_11bce9c16f7b1d1ba0432d621cfc6177d59da4a862911447a1996bf591c96b84_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a1c58dffad5f2c83bb7fd2b2596a9df82aeb2374bee2126c050189dca3e1f47e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1c58dffad5f2c83bb7fd2b2596a9df82aeb2374bee2126c050189dca3e1f47e->enter($__internal_a1c58dffad5f2c83bb7fd2b2596a9df82aeb2374bee2126c050189dca3e1f47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1396ffda3c2fa8d489c663b58eaacb90ee9845a4c2647032a3d6fe64896b161d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1396ffda3c2fa8d489c663b58eaacb90ee9845a4c2647032a3d6fe64896b161d->enter($__internal_1396ffda3c2fa8d489c663b58eaacb90ee9845a4c2647032a3d6fe64896b161d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1396ffda3c2fa8d489c663b58eaacb90ee9845a4c2647032a3d6fe64896b161d->leave($__internal_1396ffda3c2fa8d489c663b58eaacb90ee9845a4c2647032a3d6fe64896b161d_prof);

        
        $__internal_a1c58dffad5f2c83bb7fd2b2596a9df82aeb2374bee2126c050189dca3e1f47e->leave($__internal_a1c58dffad5f2c83bb7fd2b2596a9df82aeb2374bee2126c050189dca3e1f47e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0e3ea720d76997caf183e823ff57dfc00cc3e55ba7cd4d7c2d8edb7910578c9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e3ea720d76997caf183e823ff57dfc00cc3e55ba7cd4d7c2d8edb7910578c9d->enter($__internal_0e3ea720d76997caf183e823ff57dfc00cc3e55ba7cd4d7c2d8edb7910578c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1e7182bc7a1f7a8746b621815a55debb85e521b33d44ae688d51ea72abaa2563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e7182bc7a1f7a8746b621815a55debb85e521b33d44ae688d51ea72abaa2563->enter($__internal_1e7182bc7a1f7a8746b621815a55debb85e521b33d44ae688d51ea72abaa2563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1e7182bc7a1f7a8746b621815a55debb85e521b33d44ae688d51ea72abaa2563->leave($__internal_1e7182bc7a1f7a8746b621815a55debb85e521b33d44ae688d51ea72abaa2563_prof);

        
        $__internal_0e3ea720d76997caf183e823ff57dfc00cc3e55ba7cd4d7c2d8edb7910578c9d->leave($__internal_0e3ea720d76997caf183e823ff57dfc00cc3e55ba7cd4d7c2d8edb7910578c9d_prof);

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
