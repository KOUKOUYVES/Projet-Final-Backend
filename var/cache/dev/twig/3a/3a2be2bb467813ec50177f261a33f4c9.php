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

/* base.html.twig */
class __TwigTemplate_6c89d1c69f1ef6f488c9cc6a9acd3b4f extends Template
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
            'test' => [$this, 'block_test'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css\" integrity=\"sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N\" crossorigin=\"anonymous\">
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        ";
        // line 9
        echo "        
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/style.css"), "html", null, true);
        echo "\">

    </head>
    <body>
        <header>

            <div class=\"logosec\">
                <div class=\"logo\">Admin</div>
                <img src=\"https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png\"
                    class=\"icn menuicn\"
                    id=\"menuicn\"
                    alt=\"menu-icon\">
            </div>
    
            <div class=\"searchbar\">
                <input type=\"text\"
                    placeholder=\"Search\">
                <div class=\"searchbtn\">
                <img src=\"https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png\"
                        class=\"icn srchicn\"
                        alt=\"search-icon\">
                </div>
            </div>
    
            <div class=\"message\">
                <div class=\"circle\"></div>
                <img src=\"https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/8.png\"
                    class=\"icn\"
                    alt=\"\">
                <div class=\"dp\">
                <img src=\"https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png\"
                        class=\"dpicn\"
                        alt=\"dp\">
                </div>
            </div>
    
        </header>
    
        <div class=\"main-container\">
            <div class=\"navcontainer\">
                <nav class=\"nav\">
                    <div class=\"nav-upper-options\">
                        <div class=\"nav-option option1\">
                            <img src=\"https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png\"
                                class=\"nav-img\"
                                alt=\"dashboard\">
                            <h3> Dashboard</h3>
                        </div>
    
                        <a style=\"color: #000000; text-decoration: none;\" type=\"button\" href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_user");
        echo "\">

                            <div class=\"option2 nav-option\">
                                <img src=\"https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/9.png\"
                                    class=\"nav-img\"
                                    alt=\"articles\">
                                <h3> Gestion Users</h3> <button></button>
                            </div>
                        </a>
                        
                        <a style=\"color: #000000; text-decoration: none;\"  href=\"\">

                            <div class=\"nav-option option3\">
                                <img src=\"https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png\"
                                    class=\"nav-img\"
                                    alt=\"report\">
                                <h3> Gestion Rapports</h3>
                            </div>
                        </a>
                        
    
                        <!-- <div class=\"nav-option option4\">
                            <img src=\"https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/6.png\"
                                class=\"nav-img\"
                                alt=\"institution\">
                            <h3> Institution</h3>
                        </div>
    
                        <div class=\"nav-option option5\">
                            <img src=\"https://media.geeksforgeeks.org/wp-content/uploads/20221210183323/10.png\"
                                class=\"nav-img\"
                                alt=\"blog\">
                            <h3> Profile</h3>
                        </div>
    
                        <div class=\"nav-option option6\">
                            <img src=\"https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/4.png\"
                                class=\"nav-img\"
                                alt=\"settings\">
                            <h3> Settings</h3>
                        </div> -->
                        <a href=\"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\" style=\"color: #000000; text-decoration: none;\" >
                            <div class=\"nav-option logout\">
                                <img src=\"https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png\"
                                    class=\"nav-img\"
                                    alt=\"logout\">
                                <h3>Logout</h3>
                            </div>
                        </a>
                        
                    </div>
                </nav>
            </div>
            <div class=\"main\">
    
                <div class=\"searchbar2\">
                    <input type=\"text\"
                        name=\"\"
                        id=\"\"
                        placeholder=\"Search\">
                    <div class=\"searchbtn\">
                    <img src=\"https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png\"
                            class=\"icn srchicn\"
                            alt=\"search-button\">
                    </div>
                </div>
    
                <!-- <div class=\"box-container\">
    
                    <div class=\"box box1\">
                        <div class=\"text\">
                            <h2 class=\"topic-heading\">60.5k</h2>
                            <h2 class=\"topic\">Article Views</h2>
                        </div>
    
                        <img src=\"https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(31).png\"
                            alt=\"Views\">
                    </div>
    
                    <div class=\"box box2\">
                        <div class=\"text\">
                            <h2 class=\"topic-heading\">150</h2>
                            <h2 class=\"topic\">Likes</h2>
                        </div>
    
                        <img src=\"https://media.geeksforgeeks.org/wp-content/uploads/20221210185030/14.png\"
                            alt=\"likes\">
                    </div>
    
                    <div class=\"box box3\">
                        <div class=\"text\">
                            <h2 class=\"topic-heading\">320</h2>
                            <h2 class=\"topic\">Comments</h2>
                        </div>
    
                        <img src=\"https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(32).png\"
                            alt=\"comments\">
                    </div>
    
                    <div class=\"box box4\">
                        <div class=\"text\">
                            <h2 class=\"topic-heading\">70</h2>
                            <h2 class=\"topic\">Published</h2>
                        </div>
    
                        <img src=\"https://media.geeksforgeeks.org/wp-content/uploads/20221210185029/13.png\" alt=\"published\">
                    </div>
                </div> -->
    
                <div class=\"report-container\">
                    <!-- <div class=\"report-header\">
                        <h1 class=\"recent-Articles\">Recent Articles</h1>
                        <a href=\"\"><button class=\"view\">View All</button></a> 
                    </div> -->

                    ";
        // line 178
        $this->displayBlock('test', $context, $blocks);
        // line 181
        echo "<!--     
                    <div class=\"report-body\">
                        <div class=\"report-topic-heading\">
                            <h3 class=\"t-op\">Article</h3>
                            <h3 class=\"t-op\">Views</h3>
                            <h3 class=\"t-op\">Comments</h3>
                            <h3 class=\"t-op\">Status</h3>
                        </div>
    
                        <div class=\"items\">
                            <div class=\"item1\">
                                <h3 class=\"t-op-nextlvl\">Article 73</h3>
                                <h3 class=\"t-op-nextlvl\">2.9k</h3>
                                <h3 class=\"t-op-nextlvl\">210</h3>
                                <h3 class=\"t-op-nextlvl label-tag\">Published</h3>
                            </div>
    
                            <div class=\"item1\">
                                <h3 class=\"t-op-nextlvl\">Article 72</h3>
                                <h3 class=\"t-op-nextlvl\">1.5k</h3>
                                <h3 class=\"t-op-nextlvl\">360</h3>
                                <h3 class=\"t-op-nextlvl label-tag\">Published</h3>
                            </div>
    
                            <div class=\"item1\">
                                <h3 class=\"t-op-nextlvl\">Article 71</h3>
                                <h3 class=\"t-op-nextlvl\">1.1k</h3>
                                <h3 class=\"t-op-nextlvl\">150</h3>
                                <h3 class=\"t-op-nextlvl label-tag\">Published</h3>
                            </div>
    
                            <div class=\"item1\">
                                <h3 class=\"t-op-nextlvl\">Article 70</h3>
                                <h3 class=\"t-op-nextlvl\">1.2k</h3>
                                <h3 class=\"t-op-nextlvl\">420</h3>
                                <h3 class=\"t-op-nextlvl label-tag\">Published</h3>
                            </div>
    
                            <div class=\"item1\">
                                <h3 class=\"t-op-nextlvl\">Article 69</h3>
                                <h3 class=\"t-op-nextlvl\">2.6k</h3>
                                <h3 class=\"t-op-nextlvl\">190</h3>
                                <h3 class=\"t-op-nextlvl label-tag\">Published</h3>
                            </div>
    
                            <div class=\"item1\">
                                <h3 class=\"t-op-nextlvl\">Article 68</h3>
                                <h3 class=\"t-op-nextlvl\">1.9k</h3>
                                <h3 class=\"t-op-nextlvl\">390</h3>
                                <h3 class=\"t-op-nextlvl label-tag\">Published</h3>
                            </div>
    
                            <div class=\"item1\">
                                <h3 class=\"t-op-nextlvl\">Article 67</h3>
                                <h3 class=\"t-op-nextlvl\">1.2k</h3>
                                <h3 class=\"t-op-nextlvl\">580</h3>
                                <h3 class=\"t-op-nextlvl label-tag\">Published</h3>
                            </div>
    
                            <div class=\"item1\">
                                <h3 class=\"t-op-nextlvl\">Article 66</h3>
                                <h3 class=\"t-op-nextlvl\">3.6k</h3>
                                <h3 class=\"t-op-nextlvl\">160</h3>
                                <h3 class=\"t-op-nextlvl label-tag\">Published</h3>
                            </div>
    
                            <div class=\"item1\">
                                <h3 class=\"t-op-nextlvl\">Article 65</h3>
                                <h3 class=\"t-op-nextlvl\">1.3k</h3>
                                <h3 class=\"t-op-nextlvl\">220</h3>
                                <h3 class=\"t-op-nextlvl label-tag\">Published</h3>
                            </div>
    
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        ";
        // line 259
        $this->displayBlock('body', $context, $blocks);
        // line 262
        echo "

        ";
        // line 264
        $this->displayBlock('javascripts', $context, $blocks);
        // line 268
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/script.js"), "html", null, true);
        echo "\"></script>
    </body>
    <footer>hghgghggjgj</footer>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 178
    public function block_test($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "test"));

        // line 179
        echo "            
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 259
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 260
        echo "        
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 264
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 265
        echo "        <script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>
            ";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 266,  408 => 265,  401 => 264,  393 => 260,  386 => 259,  378 => 179,  371 => 178,  361 => 11,  354 => 10,  341 => 5,  328 => 268,  326 => 264,  322 => 262,  320 => 259,  240 => 181,  238 => 178,  161 => 104,  117 => 63,  65 => 14,  62 => 13,  60 => 10,  57 => 9,  51 => 5,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css\" integrity=\"sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N\" crossorigin=\"anonymous\">
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        
        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}

        <link rel=\"stylesheet\" href=\"{{asset(\"asset/style.css\")}}\">

    </head>
    <body>
        <header>

            <div class=\"logosec\">
                <div class=\"logo\">Admin</div>
                <img src=\"https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png\"
                    class=\"icn menuicn\"
                    id=\"menuicn\"
                    alt=\"menu-icon\">
            </div>
    
            <div class=\"searchbar\">
                <input type=\"text\"
                    placeholder=\"Search\">
                <div class=\"searchbtn\">
                <img src=\"https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png\"
                        class=\"icn srchicn\"
                        alt=\"search-icon\">
                </div>
            </div>
    
            <div class=\"message\">
                <div class=\"circle\"></div>
                <img src=\"https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/8.png\"
                    class=\"icn\"
                    alt=\"\">
                <div class=\"dp\">
                <img src=\"https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png\"
                        class=\"dpicn\"
                        alt=\"dp\">
                </div>
            </div>
    
        </header>
    
        <div class=\"main-container\">
            <div class=\"navcontainer\">
                <nav class=\"nav\">
                    <div class=\"nav-upper-options\">
                        <div class=\"nav-option option1\">
                            <img src=\"https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png\"
                                class=\"nav-img\"
                                alt=\"dashboard\">
                            <h3> Dashboard</h3>
                        </div>
    
                        <a style=\"color: #000000; text-decoration: none;\" type=\"button\" href=\"{{ path('dashboard_user') }}\">

                            <div class=\"option2 nav-option\">
                                <img src=\"https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/9.png\"
                                    class=\"nav-img\"
                                    alt=\"articles\">
                                <h3> Gestion Users</h3> <button></button>
                            </div>
                        </a>
                        
                        <a style=\"color: #000000; text-decoration: none;\"  href=\"\">

                            <div class=\"nav-option option3\">
                                <img src=\"https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png\"
                                    class=\"nav-img\"
                                    alt=\"report\">
                                <h3> Gestion Rapports</h3>
                            </div>
                        </a>
                        
    
                        <!-- <div class=\"nav-option option4\">
                            <img src=\"https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/6.png\"
                                class=\"nav-img\"
                                alt=\"institution\">
                            <h3> Institution</h3>
                        </div>
    
                        <div class=\"nav-option option5\">
                            <img src=\"https://media.geeksforgeeks.org/wp-content/uploads/20221210183323/10.png\"
                                class=\"nav-img\"
                                alt=\"blog\">
                            <h3> Profile</h3>
                        </div>
    
                        <div class=\"nav-option option6\">
                            <img src=\"https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/4.png\"
                                class=\"nav-img\"
                                alt=\"settings\">
                            <h3> Settings</h3>
                        </div> -->
                        <a href=\"{{ path('logout') }}\" style=\"color: #000000; text-decoration: none;\" >
                            <div class=\"nav-option logout\">
                                <img src=\"https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png\"
                                    class=\"nav-img\"
                                    alt=\"logout\">
                                <h3>Logout</h3>
                            </div>
                        </a>
                        
                    </div>
                </nav>
            </div>
            <div class=\"main\">
    
                <div class=\"searchbar2\">
                    <input type=\"text\"
                        name=\"\"
                        id=\"\"
                        placeholder=\"Search\">
                    <div class=\"searchbtn\">
                    <img src=\"https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png\"
                            class=\"icn srchicn\"
                            alt=\"search-button\">
                    </div>
                </div>
    
                <!-- <div class=\"box-container\">
    
                    <div class=\"box box1\">
                        <div class=\"text\">
                            <h2 class=\"topic-heading\">60.5k</h2>
                            <h2 class=\"topic\">Article Views</h2>
                        </div>
    
                        <img src=\"https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(31).png\"
                            alt=\"Views\">
                    </div>
    
                    <div class=\"box box2\">
                        <div class=\"text\">
                            <h2 class=\"topic-heading\">150</h2>
                            <h2 class=\"topic\">Likes</h2>
                        </div>
    
                        <img src=\"https://media.geeksforgeeks.org/wp-content/uploads/20221210185030/14.png\"
                            alt=\"likes\">
                    </div>
    
                    <div class=\"box box3\">
                        <div class=\"text\">
                            <h2 class=\"topic-heading\">320</h2>
                            <h2 class=\"topic\">Comments</h2>
                        </div>
    
                        <img src=\"https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(32).png\"
                            alt=\"comments\">
                    </div>
    
                    <div class=\"box box4\">
                        <div class=\"text\">
                            <h2 class=\"topic-heading\">70</h2>
                            <h2 class=\"topic\">Published</h2>
                        </div>
    
                        <img src=\"https://media.geeksforgeeks.org/wp-content/uploads/20221210185029/13.png\" alt=\"published\">
                    </div>
                </div> -->
    
                <div class=\"report-container\">
                    <!-- <div class=\"report-header\">
                        <h1 class=\"recent-Articles\">Recent Articles</h1>
                        <a href=\"\"><button class=\"view\">View All</button></a> 
                    </div> -->

                    {% block test %}
            
                    {% endblock %}
