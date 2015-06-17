<?php

/* atnUserBundle:Manage:index.html.twig */
class __TwigTemplate_839de92ecc62eb296eb09aa85f5f0f1222859b254f87cdb49b3ea4262ab56133 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout_connected.html.twig", "atnUserBundle:Manage:index.html.twig", 1);
        $this->blocks = array(
            'block_content_body' => array($this, 'block_block_content_body'),
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
        echo "    
";
    }

    public function getTemplateName()
    {
        return "atnUserBundle:Manage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
