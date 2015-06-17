<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_b9b4a2a06abe2bc4c983c16779e91ab24a99ee106ebf65d06daf0bb3e04a4785 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        // line 3
        echo "Valider l'inscription
";
    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        // line 8
        echo "    Bonjour ";
        echo $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array());
        echo " 
    <a href=\"";
        // line 9
        echo (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"));
        echo "\">cliquerici</a>
";
    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  52 => 12,  46 => 9,  41 => 8,  38 => 6,  33 => 3,  30 => 1,  26 => 12,  24 => 6,  22 => 1,);
    }
}
