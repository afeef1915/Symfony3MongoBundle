<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_7a158107a71c03caca270c1c16549f3d6b49487ac3a6ec8801da353a67b82133 extends Twig_Template
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
        $__internal_987ace779f23afadfce50c1b223d707cd3e2230360d7ba313943930249c00adf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_987ace779f23afadfce50c1b223d707cd3e2230360d7ba313943930249c00adf->enter($__internal_987ace779f23afadfce50c1b223d707cd3e2230360d7ba313943930249c00adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_8dced8ab2e1ccb131b2cd1f94c36fa56c51b388b3867a6e87a6aa76c5bcf160c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dced8ab2e1ccb131b2cd1f94c36fa56c51b388b3867a6e87a6aa76c5bcf160c->enter($__internal_8dced8ab2e1ccb131b2cd1f94c36fa56c51b388b3867a6e87a6aa76c5bcf160c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_987ace779f23afadfce50c1b223d707cd3e2230360d7ba313943930249c00adf->leave($__internal_987ace779f23afadfce50c1b223d707cd3e2230360d7ba313943930249c00adf_prof);

        
        $__internal_8dced8ab2e1ccb131b2cd1f94c36fa56c51b388b3867a6e87a6aa76c5bcf160c->leave($__internal_8dced8ab2e1ccb131b2cd1f94c36fa56c51b388b3867a6e87a6aa76c5bcf160c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "D:\\xamppNew\\htdocs\\mtl_project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
