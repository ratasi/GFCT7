<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_246bac8643b9c4d54d0d179be8c9a6ddb7864d9e7f962d216621e3da622e7b2a extends Twig_Template
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
        $__internal_345f007faef3f19be75ec27de8bca077b8ec39a22ac7e27c037d19b013fd2a27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_345f007faef3f19be75ec27de8bca077b8ec39a22ac7e27c037d19b013fd2a27->enter($__internal_345f007faef3f19be75ec27de8bca077b8ec39a22ac7e27c037d19b013fd2a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_345f007faef3f19be75ec27de8bca077b8ec39a22ac7e27c037d19b013fd2a27->leave($__internal_345f007faef3f19be75ec27de8bca077b8ec39a22ac7e27c037d19b013fd2a27_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3a30c9f5c0fb0791f6463d337770e6ee099a447176998503ac2783b3999e6f8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a30c9f5c0fb0791f6463d337770e6ee099a447176998503ac2783b3999e6f8e->enter($__internal_3a30c9f5c0fb0791f6463d337770e6ee099a447176998503ac2783b3999e6f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3a30c9f5c0fb0791f6463d337770e6ee099a447176998503ac2783b3999e6f8e->leave($__internal_3a30c9f5c0fb0791f6463d337770e6ee099a447176998503ac2783b3999e6f8e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ab41b2a689cc3d40d10b9ed9c95d703f2b8329540508bd42633675bcea70b67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ab41b2a689cc3d40d10b9ed9c95d703f2b8329540508bd42633675bcea70b67->enter($__internal_8ab41b2a689cc3d40d10b9ed9c95d703f2b8329540508bd42633675bcea70b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8ab41b2a689cc3d40d10b9ed9c95d703f2b8329540508bd42633675bcea70b67->leave($__internal_8ab41b2a689cc3d40d10b9ed9c95d703f2b8329540508bd42633675bcea70b67_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8db3528a9e2e6cfb998fe071bb2037e0b917404387ef8faa5cda1e2fee2e9ee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8db3528a9e2e6cfb998fe071bb2037e0b917404387ef8faa5cda1e2fee2e9ee9->enter($__internal_8db3528a9e2e6cfb998fe071bb2037e0b917404387ef8faa5cda1e2fee2e9ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8db3528a9e2e6cfb998fe071bb2037e0b917404387ef8faa5cda1e2fee2e9ee9->leave($__internal_8db3528a9e2e6cfb998fe071bb2037e0b917404387ef8faa5cda1e2fee2e9ee9_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\symfony\\GFCT6-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
