<?php

/* gesGfctBundle:conf:nuevo.html.twig */
class __TwigTemplate_bb9c64f7d6e11b3121cd0a4b95a556bdc050e568c06f47842662ba3af846f852 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "gesGfctBundle:conf:nuevo.html.twig", 1);
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
        $__internal_a86327bb64ee9a48d1e627fe8e3652762a89b617d883bc7f63595b824c47d012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a86327bb64ee9a48d1e627fe8e3652762a89b617d883bc7f63595b824c47d012->enter($__internal_a86327bb64ee9a48d1e627fe8e3652762a89b617d883bc7f63595b824c47d012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gesGfctBundle:conf:nuevo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a86327bb64ee9a48d1e627fe8e3652762a89b617d883bc7f63595b824c47d012->leave($__internal_a86327bb64ee9a48d1e627fe8e3652762a89b617d883bc7f63595b824c47d012_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba07472260f9c8ce27c090194ef5dc5c593a51b409f42cb58669ed21a9a5205f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba07472260f9c8ce27c090194ef5dc5c593a51b409f42cb58669ed21a9a5205f->enter($__internal_ba07472260f9c8ce27c090194ef5dc5c593a51b409f42cb58669ed21a9a5205f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gesGfctBundle:conf:nuevo.html.twig"));

        // line 3
        echo "  <body>
  <h1>Nueva configuración</h1><br>
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">Panel de configuraciones</div>
      <table class=\"table\">
        <tr>
          <th><b>Configuración</b></th>
          <th><b>Param</b></th>
        </tr>

        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["NumConf"]) ? $context["NumConf"] : $this->getContext($context, "NumConf")));
        foreach ($context['_seq'] as $context["_key"] => $context["conf"]) {
            // line 14
            echo "        <tr>
          <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["conf"], "configuration", array()), "html", null, true);
            echo "</th>
          <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["conf"], "param", array()), "html", null, true);
            echo "</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conf'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "      </table>
    </div>
    </div>
    </body>
    ";
        
        $__internal_ba07472260f9c8ce27c090194ef5dc5c593a51b409f42cb58669ed21a9a5205f->leave($__internal_ba07472260f9c8ce27c090194ef5dc5c593a51b409f42cb58669ed21a9a5205f_prof);

    }

    public function getTemplateName()
    {
        return "gesGfctBundle:conf:nuevo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  63 => 16,  59 => 15,  56 => 14,  52 => 13,  40 => 3,  34 => 2,  11 => 1,);
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
  <body>
  <h1>Nueva configuración</h1><br>
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">Panel de configuraciones</div>
      <table class=\"table\">
        <tr>
          <th><b>Configuración</b></th>
          <th><b>Param</b></th>
        </tr>

        {% for conf in NumConf %}
        <tr>
          <td>{{ conf.configuration}}</th>
          <td>{{ conf.param }}</td>
        </tr>
        {% endfor %}
      </table>
    </div>
    </div>
    </body>
    {% endblock %}
", "gesGfctBundle:conf:nuevo.html.twig", "C:\\xampp\\symfony\\GFCT\\src\\gesGfctBundle/Resources/views/conf/nuevo.html.twig");
    }
}
