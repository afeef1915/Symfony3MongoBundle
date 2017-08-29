<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_00fe92944343240c0767b451fd1b4a597c913f4be634576314f49ba7c8d44185 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6af8047ba84d5610f1bd2dee6c56eb004cec88229e3799341dcf3ef697e9ed48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6af8047ba84d5610f1bd2dee6c56eb004cec88229e3799341dcf3ef697e9ed48->enter($__internal_6af8047ba84d5610f1bd2dee6c56eb004cec88229e3799341dcf3ef697e9ed48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_08449d8a4d06bff75cc88de6ddcc881537d098ab8d54fe2892b0c95f3ef770f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08449d8a4d06bff75cc88de6ddcc881537d098ab8d54fe2892b0c95f3ef770f1->enter($__internal_08449d8a4d06bff75cc88de6ddcc881537d098ab8d54fe2892b0c95f3ef770f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6af8047ba84d5610f1bd2dee6c56eb004cec88229e3799341dcf3ef697e9ed48->leave($__internal_6af8047ba84d5610f1bd2dee6c56eb004cec88229e3799341dcf3ef697e9ed48_prof);

        
        $__internal_08449d8a4d06bff75cc88de6ddcc881537d098ab8d54fe2892b0c95f3ef770f1->leave($__internal_08449d8a4d06bff75cc88de6ddcc881537d098ab8d54fe2892b0c95f3ef770f1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fda7bd1eb562d732be7f0e1ccb45559cc9582450e4bbd573e41a677de53c45c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fda7bd1eb562d732be7f0e1ccb45559cc9582450e4bbd573e41a677de53c45c3->enter($__internal_fda7bd1eb562d732be7f0e1ccb45559cc9582450e4bbd573e41a677de53c45c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ff56e8e903639ac2d2ff2673000e2a0a0a7a5ef623dcbf22c46bb29c02d79bed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff56e8e903639ac2d2ff2673000e2a0a0a7a5ef623dcbf22c46bb29c02d79bed->enter($__internal_ff56e8e903639ac2d2ff2673000e2a0a0a7a5ef623dcbf22c46bb29c02d79bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_ff56e8e903639ac2d2ff2673000e2a0a0a7a5ef623dcbf22c46bb29c02d79bed->leave($__internal_ff56e8e903639ac2d2ff2673000e2a0a0a7a5ef623dcbf22c46bb29c02d79bed_prof);

        
        $__internal_fda7bd1eb562d732be7f0e1ccb45559cc9582450e4bbd573e41a677de53c45c3->leave($__internal_fda7bd1eb562d732be7f0e1ccb45559cc9582450e4bbd573e41a677de53c45c3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "D:\\xamppNew\\htdocs\\mtl_project\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
