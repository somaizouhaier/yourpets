<?php

/* atnAnimalBundle:Animal:list.html.twig */
class __TwigTemplate_7876a53cc9d6634ff47599ea4bd14459f4a14c970712f81829ff202c76d8cfe7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout_connected.html.twig", "atnAnimalBundle:Animal:list.html.twig", 1);
        $this->blocks = array(
            'block_content_body' => array($this, 'block_block_content_body'),
            'block_header' => array($this, 'block_block_header'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout_connected.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_block_content_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"profil-content\">
        <div class=\"user-pets\">
            <ul class=\"user-pets-listing\">
                ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["animals"]) ? $context["animals"] : $this->getContext($context, "animals")));
        foreach ($context['_seq'] as $context["_key"] => $context["animal"]) {
            // line 8
            echo "                <li>
                    <div class=\"user-pets-choice\">
                        <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atn_amimal_profil", array("id" => $this->getAttribute($context["animal"], "id", array()))), "html", null, true);
            echo "\"class=\"img-circle\"> 
                            <img src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["animal"], "imageProfile", array()), "href", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["animal"], "imageProfile", array()), "alt", array()), "html", null, true);
            echo "\" class=\"user-avatar\"> 
                        </a>
                        <div class=\"user-petname-wrapper\"> 
                            <strong class=\"museo-title ng-binding\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["animal"], "pseudo", array()), "html", null, true);
            echo "</strong> 
                        </div>
                        <div class=\"choose-pet-btn-wrapper\"> 
                            <a class=\"yp-btn yp-btn--smaller choose-pet-btn\" >Choisir cet animal</a> 
                        </div>
                    </div>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['animal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
            </ul>

        </div>
    </div>
";
    }

    // line 28
    public function block_block_header($context, array $blocks = array())
    {
        // line 29
        echo "    <header class=\"profile-title ng-scope\"> 
        <h1 class=\"ng-binding\">Mes animaux</h1> 
    </header>
    <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("atn_amimal_add");
        echo "\" ui-sref=\"petsNew\" class=\"pet-cta yp-btn ng-binding\">Ajouter un animal</a>
";
    }

    public function getTemplateName()
    {
        return "atnAnimalBundle:Animal:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 32,  83 => 29,  80 => 28,  71 => 22,  57 => 14,  49 => 11,  45 => 10,  41 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
