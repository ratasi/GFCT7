<?php

/* ::base.html.twig */
class __TwigTemplate_02253ad41d2814326035cbd934a24651c2b57297bd24a4887b2bec87b65734a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4d8e1b73639e94c589c4f8b10e4f7695cba4b5541afb51b96c95f44d0b50c3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4d8e1b73639e94c589c4f8b10e4f7695cba4b5541afb51b96c95f44d0b50c3b->enter($__internal_a4d8e1b73639e94c589c4f8b10e4f7695cba4b5541afb51b96c95f44d0b50c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

        <div id=\"wrapper\">

            <!-- Sidebar -->
            <div id=\"sidebar-wrapper\">
                <ul class=\"sidebar-nav\">
                    <li class=\"sidebar-brand\">
                        <a href=\"#\">
                            Gestor de Empresas
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/alumno/all"), "html", null, true);
        echo "\">Alumnos</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/empresa/all"), "html", null, true);
        echo "\">Empresa</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/empresa/new"), "html", null, true);
        echo "\">Crear empresas</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/usuarios/"), "html", null, true);
        echo "\">Log in</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/register"), "html", null, true);
        echo "\">Registro Usuario</a>
                    </li>
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id=\"page-content-wrapper\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        ";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src=\"js/jquery.js\"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src=\"js/bootstrap.min.js\"></script>

        <!-- Menu Toggle Script -->
        <script>
        \$(\"#menu-toggle\").click(function(e) {
            e.preventDefault();
            \$(\"#wrapper\").toggleClass(\"toggled\");
        });
        </script>

    </body>
        ";
        // line 73
        $this->displayBlock('javascripts', $context, $blocks);
        // line 74
        echo "</html>
";
        
        $__internal_a4d8e1b73639e94c589c4f8b10e4f7695cba4b5541afb51b96c95f44d0b50c3b->leave($__internal_a4d8e1b73639e94c589c4f8b10e4f7695cba4b5541afb51b96c95f44d0b50c3b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c7e0c1bd69b19a7bb1e9999359238be2442f262a1d56a7981461c9131de9046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c7e0c1bd69b19a7bb1e9999359238be2442f262a1d56a7981461c9131de9046->enter($__internal_8c7e0c1bd69b19a7bb1e9999359238be2442f262a1d56a7981461c9131de9046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        echo "GFCT";
        
        $__internal_8c7e0c1bd69b19a7bb1e9999359238be2442f262a1d56a7981461c9131de9046->leave($__internal_8c7e0c1bd69b19a7bb1e9999359238be2442f262a1d56a7981461c9131de9046_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_423364bb530ee38270f5023aedef6e69252426fbb9ce008c8b97bce83202a79a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_423364bb530ee38270f5023aedef6e69252426fbb9ce008c8b97bce83202a79a->enter($__internal_423364bb530ee38270f5023aedef6e69252426fbb9ce008c8b97bce83202a79a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" media=\"screen\" title=\"no title\">
        <link href=\"https://fonts.googleapis.com/css?family=Inconsolata\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" media=\"screen\" title=\"no title\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/simple-sidebar.css"), "html", null, true);
        echo "\" media=\"screen\" title=\"no title\">
      ";
        
        $__internal_423364bb530ee38270f5023aedef6e69252426fbb9ce008c8b97bce83202a79a->leave($__internal_423364bb530ee38270f5023aedef6e69252426fbb9ce008c8b97bce83202a79a_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_0980b5e84541bc76ac7111db9cee5cf28b06d51b5272ae964504a6677135697a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0980b5e84541bc76ac7111db9cee5cf28b06d51b5272ae964504a6677135697a->enter($__internal_0980b5e84541bc76ac7111db9cee5cf28b06d51b5272ae964504a6677135697a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_0980b5e84541bc76ac7111db9cee5cf28b06d51b5272ae964504a6677135697a->leave($__internal_0980b5e84541bc76ac7111db9cee5cf28b06d51b5272ae964504a6677135697a_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9d58fe60b0cdbe30231662e8b02cce4a7cef850ebf362387fb40372e45db69b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d58fe60b0cdbe30231662e8b02cce4a7cef850ebf362387fb40372e45db69b3->enter($__internal_9d58fe60b0cdbe30231662e8b02cce4a7cef850ebf362387fb40372e45db69b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_9d58fe60b0cdbe30231662e8b02cce4a7cef850ebf362387fb40372e45db69b3->leave($__internal_9d58fe60b0cdbe30231662e8b02cce4a7cef850ebf362387fb40372e45db69b3_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 73,  163 => 49,  154 => 10,  149 => 7,  143 => 6,  131 => 5,  123 => 74,  121 => 73,  96 => 50,  94 => 49,  81 => 39,  75 => 36,  69 => 33,  63 => 30,  57 => 27,  38 => 12,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}GFCT{% endblock %}</title>
        {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" media=\"screen\" title=\"no title\">
        <link href=\"https://fonts.googleapis.com/css?family=Inconsolata\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" media=\"screen\" title=\"no title\">
        <link rel=\"stylesheet\" href=\"{{asset('css/simple-sidebar.css')}}\" media=\"screen\" title=\"no title\">
      {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>

        <div id=\"wrapper\">

            <!-- Sidebar -->
            <div id=\"sidebar-wrapper\">
                <ul class=\"sidebar-nav\">
                    <li class=\"sidebar-brand\">
                        <a href=\"#\">
                            Gestor de Empresas
                        </a>
                    </li>
                    <li>
                        <a href=\"{{asset('/alumno/all')}}\">Alumnos</a>
                    </li>
                    <li>
                        <a href=\"{{asset('/empresa/all')}}\">Empresa</a>
                    </li>
                    <li>
                        <a href=\"{{asset('/empresa/new')}}\">Crear empresas</a>
                    </li>
                    <li>
                        <a href=\"{{asset('/usuarios/')}}\">Log in</a>
                    </li>
                    <li>
                        <a href=\"{{asset('/register')}}\">Registro Usuario</a>
                    </li>
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id=\"page-content-wrapper\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        {% block body %}{% endblock %}
                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src=\"js/jquery.js\"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src=\"js/bootstrap.min.js\"></script>

        <!-- Menu Toggle Script -->
        <script>
        \$(\"#menu-toggle\").click(function(e) {
            e.preventDefault();
            \$(\"#wrapper\").toggleClass(\"toggled\");
        });
        </script>

    </body>
        {% block javascripts %}{% endblock %}
</html>
", "::base.html.twig", "C:\\xampp\\symfony\\GFCT\\app/Resources\\views/base.html.twig");
    }
}
