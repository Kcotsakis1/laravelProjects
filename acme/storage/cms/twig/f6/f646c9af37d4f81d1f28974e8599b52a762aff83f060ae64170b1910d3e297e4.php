<?php

/* C:\xampp\htdocs\acme/themes/custom_theme/layouts/default.htm */
class __TwigTemplate_8ff8a56196b474436f169324c3498bc0b198b706ed3e89ecabb5e9181d02e14c extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
  <title>Custom Project - ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
  <meta name= \"description\" content=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"https://bootswatch.com/4/journal/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/theme.css");
        echo "\">
  ";
        // line 7
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 8
        echo "  </head>
  <body>
    <header>
      ";
        // line 11
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 12
        echo "    </header>
    <br>
    <div class=\"container\">
     ";
        // line 15
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 16
        echo "    </div>
    
    <footer>
      ";
        // line 19
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 20
        echo "    </footer>  
    
    <script src=\"";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
    <script src=\"";
        // line 23
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script>
    <script src=\"";
        // line 24
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/app.js");
        echo "\"></script>
  
  
  </body>


</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\acme/themes/custom_theme/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 24,  72 => 23,  68 => 22,  64 => 20,  60 => 19,  55 => 16,  53 => 15,  48 => 12,  44 => 11,  39 => 8,  36 => 7,  32 => 6,  27 => 4,  23 => 3,  19 => 1,);
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
  <title>Custom Project - {{this.page.title}}</title>
  <meta name= \"description\" content=\"{{this.page.meta_description}}\">
  <link rel=\"stylesheet\" href=\"https://bootswatch.com/4/journal/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"{{'assets/css/theme.css' |theme}}\">
  {% styles %}
  </head>
  <body>
    <header>
      {% partial 'site/header' %}
    </header>
    <br>
    <div class=\"container\">
     {% page %}
    </div>
    
    <footer>
      {% partial 'site/footer' %}
    </footer>  
    
    <script src=\"{{'assets/vendor/jquery.js' |theme}}\"></script>
    <script src=\"{{'assets/vendor/bootstrap.js' |theme}}\"></script>
    <script src=\"{{'assets/vendor/app.js' |theme}}\"></script>
  
  
  </body>


</html>", "C:\\xampp\\htdocs\\acme/themes/custom_theme/layouts/default.htm", "");
    }
}
