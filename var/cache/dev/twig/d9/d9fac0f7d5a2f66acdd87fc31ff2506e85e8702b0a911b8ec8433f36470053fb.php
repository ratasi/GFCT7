<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ac530fd336f30a45bda0b3d6481a0730449c1de06b323efe838b3b114dca36a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3288be185c258981284f90e4649ae24c6de804c8098a19d3f69c0838d49499d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3288be185c258981284f90e4649ae24c6de804c8098a19d3f69c0838d49499d9->enter($__internal_3288be185c258981284f90e4649ae24c6de804c8098a19d3f69c0838d49499d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3288be185c258981284f90e4649ae24c6de804c8098a19d3f69c0838d49499d9->leave($__internal_3288be185c258981284f90e4649ae24c6de804c8098a19d3f69c0838d49499d9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e357bf3b7380adb093558fc885cc50dbee204f53071625fd6ee1f661fed68601 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e357bf3b7380adb093558fc885cc50dbee204f53071625fd6ee1f661fed68601->enter($__internal_e357bf3b7380adb093558fc885cc50dbee204f53071625fd6ee1f661fed68601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e357bf3b7380adb093558fc885cc50dbee204f53071625fd6ee1f661fed68601->leave($__internal_e357bf3b7380adb093558fc885cc50dbee204f53071625fd6ee1f661fed68601_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0df5c5fcdf60b7fdabcb86380285d5a91f3c21b0f4f213b3ad54aa397b16af66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0df5c5fcdf60b7fdabcb86380285d5a91f3c21b0f4f213b3ad54aa397b16af66->enter($__internal_0df5c5fcdf60b7fdabcb86380285d5a91f3c21b0f4f213b3ad54aa397b16af66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0df5c5fcdf60b7fdabcb86380285d5a91f3c21b0f4f213b3ad54aa397b16af66->leave($__internal_0df5c5fcdf60b7fdabcb86380285d5a91f3c21b0f4f213b3ad54aa397b16af66_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e68e581cf9fce65191051d8ee9d25c5ff55c97f696a9567ce772e5ec024a18ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e68e581cf9fce65191051d8ee9d25c5ff55c97f696a9567ce772e5ec024a18ba->enter($__internal_e68e581cf9fce65191051d8ee9d25c5ff55c97f696a9567ce772e5ec024a18ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e68e581cf9fce65191051d8ee9d25c5ff55c97f696a9567ce772e5ec024a18ba->leave($__internal_e68e581cf9fce65191051d8ee9d25c5ff55c97f696a9567ce772e5ec024a18ba_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\symfony\\GFCT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
