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

/* profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/apigee-entity--app.html.twig */
class __TwigTemplate_e8b5699353bf27734913cc9169db3ea2ca6cf5da15783490161270fc8795acd7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 43, "set" => 44, "block" => 50];
        $filters = ["clean_class" => 46, "escape" => 51, "without" => 62, "t" => 68];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'block'],
                ['clean_class', 'escape', 'without', 't'],
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
        // line 42
        echo "
";
        // line 43
        if (twig_in_filter($this->getAttribute(($context["entity"] ?? null), "getEntityTypeId", []), [0 => "developer_app", 1 => "team_app"])) {
            // line 44
            echo "  ";
            $context["classes"] = [0 => "apigee-entity--app", 1 => ("apigee-entity--app--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 46
($context["view_mode"] ?? null))))];
        }
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = [])
    {
        // line 51
        echo "  <div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">

    ";
        // line 53
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "warnings", [])), "html", null, true);
        echo "

    ";
        // line 55
        if ($this->getAttribute(($context["content"] ?? null), "credentials", [])) {
            // line 56
            echo "      <div class=\"tab-pane show active\" id=\"credentials-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tab_suffix"] ?? null)), "html", null, true);
            echo "\">
        <div class=\"card apigee-entity--app__details\">
          <h4 class=\"card-header bg-white\">
            ";
            // line 59
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("Details");
            echo "
          </h4>
          <div class=\"card-body\">
            ";
            // line 62
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "credentials", "warnings", "add_keys"), "html", null, true);
            echo "
          </div>
        </div>

        <div class=\"card apigee-entity--app__credentials\">
          <h4 class=\"card-header bg-white\">
            ";
            // line 68
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Credentials"));
            echo "
            ";
            // line 69
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "add_keys", [])), "html", null, true);
            echo "
          </h4>
          <div class=\"card-body pb-0\">
            ";
            // line 72
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "credentials", []), "approved", [])), "html", null, true);
            echo "
          </div>
        </div>

        ";
            // line 76
            if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "credentials", []), "revoked", [])) {
                // line 77
                echo "          <div class=\"apigee-entity--app__credentials\">
            ";
                // line 78
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "credentials", []), "revoked", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 81
            echo "      </div>
    ";
        }
        // line 83
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/apigee-entity--app.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 83,  138 => 81,  132 => 78,  129 => 77,  127 => 76,  120 => 72,  114 => 69,  110 => 68,  101 => 62,  95 => 59,  88 => 56,  86 => 55,  81 => 53,  75 => 51,  69 => 50,  66 => 49,  63 => 46,  61 => 44,  59 => 43,  56 => 42,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/apigee-entity--app.html.twig", "/usr/local/var/groupm2/web/profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/apigee-entity--app.html.twig");
    }
}
