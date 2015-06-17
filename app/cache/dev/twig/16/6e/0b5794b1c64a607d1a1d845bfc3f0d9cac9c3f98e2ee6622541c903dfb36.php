<?php

/* ::layout_connected.html.twig */
class __TwigTemplate_166e0b5794b1c64a607d1a1d845bfc3f0d9cac9c3f98e2ee6622541c903dfb36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "::layout_connected.html.twig", 1);
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

    // line 3
    public function block_block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"main-container community-logged\">
        <div class=\"container main \">
            ";
        // line 6
        $this->displayBlock('block_left_menu', $context, $blocks);
        // line 9
        echo "            <div class=\"community-layout-main profile-main\">
            ";
        // line 10
        $this->displayBlock('block_header', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('block_content_body', $context, $blocks);
        // line 17
        echo "            </div>

    </div>
</div>

";
    }

    // line 6
    public function block_block_left_menu($context, array $blocks = array())
    {
        // line 7
        echo "                ";
        $this->loadTemplate("atnUserBundle:Manage:left_menu_profil.html.twig", "::layout_connected.html.twig", 7)->display($context);
        // line 8
        echo "            ";
    }

    // line 10
    public function block_block_header($context, array $blocks = array())
    {
        // line 11
        echo "                    <header class=\"profile-title ng-scope\"> 
                        <h1 class=\"ng-binding\">";
        // line 12
        echo "page Actuel";
        echo "</h1> 
                    </header>
            ";
    }

    // line 15
    public function block_block_content_body($context, array $blocks = array())
    {
        // line 16
        echo "        ";
    }

    public function getTemplateName()
    {
        return "::layout_connected.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 16,  80 => 15,  73 => 12,  70 => 11,  67 => 10,  63 => 8,  60 => 7,  57 => 6,  48 => 17,  45 => 15,  43 => 10,  40 => 9,  38 => 6,  34 => 4,  31 => 3,  11 => 1,);
    }
}
