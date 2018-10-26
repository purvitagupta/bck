<?php

/* {# inline_template_start #}<div class="story-video">{{ field_story_video }}</div>
<div class="story-problem">{{ field_the_problem }}</div>
<div class="story-response">{{ field_bck_s_response }}</div>
<div class="story-outcome">{{ field_the_outcome }}</div>

<div class="story-detail">
<div class="story-client">{{ field_client }} </div>
<div class="story-year"><div class="label">Date: </div><div class="date">{{ field_start_year }}-{{ field_end_year }}</div></div>
<div class="story-service">{{ field_service }}</div>
</div> */
class __TwigTemplate_d02ea25bc13d187359c297901e5627edbe2d784ba5447ea2c23d62771e5d09e8 extends Twig_Template
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
        echo "<div class=\"story-video\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_story_video"] ?? null), "html", null, true));
        echo "</div>
<div class=\"story-problem\">";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_the_problem"] ?? null), "html", null, true));
        echo "</div>
<div class=\"story-response\">";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_bck_s_response"] ?? null), "html", null, true));
        echo "</div>
<div class=\"story-outcome\">";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_the_outcome"] ?? null), "html", null, true));
        echo "</div>

<div class=\"story-detail\">
<div class=\"story-client\">";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_client"] ?? null), "html", null, true));
        echo " </div>
<div class=\"story-year\"><div class=\"label\">Date: </div><div class=\"date\">";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_start_year"] ?? null), "html", null, true));
        echo "-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_end_year"] ?? null), "html", null, true));
        echo "</div></div>
<div class=\"story-service\">";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_service"] ?? null), "html", null, true));
        echo "</div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"story-video\">{{ field_story_video }}</div>
<div class=\"story-problem\">{{ field_the_problem }}</div>
<div class=\"story-response\">{{ field_bck_s_response }}</div>
<div class=\"story-outcome\">{{ field_the_outcome }}</div>

<div class=\"story-detail\">
<div class=\"story-client\">{{ field_client }} </div>
<div class=\"story-year\"><div class=\"label\">Date: </div><div class=\"date\">{{ field_start_year }}-{{ field_end_year }}</div></div>
<div class=\"story-service\">{{ field_service }}</div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 9,  75 => 8,  71 => 7,  65 => 4,  61 => 3,  57 => 2,  52 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"story-video\">{{ field_story_video }}</div>
<div class=\"story-problem\">{{ field_the_problem }}</div>
<div class=\"story-response\">{{ field_bck_s_response }}</div>
<div class=\"story-outcome\">{{ field_the_outcome }}</div>

<div class=\"story-detail\">
<div class=\"story-client\">{{ field_client }} </div>
<div class=\"story-year\"><div class=\"label\">Date: </div><div class=\"date\">{{ field_start_year }}-{{ field_end_year }}</div></div>
<div class=\"story-service\">{{ field_service }}</div>
</div>", "");
    }
}
