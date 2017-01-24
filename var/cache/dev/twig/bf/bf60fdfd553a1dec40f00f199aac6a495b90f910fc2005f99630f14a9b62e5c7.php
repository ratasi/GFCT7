<?php

/* gesGfctBundle:Default:register.html.twig */
class __TwigTemplate_f3126462ab78d19046dfcb7f3de7b092aabe0607f2a3060380b156b08e654266 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "gesGfctBundle:Default:register.html.twig", 2);
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
        $__internal_cd57fb86bf5eaee4db3b132f0f81a0f5eecc340a252049aeebac6bf490a88a28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd57fb86bf5eaee4db3b132f0f81a0f5eecc340a252049aeebac6bf490a88a28->enter($__internal_cd57fb86bf5eaee4db3b132f0f81a0f5eecc340a252049aeebac6bf490a88a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gesGfctBundle:Default:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd57fb86bf5eaee4db3b132f0f81a0f5eecc340a252049aeebac6bf490a88a28->leave($__internal_cd57fb86bf5eaee4db3b132f0f81a0f5eecc340a252049aeebac6bf490a88a28_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ae277ff377e569ae74969256719a223144f58c66032f94a7cd0ec05e97b113d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ae277ff377e569ae74969256719a223144f58c66032f94a7cd0ec05e97b113d->enter($__internal_1ae277ff377e569ae74969256719a223144f58c66032f94a7cd0ec05e97b113d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gesGfctBundle:Default:register.html.twig"));

        // line 4
        echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\">Panel de registro</div>
     <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/simple-sidebar.css"), "html", null, true);
        echo "\">


  <body>
    <div class=\"contenedor\">

    </div>

";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
  ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
  ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
  ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row');
        echo "
  ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row');
        echo "
  ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Salvar", array()), 'row');
        echo "
  ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Borrar", array()), 'row');
        echo "
";
        // line 21
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_1ae277ff377e569ae74969256719a223144f58c66032f94a7cd0ec05e97b113d->leave($__internal_1ae277ff377e569ae74969256719a223144f58c66032f94a7cd0ec05e97b113d_prof);

    }

    public function getTemplateName()
    {
        return "gesGfctBundle:Default:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 21,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  55 => 14,  44 => 6,  40 => 4,  34 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends '::base.html.twig' %}
{% block body %}
<div class=\"panel panel-default\">
  <div class=\"panel-heading\">Panel de registro</div>
     <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('css/simple-sidebar.css')}}\">


  <body>
    <div class=\"contenedor\">

    </div>

{{ form_start(form) }}
  {{ form_row(form.username) }}
  {{ form_row(form.email) }}
  {{ form_row(form.plainPassword.first) }}
  {{ form_row(form.plainPassword.second) }}
  {{form_row(form.Salvar) }}
  {{ form_row(form.Borrar) }}
{{ form_end(form) }}
{% endblock %}
", "gesGfctBundle:Default:register.html.twig", "C:\\xampp\\symfony\\GFCT\\src\\gesGfctBundle/Resources/views/Default/register.html.twig");
    }
}
