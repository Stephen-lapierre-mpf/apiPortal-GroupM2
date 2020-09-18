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

/* profiles/contrib/apigee_devportal_kickstart/modules/custom/apigee_kickstart_enhancement/templates/secret.html.twig */
class __TwigTemplate_1c0b9cb1ed52fdd427a2cfba60e158452498bb39c9ddf994fab8c05ed7981d96 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 12, "t" => 23];
        $functions = ["attach_library" => 12];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 't'],
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
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("apigee_kickstart_enhancement/secret"), "html", null, true);
        echo "
<div class=\"secret\">
  <span class=\"secret__value\">";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["value"] ?? null)), "html", null, true);
        echo "</span>
  <span class=\"secret__value__hidden\">••••••••••••••••</span>

  <button class=\"secret__toggle\">
    <i class=\"fas fa-eye secret__toggle__show\"></i>
    <i class=\"fas fa-eye-slash secret__toggle__hide\"></i>
  </button>

  <div class=\"secret__copy\">
    <span class=\"badge badge-light\">";
        // line 23
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Copied"));
        echo "</span>
    <button class=\"secret__copy\" data-value=\"";
        // line 24
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["value"] ?? null)), "html", null, true);
        echo "\" title=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Click to copy"));
        echo "\">
      <i class=\"fas fa-paste\"></i>
    </button>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/apigee_devportal_kickstart/modules/custom/apigee_kickstart_enhancement/templates/secret.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 24,  72 => 23,  60 => 14,  55 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/apigee_devportal_kickstart/modules/custom/apigee_kickstart_enhancement/templates/secret.html.twig", "/usr/local/var/groupm2/web/profiles/contrib/apigee_devportal_kickstart/modules/custom/apigee_kickstart_enhancement/templates/secret.html.twig");
    }
}
