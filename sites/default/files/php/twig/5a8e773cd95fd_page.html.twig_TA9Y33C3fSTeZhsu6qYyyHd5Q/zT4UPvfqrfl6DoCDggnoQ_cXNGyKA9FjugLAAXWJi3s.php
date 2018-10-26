<?php

/* themes/showcase_lite/templates/page.html.twig */
class __TwigTemplate_d55861301e4c1ec905ce4851c960f393089f400dd47035ce20313c07a2b32f4f extends Twig_Template
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
        $tags = array("if" => 75);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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

        // line 75
        if ($this->getAttribute(($context["page"] ?? null), "slideout", array())) {
            // line 76
            echo "  ";
            // line 77
            echo "  <div class=\"clearfix slideout ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["slideout_background_color"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["slideout_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["slideout_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
    ";
            // line 79
            echo "    <div class=\"clearfix slideout__container\">
      <div class=\"slideout__section\">
        ";
            // line 81
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "slideout", array()), "html", null, true));
            echo "
      </div>
    </div>
    ";
            // line 85
            echo "  </div>
  ";
            // line 87
            echo "
  ";
            // line 89
            echo "  <button class=\"slideout-toggle slideout-toggle--fixed\"><i class=\"fa fa-align-justify\"></i></button>
  ";
        }
        // line 92
        echo "
