<?php

/* atnUserBundle:Profile:edit.html.twig */
class __TwigTemplate_850cf6501652f1459cf32f19600406749fcbdc74b0c604a2aeeee9a05c59f54b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout_connected.html.twig", "atnUserBundle:Profile:edit.html.twig", 1);
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
        echo "    ";
        $this->loadTemplate("atnUserBundle:Profile:edit_content.html.twig", "atnUserBundle:Profile:edit.html.twig", 4)->display($context);
    }

    public function getTemplateName()
    {
        return "atnUserBundle:Profile:edit.html.twig";
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