<!--     
                    <div class=\"report-body\">
                        <div class=\"report-topic-heading\">
                            <h3 class=\"t-op\">Article</h3>
                            <h3 class=\"t-op\">Views</h3>
                            <h3 class=\"t-op\">Comments</h3>
                            <h3 class=\"t-op\">Status</h3>
                        </div>
    
                        <div class=\"items\">
                            <div class=\"item1\">
                                <h3 class=\"t-op-nextlvl\">Article 73</h3>
                                <h3 class=\"t-op-nextlvl\">2.9k</h3>
                                <h3 class=\"t-op-nextlvl\">210</h3>
                                <h3 class=\"t-op-nextlvl label-tag\">Published</h3>
                            </div>
    
                            <div class=\"item1\">
                                <h3 class=\"t-op-nextlvl\">Article 72</h3>
                                <h3 class=\"t-op-nextlvl\">1.5k</h3>
                                <h3 class=\"t-op-nextlvl\">360</h3>
                                <h3 class=\"t-op-nextlvl label-tag\">Published</h3>
                            </div>
    
                            <div class=\"item1\">
                                <h3 class=\"t-op-nextlvl\">Article 71</h3>
                                <h3 class=\"t-op-nextlvl\">1.1k</h3>
                                <h3 class=\"t-op-nextlvl\">150</h3>
                                <h3 class=\"t-op-nextlvl label-tag\">Published</h3>
                            </div>
    
                            <div class=\"item1\">
                                <h3 class=\"t-op-nextlvl\">Article 70</h3>
                                <h3 class=\"t-op-nextlvl\">1.2k</h3>
                                <h3 class=\"t-op-nextlvl\">420</h3>
                                <h3 class=\"t-op-nextlvl label-tag\">Published</h3>
                            </div>
    
                            <div class=\"item1\">
                                <h3 class=\"t-op-nextlvl\">Article 69</h3>
                                <h3 class=\"t-op-nextlvl\">2.6k</h3>
                                <h3 class=\"t-op-nextlvl\">190</h3>
                                <h3 class=\"t-op-nextlvl label-tag\">Published</h3>
                            </div>
    
                            <div class=\"item1\">
                                <h3 class=\"t-op-nextlvl\">Article 68</h3>
                                <h3 class=\"t-op-nextlvl\">1.9k</h3>
                                <h3 class=\"t-op-nextlvl\">390</h3>
                                <h3 class=\"t-op-nextlvl label-tag\">Published</h3>
                            </div>
    
                            <div class=\"item1\">
                                <h3 class=\"t-op-nextlvl\">Article 67</h3>
                                <h3 class=\"t-op-nextlvl\">1.2k</h3>
                                <h3 class=\"t-op-nextlvl\">580</h3>
                                <h3 class=\"t-op-nextlvl label-tag\">Published</h3>
                            </div>
    
                            <div class=\"item1\">
                                <h3 class=\"t-op-nextlvl\">Article 66</h3>
                                <h3 class=\"t-op-nextlvl\">3.6k</h3>
                                <h3 class=\"t-op-nextlvl\">160</h3>
                                <h3 class=\"t-op-nextlvl label-tag\">Published</h3>
                            </div>
    
                            <div class=\"item1\">
                                <h3 class=\"t-op-nextlvl\">Article 65</h3>
                                <h3 class=\"t-op-nextlvl\">1.3k</h3>
                                <h3 class=\"t-op-nextlvl\">220</h3>
                                <h3 class=\"t-op-nextlvl label-tag\">Published</h3>
                            </div>
    
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        {% block body %}
        
        {% endblock %}


        {% block javascripts %}
        <script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>
            {{ encore_entry_script_tags('app') }}
        {% endblock %}
        <script src=\"{{ asset('asset/script.js') }}\"></script>
    </body>
    <footer>hghgghggjgj</footer>
</html>
", "base.html.twig", "/home/armand/Bureau/ProjetFinal/ProjetBackend/templates/base.html.twig");
    }
}
