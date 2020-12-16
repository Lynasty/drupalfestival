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

/* modules/views_bootstrap/templates/views-bootstrap-grid.html.twig */
class __TwigTemplate_843f676fb50a7a0f0b59f35334e4b1a0ffe3cd46e657187775149449b1e3fe5c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 16, "if" => 35, "for" => 40];
        $filters = ["escape" => 36];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape'],
                []
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modules/views_bootstrap/templates/views-bootstrap-grid.html.twig"));

        // line 16
        $context["classes"] = [0 => "views-view-grid", 1 => $this->getAttribute(        // line 18
($context["options"] ?? null), "alignment", [])];
        // line 22
        $context["row_classes"] = [0 => "row"];
        // line 27
        $context["col_classes"] = [0 => "col", 1 =>         // line 29
($context["col_xs"] ?? null), 2 =>         // line 30
($context["col_sm"] ?? null), 3 =>         // line 31
($context["col_md"] ?? null), 4 =>         // line 32
($context["col_lg"] ?? null)];
        // line 35
        if (($context["title"] ?? null)) {
            // line 36
            echo "  <h3>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</h3>
";
        }
        // line 38
        echo "<div id=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null)), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 39
        if (($this->getAttribute(($context["options"] ?? null), "alignment", []) == "horizontal")) {
            // line 40
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 41
                echo "      <div";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["row"], "attributes", []), "addClass", [0 => ($context["row_classes"] ?? null), 1 => (($this->getAttribute(($context["options"] ?? null), "row_class_default", [])) ? (("row-" . $this->sandbox->ensureToStringAllowed($this->getAttribute($context["loop"], "index", [])))) : (""))], "method")), "html", null, true);
                echo ">
        ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "content", []));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 43
                    echo "          <div";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["column"], "attributes", []), "addClass", [0 => ($context["col_classes"] ?? null), 1 => (($this->getAttribute(($context["options"] ?? null), "col_class_default", [])) ? (("col-" . $this->sandbox->ensureToStringAllowed($this->getAttribute($context["loop"], "index", [])))) : (""))], "method")), "html", null, true);
                    echo ">
            ";
                    // line 44
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "content", [])), "html", null, true);
                    echo "
          </div>
          ";
                    // line 46
                    if ((0 == $this->getAttribute($context["loop"], "index", []) % $this->getAttribute(($context["sizes"] ?? null), "xs", []))) {
                        // line 47
                        echo "            <div class=\"clearfix visible-xs-block\"></div>
          ";
                    }
                    // line 49
                    echo "
          ";
                    // line 50
                    if ((0 == $this->getAttribute($context["loop"], "index", []) % $this->getAttribute(($context["sizes"] ?? null), "sm", []))) {
                        // line 51
                        echo "            <div class=\"clearfix visible-sm-block\"></div>
          ";
                    }
                    // line 53
                    echo "
          ";
                    // line 54
                    if ((0 == $this->getAttribute($context["loop"], "index", []) % $this->getAttribute(($context["sizes"] ?? null), "md", []))) {
                        // line 55
                        echo "            <div class=\"clearfix visible-md-block\"></div>
          ";
                    }
                    // line 57
                    echo "
          ";
                    // line 58
                    if ((0 == $this->getAttribute($context["loop"], "index", []) % $this->getAttribute(($context["sizes"] ?? null), "lg", []))) {
                        // line 59
                        echo "            <div class=\"clearfix visible-lg-block\"></div>
          ";
                    }
                    // line 61
                    echo "        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "      </div>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "  ";
        } else {
            // line 65
            echo "    <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["row"] ?? null), "attributes", []), "addClass", [0 => ($context["row_classes"] ?? null), 1 => (($this->getAttribute(($context["options"] ?? null), "row_class_default", [])) ? (("row-" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["loop"] ?? null), "index", [])))) : (""))], "method")), "html", null, true);
            echo ">
      ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 67
                echo "        <div";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["column"], "attributes", []), "addClass", [0 => ($context["col_classes"] ?? null), 1 => (($this->getAttribute(($context["options"] ?? null), "col_class_default", [])) ? (("col-" . $this->sandbox->ensureToStringAllowed($this->getAttribute($context["loop"], "index", [])))) : (""))], "method")), "html", null, true);
                echo ">
          ";
                // line 68
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "content", []));
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 69
                    echo "            ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "content", [])), "html", null, true);
                    echo "
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "        </div>
        ";
                // line 72
                if ((0 == $this->getAttribute($context["loop"], "index", []) % $this->getAttribute(($context["sizes"] ?? null), "xs", []))) {
                    // line 73
                    echo "          <div class=\"clearfix visible-xs-block\"></div>
        ";
                }
                // line 75
                echo "
        ";
                // line 76
                if ((0 == $this->getAttribute($context["loop"], "index", []) % $this->getAttribute(($context["sizes"] ?? null), "sm", []))) {
                    // line 77
                    echo "          <div class=\"clearfix visible-sm-block\"></div>
        ";
                }
                // line 79
                echo "
        ";
                // line 80
                if ((0 == $this->getAttribute($context["loop"], "index", []) % $this->getAttribute(($context["sizes"] ?? null), "md", []))) {
                    // line 81
                    echo "          <div class=\"clearfix visible-md-block\"></div>
        ";
                }
                // line 83
                echo "
        ";
                // line 84
                if ((0 == $this->getAttribute($context["loop"], "index", []) % $this->getAttribute(($context["sizes"] ?? null), "lg", []))) {
                    // line 85
                    echo "          <div class=\"clearfix visible-lg-block\"></div>
        ";
                }
                // line 87
                echo "      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "    </div>
  ";
        }
        // line 90
        echo "</div>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "modules/views_bootstrap/templates/views-bootstrap-grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 90,  291 => 88,  277 => 87,  273 => 85,  271 => 84,  268 => 83,  264 => 81,  262 => 80,  259 => 79,  255 => 77,  253 => 76,  250 => 75,  246 => 73,  244 => 72,  241 => 71,  232 => 69,  228 => 68,  223 => 67,  206 => 66,  201 => 65,  198 => 64,  183 => 62,  169 => 61,  165 => 59,  163 => 58,  160 => 57,  156 => 55,  154 => 54,  151 => 53,  147 => 51,  145 => 50,  142 => 49,  138 => 47,  136 => 46,  131 => 44,  126 => 43,  109 => 42,  104 => 41,  86 => 40,  84 => 39,  77 => 38,  71 => 36,  69 => 35,  67 => 32,  66 => 31,  65 => 30,  64 => 29,  63 => 27,  61 => 22,  59 => 18,  58 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/views_bootstrap/templates/views-bootstrap-grid.html.twig", "C:\\wamp64\\www\\drupalfestival\\web\\modules\\views_bootstrap\\templates\\views-bootstrap-grid.html.twig");
    }
}
