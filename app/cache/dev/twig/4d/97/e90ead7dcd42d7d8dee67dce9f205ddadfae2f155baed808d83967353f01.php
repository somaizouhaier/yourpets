<?php

/* ::layout_global.html.twig */
class __TwigTemplate_4d97e90ead7dcd42d7d8dee67dce9f205ddadfae2f155baed808d83967353f01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "::layout_global.html.twig", 1);
        $this->blocks = array(
            'block_body' => array($this, 'block_block_body'),
            'block_left_menu' => array($this, 'block_block_left_menu'),
            'block_header' => array($this, 'block_block_header'),
            'block_content_body' => array($this, 'block_block_content_body'),
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
        echo "    <div class=\"main-container community-logged\">
        <div class=\"container main \">
        ";
        // line 5
        $this->displayBlock('block_left_menu', $context, $blocks);
        // line 8
        echo "        ";
        $this->displayBlock('block_header', $context, $blocks);
        // line 9
        echo "        ";
        $this->displayBlock('block_content_body', $context, $blocks);
        // line 10
        echo "
        </div>
    </div>

";
    }

    // line 5
    public function block_block_left_menu($context, array $blocks = array())
    {
        // line 6
        echo "            ";
        $this->loadTemplate("atnUserBundle:Manage:left_menu_profil.html.twig", "::layout_global.html.twig", 6)->display($context);
        // line 7
        echo "        ";
    }

    // line 8
    public function block_block_header($context, array $blocks = array())
    {
    }

    // line 9
    public function block_block_content_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::layout_global.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 9,  64 => 8,  60 => 7,  57 => 6,  54 => 5,  46 => 10,  43 => 9,  40 => 8,  38 => 5,  34 => 3,  31 => 2,  11 => 1,);
    }
}
