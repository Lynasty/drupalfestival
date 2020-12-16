<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/views_bootstrap/templates/views-bootstrap-list-group.html.twig */
class __TwigTemplate_f0c5f5fbc9cbf58b37b8c153926e01d98790b1bc21e0a59fd98824dd0b9603d1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 16, "if" => 18, "for" => 32];
        $filters = ["merge" => 19, "escape" => 29];
        $functions = ["create_attribute" => 28];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['merge', 'escape'],
                ['create_attribute']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modules/views_bootstrap/templates/views-bootstrap-list-group.html.twig"));

        // line 16
        $context["div_classes"] = [];
        // line 17
        $context["heading_classes"] = [];
        // line 18
        if (($context["panels"] ?? null)) {
            // line 19
            echo "  ";
            $context["div_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["div_classes"] ?? null)), [0 => "panel", 1 => "panel-default"]);
            // line 20
            echo "  ";
            $context["heading_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["heading_classes"] ?? null)), [0 => "panel-heading"]);
        }
        // line 23
        $context["classes"] = [0 => "views-view-list-group", 1 => "list-group"];
        // line 28
        $context["title_attributes"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->createAttribute(["class" => [0 => "accordion-toggle", 1 => "collapsed"]]);
        // line 29
        if (($context["group_title"] ?? null)) {
            echo "<div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->createAttribute(["class" => ($context["div_classes"] ?? null)]), "html", null, true);
            echo ">";
        }
        // line 30
        if (($context["group_title"] ?? null)) {
            echo "<div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->createAttribute(["class" => ($context["heading_classes"] ?? null)]), "html", null, true);
            echo "><h4>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["group_title"] ?? null)), "html", null, true);
            echo "</h4></div>";
        }
        // line 31
        echo "<ul id=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null)), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 33
            echo "      <li class=\"list-group-item\">
          ";
            // line 34
            if ($this->getAttribute($context["row"], "title", [])) {
                // line 35
                echo "              <h4 class=\"list-group-item-heading\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "title", [])), "html", null, true);
                echo "</h4>
          ";
            }
            // line 37
            echo "          <p class=\"list-group-item-text\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "content", [])), "html", null, true);
            echo "</p>
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</ul>
";
        // line 41
        if (($context["group_title"] ?? null)) {
            echo "</div>";
        }
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "modules/views_bootstrap/templates/views-bootstrap-list-group.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 41,  121 => 40,  111 => 37,  105 => 35,  103 => 34,  100 => 33,  96 => 32,  89 => 31,  81 => 30,  75 => 29,  73 => 28,  71 => 23,  67 => 20,  64 => 19,  62 => 18,  60 => 17,  58 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/views_bootstrap/templates/views-bootstrap-list-group.html.twig", "C:\\wamp64\\www\\drupalfestival\\web\\modules\\views_bootstrap\\templates\\views-bootstrap-list-group.html.twig");
    }
}
