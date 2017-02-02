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
        $__internal_d4718efd83ac8999de45adb2862767bba7eb9f9556b80acabd53589446c62b11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4718efd83ac8999de45adb2862767bba7eb9f9556b80acabd53589446c62b11->enter($__internal_d4718efd83ac8999de45adb2862767bba7eb9f9556b80acabd53589446c62b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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

                    ";
        // line 42
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 43
            echo "                    <li>
                        <a href=\"/admin\">Admin</a>
                    </li>
                    ";
        }
        // line 47
        echo "                    
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id=\"page-content-wrapper\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        ";
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 57
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
        // line 80
        $this->displayBlock('javascripts', $context, $blocks);
        // line 81
        echo "</html>
";
        
        $__internal_d4718efd83ac8999de45adb2862767bba7eb9f9556b80acabd53589446c62b11->leave($__internal_d4718efd83ac8999de45adb2862767bba7eb9f9556b80acabd53589446c62b11_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6ae785faa4f39ab3b86be608f0ad824cc0534bba440588f707f0ec116094e7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6ae785faa4f39ab3b86be608f0ad824cc0534bba440588f707f0ec116094e7e->enter($__internal_c6ae785faa4f39ab3b86be608f0ad824cc0534bba440588f707f0ec116094e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        echo "GFCT";
        
        $__internal_c6ae785faa4f39ab3b86be608f0ad824cc0534bba440588f707f0ec116094e7e->leave($__internal_c6ae785faa4f39ab3b86be608f0ad824cc0534bba440588f707f0ec116094e7e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_62fbe255dc5918fd75c0f56147580b3ef6b1b1ff2b586d2c1039542bbcf7381d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62fbe255dc5918fd75c0f56147580b3ef6b1b1ff2b586d2c1039542bbcf7381d->enter($__internal_62fbe255dc5918fd75c0f56147580b3ef6b1b1ff2b586d2c1039542bbcf7381d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" media=\"screen\" title=\"no title\">
        <link href=\"https://fonts.googleapis.com/css?family=Inconsolata\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" media=\"screen\" title=\"no title\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/simple-sidebar.css"), "html", null, true);
        echo "\" media=\"screen\" title=\"no title\">
      ";
        
        $__internal_62fbe255dc5918fd75c0f56147580b3ef6b1b1ff2b586d2c1039542bbcf7381d->leave($__internal_62fbe255dc5918fd75c0f56147580b3ef6b1b1ff2b586d2c1039542bbcf7381d_prof);

    }

    // line 56
    public function block_body($context, array $blocks = array())
    {
        $__internal_012cef5cf541c6ff2aaba68557abc632a689348d29e30f55bb93536806d56a01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_012cef5cf541c6ff2aaba68557abc632a689348d29e30f55bb93536806d56a01->enter($__internal_012cef5cf541c6ff2aaba68557abc632a689348d29e30f55bb93536806d56a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_012cef5cf541c6ff2aaba68557abc632a689348d29e30f55bb93536806d56a01->leave($__internal_012cef5cf541c6ff2aaba68557abc632a689348d29e30f55bb93536806d56a01_prof);

    }

    // line 80
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1bc8da688763661a5f29ff74b233df644cc61bfeeaa297c4205f281f6b7fe3ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bc8da688763661a5f29ff74b233df644cc61bfeeaa297c4205f281f6b7fe3ab->enter($__internal_1bc8da688763661a5f29ff74b233df644cc61bfeeaa297c4205f281f6b7fe3ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_1bc8da688763661a5f29ff74b233df644cc61bfeeaa297c4205f281f6b7fe3ab->leave($__internal_1bc8da688763661a5f29ff74b233df644cc61bfeeaa297c4205f281f6b7fe3ab_prof);

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
        return array (  186 => 80,  175 => 56,  166 => 10,  161 => 7,  155 => 6,  143 => 5,  135 => 81,  133 => 80,  108 => 57,  106 => 56,  95 => 47,  89 => 43,  87 => 42,  81 => 39,  75 => 36,  69 => 33,  63 => 30,  57 => 27,  38 => 12,  36 => 6,  32 => 5,  26 => 1,);
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

                    {% if is_granted('ROLE_ADMIN') %}
                    <li>
                        <a href=\"/admin\">Admin</a>
                    </li>
                    {% endif %}
                    
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
