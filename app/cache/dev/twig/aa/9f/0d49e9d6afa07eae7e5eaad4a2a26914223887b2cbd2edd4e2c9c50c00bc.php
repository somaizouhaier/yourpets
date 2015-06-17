<?php

/* atnAnimalBundle:Animal:block_commentaire.html.twig */
class __TwigTemplate_aa9f0d49e9d6afa07eae7e5eaad4a2a26914223887b2cbd2edd4e2c9c50c00bc extends Twig_Template
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
        // line 1
        echo "
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) ? $context["commentaires"] : $this->getContext($context, "commentaires")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 3
            echo "    ";
            if (array_key_exists("nombre_commentaire", $context)) {
                // line 4
                echo "        <input type=\"hidden\" class=\"numeroCommentaire\" value=\"";
                echo twig_escape_filter($this->env, ((isset($context["nombre_commentaire"]) ? $context["nombre_commentaire"] : $this->getContext($context, "nombre_commentaire")) + $this->getAttribute($context["loop"], "length", array())), "html", null, true);
                echo "\">
    ";
            } else {
                // line 6
                echo "        <input type=\"hidden\" class=\"numeroCommentaire\" value=\"5\">
    ";
            }
            // line 8
            echo "    <input type=\"hidden\" class=\"lengthCommentaire\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "length", array()), "html", null, true);
            echo "\">
    <li class=\"top-alignment ng-scope\">
        <a href=\"/pets/274021\" ng-href=\"/pets/274021\" class=\"left-thumb image-wrapper ng-scope\" style=\"width:32px;height:32px\" ng-switch-default=\"\"> 
            <img src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["commentaire"], "animal", array()), "imageProfile", array()), "href", array())), "html", null, true);
            echo "\" data-original=\"https://d2d0m32kr3hci1.cloudfront.net/unknown_1_160.jpg\" class=\"user-avatar\" width=\"100%\"> 
        </a>
        <div class=\"user-comment\">
            <p class=\"feed-p-comment\"> 
                <strong>
                    <a href=\"/pets/274021\" class=\"ng-binding ng-scope\" ng-href=\"/pets/274021\" ng-switch-default=\"\"> Lollyta </a>
                </strong>
                <span class=\"ng-binding\">
                    ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "labelle", array()), "html", null, true);
            echo "
                </span> </p> 
            <time class=\"date ng-binding\">Hier à 22:00</time>
        </div>
    </li>

";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "atnAnimalBundle:Animal:block_commentaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 19,  59 => 11,  52 => 8,  48 => 6,  42 => 4,  39 => 3,  22 => 2,  19 => 1,);
    }
}
