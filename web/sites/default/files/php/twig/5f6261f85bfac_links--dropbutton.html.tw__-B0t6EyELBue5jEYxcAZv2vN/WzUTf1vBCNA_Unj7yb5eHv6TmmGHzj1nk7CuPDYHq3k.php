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

/* profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/navigation/links--dropbutton.html.twig */
class __TwigTemplate_3e07961123788fafa249a4fe643ca3cab26d1fd87de976a1649dd38c41f4b56a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 7, "set" => 19, "for" => 26];
        $filters = ["escape" => 10];
        $functions = ["create_attribute" => 19];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape'],
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
        // line 7
        if ((($context["links"] ?? null) || ($context["button"] ?? null))) {
            // line 8
            if (($context["heading"] ?? null)) {
                // line 9
                if ($this->getAttribute(($context["heading"] ?? null), "level", [])) {
                    // line 10
                    echo "<";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["heading"] ?? null), "level", [])), "html", null, true);
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["heading"] ?? null), "attributes", [])), "html", null, true);
                    echo ">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["heading"] ?? null), "text", [])), "html", null, true);
                    echo "</";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["heading"] ?? null), "level", [])), "html", null, true);
                    echo ">";
                } else {
                    // line 12
                    echo "<h2";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["heading"] ?? null), "attributes", [])), "html", null, true);
                    echo ">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["heading"] ?? null), "text", [])), "html", null, true);
                    echo "</h2>";
                }
            }
            // line 15
            echo "<ul";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
            echo ">

    ";
            // line 17
            if (($context["split"] ?? null)) {
                // line 18
                echo "      ";
                if ($this->getAttribute($this->getAttribute(($context["button"] ?? null), "#options", [], "array"), "attributes", [])) {
                    // line 19
                    echo "        ";
                    $context["button_attributes"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->createAttribute($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["button"] ?? null), "#options", [], "array"), "attributes", [])));
                    // line 20
                    echo "      ";
                } else {
                    // line 21
                    echo "        ";
                    $context["button_attributes"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->createAttribute();
                    // line 22
                    echo "      ";
                }
                // line 23
                echo "      <li><a";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["button_attributes"] ?? null), "removeClass", [0 => [0 => "btn", 1 => "btn-sm", 2 => "btn-outline-dark"]], "method")), "html", null, true);
                echo " href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["button"] ?? null), "#url", [], "array"), "toString", [])), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["button"] ?? null), "#title", [], "array")), "html", null, true);
                echo "</a></li>
    ";
            }
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 27
                echo "<li";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "removeClass", [0 => "dropdown-item"], "method")), "html", null, true);
                echo ">";
                // line 28
                if ($this->getAttribute($context["item"], "link", [])) {
                    // line 29
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "link", []), "#options", [], "array"), "attributes", [])) {
                        // line 30
                        echo "            ";
                        $context["link_attributes"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->createAttribute($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "link", []), "#options", [], "array"), "attributes", [])));
                        // line 31
                        echo "          ";
                    } else {
                        // line 32
                        echo "            ";
                        $context["link_attributes"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->createAttribute();
                        // line 33
                        echo "          ";
                    }
                    // line 34
                    echo "          <a";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["link_attributes"] ?? null), "removeClass", [0 => "dropdown-item"], "method")), "html", null, true);
                    echo " href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "link", []), "#url", [], "array"), "toString", [])), "html", null, true);
                    echo "\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "link", []), "#title", [], "array")), "html", null, true);
                    echo "</a>";
                } elseif ($this->getAttribute(                // line 35
$context["item"], "text_attributes", [])) {
                    // line 36
                    echo "<span";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "text_attributes", [])), "html", null, true);
                    echo ">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "text", [])), "html", null, true);
                    echo "</span>";
                } else {
                    // line 38
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "text", [])), "html", null, true);
                }
                // line 40
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "</ul>";
        }
    }

    public function getTemplateName()
    {
        return "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/navigation/links--dropbutton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 42,  156 => 40,  153 => 38,  146 => 36,  144 => 35,  136 => 34,  133 => 33,  130 => 32,  127 => 31,  124 => 30,  122 => 29,  120 => 28,  116 => 27,  112 => 26,  102 => 23,  99 => 22,  96 => 21,  93 => 20,  90 => 19,  87 => 18,  85 => 17,  79 => 15,  71 => 12,  61 => 10,  59 => 9,  57 => 8,  55 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/navigation/links--dropbutton.html.twig", "/usr/local/var/groupm2/web/profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/navigation/links--dropbutton.html.twig");
    }
}
