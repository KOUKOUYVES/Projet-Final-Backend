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

/* admin/rapport/show.html.twig */
class __TwigTemplate_b0850e9804e8bc5269cd279bc116c825 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/rapport/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/rapport/show.html.twig", 1);
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
        echo "<link rel=\"stylesheet\" href=\"style.css\">
<div class=\"container\">
    <div class=\"card\">
        <div class=\"card-body\">
            <div id=\"invoice\">
                <div class=\"toolbar hidden-print\">
                    <div class=\"text-end\">
                        <!-- <button type=\"button\" onclick=\"print()\" class=\"btn btn-dark\"><i class=\"fa fa-print\"></i> Print</button> -->
                       <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_user_rapports");
        echo "\"><button type=\"button\" class=\"btn btn-primary\"><i class=\"fa fa-file-pdf-o\"></i> Retour</button></a> 
                    </div>
                    <hr>
                </div>


                <div class=\"invoice overflow-auto\" >
                    <div style=\"min-width: 600px\">
                        <!-- <header>
                            <div class=\"row\">
                                <div class=\"col\">
                                    <a href=\"javascript:;\">
    \t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/logo-icon.png\" width=\"80\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t</a>
                                </div>
                                <div class=\"col company-details\">
                                    <h2 class=\"name\">
                                        <a target=\"_blank\" href=\"javascript:;\">
\t\t\t\t\t\t\t\t\tArboshiki
\t\t\t\t\t\t\t\t\t</a>
                                    </h2>
                                    <div>455 Foggy Heights, AZ 85004, US</div>
                                    <div>(123) 456-789</div>
                                    <div>company@example.com</div>
                                </div>
                            </div>
                        </header> -->
                        <main id=\"printr\">
                            <div class=\"row contacts\">
                                <div class=\"col invoice-to\">
                                    <div class=\"text-gray-light\">Nom et Prénom:</div>
                                    <h2 class=\"to\">";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rapports_print"]) || array_key_exists("rapports_print", $context) ? $context["rapports_print"] : (function () { throw new RuntimeError('Variable "rapports_print" does not exist.', 45, $this->source); })()), "utilisateur", [], "any", false, false, false, 45), "firstname", [], "any", false, false, false, 45), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rapports_print"]) || array_key_exists("rapports_print", $context) ? $context["rapports_print"] : (function () { throw new RuntimeError('Variable "rapports_print" does not exist.', 45, $this->source); })()), "utilisateur", [], "any", false, false, false, 45), "lastname", [], "any", false, false, false, 45), "html", null, true);
        echo "</h2>
                                    <div class=\"address\">Email</div>
                                    <div class=\"email\"><a href=\"mailto:john@example.com\">";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rapports_print"]) || array_key_exists("rapports_print", $context) ? $context["rapports_print"] : (function () { throw new RuntimeError('Variable "rapports_print" does not exist.', 47, $this->source); })()), "utilisateur", [], "any", false, false, false, 47), "email", [], "any", false, false, false, 47), "html", null, true);
        echo "</a>
                                    </div>
                                </div>
                                <div class=\"col invoice-details\">
                                    <h6 class=\"invoice-id\">Date de Rapport</h6>
                                    <div class=\"date\">";
        // line 52
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rapports_print"]) || array_key_exists("rapports_print", $context) ? $context["rapports_print"] : (function () { throw new RuntimeError('Variable "rapports_print" does not exist.', 52, $this->source); })()), "rapportDate", [], "any", false, false, false, 52), "d-m-Y"), "html", null, true);
        echo "</div>
                                    <!-- <div class=\"date\">Due Date: 30/10/2018</div> -->
                                </div>
                            </div>
                            <hr><hr>
                            <!-- <div class=\"thanks\">Thank you!</div> -->
                            <div class=\"notices\">
                                <div><h4> Contenu de Rapport:</h4></div>
                                <div class=\"notice\">";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rapports_print"]) || array_key_exists("rapports_print", $context) ? $context["rapports_print"] : (function () { throw new RuntimeError('Variable "rapports_print" does not exist.', 60, $this->source); })()), "texteRapport", [], "any", false, false, false, 60), "html", null, true);
        echo "</div>
                            </div>
                        </main>
                        <!-- <footer>Invoice was created on a computer and is valid without the signature and seal.</footer> -->
                    </div>
                    <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
                    <div></div>
                </div>


            </div>
        </div>
    </div>
</div>


   
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/rapport/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 60,  132 => 52,  124 => 47,  117 => 45,  83 => 14,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
 
{% block title %}Project index{% endblock %}
 
{% block test %}
<link rel=\"stylesheet\" href=\"style.css\">
<div class=\"container\">
    <div class=\"card\">
        <div class=\"card-body\">
            <div id=\"invoice\">
                <div class=\"toolbar hidden-print\">
                    <div class=\"text-end\">
                        <!-- <button type=\"button\" onclick=\"print()\" class=\"btn btn-dark\"><i class=\"fa fa-print\"></i> Print</button> -->
                       <a href=\"{{ path('dashboard_user_rapports')}}\"><button type=\"button\" class=\"btn btn-primary\"><i class=\"fa fa-file-pdf-o\"></i> Retour</button></a> 
                    </div>
                    <hr>
                </div>


                <div class=\"invoice overflow-auto\" >
                    <div style=\"min-width: 600px\">
                        <!-- <header>
                            <div class=\"row\">
                                <div class=\"col\">
                                    <a href=\"javascript:;\">
    \t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/logo-icon.png\" width=\"80\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t</a>
                                </div>
                                <div class=\"col company-details\">
                                    <h2 class=\"name\">
                                        <a target=\"_blank\" href=\"javascript:;\">
\t\t\t\t\t\t\t\t\tArboshiki
\t\t\t\t\t\t\t\t\t</a>
                                    </h2>
                                    <div>455 Foggy Heights, AZ 85004, US</div>
                                    <div>(123) 456-789</div>
                                    <div>company@example.com</div>
                                </div>
                            </div>
                        </header> -->
                        <main id=\"printr\">
                            <div class=\"row contacts\">
                                <div class=\"col invoice-to\">
                                    <div class=\"text-gray-light\">Nom et Prénom:</div>
                                    <h2 class=\"to\">{{rapports_print.utilisateur.firstname}} {{rapports_print.utilisateur.lastname}}</h2>
                                    <div class=\"address\">Email</div>
                                    <div class=\"email\"><a href=\"mailto:john@example.com\">{{rapports_print.utilisateur.email}}</a>
                                    </div>
                                </div>
                                <div class=\"col invoice-details\">
                                    <h6 class=\"invoice-id\">Date de Rapport</h6>
                                    <div class=\"date\">{{rapports_print.rapportDate|date('d-m-Y')}}</div>
                                    <!-- <div class=\"date\">Due Date: 30/10/2018</div> -->
                                </div>
                            </div>
                            <hr><hr>
                            <!-- <div class=\"thanks\">Thank you!</div> -->
                            <div class=\"notices\">
                                <div><h4> Contenu de Rapport:</h4></div>
                                <div class=\"notice\">{{rapports_print.texteRapport}}</div>
                            </div>
                        </main>
                        <!-- <footer>Invoice was created on a computer and is valid without the signature and seal.</footer> -->
                    </div>
                    <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
                    <div></div>
                </div>


            </div>
        </div>
    </div>
</div>


   
{% endblock %}
", "admin/rapport/show.html.twig", "/home/armand/Bureau/ProjetFinal/ProjetBackend/templates/admin/rapport/show.html.twig");
    }
}
