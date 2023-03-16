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

/* admin/user/index.html.twig */
class __TwigTemplate_ac775a81af00864c5f865e10c430a37e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'test' => [$this, 'block_test'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/user/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Project index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_test($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "test"));

        // line 6
        echo "    <div class=\"container-fluid\">
        <h2 class=\"text-center mt-5 mb-3\"></h2>
        <div class=\"card\">
            <!-- <div class=\"card-header\">
                <a class=\"btn btn-outline-primary\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\"> 
                    Create New Project 
                </a>
            </div> -->

            <div class=\"report-header\">
                <h1 class=\"recent-Articles\">Liste Users</h1>
                <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\"><button class=\"view\">Create New User</button></a> 
            </div>
            <div class=\"card-body\">
                <table class=\"table table-bordered\">
                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th width=\"330px\">Action</th>
                    </tr>
                    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 30
            echo "                    <tr>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "contact", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                        <td>
                                <a class=\"btn btn-outline-info\" type=\"button\" href=\"\">Show</a>
                                <a class=\"btn btn-outline-success\" type=\"button\" href=\"\">Edit</a>
                                <a type=\"button\" onclick=\"return confirmRegistre(this)\" class=\"btn btn-outline-danger\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\">Delete</a>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                </table>
            </div>
        </div>
    </div>

    <script>

function confirmRegistre(el) {
        swal({
            title: \"Êtes-vous sûr ?\",
            text: \"Une fois supprimé, vous ne pourrez pas récupérer ce fichier!\",
            icon: \"warning\",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                // swal(\"Poof! Your imaginary file has been deleted!\", {
                // icon: \"success\",
                // });
                window.location = el.getAttribute(\"href\");
            } else {
                swal(\"Votre fichier  est en sécurité !\");
            }
            });
            return false;
        }
    </script>
 
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 43,  134 => 39,  127 => 35,  123 => 34,  119 => 33,  115 => 32,  111 => 31,  108 => 30,  104 => 29,  89 => 17,  79 => 10,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
 
{% block title %}Project index{% endblock %}
 
{% block test %}
    <div class=\"container-fluid\">
        <h2 class=\"text-center mt-5 mb-3\"></h2>
        <div class=\"card\">
            <!-- <div class=\"card-header\">
                <a class=\"btn btn-outline-primary\" href=\"{{ path('app_register') }}\"> 
                    Create New Project 
                </a>
            </div> -->

            <div class=\"report-header\">
                <h1 class=\"recent-Articles\">Liste Users</h1>
                <a href=\"{{ path('app_register') }}\"><button class=\"view\">Create New User</button></a> 
            </div>
            <div class=\"card-body\">
                <table class=\"table table-bordered\">
                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th width=\"330px\">Action</th>
                    </tr>
                    {% for user in projects %}
                    <tr>
                        <td>{{ user.firstname }}</td>
                        <td>{{ user.lastname }}</td>
                        <td>{{ user.username }}</td>
                        <td>{{ user.email }}</td>
                        <td>{{ user.contact }}</td>
                        <td>
                                <a class=\"btn btn-outline-info\" type=\"button\" href=\"\">Show</a>
                                <a class=\"btn btn-outline-success\" type=\"button\" href=\"\">Edit</a>
                                <a type=\"button\" onclick=\"return confirmRegistre(this)\" class=\"btn btn-outline-danger\" href=\"{{ path('app_utilisateur_delete', {id: user.id}) }}\">Delete</a>
                        </td>
                    </tr>
                    {% endfor %}
                </table>
            </div>
        </div>
    </div>

    <script>

function confirmRegistre(el) {
        swal({
            title: \"Êtes-vous sûr ?\",
            text: \"Une fois supprimé, vous ne pourrez pas récupérer ce fichier!\",
            icon: \"warning\",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                // swal(\"Poof! Your imaginary file has been deleted!\", {
                // icon: \"success\",
                // });
                window.location = el.getAttribute(\"href\");
            } else {
                swal(\"Votre fichier  est en sécurité !\");
            }
            });
            return false;
        }
    </script>
 
{% endblock %}", "admin/user/index.html.twig", "/home/armand/Bureau/ProjetFinal/ProjetBackend/templates/admin/user/index.html.twig");
    }
}
