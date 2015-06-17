<?php

/* atnUserBundle::layout.html.twig */
class __TwigTemplate_1da4ec79d8a55d2c8c8c4def1baa2a7c4da6cc1bc76a5fa88415d3a56a50a475 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "atnUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'block_body' => array($this, 'block_block_body'),
            'user_content' => array($this, 'block_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <div>
        ";
        // line 4
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 5
            echo "            <form action=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                <button  type=\"submit\" class=\"btn btn-default\">Déconnexion</button>

            </form>
            
        ";
        } else {
            // line 11
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\"></a>
        ";
        }
        // line 13
        echo "    </div> 

    ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 16
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 17
                echo "            <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                ";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
    <div>
        ";
        // line 24
        $this->displayBlock('user_content', $context, $blocks);
        // line 26
        echo "    </div>

";
    }

    // line 24
    public function block_user_content($context, array $blocks = array())
    {
        // line 25
        echo "        ";
    }

    public function getTemplateName()
    {
        return "atnUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 25,  98 => 24,  92 => 26,  90 => 24,  86 => 22,  80 => 21,  71 => 18,  66 => 17,  61 => 16,  57 => 15,  53 => 13,  47 => 11,  37 => 5,  35 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }
}
