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
        $__internal_ece9ec580ae5d47e05ec09fc9f74025cce656c9955de320276d0dca2bb887948 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ece9ec580ae5d47e05ec09fc9f74025cce656c9955de320276d0dca2bb887948->enter($__internal_ece9ec580ae5d47e05ec09fc9f74025cce656c9955de320276d0dca2bb887948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_761d147c380a222a572931c9a5db9e635a5f4c95d4714dfa2c5d664a7dc374f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_761d147c380a222a572931c9a5db9e635a5f4c95d4714dfa2c5d664a7dc374f8->enter($__internal_761d147c380a222a572931c9a5db9e635a5f4c95d4714dfa2c5d664a7dc374f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_ece9ec580ae5d47e05ec09fc9f74025cce656c9955de320276d0dca2bb887948->leave($__internal_ece9ec580ae5d47e05ec09fc9f74025cce656c9955de320276d0dca2bb887948_prof);

        
        $__internal_761d147c380a222a572931c9a5db9e635a5f4c95d4714dfa2c5d664a7dc374f8->leave($__internal_761d147c380a222a572931c9a5db9e635a5f4c95d4714dfa2c5d664a7dc374f8_prof);

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
