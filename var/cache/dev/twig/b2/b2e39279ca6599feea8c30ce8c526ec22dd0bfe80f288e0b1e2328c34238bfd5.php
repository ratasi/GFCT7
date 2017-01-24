<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_019d29f713a46f39524c19c0fab8b3328c525292b8e6ebeaa1e6164ae6b0b91e extends Twig_Template
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
        $__internal_c8262590436fa9dd4d782e536d06414a0de342fb3d608d6c33e2fae857ff57f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8262590436fa9dd4d782e536d06414a0de342fb3d608d6c33e2fae857ff57f7->enter($__internal_c8262590436fa9dd4d782e536d06414a0de342fb3d608d6c33e2fae857ff57f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8262590436fa9dd4d782e536d06414a0de342fb3d608d6c33e2fae857ff57f7->leave($__internal_c8262590436fa9dd4d782e536d06414a0de342fb3d608d6c33e2fae857ff57f7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4df8781efc9d6a0105f50229aa79a4ab396c4c6f71723538cf03ce51e2698357 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4df8781efc9d6a0105f50229aa79a4ab396c4c6f71723538cf03ce51e2698357->enter($__internal_4df8781efc9d6a0105f50229aa79a4ab396c4c6f71723538cf03ce51e2698357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_4df8781efc9d6a0105f50229aa79a4ab396c4c6f71723538cf03ce51e2698357->leave($__internal_4df8781efc9d6a0105f50229aa79a4ab396c4c6f71723538cf03ce51e2698357_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ddb539a21b8e082ce22aa42e48d351cb3f4e1314882c89df0dfedb1c89387b54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddb539a21b8e082ce22aa42e48d351cb3f4e1314882c89df0dfedb1c89387b54->enter($__internal_ddb539a21b8e082ce22aa42e48d351cb3f4e1314882c89df0dfedb1c89387b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ddb539a21b8e082ce22aa42e48d351cb3f4e1314882c89df0dfedb1c89387b54->leave($__internal_ddb539a21b8e082ce22aa42e48d351cb3f4e1314882c89df0dfedb1c89387b54_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7c8d3a9bd6ed2976c76985c36ec2d2032da5328628d30b1f35f7a5213eb4d2cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c8d3a9bd6ed2976c76985c36ec2d2032da5328628d30b1f35f7a5213eb4d2cb->enter($__internal_7c8d3a9bd6ed2976c76985c36ec2d2032da5328628d30b1f35f7a5213eb4d2cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7c8d3a9bd6ed2976c76985c36ec2d2032da5328628d30b1f35f7a5213eb4d2cb->leave($__internal_7c8d3a9bd6ed2976c76985c36ec2d2032da5328628d30b1f35f7a5213eb4d2cb_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\symfony\\GFCT6-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
