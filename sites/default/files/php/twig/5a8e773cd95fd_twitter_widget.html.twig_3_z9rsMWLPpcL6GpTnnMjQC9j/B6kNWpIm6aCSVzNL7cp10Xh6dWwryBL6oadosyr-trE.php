<?php

/* modules/twitter_profile_widget/templates/twitter_widget.html.twig */
class __TwigTemplate_105a993e0c6a43b3dcbe3c80b5891eacd830a7df41eab19fe3d680de5adc6759 extends Twig_Template
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
        $tags = array("if" => 31, "for" => 36);
        $filters = array("raw" => 44);
        $functions = array("attach_library" => 29);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for'),
                array('raw'),
                array('attach_library')
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

        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("twitter_profile_widget/twitter-profile-widget"), "html", null, true));
        echo "
<div";
        // line 30
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "twitter_widget"), "method"), "html", null, true));
        echo ">
  ";
        // line 31
        if (($context["headline"] ?? null)) {
            // line 32
            echo "    <h3 class=\"headline\"> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["headline"] ?? null), "html", null, true));
            echo " </h3>
  ";
        }
        // line 34
        echo "
  ";
        // line 35
        if (($context["tweets"] ?? null)) {
            // line 36
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tweets"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["tweet"]) {
                // line 37
                echo "      <div class=\"tweet\" id=\"tweet-";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["key"], "html", null, true));
                echo "'\">
        ";
                // line 38
                if ($this->getAttribute($context["tweet"], "retweet_user", array())) {
                    // line 39
                    echo "          <div class=\"retweet-eyebrow\"><a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["tweet"], "retweet_link", array()), "html", null, true));
                    echo "\">&#x21c4; ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["tweet"], "retweet_user", array()), "html", null, true));
                    echo "</div>
        ";
                }
                // line 41
                echo "        <div class=\"tweet-image\"><img src=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["tweet"], "image", array()), "html", null, true));
                echo "\" alt=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["tweet"], "image_user", array()), "html", null, true));
                echo "\" /></div>
        <div class=\"tweet-author\">";
                // line 42
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["tweet"], "author", array()), "html", null, true));
                echo "</div>
        <div class=\"tweet-username\">";
                // line 43
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["tweet"], "username", array()), "html", null, true));
                echo "</div>
        <div class=\"tweet-text\">";
                // line 44
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($context["tweet"], "text", array())));
                echo "</div>
        <div class=\"tweet-time\">";
                // line 45
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["tweet"], "time_ago", array()), "html", null, true));
                echo "</div>
        <ul class=\"tweet-actions\">
          <li class=\"tweet-action\"><a class=\"action-link icon-reply2\" href=\"";
                // line 47
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["tweet"], "tweet_reply2", array()), "html", null, true));
                echo "\" title=\"Reply\">&#x21ba;</a></li>
          <li class=\"tweet-action\"><a class=\"action-link icon-retweet\" href=\"";
                // line 48
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["tweet"], "tweet_retweet", array()), "html", null, true));
                echo "\" title=\"Retweet\">&#x21c4;</a></li>
          <li class=\"tweet-action\"><a class=\"action-link icon-star\" href=\"";
                // line 49
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["tweet"], "tweet_star", array()), "html", null, true));
                echo "\" title=\"Favorite\">&#x2606;</a></li>
        </ul>
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['tweet'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "  ";
        }
        // line 54
        echo "
  ";
        // line 55
        if (($context["view_all"] ?? null)) {
            // line 56
            echo "    <div class=\"view-all\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["view_all"] ?? null), "html", null, true));
            echo "</div>
  ";
        }
        // line 58
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/twitter_profile_widget/templates/twitter_widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 58,  134 => 56,  132 => 55,  129 => 54,  126 => 53,  116 => 49,  112 => 48,  108 => 47,  103 => 45,  99 => 44,  95 => 43,  91 => 42,  84 => 41,  76 => 39,  74 => 38,  69 => 37,  64 => 36,  62 => 35,  59 => 34,  53 => 32,  51 => 31,  47 => 30,  43 => 29,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/twitter_profile_widget/templates/twitter_widget.html.twig", "/opt/lampp/htdocs/bck/modules/twitter_profile_widget/templates/twitter_widget.html.twig");
    }
}
