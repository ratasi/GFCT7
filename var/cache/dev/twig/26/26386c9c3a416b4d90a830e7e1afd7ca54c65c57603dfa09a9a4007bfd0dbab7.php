<?php

/* gesGfctBundle:Empresa:new.html.twig */
class __TwigTemplate_4e7eb20884b0d503e6d91fb21ba0b7d29a86ad0c01bb7ee80891bbad27110a6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "gesGfctBundle:Empresa:new.html.twig", 1);
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
        $__internal_f4044672597a0507ed0e01dcfba559513b8ca2db4c62c9223ac79bfb57b41dc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4044672597a0507ed0e01dcfba559513b8ca2db4c62c9223ac79bfb57b41dc3->enter($__internal_f4044672597a0507ed0e01dcfba559513b8ca2db4c62c9223ac79bfb57b41dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gesGfctBundle:Empresa:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4044672597a0507ed0e01dcfba559513b8ca2db4c62c9223ac79bfb57b41dc3->leave($__internal_f4044672597a0507ed0e01dcfba559513b8ca2db4c62c9223ac79bfb57b41dc3_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a315832c78ec68f4044b13747108da33a792e51f0733a5ad0469c8324fe6d305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a315832c78ec68f4044b13747108da33a792e51f0733a5ad0469c8324fe6d305->enter($__internal_a315832c78ec68f4044b13747108da33a792e51f0733a5ad0469c8324fe6d305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gesGfctBundle:Empresa:new.html.twig"));

        // line 3
        echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\">Panel de creación de empresa</div>
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
        
        $__internal_a315832c78ec68f4044b13747108da33a792e51f0733a5ad0469c8324fe6d305->leave($__internal_a315832c78ec68f4044b13747108da33a792e51f0733a5ad0469c8324fe6d305_prof);

    }

    public function getTemplateName()
    {
        return "gesGfctBundle:Empresa:new.html.twig";
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
  <div class=\"panel-heading\">Panel de creación de empresa</div>
     <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('css/simple-sidebar.css')}}\">


  <body>
    <div class=\"contenedor\">
    {{form(formulario)}}
    </div>
{% endblock %}
", "gesGfctBundle:Empresa:new.html.twig", "C:\\xampp\\symfony\\GFCT\\src\\gesGfctBundle/Resources/views/Empresa/new.html.twig");
    }
}
