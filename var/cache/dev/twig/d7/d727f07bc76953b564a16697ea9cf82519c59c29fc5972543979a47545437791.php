<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_3e8018b1e85469c2436c0002276f1bdd1a6bbcf33d56a1c34ea5ae3b95274d1d extends Twig_Template
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
        $__internal_c02509be77f5776c579b6159165ab128e8c4cf6ea113545172a94481e9b4af43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c02509be77f5776c579b6159165ab128e8c4cf6ea113545172a94481e9b4af43->enter($__internal_c02509be77f5776c579b6159165ab128e8c4cf6ea113545172a94481e9b4af43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_39ce3612f8f7c227c4c3d9018d2f7c64ab802481c818bffc6e1d4768e74353e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39ce3612f8f7c227c4c3d9018d2f7c64ab802481c818bffc6e1d4768e74353e6->enter($__internal_39ce3612f8f7c227c4c3d9018d2f7c64ab802481c818bffc6e1d4768e74353e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_c02509be77f5776c579b6159165ab128e8c4cf6ea113545172a94481e9b4af43->leave($__internal_c02509be77f5776c579b6159165ab128e8c4cf6ea113545172a94481e9b4af43_prof);

        
        $__internal_39ce3612f8f7c227c4c3d9018d2f7c64ab802481c818bffc6e1d4768e74353e6->leave($__internal_39ce3612f8f7c227c4c3d9018d2f7c64ab802481c818bffc6e1d4768e74353e6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "D:\\xamppNew\\htdocs\\mtl_project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
