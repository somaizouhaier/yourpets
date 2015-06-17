<?php

/* ::navbarPrincipal.html.twig */
class __TwigTemplate_76686b3608fc2fe1b62fa41fd27739cf171ae667aa605689bda5c3a8e3d11e81 extends Twig_Template
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
<nav class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Amimal</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Amimal</a>
        </div>

        <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"#\">";
        // line 15
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "Communauté"), "html", null, true);
        echo "</a></li>
            <li class=\"\"><a href=\"#\">";
        // line 16
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "annonces"), "html", null, true);
        echo "</a></li>
            <li class=\"\"><a href=\"#\">";
        // line 17
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "évenement"), "html", null, true);
        echo "</a></li>
        </ul>
        <div class=\"nav navbar-nav navbar-right\">
            ";
        // line 20
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 21
            echo "                 <li class=\"\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" id=\"a_connecter\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, "Déconnexion"), "html", null, true);
            echo "</a></li>
            ";
        } elseif ( !$this->getAttribute(        // line 22
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 23
            echo "                <li class=\"\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\" id=\"a_connecter\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, "Se connecter"), "html", null, true);
            echo "</a></li>
            <li class=\"\"><a href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\" id=\"a_register\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, "S'enregistrer"), "html", null, true);
            echo "</a></li>

            ";
        }
        // line 27
        echo "                    </div>
    </div>
</nav>
<script></script>



<!---------------------------connexion avec ajax----------------------->
";
    }

    public function getTemplateName()
    {
        return "::navbarPrincipal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 27,  67 => 24,  60 => 23,  58 => 22,  51 => 21,  49 => 20,  43 => 17,  39 => 16,  35 => 15,  19 => 1,);
    }
}
