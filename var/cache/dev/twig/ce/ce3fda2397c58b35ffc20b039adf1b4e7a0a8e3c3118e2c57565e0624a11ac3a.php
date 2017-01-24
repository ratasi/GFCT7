<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3ad28a99a80950a34cb10efb8b9cd9e3695fe5e52d4f2dec21757f77d6349e26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b35fef84bae21f609317940713e37ec5240accf03c1025dfa4482e49698c579e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b35fef84bae21f609317940713e37ec5240accf03c1025dfa4482e49698c579e->enter($__internal_b35fef84bae21f609317940713e37ec5240accf03c1025dfa4482e49698c579e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b35fef84bae21f609317940713e37ec5240accf03c1025dfa4482e49698c579e->leave($__internal_b35fef84bae21f609317940713e37ec5240accf03c1025dfa4482e49698c579e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cb8f90778de69e7b0b8cf77702687bb4538ce16cc262ef221e91befd46f056ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb8f90778de69e7b0b8cf77702687bb4538ce16cc262ef221e91befd46f056ad->enter($__internal_cb8f90778de69e7b0b8cf77702687bb4538ce16cc262ef221e91befd46f056ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_cb8f90778de69e7b0b8cf77702687bb4538ce16cc262ef221e91befd46f056ad->leave($__internal_cb8f90778de69e7b0b8cf77702687bb4538ce16cc262ef221e91befd46f056ad_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d0e63dbf2fac05181522434da8734c32ea23f9671f7742a32defd20d1f3f3317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0e63dbf2fac05181522434da8734c32ea23f9671f7742a32defd20d1f3f3317->enter($__internal_d0e63dbf2fac05181522434da8734c32ea23f9671f7742a32defd20d1f3f3317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d0e63dbf2fac05181522434da8734c32ea23f9671f7742a32defd20d1f3f3317->leave($__internal_d0e63dbf2fac05181522434da8734c32ea23f9671f7742a32defd20d1f3f3317_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_df5af4f4daf430904fb9e78e0429e372c2218def82f14162348d7200536284d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df5af4f4daf430904fb9e78e0429e372c2218def82f14162348d7200536284d5->enter($__internal_df5af4f4daf430904fb9e78e0429e372c2218def82f14162348d7200536284d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_df5af4f4daf430904fb9e78e0429e372c2218def82f14162348d7200536284d5->leave($__internal_df5af4f4daf430904fb9e78e0429e372c2218def82f14162348d7200536284d5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\symfony\\GFCT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
