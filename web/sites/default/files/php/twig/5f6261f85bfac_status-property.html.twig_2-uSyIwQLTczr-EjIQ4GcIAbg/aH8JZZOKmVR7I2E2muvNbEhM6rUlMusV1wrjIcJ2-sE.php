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

/* profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/status-property.html.twig */
class __TwigTemplate_2c3b2c1adf85a1671f9610818411eecd9c79d0d8204be51a205597b21be51956 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 13, "include" => 21];
        $filters = ["default" => 22, "lower" => 22, "trim" => 22, "capitalize" => 23];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include'],
                ['default', 'lower', 'trim', 'capitalize'],
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
        // line 13
        $context["statuses"] = ["approved" => "success", "active" => "success", "revoked" => "danger", "expired" => "warning", "pending" => "warning"];
        // line 20
        echo "
";
        // line 21
        $this->loadTemplate("@radix/badge/badge.twig", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/status-property.html.twig", 21)->display(twig_array_merge($context, ["type" => (($this->getAttribute(        // line 22
($context["statuses"] ?? null), twig_lower_filter($this->env, twig_trim_filter($this->getAttribute(($context["element"] ?? null), "value", []))), [], "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["statuses"] ?? null), twig_lower_filter($this->env, twig_trim_filter($this->getAttribute(($context["element"] ?? null), "value", []))), [], "array"), "info")) : ("info")), "content" => twig_capitalize_string_filter($this->env, $this->getAttribute(        // line 23
($context["element"] ?? null), "value", []))]));
    }

    public function getTemplateName()
    {
        return "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/status-property.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 23,  61 => 22,  60 => 21,  57 => 20,  55 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/status-property.html.twig", "/usr/local/var/groupm2/web/profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/status-property.html.twig");
    }
}
