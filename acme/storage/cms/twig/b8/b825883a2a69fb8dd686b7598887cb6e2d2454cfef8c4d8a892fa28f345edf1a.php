<?php

/* C:\xampp\htdocs\acme/themes/custom_theme/partials/site/header.htm */
class __TwigTemplate_cfddc176e1048908ca7a33adfde3f955ee67c2a889d8ec7b00f2536620c9b654 extends Twig_Template
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
        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
        <a class=\"navbar-brand\" href=\"#\">";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "site_name", array()), "html", null, true);
        echo "</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
      
        <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
          <ul class=\"navbar-nav mr-auto\">
            <li class=\"";
        // line 9
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "home")) {
            echo " active ";
        }
        echo "\">
              <a class=\"nav-link\" href=\"";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">Home </a>
            </li>
            <li class=\"";
        // line 12
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "about")) {
            echo " active ";
        }
        echo "\">
              <a class=\"nav-link\" href=\"";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("about");
        echo "\">About</a>
            </li>
            <li class=\"";
        // line 15
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "contact")) {
            echo " active ";
        }
        echo "\">
              <a class=\"nav-link\" href=\"";
        // line 16
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("contact");
        echo "\">Contact</a>
            </li>
            <li class=\"";
        // line 18
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "blog")) {
            echo " active ";
        }
        echo "\">
                <a class=\"nav-link\" href=\"";
        // line 19
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("blog");
        echo "\">Blog</a>
              </li>
          </ul>
        </div>
      </nav>
      <br>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\acme/themes/custom_theme/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 19,  65 => 18,  60 => 16,  54 => 15,  49 => 13,  43 => 12,  38 => 10,  32 => 9,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
        <a class=\"navbar-brand\" href=\"#\">{{this.theme.site_name}}</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
      
        <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
          <ul class=\"navbar-nav mr-auto\">
            <li class=\"{% if this.page.id == 'home' %} active {% endif %}\">
              <a class=\"nav-link\" href=\"{{'home'|page}}\">Home </a>
            </li>
            <li class=\"{% if this.page.id == 'about' %} active {% endif %}\">
              <a class=\"nav-link\" href=\"{{'about'|page}}\">About</a>
            </li>
            <li class=\"{% if this.page.id == 'contact' %} active {% endif %}\">
              <a class=\"nav-link\" href=\"{{'contact'|page}}\">Contact</a>
            </li>
            <li class=\"{% if this.page.id == 'blog' %} active {% endif %}\">
                <a class=\"nav-link\" href=\"{{'blog'|page}}\">Blog</a>
              </li>
          </ul>
        </div>
      </nav>
      <br>", "C:\\xampp\\htdocs\\acme/themes/custom_theme/partials/site/header.htm", "");
    }
}
