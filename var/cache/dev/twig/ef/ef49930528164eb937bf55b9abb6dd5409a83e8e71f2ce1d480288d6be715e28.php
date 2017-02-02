<?php

/* gesGfctBundle:Default:login.html.twig */
class __TwigTemplate_8552946f3b346f938fcafcb899fe10494c9dda4cf611ac6094de44804d363eed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5396640fa2cbd32081536bdf60c3ef7c4e03720fc0c8378cbe02f880ffcce811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5396640fa2cbd32081536bdf60c3ef7c4e03720fc0c8378cbe02f880ffcce811->enter($__internal_5396640fa2cbd32081536bdf60c3ef7c4e03720fc0c8378cbe02f880ffcce811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gesGfctBundle:Default:login.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5396640fa2cbd32081536bdf60c3ef7c4e03720fc0c8378cbe02f880ffcce811->leave($__internal_5396640fa2cbd32081536bdf60c3ef7c4e03720fc0c8378cbe02f880ffcce811_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_b2c1e3162375baa9057b802963e879cf98ea6f0fa27cb1f06f76c992df1557b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2c1e3162375baa9057b802963e879cf98ea6f0fa27cb1f06f76c992df1557b7->enter($__internal_b2c1e3162375baa9057b802963e879cf98ea6f0fa27cb1f06f76c992df1557b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gesGfctBundle:Default:login.html.twig"));

        // line 2
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 3
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 5
        echo "
<style type=\"text/css\">
    /*    --------------------------------------------------
    :: Login Section
    -------------------------------------------------- */
#login {
    padding-top: 50px
}
#login .form-wrap {
    width: 30%;
    margin: 0 auto;
}
#login h1 {
    color: #F78536;
    font-size: 18px;
    text-align: center;
    font-weight: bold;
    padding-bottom: 20px;
}
#login .form-group {
    margin-bottom: 25px;
}
#login .checkbox {
    margin-bottom: 20px;
    position: relative;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    -o-user-select: none;
    user-select: none;
}
#login .checkbox.show:before {
    content: '\\e013';
    color: #F78536;
    font-size: 17px;
    margin: 1px 0 0 3px;
    position: absolute;
    pointer-events: none;
    font-family: 'Glyphicons Halflings';
}
#login .checkbox .character-checkbox {
    width: 25px;
    height: 25px;
    cursor: pointer;
    border-radius: 3px;
    border: 1px solid #F78536;
    vertical-align: middle;
    display: inline-block;
}
#login .checkbox .label {
    color: #F78536;
    font-size: 13px;
    font-weight: normal;
}
#login .btn.btn-custom {
    font-size: 14px;
    margin-bottom: 20px;
}
#login .forget {
    font-size: 13px;
    text-align: center;
    display: block;
}
/*    --------------------------------------------------
    :: Inputs & Buttons
    -------------------------------------------------- */
.form-control {
    color: #F78536;
}
.btn-custom {
    color: white;
    background-color: #F78536;
}
.btn-custom:hover,
.btn-custom:focus {
    color: white;
}

</style>
<body>
<link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
<form action=\"";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuarios");
        echo "\" method=\"post\">

    <section id=\"login\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"form-wrap\">
                <h1>Inicia sesión</h1>
                    <form>
                        <div class=\"form-group\">
                            <label for=\"username\" class=\"sr-only\">Nombre de usuario</label>
                            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"Nombre\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"key\" class=\"sr-only\">Contraseña</label>
                            <input type=\"password\" id=\"contraseña\" name=\"_password\" class=\"form-control\" placeholder=\"Contraseña\">
                        </div>
                        <input type=\"submit\" id=\"btn-login\" class=\"btn btn-custom btn-lg btn-block\" value=\"Log in\">
                    </form>
                    <a href=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/register"), "html", null, true);
        echo "\" class=\"forget\" data-toggle=\"modal\" data-target=\".forget-modal\">¿No tienes una cuenta? Regístrate</a>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</section>



</form>
</body>
";
        
        $__internal_b2c1e3162375baa9057b802963e879cf98ea6f0fa27cb1f06f76c992df1557b7->leave($__internal_b2c1e3162375baa9057b802963e879cf98ea6f0fa27cb1f06f76c992df1557b7_prof);

    }

    public function getTemplateName()
    {
        return "gesGfctBundle:Default:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  151 => 105,  140 => 97,  126 => 86,  43 => 5,  37 => 3,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block body %}
{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<style type=\"text/css\">
    /*    --------------------------------------------------
    :: Login Section
    -------------------------------------------------- */
#login {
    padding-top: 50px
}
#login .form-wrap {
    width: 30%;
    margin: 0 auto;
}
#login h1 {
    color: #F78536;
    font-size: 18px;
    text-align: center;
    font-weight: bold;
    padding-bottom: 20px;
}
#login .form-group {
    margin-bottom: 25px;
}
#login .checkbox {
    margin-bottom: 20px;
    position: relative;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    -o-user-select: none;
    user-select: none;
}
#login .checkbox.show:before {
    content: '\\e013';
    color: #F78536;
    font-size: 17px;
    margin: 1px 0 0 3px;
    position: absolute;
    pointer-events: none;
    font-family: 'Glyphicons Halflings';
}
#login .checkbox .character-checkbox {
    width: 25px;
    height: 25px;
    cursor: pointer;
    border-radius: 3px;
    border: 1px solid #F78536;
    vertical-align: middle;
    display: inline-block;
}
#login .checkbox .label {
    color: #F78536;
    font-size: 13px;
    font-weight: normal;
}
#login .btn.btn-custom {
    font-size: 14px;
    margin-bottom: 20px;
}
#login .forget {
    font-size: 13px;
    text-align: center;
    display: block;
}
/*    --------------------------------------------------
    :: Inputs & Buttons
    -------------------------------------------------- */
.form-control {
    color: #F78536;
}
.btn-custom {
    color: white;
    background-color: #F78536;
}
.btn-custom:hover,
.btn-custom:focus {
    color: white;
}

</style>
<body>
<link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
<form action=\"{{ path('usuarios') }}\" method=\"post\">

    <section id=\"login\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"form-wrap\">
                <h1>Inicia sesión</h1>
                    <form>
                        <div class=\"form-group\">
                            <label for=\"username\" class=\"sr-only\">Nombre de usuario</label>
                            <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" class=\"form-control\" placeholder=\"Nombre\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"key\" class=\"sr-only\">Contraseña</label>
                            <input type=\"password\" id=\"contraseña\" name=\"_password\" class=\"form-control\" placeholder=\"Contraseña\">
                        </div>
                        <input type=\"submit\" id=\"btn-login\" class=\"btn btn-custom btn-lg btn-block\" value=\"Log in\">
                    </form>
                    <a href=\"{{asset('/register')}}\" class=\"forget\" data-toggle=\"modal\" data-target=\".forget-modal\">¿No tienes una cuenta? Regístrate</a>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</section>



</form>
</body>
{% endblock %}
", "gesGfctBundle:Default:login.html.twig", "C:\\xampp\\symfony\\GFCT\\src\\gesGfctBundle/Resources/views/Default/login.html.twig");
    }
}
