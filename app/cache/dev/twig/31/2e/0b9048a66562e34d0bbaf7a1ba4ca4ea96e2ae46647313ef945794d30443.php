<?php

/* atnUserBundle:Form:fieldsCoordonnees.html.twig */
class __TwigTemplate_312e0b9048a66562e34d0bbaf7a1ba4ca4ea96e2ae46647313ef945794d30443 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_label' => array($this, 'block_form_label'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form_label', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('choice_widget_options', $context, $blocks);
    }

    // line 1
    public function block_form_label($context, array $blocks = array())
    {
        // line 2
        echo "
    ";
        // line 3
        if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
            // line 4
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            // line 5
            echo "    ";
        }
        // line 6
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 7
            echo "        ";
            $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            // line 8
            echo "    ";
        }
        echo " 
    <label";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
        ";
        // line 10
        if (((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) == "utilisateurEmailParrain")) {
            // line 11
            echo "            <i class=\"sprite1 inline-block sp-ico-informations2 img-top\"></i>
        ";
        }
        // line 13
        echo "        ";
        echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
        echo "
        ";
        // line 14
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 15
            echo "            <span class=\"error-form\" title=\"Ce champ est obligatoire\">*</span>
        ";
        }
        // line 16
        echo "      
        ";
        // line 17
        if (((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) == "libelleQuestionSecrete")) {
            // line 18
            echo "            <a href=\"javascript:void(0)\" data-toggle=\"tooltip\" class=\"infobulle\" title=\"\" data-original-title=\"La question de sécurite vous permet de modifier ou changer vos coordonnées bancaires\">(?)</a>
        ";
        }
        // line 20
        echo "    </label>
";
    }

    // line 23
    public function block_choice_widget_options($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        ob_start();
        // line 25
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
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
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 26
            echo "            ";
            if (twig_test_iterable($context["choice"])) {
                // line 27
                echo "                <optgroup label=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["group_label"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\">
                    ";
                // line 28
                $context["options"] = $context["choice"];
                // line 29
                echo "                    ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
                </optgroup>
            ";
            } else {
                // line 32
                echo "                ";
                if ((((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) == "paysIndFixe") || ((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) == "paysIndMobile"))) {
                    // line 33
                    echo "                    ";
                    $context["tableauPays"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "tableauPays"), "method");
                    // line 34
                    echo "                    <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                    echo "\" ";
                    if ($this->env->getExtension('form')->isSelectedChoice($context["choice"], (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                        echo "selected=\"selected\"";
                    }
                    echo " data-image=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank.png"), "html", null, true);
                    echo "\" data-imagecss=\"flag ";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tableauPays"]) ? $context["tableauPays"] : $this->getContext($context, "tableauPays")), $this->getAttribute($context["choice"], "value", array()), array(), "array"), "paysCode", array())), "html", null, true);
                    echo "\" data-title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tableauPays"]) ? $context["tableauPays"] : $this->getContext($context, "tableauPays")), $this->getAttribute($context["choice"], "value", array()), array(), "array"), "pays", array()), "html", null, true);
                    echo "\">
                          &nbsp;";
                    // line 35
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tableauPays"]) ? $context["tableauPays"] : $this->getContext($context, "tableauPays")), $this->getAttribute($context["choice"], "value", array()), array(), "array"), "paysCode", array()), "html", null, true);
                    echo " +";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["choice"], "label", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                    echo "
                    </option>
                ";
                } elseif ((                // line 37
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) == "langue")) {
                    // line 38
                    echo "                    ";
                    $context["tableauLangues"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "tableauLangues"), "method");
                    // line 39
                    echo "                    <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                    echo "\" ";
                    if ($this->env->getExtension('form')->isSelectedChoice($context["choice"], (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                        echo "selected=\"selected\"";
                    }
                    echo " data-image=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank.png"), "html", null, true);
                    echo "\" data-imagecss=\"flag ";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tableauLangues"]) ? $context["tableauLangues"] : $this->getContext($context, "tableauLangues")), $this->getAttribute($context["choice"], "value", array()), array(), "array"), "langueCode", array())), "html", null, true);
                    echo "\" data-title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tableauLangues"]) ? $context["tableauLangues"] : $this->getContext($context, "tableauLangues")), $this->getAttribute($context["choice"], "value", array()), array(), "array"), "langue", array()), "html", null, true);
                    echo "\">
                          &nbsp;";
                    // line 40
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["choice"], "label", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                    echo "
                    </option>
                ";
                } else {
                    // line 43
                    echo "                    <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                    echo "\"";
                    if ($this->env->getExtension('form')->isSelectedChoice($context["choice"], (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                        echo " selected=\"selected\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["choice"], "label", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                    echo "</option>
                ";
                }
                // line 45
                echo "            ";
            }
            // line 46
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "atnUserBundle:Form:fieldsCoordonnees.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  225 => 47,  211 => 46,  208 => 45,  196 => 43,  190 => 40,  175 => 39,  172 => 38,  170 => 37,  163 => 35,  148 => 34,  145 => 33,  142 => 32,  135 => 29,  133 => 28,  128 => 27,  125 => 26,  107 => 25,  104 => 24,  101 => 23,  96 => 20,  92 => 18,  90 => 17,  87 => 16,  83 => 15,  81 => 14,  76 => 13,  72 => 11,  70 => 10,  55 => 9,  50 => 8,  47 => 7,  44 => 6,  41 => 5,  38 => 4,  36 => 3,  33 => 2,  30 => 1,  26 => 23,  23 => 22,  21 => 1,);
    }
}
