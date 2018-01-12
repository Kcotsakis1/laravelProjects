<?php

/* C:\xampp\htdocs\acme/themes/custom_theme/pages/home.htm */
class __TwigTemplate_037ab3b5742201e27433282469138f6c4f9c9ab857dec86bf0e1bb3516abff4d extends Twig_Template
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
        echo "<!-- <h1>Welcome To My Site</h1>
<div class=\"jumbotronNew bg\">
  <h1>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "site_name", array()), "html", null, true);
        echo "</h1>
  <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "site_description", array()), "html", null, true);
        echo "</p>
  <p>
    <a href=\"{ 'about'|page }\" class=\"btn btn-primary\">Read More</a>
  </p>
 </div> -->
 <div class=\"bg\">this is some text</div>
 <div class=\"jumbotron\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "site_name", array()), "html", null, true);
        echo "</h1>
    <p>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "site_description", array()), "html", null, true);
        echo "</p>
    <p>
      <a href=\"{ 'about'|page }\" class=\"btn btn-primary\">Read More</a>
    </p>
 </div>
 
 <div class=\"container\">
   <div class=\"row\">
     <h2>Page Content</h2>
     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
     Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
     dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
     Aliquam in felis sit amet augue.
     <br>
     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
     Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
     dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
     Aliquam in felis sit amet augue.
     <br>
     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
     Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
     dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
     Aliquam in felis sit amet augue.
     <br>
     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
     Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
     dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
     Aliquam in felis sit amet augue.
   </div>
   <hr>
   <div class=\"row\">
     <h2>Page Content</h2>
     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
     Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
     dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
     Aliquam in felis sit amet augue.
     <h2>Page Content</h2>
     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
     Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
     dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
     Aliquam in felis sit amet augue.
     <h2>Page Content</h2>
     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
     Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
     dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
     Aliquam in felis sit amet augue.
     
   </div>
   <hr>
   <div class=\"row\">
     <h2>Page Content</h2>
     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
     Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
     dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
     Aliquam in felis sit amet augue.
   </div>
 </div>
 
 <hr>
 
 <div class=\"container\">
   <div class=\"row\">
       <div class=\"col-md-12 text-center\"><p>The End.</p></div>
     </div>
 </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\acme/themes/custom_theme/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 12,  37 => 11,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- <h1>Welcome To My Site</h1>
<div class=\"jumbotronNew bg\">
  <h1>{{this.theme.site_name}}</h1>
  <p>{{this.theme.site_description}}</p>
  <p>
    <a href=\"{ 'about'|page }\" class=\"btn btn-primary\">Read More</a>
  </p>
 </div> -->
 <div class=\"bg\">this is some text</div>
 <div class=\"jumbotron\">
    <h1>{{this.theme.site_name}}</h1>
    <p>{{this.theme.site_description}}</p>
    <p>
      <a href=\"{ 'about'|page }\" class=\"btn btn-primary\">Read More</a>
    </p>
 </div>
 
 <div class=\"container\">
   <div class=\"row\">
     <h2>Page Content</h2>
     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
     Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
     dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
     Aliquam in felis sit amet augue.
     <br>
     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
     Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
     dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
     Aliquam in felis sit amet augue.
     <br>
     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
     Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
     dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
     Aliquam in felis sit amet augue.
     <br>
     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
     Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
     dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
     Aliquam in felis sit amet augue.
   </div>
   <hr>
   <div class=\"row\">
     <h2>Page Content</h2>
     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
     Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
     dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
     Aliquam in felis sit amet augue.
     <h2>Page Content</h2>
     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
     Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
     dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
     Aliquam in felis sit amet augue.
     <h2>Page Content</h2>
     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
     Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
     dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
     Aliquam in felis sit amet augue.
     
   </div>
   <hr>
   <div class=\"row\">
     <h2>Page Content</h2>
     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
     Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
     dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
     Aliquam in felis sit amet augue.
   </div>
 </div>
 
 <hr>
 
 <div class=\"container\">
   <div class=\"row\">
       <div class=\"col-md-12 text-center\"><p>The End.</p></div>
     </div>
 </div>", "C:\\xampp\\htdocs\\acme/themes/custom_theme/pages/home.htm", "");
    }
}
