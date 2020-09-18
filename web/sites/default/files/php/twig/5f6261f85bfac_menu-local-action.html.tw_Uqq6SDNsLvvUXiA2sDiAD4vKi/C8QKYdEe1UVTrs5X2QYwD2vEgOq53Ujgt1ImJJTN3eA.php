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

/* profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/menu/menu-local-action.html.twig */
class __TwigTemplate_e25b42090c17f370ddadff2914b1de205d109872be7f71a53966d9a8acd56e8b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 8, "if" => 19];
        $filters = ["merge" => 16, "default" => 16, "escape" => 18, "trim" => 18, "join" => 18];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['merge', 'default', 'escape', 'trim', 'join'],
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
        // line 7
        echo "
";
        // line 8
        $context["show_title"] = twig_in_filter(($context["route_name"] ?? null), [0 => "entity.commerce_payment_method.collection"]);
        // line 11
        echo "
";
        // line 12
        $context["classes"] = twig_array_merge([0 => "my-4", 1 => ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 14
($context["element"] ?? null), "#link", [], "array"), "url", []), "routeParameters", []), "node_type", []) == "forum")) ? ("forum__add") : ("")), 2 => ((        // line 15
($context["show_title"] ?? null)) ? ("d-flex justify-content-between align-items-center") : (""))], ((        // line 16
(isset($context["classes"]) || array_key_exists("classes", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null)), [])) : ([])));
        // line 17
        echo "
<div class=\"";
        // line 18
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(twig_join_filter($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null)), " ")), "html", null, true);
        echo "\">
    ";
        // line 19
        if (($context["show_title"] ?? null)) {
            // line 20
            echo "        <h4 class=\"mb-0\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</h4>
    ";
        }
        // line 22
        echo "
    ";
        // line 23
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null)), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/menu/menu-local-action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 23,  83 => 22,  77 => 20,  75 => 19,  71 => 18,  68 => 17,  66 => 16,  65 => 15,  64 => 14,  63 => 12,  60 => 11,  58 => 8,  55 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/menu/menu-local-action.html.twig", "/usr/local/var/groupm2/web/profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/menu/menu-local-action.html.twig");
    }
}
