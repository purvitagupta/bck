<?php

/* {# inline_template_start #}<div class="project-details"> 
<span class="project-name">{{ title }}</span> <span class="project-description">{{ field_law }}</span>
   
            <a href="{{ base_url }}/story/{{ nid }}" class="morestory btn btn-outline-light" target="_blank">>The Story <i class="fa fa-long-arrow-right fa-fw"></i></a>
    <a href="{{ base_url }}/story/{{ nid }}" class="use-ajax btn btn-outline-light" target="_blank">>The Story <i class="fa fa-long-arrow-right fa-fw"></i></a>
</div>
          */
class __TwigTemplate_fbf3a0689970df90c3c29f9c674ecde05abd8580eadcdc935c74fef05523b83b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
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

        // line 1
        echo "<div class=\"project-details\"> 
<span class=\"project-name\">";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</span> <span class=\"project-description\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_law"] ?? null), "html", null, true));
        echo "</span>
   
            <a href=\"";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["base_url"] ?? null), "html", null, true));
        echo "/story/";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["nid"] ?? null), "html", null, true));
        echo "\" class=\"morestory btn btn-outline-light\" target=\"_blank\">>The Story <i class=\"fa fa-long-arrow-right fa-fw\"></i></a>
    <a href=\"";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["base_url"] ?? null), "html", null, true));
        echo "/story/";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["nid"] ?? null), "html", null, true));
        echo "\" class=\"use-ajax btn btn-outline-light\" target=\"_blank\">>The Story <i class=\"fa fa-long-arrow-right fa-fw\"></i></a>
</div>
         ";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"project-details\"> 
<span class=\"project-name\">{{ title }}</span> <span class=\"project-description\">{{ field_law }}</span>
   
            <a href=\"{{ base_url }}/story/{{ nid }}\" class=\"morestory btn btn-outline-light\" target=\"_blank\">>The Story <i class=\"fa fa-long-arrow-right fa-fw\"></i></a>
    <a href=\"{{ base_url }}/story/{{ nid }}\" class=\"use-ajax btn btn-outline-light\" target=\"_blank\">>The Story <i class=\"fa fa-long-arrow-right fa-fw\"></i></a>
</div>
         ";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 5,  59 => 4,  52 => 2,  49 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"project-details\"> 
<span class=\"project-name\">{{ title }}</span> <span class=\"project-description\">{{ field_law }}</span>
   
            <a href=\"{{ base_url }}/story/{{ nid }}\" class=\"morestory btn btn-outline-light\" target=\"_blank\">>The Story <i class=\"fa fa-long-arrow-right fa-fw\"></i></a>
    <a href=\"{{ base_url }}/story/{{ nid }}\" class=\"use-ajax btn btn-outline-light\" target=\"_blank\">>The Story <i class=\"fa fa-long-arrow-right fa-fw\"></i></a>
</div>
         ", "");
    }
}
