<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_3486f3729c761432e34b7a07b2ae05f2ea45d7e13a3a57e620c099bed7ec85be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8f611c706413593ab7c2b502f94ddbcc6cc7b8a55f7e3aed79c3ab219b2d4f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8f611c706413593ab7c2b502f94ddbcc6cc7b8a55f7e3aed79c3ab219b2d4f0->enter($__internal_a8f611c706413593ab7c2b502f94ddbcc6cc7b8a55f7e3aed79c3ab219b2d4f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_d21c9053213736ee24ed77bcfe87d7743cdcdf350d7d646363a3e2b723477ea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d21c9053213736ee24ed77bcfe87d7743cdcdf350d7d646363a3e2b723477ea9->enter($__internal_d21c9053213736ee24ed77bcfe87d7743cdcdf350d7d646363a3e2b723477ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8f611c706413593ab7c2b502f94ddbcc6cc7b8a55f7e3aed79c3ab219b2d4f0->leave($__internal_a8f611c706413593ab7c2b502f94ddbcc6cc7b8a55f7e3aed79c3ab219b2d4f0_prof);

        
        $__internal_d21c9053213736ee24ed77bcfe87d7743cdcdf350d7d646363a3e2b723477ea9->leave($__internal_d21c9053213736ee24ed77bcfe87d7743cdcdf350d7d646363a3e2b723477ea9_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_af974f771c79179f8312ae06716861c9ba9164682716bf78f61662aa3cd0e064 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af974f771c79179f8312ae06716861c9ba9164682716bf78f61662aa3cd0e064->enter($__internal_af974f771c79179f8312ae06716861c9ba9164682716bf78f61662aa3cd0e064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_81571c1b50a78957908dba0dc5c361213473bd81ced1466e4c0a9aa9fd38e11a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81571c1b50a78957908dba0dc5c361213473bd81ced1466e4c0a9aa9fd38e11a->enter($__internal_81571c1b50a78957908dba0dc5c361213473bd81ced1466e4c0a9aa9fd38e11a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_81571c1b50a78957908dba0dc5c361213473bd81ced1466e4c0a9aa9fd38e11a->leave($__internal_81571c1b50a78957908dba0dc5c361213473bd81ced1466e4c0a9aa9fd38e11a_prof);

        
        $__internal_af974f771c79179f8312ae06716861c9ba9164682716bf78f61662aa3cd0e064->leave($__internal_af974f771c79179f8312ae06716861c9ba9164682716bf78f61662aa3cd0e064_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8758773a475abfebf787700177990e653bb426e4c3281c1a93b81283b76d95cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8758773a475abfebf787700177990e653bb426e4c3281c1a93b81283b76d95cd->enter($__internal_8758773a475abfebf787700177990e653bb426e4c3281c1a93b81283b76d95cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4c620aef8bccfb49cef57faf8eccaa74d411d2f5925f8edb19782c3de876e60f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c620aef8bccfb49cef57faf8eccaa74d411d2f5925f8edb19782c3de876e60f->enter($__internal_4c620aef8bccfb49cef57faf8eccaa74d411d2f5925f8edb19782c3de876e60f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_4c620aef8bccfb49cef57faf8eccaa74d411d2f5925f8edb19782c3de876e60f->leave($__internal_4c620aef8bccfb49cef57faf8eccaa74d411d2f5925f8edb19782c3de876e60f_prof);

        
        $__internal_8758773a475abfebf787700177990e653bb426e4c3281c1a93b81283b76d95cd->leave($__internal_8758773a475abfebf787700177990e653bb426e4c3281c1a93b81283b76d95cd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "D:\\xamppNew\\htdocs\\mtl_project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