";
        // line 94
        echo "<div class=\"page-content\">

  ";
        // line 96
        if ((((((($this->getAttribute(($context["page"] ?? null), "header_top_first", array()) || $this->getAttribute(($context["page"] ?? null), "header_top_second", array())) || $this->getAttribute(($context["page"] ?? null), "header_first", array())) || $this->getAttribute(($context["page"] ?? null), "header", array())) || $this->getAttribute(($context["page"] ?? null), "header_third", array())) || $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", array())) || $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", array()))) {
            // line 97
            echo "    ";
            // line 98
            echo "    <div class=\"header-container\">

      ";
            // line 100
            if (($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", array()) || $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", array()))) {
                // line 101
                echo "        ";
                // line 102
                echo "        <div class=\"clearfix header-top-highlighted ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_highlighted_background_color"] ?? null), "html", null, true));
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
                echo "\">
          <div class=\"";
                // line 103
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_highlighted_layout_container"] ?? null), "html", null, true));
                echo "\">
            ";
                // line 105
                echo "            <div class=\"clearfix header-top-highlighted__container";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["header_top_highlighted_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
                echo "\"
              ";
                // line 106
                if ((($context["header_top_highlighted_animations"] ?? null) == "enabled")) {
                    // line 107
                    echo "                data-animate-effect=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_highlighted_animation_effect"] ?? null), "html", null, true));
                    echo "\"
              ";
                }
                // line 108
                echo ">
              <div class=\"row\">
                ";
                // line 110
                if ($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", array())) {
                    // line 111
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_highlighted_first_grid_class"] ?? null), "html", null, true));
                    echo "\">
                    ";
                    // line 113
                    echo "                    <div class=\"clearfix header-top-highlighted__section header-top-highlighted-first\">
                      ";
                    // line 114
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", array()), "html", null, true));
                    echo "
                    </div>
                    ";
                    // line 117
                    echo "                  </div>
                ";
                }
                // line 119
                echo "                ";
                if ($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", array())) {
                    // line 120
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_highlighted_second_grid_class"] ?? null), "html", null, true));
                    echo "\">
                    ";
                    // line 122
                    echo "                    <div class=\"clearfix header-top-highlighted__section header-top-highlighted-second\">
                      ";
                    // line 123
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", array()), "html", null, true));
                    echo "
                    </div>
                    ";
                    // line 126
                    echo "                  </div>
                ";
                }
                // line 128
                echo "              </div>
            </div>
            ";
                // line 131
                echo "          </div>
        </div>
        ";
                // line 134
                echo "      ";
            }
            // line 135
            echo "
      ";
            // line 136
            if (($this->getAttribute(($context["page"] ?? null), "header_top_first", array()) || $this->getAttribute(($context["page"] ?? null), "header_top_second", array()))) {
                // line 137
                echo "        ";
                // line 138
                echo "        <div class=\"clearfix header-top ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_background_color"] ?? null), "html", null, true));
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
                echo "\">
          <div class=\"";
                // line 139
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_layout_container"] ?? null), "html", null, true));
                echo "\">
            ";
                // line 141
                echo "            <div class=\"clearfix header-top__container";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["header_top_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
                echo "\"
              ";
                // line 142
                if ((($context["header_top_animations"] ?? null) == "enabled")) {
                    // line 143
                    echo "                data-animate-effect=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_animation_effect"] ?? null), "html", null, true));
                    echo "\"
              ";
                }
                // line 144
                echo ">
              <div class=\"row\">
                ";
                // line 146
                if ($this->getAttribute(($context["page"] ?? null), "header_top_first", array())) {
                    // line 147
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_first_grid_class"] ?? null), "html", null, true));
                    echo "\">
                    ";
                    // line 149
                    echo "                    <div class=\"clearfix header-top__section header-top-first\">
                      ";
                    // line 150
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_top_first", array()), "html", null, true));
                    echo "
                    </div>
                    ";
                    // line 153
                    echo "                  </div>
                ";
                }
                // line 155
                echo "                ";
                if ($this->getAttribute(($context["page"] ?? null), "header_top_second", array())) {
                    // line 156
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_second_grid_class"] ?? null), "html", null, true));
                    echo "\">
                    ";
                    // line 158
                    echo "                    <div class=\"clearfix header-top__section header-top-second\">
                      ";
                    // line 159
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_top_second", array()), "html", null, true));
                    echo "
                    </div>
                    ";
                    // line 162
                    echo "                  </div>
                ";
                }
                // line 164
                echo "              </div>
            </div>
            ";
                // line 167
                echo "          </div>
        </div>
        ";
                // line 170
                echo "      ";
            }
            // line 171
            echo "
      ";
            // line 172
            if ((($this->getAttribute(($context["page"] ?? null), "header_first", array()) || $this->getAttribute(($context["page"] ?? null), "header", array())) || $this->getAttribute(($context["page"] ?? null), "header_third", array()))) {
                // line 173
                echo "        ";
                // line 174
                echo "        <header role=\"banner\" class=\"clearfix header ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_background_color"] ?? null), "html", null, true));
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_layout_container_class"] ?? null), "html", null, true));
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_layout_columns_class"] ?? null), "html", null, true));
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
                echo "\">
          <div class=\"";
                // line 175
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_layout_container"] ?? null), "html", null, true));
                echo "\">
            ";
                // line 177
                echo "            <div class=\"clearfix header__container\">
              <div class=\"row\">
                ";
                // line 179
                if ($this->getAttribute(($context["page"] ?? null), "header_third", array())) {
                    // line 180
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_third_grid_class"] ?? null), "html", null, true));
                    echo "\">
                    ";
                    // line 182
                    echo "                    <div class=\"clearfix header__section header-third\">
                      ";
                    // line 183
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_third", array()), "html", null, true));
                    echo "
                    </div>
                    ";
                    // line 186
                    echo "                  </div>
                ";
                }
                // line 188
                echo "                ";
                if ($this->getAttribute(($context["page"] ?? null), "header_first", array())) {
                    // line 189
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_first_grid_class"] ?? null), "html", null, true));
                    echo "\">
                    ";
                    // line 191
                    echo "                    <div class=\"clearfix header__section header-first\">
                      ";
                    // line 192
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_first", array()), "html", null, true));
                    echo "
                    </div>
                    ";
                    // line 195
                    echo "                  </div>
                ";
                }
                // line 197
                echo "                ";
                if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
                    // line 198
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_second_grid_class"] ?? null), "html", null, true));
                    echo "\">
                    ";
                    // line 200
                    echo "                    <div class=\"clearfix header__section header-second\">
                      ";
                    // line 201
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
                    echo "
                    </div>
                    ";
                    // line 204
                    echo "                  </div>
                ";
                }
                // line 206
                echo "              </div>
            </div>
            ";
                // line 209
                echo "          </div>
          ";
                // line 210
                if ((($context["post_progress_status"] ?? null) == "enabled")) {
                    // line 211
                    echo "            ";
                    // line 212
                    echo "            <div class=\"post-progress\">
              <div class=\"post-progress__bar\"></div>
            </div>
            ";
                    // line 216
                    echo "          ";
                }
                // line 217
                echo "        </header>
        ";
                // line 219
                echo "      ";
            }
            // line 220
            echo "
    </div>
    ";
            // line 223
            echo "  ";
        }
        // line 224
        echo "
  ";
        // line 225
        if ($this->getAttribute(($context["page"] ?? null), "banner", array())) {
            // line 226
            echo "    ";
            // line 227
            echo "    <div class=\"clearfix banner ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["banner_background_color"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["banner_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["banner_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      <div class=\"content-banner\">
        ";
            // line 230
            echo "        <div class=\"clearfix banner__container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"banner__section\">
                ";
            // line 234
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "banner", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 240
            echo "      </div>
    </div>
    ";
            // line 243
            echo "  ";
        }
        // line 244
        echo "
  ";
        // line 246
        echo "  <div id=\"page-start\" class=\"clearfix page-start\"></div>

  ";
        // line 248
        if ($this->getAttribute(($context["page"] ?? null), "system_messages", array())) {
            // line 249
            echo "    <div class=\"system-messages clearfix\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
            // line 253
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "system_messages", array()), "html", null, true));
            echo "
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 259
        echo " 

  ";
        // line 262
        echo "  <div id=\"firm\" class=\"section clearfix main-content region--dark-typography region--white-background  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["main_content_separator"] ?? null), "html", null, true));
        echo "\">
    <div class=\"container\">
      <div class=\"clearfix main-content__container\">
        <div class=\"row\">
          <section class=\"col-md-12\">
            ";
        // line 268
        echo "              ";
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 269
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
              ";
        }
        // line 271
        echo "            ";
        // line 272
        echo "          </section>
         
        </div>
      </div>
    </div>
  </div>
  ";
        // line 279
        echo "
  


  ";
        // line 283
        if ($this->getAttribute(($context["page"] ?? null), "featured", array())) {
            // line 284
            echo "    ";
            // line 285
            echo "    <div id=\"stories\" class=\"clearfix featured ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_separator"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      <div class=\"";
            // line 286
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 288
            echo "        <div class=\"clearfix featured__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["featured_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
            echo "\"
          ";
            // line 289
            if ((($context["featured_animations"] ?? null) == "enabled")) {
                // line 290
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_animation_effect"] ?? null), "html", null, true));
                echo "\"
          ";
            }
            // line 291
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              
                ";
            // line 295
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured", array()), "html", null, true));
            echo "
              
            </div>
          </div>
        </div>
        ";
            // line 301
            echo "      </div>
    </div>
    ";
            // line 304
            echo "  ";
        }
        // line 305
        echo "
  ";
        // line 306
        if ($this->getAttribute(($context["page"] ?? null), "featured_bottom", array())) {
            // line 307
            echo "    ";
            // line 308
            echo "    <div id=\"people\" class=\"section clearfix featured-bottom ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_bottom_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_bottom_separator"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      <div class=\"";
            // line 309
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_bottom_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 311
            echo "        <div class=\"clearfix featured-bottom__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["featured_bottom_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
            echo "\"
          ";
            // line 312
            if ((($context["featured_bottom_animations"] ?? null) == "enabled")) {
                // line 313
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_bottom_animation_effect"] ?? null), "html", null, true));
                echo "\"
          ";
            }
            // line 314
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
            
                ";
            // line 318
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_bottom", array()), "html", null, true));
            echo "
              
            </div>
          </div>
        </div>
        ";
            // line 324
            echo "      </div>
    </div>
    ";
            // line 327
            echo "  ";
        }
        // line 328
        echo "
  ";
        // line 329
        if ($this->getAttribute(($context["page"] ?? null), "sub_featured", array())) {
            // line 330
            echo "    ";
            // line 331
            echo "    <div class=\"clearfix sub-featured ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sub_featured_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sub_featured_separator"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sub_featured_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sub_featured_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      <div class=\"";
            // line 332
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sub_featured_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 334
            echo "        <div class=\"clearfix sub-featured__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["sub_featured_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
            echo "\"
          ";
            // line 335
            if ((($context["sub_featured_animations"] ?? null) == "enabled")) {
                // line 336
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sub_featured_animation_effect"] ?? null), "html", null, true));
                echo "\"
          ";
            }
            // line 337
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              
                ";
            // line 341
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sub_featured", array()), "html", null, true));
            echo "
              
            </div>
          </div>
        </div>
        ";
            // line 347
            echo "      </div>
    </div>
    ";
            // line 350
            echo "  ";
        }
        // line 351
        echo "
  ";
        // line 352
        if ($this->getAttribute(($context["page"] ?? null), "highlighted_top", array())) {
            // line 353
            echo "    ";
            // line 354
            echo "    <div id=\"practice\" class=\"section clearfix highlighted-top ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_top_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_top_separator"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_top_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      <div class=\"";
            // line 355
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_top_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 357
            echo "        <div class=\"clearfix highlighted-top__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["highlighted_top_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
            echo "\"
          ";
            // line 358
            if ((($context["highlighted_top_animations"] ?? null) == "enabled")) {
                // line 359
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_top_animation_effect"] ?? null), "html", null, true));
                echo "\"
          ";
            }
            // line 360
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              
                ";
            // line 364
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted_top", array()), "html", null, true));
            echo "
              
            </div>
          </div>
        </div>
        ";
            // line 370
            echo "      </div>
    </div>
    ";
            // line 373
            echo "  ";
        }
        // line 374
        echo "
  ";
        // line 375
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 376
            echo "    ";
            // line 377
            echo "    <div id=\"contact\" class=\"section clearfix highlighted ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_separator"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      <div class=\"";
            // line 378
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 380
            echo "        <div class=\"clearfix highlighted__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["highlighted_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
            echo "\"
          ";
            // line 381
            if ((($context["highlighted_animations"] ?? null) == "enabled")) {
                // line 382
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_animation_effect"] ?? null), "html", null, true));
                echo "\"
          ";
            }
            // line 383
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
             
                ";
            // line 387
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
              
            </div>
          </div>
        </div>
        ";
            // line 393
            echo "      </div>
    </div>
    ";
            // line 396
            echo "  ";
        }
        // line 397
        echo "
  


    ";
        // line 402
        echo "    <footer class=\"clearfix footer ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_background_color"] ?? null), "html", null, true));
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_separator"] ?? null), "html", null, true));
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["scroll_to_top_region"] ?? null), "html", null, true));
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
        echo "\">
      ";
        // line 403
        if ((($context["scroll_to_top_display"] ?? null) && (($context["scroll_to_top_region"] ?? null) == "footer-to-top-enabled"))) {
            // line 404
            echo "        <div class=\"to-top\"><i class=\"fa ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["scroll_to_top_icon"] ?? null), "html", null, true));
            echo "\"></i></div>
      ";
        }
        // line 406
        echo "      <div class=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_layout_container"] ?? null), "html", null, true));
        echo "\">
        <div class=\"clearfix footer__container\">
          <div class=\"row\">
            ";
        // line 409
        if ($this->getAttribute(($context["page"] ?? null), "footer_first", array())) {
            // line 410
            echo "              <div class=\"col-sm-4\">
                ";
            // line 412
            echo "                <div class=\"clearfix footer__section footer-first";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
            echo "\"
                  ";
            // line 413
            if ((($context["footer_animations"] ?? null) == "enabled")) {
                // line 414
                echo "                    data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_animation_effect"] ?? null), "html", null, true));
                echo "\"
                  ";
            }
            // line 415
            echo ">
                  ";
            // line 416
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_first", array()), "html", null, true));
            echo "
                </div>
                ";
            // line 419
            echo "              </div>
            ";
        }
        // line 421
        echo "            ";
        if ($this->getAttribute(($context["page"] ?? null), "footer_second", array())) {
            // line 422
            echo "              <div class=\"col-sm-4\">
                ";
            // line 424
            echo "                <div class=\"clearfix footer__section footer-second";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
            echo "\"
                  ";
            // line 425
            if ((($context["footer_animations"] ?? null) == "enabled")) {
                // line 426
                echo "                    data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_animation_effect"] ?? null), "html", null, true));
                echo "\"
                  ";
            }
            // line 427
            echo ">
                  ";
            // line 428
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_second", array()), "html", null, true));
            echo "
                </div>
                ";
            // line 431
            echo "              </div>
            ";
        }
        // line 433
        echo "            <div class=\"clearfix ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_4_columns_clearfix_first"] ?? null), "html", null, true));
        echo "\"></div>
            ";
        // line 434
        if ($this->getAttribute(($context["page"] ?? null), "footer_third", array())) {
            // line 435
            echo "              <div class=\"col-sm-4\">
                ";
            // line 437
            echo "                <div class=\"clearfix footer__section footer-third";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
            echo "\"
                  ";
            // line 438
            if ((($context["footer_animations"] ?? null) == "enabled")) {
                // line 439
                echo "                    data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_animation_effect"] ?? null), "html", null, true));
                echo "\"
                  ";
            }
            // line 440
            echo ">
                  ";
            // line 441
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_third", array()), "html", null, true));
            echo "
                </div>
                ";
            // line 444
            echo "              </div>
            ";
        }
        // line 446
        echo "           
          </div>
        </div>
      </div>
      
    ";
        // line 452
        echo "    <div class=\"clearfix footer-bottom  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_bottom_separator"] ?? null), "html", null, true));
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["scroll_to_top_region"] ?? null), "html", null, true));
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
        echo "\">
      ";
        // line 453
        if ((($context["scroll_to_top_display"] ?? null) && (($context["scroll_to_top_region"] ?? null) == "footer-bottom-to-top-enabled"))) {
            // line 454
            echo "        
      ";
        }
        // line 456
        echo "      <div class=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_bottom_layout_container"] ?? null), "html", null, true));
        echo "\">
        ";
        // line 458
        echo "        <div class=\"clearfix footer-bottom__container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              
                ";
        // line 462
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_bottom", array()), "html", null, true));
        echo "
             
            </div>
          </div>
        </div>
        ";
        // line 468
        echo "      </div>
    </div>
    ";
        // line 471
        echo "    </footer>
    ";
        // line 473
        echo "




 
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/showcase_lite/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  914 => 473,  911 => 471,  907 => 468,  899 => 462,  893 => 458,  888 => 456,  884 => 454,  882 => 453,  873 => 452,  866 => 446,  862 => 444,  857 => 441,  854 => 440,  848 => 439,  846 => 438,  841 => 437,  838 => 435,  836 => 434,  831 => 433,  827 => 431,  822 => 428,  819 => 427,  813 => 426,  811 => 425,  806 => 424,  803 => 422,  800 => 421,  796 => 419,  791 => 416,  788 => 415,  782 => 414,  780 => 413,  775 => 412,  772 => 410,  770 => 409,  763 => 406,  757 => 404,  755 => 403,  744 => 402,  738 => 397,  735 => 396,  731 => 393,  723 => 387,  717 => 383,  711 => 382,  709 => 381,  704 => 380,  700 => 378,  691 => 377,  689 => 376,  687 => 375,  684 => 374,  681 => 373,  677 => 370,  669 => 364,  663 => 360,  657 => 359,  655 => 358,  650 => 357,  646 => 355,  637 => 354,  635 => 353,  633 => 352,  630 => 351,  627 => 350,  623 => 347,  615 => 341,  609 => 337,  603 => 336,  601 => 335,  596 => 334,  592 => 332,  583 => 331,  581 => 330,  579 => 329,  576 => 328,  573 => 327,  569 => 324,  561 => 318,  555 => 314,  549 => 313,  547 => 312,  542 => 311,  538 => 309,  529 => 308,  527 => 307,  525 => 306,  522 => 305,  519 => 304,  515 => 301,  507 => 295,  501 => 291,  495 => 290,  493 => 289,  488 => 288,  484 => 286,  475 => 285,  473 => 284,  471 => 283,  465 => 279,  457 => 272,  455 => 271,  449 => 269,  446 => 268,  437 => 262,  433 => 259,  424 => 253,  418 => 249,  416 => 248,  412 => 246,  409 => 244,  406 => 243,  402 => 240,  394 => 234,  388 => 230,  380 => 227,  378 => 226,  376 => 225,  373 => 224,  370 => 223,  366 => 220,  363 => 219,  360 => 217,  357 => 216,  352 => 212,  350 => 211,  348 => 210,  345 => 209,  341 => 206,  337 => 204,  332 => 201,  329 => 200,  324 => 198,  321 => 197,  317 => 195,  312 => 192,  309 => 191,  304 => 189,  301 => 188,  297 => 186,  292 => 183,  289 => 182,  284 => 180,  282 => 179,  278 => 177,  274 => 175,  263 => 174,  261 => 173,  259 => 172,  256 => 171,  253 => 170,  249 => 167,  245 => 164,  241 => 162,  236 => 159,  233 => 158,  228 => 156,  225 => 155,  221 => 153,  216 => 150,  213 => 149,  208 => 147,  206 => 146,  202 => 144,  196 => 143,  194 => 142,  189 => 141,  185 => 139,  178 => 138,  176 => 137,  174 => 136,  171 => 135,  168 => 134,  164 => 131,  160 => 128,  156 => 126,  151 => 123,  148 => 122,  143 => 120,  140 => 119,  136 => 117,  131 => 114,  128 => 113,  123 => 111,  121 => 110,  117 => 108,  111 => 107,  109 => 106,  104 => 105,  100 => 103,  93 => 102,  91 => 101,  89 => 100,  85 => 98,  83 => 97,  81 => 96,  77 => 94,  74 => 92,  70 => 89,  67 => 87,  64 => 85,  58 => 81,  54 => 79,  47 => 77,  45 => 76,  43 => 75,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/showcase_lite/templates/page.html.twig", "/opt/lampp/htdocs/bck/themes/showcase_lite/templates/page.html.twig");
    }
}
