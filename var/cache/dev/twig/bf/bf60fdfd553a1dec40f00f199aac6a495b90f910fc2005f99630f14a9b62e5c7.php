<?php

/* gesGfctBundle:Default:register.html.twig */
class __TwigTemplate_f3126462ab78d19046dfcb7f3de7b092aabe0607f2a3060380b156b08e654266 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_185d18c4bc272e31a64aa90bf57840e2e0606d3d58ba4627b623ac47bb4be05c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_185d18c4bc272e31a64aa90bf57840e2e0606d3d58ba4627b623ac47bb4be05c->enter($__internal_185d18c4bc272e31a64aa90bf57840e2e0606d3d58ba4627b623ac47bb4be05c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gesGfctBundle:Default:register.html.twig"));

        // line 1
        echo "<style type=\"text/css\">
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
        border: 1px solid #ccc;
        vertical-align: middle;
        display: inline-block;
    }
    #login .checkbox .label {
        color: #6d6d6d;
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
        color: #fff;
        background-color: #F78536;
    }
    .btn-custom:hover,
    .btn-custom:focus {
        color: #fff;
    }
</style>


<link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">


";
        // line 80
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

<section id=\"login\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"form-wrap\">
                    <h1>Crear una cuenta</h1>
                    <form>
                    <div class=\"form-group\">
                        ";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
                        ";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nombre de usuario")));
        echo "
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                        ";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Email")));
        echo "
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
                        ";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Contraseña")));
        echo "
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
                        ";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Confirmar contraseña")));
        echo "
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Salvar", array()), 'widget', array("attr" => array("class" => "btn btn-custom btn-lg btn-block")));
        echo "
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Borrar", array()), 'widget', array("attr" => array("class" => "btn btn-custom btn-lg btn-block")));
        echo "
                        </form>
                    </div>

                    <p><a class=\"forget\" href=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/usuarios/login"), "html", null, true);
        echo "\">¿Ya te has registrado? Inicia sesión</a></p>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 123
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_185d18c4bc272e31a64aa90bf57840e2e0606d3d58ba4627b623ac47bb4be05c->leave($__internal_185d18c4bc272e31a64aa90bf57840e2e0606d3d58ba4627b623ac47bb4be05c_prof);

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
        return array (  182 => 123,  174 => 118,  167 => 114,  160 => 110,  153 => 106,  149 => 105,  142 => 101,  138 => 100,  131 => 96,  127 => 95,  120 => 91,  116 => 90,  103 => 80,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<style type=\"text/css\">
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
        border: 1px solid #ccc;
        vertical-align: middle;
        display: inline-block;
    }
    #login .checkbox .label {
        color: #6d6d6d;
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
        color: #fff;
        background-color: #F78536;
    }
    .btn-custom:hover,
    .btn-custom:focus {
        color: #fff;
    }
</style>


<link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">


{{ form_start(form) }}

<section id=\"login\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"form-wrap\">
                    <h1>Crear una cuenta</h1>
                    <form>
                    <div class=\"form-group\">
                        {{ form_errors(form.username) }}
                        {{ form_widget(form.username, {'attr': {'class': 'form-control','placeholder': 'Nombre de usuario'}}) }}
                    </div>

                    <div class=\"form-group\">
                        {{ form_errors(form.email) }}
                        {{ form_widget(form.email, {'attr': {'class': 'form-control','placeholder': 'Email'}}) }}
                    </div>

                    <div class=\"form-group\">
                        {{ form_errors(form.plainPassword.first) }}
                        {{ form_widget(form.plainPassword.first, {'attr': {'class': 'form-control','placeholder': 'Contraseña'}}) }}
                    </div>

                    <div class=\"form-group\">
                        {{ form_errors(form.plainPassword.second) }}
                        {{ form_widget(form.plainPassword.second, {'attr': {'class': 'form-control','placeholder': 'Confirmar contraseña'}}) }}
                    </div>

                    <div class=\"form-group\">
                        {{ form_widget(form.Salvar, {'attr': {'class': 'btn btn-custom btn-lg btn-block'}}) }}
                    </div>

                    <div class=\"form-group\">
                        {{ form_widget(form.Borrar, {'attr': {'class': 'btn btn-custom btn-lg btn-block'}}) }}
                        </form>
                    </div>

                    <p><a class=\"forget\" href=\"{{asset('/usuarios/login')}}\">¿Ya te has registrado? Inicia sesión</a></p>
                </div>
            </div>
        </div>
    </div>
    {{ form_end(form) }}
", "gesGfctBundle:Default:register.html.twig", "C:\\xampp\\symfony\\GFCT\\src\\gesGfctBundle/Resources/views/Default/register.html.twig");
    }
}
