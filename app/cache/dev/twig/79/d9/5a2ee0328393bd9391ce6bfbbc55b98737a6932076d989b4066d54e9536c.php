<?php

/* atnMainBundle:Home:index.html.twig */
class __TwigTemplate_79d95a2ee0328393bd9391ce6bfbbc55b98737a6932076d989b4066d54e9536c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("atnUserBundle::layout.html.twig", "atnMainBundle:Home:index.html.twig", 1);
        $this->blocks = array(
            'user_content' => array($this, 'block_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "atnUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_user_content($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"yp-landing__hero-content\">
        <video autoplay=\"\" poster=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/sikou.png"), "html", null, true);
        echo "\" preload=\"auto\" id=\"video\" style=\"width: 100%\"> 
            <source src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("video/video_sikou.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\"> 
            <source src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("video/video_sikou.webm"), "html", null, true);
        echo "\" type=\"video/webm\"> 
        </video>
    </div>
    <script>
        var aud = document.getElementById('video');
        aud.currentTime = 0.2;
        aud.addEventListener(\"ended\", function () {
            this.currentTime = 0.2;
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "atnMainBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  38 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
