<?php

/* gesGfctBundle:conf:register.html.twig */
class __TwigTemplate_c100ed242313920c9cd91785fd7446c5d4690b90b8a0d153ceaa43ef2cdf6ad8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "gesGfctBundle:conf:register.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3881f46d3730ad2947525b4f14c9b637034f7457135f980982a5bcf4f8e5cbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3881f46d3730ad2947525b4f14c9b637034f7457135f980982a5bcf4f8e5cbe->enter($__internal_a3881f46d3730ad2947525b4f14c9b637034f7457135f980982a5bcf4f8e5cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gesGfctBundle:conf:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3881f46d3730ad2947525b4f14c9b637034f7457135f980982a5bcf4f8e5cbe->leave($__internal_a3881f46d3730ad2947525b4f14c9b637034f7457135f980982a5bcf4f8e5cbe_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_658d574473dc2fe84f9969eaeb09b60ec10fb1e29de1306f5bef32d3a73e3fa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_658d574473dc2fe84f9969eaeb09b60ec10fb1e29de1306f5bef32d3a73e3fa1->enter($__internal_658d574473dc2fe84f9969eaeb09b60ec10fb1e29de1306f5bef32d3a73e3fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gesGfctBundle:conf:register.html.twig"));

        // line 3
        echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\">Panel de creación de configuración</div>
     <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/simple-sidebar.css"), "html", null, true);
        echo "\">


  <body>
    <div class=\"contenedor\">
    ";
        // line 10
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'form');
        echo "
    </div>
";
        
        $__internal_658d574473dc2fe84f9969eaeb09b60ec10fb1e29de1306f5bef32d3a73e3fa1->leave($__internal_658d574473dc2fe84f9969eaeb09b60ec10fb1e29de1306f5bef32d3a73e3fa1_prof);

    }

    public function getTemplateName()
    {
        return "gesGfctBundle:conf:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 10,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
{% block body %}
<div class=\"panel panel-default\">
  <div class=\"panel-heading\">Panel de creación de configuración</div>
     <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('css/simple-sidebar.css')}}\">


  <body>
    <div class=\"contenedor\">
    {{form(formulario)}}
    </div>
{% endblock %}
", "gesGfctBundle:conf:register.html.twig", "C:\\xampp\\symfony\\GFCT\\src\\gesGfctBundle/Resources/views/conf/register.html.twig");
    }
}
