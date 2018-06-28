<?php

/* themes/contrib/newsplus_lite-8.x-1.1/newsplus_lite/templates/node--article--teaser.html.twig */
class __TwigTemplate_53a38871a87d649c1dd00848f0aa3cf054e82d4a11aca82f34669d2ef3da8881 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 65
        $this->parent = $this->loadTemplate("node.html.twig", "themes/contrib/newsplus_lite-8.x-1.1/newsplus_lite/templates/node--article--teaser.html.twig", 65);
        $this->blocks = array(
            'above_header' => array($this, 'block_above_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "node.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 67);
        $filters = array("without" => 75);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('without'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 66
    public function block_above_header($context, array $blocks = array())
    {
        // line 67
        echo "  ";
        if (($context["has_image"] ?? null)) {
            // line 68
            echo "    <div class=\"teaser-image-wrapper\">
      ";
            // line 69
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_image", array()), "html", null, true));
            echo "
    </div>
  ";
        }
    }

    // line 73
    public function block_content($context, array $blocks = array())
    {
        // line 74
        echo "  <div class=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_class"] ?? null), "html", null, true));
        echo "\">
    ";
        // line 75
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["content"] ?? null), "field_image", "links"), "html", null, true));
        echo "
  </div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/newsplus_lite-8.x-1.1/newsplus_lite/templates/node--article--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 75,  73 => 74,  70 => 73,  62 => 69,  59 => 68,  56 => 67,  53 => 66,  11 => 65,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/newsplus_lite-8.x-1.1/newsplus_lite/templates/node--article--teaser.html.twig", "S:\\space\\www\\cms\\drupal\\v8\\formation-drupal-8\\themes\\contrib\\newsplus_lite-8.x-1.1\\newsplus_lite\\templates\\node--article--teaser.html.twig");
    }
}
