<?php

/* gesGfctBundle:Default:login.html.twig */
class __TwigTemplate_8552946f3b346f938fcafcb899fe10494c9dda4cf611ac6094de44804d363eed extends Twig_Template
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
        $__internal_c68b40895cb817a1d74c245a121954e386bbe655c9a8799742aa1ff9a51fad5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c68b40895cb817a1d74c245a121954e386bbe655c9a8799742aa1ff9a51fad5f->enter($__internal_c68b40895cb817a1d74c245a121954e386bbe655c9a8799742aa1ff9a51fad5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gesGfctBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c68b40895cb817a1d74c245a121954e386bbe655c9a8799742aa1ff9a51fad5f->leave($__internal_c68b40895cb817a1d74c245a121954e386bbe655c9a8799742aa1ff9a51fad5f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8fdf07714c493f8fa3a9f4541bf0dc1dcc309564b6ae3d3c0484e1aa98519346 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fdf07714c493f8fa3a9f4541bf0dc1dcc309564b6ae3d3c0484e1aa98519346->enter($__internal_8fdf07714c493f8fa3a9f4541bf0dc1dcc309564b6ae3d3c0484e1aa98519346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gesGfctBundle:Default:login.html.twig"));

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
        
        $__internal_8fdf07714c493f8fa3a9f4541bf0dc1dcc309564b6ae3d3c0484e1aa98519346->leave($__internal_8fdf07714c493f8fa3a9f4541bf0dc1dcc309564b6ae3d3c0484e1aa98519346_prof);

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
", "gesGfctBundle:Default:login.html.twig", "C:\\xampp\\symfony\\GFCT\\src\\gesGfctBundle/Resources/views/Default/login.html.twig");
    }
}
