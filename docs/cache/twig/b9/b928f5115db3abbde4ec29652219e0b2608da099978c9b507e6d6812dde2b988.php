<?php

/* macros.twig */
class __TwigTemplate_5ed42a3e111addd5a4f7e7714d1011522cfd2504948e43e9447b86fbbce665bc extends Twig_Template
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
        // line 4
        echo "
";
        // line 14
        echo "
";
        // line 20
        echo "
";
        // line 26
        echo "
";
        // line 42
        echo "
";
        // line 48
        echo "
";
        // line 56
        echo "
";
        // line 60
        echo "
";
        // line 72
        echo "
";
        // line 93
        echo "
";
    }

    // line 1
    public function getnamespace_link($__namespace__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "namespace" => $__namespace__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "<a href=\"";
            echo $this->env->getExtension('sami')->pathForNamespace($context, (isset($context["namespace"]) ? $context["namespace"] : $this->getContext($context, "namespace")));
            echo "\">";
            echo (isset($context["namespace"]) ? $context["namespace"] : $this->getContext($context, "namespace"));
            echo "</a>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 5
    public function getclass_link($__class__ = null, $__absolute__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "class" => $__class__,
            "absolute" => $__absolute__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 6
            if ($this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "projectclass", array())) {
                // line 7
                echo "<a href=\"";
                echo $this->env->getExtension('sami')->pathForClass($context, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")));
                echo "\">";
            } elseif ($this->getAttribute(            // line 8
(isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "phpclass", array())) {
                // line 9
                echo "<a target=\"_blank\" href=\"http://php.net/";
                echo (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class"));
                echo "\">";
            }
            // line 11
            echo $this->env->getExtension('sami')->abbrClass((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), ((array_key_exists("absolute", $context)) ? (_twig_default_filter((isset($context["absolute"]) ? $context["absolute"] : $this->getContext($context, "absolute")), false)) : (false)));
            // line 12
            if (($this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "projectclass", array()) || $this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "phpclass", array()))) {
                echo "</a>";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 15
    public function getmethod_link($__method__ = null, $__absolute__ = null, $__classonly__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "method" => $__method__,
            "absolute" => $__absolute__,
            "classonly" => $__classonly__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 16
            echo "<a href=\"";
            echo $this->env->getExtension('sami')->pathForMethod($context, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")));
            echo "\">";
            // line 17
            echo $this->env->getExtension('sami')->abbrClass($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "class", array()));
            if ( !((array_key_exists("classonly", $context)) ? (_twig_default_filter((isset($context["classonly"]) ? $context["classonly"] : $this->getContext($context, "classonly")), false)) : (false))) {
                echo "::";
                echo $this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "name", array());
            }
            // line 18
            echo "</a>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 21
    public function getproperty_link($__property__ = null, $__absolute__ = null, $__classonly__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "property" => $__property__,
            "absolute" => $__absolute__,
            "classonly" => $__classonly__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 22
            echo "<a href=\"";
            echo $this->env->getExtension('sami')->pathForProperty($context, (isset($context["property"]) ? $context["property"] : $this->getContext($context, "property")));
            echo "\">";
            // line 23
            echo $this->env->getExtension('sami')->abbrClass($this->getAttribute((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property")), "class", array()));
            if ( !((array_key_exists("classonly", $context)) ? (_twig_default_filter((isset($context["classonly"]) ? $context["classonly"] : $this->getContext($context, "classonly")), true)) : (true))) {
                echo "#";
                echo $this->getAttribute((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property")), "name", array());
            }
            // line 24
            echo "</a>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 27
    public function gethint_link($__hints__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "hints" => $__hints__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 28
            $context["__internal_2d6a48248ef0c202c4712b078d274a3bd257dabbd1a426dc70aa4592c86854f4"] = $this;
            // line 29
            echo "
    ";
            // line 30
            if ((isset($context["hints"]) ? $context["hints"] : $this->getContext($context, "hints"))) {
                // line 31
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["hints"]) ? $context["hints"] : $this->getContext($context, "hints")));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["hint"]) {
                    // line 32
                    if ($this->getAttribute($context["hint"], "class", array())) {
                        // line 33
                        echo $context["__internal_2d6a48248ef0c202c4712b078d274a3bd257dabbd1a426dc70aa4592c86854f4"]->getclass_link($this->getAttribute($context["hint"], "name", array()));
                    } elseif ($this->getAttribute(                    // line 34
$context["hint"], "name", array())) {
                        // line 35
                        echo $this->env->getExtension('sami')->abbrClass($this->getAttribute($context["hint"], "name", array()));
                    }
                    // line 37
                    if ($this->getAttribute($context["hint"], "array", array())) {
                        echo "[]";
                    }
                    // line 38
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo "|";
                    }
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hint'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 43
    public function getsource_link($__project__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "project" => $__project__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 44
            if ($this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "sourcepath", array())) {
                // line 45
                echo "        (<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "sourcepath", array()), "html", null, true);
                echo "\">View source</a>)";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 49
    public function getmethod_source_link($__method__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "method" => $__method__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 50
            if ($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "sourcepath", array())) {
                // line 51
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "sourcepath", array()), "html", null, true);
                echo "\">line ";
                echo $this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "line", array());
                echo "</a>";
            } else {
                // line 53
                echo "        line ";
                echo $this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "line", array());
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 57
    public function getabbr_class($__class__ = null, $__absolute__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "class" => $__class__,
            "absolute" => $__absolute__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 58
            echo "<abbr title=\"";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((((array_key_exists("absolute", $context)) ? (_twig_default_filter((isset($context["absolute"]) ? $context["absolute"] : $this->getContext($context, "absolute")), false)) : (false))) ? ((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class"))) : ($this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "shortname", array()))), "html", null, true);
            echo "</abbr>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 61
    public function getmethod_parameters_signature($__method__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "method" => $__method__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 62
            $context["__internal_99e54e1625a15b695f550e7924057c1758e465a3463dce1aa0801de87fa35076"] = $this->loadTemplate("macros.twig", "macros.twig", 62);
            // line 63
            echo "(";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "parameters", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["parameter"]) {
                // line 65
                if ($this->getAttribute($context["parameter"], "hashint", array())) {
                    echo $context["__internal_99e54e1625a15b695f550e7924057c1758e465a3463dce1aa0801de87fa35076"]->gethint_link($this->getAttribute($context["parameter"], "hint", array()));
                    echo " ";
                }
                // line 66
                echo "\$";
                echo $this->getAttribute($context["parameter"], "name", array());
                // line 67
                if ($this->getAttribute($context["parameter"], "default", array())) {
                    echo " = ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["parameter"], "default", array()), "html", null, true);
                }
                // line 68
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parameter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo ")";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 73
    public function getrender_classes($__classes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "classes" => $__classes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 74
            $context["__internal_9db1bdb85dabf4639367ebeb2f668ddba48cc1b2fbe1593c6f14453c306992da"] = $this;
            // line 75
            echo "
    <div class=\"container-fluid underlined\">
        ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")));
            foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                // line 78
                echo "            <div class=\"row\">
                <div class=\"col-md-6\">
                    ";
                // line 80
                if ($this->getAttribute($context["class"], "isInterface", array())) {
                    // line 81
                    echo "                        <em>";
                    echo $context["__internal_9db1bdb85dabf4639367ebeb2f668ddba48cc1b2fbe1593c6f14453c306992da"]->getclass_link($context["class"], true);
                    echo "</em>
                    ";
                } else {
                    // line 83
                    echo "                        ";
                    echo $context["__internal_9db1bdb85dabf4639367ebeb2f668ddba48cc1b2fbe1593c6f14453c306992da"]->getclass_link($context["class"], true);
                    echo "
                    ";
                }
                // line 85
                echo "                </div>
                <div class=\"col-md-6\">
                    ";
                // line 87
                echo $this->env->getExtension('sami')->parseDesc($context, $this->getAttribute($context["class"], "shortdesc", array()), $context["class"]);
                echo "
                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "    </div>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 94
    public function getbreadcrumbs($__namespace__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "namespace" => $__namespace__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 95
            echo "    ";
            $context["current_ns"] = "";
            // line 96
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, (isset($context["namespace"]) ? $context["namespace"] : $this->getContext($context, "namespace")), "\\"));
            foreach ($context['_seq'] as $context["_key"] => $context["ns"]) {
                // line 97
                echo "        ";
                if ((isset($context["current_ns"]) ? $context["current_ns"] : $this->getContext($context, "current_ns"))) {
                    // line 98
                    echo "            ";
                    $context["current_ns"] = (((isset($context["current_ns"]) ? $context["current_ns"] : $this->getContext($context, "current_ns")) . "\\") . $context["ns"]);
                    // line 99
                    echo "        ";
                } else {
                    // line 100
                    echo "            ";
                    $context["current_ns"] = $context["ns"];
                    // line 101
                    echo "        ";
                }
                // line 102
                echo "        <li><a href=\"";
                echo $this->env->getExtension('sami')->pathForNamespace($context, (isset($context["current_ns"]) ? $context["current_ns"] : $this->getContext($context, "current_ns")));
                echo "\">";
                echo $context["ns"];
                echo "</a></li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ns'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  528 => 102,  525 => 101,  522 => 100,  519 => 99,  516 => 98,  513 => 97,  508 => 96,  505 => 95,  493 => 94,  482 => 91,  472 => 87,  468 => 85,  462 => 83,  456 => 81,  454 => 80,  450 => 78,  446 => 77,  442 => 75,  440 => 74,  428 => 73,  417 => 70,  401 => 68,  396 => 67,  393 => 66,  388 => 65,  371 => 64,  369 => 63,  367 => 62,  355 => 61,  340 => 58,  327 => 57,  314 => 53,  307 => 51,  305 => 50,  293 => 49,  279 => 45,  277 => 44,  264 => 43,  238 => 38,  234 => 37,  231 => 35,  229 => 34,  227 => 33,  225 => 32,  208 => 31,  206 => 30,  203 => 29,  201 => 28,  189 => 27,  178 => 24,  172 => 23,  168 => 22,  154 => 21,  143 => 18,  137 => 17,  133 => 16,  119 => 15,  106 => 12,  104 => 11,  99 => 9,  97 => 8,  93 => 7,  91 => 6,  78 => 5,  63 => 2,  51 => 1,  46 => 93,  43 => 72,  40 => 60,  37 => 56,  34 => 48,  31 => 42,  28 => 26,  25 => 20,  22 => 14,  19 => 4,);
    }
}
/* {% macro namespace_link(namespace) -%}*/
/*     <a href="{{ namespace_path(namespace) }}">{{ namespace|raw }}</a>*/
/* {%- endmacro %}*/
/* */
/* {% macro class_link(class, absolute) -%}*/
/*     {%- if class.projectclass -%}*/
/*         <a href="{{ class_path(class) }}">*/
/*     {%- elseif class.phpclass -%}*/
/*         <a target="_blank" href="http://php.net/{{ class|raw }}">*/
/*     {%- endif %}*/
/*     {{- abbr_class(class, absolute|default(false)) }}*/
/*     {%- if class.projectclass or class.phpclass %}</a>{% endif %}*/
/* {%- endmacro %}*/
/* */
/* {% macro method_link(method, absolute, classonly) -%}*/
/*     <a href="{{ method_path(method) }}">*/
/*         {{- abbr_class(method.class) }}{% if not classonly|default(false) %}::{{ method.name|raw }}{% endif -%}*/
/*     </a>*/
/* {%- endmacro %}*/
/* */
/* {% macro property_link(property, absolute, classonly) -%}*/
/*     <a href="{{ property_path(property) }}">*/
/*         {{- abbr_class(property.class) }}{% if not classonly|default(true) %}#{{ property.name|raw }}{% endif -%}*/
/*     </a>*/
/* {%- endmacro %}*/
/* */
/* {% macro hint_link(hints) -%}*/
/*     {% from _self import class_link %}*/
/* */
/*     {% if hints %}*/
/*         {%- for hint in hints %}*/
/*             {%- if hint.class %}*/
/*                 {{- class_link(hint.name) }}*/
/*             {%- elseif hint.name %}*/
/*                 {{- abbr_class(hint.name) }}*/
/*             {%- endif %}*/
/*             {%- if hint.array %}[]{% endif %}*/
/*             {%- if not loop.last %}|{% endif %}*/
/*         {%- endfor %}*/
/*     {%- endif %}*/
/* {%- endmacro %}*/
/* */
/* {% macro source_link(project, class) -%}*/
/*     {% if class.sourcepath %}*/
/*         (<a href="{{ class.sourcepath }}">View source</a>)*/
/*     {%- endif %}*/
/* {%- endmacro %}*/
/* */
/* {% macro method_source_link(method) -%}*/
/*     {% if method.sourcepath %}*/
/*         <a href="{{ method.sourcepath }}">line {{ method.line|raw }}</a>*/
/*     {%- else %}*/
/*         line {{ method.line|raw }}*/
/*     {%- endif %}*/
/* {%- endmacro %}*/
/* */
/* {% macro abbr_class(class, absolute) -%}*/
/*     <abbr title="{{ class }}">{{ absolute|default(false) ? class : class.shortname }}</abbr>*/
/* {%- endmacro %}*/
/* */
/* {% macro method_parameters_signature(method) -%}*/
/*     {%- from "macros.twig" import hint_link -%}*/
/*     (*/
/*         {%- for parameter in method.parameters %}*/
/*             {%- if parameter.hashint %}{{ hint_link(parameter.hint) }} {% endif -%}*/
/*             ${{ parameter.name|raw }}*/
/*             {%- if parameter.default %} = {{ parameter.default }}{% endif %}*/
/*             {%- if not loop.last %}, {% endif %}*/
/*         {%- endfor -%}*/
/*     )*/
/* {%- endmacro %}*/
/* */
/* {% macro render_classes(classes) -%}*/
/*     {% from _self import class_link %}*/
/* */
/*     <div class="container-fluid underlined">*/
/*         {% for class in classes %}*/
/*             <div class="row">*/
/*                 <div class="col-md-6">*/
/*                     {% if class.isInterface %}*/
/*                         <em>{{ class_link(class, true) }}</em>*/
/*                     {% else %}*/
/*                         {{ class_link(class, true) }}*/
/*                     {% endif %}*/
/*                 </div>*/
/*                 <div class="col-md-6">*/
/*                     {{ class.shortdesc|desc(class) }}*/
/*                 </div>*/
/*             </div>*/
/*         {% endfor %}*/
/*     </div>*/
/* {%- endmacro %}*/
/* */
/* {% macro breadcrumbs(namespace) %}*/
/*     {% set current_ns = '' %}*/
/*     {% for ns in namespace|split('\\') %}*/
/*         {% if current_ns %}*/
/*             {% set current_ns = current_ns ~ '\\' ~ ns %}*/
/*         {% else %}*/
/*             {% set current_ns = ns %}*/
/*         {% endif %}*/
/*         <li><a href="{{ namespace_path(current_ns) }}">{{ ns|raw }}</a></li>*/
/*     {% endfor %}*/
/* {% endmacro %}*/
/* */
