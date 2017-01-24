<?php

/* gesGfctBundle:Default:login.html.twig */
class __TwigTemplate_cabf61da9db16ef570259104e7120c36a2ac2e5c5a9bd0c8e71779aeba108dfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "gesGfctBundle:Default:login.html.twig", 2);
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
        $__internal_5db3bdc2e930004317f7835aedb59d73074be2c66e91cc0a6fec71d0866e8bdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5db3bdc2e930004317f7835aedb59d73074be2c66e91cc0a6fec71d0866e8bdf->enter($__internal_5db3bdc2e930004317f7835aedb59d73074be2c66e91cc0a6fec71d0866e8bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gesGfctBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5db3bdc2e930004317f7835aedb59d73074be2c66e91cc0a6fec71d0866e8bdf->leave($__internal_5db3bdc2e930004317f7835aedb59d73074be2c66e91cc0a6fec71d0866e8bdf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_473419aa745b1c1c776272254beb2a710e80af359e0199b54bc841128ace56bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_473419aa745b1c1c776272254beb2a710e80af359e0199b54bc841128ace56bd->enter($__internal_473419aa745b1c1c776272254beb2a710e80af359e0199b54bc841128ace56bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gesGfctBundle:Default:login.html.twig"));

        // line 4
        echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\">Panel de login </div>
     <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/simple-sidebar.css"), "html", null, true);
        echo "\">


    <body>
      <div class=\"contenedor\">

      </div>

      ";
        // line 16
        echo "      ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 17
            echo "          <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
      ";
        }
        // line 19
        echo "
      <form action=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuarios");
        echo "\" method=\"post\">
          <label for=\"username\">Username:</label>
          <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
          <p>
          <label for=\"password\">Password:</label>
          <input type=\"password\" id=\"password\" name=\"_password\" /><p>

          ";
        // line 32
        echo "
          <button type=\"submit\">login</button>
      </form>

";
        
        $__internal_473419aa745b1c1c776272254beb2a710e80af359e0199b54bc841128ace56bd->leave($__internal_473419aa745b1c1c776272254beb2a710e80af359e0199b54bc841128ace56bd_prof);

    }

    public function getTemplateName()
    {
        return "gesGfctBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 32,  72 => 22,  67 => 20,  64 => 19,  58 => 17,  55 => 16,  44 => 6,  40 => 4,  34 => 3,  11 => 2,);
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
  <div class=\"panel-heading\">Panel de login </div>
     <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('css/simple-sidebar.css')}}\">


    <body>
      <div class=\"contenedor\">

      </div>

      {# app/Resources/views/security/login.html.twig #}
{# ... you will probably extend your base template, like base.html.twig #}
      {% if error %}
          <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
      {% endif %}

      <form action=\"{{ path('usuarios') }}\" method=\"post\">
          <label for=\"username\">Username:</label>
          <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />
          <p>
          <label for=\"password\">Password:</label>
          <input type=\"password\" id=\"password\" name=\"_password\" /><p>

          {#
              If you want to control the URL the user
              is redirected to on success (more details below)
              <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
          #}

          <button type=\"submit\">login</button>
      </form>

{% endblock %}
", "gesGfctBundle:Default:login.html.twig", "C:\\xampp\\symfony\\GFCT6-master\\src\\gesGfctBundle/Resources/views/Default/login.html.twig");
    }
}
