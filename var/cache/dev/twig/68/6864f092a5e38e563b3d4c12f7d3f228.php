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

/* admin/rapport/index.html.twig */
class __TwigTemplate_bc4dc1bc69ca0952e90eb2a85b00c33a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/rapport/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/rapport/index.html.twig", 1);
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
        echo "    <div class=\"container-fluid\" style=\"width: 140%; position: relative; right: 280px;\">
        <h2 class=\"text-center mt-5 mb-3\"></h2>
        <div class=\"card\">

            <div class=\"report-header\">
                <h1 class=\"recent-Articles\">Liste Des Rapports</h1>
                <!-- <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\"><button class=\"view\">Create New User</button></a>  -->
            </div>
            <div class=\"card-body\">
                <table class=\"table table-bordered\">
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>UserName</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Titre Rapport</th>
                        <th>Date Rapport</th>
                        <th>Contenu Rapport</th>
                        <th width=\"330px\">Action</th>
                    </tr>
                    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rapports"]) || array_key_exists("rapports", $context) ? $context["rapports"] : (function () { throw new RuntimeError('Variable "rapports" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rapport"]) {
            // line 29
            echo "                    <tr>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rapport"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rapport"], "utilisateur", [], "any", false, false, false, 31), "firstname", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rapport"], "utilisateur", [], "any", false, false, false, 32), "lastname", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rapport"], "utilisateur", [], "any", false, false, false, 33), "username", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rapport"], "utilisateur", [], "any", false, false, false, 34), "contact", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rapport"], "utilisateur", [], "any", false, false, false, 35), "email", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rapport"], "titreRapport", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rapport"], "rapportDate", [], "any", false, false, false, 37), "m/d/Y"), "html", null, true);
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rapport"], "texteRapport", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                        <td>
                                <a class=\"btn btn-outline-info\" type=\"button\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_user_rapports_show", ["id" => twig_get_attribute($this->env, $this->source, $context["rapport"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">Show</a>
                                <a class=\"btn btn-outline-success disabled\" type=\"button\"  href=\"\">Print</a>
                                <a type=\"button\" onclick=\"return confirmRegistre(this)\" class=\"btn btn-outline-danger\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rapports_delete_admin", ["id" => twig_get_attribute($this->env, $this->source, $context["rapport"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\">Delete</a>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rapport'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
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
        return "admin/rapport/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 46,  149 => 42,  144 => 40,  139 => 38,  135 => 37,  131 => 36,  127 => 35,  123 => 34,  119 => 33,  115 => 32,  111 => 31,  107 => 30,  104 => 29,  100 => 28,  81 => 12,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
 
{% block title %}Project index{% endblock %}
 
{% block test %}
    <div class=\"container-fluid\" style=\"width: 140%; position: relative; right: 280px;\">
        <h2 class=\"text-center mt-5 mb-3\"></h2>
        <div class=\"card\">

            <div class=\"report-header\">
                <h1 class=\"recent-Articles\">Liste Des Rapports</h1>
                <!-- <a href=\"{{ path('app_register') }}\"><button class=\"view\">Create New User</button></a>  -->
            </div>
            <div class=\"card-body\">
                <table class=\"table table-bordered\">
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>UserName</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Titre Rapport</th>
                        <th>Date Rapport</th>
                        <th>Contenu Rapport</th>
                        <th width=\"330px\">Action</th>
                    </tr>
                    {% for rapport in rapports %}
                    <tr>
                        <td>{{ rapport.id }}</td>
                        <td>{{ rapport.utilisateur.firstname }}</td>
                        <td>{{ rapport.utilisateur.lastname }}</td>
                        <td>{{ rapport.utilisateur.username }}</td>
                        <td>{{ rapport.utilisateur.contact }}</td>
                        <td>{{ rapport.utilisateur.email }}</td>
                        <td>{{ rapport.titreRapport }}</td>
                        <td>{{ rapport.rapportDate|date (\"m/d/Y\") }}</td>
                        <td>{{ rapport.texteRapport }}</td>
                        <td>
                                <a class=\"btn btn-outline-info\" type=\"button\" href=\"{{ path('dashboard_user_rapports_show', {id: rapport.id}) }}\">Show</a>
                                <a class=\"btn btn-outline-success disabled\" type=\"button\"  href=\"\">Print</a>
                                <a type=\"button\" onclick=\"return confirmRegistre(this)\" class=\"btn btn-outline-danger\" href=\"{{ path('rapports_delete_admin', {id: rapport.id}) }}\">Delete</a>
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
 
{% endblock %}", "admin/rapport/index.html.twig", "/home/armand/Bureau/ProjetFinal/ProjetBackend/templates/admin/rapport/index.html.twig");
    }
}
