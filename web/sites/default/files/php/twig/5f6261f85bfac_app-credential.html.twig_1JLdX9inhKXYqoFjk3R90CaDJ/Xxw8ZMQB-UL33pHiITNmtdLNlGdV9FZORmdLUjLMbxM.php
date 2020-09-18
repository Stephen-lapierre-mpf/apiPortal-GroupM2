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

/* modules/contrib/apigee_edge/templates/app-credential.html.twig */
class __TwigTemplate_4a959c4bda9020b05a3cc2edbba074eea10002fc6e4bda63dc1abf3f2d559688 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 30];
        $filters = ["escape" => 27, "merge" => 32, "default" => 32, "t" => 37];
        $functions = ["attach_library" => 27];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape', 'merge', 'default', 't'],
                ['attach_library']
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
        // line 27
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("apigee_edge/apigee_edge.app_credential"), "html", null, true);
        echo "

";
        // line 30
        $context["classes"] = twig_array_merge([0 => "app-credential"], ((        // line 32
(isset($context["classes"]) || array_key_exists("classes", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null)), [])) : ([])));
        // line 34
        echo "
<fieldset ";
        // line 35
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  <legend>
    ";
        // line 37
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Credential"));
        echo "
  </legend>
  <div class=\"fieldset-wrapper\">
    ";
        // line 40
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["operations"] ?? null)), "html", null, true);
        echo "
    ";
        // line 41
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["primary_wrapper"] ?? null)), "html", null, true);
        echo "
    ";
        // line 42
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["secondary_wrapper"] ?? null)), "html", null, true);
        echo "
  </div>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/apigee_edge/templates/app-credential.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 42,  81 => 41,  77 => 40,  71 => 37,  66 => 35,  63 => 34,  61 => 32,  60 => 30,  55 => 27,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/apigee_edge/templates/app-credential.html.twig", "/usr/local/var/groupm2/web/modules/contrib/apigee_edge/templates/app-credential.html.twig");
    }
}
