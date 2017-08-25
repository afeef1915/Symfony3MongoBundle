<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e603d342d24daa8742b6b376c2b359f4f8f1fbc41f655c6bb1a8df5de650a888 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2440400e16a660eb2996a274a88139af7043336bdf8a678fe7780ea879bea6ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2440400e16a660eb2996a274a88139af7043336bdf8a678fe7780ea879bea6ac->enter($__internal_2440400e16a660eb2996a274a88139af7043336bdf8a678fe7780ea879bea6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_25039d6d4512e869ef17c7389c7c8f813a710da7d2d2cd95045b351582c40f7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25039d6d4512e869ef17c7389c7c8f813a710da7d2d2cd95045b351582c40f7f->enter($__internal_25039d6d4512e869ef17c7389c7c8f813a710da7d2d2cd95045b351582c40f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2440400e16a660eb2996a274a88139af7043336bdf8a678fe7780ea879bea6ac->leave($__internal_2440400e16a660eb2996a274a88139af7043336bdf8a678fe7780ea879bea6ac_prof);

        
        $__internal_25039d6d4512e869ef17c7389c7c8f813a710da7d2d2cd95045b351582c40f7f->leave($__internal_25039d6d4512e869ef17c7389c7c8f813a710da7d2d2cd95045b351582c40f7f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a2516b3496b53d5cd69cf00946a982f385dbfc4e08e9b781401f88afce3b2f3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2516b3496b53d5cd69cf00946a982f385dbfc4e08e9b781401f88afce3b2f3d->enter($__internal_a2516b3496b53d5cd69cf00946a982f385dbfc4e08e9b781401f88afce3b2f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f53a3dfb4fc980ea199f5be3b67994195b04a5e7c2eaf33784f92eb0f917bf3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f53a3dfb4fc980ea199f5be3b67994195b04a5e7c2eaf33784f92eb0f917bf3b->enter($__internal_f53a3dfb4fc980ea199f5be3b67994195b04a5e7c2eaf33784f92eb0f917bf3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_f53a3dfb4fc980ea199f5be3b67994195b04a5e7c2eaf33784f92eb0f917bf3b->leave($__internal_f53a3dfb4fc980ea199f5be3b67994195b04a5e7c2eaf33784f92eb0f917bf3b_prof);

        
        $__internal_a2516b3496b53d5cd69cf00946a982f385dbfc4e08e9b781401f88afce3b2f3d->leave($__internal_a2516b3496b53d5cd69cf00946a982f385dbfc4e08e9b781401f88afce3b2f3d_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_571a377836b7a16ef33dd2f5ff1edb4e24e43dfe9c024c69af75a0be1be980e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_571a377836b7a16ef33dd2f5ff1edb4e24e43dfe9c024c69af75a0be1be980e0->enter($__internal_571a377836b7a16ef33dd2f5ff1edb4e24e43dfe9c024c69af75a0be1be980e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b608a2df063f7ceed8d3414f14e151b3b4527913dd6030a75b23871532af10cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b608a2df063f7ceed8d3414f14e151b3b4527913dd6030a75b23871532af10cc->enter($__internal_b608a2df063f7ceed8d3414f14e151b3b4527913dd6030a75b23871532af10cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b608a2df063f7ceed8d3414f14e151b3b4527913dd6030a75b23871532af10cc->leave($__internal_b608a2df063f7ceed8d3414f14e151b3b4527913dd6030a75b23871532af10cc_prof);

        
        $__internal_571a377836b7a16ef33dd2f5ff1edb4e24e43dfe9c024c69af75a0be1be980e0->leave($__internal_571a377836b7a16ef33dd2f5ff1edb4e24e43dfe9c024c69af75a0be1be980e0_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_1dc7ff46ff0f9df59d07ed5169e911d6d9c6672cc05f91fdd9c0b862e1cdbd22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dc7ff46ff0f9df59d07ed5169e911d6d9c6672cc05f91fdd9c0b862e1cdbd22->enter($__internal_1dc7ff46ff0f9df59d07ed5169e911d6d9c6672cc05f91fdd9c0b862e1cdbd22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f0496fa61381f923d3b9d91bed745fd0cc382c0e4f9791510ec694b69160b376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0496fa61381f923d3b9d91bed745fd0cc382c0e4f9791510ec694b69160b376->enter($__internal_f0496fa61381f923d3b9d91bed745fd0cc382c0e4f9791510ec694b69160b376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_f0496fa61381f923d3b9d91bed745fd0cc382c0e4f9791510ec694b69160b376->leave($__internal_f0496fa61381f923d3b9d91bed745fd0cc382c0e4f9791510ec694b69160b376_prof);

        
        $__internal_1dc7ff46ff0f9df59d07ed5169e911d6d9c6672cc05f91fdd9c0b862e1cdbd22->leave($__internal_1dc7ff46ff0f9df59d07ed5169e911d6d9c6672cc05f91fdd9c0b862e1cdbd22_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "D:\\xamppNew\\htdocs\\mtl_project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
