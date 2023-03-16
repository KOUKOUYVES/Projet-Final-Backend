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

/* admin/index.html.twig */
class __TwigTemplate_0d2b1911c2c43168b37f8f7a197e8f79 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello ProjectController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
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
        #sidebar.active{margin-left:0px}
        #sidebarCollapse span{display:none;}
</style>

<div class=\"wrapper\">\t
    <nav id=\"sidebar\">\t
        <div class=\"sidebar-header\">\t
            <h3>ADMIN</h3>\t
            <hr>\t
            </div>\t
            <ul class=\"list-unstyled components\">\t
                <li >\t
                    <a href=\"#homeSubmenu\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">Gestion des users</a>\t
                    <ul class=\"collapse list-unstyled\" id=\"homeSubmenu\">\t
                        <li><a href=\"#\">Add Users</a></li>\t
                        <li><a href=\"#\">Liste Users</a></li>\t
                        <!--<li><a href=\"#\">Dashboard3</a></li>\t-->
                    </ul>\t
                </li>\t
                <!--<li><a href=\"#\">Users</a></li>-->
                <li>
                    <a href=\"#pageSubmenu\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">Subscribers</a>\t
                    <ul class=\"collapse list-unstyled\" id=\"pageSubmenu\">\t
                        <li><a href=\"#\">Active</a></li>\t
                        <li><a href=\"#\">Idle</a></li>\t
                        <li><a href=\"#\">Non Active</a></li>\t
                    </ul>\t
                </li>\t
                </ul>\t
                
                <ul class=\"list-unstyled CTAs\">
                    \t<li><a href=\"#\" class=\"download\">Subscribe</a>\t</li>\t
                </ul>\t</nav>\t
                <div class=\"content\">\t
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
                    <div class=\"content-wrapper\"> <h2>Collapsible Sidebar Using Bootstrap 4</h2> 
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Aliquam nulla facilisi cras fermentum odio eu. Eget nulla facilisi etiam dignissim diam quis enim. Et netus et malesuada fames ac turpis egestas integer eget. Tortor at risus viverra adipiscing at in tellus. Cras adipiscing enim eu turpis. Malesuada nunc vel risus commodo viverra. Enim nulla aliquet porttitor lacus luctus accumsan tortor posuere. Ac placerat vestibulum lectus mauris ultrices eros. In arcu cursus euismod quis viverra nibh cras. Non quam lacus suspendisse faucibus interdum posuere lorem ipsum. In fermentum posuere urna nec tincidunt praesent semper. Ultricies mi quis hendrerit dolor. Sit amet luctus venenatis lectus magna fringilla urna porttitor. Praesent tristique magna sit amet purus gravida quis. Enim nunc faucibus a pellentesque sit amet porttitor.
                                Amet justo donec enim diam vulputate. Aliquet eget sit amet tellus cras. Tincidunt arcu non sodales neque. Semper auctor neque vitae tempus quam. In massa tempor nec feugiat nisl pretium fusce id. Fames ac turpis egestas integer eget aliquet. Proin sagittis nisl rhoncus mattis rhoncus urna neque viverra. Ut sem nulla pharetra diam. Vitae tempus quam pellentesque nec nam aliquam sem. Eget duis at tellus at urna condimentum mattis. Tellus orci ac auctor augue mauris. Eget sit amet tellus cras adipiscing enim eu turpis. Nam aliquam sem et tortor. Ac tincidunt vitae semper quis lectus. Mollis nunc sed id semper risus in hendrerit. Tincidunt id aliquet risus feugiat. Massa eget egestas purus viverra accumsan in nisl.
                                Quis enim lobortis scelerisque fermentum. Ut diam quam nulla porttitor massa. Nunc sed id semper risus in. Mattis pellentesque id nibh tortor. Ac orci phasellus egestas tellus rutrum. Congue nisi vitae suscipit tellus mauris a diam. Facilisis volutpat est velit egestas. Quam viverra orci sagittis eu volutpat odio. Etiam dignissim diam quis enim lobortis. Sollicitudin nibh sit amet commodo nulla facilisi nullam vehicula. Sit amet luctus venenatis lectus. Mi eget mauris pharetra et ultrices neque. Sit amet cursus sit amet dictum sit amet. Eget lorem dolor sed viverra. Neque egestas congue quisque egestas diam. Vestibulum lectus mauris ultrices eros in cursus turpis. Et leo duis ut diam quam nulla. Egestas sed tempus urna et pharetra. Aliquam sem et tortor consequat id. Sollicitudin tempor id eu nisl nunc mi.
                        .</p> 
    <div class=\"line\"></div>
 </div>\t
 </div> 
 </div>

<script>
\$(document).ready(function(){
\t\t\t\$(\"#sidebarCollapse\").on('click', function(){
\t\t\t\t\$(\"#sidebar\").toggleClass('active');
\t\t\t});
\t\t});
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ProjectController!{% endblock %}

