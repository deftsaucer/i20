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

/* themes/custom/custom_bootstrap/templates/page.html.twig */
class __TwigTemplate_53644570cf286814c9f1eb38266af977fd363c2fbc0395cfe8c3f980c16dbd7a extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["container"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 1), "fluid_container", [], "any", false, false, true, 1)) ? ("container-fluid") : ("container"));
        // line 2
        echo "<div class=\"page\">
  <header>
    <nav class=\"navbar navbar-expand-lg flex-wrap navbar-dark text-light bg-dark\">
      <div class=\"container d-flex\">
        <div class=\"col-12 col-lg-8 d-flex align-items-center\">
          <div class=\"navbar-brand d-flex align-items-center col-8 col-lg-6 m-0\">
            ";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 8), "site_logo", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "
            ";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 9), "sitebranding", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "
          </div>
        </div>

        <button class=\"navbar-toggler collapsed order-1 order-lg-0 mt-3 mt-lg-0\" type=\"button\" data-bs-toggle=\"collapse\"
                data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
                aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <form class=\"d-flex col-9 col-lg-4 order-0 position-relative mt-3 mt-lg-0\">
          ";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 19), "search", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "
        </form>

        <div class=\"collapse order-3 navbar-collapse justify-content-md-end flex-wrap col-md-9\"
             id=\"navbarSupportedContent\">
          ";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 24), "navigation", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
        echo "
        </div>
      </div>
    </nav>
  </header>

  <main class=\"main-container\">
    <div class=\"layout\">
      <div class=\"layout__main\">
        <div class=\"bg-dark col-12\">
          <div class=\"container bg-dark\">
            <nav aria-label=\"breadcrumb\">
              <ol class=\"breadcrumb m-0 align-items-center\">
                <li class=\"breadcrumb-item\">
                  <a href=\"#\">
                    <img class=\"img-fluid\" width=\"30px\" src=\"/web/themes/custom/custom_bootstrap/home.png\" alt=\"\">
                  </a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Previous page</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Current page</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </main>

  <footer class=\"mt-auto footer-dark text-light bg-secondary footer\">
    <div class=\"container\">
      ";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 54), "footer", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
        echo "
      <div
        class=\"footer__bottom d-flex flex-column-reverse flex-md-row mt-5 border-top justify-content-between align-items-md-center py-3\">
        <div class=\"footer__copy col-5 col-md-3\">";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 57), "poweredbydrupal", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
        echo "</div>
        <div class=\"col-12 col-md-9 d-flex align-items-center justify-content-md-end mb-3 mb-md-0\">
          <div class=\"navbar-brand d-flex align-items-center col-md-5\">
            <a href=\"/\" class=\"site-logo d-block\">
              <img src=\"/web/themes/custom/custom_bootstrap/logo.svg\" alt=\"\">
            </a>
            <div>
              <a href=\"/\" class=\"site-title\">Bootcamp</a>
            </div>
          </div>
          <a href=\"#\" class=\"col-2\"><img class=\"img-fluid w-100\" src=\"/web/themes/custom/custom_bootstrap/i20-logo.png\" alt=\"\"></a>
          <a href=\"#\" class=\"col-1 mx-3\"><img class=\"img-fluid w-100\" src=\"/web/themes/custom/custom_bootstrap/drupaljedi-logo.png\" alt=\"\"></a>
        </div>
      </div>
    </div>
  </footer>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/custom_bootstrap/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 57,  107 => 54,  74 => 24,  66 => 19,  53 => 9,  49 => 8,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set container = theme.settings.fluid_container ? 'container-fluid' : 'container' %}
<div class=\"page\">
  <header>
    <nav class=\"navbar navbar-expand-lg flex-wrap navbar-dark text-light bg-dark\">
      <div class=\"container d-flex\">
        <div class=\"col-12 col-lg-8 d-flex align-items-center\">
          <div class=\"navbar-brand d-flex align-items-center col-8 col-lg-6 m-0\">
            {{ page.header.site_logo }}
            {{ page.header.sitebranding }}
          </div>
        </div>

        <button class=\"navbar-toggler collapsed order-1 order-lg-0 mt-3 mt-lg-0\" type=\"button\" data-bs-toggle=\"collapse\"
                data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
                aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <form class=\"d-flex col-9 col-lg-4 order-0 position-relative mt-3 mt-lg-0\">
          {{ page.header.search }}
        </form>

        <div class=\"collapse order-3 navbar-collapse justify-content-md-end flex-wrap col-md-9\"
             id=\"navbarSupportedContent\">
          {{ page.navigation.navigation }}
        </div>
      </div>
    </nav>
  </header>

  <main class=\"main-container\">
    <div class=\"layout\">
      <div class=\"layout__main\">
        <div class=\"bg-dark col-12\">
          <div class=\"container bg-dark\">
            <nav aria-label=\"breadcrumb\">
              <ol class=\"breadcrumb m-0 align-items-center\">
                <li class=\"breadcrumb-item\">
                  <a href=\"#\">
                    <img class=\"img-fluid\" width=\"30px\" src=\"/web/themes/custom/custom_bootstrap/home.png\" alt=\"\">
                  </a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Previous page</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Current page</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </main>

  <footer class=\"mt-auto footer-dark text-light bg-secondary footer\">
    <div class=\"container\">
      {{ page.footer.footer }}
      <div
        class=\"footer__bottom d-flex flex-column-reverse flex-md-row mt-5 border-top justify-content-between align-items-md-center py-3\">
        <div class=\"footer__copy col-5 col-md-3\">{{ page.footer.poweredbydrupal }}</div>
        <div class=\"col-12 col-md-9 d-flex align-items-center justify-content-md-end mb-3 mb-md-0\">
          <div class=\"navbar-brand d-flex align-items-center col-md-5\">
            <a href=\"/\" class=\"site-logo d-block\">
              <img src=\"/web/themes/custom/custom_bootstrap/logo.svg\" alt=\"\">
            </a>
            <div>
              <a href=\"/\" class=\"site-title\">Bootcamp</a>
            </div>
          </div>
          <a href=\"#\" class=\"col-2\"><img class=\"img-fluid w-100\" src=\"/web/themes/custom/custom_bootstrap/i20-logo.png\" alt=\"\"></a>
          <a href=\"#\" class=\"col-1 mx-3\"><img class=\"img-fluid w-100\" src=\"/web/themes/custom/custom_bootstrap/drupaljedi-logo.png\" alt=\"\"></a>
        </div>
      </div>
    </div>
  </footer>
</div>
", "themes/custom/custom_bootstrap/templates/page.html.twig", "E:\\OpenServer\\domains\\drupal\\web\\themes\\custom\\custom_bootstrap\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1);
        static $filters = array("escape" => 8);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
