<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_328f308723b210f74950b366f3cc7630b5f8e71d712d3d43a67b301e091ba46e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_62607b46879a8941db6043246a70b615f5f68ac39aefec50208d69be569f786e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62607b46879a8941db6043246a70b615f5f68ac39aefec50208d69be569f786e->enter($__internal_62607b46879a8941db6043246a70b615f5f68ac39aefec50208d69be569f786e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_87d80d332cd3249a85fec27b5ba1fc2f19a12355b4768c9523ea99ba30bc05fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87d80d332cd3249a85fec27b5ba1fc2f19a12355b4768c9523ea99ba30bc05fb->enter($__internal_87d80d332cd3249a85fec27b5ba1fc2f19a12355b4768c9523ea99ba30bc05fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62607b46879a8941db6043246a70b615f5f68ac39aefec50208d69be569f786e->leave($__internal_62607b46879a8941db6043246a70b615f5f68ac39aefec50208d69be569f786e_prof);

        
        $__internal_87d80d332cd3249a85fec27b5ba1fc2f19a12355b4768c9523ea99ba30bc05fb->leave($__internal_87d80d332cd3249a85fec27b5ba1fc2f19a12355b4768c9523ea99ba30bc05fb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5b8b4a6e533911ae4a3cc96d0cf0911d9e1bef604b0ea668555c6ec95c34eefe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b8b4a6e533911ae4a3cc96d0cf0911d9e1bef604b0ea668555c6ec95c34eefe->enter($__internal_5b8b4a6e533911ae4a3cc96d0cf0911d9e1bef604b0ea668555c6ec95c34eefe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8161d13c01f15760c826ef1b717921e0b7f6f3d38060ba43c213e53dcf282447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8161d13c01f15760c826ef1b717921e0b7f6f3d38060ba43c213e53dcf282447->enter($__internal_8161d13c01f15760c826ef1b717921e0b7f6f3d38060ba43c213e53dcf282447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_8161d13c01f15760c826ef1b717921e0b7f6f3d38060ba43c213e53dcf282447->leave($__internal_8161d13c01f15760c826ef1b717921e0b7f6f3d38060ba43c213e53dcf282447_prof);

        
        $__internal_5b8b4a6e533911ae4a3cc96d0cf0911d9e1bef604b0ea668555c6ec95c34eefe->leave($__internal_5b8b4a6e533911ae4a3cc96d0cf0911d9e1bef604b0ea668555c6ec95c34eefe_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "D:\\xamppNew\\htdocs\\mtl_project\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
