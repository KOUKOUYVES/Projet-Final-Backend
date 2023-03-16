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

/* assets/script.js */
class __TwigTemplate_e5b75155b97ef7aeb665aac2510aa000 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "assets/script.js"));

        // line 1
        echo "let menuicn = document.querySelector(\".menuicn\");
let nav = document.querySelector(\".navcontainer\");

menuicn.addEventListener(\"click\",()=>
{
\tnav.classList.toggle(\"navclose\");
})";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "assets/script.js";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("let menuicn = document.querySelector(\".menuicn\");
let nav = document.querySelector(\".navcontainer\");

menuicn.addEventListener(\"click\",()=>
{
\tnav.classList.toggle(\"navclose\");
})", "assets/script.js", "/home/armand/Bureau/ProjetFinal/ProjetBackend/templates/assets/script.js");
    }
}