{% block body %}
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
        #sidebar.active{margin-left:0px}
        #sidebarCollapse span{display:none;}
</style>

<div class=\"wrapper\">\t
    <nav id=\"sidebar\">\t
        <div class=\"sidebar-header\">\t
            <h3>ADMIN</h3>\t
            <hr>\t
            </div>\t
            <ul class=\"list-unstyled components\">\t
                <li >\t
                    <a href=\"#homeSubmenu\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">Gestion des users</a>\t
                    <ul class=\"collapse list-unstyled\" id=\"homeSubmenu\">\t
                        <li><a href=\"#\">Add Users</a></li>\t
                        <li><a href=\"#\">Liste Users</a></li>\t
                        <!--<li><a href=\"#\">Dashboard3</a></li>\t-->
                    </ul>\t
                </li>\t
                <!--<li><a href=\"#\">Users</a></li>-->
                <li>
                    <a href=\"#pageSubmenu\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">Subscribers</a>\t
                    <ul class=\"collapse list-unstyled\" id=\"pageSubmenu\">\t
                        <li><a href=\"#\">Active</a></li>\t
                        <li><a href=\"#\">Idle</a></li>\t
                        <li><a href=\"#\">Non Active</a></li>\t
                    </ul>\t
                </li>\t
                </ul>\t
                
                <ul class=\"list-unstyled CTAs\">
                    \t<li><a href=\"#\" class=\"download\">Subscribe</a>\t</li>\t
                </ul>\t</nav>\t
                <div class=\"content\">\t
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
                    <div class=\"content-wrapper\"> <h2>Collapsible Sidebar Using Bootstrap 4</h2> 
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Aliquam nulla facilisi cras fermentum odio eu. Eget nulla facilisi etiam dignissim diam quis enim. Et netus et malesuada fames ac turpis egestas integer eget. Tortor at risus viverra adipiscing at in tellus. Cras adipiscing enim eu turpis. Malesuada nunc vel risus commodo viverra. Enim nulla aliquet porttitor lacus luctus accumsan tortor posuere. Ac placerat vestibulum lectus mauris ultrices eros. In arcu cursus euismod quis viverra nibh cras. Non quam lacus suspendisse faucibus interdum posuere lorem ipsum. In fermentum posuere urna nec tincidunt praesent semper. Ultricies mi quis hendrerit dolor. Sit amet luctus venenatis lectus magna fringilla urna porttitor. Praesent tristique magna sit amet purus gravida quis. Enim nunc faucibus a pellentesque sit amet porttitor.
                                Amet justo donec enim diam vulputate. Aliquet eget sit amet tellus cras. Tincidunt arcu non sodales neque. Semper auctor neque vitae tempus quam. In massa tempor nec feugiat nisl pretium fusce id. Fames ac turpis egestas integer eget aliquet. Proin sagittis nisl rhoncus mattis rhoncus urna neque viverra. Ut sem nulla pharetra diam. Vitae tempus quam pellentesque nec nam aliquam sem. Eget duis at tellus at urna condimentum mattis. Tellus orci ac auctor augue mauris. Eget sit amet tellus cras adipiscing enim eu turpis. Nam aliquam sem et tortor. Ac tincidunt vitae semper quis lectus. Mollis nunc sed id semper risus in hendrerit. Tincidunt id aliquet risus feugiat. Massa eget egestas purus viverra accumsan in nisl.
                                Quis enim lobortis scelerisque fermentum. Ut diam quam nulla porttitor massa. Nunc sed id semper risus in. Mattis pellentesque id nibh tortor. Ac orci phasellus egestas tellus rutrum. Congue nisi vitae suscipit tellus mauris a diam. Facilisis volutpat est velit egestas. Quam viverra orci sagittis eu volutpat odio. Etiam dignissim diam quis enim lobortis. Sollicitudin nibh sit amet commodo nulla facilisi nullam vehicula. Sit amet luctus venenatis lectus. Mi eget mauris pharetra et ultrices neque. Sit amet cursus sit amet dictum sit amet. Eget lorem dolor sed viverra. Neque egestas congue quisque egestas diam. Vestibulum lectus mauris ultrices eros in cursus turpis. Et leo duis ut diam quam nulla. Egestas sed tempus urna et pharetra. Aliquam sem et tortor consequat id. Sollicitudin tempor id eu nisl nunc mi.
                        .</p> 
    <div class=\"line\"></div>
 </div>\t
 </div> 
 </div>

<script>
\$(document).ready(function(){
\t\t\t\$(\"#sidebarCollapse\").on('click', function(){
\t\t\t\t\$(\"#sidebar\").toggleClass('active');
\t\t\t});
\t\t});
</script>
{% endblock %}", "admin/index.html.twig", "/home/armand/Bureau/ProjetFinal/ProjetBackend/templates/admin/index.html.twig");
    }
}
