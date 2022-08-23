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

/* themes/custom/custom_bootstrap/templates/input/input--button.html.twig */
class __TwigTemplate_f74c2c0d4ec15bef9badc8a3d3aebd0ab98b53519322c91c4216ba877a70a218 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'input' => [$this, 'block_input'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "input.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("input.html.twig", "themes/custom/custom_bootstrap/templates/input/input--button.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 25
    public function block_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        ob_start();
        // line 26
        echo "    ";
        // line 27
        $context["classes"] = [0 => "btn", 1 => (((        // line 29
($context["type"] ?? null) == "submit")) ? ("js-form-submit") : ("")), 2 => ((((        // line 30
($context["icon"] ?? null) && ($context["icon_position"] ?? null)) &&  !($context["icon_only"] ?? null))) ? (("icon-" . $this->sandbox->ensureToStringAllowed(($context["icon_position"] ?? null), 30, $this->source))) : (""))];
        // line 33
        echo "    ";
        if ((($context["icon"] ?? null) && ($context["icon_only"] ?? null))) {
            // line 34
            echo "      <button class=\"btn position-absolute\" style=\"right: 0\" ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => "icon-only"], "method", false, false, true, 34), 34, $this->source), "html", null, true);
            echo ">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-search\"
             viewBox=\"0 0 16 16\">
          <path
            d=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z\"/>
        </svg>
      </button>
    ";
        } else {
            // line 42
            echo "      ";
            if ((($context["icon_position"] ?? null) == "after")) {
                // line 43
                echo "        <button";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 43), 43, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 43, $this->source), "html", null, true);
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon"] ?? null), 43, $this->source), "html", null, true);
                echo "</button>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 43, $this->source), "html", null, true);
                echo "
      ";
            } else {
                // line 45
                echo "        <button";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 45), 45, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon"] ?? null), 45, $this->source), "html", null, true);
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 45, $this->source), "html", null, true);
                echo "</button>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 45, $this->source), "html", null, true);
                echo "
      ";
            }
            // line 47
            echo "    ";
        }
        // line 48
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 48, $this->source), "html", null, true);
        echo "
  ";
        $___internal_parse_3_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_3_));
    }

    public function getTemplateName()
    {
        return "themes/custom/custom_bootstrap/templates/input/input--button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 25,  102 => 48,  99 => 47,  88 => 45,  77 => 43,  74 => 42,  62 => 34,  59 => 33,  57 => 30,  56 => 29,  55 => 27,  53 => 26,  48 => 25,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"input.html.twig\" %}
{#
/**
 * @file
 * Theme suggestion for \"button\" input form element.
 *
 * Available variables:
 * - attributes: A list of HTML attributes for the input element.
 * - children: Optional additional rendered elements.
 * - icon: An icon.
 * - icon_only: Flag to display only the icon and not the label.
 * - icon_position: Where an icon should be displayed.
 * - label: button label.
 * - prefix: Markup to display before the input element.
 * - suffix: Markup to display after the input element.
 * - type: The type of input.
 *
 * @ingroup templates
 *
 * @see \\Drupal\\bootstrap\\Plugin\\Preprocess\\InputButton
 * @see \\Drupal\\bootstrap\\Plugin\\Preprocess\\Input
 * @see template_preprocess_input()
 */
#}
  {% block input %}{% apply spaceless %}
    {%
      set classes = [
      'btn',
      type == 'submit' ? 'js-form-submit',
      icon and icon_position and not icon_only ? 'icon-' ~ icon_position,
    ]
    %}
    {% if icon and icon_only %}
      <button class=\"btn position-absolute\" style=\"right: 0\" {{ attributes.addClass(classes, 'icon-only') }}>
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-search\"
             viewBox=\"0 0 16 16\">
          <path
            d=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z\"/>
        </svg>
      </button>
    {% else %}
      {% if icon_position == 'after' %}
        <button{{ attributes.addClass(classes) }}>{{ label }}{{ icon }}</button>{{ children }}
      {% else %}
        <button{{ attributes.addClass(classes) }}>{{ icon }}{{ label }}</button>{{ children }}
      {% endif %}
    {% endif %}
    {{ children }}
  {% endapply %}{% endblock %}

", "themes/custom/custom_bootstrap/templates/input/input--button.html.twig", "E:\\OpenServer\\domains\\drupal\\web\\themes\\custom\\custom_bootstrap\\templates\\input\\input--button.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 25, "set" => 27, "if" => 33);
        static $filters = array("escape" => 34, "spaceless" => 25);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'set', 'if'],
                ['escape', 'spaceless'],
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
