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

/* __string_template__61aa064c63b6e3f740db9002c82e4c813b00815d7fc932edf08a60c9f30e31e4 */
class __TwigTemplate_6f6bfb1e070c3a3d85394ae47e05ba6ccf8960706ed9b699aa85921e634cc9ea extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 8, "trans" => 11];
        $filters = ["escape" => 13];
        $functions = ["path" => 8];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                ['escape'],
                ['path']
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
        $context["page_example_simple"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("page_example.simple");
        // line 9
        $context["page_example_arguments"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("page_example.arguments", ["first" => 23, "second" => 56]);
        // line 10
        echo "
";
        // line 11
        echo t("<p>The Page example module provides two pages, \"simple\" and \"arguments\".</p>
<p>The <a href=@page_example_simple>simple page</a> just returns a renderable array for display.</p>
<p>The <a href=@page_example_arguments>arguments page</a> takes two arguments and displays them, as in @page_example_arguments</p>", array("@page_example_simple" =>         // line 13
($context["page_example_simple"] ?? null), "@page_example_arguments" =>         // line 14
($context["page_example_arguments"] ?? null), "@page_example_arguments" => ($context["page_example_arguments"] ?? null), ));
    }

    public function getTemplateName()
    {
        return "__string_template__61aa064c63b6e3f740db9002c82e4c813b00815d7fc932edf08a60c9f30e31e4";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 14,  68 => 13,  65 => 11,  62 => 10,  60 => 9,  58 => 8,  55 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__61aa064c63b6e3f740db9002c82e4c813b00815d7fc932edf08a60c9f30e31e4", "");
    }
}
