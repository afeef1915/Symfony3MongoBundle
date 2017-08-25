<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_0401eb77ac4410f75d1c4605b515d45db115b2995715acf40a4cf1f9a0210f5f extends Twig_Template
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
        $__internal_21e1b1dc0257e3d246bc0fcf5fc84e04bb0e88f09dcc70b9a13ccd5d0ee617b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21e1b1dc0257e3d246bc0fcf5fc84e04bb0e88f09dcc70b9a13ccd5d0ee617b5->enter($__internal_21e1b1dc0257e3d246bc0fcf5fc84e04bb0e88f09dcc70b9a13ccd5d0ee617b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_09333f48ce5d084119fdd81a988826c68a14f82cb5c2d3cfdbeba780f4519543 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09333f48ce5d084119fdd81a988826c68a14f82cb5c2d3cfdbeba780f4519543->enter($__internal_09333f48ce5d084119fdd81a988826c68a14f82cb5c2d3cfdbeba780f4519543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_21e1b1dc0257e3d246bc0fcf5fc84e04bb0e88f09dcc70b9a13ccd5d0ee617b5->leave($__internal_21e1b1dc0257e3d246bc0fcf5fc84e04bb0e88f09dcc70b9a13ccd5d0ee617b5_prof);

        
        $__internal_09333f48ce5d084119fdd81a988826c68a14f82cb5c2d3cfdbeba780f4519543->leave($__internal_09333f48ce5d084119fdd81a988826c68a14f82cb5c2d3cfdbeba780f4519543_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "D:\\xamppNew\\htdocs\\mtl_project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
