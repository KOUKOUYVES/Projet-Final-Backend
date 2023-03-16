<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base1.html.twig */
class __TwigTemplate_3e61b7dc961fc6ce438275bc408db894 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'test' => [$this, 'block_test'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base1.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
    <style>
        @import \"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700\";
        body{font-family: 'Poppins', sans-serif;background: #fafafa}
        p{font-size: 1.1em;font-weight: 300;line-height: 1.7em;color:#999}
        a, a:hover, a:focus{color:inherit;text-decoration: none;transition: all 0.3s}
        .navbar{padding:15px 10px;background: #fff;border:none;border-radius: 0;margin-bottom: 40px;box-shadow: 1px 1px 3px rgba(0,0,0,0.1)}
        .navbar-btn{box-shadow: none;outline:none !important;border:none}
        .line{width:100%;height:1px;border-bottom: 1px dashed #ddd}
        .wrapper{display: flex;width:100%;align-items:stretch}
        #sidebar{min-width:250px;max-width: 250px;background: #005086;color:#fff;transition: all 0.3s}
        #sidebar.active{margin-left:-250px}
        #sidebar .sidebar-header{padding:20px;background: #005086}
        #sidebar ul.components{padding:20px 0px;border-bottom:1px solid #47748b}
        #sidebar ul p{padding:10px;font-size:15px;display: block;color:#fff}
        #sidebar ul li a{padding:10px;font-size: 1.1em;display: block}
        #sidebar ul li a:hover{color:#fff;background: #318fb5}
        #sidebar ul li.active>a, a[aria-expanded=\"true\"]{color:#fff;background: #318fb5}a[data-toggle=\"collapse\"]{position: relative}
        .dropdown-toggle::after{display: block;position: absolute;top:50%;right:20px;transform: translateY(-50%)}
        ul ul a{font-size:0.9em !important;padding-left: 30px !important;background: #318fb5}
        ul.CTAs{padding:20px}
        ul.CTAs a{text-align: center;font-size:0.9em !important;display: block;border-radius: 5px;margin-bottom:5px}
        a.download, a.download:hover{background:#318fb5;color:#fff}
        #content{width:100%;padding:20px;min-height: 100vh;transition: all 0.3s}
        .content-wrapper{padding:15px}
        @media(maz-width:768px)
        #sidebar{margin-left:-250px}
        #sidebar.active{margin-left:0px;}
        #sidebarCollapse span{display:none;}
</style>
        <meta charset=\"UTF-8\">
        <title>";
        // line 34
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css\" integrity=\"sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N\" crossorigin=\"anonymous\">
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        ";
        // line 38
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 41
        echo "
        ";
        // line 42
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "    </head>
    <body>
    <div class=\"wrapper\">\t
                <nav id=\"sidebar\">\t
                    <div class=\"sidebar-header\">\t
                        <h3>ADMIN</h3>\t
                        <hr>\t
                    </div>\t
                    <ul class=\"list-unstyled components\">\t
                            <li><a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_user");
        echo "\">Gestion des users</a></li>
                            <li><a href=\"\">Gestion des rapports</a></li>
\t
                    </ul>\t
                
                        <ul class=\"list-unstyled CTAs\">
                                <li>
                                    <a href=\"#\" class=\"download\">Deconnexion</a>\t
                                </li>\t
                        </ul>\t
                </nav>\t

                
                <div class=\"content container-fluid\">\t
                    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">\t
                            <i class=\"fa fa-align-justify\"></i>\t
                        </button>
                         <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"> <span class=\"navbar-toggler-icon\"></span> </button>
                          <div class=\"collapse navbar-collapse\" id=\"navbarNav\"> 
                              <ul class=\"navbar-nav ml-auto\"> <li class=\"nav-item active\"> 
                                  <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a> </li> 
                                  <li class=\"nav-item\"> <a class=\"nav-link\" href=\"#\">Features</a> </li> <li class=\"nav-item\">
                                       <a class=\"nav-link\" href=\"#\">Pricing</a> </li> <li class=\"nav-item\"> <a class=\"nav-link\" href=\"#\">Contact</a>
                                    </li> 
                                </ul> 
                            </div>\t
                    </nav>
                        <div class=\"content-wrapper\"> 
                                    ";
        // line 84
        $this->displayBlock('test', $context, $blocks);
        // line 87
        echo "                        </div>\t
                </div> 
</div>
        ";
        // line 90
        $this->displayBlock('body', $context, $blocks);
        // line 93
        echo "    </body>
    <footer>hghgghggjgj</footer>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 34
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 38
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 39
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "
        <script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>
            ";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 84
    public function block_test($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "test"));

        // line 85
        echo "            
                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 90
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 91
        echo "        
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "base1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 91,  220 => 90,  212 => 85,  205 => 84,  196 => 45,  192 => 43,  185 => 42,  175 => 39,  168 => 38,  155 => 34,  145 => 93,  143 => 90,  138 => 87,  136 => 84,  105 => 56,  94 => 47,  92 => 42,  89 => 41,  86 => 38,  80 => 34,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
    <style>
        @import \"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700\";
        body{font-family: 'Poppins', sans-serif;background: #fafafa}
        p{font-size: 1.1em;font-weight: 300;line-height: 1.7em;color:#999}
        a, a:hover, a:focus{color:inherit;text-decoration: none;transition: all 0.3s}
        .navbar{padding:15px 10px;background: #fff;border:none;border-radius: 0;margin-bottom: 40px;box-shadow: 1px 1px 3px rgba(0,0,0,0.1)}
        .navbar-btn{box-shadow: none;outline:none !important;border:none}
        .line{width:100%;height:1px;border-bottom: 1px dashed #ddd}
        .wrapper{display: flex;width:100%;align-items:stretch}
        #sidebar{min-width:250px;max-width: 250px;background: #005086;color:#fff;transition: all 0.3s}
        #sidebar.active{margin-left:-250px}
        #sidebar .sidebar-header{padding:20px;background: #005086}
        #sidebar ul.components{padding:20px 0px;border-bottom:1px solid #47748b}
        #sidebar ul p{padding:10px;font-size:15px;display: block;color:#fff}
        #sidebar ul li a{padding:10px;font-size: 1.1em;display: block}
        #sidebar ul li a:hover{color:#fff;background: #318fb5}
        #sidebar ul li.active>a, a[aria-expanded=\"true\"]{color:#fff;background: #318fb5}a[data-toggle=\"collapse\"]{position: relative}
        .dropdown-toggle::after{display: block;position: absolute;top:50%;right:20px;transform: translateY(-50%)}
        ul ul a{font-size:0.9em !important;padding-left: 30px !important;background: #318fb5}
        ul.CTAs{padding:20px}
        ul.CTAs a{text-align: center;font-size:0.9em !important;display: block;border-radius: 5px;margin-bottom:5px}
        a.download, a.download:hover{background:#318fb5;color:#fff}
        #content{width:100%;padding:20px;min-height: 100vh;transition: all 0.3s}
        .content-wrapper{padding:15px}
        @media(maz-width:768px)
        #sidebar{margin-left:-250px}
        #sidebar.active{margin-left:0px;}
        #sidebarCollapse span{display:none;}
</style>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css\" integrity=\"sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N\" crossorigin=\"anonymous\">
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}

        {% block javascripts %}

        <script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>
            {{ encore_entry_script_tags('app') }}
        {% endblock %}
    </head>
    <body>
    <div class=\"wrapper\">\t
                <nav id=\"sidebar\">\t
                    <div class=\"sidebar-header\">\t
                        <h3>ADMIN</h3>\t
                        <hr>\t
                    </div>\t
                    <ul class=\"list-unstyled components\">\t
                            <li><a href=\"{{ path('dashboard_user') }}\">Gestion des users</a></li>
                            <li><a href=\"\">Gestion des rapports</a></li>
\t
                    </ul>\t
                
                        <ul class=\"list-unstyled CTAs\">
                                <li>
                                    <a href=\"#\" class=\"download\">Deconnexion</a>\t
                                </li>\t
                        </ul>\t
                </nav>\t

                
                <div class=\"content container-fluid\">\t
                    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">\t
                            <i class=\"fa fa-align-justify\"></i>\t
                        </button>
                         <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"> <span class=\"navbar-toggler-icon\"></span> </button>
                          <div class=\"collapse navbar-collapse\" id=\"navbarNav\"> 
                              <ul class=\"navbar-nav ml-auto\"> <li class=\"nav-item active\"> 
                                  <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a> </li> 
                                  <li class=\"nav-item\"> <a class=\"nav-link\" href=\"#\">Features</a> </li> <li class=\"nav-item\">
                                       <a class=\"nav-link\" href=\"#\">Pricing</a> </li> <li class=\"nav-item\"> <a class=\"nav-link\" href=\"#\">Contact</a>
                                    </li> 
                                </ul> 
                            </div>\t
                    </nav>
                        <div class=\"content-wrapper\"> 
                                    {% block test %}
            
                                    {% endblock %}
                        </div>\t
                </div> 
</div>
        {% block body %}
        
        {% endblock %}
    </body>
    <footer>hghgghggjgj</footer>
</html>
", "base1.html.twig", "/home/armand/Bureau/ProjetFinal/ProjetBackend/templates/base1.html.twig");
    }
}
